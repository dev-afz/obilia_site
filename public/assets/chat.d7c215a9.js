let o;const l=new Uint8Array(16);function u(){if(!o&&(o=typeof crypto<"u"&&crypto.getRandomValues&&crypto.getRandomValues.bind(crypto),!o))throw new Error("crypto.getRandomValues() not supported. See https://github.com/uuidjs/uuid#getrandomvalues-not-supported");return o(l)}const e=[];for(let a=0;a<256;++a)e.push((a+256).toString(16).slice(1));function m(a,t=0){return(e[a[t+0]]+e[a[t+1]]+e[a[t+2]]+e[a[t+3]]+"-"+e[a[t+4]]+e[a[t+5]]+"-"+e[a[t+6]]+e[a[t+7]]+"-"+e[a[t+8]]+e[a[t+9]]+"-"+e[a[t+10]]+e[a[t+11]]+e[a[t+12]]+e[a[t+13]]+e[a[t+14]]+e[a[t+15]]).toLowerCase()}const r=typeof crypto<"u"&&crypto.randomUUID&&crypto.randomUUID.bind(crypto),i={randomUUID:r};function h(a,t,n){if(i.randomUUID&&!t&&!a)return i.randomUUID();a=a||{};const s=a.random||(a.rng||u)();if(s[6]=s[6]&15|64,s[8]=s[8]&63|128,t){n=n||0;for(let c=0;c<16;++c)t[n+c]=s[c];return t}return m(s)}$(document).ready(function(){$(".chat-list a").click(function(a){if(a.preventDefault(),b(),$(this).hasClass("active"))return;const t=$(this).data("chat");return p(t),g(t),!1}),$(".chat-icon").click(function(){$(".chatbox").removeClass("showbox")})});function g(a){window.rebound({url:message_url,method:"GET",processData:!0,block:!1,data:{chat_id:a},notification:!1,successCallback:t=>{console.log(t.chat_data),x(t)}})}function b(){$(".chatbox input,.chatbox button").attr("disabled",!0),$(".chatbox").addClass("showbox"),$(".chatbox .modal-content").removeClass("d-none").attr("hidden",!1),$(".chatbox .empty__box").addClass("d-none").attr("hidden",!0)}function p(a){$(".chat-list a").removeClass("active"),$(`a[data-chat=${a}]`).addClass("active")}function x(a){var n;const t=(n=a.chat_data.user.images)!=null?n:"https://ui-avatars.com/api/?name="+a.chat_data.user.name;$("[data-user-image]").html(` <img class="img-fluid"
  height="50"
    width="50"
    src="${t}"
    alt="user img">`),$("[data-chat-name]").html(` <h3>${a.chat_data.user.name}</h3>
    <small>${a.chat_data.name}</small>`),$(".chatbox input,.chatbox button").attr("disabled",!1),$("#message-box [name='id']").val(a.chat_data.id),$("[data-messages]").html(a.html),d()}$("#message-box").submit(function(a){a.preventDefault();const t=$('#message-box [name="message"]').val(),n=$('#message-box [name="id"]').val(),s=h();if(!n||n==""||n=="undefined"){console.error("Chat id not found");return}if(!t||t==""||t=="undefined"){console.error("Message not found");return}window.rebound({url:send_url,method:"POST",form:$(this),reset:!1,notification:!1,block:!1,appendData:{uuid:s},beforeSendCallback:()=>{$('#message-box [name="message"]').val(""),v(t,s),d()},successCallback:c=>{console.log(c),$(`[data-msg-id=${s}] [data-msg-status]`).html('<i class="fa fa-check-double"></i>')}})});function v(a,t=null){const n=new Date().toLocaleString("en-US",{hour:"numeric",minute:"numeric",hour12:!0});$("[data-messages]").append(`
    <li data-msg-id="${t}" class="reply">
    <div class="chat-content">
        <p>${a}</p>
        <div class="time d-flex d-flex w-100 justify-content-between">
            <span class="color-white">
                ${n}
            </span>
            <span data-msg-status class="ms-2 d-flex align-items-center color-white">
                <i class="fa fa-clock"></i>
            </span>
        </div>
    </div>
</li>
`)}function d(){$("#chat-holder").animate({scrollTop:$("#chat-holder")[0].scrollHeight},100)}
