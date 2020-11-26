window._ = require("lodash");

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import Echo from "laravel-echo";

window.io = require("socket.io-client");

window.Echo = new Echo({
    broadcaster: "socket.io",
    host: window.location.hostname + ":6001",
});

window.Echo.join(`chat`)
    .here((users) => {
        let user_id = $("meta[name=user_id]").attr("content");

        users.forEach((user) => {
            if (user.id != user_id)
                //to skip adding the same logged in user
                $("#online-users").append(
                    `<li class="list-group-item" id="user-${user.id}">${user.name}</li>`
                );
        });
        console.log("here", users);
    })
    .joining((user) => {
        $("#online-users").append(
            `<li class="list-group-item" id="user-${user.id}">${user.name}</li>`
        );
    })
    .leaving((user) => {
        $(`#user-${user.id}`).remove();
    });
