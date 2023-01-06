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
  const id = $('#message-box [name="id"]').val();
  const to = $('#message-box [name="to"]').val();

  const msg_uuid = uuidv4();
  if (!id || id == "" || id == "undefined") {
    console.error("Chat id not found");
    return;
  }
  if (!message || message == "" || message == "undefined") {
    console.error("Message not found");
    return;
  }

  if (!to || to == "" || to == "undefined") {
    console.error("Target user not found");
    return;
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
      appendMessage(message, msg_uuid);
      scrollToBottom();
    },
    successCallback: (response) => {
      console.log(response);

      $(`[data-msg-id=${msg_uuid}] [data-msg-status]`).html(
        `<i class="fa fa-check-double"></i>`
      );

      $(`[data-msg-id=${msg_uuid}] .chat-content`).prepend(response.dropdown);
    },
  });
});

function appendMessage(message, uuid = null) {
  //d M y, h:i a formate
  const time = new Date().toLocaleString("en-US", {
    day: "numeric",
    month: "short",
    year: "numeric",
    hour: "numeric",
    minute: "numeric",
    hour12: true,
  });
  $("[data-messages]").append(`
    <li data-msg-id="${uuid}" class="reply">
    <div class="chat-content">
        <p class="mb-0 me-4">${message}</p>
        <div class="time d-flex d-flex w-100 justify-content-end">
            <span class="color-white opacity-05">
                ${time}
            </span>
            <span data-msg-status class="ms-2 d-flex align-items-center color-white">
                <i class="fa fa-clock"></i>
            </span>
        </div>
    </div>
</li>
`);
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
        if (response.html == "") {
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
});

class ShareButton {
  constructor(qs) {
    this.button = document.querySelector(qs);
    this.openClass = "share__btn--open";

    this.button?.addEventListener("click", this.toggle.bind(this));
    window.addEventListener("keydown", this.close.bind(this));
  }
  close(e) {
    if (e.key === "Escape") {
      this.button?.classList.remove(this.openClass);
      this.updateTitle();
    }
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
