import Echo from "laravel-echo";
import Pusher from "pusher-js";

window.Echo = new Echo({
  broadcaster: "pusher",
  key: import.meta.env.VITE_PUSHER_APP_KEY,
  wsHost: window.location.hostname,
  wsPort: 6001,
  forceTLS: false,
  disableStats: true,
  enabledTransports: ["ws", "wss"],
});

const channel = window.Echo.private("chat." + window.me);
console.log(channel);
channel.listen(".message", (e) => {
  const active_chat = $(".chat__item.active").data("chat");
  if (e.chat == active_chat) {
    const html = chatMaker(e);
    $("[data-messages]").append(html);
    scrollToBottom();
  } else {
    notifyUser(e);
  }
});

function notifyUser(e) {
  Notiflix.Notify.info(`New message from ${e.from.name}`);
  $(`.chat__item[data-chat=${e.chat}]`).addClass("unread");
  const nf = $("#ID-MSG_dropdown");
  $(nf)
    .find(".msg-counter")
    .html(parseInt($(nf).find(".msg-counter").html()) + 1);
}

function chatMaker(chat) {
  let html = `<li class="sender">
    <div class="chat-content">`;
  if (chat.message) {
    html += `<p>${chat.message}</p>`;
  }
  if (chat.media) {
    html += `<div class="chat-image">`;
    media.forEach((el) => {
      if (el.type == "image") {
        html += `<img src="${el.file}" alt="">`;
      } else if (el.type == "video") {
        html += `<video src="${el.file}" controls></video>`;
      } else {
        //download link
        html += `<a class="media-download" href="${el.file}" download>download</a>`;
      }
    });
    html += `</div>`;
  }
  // format time in d M y, h:i a format
  const time = new Date(chat.time).toLocaleDateString("en-US", {
    day: "numeric",
    month: "short",
    year: "numeric",
    hour: "numeric",
    minute: "numeric",
    hour12: true,
  });
  html += `<div class="time d-flex w-100 justify-content-between">
        <span>${time}</span>
    </div>
</div>
</li>`;

  return html;
}

function scrollToBottom() {
  const from_top = $("#chat-holder")[0].scrollTop;
  const height = $("#chat-holder")[0].scrollHeight;

  //if difference between from_top and height is less than 100, then scroll to bottom
  if (height - from_top < 100) {
    console.log("scrolling to bottom");
    $("#chat-holder").animate(
      { scrollTop: $("#chat-holder")[0].scrollHeight },
      100
    );
  } else {
    console.log("showing button");

    $("#chat-holder").append(`
        <div class="scroll-to-bottom">
            <button class="btn btn-primary">
            <i class="fa fa-arrow-down"></i>
            </button>
        </div>
        `);
    $(".scroll-to-bottom").click(() => {
      $("#chat-holder").animate(
        { scrollTop: $("#chat-holder")[0].scrollHeight },
        100
      );
      $(".scroll-to-bottom").remove();
    });
  }
}

$(document).on("click", ".scroll-to-bottom", function (e) {
  e.preventDefault();
  $("#chat-holder").animate(
    { scrollTop: $("#chat-holder")[0].scrollHeight },
    500
  );
});
