/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/init.js ***!
  \******************************/


Notiflix.Loading.init({
  zindex: 999999
});
Notiflix.Block.init({
  zindex: 9999999
});
Notiflix.Notify.init({
  zindex: 99999999,
  position: "right-bottom",
  cssAnimation: true,
  cssAnimationDuration: 400,
  cssAnimationStyle: "zoom"
});
Notiflix.Report.init({
  zindex: 999999999,
  plainText: false,
  width: "auto",
  className: "custom-notiflix-report",
  svgSize: "0px"
});
var notify = Notiflix.Notify;

/*
|--------------------------------------------------------------------------
| Supplementary functions
|--------------------------------------------------------------------------
|
| These functions are used from anywhere in the application as supplementary
|
*/

var notificationManager = function notificationManager() {
  var type = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "info";
  var message = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "No Message";
  switch (type) {
    case "success":
      Notiflix.Notify.success(message);
      break;
    case "failure":
      Notiflix.Notify.failure(message);
      break;
    case "warning":
      Notiflix.Notify.warning(message);
      break;
    case "info":
      Notiflix.Notify.info(message);
      break;
    default:
      Notiflix.Notify.info(message);
      break;
  }
};
window.rebound = function (_ref) {
  var _ref$form = _ref.form,
    form = _ref$form === void 0 ? null : _ref$form,
    _ref$data = _ref.data,
    data = _ref$data === void 0 ? null : _ref$data,
    _ref$method = _ref.method,
    method = _ref$method === void 0 ? "POST" : _ref$method,
    _ref$url = _ref.url,
    url = _ref$url === void 0 ? null : _ref$url,
    _ref$refresh = _ref.refresh,
    refresh = _ref$refresh === void 0 ? false : _ref$refresh,
    _ref$reset = _ref.reset,
    reset = _ref$reset === void 0 ? true : _ref$reset,
    _ref$reload = _ref.reload,
    reload = _ref$reload === void 0 ? false : _ref$reload,
    _ref$redirect = _ref.redirect,
    redirect = _ref$redirect === void 0 ? null : _ref$redirect,
    _ref$block = _ref.block,
    block = _ref$block === void 0 ? "empty" : _ref$block,
    _ref$beforeSendCallba = _ref.beforeSendCallback,
    beforeSendCallback = _ref$beforeSendCallba === void 0 ? null : _ref$beforeSendCallba,
    _ref$successCallback = _ref.successCallback,
    successCallback = _ref$successCallback === void 0 ? null : _ref$successCallback,
    _ref$errorCallback = _ref.errorCallback,
    errorCallback = _ref$errorCallback === void 0 ? null : _ref$errorCallback,
    _ref$completeCallback = _ref.completeCallback,
    completeCallback = _ref$completeCallback === void 0 ? null : _ref$completeCallback,
    _ref$notification = _ref.notification,
    notification = _ref$notification === void 0 ? true : _ref$notification,
    _ref$logging = _ref.logging,
    logging = _ref$logging === void 0 ? true : _ref$logging,
    _ref$returnData = _ref.returnData,
    returnData = _ref$returnData === void 0 ? false : _ref$returnData,
    _ref$processData = _ref.processData,
    processData = _ref$processData === void 0 ? false : _ref$processData,
    _ref$appendData = _ref.appendData,
    appendData = _ref$appendData === void 0 ? false : _ref$appendData,
    _ref$contentType = _ref.contentType,
    contentType = _ref$contentType === void 0 ? "application/x-www-form-urlencoded" : _ref$contentType;
  if (form === null && data === null) {
    throw new Error("No form or data provided in rebound()");
  }
  if (url === null) {
    throw new Error("No url provided in rebound()");
  }
  var form_data;
  if (form !== null) {
    var formData = $(form)[0];
    form_data = new FormData(formData);
  }
  if (appendData) {
    for (var key in appendData) {
      form_data.append(key, appendData[key]);
    }
  }
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
  });
  $.ajax({
    url: url,
    method: method,
    data: data !== null && data !== void 0 ? data : form_data,
    processData: processData,
    contentType: processData ? contentType : false,
    beforeSend: function beforeSend() {
      if (block) {
        block !== "empty" ? Notiflix.Block.hourglass(block) : Notiflix.Loading.hourglass();
      }
      if (beforeSendCallback !== null) {
        beforeSendCallback.apply(null, arguments);
      }
    },
    success: function success(response) {
      logging ? console.log(response) : null;
      if (block) {
        block !== "empty" ? Notiflix.Block.remove(block) : Notiflix.Loading.remove();
      }
      if (reset) {
        if (form) {
          $(form).find("input").each(function () {
            $(this).val("").trigger("change");
          });
        }
      }
      if (reload) {
        location.reload();
      }
      if (notification) {
        notificationManager(response.status, response.message);
      }
      refresh || response.refresh ? location.reload() : null;
      if (redirect !== null || response.redirect !== null && response.redirect !== undefined) {
        window.location.href = redirect !== null && redirect !== void 0 ? redirect : response.redirect;
      }
      if (successCallback !== null) {
        successCallback.apply(null, arguments);
      }
      if (returnData) {
        return response;
      }
      if (form) {
        $(form).find(".is-invalid").each(function () {
          $(this).removeClass("is-invalid");
        });
      }
      return true;
    },
    error: function error(xhr, status, _error) {
      logging ? console.error(xhr) : null;
      //   console.log(xhr);
      if (block) {
        block !== "empty" ? Notiflix.Block.remove(block) : Notiflix.Loading.remove();
      }
      if (errorCallback !== null) {
        errorCallback.apply(null, xhr);
      }
      if (xhr.status == 422) {
        $(form).find(".is-invalid").each(function () {
          $(this).removeClass("is-invalid");
        });
        $.each(xhr.responseJSON.errors, function (key, item) {
          notify.failure(item[0]);
          logging ? console.error(xhr) : null;
          $(form).find("[name=".concat(key, "]")).addClass("is-invalid");
        });
      } else if (xhr.status == 500) {
        notify.failure(_error);
      } else {
        notify.failure(_error);
      }
      return false;
    },
    complete: function complete(response) {
      // console.log("complete", response);
      if (block) {
        if (block !== "empty") {
          Notiflix.Block.remove(block);
        } else {
          Notiflix.Loading.remove();
        }
      }
      if (completeCallback !== null) {
        completeCallback.apply(null, response);
      }
    }
  });
};
window.validateRequired = function (form) {
  var required = $(form).find("[required]");
  var error = false;
  var first_required = null;
  required.each(function () {
    if ($(this).val() == "" || $(this).val() == null) {
      console.log($(this));
      //check if has tagify class
      if ($(this).hasClass("tagify")) {
        return;
      }
      error = true;
      if (first_required == null) {
        first_required = $(this);
      }
      $(this).addClass("is-invalid");
      $(this).closest(".form-group").find(".dropdown-toggle").addClass("invalid-select");
      $(this).closest(".form-group").find(".dashboard-profile-photo").addClass("invalid-uploader");
    } else {
      $(this).removeClass("is-invalid");
      $(this).closest(".form-group").find(".dropdown-toggle ").removeClass("invalid-select");
      $(this).closest(".form-group").find(".dashboard-profile-photo").removeClass("invalid-uploader");
    }
  });
  if (error) {
    first_required.focus();
    $("html, body").animate({
      scrollTop: first_required.offset().top - 100
    }, 200);
  }
  return error;
};
$(document).on("keyup change", "form input,select,textarea", function () {
  //check if required
  if (!$(this).attr("required")) {
    return;
  }
  if ($(this).val()) {
    if ($(this).is("input")) {
      $(this).removeClass("is-invalid");
    } else if ($(this).is("select")) {
      $(this).closest(".form-group").find(".select2-selection").css("border", "1px solid #ced4da");
    } else if ($(this).is("textarea")) {
      $(this).removeClass("is-invalid");
    }
  } else {
    if ($(this).is("input")) {
      $(this).addClass("is-invalid");
    } else if ($(this).is("select")) {
      $(this).closest(".form-group").find(".select2-selection").css("border", "1px solid red");
    } else if ($(this).is("textarea")) {
      $(this).addClass("is-invalid");
    }
  }
});
$(document).on("change", "[data-like-toggle]", function () {
  var id = $(this).data("like-toggle");
  var checkbox = $(this);
  $(this).prop("disabled", true);
  var url = window.location.origin + "/like/job";
  rebound({
    url: url,
    method: "POST",
    processData: true,
    block: false,
    data: {
      id: id
    },
    successCallback: function successCallback(response) {
      console.log(response);
    },
    completeCallback: function completeCallback(response) {
      $(checkbox).prop("disabled", false);
    }
  });
});
$(document).on("click", "[data-view-onclick]", function () {
  var html = $(this).html();
  console.log(html);
  Notiflix.Report.info("Image", html, "Ok");
});
/******/ })()
;