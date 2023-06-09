(function ($) {
  $.fn.cloneData = function (options, callback) {
    var settings = jQuery.extend(
      {
        mainContainerId: "clone-container",
        cloneContainer: "clone-item",
        excludeHTML: ".exclude",
        emptySelector: ".empty",
        copyClass: "clone-div",
        removeButtonClass: "remove-item",
        removeConfirm: !1,
        removeConfirmMessage: "Are you sure want to delete?",
        append: "",
        template: null,
        clearInputs: !0,
        maxLimit: 0,
        minLimit: 1,
        minLimitAlert: "",
        defaultRender: !0,
        counterIndex: 0,
        select2InitIds: [],
        ckeditorIds: [],
        regexID: /^(.+?)([-\d-]{1,})(.+)$/i,
        regexName: /(^.+?)([\[\d{1,}\]]{1,})(\[.+\]$)/i,
        init: function () {},
        complete: function () {},
        beforeRender: function () {},
        afterRender: function () {},
        beforeRemove: function () {},
        afterRemove: function () {},
      },
      options
    );
    "function" == typeof callback && callback.call(this),
      settings.init.call({ index: settings.counterIndex });
    var _addItem = function () {
        (settings.counterIndex = $("." + settings.cloneContainer).length),
          settings.beforeRender.call(this);
        var e = $("." + settings.cloneContainer).length;
        return 0 != settings.maxLimit && e >= settings.maxLimit
          ? (alert(
              "More than " +
                settings.maxLimit +
                " degrees can't be added in one form. Please 'Add New'."
            ),
            !1)
          : ($("#" + settings.mainContainerId).append(
              settings.template.first()[0].outerHTML
            ),
            _initializePlugins(),
            _updateAttributes(),
            settings.afterRender.call({ index: settings.counterIndex }),
            !1);
      },
      _updateAttributes = function () {
        $("." + settings.cloneContainer).each(function (e) {
          $(this)
            .find("*")
            .each(function () {
              _updateAttrID($(this), e), _updateAttrName($(this), e);
            });
        }),
          $("#" + settings.mainContainerId).addClass("clone-data"),
          $(
            "#" + settings.mainContainerId + " ." + settings.cloneContainer
          ).each(function (e, t) {
            $(this).attr("data-index", e).addClass(settings.copyClass);
          }),
          $("." + settings.cloneContainer + "." + settings.copyClass).each(
            function (e, t) {
              $(t)
                .find("[for]")
                .each(function () {
                  $(this).attr("for", $(this).attr("for").replace(/.$/, e));
                }),
                settings.complete({ index: settings.counterIndex });
            }
          );
      },
      _updateAttrID = function (e, t) {
        var n = e.attr("id"),
          i = n;
        return (
          void 0 !== n && ((i = _incrementLastNumber(n, t)), e.attr("id", i)),
          n !== i &&
            (e
              .closest("." + settings.cloneContainer)
              .find(".field-" + n)
              .each(function () {
                $(this)
                  .removeClass("field-" + n)
                  .addClass("field-" + i);
              }),
            e
              .closest("." + settings.cloneContainer)
              .find("label[for='" + n + "']")
              .attr("for", i)),
          i
        );
      },
      _incrementLastNumber = function (e, t) {
        return e.replace(/[0-9]+(?!.*[0-9])/, function (e) {
          return t;
        });
      },
      _updateAttrName = function ($elem, index) {
        var name = $elem.attr("name");
        if (void 0 !== name) {
          var matches = name.match(settings.regexName);
          if (matches && 4 === matches.length) {
            matches[2] = matches[2].replace(/\]\[/g, "-").replace(/\]|\[/g, "");
            var identifiers = matches[2].split("-");
            if (((identifiers[0] = index), identifiers.length > 1)) {
              var widgetsOptions = [];
              $elem.parents("." + settings.mainContainerId).each(function (i) {
                widgetsOptions[i] = eval(
                  $(this).find("#" + settings.mainContainerId)
                );
              }),
                (widgetsOptions = widgetsOptions.reverse());
              for (var i = identifiers.length - 1; i >= 1; i--)
                identifiers[i] = $elem
                  .closest("#" + settings.mainContainerId)
                  .index();
            }
            (name =
              matches[1] + "[" + identifiers.join("][") + "]" + matches[3]),
              $elem.attr("name", name);
          }
        }
        return name;
      },
      _parseTemplate = function () {
        var e = $(
            "#" +
              settings.mainContainerId +
              " ." +
              settings.cloneContainer +
              ":first"
          ),
          t = $(e).clone(!1, !1);
        t.find("input, textarea, select").each(function () {
          if ($(this).is(":checkbox") || $(this).is(":radio")) {
            var e = $(this).is(":checkbox") ? "checkbox" : "radio",
              n = $(this).attr("name"),
              i = t.find('input[type="hidden"][name="' + n + '"]').first(),
              s = t.find('input[type="' + e + '"][name="' + n + '"]').length;
            i && 1 === s && ($(this).val(1), i.val(0)),
              $(this).removeAttr("checked");
          } else $(this).is("select") ? $(this).find("option:selected").removeAttr("selected") : $(this).is("file") ? ($(this).parents(".fileinput").find(".previewing").attr("src", SITE_CONSTANT.DEFAULT_IMAGE_ADMIN), $(this).parents(".fileinput").find(".fileinput-preview img").attr("src", SITE_CONSTANT.DEFAULT_IMAGE_ADMIN), $(this).parents(".fileinput").find(".check-file-remove").hide(), $(this).parents(".fileinput").find(".check-file-change").hide(), $(this).parents(".fileinput").find(".check-file-select").show()) : $(this).is("textarea") ? $(this).html("") : $(this).removeAttr("value");
        }),
          t.find(".chosen-container").each(function () {
            $(this).remove();
          }),
          t.find(".select2-container").length > 0 &&
            t.find(".select2-container").each(function () {
              $(this).remove();
            }),
          t.find(".select2-container").remove(),
          settings.excludeHTML &&
            $(settings.template).find(settings.excludeHTML).remove(),
          settings.emptySelector &&
            $(settings.template).find(settings.emptySelector).empty(),
          settings.defaultRender ||
            $("." + option.cloneContainer + ":first").remove(),
          (settings.template = t);
      },
      _initializePlugins = function () {
        $(".chosen-init").length > 0 &&
          $(".chosen-init").each(function () {
            $(this).chosen().trigger("chosen:update");
          }),
          $(".select2").length > 0 &&
            $(".select2").each(function () {
              $(this).select2({ width: "100%" }).trigger("select2:update");
            }),
          $.fn.datepicker &&
            $(".datepicker-init").length > 0 &&
            $(".datepicker-init").datepicker({ autoclose: !0 }),
          $.fn.datetimepicker &&
            $(".datetimepicker-init").length > 0 &&
            $(".datetimepicker-init").datetimepicker({ autoclose: !0 }),
          $.fn.select2 &&
            settings.select2InitIds.length > 0 &&
            ($.each(settings.select2InitIds, function (e, t) {
              $(t).select2({
                placeholder: "Select",
                width: "300px;",
                allowClear: !0,
              });
            }),
            (settings.select2InitIds = [])),
          window.CKEDITOR &&
            settings.ckeditorIds.length > 0 &&
            ($.each(settings.ckeditorIds, function (e, t) {
              CKEDITOR.replace(t);
              var n = $("[id=cke_" + t + "]");
              n.length > 0 && n.remove();
            }),
            (settings.ckeditorIds = [])),
          void 0 !== $.material && $.material.init();
      },
      _deleteItem = function (e) {
        _count() > settings.minLimit
          ? settings.removeConfirm &&
            confirm(settings.removeConfirmMessage) &&
            e.parents("." + settings.cloneContainer).slideUp(function () {
              $(this).remove(),
                _updateAttributes(),
                settings.afterRemove.call(this);
            })
          : alert(`you must have at least ${settings.minLimit} item.`);
      },
      _count = function () {
        return $("." + settings.cloneContainer)
          .closest("#" + settings.mainContainerId)
          .find("." + settings.cloneContainer).length;
      };
    return (
      $(document).on("click", "." + settings.removeButtonClass, function () {
        settings.beforeRemove.call(this), _deleteItem($(this));
      }),
      this.each(function () {
        $(this).click(function () {
          _addItem();
        }),
          _parseTemplate(),
          _updateAttributes();
      }),
      this
    );
  };
})(jQuery);
