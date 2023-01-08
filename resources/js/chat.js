import { message } from "laravel-mix/src/Log.js";
import "./chatting.js";
import { v4 as uuidv4 } from "uuid";

let page = 1;
let last = false;

$(document).ready(function () {
    $(".chat-list a").click(function (e) {
        e.preventDefault();
        showChatBox();
        if ($(this).hasClass("active")) {
            return;
        }
        const chatId = $(this).data("chat");

        setOnlyThisActive(chatId);
        fetchMessages(chatId);
        return false;
    });
    $(".chat-icon").click(function () {
        $(".chatbox").removeClass("showbox");
    });
});

function fetchMessages(chat) {
    window.rebound({
        url: message_url,
        method: "GET",
        processData: true,
        block: false,
        logging: false,
        data: {
            chat_id: chat,
        },
        notification: false,
        successCallback: (response) => {
            setChatData(response);
        },
    });
}

function showChatBox() {
    $(".chatbox input,.chatbox button").attr("disabled", true);
    $(".chatbox").addClass("showbox");
    $(".chatbox .modal-content").removeClass("d-none").attr("hidden", false);
    $(".chatbox .empty__box").addClass("d-none").attr("hidden", true);
}

function setOnlyThisActive(id) {
    $(".chat-list a").removeClass("active");
    $(`a[data-chat=${id}]`).addClass("active").removeClass("unread");
}

function setChatData(response) {
    const user_avatar =
        response.chat_data.user.images ??
        "https://ui-avatars.com/api/?name=" + response.chat_data.user.name;
    $("[data-user-image]").html(` <img class="img-fluid rounded-circle"
  height="50"
    width="50"
    src="${user_avatar}"
    alt="user img">`);

    $("[data-chat-name]").html(` <h3>${response.chat_data.user.name}</h3>
    <small>${response.chat_data.name}</small>`);
    $(".chatbox input,.chatbox button").attr("disabled", false);
    $("#message-box [name='id']").val(response.chat_data.id);
    $("#message-box [name='to']").val(response.chat_data.user.uuid);

    $("[data-messages]").html(response.html);
    scrollToBottom();
}

$("#message-box").submit(function (e) {
    e.preventDefault();
    const message = $('#message-box [name="message"]').val();
    const images = $('#message-box [name="images[]"]').val();
    const videos = $('#message-box [name="videos[]"]').val();
    const files = $('#message-box [name="files[]"]').val();
    const id = $('#message-box [name="id"]').val();
    const to = $('#message-box [name="to"]').val();

    const msg_uuid = uuidv4();
    if (!id || id == "" || id == "undefined") {
        console.error("Chat id not found");
        return;
    }

    if (!to || to == "" || to == "undefined") {
        console.error("Target user not found");
        return;
    }

    if (!message && !images && !videos && !files) {
        console.log(!message && !images && !videos && !files);
        console.log('No message or files found');
        return null;
    }

    window.rebound({
        url: send_url,
        method: "POST",
        form: $(this),
        reset: false,
        notification: false,
        block: false,
        logging: false,
        appendData: {
            uuid: msg_uuid,
        },
        beforeSendCallback: () => {
            $('#message-box [name="message"]').val("");
            appendMessage(msg_uuid);
            scrollToBottom();
        },
        successCallback: (response) => {
            console.log(response);
            $('#images').val("");
            $(`[data-msg-id=${msg_uuid}] [data-msg-status]`).html(
                `<i class="fa fa-check-double"></i>`
            );

            $(`[data-msg-id=${msg_uuid}] .chat-content`).prepend(response.dropdown);
        },
    });
});

function appendMessage(uuid = null) {
    //d M y, h:i a formate

    const message = $('#message').val();
    const images = $('#images')[0].files;

    const time = new Date().toLocaleString("en-US", {
        day: "numeric",
        month: "short",
        year: "numeric",
        hour: "numeric",
        minute: "numeric",
        hour12: true,
    });
    let html = `
<li data-msg-id="${uuid}" class="reply">
<div class="chat-content">`;

    if (message) {
        html += ` <p class="m-0 chat-message">${message}</p>`;
    }

    if (images.length !== 0) {
        for (let i = 0; i < images.length; i++) {
            html += `
            <img class="chat-img" src="${URL.createObjectURL(images[i])}" alt="image">
            `;
        }
    }

    html += `<div class="time d-flex d-flex w-100 justify-content-end">
        <span class="color-white opacity-05">
            ${time}
        </span>
        <span data-msg-status class="ms-2 d-flex align-items-center color-white">
            <i class="fa fa-clock"></i>
        </span>
    </div>
</div>
</li>
`;


    $("[data-messages]").append(html);
}

function scrollToBottom() {
    $("#chat-holder").animate(
        { scrollTop: $("#chat-holder")[0].scrollHeight },
        100
    );
}

/*
|--------------------------------------------------------------------------
| Load More Messages
|--------------------------------------------------------------------------
|
| Load more messages when user scroll up
|
*/

$("#chat-holder").scroll(function () {
    if (this.scrollTop + 100 <= this.scrollHeight - this.offsetHeight) {
    }

    if (
        $("#chat-holder").scrollTop() + $("#chat-holder").height() ==
        $("#chat-holder").height()
    ) {
        if (last) {
            return;
        }

        $(".chat-loading-state").removeClass("d-none");

        window.rebound({
            url: load_url,
            method: "GET",
            processData: true,
            block: false,
            logging: false,
            data: {
                chat_id: $(".chat__item.active").data("chat"),
                page: page++,
            },
            notification: false,
            successCallback: (response) => {
                $(".chat-loading-state").addClass("d-none");
                if (response.html === "") {
                    last = true;
                    return;
                }
                const old_position = $("[data-messages]").height();

                $(response.html).hide().prependTo("[data-messages]").fadeIn("slow");
                console.log($("[data-messages]").height(), old_position);
                $("#chat-holder").scrollTop(
                    $("[data-messages]").height() - old_position
                );
                page++;
            },
        });
    }
});

/*
|--------------------------------------------------------------------------
| Share button
|--------------------------------------------------------------------------
*/
window.addEventListener("DOMContentLoaded", () => {
    const share = new ShareButton("#share-btn");
    window.shareBtn = share;
});

class ShareButton {
    constructor(qs) {
        this.button = document.querySelector(qs);
        this.openClass = "share__btn--open";

        this.button?.addEventListener("click", this.toggle.bind(this));
        window.addEventListener("keydown", this.close.bind(this));
    }
    close() {

        this.button?.classList.remove(this.openClass);
        this.updateTitle();

    }
    toggle() {
        this.button?.classList.toggle(this.openClass);
        this.updateTitle();
    }
    updateTitle() {
        const open = this.button?.classList.contains(this.openClass);

        this.button.title = open ? "Close" : "Share";
    }
}


const fileInput = document.querySelector('#images');
const previewer = document.querySelector('#uploader-body');

$(fileInput).change(function (e) {
    e.preventDefault();
    const files = this.files;
    console.log(files);
    $(previewer).html('');
    if (files.length === 0) {
        console.log(files);
        return;
    }
    window.shareBtn.close();
    let html = `<div class="row match-height">`;
    for (let i = 0; i < files.length; i++) {
        html += `
             <div class="preview-wrapper col-md-12 mb-2">
                <div class="image-preview position-relative">
                    <img class="h-100" src="${URL.createObjectURL(files[i])}" alt="preview image" />
                    <button class="remove-preview">
                    <i data-rm="${i}" class=" feather-x fs-7"></i>
                    </button>
                </div>
            </div>
            `;
    }
    html += `</div>`;
    $(previewer).append(html);
    $('#upload-modal').modal('show');
});

$(document).on('click', '[data-rm]', function (e) {
    e.preventDefault();
    const itr = $(this).data('rm');
    $(this).closest('.preview-wrapper').remove();

    if ($('.preview-wrapper').length === 0) {
        $('#upload-modal').modal('hide');
    }
    $(fileInput).val('').trigger('change');

});


