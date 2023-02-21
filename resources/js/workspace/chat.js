import Echo from "laravel-echo";
import Pusher from "pusher-js";
import { v4 as uuidv4 } from "uuid";
window.Echo = new Echo({
  broadcaster: "pusher",
  key: "myKey",
  wsHost: window.location.hostname,
  wsPort: 6001,
  forceTLS: false,
  disableStats: true,
  enabledTransports: ["ws", "wss"],
});

const channel = window.Echo.private("workspace-message." + window.me);
console.log(channel);

channel.listen(".message", (e) => {
  console.log(e);
  if (e.workspace.id == window.workspace) {
    console.log("This workspace");
    $("#chat-holder").append(e.message);
    $("#chat-holder").animate(
      { scrollTop: $("#chat-holder").prop("scrollHeight") },
      500
    );
  } else {
    console.log("Not this workspace");
  }
});

const chatForm = document.getElementById("chat-form");
let reply_element = null;

$(chatForm).submit(function (e) {
  e.preventDefault();
  const message = $("#message").val();
  const image = $("#image").val();
  $("#chat-bottom-sheet").removeClass("open");
  if (isStringDirty(message)) {
    resetAll();
    alert("Please don't use script tags");
    return;
  }

  const workspace = window.workspace;
  const uuid = uuidv4();
  appendMessage(uuid);
  console.log({
    message: sanitize(message),
    workspace: workspace,
    image: image,
    uuid: uuid,
    formdata: $(this).serializeArray(),
  });
  window.rebound({
    url: send_url,
    form: $(this),
    appendData: {
      workspace: workspace,
    },
    notification: false,
    block: false,
    successCallback: function (response) {
      console.log(response);
      resetAll();
      $(`[data-msg-id="${uuid}"]`).replaceWith(response.html);
    },
    errorCallback: function (response) {
      console.log(response);
    },
  });
});

function appendMessage(uuid) {
  const message = sanitize($("#message").val());
  const image = $("#image")[0];

  if (message == "" && image.files.length == 0) {
    Notiflix.Notify.failure("Please enter a message or upload an image");
    return;
  }

  let html = `<li data-msg-id="${uuid}"  class="sent"><div class="chat-content">`;

  if (reply_element != null) {
    const reply_text = reply_element
      .closest(".chat-content")
      .find(".chat-text p")
      .text();
    console.log(reply_text);
    const reply_image = reply_element
      .closest(".chat-content")
      .find(".chat-img")
      .attr("src");
    html += `<div class="message-reply">`;
    if (reply_text != "") {
      html += `<p class="m-0">${reply_text}</p>`;
    }
    if (reply_image != "" && reply_image != undefined) {
      html += `<div class="chat-images">`;
      html += `<img src="${reply_image}" alt="" class="chat-img">`;
      html += `</div>`;
    }
    html += `</div>`;
  }
  html += `<div class="chat-text">`;
  console.log(image.files.length);
  if (image.files.length > 0) {
    const image_preview_link = URL.createObjectURL(image.files[0]);
    html += `<div class="chat-images uploading">
    <span class="blurred-loading">
    <i class="fas fa-spinner fa-spin"></i>
    </span>
    <img src="${image_preview_link}" alt="" class="chat-img">
    </div>
    `;
  }
  if (message != "") {
    html += `<p class="m-0">${message}</p></div>`;
  }

  html += `</div><small class="chat-time"><i class="fas fa-clock"></i></small></li>`;

  $("#chat-holder").append(html);
  $("#chat-holder").animate(
    { scrollTop: $("#chat-holder").prop("scrollHeight") },
    500
  );
}

function sanitize(str) {
  return str
    .replace(/<script[^>]*?>.*?<\/script>/gi, "")
    .replace(/<[\/\!]*?[^<>]*?>/gi, "");
}

function isStringDirty(str) {
  return /<script[^>]*?>.*?<\/script>/gi.test(str);
}

function resetAll() {
  $("#message").val("");
  $("#reply_to").val("");
  $("#image").val("");
  $("#chat-bottom-sheet").removeClass("open");
  reply_element = null;
}

$(document).ready(function () {
  window.rebound({
    data: {
      workspace: window.workspace,
    },
    url: load_url,
    method: "GET",
    notification: false,
    block: "#chat-holder",
    processData: true,
    successCallback: function (response) {
      $("#chat-holder").html(response.html);
      $("#chat-holder").animate(
        { scrollTop: $("#chat-holder").prop("scrollHeight") },
        500
      );
    },
    errorCallback: function (response) {
      console.log(response);
    },
  });
});

/*
|--------------------------------------------------------------------------
| Load Messages
|--------------------------------------------------------------------------
|
| This is the route that will load the messages for the workspace
|
*/

let page = 1;
let lastPage = false;
let alreadyLoading = false;

$("#chat-holder").scroll(function () {
  if (
    $("#chat-holder").scrollTop() + $("#chat-holder").height() ==
    $("#chat-holder").height()
  ) {
    if (!alreadyLoading && !lastPage) {
      loadMessages();
    } else {
      if (lastPage) {
        console.log("Last Page");
      }
      if (alreadyLoading) {
        console.log("Already Loading");
      }
    }
  }
});

function loadMessages() {
  alreadyLoading = true;
  $("#chat-holder").prepend(
    `<div class="text-center" id="loading">
    <i class="fas fa-spinner fa-spin"></i>
    </div>`
  );
  window.rebound({
    data: {
      workspace: window.workspace,
      page: page++,
    },
    url: message_url,
    method: "GET",
    notification: false,
    block: false,
    processData: true,
    successCallback: function (response) {
      alreadyLoading = false;
      if (response.isLast) {
        lastPage = true;
        Notiflix.Notify.info("No more messages");
      }

      var scrollBottom =
        $("#chat-holder").prop("scrollHeight") -
        $("#chat-holder").scrollTop() -
        $("#chat-holder").height();
      $("#chat-holder #loading").remove();
      $(response.html).hide().prependTo("#chat-holder").fadeIn(500);

      $("#chat-holder").scrollTop(
        $("#chat-holder").prop("scrollHeight") - (scrollBottom + 100)
      );
    },
  });
}

$(document).on("click", "[data-msg-reply]", function (e) {
  e.preventDefault();

  reply_element = $(this);
  window.reply_element = reply_element;
  const id = $(this).data("msg-reply");
  $("#reply_to").val(id);
  const message = reply_element
    .closest(".chat-content")
    .find(".chat-text p")
    .text();
  const image = reply_element
    .closest(".chat-content")
    .find(".chat-images img")

    .attr("src");
  let html = `<div class="reply-sheet-content">`;
  if (image != undefined && image != "") {
    html += `<img src="${image}" alt="" class="chat-img">`;
  }
  if (message != undefined) {
    html += `<p>${message}</p></div>`;
  }
  $("#chat-bottom-sheet .reply-content").html(html);
  $("#chat-bottom-sheet").addClass("open");
  $("#message").focus();
});

$(document).on("click", "#chat-bottom-sheet [data-sheet-close]", function (e) {
  e.preventDefault();
  $("#chat-bottom-sheet").removeClass("open");
  $("#reply_to").val("");
  reply_element = null;
});
