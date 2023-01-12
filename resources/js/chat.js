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
  $("[data-create-contract]").attr("data-create-contract", id);
  console.log(id);
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
  const message = sanitize($('#message-box [name="message"]').val());
  const images = $('#message-box [name="images[]"]').val();
  const videos = $('#message-box [name="videos[]"]').val();
  const files = $('#message-box [name="files[]"]').val();
  const id = $('#message-box [name="id"]').val();
  const to = $('#message-box [name="to"]').val();

  if (isStringDirty(message)) {
    Notiflix.Notify.failure(
      "Don't try to be smart!, Your action has been reported."
    );
    $("#message-box [name='message']").val("");
    return;
  }

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
    console.log("No message or files found");
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
      appendMessage(msg_uuid);
      $("#upload-modal").modal("hide");
      $("#uploader-body").html("");
      scrollToBottom();
    },
    successCallback: (response) => {
      console.log(response);
      $.each($('#message-box [name="images[]"]'), function (i, el) {
        if (i > 0) {
          el.remove();
        } else {
          $(el).val("");
        }
      });

      $(`[data-msg-id="${msg_uuid}"]`).replaceWith(response.html);
    },
  });
});

async function appendMessage(uuid = null) {
  const message = sanitize($('#message-box [name="message"]').val());
  $('#message-box [name="message"]').val("");
  const replied = $("#reply_to").val();

  const time = new Date().toLocaleString("en-US", {
    day: "numeric",
    month: "short",
    year: "2-digit",
    hour: "numeric",
    minute: "numeric",
    hour12: true,
  });

  let html = `
<li data-msg-id="${uuid}" class="reply">
<div class="chat-content">`;

  if (replied) {
    const reply_content = $(".reply-data .reply-content").html();
    console.log(reply_content);
    html += `<div class="reply-content mb-1">${reply_content}</div>`;
  }

  if ($('#message-box [name="images[]"]')[0].files[0]) {
    $.map($('#message-box [name="images[]"]'), function (el, i) {
      html += `
        <img class="chat-img" src="${URL.createObjectURL(
          el.files[0]
        )}" alt="image">
        `;
    });
  }

  if (message) {
    html += ` <p class="m-0 chat-message">${message
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/(<([^>]+)>)/gi, "")}</p>`;
  }

  html += `<div class="time d-flex d-flex w-100 justify-content-end">
        <span class="color-white opacity-0">
            ${time}
        </span>
        <span data-msg-status class="ms-2 d-flex align-items-center color-white">
            <i class="fa fa-clock"></i>
        </span>
    </div>
</div>
</li>
`;
  $('#message-box [name="images[]"]').val("");
  $("[data-messages]").append(html);
  $("#close-reply").click();
  scrollToBottom();
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

const previewer = document.querySelector("#uploader-body");

$(document).on("change", '#message-box [name="images[]"]', function (e) {
  e.preventDefault();
  const files = document.querySelectorAll('#message-box [name="images[]"]');
  $(previewer).html("");
  if (files.length === 0) {
    console.log("No files");
    return;
  }
  window.shareBtn.close();
  let html = `<div class="row match-height">`;
  files.forEach((element, i) => {
    console.log(element);

    html += `
            <div class="preview-wrapper col-md-6 mb-2">
                    <div class="image-preview position-relative">
                            <img class="h-100" src="${URL.createObjectURL(
                              element.files[0]
                            )}" alt="preview image" />
                            <button class="remove-preview">
                            <i data-rm="${i}" class=" feather-x fs-7"></i>
                            </button>
                        </div>
                    </div>
                    `;
  });

  if (files.length < 4) {
    html += `<div class="col-12">
                <button class="add-new-image-btn">
                        Add
                        <i class="feather-plus"></i>
                </button>
            </div>`;
  }

  html += `<div class="col-12 mt-1">
                <button type="submit" form="message-box" class="btn file-submit-btn">
                        Send
                        <i class="feather-send"></i>
                </button>
            </div>
        </div>`;
  $(previewer).append(html);
  $("#upload-modal").modal("show");
});

$(document).on("click", "[data-rm]", function (e) {
  e.preventDefault();
  const itr = $(this).data("rm");
  $(this).closest(".preview-wrapper").remove();

  if ($(".preview-wrapper").length === 0) {
    $("#upload-modal").modal("hide");
  }
  if (itr > 0) {
    $('#message-box [name="images[]"]')[itr].remove();
  }

  if (!$("#uploader-body > div").has(".add-new-image-btn").length) {
    console.log("No");
    $("#uploader-body > div > div:last-child").before(`<div class="col-12">
                <button class="add-new-image">
                        Add
                </button>
            </div>`);
  }
});

$(document).on("click", ".add-new-image-btn", function (e) {
  var input = document.createElement("input");
  input.type = "file";
  input.accept = "image/*";
  input.name = "images[]";
  input.hidden = true;
  document.querySelector("#message-box").appendChild(input);
  input.click();
});

/*
|--------------------------------------------------------------------------
| Reply
|--------------------------------------------------------------------------
*/
$(document).on("click", "[data-msg-reply]", function (e) {
  e.preventDefault();
  const id = $(this).data("msg-reply");
  $("#reply_to").val(id);
  const message = $(this).closest(".chat-content").find(".chat-message").text();
  const chat_images = $(this).closest(".chat-content").find(".chat-img");

  console.log(chat_images, chat_images.length, message);
  let message_html = "";
  $(".reply-data .reply-content").html("");
  if (message) {
    message_html = `<p class="mb-0">${message}</p>`;
  }
  let image_html = "";
  if (chat_images.length > 0) {
    image_html = '<div class="reply-image-holder">';

    $.map(chat_images.slice(0, 2), function (el, i) {
      image_html += `<img class="ms-1 reply-img" src="${el.src}" alt="image" />`;
    });
    image_html += "</div>";
  }
  $(".reply-data .reply-content").append(message_html + image_html);
  $('#message-box [name="message"]').focus();
  $(".reply-data").removeClass("reply-data-collapsed").addClass("h-auto");
});

$("#close-reply").click(function (e) {
  e.preventDefault();
  $("#reply_to").val("");
  $(".reply-data").addClass("reply-data-collapsed").removeClass("h-auto");

  setTimeout(() => {
    $(".reply-data .reply-message").text("");
  }, 1000);
});

function sanitize(str) {
  return str
    .replace(/<script[^>]*?>.*?<\/script>/gi, "")
    .replace(/<[\/\!]*?[^<>]*?>/gi, "");
}

function isStringDirty(str) {
  return /<script[^>]*?>.*?<\/script>/gi.test(str);
}
