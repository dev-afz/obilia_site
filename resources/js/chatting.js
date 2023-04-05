import Echo from "laravel-echo";
import Pusher from "pusher-js";

window.Echo = new Echo({
    broadcaster: "pusher",
    key: "myKey",
    wsHost: 'dental-friend.appdid.com',
    // wsHost: window.location.hostname,
    wsPort: 6001,
    // wssHost: window.location.hostname,
    // wssPort: 6001,
    forceTLS: false,
    disableStats: true,
    enabledTransports: ["ws"],
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
    const html = chat.message;
    console.log(chat);
    return html;
}

function scrollToBottom() {
    $("#chat-holder").animate(
        { scrollTop: $("#chat-holder")[0].scrollHeight },
        100
    );
}

$(document).on("click", ".scroll-to-bottom", function (e) {
    e.preventDefault();
    $("#chat-holder").animate(
        { scrollTop: $("#chat-holder")[0].scrollHeight },
        500
    );
});
