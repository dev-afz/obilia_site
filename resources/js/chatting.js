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

const channel = window.Echo.channel("testing.test");

channel
  .subscribed((e) => {
    console.log("subscribed", channel);
  })
  .listen(".test", (e) => {
    console.log("listen", e);
  });
