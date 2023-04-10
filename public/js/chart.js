/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/chart.js":
/*!*******************************!*\
  !*** ./resources/js/chart.js ***!
  \*******************************/
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }
function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }
function _get2() { if (typeof Reflect !== "undefined" && Reflect.get) { _get2 = Reflect.get.bind(); } else { _get2 = function _get(target, property, receiver) { var base = _superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(arguments.length < 3 ? target : receiver); } return desc.value; }; } return _get2.apply(this, arguments); }
function _superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = _getPrototypeOf(object); if (object === null) break; } return object; }
function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }
function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _iterableToArrayLimit(arr, i) { var _i = null == arr ? null : "undefined" != typeof Symbol && arr[Symbol.iterator] || arr["@@iterator"]; if (null != _i) { var _s, _e, _x, _r, _arr = [], _n = !0, _d = !1; try { if (_x = (_i = _i.call(arr)).next, 0 === i) { if (Object(_i) !== _i) return; _n = !1; } else for (; !(_n = (_s = _x.call(_i)).done) && (_arr.push(_s.value), _arr.length !== i); _n = !0); } catch (err) { _d = !0, _e = err; } finally { try { if (!_n && null != _i["return"] && (_r = _i["return"](), Object(_r) !== _r)) return; } finally { if (_d) throw _e; } } return _arr; } }
function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e81) { throw _e81; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e82) { didErr = true; err = _e82; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
/*!
 * Chart.js v3.8.0
 * https://www.chartjs.org
 * (c) 2022 Chart.js Contributors
 * Released under the MIT License
 */
!function (t, e) {
  "object" == ( false ? 0 : _typeof(exports)) && "undefined" != "object" ? module.exports = e() :  true ? !(__WEBPACK_AMD_DEFINE_FACTORY__ = (e),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
		__WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : 0;
}(this, function () {
  "use strict";

  var t = "undefined" == typeof window ? function (t) {
    return t();
  } : window.requestAnimationFrame;
  function e(e, i, s) {
    var n = s || function (t) {
      return Array.prototype.slice.call(t);
    };
    var o = !1,
      a = [];
    return function () {
      for (var _len = arguments.length, s = new Array(_len), _key = 0; _key < _len; _key++) {
        s[_key] = arguments[_key];
      }
      a = n(s), o || (o = !0, t.call(window, function () {
        o = !1, e.apply(i, a);
      }));
    };
  }
  function i(t, e) {
    var i;
    return function () {
      for (var _len2 = arguments.length, s = new Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
        s[_key2] = arguments[_key2];
      }
      return e ? (clearTimeout(i), i = setTimeout(t, e, s)) : t.apply(this, s), e;
    };
  }
  var s = function s(t) {
      return "start" === t ? "left" : "end" === t ? "right" : "center";
    },
    n = function n(t, e, i) {
      return "start" === t ? e : "end" === t ? i : (e + i) / 2;
    },
    o = function o(t, e, i, s) {
      return t === (s ? "left" : "right") ? i : "center" === t ? (e + i) / 2 : e;
    };
  var a = new ( /*#__PURE__*/function () {
    function _class() {
      _classCallCheck(this, _class);
      this._request = null, this._charts = new Map(), this._running = !1, this._lastDate = void 0;
    }
    _createClass(_class, [{
      key: "_notify",
      value: function _notify(t, e, i, s) {
        var n = e.listeners[s],
          o = e.duration;
        n.forEach(function (s) {
          return s({
            chart: t,
            initial: e.initial,
            numSteps: o,
            currentStep: Math.min(i - e.start, o)
          });
        });
      }
    }, {
      key: "_refresh",
      value: function _refresh() {
        var _this = this;
        this._request || (this._running = !0, this._request = t.call(window, function () {
          _this._update(), _this._request = null, _this._running && _this._refresh();
        }));
      }
    }, {
      key: "_update",
      value: function _update() {
        var _this2 = this;
        var t = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : Date.now();
        var e = 0;
        this._charts.forEach(function (i, s) {
          if (!i.running || !i.items.length) return;
          var n = i.items;
          var o,
            a = n.length - 1,
            r = !1;
          for (; a >= 0; --a) o = n[a], o._active ? (o._total > i.duration && (i.duration = o._total), o.tick(t), r = !0) : (n[a] = n[n.length - 1], n.pop());
          r && (s.draw(), _this2._notify(s, i, t, "progress")), n.length || (i.running = !1, _this2._notify(s, i, t, "complete"), i.initial = !1), e += n.length;
        }), this._lastDate = t, 0 === e && (this._running = !1);
      }
    }, {
      key: "_getAnims",
      value: function _getAnims(t) {
        var e = this._charts;
        var i = e.get(t);
        return i || (i = {
          running: !1,
          initial: !0,
          items: [],
          listeners: {
            complete: [],
            progress: []
          }
        }, e.set(t, i)), i;
      }
    }, {
      key: "listen",
      value: function listen(t, e, i) {
        this._getAnims(t).listeners[e].push(i);
      }
    }, {
      key: "add",
      value: function add(t, e) {
        var _this$_getAnims$items;
        e && e.length && (_this$_getAnims$items = this._getAnims(t).items).push.apply(_this$_getAnims$items, _toConsumableArray(e));
      }
    }, {
      key: "has",
      value: function has(t) {
        return this._getAnims(t).items.length > 0;
      }
    }, {
      key: "start",
      value: function start(t) {
        var e = this._charts.get(t);
        e && (e.running = !0, e.start = Date.now(), e.duration = e.items.reduce(function (t, e) {
          return Math.max(t, e._duration);
        }, 0), this._refresh());
      }
    }, {
      key: "running",
      value: function running(t) {
        if (!this._running) return !1;
        var e = this._charts.get(t);
        return !!(e && e.running && e.items.length);
      }
    }, {
      key: "stop",
      value: function stop(t) {
        var e = this._charts.get(t);
        if (!e || !e.items.length) return;
        var i = e.items;
        var s = i.length - 1;
        for (; s >= 0; --s) i[s].cancel();
        e.items = [], this._notify(t, e, Date.now(), "complete");
      }
    }, {
      key: "remove",
      value: function remove(t) {
        return this._charts["delete"](t);
      }
    }]);
    return _class;
  }())();
  /*!
   * @kurkle/color v0.2.1
   * https://github.com/kurkle/color#readme
   * (c) 2022 Jukka Kurkela
   * Released under the MIT License
   */
  function r(t) {
    return t + .5 | 0;
  }
  var l = function l(t, e, i) {
    return Math.max(Math.min(t, i), e);
  };
  function h(t) {
    return l(r(2.55 * t), 0, 255);
  }
  function c(t) {
    return l(r(255 * t), 0, 255);
  }
  function d(t) {
    return l(r(t / 2.55) / 100, 0, 1);
  }
  function u(t) {
    return l(r(100 * t), 0, 100);
  }
  var f = {
      0: 0,
      1: 1,
      2: 2,
      3: 3,
      4: 4,
      5: 5,
      6: 6,
      7: 7,
      8: 8,
      9: 9,
      A: 10,
      B: 11,
      C: 12,
      D: 13,
      E: 14,
      F: 15,
      a: 10,
      b: 11,
      c: 12,
      d: 13,
      e: 14,
      f: 15
    },
    g = _toConsumableArray("0123456789ABCDEF"),
    p = function p(t) {
      return g[15 & t];
    },
    m = function m(t) {
      return g[(240 & t) >> 4] + g[15 & t];
    },
    b = function b(t) {
      return (240 & t) >> 4 == (15 & t);
    };
  function x(t) {
    var e = function (t) {
      return b(t.r) && b(t.g) && b(t.b) && b(t.a);
    }(t) ? p : m;
    return t ? "#" + e(t.r) + e(t.g) + e(t.b) + function (t, e) {
      return t < 255 ? e(t) : "";
    }(t.a, e) : void 0;
  }
  var _ = /^(hsla?|hwb|hsv)\(\s*([-+.e\d]+)(?:deg)?[\s,]+([-+.e\d]+)%[\s,]+([-+.e\d]+)%(?:[\s,]+([-+.e\d]+)(%)?)?\s*\)$/;
  function y(t, e, i) {
    var s = e * Math.min(i, 1 - i),
      n = function n(e) {
        var n = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : (e + t / 30) % 12;
        return i - s * Math.max(Math.min(n - 3, 9 - n, 1), -1);
      };
    return [n(0), n(8), n(4)];
  }
  function v(t, e, i) {
    var s = function s(_s2) {
      var n = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : (_s2 + t / 60) % 6;
      return i - i * e * Math.max(Math.min(n, 4 - n, 1), 0);
    };
    return [s(5), s(3), s(1)];
  }
  function w(t, e, i) {
    var s = y(t, 1, .5);
    var n;
    for (e + i > 1 && (n = 1 / (e + i), e *= n, i *= n), n = 0; n < 3; n++) s[n] *= 1 - e - i, s[n] += e;
    return s;
  }
  function M(t) {
    var e = t.r / 255,
      i = t.g / 255,
      s = t.b / 255,
      n = Math.max(e, i, s),
      o = Math.min(e, i, s),
      a = (n + o) / 2;
    var r, l, h;
    return n !== o && (h = n - o, l = a > .5 ? h / (2 - n - o) : h / (n + o), r = function (t, e, i, s, n) {
      return t === n ? (e - i) / s + (e < i ? 6 : 0) : e === n ? (i - t) / s + 2 : (t - e) / s + 4;
    }(e, i, s, h, n), r = 60 * r + .5), [0 | r, l || 0, a];
  }
  function k(t, e, i, s) {
    return (Array.isArray(e) ? t(e[0], e[1], e[2]) : t(e, i, s)).map(c);
  }
  function S(t, e, i) {
    return k(y, t, e, i);
  }
  function P(t) {
    return (t % 360 + 360) % 360;
  }
  function D(t) {
    var e = _.exec(t);
    var i,
      s = 255;
    if (!e) return;
    e[5] !== i && (s = e[6] ? h(+e[5]) : c(+e[5]));
    var n = P(+e[2]),
      o = +e[3] / 100,
      a = +e[4] / 100;
    return i = "hwb" === e[1] ? function (t, e, i) {
      return k(w, t, e, i);
    }(n, o, a) : "hsv" === e[1] ? function (t, e, i) {
      return k(v, t, e, i);
    }(n, o, a) : S(n, o, a), {
      r: i[0],
      g: i[1],
      b: i[2],
      a: s
    };
  }
  var C = {
      x: "dark",
      Z: "light",
      Y: "re",
      X: "blu",
      W: "gr",
      V: "medium",
      U: "slate",
      A: "ee",
      T: "ol",
      S: "or",
      B: "ra",
      C: "lateg",
      D: "ights",
      R: "in",
      Q: "turquois",
      E: "hi",
      P: "ro",
      O: "al",
      N: "le",
      M: "de",
      L: "yello",
      F: "en",
      K: "ch",
      G: "arks",
      H: "ea",
      I: "ightg",
      J: "wh"
    },
    O = {
      OiceXe: "f0f8ff",
      antiquewEte: "faebd7",
      aqua: "ffff",
      aquamarRe: "7fffd4",
      azuY: "f0ffff",
      beige: "f5f5dc",
      bisque: "ffe4c4",
      black: "0",
      blanKedOmond: "ffebcd",
      Xe: "ff",
      XeviTet: "8a2be2",
      bPwn: "a52a2a",
      burlywood: "deb887",
      caMtXe: "5f9ea0",
      KartYuse: "7fff00",
      KocTate: "d2691e",
      cSO: "ff7f50",
      cSnflowerXe: "6495ed",
      cSnsilk: "fff8dc",
      crimson: "dc143c",
      cyan: "ffff",
      xXe: "8b",
      xcyan: "8b8b",
      xgTMnPd: "b8860b",
      xWay: "a9a9a9",
      xgYF: "6400",
      xgYy: "a9a9a9",
      xkhaki: "bdb76b",
      xmagFta: "8b008b",
      xTivegYF: "556b2f",
      xSange: "ff8c00",
      xScEd: "9932cc",
      xYd: "8b0000",
      xsOmon: "e9967a",
      xsHgYF: "8fbc8f",
      xUXe: "483d8b",
      xUWay: "2f4f4f",
      xUgYy: "2f4f4f",
      xQe: "ced1",
      xviTet: "9400d3",
      dAppRk: "ff1493",
      dApskyXe: "bfff",
      dimWay: "696969",
      dimgYy: "696969",
      dodgerXe: "1e90ff",
      fiYbrick: "b22222",
      flSOwEte: "fffaf0",
      foYstWAn: "228b22",
      fuKsia: "ff00ff",
      gaRsbSo: "dcdcdc",
      ghostwEte: "f8f8ff",
      gTd: "ffd700",
      gTMnPd: "daa520",
      Way: "808080",
      gYF: "8000",
      gYFLw: "adff2f",
      gYy: "808080",
      honeyMw: "f0fff0",
      hotpRk: "ff69b4",
      RdianYd: "cd5c5c",
      Rdigo: "4b0082",
      ivSy: "fffff0",
      khaki: "f0e68c",
      lavFMr: "e6e6fa",
      lavFMrXsh: "fff0f5",
      lawngYF: "7cfc00",
      NmoncEffon: "fffacd",
      ZXe: "add8e6",
      ZcSO: "f08080",
      Zcyan: "e0ffff",
      ZgTMnPdLw: "fafad2",
      ZWay: "d3d3d3",
      ZgYF: "90ee90",
      ZgYy: "d3d3d3",
      ZpRk: "ffb6c1",
      ZsOmon: "ffa07a",
      ZsHgYF: "20b2aa",
      ZskyXe: "87cefa",
      ZUWay: "778899",
      ZUgYy: "778899",
      ZstAlXe: "b0c4de",
      ZLw: "ffffe0",
      lime: "ff00",
      limegYF: "32cd32",
      lRF: "faf0e6",
      magFta: "ff00ff",
      maPon: "800000",
      VaquamarRe: "66cdaa",
      VXe: "cd",
      VScEd: "ba55d3",
      VpurpN: "9370db",
      VsHgYF: "3cb371",
      VUXe: "7b68ee",
      VsprRggYF: "fa9a",
      VQe: "48d1cc",
      VviTetYd: "c71585",
      midnightXe: "191970",
      mRtcYam: "f5fffa",
      mistyPse: "ffe4e1",
      moccasR: "ffe4b5",
      navajowEte: "ffdead",
      navy: "80",
      Tdlace: "fdf5e6",
      Tive: "808000",
      TivedBb: "6b8e23",
      Sange: "ffa500",
      SangeYd: "ff4500",
      ScEd: "da70d6",
      pOegTMnPd: "eee8aa",
      pOegYF: "98fb98",
      pOeQe: "afeeee",
      pOeviTetYd: "db7093",
      papayawEp: "ffefd5",
      pHKpuff: "ffdab9",
      peru: "cd853f",
      pRk: "ffc0cb",
      plum: "dda0dd",
      powMrXe: "b0e0e6",
      purpN: "800080",
      YbeccapurpN: "663399",
      Yd: "ff0000",
      Psybrown: "bc8f8f",
      PyOXe: "4169e1",
      saddNbPwn: "8b4513",
      sOmon: "fa8072",
      sandybPwn: "f4a460",
      sHgYF: "2e8b57",
      sHshell: "fff5ee",
      siFna: "a0522d",
      silver: "c0c0c0",
      skyXe: "87ceeb",
      UXe: "6a5acd",
      UWay: "708090",
      UgYy: "708090",
      snow: "fffafa",
      sprRggYF: "ff7f",
      stAlXe: "4682b4",
      tan: "d2b48c",
      teO: "8080",
      tEstN: "d8bfd8",
      tomato: "ff6347",
      Qe: "40e0d0",
      viTet: "ee82ee",
      JHt: "f5deb3",
      wEte: "ffffff",
      wEtesmoke: "f5f5f5",
      Lw: "ffff00",
      LwgYF: "9acd32"
    };
  var A;
  function T(t) {
    A || (A = function () {
      var t = {},
        e = Object.keys(O),
        i = Object.keys(C);
      var s, n, o, a, r;
      for (s = 0; s < e.length; s++) {
        for (a = r = e[s], n = 0; n < i.length; n++) o = i[n], r = r.replace(o, C[o]);
        o = parseInt(O[a], 16), t[r] = [o >> 16 & 255, o >> 8 & 255, 255 & o];
      }
      return t;
    }(), A.transparent = [0, 0, 0, 0]);
    var e = A[t.toLowerCase()];
    return e && {
      r: e[0],
      g: e[1],
      b: e[2],
      a: 4 === e.length ? e[3] : 255
    };
  }
  var L = /^rgba?\(\s*([-+.\d]+)(%)?[\s,]+([-+.e\d]+)(%)?[\s,]+([-+.e\d]+)(%)?(?:[\s,/]+([-+.e\d]+)(%)?)?\s*\)$/;
  var R = function R(t) {
      return t <= .0031308 ? 12.92 * t : 1.055 * Math.pow(t, 1 / 2.4) - .055;
    },
    E = function E(t) {
      return t <= .04045 ? t / 12.92 : Math.pow((t + .055) / 1.055, 2.4);
    };
  function I(t, e, i) {
    if (t) {
      var _s3 = M(t);
      _s3[e] = Math.max(0, Math.min(_s3[e] + _s3[e] * i, 0 === e ? 360 : 1)), _s3 = S(_s3), t.r = _s3[0], t.g = _s3[1], t.b = _s3[2];
    }
  }
  function z(t, e) {
    return t ? Object.assign(e || {}, t) : t;
  }
  function F(t) {
    var e = {
      r: 0,
      g: 0,
      b: 0,
      a: 255
    };
    return Array.isArray(t) ? t.length >= 3 && (e = {
      r: t[0],
      g: t[1],
      b: t[2],
      a: 255
    }, t.length > 3 && (e.a = c(t[3]))) : (e = z(t, {
      r: 0,
      g: 0,
      b: 0,
      a: 1
    })).a = c(e.a), e;
  }
  function B(t) {
    return "r" === t.charAt(0) ? function (t) {
      var e = L.exec(t);
      var i,
        s,
        n,
        o = 255;
      if (e) {
        if (e[7] !== i) {
          var _t2 = +e[7];
          o = e[8] ? h(_t2) : l(255 * _t2, 0, 255);
        }
        return i = +e[1], s = +e[3], n = +e[5], i = 255 & (e[2] ? h(i) : l(i, 0, 255)), s = 255 & (e[4] ? h(s) : l(s, 0, 255)), n = 255 & (e[6] ? h(n) : l(n, 0, 255)), {
          r: i,
          g: s,
          b: n,
          a: o
        };
      }
    }(t) : D(t);
  }
  var V = /*#__PURE__*/function () {
    function V(t) {
      _classCallCheck(this, V);
      if (t instanceof V) return t;
      var e = _typeof(t);
      var i;
      var s, n, o;
      "object" === e ? i = F(t) : "string" === e && (o = (s = t).length, "#" === s[0] && (4 === o || 5 === o ? n = {
        r: 255 & 17 * f[s[1]],
        g: 255 & 17 * f[s[2]],
        b: 255 & 17 * f[s[3]],
        a: 5 === o ? 17 * f[s[4]] : 255
      } : 7 !== o && 9 !== o || (n = {
        r: f[s[1]] << 4 | f[s[2]],
        g: f[s[3]] << 4 | f[s[4]],
        b: f[s[5]] << 4 | f[s[6]],
        a: 9 === o ? f[s[7]] << 4 | f[s[8]] : 255
      })), i = n || T(t) || B(t)), this._rgb = i, this._valid = !!i;
    }
    _createClass(V, [{
      key: "valid",
      get: function get() {
        return this._valid;
      }
    }, {
      key: "rgb",
      get: function get() {
        var t = z(this._rgb);
        return t && (t.a = d(t.a)), t;
      },
      set: function set(t) {
        this._rgb = F(t);
      }
    }, {
      key: "rgbString",
      value: function rgbString() {
        return this._valid ? (t = this._rgb) && (t.a < 255 ? "rgba(".concat(t.r, ", ").concat(t.g, ", ").concat(t.b, ", ").concat(d(t.a), ")") : "rgb(".concat(t.r, ", ").concat(t.g, ", ").concat(t.b, ")")) : void 0;
        var t;
      }
    }, {
      key: "hexString",
      value: function hexString() {
        return this._valid ? x(this._rgb) : void 0;
      }
    }, {
      key: "hslString",
      value: function hslString() {
        return this._valid ? function (t) {
          if (!t) return;
          var e = M(t),
            i = e[0],
            s = u(e[1]),
            n = u(e[2]);
          return t.a < 255 ? "hsla(".concat(i, ", ").concat(s, "%, ").concat(n, "%, ").concat(d(t.a), ")") : "hsl(".concat(i, ", ").concat(s, "%, ").concat(n, "%)");
        }(this._rgb) : void 0;
      }
    }, {
      key: "mix",
      value: function mix(t, e) {
        if (t) {
          var _i2 = this.rgb,
            _s4 = t.rgb;
          var _n2;
          var _o2 = e === _n2 ? .5 : e,
            _a2 = 2 * _o2 - 1,
            _r = _i2.a - _s4.a,
            _l = ((_a2 * _r == -1 ? _a2 : (_a2 + _r) / (1 + _a2 * _r)) + 1) / 2;
          _n2 = 1 - _l, _i2.r = 255 & _l * _i2.r + _n2 * _s4.r + .5, _i2.g = 255 & _l * _i2.g + _n2 * _s4.g + .5, _i2.b = 255 & _l * _i2.b + _n2 * _s4.b + .5, _i2.a = _o2 * _i2.a + (1 - _o2) * _s4.a, this.rgb = _i2;
        }
        return this;
      }
    }, {
      key: "interpolate",
      value: function interpolate(t, e) {
        return t && (this._rgb = function (t, e, i) {
          var s = E(d(t.r)),
            n = E(d(t.g)),
            o = E(d(t.b));
          return {
            r: c(R(s + i * (E(d(e.r)) - s))),
            g: c(R(n + i * (E(d(e.g)) - n))),
            b: c(R(o + i * (E(d(e.b)) - o))),
            a: t.a + i * (e.a - t.a)
          };
        }(this._rgb, t._rgb, e)), this;
      }
    }, {
      key: "clone",
      value: function clone() {
        return new V(this.rgb);
      }
    }, {
      key: "alpha",
      value: function alpha(t) {
        return this._rgb.a = c(t), this;
      }
    }, {
      key: "clearer",
      value: function clearer(t) {
        return this._rgb.a *= 1 - t, this;
      }
    }, {
      key: "greyscale",
      value: function greyscale() {
        var t = this._rgb,
          e = r(.3 * t.r + .59 * t.g + .11 * t.b);
        return t.r = t.g = t.b = e, this;
      }
    }, {
      key: "opaquer",
      value: function opaquer(t) {
        return this._rgb.a *= 1 + t, this;
      }
    }, {
      key: "negate",
      value: function negate() {
        var t = this._rgb;
        return t.r = 255 - t.r, t.g = 255 - t.g, t.b = 255 - t.b, this;
      }
    }, {
      key: "lighten",
      value: function lighten(t) {
        return I(this._rgb, 2, t), this;
      }
    }, {
      key: "darken",
      value: function darken(t) {
        return I(this._rgb, 2, -t), this;
      }
    }, {
      key: "saturate",
      value: function saturate(t) {
        return I(this._rgb, 1, t), this;
      }
    }, {
      key: "desaturate",
      value: function desaturate(t) {
        return I(this._rgb, 1, -t), this;
      }
    }, {
      key: "rotate",
      value: function rotate(t) {
        return function (t, e) {
          var i = M(t);
          i[0] = P(i[0] + e), i = S(i), t.r = i[0], t.g = i[1], t.b = i[2];
        }(this._rgb, t), this;
      }
    }]);
    return V;
  }();
  function N(t) {
    return new V(t);
  }
  function W(t) {
    if (t && "object" == _typeof(t)) {
      var _e2 = t.toString();
      return "[object CanvasPattern]" === _e2 || "[object CanvasGradient]" === _e2;
    }
    return !1;
  }
  function H(t) {
    return W(t) ? t : N(t);
  }
  function j(t) {
    return W(t) ? t : N(t).saturate(.5).darken(.1).hexString();
  }
  function $() {}
  var Y = function () {
    var t = 0;
    return function () {
      return t++;
    };
  }();
  function U(t) {
    return null == t;
  }
  function X(t) {
    if (Array.isArray && Array.isArray(t)) return !0;
    var e = Object.prototype.toString.call(t);
    return "[object" === e.slice(0, 7) && "Array]" === e.slice(-6);
  }
  function q(t) {
    return null !== t && "[object Object]" === Object.prototype.toString.call(t);
  }
  var K = function K(t) {
    return ("number" == typeof t || t instanceof Number) && isFinite(+t);
  };
  function G(t, e) {
    return K(t) ? t : e;
  }
  function Z(t, e) {
    return void 0 === t ? e : t;
  }
  var J = function J(t, e) {
      return "string" == typeof t && t.endsWith("%") ? parseFloat(t) / 100 : t / e;
    },
    Q = function Q(t, e) {
      return "string" == typeof t && t.endsWith("%") ? parseFloat(t) / 100 * e : +t;
    };
  function tt(t, e, i) {
    if (t && "function" == typeof t.call) return t.apply(i, e);
  }
  function et(t, e, i, s) {
    var n, o, a;
    if (X(t)) {
      if (o = t.length, s) for (n = o - 1; n >= 0; n--) e.call(i, t[n], n);else for (n = 0; n < o; n++) e.call(i, t[n], n);
    } else if (q(t)) for (a = Object.keys(t), o = a.length, n = 0; n < o; n++) e.call(i, t[a[n]], a[n]);
  }
  function it(t, e) {
    var i, s, n, o;
    if (!t || !e || t.length !== e.length) return !1;
    for (i = 0, s = t.length; i < s; ++i) if (n = t[i], o = e[i], n.datasetIndex !== o.datasetIndex || n.index !== o.index) return !1;
    return !0;
  }
  function st(t) {
    if (X(t)) return t.map(st);
    if (q(t)) {
      var _e3 = Object.create(null),
        _i3 = Object.keys(t),
        _s5 = _i3.length;
      var _n3 = 0;
      for (; _n3 < _s5; ++_n3) _e3[_i3[_n3]] = st(t[_i3[_n3]]);
      return _e3;
    }
    return t;
  }
  function nt(t) {
    return -1 === ["__proto__", "prototype", "constructor"].indexOf(t);
  }
  function ot(t, e, i, s) {
    if (!nt(t)) return;
    var n = e[t],
      o = i[t];
    q(n) && q(o) ? at(n, o, s) : e[t] = st(o);
  }
  function at(t, e, i) {
    var s = X(e) ? e : [e],
      n = s.length;
    if (!q(t)) return t;
    var o = (i = i || {}).merger || ot;
    for (var _a3 = 0; _a3 < n; ++_a3) {
      if (!q(e = s[_a3])) continue;
      var _n4 = Object.keys(e);
      for (var _s6 = 0, _a4 = _n4.length; _s6 < _a4; ++_s6) o(_n4[_s6], t, e, i);
    }
    return t;
  }
  function rt(t, e) {
    return at(t, e, {
      merger: lt
    });
  }
  function lt(t, e, i) {
    if (!nt(t)) return;
    var s = e[t],
      n = i[t];
    q(s) && q(n) ? rt(s, n) : Object.prototype.hasOwnProperty.call(e, t) || (e[t] = st(n));
  }
  function ht(t, e) {
    var i = t.indexOf(".", e);
    return -1 === i ? t.length : i;
  }
  function ct(t, e) {
    if ("" === e) return t;
    var i = 0,
      s = ht(e, i);
    for (; t && s > i;) t = t[e.slice(i, s)], i = s + 1, s = ht(e, i);
    return t;
  }
  function dt(t) {
    return t.charAt(0).toUpperCase() + t.slice(1);
  }
  var ut = function ut(t) {
      return void 0 !== t;
    },
    ft = function ft(t) {
      return "function" == typeof t;
    },
    gt = function gt(t, e) {
      if (t.size !== e.size) return !1;
      var _iterator = _createForOfIteratorHelper(t),
        _step;
      try {
        for (_iterator.s(); !(_step = _iterator.n()).done;) {
          var _i4 = _step.value;
          if (!e.has(_i4)) return !1;
        }
      } catch (err) {
        _iterator.e(err);
      } finally {
        _iterator.f();
      }
      return !0;
    };
  function pt(t) {
    return "mouseup" === t.type || "click" === t.type || "contextmenu" === t.type;
  }
  var mt = Object.create(null),
    bt = Object.create(null);
  function xt(t, e) {
    if (!e) return t;
    var i = e.split(".");
    for (var _e4 = 0, _s7 = i.length; _e4 < _s7; ++_e4) {
      var _s8 = i[_e4];
      t = t[_s8] || (t[_s8] = Object.create(null));
    }
    return t;
  }
  function _t(t, e, i) {
    return "string" == typeof e ? at(xt(t, e), i) : at(xt(t, ""), e);
  }
  var yt = new ( /*#__PURE__*/function () {
    function _class2(t) {
      _classCallCheck(this, _class2);
      this.animation = void 0, this.backgroundColor = "rgba(0,0,0,0.1)", this.borderColor = "rgba(0,0,0,0.1)", this.color = "#666", this.datasets = {}, this.devicePixelRatio = function (t) {
        return t.chart.platform.getDevicePixelRatio();
      }, this.elements = {}, this.events = ["mousemove", "mouseout", "click", "touchstart", "touchmove"], this.font = {
        family: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
        size: 12,
        style: "normal",
        lineHeight: 1.2,
        weight: null
      }, this.hover = {}, this.hoverBackgroundColor = function (t, e) {
        return j(e.backgroundColor);
      }, this.hoverBorderColor = function (t, e) {
        return j(e.borderColor);
      }, this.hoverColor = function (t, e) {
        return j(e.color);
      }, this.indexAxis = "x", this.interaction = {
        mode: "nearest",
        intersect: !0,
        includeInvisible: !1
      }, this.maintainAspectRatio = !0, this.onHover = null, this.onClick = null, this.parsing = !0, this.plugins = {}, this.responsive = !0, this.scale = void 0, this.scales = {}, this.showLine = !0, this.drawActiveElementsOnTop = !0, this.describe(t);
    }
    _createClass(_class2, [{
      key: "set",
      value: function set(t, e) {
        return _t(this, t, e);
      }
    }, {
      key: "get",
      value: function get(t) {
        return xt(this, t);
      }
    }, {
      key: "describe",
      value: function describe(t, e) {
        return _t(bt, t, e);
      }
    }, {
      key: "override",
      value: function override(t, e) {
        return _t(mt, t, e);
      }
    }, {
      key: "route",
      value: function route(t, e, i, s) {
        var _Object$definePropert;
        var n = xt(this, t),
          o = xt(this, i),
          a = "_" + e;
        Object.defineProperties(n, (_Object$definePropert = {}, _defineProperty(_Object$definePropert, a, {
          value: n[e],
          writable: !0
        }), _defineProperty(_Object$definePropert, e, {
          enumerable: !0,
          get: function get() {
            var t = this[a],
              e = o[s];
            return q(t) ? Object.assign({}, e, t) : Z(t, e);
          },
          set: function set(t) {
            this[a] = t;
          }
        }), _Object$definePropert));
      }
    }]);
    return _class2;
  }())({
    _scriptable: function _scriptable(t) {
      return !t.startsWith("on");
    },
    _indexable: function _indexable(t) {
      return "events" !== t;
    },
    hover: {
      _fallback: "interaction"
    },
    interaction: {
      _scriptable: !1,
      _indexable: !1
    }
  });
  function vt(t, e, i) {
    i = i || function (i) {
      return t[i] < e;
    };
    var s,
      n = t.length - 1,
      o = 0;
    for (; n - o > 1;) s = o + n >> 1, i(s) ? o = s : n = s;
    return {
      lo: o,
      hi: n
    };
  }
  var wt = function wt(t, e, i) {
      return vt(t, i, function (s) {
        return t[s][e] < i;
      });
    },
    Mt = function Mt(t, e, i) {
      return vt(t, i, function (s) {
        return t[s][e] >= i;
      });
    };
  function kt(t, e, i) {
    var s = 0,
      n = t.length;
    for (; s < n && t[s] < e;) s++;
    for (; n > s && t[n - 1] > i;) n--;
    return s > 0 || n < t.length ? t.slice(s, n) : t;
  }
  var St = ["push", "pop", "shift", "splice", "unshift"];
  function Pt(t, e) {
    t._chartjs ? t._chartjs.listeners.push(e) : (Object.defineProperty(t, "_chartjs", {
      configurable: !0,
      enumerable: !1,
      value: {
        listeners: [e]
      }
    }), St.forEach(function (e) {
      var i = "_onData" + dt(e),
        s = t[e];
      Object.defineProperty(t, e, {
        configurable: !0,
        enumerable: !1,
        value: function value() {
          for (var _len3 = arguments.length, e = new Array(_len3), _key3 = 0; _key3 < _len3; _key3++) {
            e[_key3] = arguments[_key3];
          }
          var n = s.apply(this, e);
          return t._chartjs.listeners.forEach(function (t) {
            "function" == typeof t[i] && t[i].apply(t, e);
          }), n;
        }
      });
    }));
  }
  function Dt(t, e) {
    var i = t._chartjs;
    if (!i) return;
    var s = i.listeners,
      n = s.indexOf(e);
    -1 !== n && s.splice(n, 1), s.length > 0 || (St.forEach(function (e) {
      delete t[e];
    }), delete t._chartjs);
  }
  function Ct(t) {
    var e = new Set();
    var i, s;
    for (i = 0, s = t.length; i < s; ++i) e.add(t[i]);
    return e.size === s ? t : Array.from(e);
  }
  var Ot = Math.PI,
    At = 2 * Ot,
    Tt = At + Ot,
    Lt = Number.POSITIVE_INFINITY,
    Rt = Ot / 180,
    Et = Ot / 2,
    It = Ot / 4,
    zt = 2 * Ot / 3,
    Ft = Math.log10,
    Bt = Math.sign;
  function Vt(t) {
    var e = Math.round(t);
    t = Ht(t, e, t / 1e3) ? e : t;
    var i = Math.pow(10, Math.floor(Ft(t))),
      s = t / i;
    return (s <= 1 ? 1 : s <= 2 ? 2 : s <= 5 ? 5 : 10) * i;
  }
  function Nt(t) {
    var e = [],
      i = Math.sqrt(t);
    var s;
    for (s = 1; s < i; s++) t % s == 0 && (e.push(s), e.push(t / s));
    return i === (0 | i) && e.push(i), e.sort(function (t, e) {
      return t - e;
    }).pop(), e;
  }
  function Wt(t) {
    return !isNaN(parseFloat(t)) && isFinite(t);
  }
  function Ht(t, e, i) {
    return Math.abs(t - e) < i;
  }
  function jt(t, e) {
    var i = Math.round(t);
    return i - e <= t && i + e >= t;
  }
  function $t(t, e, i) {
    var s, n, o;
    for (s = 0, n = t.length; s < n; s++) o = t[s][i], isNaN(o) || (e.min = Math.min(e.min, o), e.max = Math.max(e.max, o));
  }
  function Yt(t) {
    return t * (Ot / 180);
  }
  function Ut(t) {
    return t * (180 / Ot);
  }
  function Xt(t) {
    if (!K(t)) return;
    var e = 1,
      i = 0;
    for (; Math.round(t * e) / e !== t;) e *= 10, i++;
    return i;
  }
  function qt(t, e) {
    var i = e.x - t.x,
      s = e.y - t.y,
      n = Math.sqrt(i * i + s * s);
    var o = Math.atan2(s, i);
    return o < -.5 * Ot && (o += At), {
      angle: o,
      distance: n
    };
  }
  function Kt(t, e) {
    return Math.sqrt(Math.pow(e.x - t.x, 2) + Math.pow(e.y - t.y, 2));
  }
  function Gt(t, e) {
    return (t - e + Tt) % At - Ot;
  }
  function Zt(t) {
    return (t % At + At) % At;
  }
  function Jt(t, e, i, s) {
    var n = Zt(t),
      o = Zt(e),
      a = Zt(i),
      r = Zt(o - n),
      l = Zt(a - n),
      h = Zt(n - o),
      c = Zt(n - a);
    return n === o || n === a || s && o === a || r > l && h < c;
  }
  function Qt(t, e, i) {
    return Math.max(e, Math.min(i, t));
  }
  function te(t) {
    return Qt(t, -32768, 32767);
  }
  function ee(t, e, i) {
    var s = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : 1e-6;
    return t >= Math.min(e, i) - s && t <= Math.max(e, i) + s;
  }
  function ie() {
    return "undefined" != typeof window && "undefined" != typeof document;
  }
  function se(t) {
    var e = t.parentNode;
    return e && "[object ShadowRoot]" === e.toString() && (e = e.host), e;
  }
  function ne(t, e, i) {
    var s;
    return "string" == typeof t ? (s = parseInt(t, 10), -1 !== t.indexOf("%") && (s = s / 100 * e.parentNode[i])) : s = t, s;
  }
  var oe = function oe(t) {
    return window.getComputedStyle(t, null);
  };
  function ae(t, e) {
    return oe(t).getPropertyValue(e);
  }
  var re = ["top", "right", "bottom", "left"];
  function le(t, e, i) {
    var s = {};
    i = i ? "-" + i : "";
    for (var _n5 = 0; _n5 < 4; _n5++) {
      var _o3 = re[_n5];
      s[_o3] = parseFloat(t[e + "-" + _o3 + i]) || 0;
    }
    return s.width = s.left + s.right, s.height = s.top + s.bottom, s;
  }
  function he(t, e) {
    if ("native" in t) return t;
    var i = e.canvas,
      s = e.currentDevicePixelRatio,
      n = oe(i),
      o = "border-box" === n.boxSizing,
      a = le(n, "padding"),
      r = le(n, "border", "width"),
      _ref = function (t, e) {
        var i = t.touches,
          s = i && i.length ? i[0] : t,
          n = s.offsetX,
          o = s.offsetY;
        var a,
          r,
          l = !1;
        if (function (t, e, i) {
          return (t > 0 || e > 0) && (!i || !i.shadowRoot);
        }(n, o, t.target)) a = n, r = o;else {
          var _t3 = e.getBoundingClientRect();
          a = s.clientX - _t3.left, r = s.clientY - _t3.top, l = !0;
        }
        return {
          x: a,
          y: r,
          box: l
        };
      }(t, i),
      l = _ref.x,
      h = _ref.y,
      c = _ref.box,
      d = a.left + (c && r.left),
      u = a.top + (c && r.top);
    var f = e.width,
      g = e.height;
    return o && (f -= a.width + r.width, g -= a.height + r.height), {
      x: Math.round((l - d) / f * i.width / s),
      y: Math.round((h - u) / g * i.height / s)
    };
  }
  var ce = function ce(t) {
    return Math.round(10 * t) / 10;
  };
  function de(t, e, i, s) {
    var n = oe(t),
      o = le(n, "margin"),
      a = ne(n.maxWidth, t, "clientWidth") || Lt,
      r = ne(n.maxHeight, t, "clientHeight") || Lt,
      l = function (t, e, i) {
        var s, n;
        if (void 0 === e || void 0 === i) {
          var _o4 = se(t);
          if (_o4) {
            var _t4 = _o4.getBoundingClientRect(),
              _a5 = oe(_o4),
              _r2 = le(_a5, "border", "width"),
              _l2 = le(_a5, "padding");
            e = _t4.width - _l2.width - _r2.width, i = _t4.height - _l2.height - _r2.height, s = ne(_a5.maxWidth, _o4, "clientWidth"), n = ne(_a5.maxHeight, _o4, "clientHeight");
          } else e = t.clientWidth, i = t.clientHeight;
        }
        return {
          width: e,
          height: i,
          maxWidth: s || Lt,
          maxHeight: n || Lt
        };
      }(t, e, i);
    var h = l.width,
      c = l.height;
    if ("content-box" === n.boxSizing) {
      var _t5 = le(n, "border", "width"),
        _e5 = le(n, "padding");
      h -= _e5.width + _t5.width, c -= _e5.height + _t5.height;
    }
    return h = Math.max(0, h - o.width), c = Math.max(0, s ? Math.floor(h / s) : c - o.height), h = ce(Math.min(h, a, l.maxWidth)), c = ce(Math.min(c, r, l.maxHeight)), h && !c && (c = ce(h / 2)), {
      width: h,
      height: c
    };
  }
  function ue(t, e, i) {
    var s = e || 1,
      n = Math.floor(t.height * s),
      o = Math.floor(t.width * s);
    t.height = n / s, t.width = o / s;
    var a = t.canvas;
    return a.style && (i || !a.style.height && !a.style.width) && (a.style.height = "".concat(t.height, "px"), a.style.width = "".concat(t.width, "px")), (t.currentDevicePixelRatio !== s || a.height !== n || a.width !== o) && (t.currentDevicePixelRatio = s, a.height = n, a.width = o, t.ctx.setTransform(s, 0, 0, s, 0, 0), !0);
  }
  var fe = function () {
    var t = !1;
    try {
      var _e6 = {
        get passive() {
          return t = !0, !1;
        }
      };
      window.addEventListener("test", null, _e6), window.removeEventListener("test", null, _e6);
    } catch (t) {}
    return t;
  }();
  function ge(t, e) {
    var i = ae(t, e),
      s = i && i.match(/^(\d+)(\.\d+)?px$/);
    return s ? +s[1] : void 0;
  }
  function pe(t) {
    return !t || U(t.size) || U(t.family) ? null : (t.style ? t.style + " " : "") + (t.weight ? t.weight + " " : "") + t.size + "px " + t.family;
  }
  function me(t, e, i, s, n) {
    var o = e[n];
    return o || (o = e[n] = t.measureText(n).width, i.push(n)), o > s && (s = o), s;
  }
  function be(t, e, i, s) {
    var n = (s = s || {}).data = s.data || {},
      o = s.garbageCollect = s.garbageCollect || [];
    s.font !== e && (n = s.data = {}, o = s.garbageCollect = [], s.font = e), t.save(), t.font = e;
    var a = 0;
    var r = i.length;
    var l, h, c, d, u;
    for (l = 0; l < r; l++) if (d = i[l], null != d && !0 !== X(d)) a = me(t, n, o, a, d);else if (X(d)) for (h = 0, c = d.length; h < c; h++) u = d[h], null == u || X(u) || (a = me(t, n, o, a, u));
    t.restore();
    var f = o.length / 2;
    if (f > i.length) {
      for (l = 0; l < f; l++) delete n[o[l]];
      o.splice(0, f);
    }
    return a;
  }
  function xe(t, e, i) {
    var s = t.currentDevicePixelRatio,
      n = 0 !== i ? Math.max(i / 2, .5) : 0;
    return Math.round((e - n) * s) / s + n;
  }
  function _e(t, e) {
    (e = e || t.getContext("2d")).save(), e.resetTransform(), e.clearRect(0, 0, t.width, t.height), e.restore();
  }
  function ye(t, e, i, s) {
    var n, o, a, r, l;
    var h = e.pointStyle,
      c = e.rotation,
      d = e.radius;
    var u = (c || 0) * Rt;
    if (h && "object" == _typeof(h) && (n = h.toString(), "[object HTMLImageElement]" === n || "[object HTMLCanvasElement]" === n)) return t.save(), t.translate(i, s), t.rotate(u), t.drawImage(h, -h.width / 2, -h.height / 2, h.width, h.height), void t.restore();
    if (!(isNaN(d) || d <= 0)) {
      switch (t.beginPath(), h) {
        default:
          t.arc(i, s, d, 0, At), t.closePath();
          break;
        case "triangle":
          t.moveTo(i + Math.sin(u) * d, s - Math.cos(u) * d), u += zt, t.lineTo(i + Math.sin(u) * d, s - Math.cos(u) * d), u += zt, t.lineTo(i + Math.sin(u) * d, s - Math.cos(u) * d), t.closePath();
          break;
        case "rectRounded":
          l = .516 * d, r = d - l, o = Math.cos(u + It) * r, a = Math.sin(u + It) * r, t.arc(i - o, s - a, l, u - Ot, u - Et), t.arc(i + a, s - o, l, u - Et, u), t.arc(i + o, s + a, l, u, u + Et), t.arc(i - a, s + o, l, u + Et, u + Ot), t.closePath();
          break;
        case "rect":
          if (!c) {
            r = Math.SQRT1_2 * d, t.rect(i - r, s - r, 2 * r, 2 * r);
            break;
          }
          u += It;
        case "rectRot":
          o = Math.cos(u) * d, a = Math.sin(u) * d, t.moveTo(i - o, s - a), t.lineTo(i + a, s - o), t.lineTo(i + o, s + a), t.lineTo(i - a, s + o), t.closePath();
          break;
        case "crossRot":
          u += It;
        case "cross":
          o = Math.cos(u) * d, a = Math.sin(u) * d, t.moveTo(i - o, s - a), t.lineTo(i + o, s + a), t.moveTo(i + a, s - o), t.lineTo(i - a, s + o);
          break;
        case "star":
          o = Math.cos(u) * d, a = Math.sin(u) * d, t.moveTo(i - o, s - a), t.lineTo(i + o, s + a), t.moveTo(i + a, s - o), t.lineTo(i - a, s + o), u += It, o = Math.cos(u) * d, a = Math.sin(u) * d, t.moveTo(i - o, s - a), t.lineTo(i + o, s + a), t.moveTo(i + a, s - o), t.lineTo(i - a, s + o);
          break;
        case "line":
          o = Math.cos(u) * d, a = Math.sin(u) * d, t.moveTo(i - o, s - a), t.lineTo(i + o, s + a);
          break;
        case "dash":
          t.moveTo(i, s), t.lineTo(i + Math.cos(u) * d, s + Math.sin(u) * d);
      }
      t.fill(), e.borderWidth > 0 && t.stroke();
    }
  }
  function ve(t, e, i) {
    return i = i || .5, !e || t && t.x > e.left - i && t.x < e.right + i && t.y > e.top - i && t.y < e.bottom + i;
  }
  function we(t, e) {
    t.save(), t.beginPath(), t.rect(e.left, e.top, e.right - e.left, e.bottom - e.top), t.clip();
  }
  function Me(t) {
    t.restore();
  }
  function ke(t, e, i, s, n) {
    if (!e) return t.lineTo(i.x, i.y);
    if ("middle" === n) {
      var _s9 = (e.x + i.x) / 2;
      t.lineTo(_s9, e.y), t.lineTo(_s9, i.y);
    } else "after" === n != !!s ? t.lineTo(e.x, i.y) : t.lineTo(i.x, e.y);
    t.lineTo(i.x, i.y);
  }
  function Se(t, e, i, s) {
    if (!e) return t.lineTo(i.x, i.y);
    t.bezierCurveTo(s ? e.cp1x : e.cp2x, s ? e.cp1y : e.cp2y, s ? i.cp2x : i.cp1x, s ? i.cp2y : i.cp1y, i.x, i.y);
  }
  function Pe(t, e, i, s, n) {
    var o = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : {};
    var a = X(e) ? e : [e],
      r = o.strokeWidth > 0 && "" !== o.strokeColor;
    var l, h;
    for (t.save(), t.font = n.string, function (t, e) {
      e.translation && t.translate(e.translation[0], e.translation[1]);
      U(e.rotation) || t.rotate(e.rotation);
      e.color && (t.fillStyle = e.color);
      e.textAlign && (t.textAlign = e.textAlign);
      e.textBaseline && (t.textBaseline = e.textBaseline);
    }(t, o), l = 0; l < a.length; ++l) h = a[l], r && (o.strokeColor && (t.strokeStyle = o.strokeColor), U(o.strokeWidth) || (t.lineWidth = o.strokeWidth), t.strokeText(h, i, s, o.maxWidth)), t.fillText(h, i, s, o.maxWidth), De(t, i, s, h, o), s += n.lineHeight;
    t.restore();
  }
  function De(t, e, i, s, n) {
    if (n.strikethrough || n.underline) {
      var _o5 = t.measureText(s),
        _a6 = e - _o5.actualBoundingBoxLeft,
        _r3 = e + _o5.actualBoundingBoxRight,
        _l3 = i - _o5.actualBoundingBoxAscent,
        _h = i + _o5.actualBoundingBoxDescent,
        _c = n.strikethrough ? (_l3 + _h) / 2 : _h;
      t.strokeStyle = t.fillStyle, t.beginPath(), t.lineWidth = n.decorationWidth || 2, t.moveTo(_a6, _c), t.lineTo(_r3, _c), t.stroke();
    }
  }
  function Ce(t, e) {
    var i = e.x,
      s = e.y,
      n = e.w,
      o = e.h,
      a = e.radius;
    t.arc(i + a.topLeft, s + a.topLeft, a.topLeft, -Et, Ot, !0), t.lineTo(i, s + o - a.bottomLeft), t.arc(i + a.bottomLeft, s + o - a.bottomLeft, a.bottomLeft, Ot, Et, !0), t.lineTo(i + n - a.bottomRight, s + o), t.arc(i + n - a.bottomRight, s + o - a.bottomRight, a.bottomRight, Et, 0, !0), t.lineTo(i + n, s + a.topRight), t.arc(i + n - a.topRight, s + a.topRight, a.topRight, 0, -Et, !0), t.lineTo(i + a.topLeft, s);
  }
  function Oe(t) {
    var _o6;
    var e = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : [""];
    var i = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : t;
    var s = arguments.length > 3 ? arguments[3] : undefined;
    var n = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : function () {
      return t[0];
    };
    ut(s) || (s = Ne("_fallback", t));
    var o = (_o6 = {}, _defineProperty(_o6, Symbol.toStringTag, "Object"), _defineProperty(_o6, "_cacheable", !0), _defineProperty(_o6, "_scopes", t), _defineProperty(_o6, "_rootScopes", i), _defineProperty(_o6, "_fallback", s), _defineProperty(_o6, "_getTarget", n), _defineProperty(_o6, "override", function override(n) {
      return Oe([n].concat(_toConsumableArray(t)), e, i, s);
    }), _o6);
    return new Proxy(o, {
      deleteProperty: function deleteProperty(e, i) {
        return delete e[i], delete e._keys, delete t[0][i], !0;
      },
      get: function get(i, s) {
        return Ee(i, s, function () {
          return function (t, e, i, s) {
            var n;
            var _iterator2 = _createForOfIteratorHelper(e),
              _step2;
            try {
              for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
                var _o7 = _step2.value;
                if (n = Ne(Le(_o7, t), i), ut(n)) return Re(t, n) ? Be(i, s, t, n) : n;
              }
            } catch (err) {
              _iterator2.e(err);
            } finally {
              _iterator2.f();
            }
          }(s, e, t, i);
        });
      },
      getOwnPropertyDescriptor: function getOwnPropertyDescriptor(t, e) {
        return Reflect.getOwnPropertyDescriptor(t._scopes[0], e);
      },
      getPrototypeOf: function getPrototypeOf() {
        return Reflect.getPrototypeOf(t[0]);
      },
      has: function has(t, e) {
        return We(t).includes(e);
      },
      ownKeys: function ownKeys(t) {
        return We(t);
      },
      set: function set(t, e, i) {
        var s = t._storage || (t._storage = n());
        return t[e] = s[e] = i, delete t._keys, !0;
      }
    });
  }
  function Ae(t, e, i, s) {
    var n = {
      _cacheable: !1,
      _proxy: t,
      _context: e,
      _subProxy: i,
      _stack: new Set(),
      _descriptors: Te(t, s),
      setContext: function setContext(e) {
        return Ae(t, e, i, s);
      },
      override: function override(n) {
        return Ae(t.override(n), e, i, s);
      }
    };
    return new Proxy(n, {
      deleteProperty: function deleteProperty(e, i) {
        return delete e[i], delete t[i], !0;
      },
      get: function get(t, e, i) {
        return Ee(t, e, function () {
          return function (t, e, i) {
            var s = t._proxy,
              n = t._context,
              o = t._subProxy,
              a = t._descriptors;
            var r = s[e];
            ft(r) && a.isScriptable(e) && (r = function (t, e, i, s) {
              var n = i._proxy,
                o = i._context,
                a = i._subProxy,
                r = i._stack;
              if (r.has(t)) throw new Error("Recursion detected: " + Array.from(r).join("->") + "->" + t);
              r.add(t), e = e(o, a || s), r["delete"](t), Re(t, e) && (e = Be(n._scopes, n, t, e));
              return e;
            }(e, r, t, i));
            X(r) && r.length && (r = function (t, e, i, s) {
              var n = i._proxy,
                o = i._context,
                a = i._subProxy,
                r = i._descriptors;
              if (ut(o.index) && s(t)) e = e[o.index % e.length];else if (q(e[0])) {
                var _i5 = e,
                  _s10 = n._scopes.filter(function (t) {
                    return t !== _i5;
                  });
                e = [];
                var _iterator3 = _createForOfIteratorHelper(_i5),
                  _step3;
                try {
                  for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
                    var _l4 = _step3.value;
                    var _i6 = Be(_s10, n, t, _l4);
                    e.push(Ae(_i6, o, a && a[t], r));
                  }
                } catch (err) {
                  _iterator3.e(err);
                } finally {
                  _iterator3.f();
                }
              }
              return e;
            }(e, r, t, a.isIndexable));
            Re(e, r) && (r = Ae(r, n, o && o[e], a));
            return r;
          }(t, e, i);
        });
      },
      getOwnPropertyDescriptor: function getOwnPropertyDescriptor(e, i) {
        return e._descriptors.allKeys ? Reflect.has(t, i) ? {
          enumerable: !0,
          configurable: !0
        } : void 0 : Reflect.getOwnPropertyDescriptor(t, i);
      },
      getPrototypeOf: function getPrototypeOf() {
        return Reflect.getPrototypeOf(t);
      },
      has: function has(e, i) {
        return Reflect.has(t, i);
      },
      ownKeys: function ownKeys() {
        return Reflect.ownKeys(t);
      },
      set: function set(e, i, s) {
        return t[i] = s, delete e[i], !0;
      }
    });
  }
  function Te(t) {
    var e = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {
      scriptable: !0,
      indexable: !0
    };
    var _t$_scriptable = t._scriptable,
      i = _t$_scriptable === void 0 ? e.scriptable : _t$_scriptable,
      _t$_indexable = t._indexable,
      s = _t$_indexable === void 0 ? e.indexable : _t$_indexable,
      _t$_allKeys = t._allKeys,
      n = _t$_allKeys === void 0 ? e.allKeys : _t$_allKeys;
    return {
      allKeys: n,
      scriptable: i,
      indexable: s,
      isScriptable: ft(i) ? i : function () {
        return i;
      },
      isIndexable: ft(s) ? s : function () {
        return s;
      }
    };
  }
  var Le = function Le(t, e) {
      return t ? t + dt(e) : e;
    },
    Re = function Re(t, e) {
      return q(e) && "adapters" !== t && (null === Object.getPrototypeOf(e) || e.constructor === Object);
    };
  function Ee(t, e, i) {
    if (Object.prototype.hasOwnProperty.call(t, e)) return t[e];
    var s = i();
    return t[e] = s, s;
  }
  function Ie(t, e, i) {
    return ft(t) ? t(e, i) : t;
  }
  var ze = function ze(t, e) {
    return !0 === t ? e : "string" == typeof t ? ct(e, t) : void 0;
  };
  function Fe(t, e, i, s, n) {
    var _iterator4 = _createForOfIteratorHelper(e),
      _step4;
    try {
      for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
        var _o8 = _step4.value;
        var _e7 = ze(i, _o8);
        if (_e7) {
          t.add(_e7);
          var _o9 = Ie(_e7._fallback, i, n);
          if (ut(_o9) && _o9 !== i && _o9 !== s) return _o9;
        } else if (!1 === _e7 && ut(s) && i !== s) return null;
      }
    } catch (err) {
      _iterator4.e(err);
    } finally {
      _iterator4.f();
    }
    return !1;
  }
  function Be(t, e, i, s) {
    var n = e._rootScopes,
      o = Ie(e._fallback, i, s),
      a = [].concat(_toConsumableArray(t), _toConsumableArray(n)),
      r = new Set();
    r.add(s);
    var l = Ve(r, a, i, o || i, s);
    return null !== l && (!ut(o) || o === i || (l = Ve(r, a, o, l, s), null !== l)) && Oe(Array.from(r), [""], n, o, function () {
      return function (t, e, i) {
        var s = t._getTarget();
        e in s || (s[e] = {});
        var n = s[e];
        if (X(n) && q(i)) return i;
        return n;
      }(e, i, s);
    });
  }
  function Ve(t, e, i, s, n) {
    for (; i;) i = Fe(t, e, i, s, n);
    return i;
  }
  function Ne(t, e) {
    var _iterator5 = _createForOfIteratorHelper(e),
      _step5;
    try {
      for (_iterator5.s(); !(_step5 = _iterator5.n()).done;) {
        var _i7 = _step5.value;
        if (!_i7) continue;
        var _e8 = _i7[t];
        if (ut(_e8)) return _e8;
      }
    } catch (err) {
      _iterator5.e(err);
    } finally {
      _iterator5.f();
    }
  }
  function We(t) {
    var e = t._keys;
    return e || (e = t._keys = function (t) {
      var e = new Set();
      var _iterator6 = _createForOfIteratorHelper(t),
        _step6;
      try {
        for (_iterator6.s(); !(_step6 = _iterator6.n()).done;) {
          var _i8 = _step6.value;
          var _iterator7 = _createForOfIteratorHelper(Object.keys(_i8).filter(function (t) {
              return !t.startsWith("_");
            })),
            _step7;
          try {
            for (_iterator7.s(); !(_step7 = _iterator7.n()).done;) {
              var _t6 = _step7.value;
              e.add(_t6);
            }
          } catch (err) {
            _iterator7.e(err);
          } finally {
            _iterator7.f();
          }
        }
      } catch (err) {
        _iterator6.e(err);
      } finally {
        _iterator6.f();
      }
      return Array.from(e);
    }(t._scopes)), e;
  }
  function He(t, e, i, s) {
    var n = t.iScale,
      _this$_parsing$key = this._parsing.key,
      o = _this$_parsing$key === void 0 ? "r" : _this$_parsing$key,
      a = new Array(s);
    var r, l, h, c;
    for (r = 0, l = s; r < l; ++r) h = r + i, c = e[h], a[r] = {
      r: n.parse(ct(c, o), h)
    };
    return a;
  }
  var je = Number.EPSILON || 1e-14,
    $e = function $e(t, e) {
      return e < t.length && !t[e].skip && t[e];
    },
    Ye = function Ye(t) {
      return "x" === t ? "y" : "x";
    };
  function Ue(t, e, i, s) {
    var n = t.skip ? e : t,
      o = e,
      a = i.skip ? e : i,
      r = Kt(o, n),
      l = Kt(a, o);
    var h = r / (r + l),
      c = l / (r + l);
    h = isNaN(h) ? 0 : h, c = isNaN(c) ? 0 : c;
    var d = s * h,
      u = s * c;
    return {
      previous: {
        x: o.x - d * (a.x - n.x),
        y: o.y - d * (a.y - n.y)
      },
      next: {
        x: o.x + u * (a.x - n.x),
        y: o.y + u * (a.y - n.y)
      }
    };
  }
  function Xe(t) {
    var e = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "x";
    var i = Ye(e),
      s = t.length,
      n = Array(s).fill(0),
      o = Array(s);
    var a,
      r,
      l,
      h = $e(t, 0);
    for (a = 0; a < s; ++a) if (r = l, l = h, h = $e(t, a + 1), l) {
      if (h) {
        var _t7 = h[e] - l[e];
        n[a] = 0 !== _t7 ? (h[i] - l[i]) / _t7 : 0;
      }
      o[a] = r ? h ? Bt(n[a - 1]) !== Bt(n[a]) ? 0 : (n[a - 1] + n[a]) / 2 : n[a - 1] : n[a];
    }
    !function (t, e, i) {
      var s = t.length;
      var n,
        o,
        a,
        r,
        l,
        h = $e(t, 0);
      for (var _c2 = 0; _c2 < s - 1; ++_c2) l = h, h = $e(t, _c2 + 1), l && h && (Ht(e[_c2], 0, je) ? i[_c2] = i[_c2 + 1] = 0 : (n = i[_c2] / e[_c2], o = i[_c2 + 1] / e[_c2], r = Math.pow(n, 2) + Math.pow(o, 2), r <= 9 || (a = 3 / Math.sqrt(r), i[_c2] = n * a * e[_c2], i[_c2 + 1] = o * a * e[_c2])));
    }(t, n, o), function (t, e) {
      var i = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : "x";
      var s = Ye(i),
        n = t.length;
      var o,
        a,
        r,
        l = $e(t, 0);
      for (var _h2 = 0; _h2 < n; ++_h2) {
        if (a = r, r = l, l = $e(t, _h2 + 1), !r) continue;
        var _n6 = r[i],
          _c3 = r[s];
        a && (o = (_n6 - a[i]) / 3, r["cp1".concat(i)] = _n6 - o, r["cp1".concat(s)] = _c3 - o * e[_h2]), l && (o = (l[i] - _n6) / 3, r["cp2".concat(i)] = _n6 + o, r["cp2".concat(s)] = _c3 + o * e[_h2]);
      }
    }(t, o, e);
  }
  function qe(t, e, i) {
    return Math.max(Math.min(t, i), e);
  }
  function Ke(t, e, i, s, n) {
    var o, a, r, l;
    if (e.spanGaps && (t = t.filter(function (t) {
      return !t.skip;
    })), "monotone" === e.cubicInterpolationMode) Xe(t, n);else {
      var _i9 = s ? t[t.length - 1] : t[0];
      for (o = 0, a = t.length; o < a; ++o) r = t[o], l = Ue(_i9, r, t[Math.min(o + 1, a - (s ? 0 : 1)) % a], e.tension), r.cp1x = l.previous.x, r.cp1y = l.previous.y, r.cp2x = l.next.x, r.cp2y = l.next.y, _i9 = r;
    }
    e.capBezierPoints && function (t, e) {
      var i,
        s,
        n,
        o,
        a,
        r = ve(t[0], e);
      for (i = 0, s = t.length; i < s; ++i) a = o, o = r, r = i < s - 1 && ve(t[i + 1], e), o && (n = t[i], a && (n.cp1x = qe(n.cp1x, e.left, e.right), n.cp1y = qe(n.cp1y, e.top, e.bottom)), r && (n.cp2x = qe(n.cp2x, e.left, e.right), n.cp2y = qe(n.cp2y, e.top, e.bottom)));
    }(t, i);
  }
  var Ge = function Ge(t) {
      return 0 === t || 1 === t;
    },
    Ze = function Ze(t, e, i) {
      return -Math.pow(2, 10 * (t -= 1)) * Math.sin((t - e) * At / i);
    },
    Je = function Je(t, e, i) {
      return Math.pow(2, -10 * t) * Math.sin((t - e) * At / i) + 1;
    },
    Qe = {
      linear: function linear(t) {
        return t;
      },
      easeInQuad: function easeInQuad(t) {
        return t * t;
      },
      easeOutQuad: function easeOutQuad(t) {
        return -t * (t - 2);
      },
      easeInOutQuad: function easeInOutQuad(t) {
        return (t /= .5) < 1 ? .5 * t * t : -.5 * (--t * (t - 2) - 1);
      },
      easeInCubic: function easeInCubic(t) {
        return t * t * t;
      },
      easeOutCubic: function easeOutCubic(t) {
        return (t -= 1) * t * t + 1;
      },
      easeInOutCubic: function easeInOutCubic(t) {
        return (t /= .5) < 1 ? .5 * t * t * t : .5 * ((t -= 2) * t * t + 2);
      },
      easeInQuart: function easeInQuart(t) {
        return t * t * t * t;
      },
      easeOutQuart: function easeOutQuart(t) {
        return -((t -= 1) * t * t * t - 1);
      },
      easeInOutQuart: function easeInOutQuart(t) {
        return (t /= .5) < 1 ? .5 * t * t * t * t : -.5 * ((t -= 2) * t * t * t - 2);
      },
      easeInQuint: function easeInQuint(t) {
        return t * t * t * t * t;
      },
      easeOutQuint: function easeOutQuint(t) {
        return (t -= 1) * t * t * t * t + 1;
      },
      easeInOutQuint: function easeInOutQuint(t) {
        return (t /= .5) < 1 ? .5 * t * t * t * t * t : .5 * ((t -= 2) * t * t * t * t + 2);
      },
      easeInSine: function easeInSine(t) {
        return 1 - Math.cos(t * Et);
      },
      easeOutSine: function easeOutSine(t) {
        return Math.sin(t * Et);
      },
      easeInOutSine: function easeInOutSine(t) {
        return -.5 * (Math.cos(Ot * t) - 1);
      },
      easeInExpo: function easeInExpo(t) {
        return 0 === t ? 0 : Math.pow(2, 10 * (t - 1));
      },
      easeOutExpo: function easeOutExpo(t) {
        return 1 === t ? 1 : 1 - Math.pow(2, -10 * t);
      },
      easeInOutExpo: function easeInOutExpo(t) {
        return Ge(t) ? t : t < .5 ? .5 * Math.pow(2, 10 * (2 * t - 1)) : .5 * (2 - Math.pow(2, -10 * (2 * t - 1)));
      },
      easeInCirc: function easeInCirc(t) {
        return t >= 1 ? t : -(Math.sqrt(1 - t * t) - 1);
      },
      easeOutCirc: function easeOutCirc(t) {
        return Math.sqrt(1 - (t -= 1) * t);
      },
      easeInOutCirc: function easeInOutCirc(t) {
        return (t /= .5) < 1 ? -.5 * (Math.sqrt(1 - t * t) - 1) : .5 * (Math.sqrt(1 - (t -= 2) * t) + 1);
      },
      easeInElastic: function easeInElastic(t) {
        return Ge(t) ? t : Ze(t, .075, .3);
      },
      easeOutElastic: function easeOutElastic(t) {
        return Ge(t) ? t : Je(t, .075, .3);
      },
      easeInOutElastic: function easeInOutElastic(t) {
        var e = .1125;
        return Ge(t) ? t : t < .5 ? .5 * Ze(2 * t, e, .45) : .5 + .5 * Je(2 * t - 1, e, .45);
      },
      easeInBack: function easeInBack(t) {
        var e = 1.70158;
        return t * t * ((e + 1) * t - e);
      },
      easeOutBack: function easeOutBack(t) {
        var e = 1.70158;
        return (t -= 1) * t * ((e + 1) * t + e) + 1;
      },
      easeInOutBack: function easeInOutBack(t) {
        var e = 1.70158;
        return (t /= .5) < 1 ? t * t * ((1 + (e *= 1.525)) * t - e) * .5 : .5 * ((t -= 2) * t * ((1 + (e *= 1.525)) * t + e) + 2);
      },
      easeInBounce: function easeInBounce(t) {
        return 1 - Qe.easeOutBounce(1 - t);
      },
      easeOutBounce: function easeOutBounce(t) {
        var e = 7.5625,
          i = 2.75;
        return t < 1 / i ? e * t * t : t < 2 / i ? e * (t -= 1.5 / i) * t + .75 : t < 2.5 / i ? e * (t -= 2.25 / i) * t + .9375 : e * (t -= 2.625 / i) * t + .984375;
      },
      easeInOutBounce: function easeInOutBounce(t) {
        return t < .5 ? .5 * Qe.easeInBounce(2 * t) : .5 * Qe.easeOutBounce(2 * t - 1) + .5;
      }
    };
  function ti(t, e, i, s) {
    return {
      x: t.x + i * (e.x - t.x),
      y: t.y + i * (e.y - t.y)
    };
  }
  function ei(t, e, i, s) {
    return {
      x: t.x + i * (e.x - t.x),
      y: "middle" === s ? i < .5 ? t.y : e.y : "after" === s ? i < 1 ? t.y : e.y : i > 0 ? e.y : t.y
    };
  }
  function ii(t, e, i, s) {
    var n = {
        x: t.cp2x,
        y: t.cp2y
      },
      o = {
        x: e.cp1x,
        y: e.cp1y
      },
      a = ti(t, n, i),
      r = ti(n, o, i),
      l = ti(o, e, i),
      h = ti(a, r, i),
      c = ti(r, l, i);
    return ti(h, c, i);
  }
  var si = new Map();
  function ni(t, e, i) {
    return function (t, e) {
      e = e || {};
      var i = t + JSON.stringify(e);
      var s = si.get(i);
      return s || (s = new Intl.NumberFormat(t, e), si.set(i, s)), s;
    }(e, i).format(t);
  }
  var oi = new RegExp(/^(normal|(\d+(?:\.\d+)?)(px|em|%)?)$/),
    ai = new RegExp(/^(normal|italic|initial|inherit|unset|(oblique( -?[0-9]?[0-9]deg)?))$/);
  function ri(t, e) {
    var i = ("" + t).match(oi);
    if (!i || "normal" === i[1]) return 1.2 * e;
    switch (t = +i[2], i[3]) {
      case "px":
        return t;
      case "%":
        t /= 100;
    }
    return e * t;
  }
  function li(t, e) {
    var i = {},
      s = q(e),
      n = s ? Object.keys(e) : e,
      o = q(t) ? s ? function (i) {
        return Z(t[i], t[e[i]]);
      } : function (e) {
        return t[e];
      } : function () {
        return t;
      };
    var _iterator8 = _createForOfIteratorHelper(n),
      _step8;
    try {
      for (_iterator8.s(); !(_step8 = _iterator8.n()).done;) {
        var _t8 = _step8.value;
        i[_t8] = +o(_t8) || 0;
      }
    } catch (err) {
      _iterator8.e(err);
    } finally {
      _iterator8.f();
    }
    return i;
  }
  function hi(t) {
    return li(t, {
      top: "y",
      right: "x",
      bottom: "y",
      left: "x"
    });
  }
  function ci(t) {
    return li(t, ["topLeft", "topRight", "bottomLeft", "bottomRight"]);
  }
  function di(t) {
    var e = hi(t);
    return e.width = e.left + e.right, e.height = e.top + e.bottom, e;
  }
  function ui(t, e) {
    t = t || {}, e = e || yt.font;
    var i = Z(t.size, e.size);
    "string" == typeof i && (i = parseInt(i, 10));
    var s = Z(t.style, e.style);
    s && !("" + s).match(ai) && (console.warn('Invalid font style specified: "' + s + '"'), s = "");
    var n = {
      family: Z(t.family, e.family),
      lineHeight: ri(Z(t.lineHeight, e.lineHeight), i),
      size: i,
      style: s,
      weight: Z(t.weight, e.weight),
      string: ""
    };
    return n.string = pe(n), n;
  }
  function fi(t, e, i, s) {
    var n,
      o,
      a,
      r = !0;
    for (n = 0, o = t.length; n < o; ++n) if (a = t[n], void 0 !== a && (void 0 !== e && "function" == typeof a && (a = a(e), r = !1), void 0 !== i && X(a) && (a = a[i % a.length], r = !1), void 0 !== a)) return s && !r && (s.cacheable = !1), a;
  }
  function gi(t, e, i) {
    var s = t.min,
      n = t.max,
      o = Q(e, (n - s) / 2),
      a = function a(t, e) {
        return i && 0 === t ? 0 : t + e;
      };
    return {
      min: a(s, -Math.abs(o)),
      max: a(n, o)
    };
  }
  function pi(t, e) {
    return Object.assign(Object.create(t), e);
  }
  function mi(t, e, i) {
    return t ? function (t, e) {
      return {
        x: function x(i) {
          return t + t + e - i;
        },
        setWidth: function setWidth(t) {
          e = t;
        },
        textAlign: function textAlign(t) {
          return "center" === t ? t : "right" === t ? "left" : "right";
        },
        xPlus: function xPlus(t, e) {
          return t - e;
        },
        leftForLtr: function leftForLtr(t, e) {
          return t - e;
        }
      };
    }(e, i) : {
      x: function x(t) {
        return t;
      },
      setWidth: function setWidth(t) {},
      textAlign: function textAlign(t) {
        return t;
      },
      xPlus: function xPlus(t, e) {
        return t + e;
      },
      leftForLtr: function leftForLtr(t, e) {
        return t;
      }
    };
  }
  function bi(t, e) {
    var i, s;
    "ltr" !== e && "rtl" !== e || (i = t.canvas.style, s = [i.getPropertyValue("direction"), i.getPropertyPriority("direction")], i.setProperty("direction", e, "important"), t.prevTextDirection = s);
  }
  function xi(t, e) {
    void 0 !== e && (delete t.prevTextDirection, t.canvas.style.setProperty("direction", e[0], e[1]));
  }
  function _i(t) {
    return "angle" === t ? {
      between: Jt,
      compare: Gt,
      normalize: Zt
    } : {
      between: ee,
      compare: function compare(t, e) {
        return t - e;
      },
      normalize: function normalize(t) {
        return t;
      }
    };
  }
  function yi(_ref2) {
    var t = _ref2.start,
      e = _ref2.end,
      i = _ref2.count,
      s = _ref2.loop,
      n = _ref2.style;
    return {
      start: t % i,
      end: e % i,
      loop: s && (e - t + 1) % i == 0,
      style: n
    };
  }
  function vi(t, e, i) {
    if (!i) return [t];
    var s = i.property,
      n = i.start,
      o = i.end,
      a = e.length,
      _i10 = _i(s),
      r = _i10.compare,
      l = _i10.between,
      h = _i10.normalize,
      _ref3 = function (t, e, i) {
        var s = i.property,
          n = i.start,
          o = i.end,
          _i11 = _i(s),
          a = _i11.between,
          r = _i11.normalize,
          l = e.length;
        var h,
          c,
          d = t.start,
          u = t.end,
          f = t.loop;
        if (f) {
          for (d += l, u += l, h = 0, c = l; h < c && a(r(e[d % l][s]), n, o); ++h) d--, u--;
          d %= l, u %= l;
        }
        return u < d && (u += l), {
          start: d,
          end: u,
          loop: f,
          style: t.style
        };
      }(t, e, i),
      c = _ref3.start,
      d = _ref3.end,
      u = _ref3.loop,
      f = _ref3.style,
      g = [];
    var p,
      m,
      b,
      x = !1,
      _ = null;
    var y = function y() {
        return x || l(n, b, p) && 0 !== r(n, b);
      },
      v = function v() {
        return !x || 0 === r(o, p) || l(o, b, p);
      };
    for (var _t9 = c, _i12 = c; _t9 <= d; ++_t9) m = e[_t9 % a], m.skip || (p = h(m[s]), p !== b && (x = l(p, n, o), null === _ && y() && (_ = 0 === r(p, n) ? _t9 : _i12), null !== _ && v() && (g.push(yi({
      start: _,
      end: _t9,
      loop: u,
      count: a,
      style: f
    })), _ = null), _i12 = _t9, b = p));
    return null !== _ && g.push(yi({
      start: _,
      end: d,
      loop: u,
      count: a,
      style: f
    })), g;
  }
  function wi(t, e) {
    var i = [],
      s = t.segments;
    for (var _n7 = 0; _n7 < s.length; _n7++) {
      var _o10 = vi(s[_n7], t.points, e);
      _o10.length && i.push.apply(i, _toConsumableArray(_o10));
    }
    return i;
  }
  function Mi(t, e) {
    var i = t.points,
      s = t.options.spanGaps,
      n = i.length;
    if (!n) return [];
    var o = !!t._loop,
      _ref4 = function (t, e, i, s) {
        var n = 0,
          o = e - 1;
        if (i && !s) for (; n < e && !t[n].skip;) n++;
        for (; n < e && t[n].skip;) n++;
        for (n %= e, i && (o += n); o > n && t[o % e].skip;) o--;
        return o %= e, {
          start: n,
          end: o
        };
      }(i, n, o, s),
      a = _ref4.start,
      r = _ref4.end;
    if (!0 === s) return ki(t, [{
      start: a,
      end: r,
      loop: o
    }], i, e);
    return ki(t, function (t, e, i, s) {
      var n = t.length,
        o = [];
      var a,
        r = e,
        l = t[e];
      for (a = e + 1; a <= i; ++a) {
        var _i13 = t[a % n];
        _i13.skip || _i13.stop ? l.skip || (s = !1, o.push({
          start: e % n,
          end: (a - 1) % n,
          loop: s
        }), e = r = _i13.stop ? a : null) : (r = a, l.skip && (e = a)), l = _i13;
      }
      return null !== r && o.push({
        start: e % n,
        end: r % n,
        loop: s
      }), o;
    }(i, a, r < a ? r + n : r, !!t._fullLoop && 0 === a && r === n - 1), i, e);
  }
  function ki(t, e, i, s) {
    return s && s.setContext && i ? function (t, e, i, s) {
      var n = t._chart.getContext(),
        o = Si(t.options),
        a = t._datasetIndex,
        r = t.options.spanGaps,
        l = i.length,
        h = [];
      var c = o,
        d = e[0].start,
        u = d;
      function f(t, e, s, n) {
        var o = r ? -1 : 1;
        if (t !== e) {
          for (t += l; i[t % l].skip;) t -= o;
          for (; i[e % l].skip;) e += o;
          t % l != e % l && (h.push({
            start: t % l,
            end: e % l,
            loop: s,
            style: n
          }), c = n, d = e % l);
        }
      }
      var _iterator9 = _createForOfIteratorHelper(e),
        _step9;
      try {
        for (_iterator9.s(); !(_step9 = _iterator9.n()).done;) {
          var _t10 = _step9.value;
          d = r ? d : _t10.start;
          var _e9 = void 0,
            _o11 = i[d % l];
          for (u = d + 1; u <= _t10.end; u++) {
            var _r4 = i[u % l];
            _e9 = Si(s.setContext(pi(n, {
              type: "segment",
              p0: _o11,
              p1: _r4,
              p0DataIndex: (u - 1) % l,
              p1DataIndex: u % l,
              datasetIndex: a
            }))), Pi(_e9, c) && f(d, u - 1, _t10.loop, c), _o11 = _r4, c = _e9;
          }
          d < u - 1 && f(d, u - 1, _t10.loop, c);
        }
      } catch (err) {
        _iterator9.e(err);
      } finally {
        _iterator9.f();
      }
      return h;
    }(t, e, i, s) : e;
  }
  function Si(t) {
    return {
      backgroundColor: t.backgroundColor,
      borderCapStyle: t.borderCapStyle,
      borderDash: t.borderDash,
      borderDashOffset: t.borderDashOffset,
      borderJoinStyle: t.borderJoinStyle,
      borderWidth: t.borderWidth,
      borderColor: t.borderColor
    };
  }
  function Pi(t, e) {
    return e && JSON.stringify(t) !== JSON.stringify(e);
  }
  var Di = Object.freeze({
    __proto__: null,
    easingEffects: Qe,
    isPatternOrGradient: W,
    color: H,
    getHoverColor: j,
    noop: $,
    uid: Y,
    isNullOrUndef: U,
    isArray: X,
    isObject: q,
    isFinite: K,
    finiteOrDefault: G,
    valueOrDefault: Z,
    toPercentage: J,
    toDimension: Q,
    callback: tt,
    each: et,
    _elementsEqual: it,
    clone: st,
    _merger: ot,
    merge: at,
    mergeIf: rt,
    _mergerIf: lt,
    _deprecated: function _deprecated(t, e, i, s) {
      void 0 !== e && console.warn(t + ': "' + i + '" is deprecated. Please use "' + s + '" instead');
    },
    resolveObjectKey: ct,
    _capitalize: dt,
    defined: ut,
    isFunction: ft,
    setsEqual: gt,
    _isClickEvent: pt,
    toFontString: pe,
    _measureText: me,
    _longestText: be,
    _alignPixel: xe,
    clearCanvas: _e,
    drawPoint: ye,
    _isPointInArea: ve,
    clipArea: we,
    unclipArea: Me,
    _steppedLineTo: ke,
    _bezierCurveTo: Se,
    renderText: Pe,
    addRoundedRectPath: Ce,
    _lookup: vt,
    _lookupByKey: wt,
    _rlookupByKey: Mt,
    _filterBetween: kt,
    listenArrayEvents: Pt,
    unlistenArrayEvents: Dt,
    _arrayUnique: Ct,
    _createResolver: Oe,
    _attachContext: Ae,
    _descriptors: Te,
    _parseObjectDataRadialScale: He,
    splineCurve: Ue,
    splineCurveMonotone: Xe,
    _updateBezierControlPoints: Ke,
    _isDomSupported: ie,
    _getParentNode: se,
    getStyle: ae,
    getRelativePosition: he,
    getMaximumSize: de,
    retinaScale: ue,
    supportsEventListenerOptions: fe,
    readUsedSize: ge,
    fontString: function fontString(t, e, i) {
      return e + " " + t + "px " + i;
    },
    requestAnimFrame: t,
    throttled: e,
    debounce: i,
    _toLeftRightCenter: s,
    _alignStartEnd: n,
    _textX: o,
    _pointInLine: ti,
    _steppedInterpolation: ei,
    _bezierInterpolation: ii,
    formatNumber: ni,
    toLineHeight: ri,
    _readValueToProps: li,
    toTRBL: hi,
    toTRBLCorners: ci,
    toPadding: di,
    toFont: ui,
    resolve: fi,
    _addGrace: gi,
    createContext: pi,
    PI: Ot,
    TAU: At,
    PITAU: Tt,
    INFINITY: Lt,
    RAD_PER_DEG: Rt,
    HALF_PI: Et,
    QUARTER_PI: It,
    TWO_THIRDS_PI: zt,
    log10: Ft,
    sign: Bt,
    niceNum: Vt,
    _factorize: Nt,
    isNumber: Wt,
    almostEquals: Ht,
    almostWhole: jt,
    _setMinAndMaxByKey: $t,
    toRadians: Yt,
    toDegrees: Ut,
    _decimalPlaces: Xt,
    getAngleFromPoint: qt,
    distanceBetweenPoints: Kt,
    _angleDiff: Gt,
    _normalizeAngle: Zt,
    _angleBetween: Jt,
    _limitValue: Qt,
    _int16Range: te,
    _isBetween: ee,
    getRtlAdapter: mi,
    overrideTextDirection: bi,
    restoreTextDirection: xi,
    _boundSegment: vi,
    _boundSegments: wi,
    _computeSegments: Mi
  });
  function Ci(t, e, i, s) {
    var n = t.controller,
      o = t.data,
      a = t._sorted,
      r = n._cachedMeta.iScale;
    if (r && e === r.axis && "r" !== e && a && o.length) {
      var _t11 = r._reversePixels ? Mt : wt;
      if (!s) return _t11(o, e, i);
      if (n._sharedOptions) {
        var _s11 = o[0],
          _n8 = "function" == typeof _s11.getRange && _s11.getRange(e);
        if (_n8) {
          var _s12 = _t11(o, e, i - _n8),
            _a7 = _t11(o, e, i + _n8);
          return {
            lo: _s12.lo,
            hi: _a7.hi
          };
        }
      }
    }
    return {
      lo: 0,
      hi: o.length - 1
    };
  }
  function Oi(t, e, i, s, n) {
    var o = t.getSortedVisibleDatasetMetas(),
      a = i[e];
    for (var _t12 = 0, _i14 = o.length; _t12 < _i14; ++_t12) {
      var _o$_t = o[_t12],
        _i15 = _o$_t.index,
        _r5 = _o$_t.data,
        _Ci = Ci(o[_t12], e, a, n),
        _l5 = _Ci.lo,
        _h3 = _Ci.hi;
      for (var _t13 = _l5; _t13 <= _h3; ++_t13) {
        var _e10 = _r5[_t13];
        _e10.skip || s(_e10, _i15, _t13);
      }
    }
  }
  function Ai(t, e, i, s, n) {
    var o = [];
    if (!n && !t.isPointInArea(e)) return o;
    return Oi(t, i, e, function (i, a, r) {
      (n || ve(i, t.chartArea, 0)) && i.inRange(e.x, e.y, s) && o.push({
        element: i,
        datasetIndex: a,
        index: r
      });
    }, !0), o;
  }
  function Ti(t, e, i, s, n, o) {
    var a = [];
    var r = function (t) {
      var e = -1 !== t.indexOf("x"),
        i = -1 !== t.indexOf("y");
      return function (t, s) {
        var n = e ? Math.abs(t.x - s.x) : 0,
          o = i ? Math.abs(t.y - s.y) : 0;
        return Math.sqrt(Math.pow(n, 2) + Math.pow(o, 2));
      };
    }(i);
    var l = Number.POSITIVE_INFINITY;
    return Oi(t, i, e, function (i, h, c) {
      var d = i.inRange(e.x, e.y, n);
      if (s && !d) return;
      var u = i.getCenterPoint(n);
      if (!(!!o || t.isPointInArea(u)) && !d) return;
      var f = r(e, u);
      f < l ? (a = [{
        element: i,
        datasetIndex: h,
        index: c
      }], l = f) : f === l && a.push({
        element: i,
        datasetIndex: h,
        index: c
      });
    }), a;
  }
  function Li(t, e, i, s, n, o) {
    return o || t.isPointInArea(e) ? "r" !== i || s ? Ti(t, e, i, s, n, o) : function (t, e, i, s) {
      var n = [];
      return Oi(t, i, e, function (t, i, o) {
        var _t$getProps = t.getProps(["startAngle", "endAngle"], s),
          a = _t$getProps.startAngle,
          r = _t$getProps.endAngle,
          _qt = qt(t, {
            x: e.x,
            y: e.y
          }),
          l = _qt.angle;
        Jt(l, a, r) && n.push({
          element: t,
          datasetIndex: i,
          index: o
        });
      }), n;
    }(t, e, i, n) : [];
  }
  function Ri(t, e, i, s, n) {
    var o = [],
      a = "x" === i ? "inXRange" : "inYRange";
    var r = !1;
    return Oi(t, i, e, function (t, s, l) {
      t[a](e[i], n) && (o.push({
        element: t,
        datasetIndex: s,
        index: l
      }), r = r || t.inRange(e.x, e.y, n));
    }), s && !r ? [] : o;
  }
  var Ei = {
    evaluateInteractionItems: Oi,
    modes: {
      index: function index(t, e, i, s) {
        var n = he(e, t),
          o = i.axis || "x",
          a = i.includeInvisible || !1,
          r = i.intersect ? Ai(t, n, o, s, a) : Li(t, n, o, !1, s, a),
          l = [];
        return r.length ? (t.getSortedVisibleDatasetMetas().forEach(function (t) {
          var e = r[0].index,
            i = t.data[e];
          i && !i.skip && l.push({
            element: i,
            datasetIndex: t.index,
            index: e
          });
        }), l) : [];
      },
      dataset: function dataset(t, e, i, s) {
        var n = he(e, t),
          o = i.axis || "xy",
          a = i.includeInvisible || !1;
        var r = i.intersect ? Ai(t, n, o, s, a) : Li(t, n, o, !1, s, a);
        if (r.length > 0) {
          var _e11 = r[0].datasetIndex,
            _i16 = t.getDatasetMeta(_e11).data;
          r = [];
          for (var _t14 = 0; _t14 < _i16.length; ++_t14) r.push({
            element: _i16[_t14],
            datasetIndex: _e11,
            index: _t14
          });
        }
        return r;
      },
      point: function point(t, e, i, s) {
        return Ai(t, he(e, t), i.axis || "xy", s, i.includeInvisible || !1);
      },
      nearest: function nearest(t, e, i, s) {
        var n = he(e, t),
          o = i.axis || "xy",
          a = i.includeInvisible || !1;
        return Li(t, n, o, i.intersect, s, a);
      },
      x: function x(t, e, i, s) {
        return Ri(t, he(e, t), "x", i.intersect, s);
      },
      y: function y(t, e, i, s) {
        return Ri(t, he(e, t), "y", i.intersect, s);
      }
    }
  };
  var Ii = ["left", "top", "right", "bottom"];
  function zi(t, e) {
    return t.filter(function (t) {
      return t.pos === e;
    });
  }
  function Fi(t, e) {
    return t.filter(function (t) {
      return -1 === Ii.indexOf(t.pos) && t.box.axis === e;
    });
  }
  function Bi(t, e) {
    return t.sort(function (t, i) {
      var s = e ? i : t,
        n = e ? t : i;
      return s.weight === n.weight ? s.index - n.index : s.weight - n.weight;
    });
  }
  function Vi(t, e) {
    var i = function (t) {
        var e = {};
        var _iterator10 = _createForOfIteratorHelper(t),
          _step10;
        try {
          for (_iterator10.s(); !(_step10 = _iterator10.n()).done;) {
            var _i17 = _step10.value;
            var _t15 = _i17.stack,
              _s13 = _i17.pos,
              _n9 = _i17.stackWeight;
            if (!_t15 || !Ii.includes(_s13)) continue;
            var _o12 = e[_t15] || (e[_t15] = {
              count: 0,
              placed: 0,
              weight: 0,
              size: 0
            });
            _o12.count++, _o12.weight += _n9;
          }
        } catch (err) {
          _iterator10.e(err);
        } finally {
          _iterator10.f();
        }
        return e;
      }(t),
      s = e.vBoxMaxWidth,
      n = e.hBoxMaxHeight;
    var o, a, r;
    for (o = 0, a = t.length; o < a; ++o) {
      r = t[o];
      var _a8 = r.box.fullSize,
        _l6 = i[r.stack],
        _h4 = _l6 && r.stackWeight / _l6.weight;
      r.horizontal ? (r.width = _h4 ? _h4 * s : _a8 && e.availableWidth, r.height = n) : (r.width = s, r.height = _h4 ? _h4 * n : _a8 && e.availableHeight);
    }
    return i;
  }
  function Ni(t, e, i, s) {
    return Math.max(t[i], e[i]) + Math.max(t[s], e[s]);
  }
  function Wi(t, e) {
    t.top = Math.max(t.top, e.top), t.left = Math.max(t.left, e.left), t.bottom = Math.max(t.bottom, e.bottom), t.right = Math.max(t.right, e.right);
  }
  function Hi(t, e, i, s) {
    var n = i.pos,
      o = i.box,
      a = t.maxPadding;
    if (!q(n)) {
      i.size && (t[n] -= i.size);
      var _e12 = s[i.stack] || {
        size: 0,
        count: 1
      };
      _e12.size = Math.max(_e12.size, i.horizontal ? o.height : o.width), i.size = _e12.size / _e12.count, t[n] += i.size;
    }
    o.getPadding && Wi(a, o.getPadding());
    var r = Math.max(0, e.outerWidth - Ni(a, t, "left", "right")),
      l = Math.max(0, e.outerHeight - Ni(a, t, "top", "bottom")),
      h = r !== t.w,
      c = l !== t.h;
    return t.w = r, t.h = l, i.horizontal ? {
      same: h,
      other: c
    } : {
      same: c,
      other: h
    };
  }
  function ji(t, e) {
    var i = e.maxPadding;
    function s(t) {
      var s = {
        left: 0,
        top: 0,
        right: 0,
        bottom: 0
      };
      return t.forEach(function (t) {
        s[t] = Math.max(e[t], i[t]);
      }), s;
    }
    return s(t ? ["left", "right"] : ["top", "bottom"]);
  }
  function $i(t, e, i, s) {
    var n = [];
    var o, a, r, l, h, c;
    for (o = 0, a = t.length, h = 0; o < a; ++o) {
      r = t[o], l = r.box, l.update(r.width || e.w, r.height || e.h, ji(r.horizontal, e));
      var _Hi = Hi(e, i, r, s),
        _a9 = _Hi.same,
        _d = _Hi.other;
      h |= _a9 && n.length, c = c || _d, l.fullSize || n.push(r);
    }
    return h && $i(n, e, i, s) || c;
  }
  function Yi(t, e, i, s, n) {
    t.top = i, t.left = e, t.right = e + s, t.bottom = i + n, t.width = s, t.height = n;
  }
  function Ui(t, e, i, s) {
    var n = i.padding;
    var o = e.x,
      a = e.y;
    var _iterator11 = _createForOfIteratorHelper(t),
      _step11;
    try {
      for (_iterator11.s(); !(_step11 = _iterator11.n()).done;) {
        var _r6 = _step11.value;
        var _t16 = _r6.box,
          _l7 = s[_r6.stack] || {
            count: 1,
            placed: 0,
            weight: 1
          },
          _h5 = _r6.stackWeight / _l7.weight || 1;
        if (_r6.horizontal) {
          var _s14 = e.w * _h5,
            _o13 = _l7.size || _t16.height;
          ut(_l7.start) && (a = _l7.start), _t16.fullSize ? Yi(_t16, n.left, a, i.outerWidth - n.right - n.left, _o13) : Yi(_t16, e.left + _l7.placed, a, _s14, _o13), _l7.start = a, _l7.placed += _s14, a = _t16.bottom;
        } else {
          var _s15 = e.h * _h5,
            _a10 = _l7.size || _t16.width;
          ut(_l7.start) && (o = _l7.start), _t16.fullSize ? Yi(_t16, o, n.top, _a10, i.outerHeight - n.bottom - n.top) : Yi(_t16, o, e.top + _l7.placed, _a10, _s15), _l7.start = o, _l7.placed += _s15, o = _t16.right;
        }
      }
    } catch (err) {
      _iterator11.e(err);
    } finally {
      _iterator11.f();
    }
    e.x = o, e.y = a;
  }
  yt.set("layout", {
    autoPadding: !0,
    padding: {
      top: 0,
      right: 0,
      bottom: 0,
      left: 0
    }
  });
  var Xi = {
    addBox: function addBox(t, e) {
      t.boxes || (t.boxes = []), e.fullSize = e.fullSize || !1, e.position = e.position || "top", e.weight = e.weight || 0, e._layers = e._layers || function () {
        return [{
          z: 0,
          draw: function draw(t) {
            e.draw(t);
          }
        }];
      }, t.boxes.push(e);
    },
    removeBox: function removeBox(t, e) {
      var i = t.boxes ? t.boxes.indexOf(e) : -1;
      -1 !== i && t.boxes.splice(i, 1);
    },
    configure: function configure(t, e, i) {
      e.fullSize = i.fullSize, e.position = i.position, e.weight = i.weight;
    },
    update: function update(t, e, i, s) {
      if (!t) return;
      var n = di(t.options.layout.padding),
        o = Math.max(e - n.width, 0),
        a = Math.max(i - n.height, 0),
        r = function (t) {
          var e = function (t) {
              var e = [];
              var i, s, n, o, a, r;
              for (i = 0, s = (t || []).length; i < s; ++i) {
                var _n10, _n10$options, _n10$options$stackWei;
                n = t[i], (_n10 = n, o = _n10.position, _n10$options = _n10.options, a = _n10$options.stack, _n10$options$stackWei = _n10$options.stackWeight, r = _n10$options$stackWei === void 0 ? 1 : _n10$options$stackWei), e.push({
                  index: i,
                  box: n,
                  pos: o,
                  horizontal: n.isHorizontal(),
                  weight: n.weight,
                  stack: a && o + a,
                  stackWeight: r
                });
              }
              return e;
            }(t),
            i = Bi(e.filter(function (t) {
              return t.box.fullSize;
            }), !0),
            s = Bi(zi(e, "left"), !0),
            n = Bi(zi(e, "right")),
            o = Bi(zi(e, "top"), !0),
            a = Bi(zi(e, "bottom")),
            r = Fi(e, "x"),
            l = Fi(e, "y");
          return {
            fullSize: i,
            leftAndTop: s.concat(o),
            rightAndBottom: n.concat(l).concat(a).concat(r),
            chartArea: zi(e, "chartArea"),
            vertical: s.concat(n).concat(l),
            horizontal: o.concat(a).concat(r)
          };
        }(t.boxes),
        l = r.vertical,
        h = r.horizontal;
      et(t.boxes, function (t) {
        "function" == typeof t.beforeLayout && t.beforeLayout();
      });
      var c = l.reduce(function (t, e) {
          return e.box.options && !1 === e.box.options.display ? t : t + 1;
        }, 0) || 1,
        d = Object.freeze({
          outerWidth: e,
          outerHeight: i,
          padding: n,
          availableWidth: o,
          availableHeight: a,
          vBoxMaxWidth: o / 2 / c,
          hBoxMaxHeight: a / 2
        }),
        u = Object.assign({}, n);
      Wi(u, di(s));
      var f = Object.assign({
          maxPadding: u,
          w: o,
          h: a,
          x: n.left,
          y: n.top
        }, n),
        g = Vi(l.concat(h), d);
      $i(r.fullSize, f, d, g), $i(l, f, d, g), $i(h, f, d, g) && $i(l, f, d, g), function (t) {
        var e = t.maxPadding;
        function i(i) {
          var s = Math.max(e[i] - t[i], 0);
          return t[i] += s, s;
        }
        t.y += i("top"), t.x += i("left"), i("right"), i("bottom");
      }(f), Ui(r.leftAndTop, f, d, g), f.x += f.w, f.y += f.h, Ui(r.rightAndBottom, f, d, g), t.chartArea = {
        left: f.left,
        top: f.top,
        right: f.left + f.w,
        bottom: f.top + f.h,
        height: f.h,
        width: f.w
      }, et(r.chartArea, function (e) {
        var i = e.box;
        Object.assign(i, t.chartArea), i.update(f.w, f.h, {
          left: 0,
          top: 0,
          right: 0,
          bottom: 0
        });
      });
    }
  };
  var qi = /*#__PURE__*/function () {
    function qi() {
      _classCallCheck(this, qi);
    }
    _createClass(qi, [{
      key: "acquireContext",
      value: function acquireContext(t, e) {}
    }, {
      key: "releaseContext",
      value: function releaseContext(t) {
        return !1;
      }
    }, {
      key: "addEventListener",
      value: function addEventListener(t, e, i) {}
    }, {
      key: "removeEventListener",
      value: function removeEventListener(t, e, i) {}
    }, {
      key: "getDevicePixelRatio",
      value: function getDevicePixelRatio() {
        return 1;
      }
    }, {
      key: "getMaximumSize",
      value: function getMaximumSize(t, e, i, s) {
        return e = Math.max(0, e || t.width), i = i || t.height, {
          width: e,
          height: Math.max(0, s ? Math.floor(e / s) : i)
        };
      }
    }, {
      key: "isAttached",
      value: function isAttached(t) {
        return !0;
      }
    }, {
      key: "updateConfig",
      value: function updateConfig(t) {}
    }]);
    return qi;
  }();
  var Ki = /*#__PURE__*/function (_qi) {
    _inherits(Ki, _qi);
    var _super = _createSuper(Ki);
    function Ki() {
      _classCallCheck(this, Ki);
      return _super.apply(this, arguments);
    }
    _createClass(Ki, [{
      key: "acquireContext",
      value: function acquireContext(t) {
        return t && t.getContext && t.getContext("2d") || null;
      }
    }, {
      key: "updateConfig",
      value: function updateConfig(t) {
        t.options.animation = !1;
      }
    }]);
    return Ki;
  }(qi);
  var Gi = {
      touchstart: "mousedown",
      touchmove: "mousemove",
      touchend: "mouseup",
      pointerenter: "mouseenter",
      pointerdown: "mousedown",
      pointermove: "mousemove",
      pointerup: "mouseup",
      pointerleave: "mouseout",
      pointerout: "mouseout"
    },
    Zi = function Zi(t) {
      return null === t || "" === t;
    };
  var Ji = !!fe && {
    passive: !0
  };
  function Qi(t, e, i) {
    t.canvas.removeEventListener(e, i, Ji);
  }
  function ts(t, e) {
    var _iterator12 = _createForOfIteratorHelper(t),
      _step12;
    try {
      for (_iterator12.s(); !(_step12 = _iterator12.n()).done;) {
        var _i18 = _step12.value;
        if (_i18 === e || _i18.contains(e)) return !0;
      }
    } catch (err) {
      _iterator12.e(err);
    } finally {
      _iterator12.f();
    }
  }
  function es(t, e, i) {
    var s = t.canvas,
      n = new MutationObserver(function (t) {
        var e = !1;
        var _iterator13 = _createForOfIteratorHelper(t),
          _step13;
        try {
          for (_iterator13.s(); !(_step13 = _iterator13.n()).done;) {
            var _i19 = _step13.value;
            e = e || ts(_i19.addedNodes, s), e = e && !ts(_i19.removedNodes, s);
          }
        } catch (err) {
          _iterator13.e(err);
        } finally {
          _iterator13.f();
        }
        e && i();
      });
    return n.observe(document, {
      childList: !0,
      subtree: !0
    }), n;
  }
  function is(t, e, i) {
    var s = t.canvas,
      n = new MutationObserver(function (t) {
        var e = !1;
        var _iterator14 = _createForOfIteratorHelper(t),
          _step14;
        try {
          for (_iterator14.s(); !(_step14 = _iterator14.n()).done;) {
            var _i20 = _step14.value;
            e = e || ts(_i20.removedNodes, s), e = e && !ts(_i20.addedNodes, s);
          }
        } catch (err) {
          _iterator14.e(err);
        } finally {
          _iterator14.f();
        }
        e && i();
      });
    return n.observe(document, {
      childList: !0,
      subtree: !0
    }), n;
  }
  var ss = new Map();
  var ns = 0;
  function os() {
    var t = window.devicePixelRatio;
    t !== ns && (ns = t, ss.forEach(function (e, i) {
      i.currentDevicePixelRatio !== t && e();
    }));
  }
  function as(t, i, s) {
    var n = t.canvas,
      o = n && se(n);
    if (!o) return;
    var a = e(function (t, e) {
        var i = o.clientWidth;
        s(t, e), i < o.clientWidth && s();
      }, window),
      r = new ResizeObserver(function (t) {
        var e = t[0],
          i = e.contentRect.width,
          s = e.contentRect.height;
        0 === i && 0 === s || a(i, s);
      });
    return r.observe(o), function (t, e) {
      ss.size || window.addEventListener("resize", os), ss.set(t, e);
    }(t, a), r;
  }
  function rs(t, e, i) {
    i && i.disconnect(), "resize" === e && function (t) {
      ss["delete"](t), ss.size || window.removeEventListener("resize", os);
    }(t);
  }
  function ls(t, i, s) {
    var n = t.canvas,
      o = e(function (e) {
        null !== t.ctx && s(function (t, e) {
          var i = Gi[t.type] || t.type,
            _he = he(t, e),
            s = _he.x,
            n = _he.y;
          return {
            type: i,
            chart: e,
            "native": t,
            x: void 0 !== s ? s : null,
            y: void 0 !== n ? n : null
          };
        }(e, t));
      }, t, function (t) {
        var e = t[0];
        return [e, e.offsetX, e.offsetY];
      });
    return function (t, e, i) {
      t.addEventListener(e, i, Ji);
    }(n, i, o), o;
  }
  var hs = /*#__PURE__*/function (_qi2) {
    _inherits(hs, _qi2);
    var _super2 = _createSuper(hs);
    function hs() {
      _classCallCheck(this, hs);
      return _super2.apply(this, arguments);
    }
    _createClass(hs, [{
      key: "acquireContext",
      value: function acquireContext(t, e) {
        var i = t && t.getContext && t.getContext("2d");
        return i && i.canvas === t ? (function (t, e) {
          var i = t.style,
            s = t.getAttribute("height"),
            n = t.getAttribute("width");
          if (t.$chartjs = {
            initial: {
              height: s,
              width: n,
              style: {
                display: i.display,
                height: i.height,
                width: i.width
              }
            }
          }, i.display = i.display || "block", i.boxSizing = i.boxSizing || "border-box", Zi(n)) {
            var _e13 = ge(t, "width");
            void 0 !== _e13 && (t.width = _e13);
          }
          if (Zi(s)) if ("" === t.style.height) t.height = t.width / (e || 2);else {
            var _e14 = ge(t, "height");
            void 0 !== _e14 && (t.height = _e14);
          }
        }(t, e), i) : null;
      }
    }, {
      key: "releaseContext",
      value: function releaseContext(t) {
        var e = t.canvas;
        if (!e.$chartjs) return !1;
        var i = e.$chartjs.initial;
        ["height", "width"].forEach(function (t) {
          var s = i[t];
          U(s) ? e.removeAttribute(t) : e.setAttribute(t, s);
        });
        var s = i.style || {};
        return Object.keys(s).forEach(function (t) {
          e.style[t] = s[t];
        }), e.width = e.width, delete e.$chartjs, !0;
      }
    }, {
      key: "addEventListener",
      value: function addEventListener(t, e, i) {
        this.removeEventListener(t, e);
        var s = t.$proxies || (t.$proxies = {}),
          n = {
            attach: es,
            detach: is,
            resize: as
          }[e] || ls;
        s[e] = n(t, e, i);
      }
    }, {
      key: "removeEventListener",
      value: function removeEventListener(t, e) {
        var i = t.$proxies || (t.$proxies = {}),
          s = i[e];
        if (!s) return;
        (({
          attach: rs,
          detach: rs,
          resize: rs
        })[e] || Qi)(t, e, s), i[e] = void 0;
      }
    }, {
      key: "getDevicePixelRatio",
      value: function getDevicePixelRatio() {
        return window.devicePixelRatio;
      }
    }, {
      key: "getMaximumSize",
      value: function getMaximumSize(t, e, i, s) {
        return de(t, e, i, s);
      }
    }, {
      key: "isAttached",
      value: function isAttached(t) {
        var e = se(t);
        return !(!e || !e.isConnected);
      }
    }]);
    return hs;
  }(qi);
  function cs(t) {
    return !ie() || "undefined" != typeof OffscreenCanvas && t instanceof OffscreenCanvas ? Ki : hs;
  }
  var ds = Object.freeze({
    __proto__: null,
    _detectPlatform: cs,
    BasePlatform: qi,
    BasicPlatform: Ki,
    DomPlatform: hs
  });
  var us = "transparent",
    fs = {
      "boolean": function boolean(t, e, i) {
        return i > .5 ? e : t;
      },
      color: function color(t, e, i) {
        var s = H(t || us),
          n = s.valid && H(e || us);
        return n && n.valid ? n.mix(s, i).hexString() : e;
      },
      number: function number(t, e, i) {
        return t + (e - t) * i;
      }
    };
  var gs = /*#__PURE__*/function () {
    function gs(t, e, i, s) {
      _classCallCheck(this, gs);
      var n = e[i];
      s = fi([t.to, s, n, t.from]);
      var o = fi([t.from, n, s]);
      this._active = !0, this._fn = t.fn || fs[t.type || _typeof(o)], this._easing = Qe[t.easing] || Qe.linear, this._start = Math.floor(Date.now() + (t.delay || 0)), this._duration = this._total = Math.floor(t.duration), this._loop = !!t.loop, this._target = e, this._prop = i, this._from = o, this._to = s, this._promises = void 0;
    }
    _createClass(gs, [{
      key: "active",
      value: function active() {
        return this._active;
      }
    }, {
      key: "update",
      value: function update(t, e, i) {
        if (this._active) {
          this._notify(!1);
          var _s16 = this._target[this._prop],
            _n11 = i - this._start,
            _o14 = this._duration - _n11;
          this._start = i, this._duration = Math.floor(Math.max(_o14, t.duration)), this._total += _n11, this._loop = !!t.loop, this._to = fi([t.to, e, _s16, t.from]), this._from = fi([t.from, _s16, e]);
        }
      }
    }, {
      key: "cancel",
      value: function cancel() {
        this._active && (this.tick(Date.now()), this._active = !1, this._notify(!1));
      }
    }, {
      key: "tick",
      value: function tick(t) {
        var e = t - this._start,
          i = this._duration,
          s = this._prop,
          n = this._from,
          o = this._loop,
          a = this._to;
        var r;
        if (this._active = n !== a && (o || e < i), !this._active) return this._target[s] = a, void this._notify(!0);
        e < 0 ? this._target[s] = n : (r = e / i % 2, r = o && r > 1 ? 2 - r : r, r = this._easing(Math.min(1, Math.max(0, r))), this._target[s] = this._fn(n, a, r));
      }
    }, {
      key: "wait",
      value: function wait() {
        var t = this._promises || (this._promises = []);
        return new Promise(function (e, i) {
          t.push({
            res: e,
            rej: i
          });
        });
      }
    }, {
      key: "_notify",
      value: function _notify(t) {
        var e = t ? "res" : "rej",
          i = this._promises || [];
        for (var _t17 = 0; _t17 < i.length; _t17++) i[_t17][e]();
      }
    }]);
    return gs;
  }();
  yt.set("animation", {
    delay: void 0,
    duration: 1e3,
    easing: "easeOutQuart",
    fn: void 0,
    from: void 0,
    loop: void 0,
    to: void 0,
    type: void 0
  });
  var ps = Object.keys(yt.animation);
  yt.describe("animation", {
    _fallback: !1,
    _indexable: !1,
    _scriptable: function _scriptable(t) {
      return "onProgress" !== t && "onComplete" !== t && "fn" !== t;
    }
  }), yt.set("animations", {
    colors: {
      type: "color",
      properties: ["color", "borderColor", "backgroundColor"]
    },
    numbers: {
      type: "number",
      properties: ["x", "y", "borderWidth", "radius", "tension"]
    }
  }), yt.describe("animations", {
    _fallback: "animation"
  }), yt.set("transitions", {
    active: {
      animation: {
        duration: 400
      }
    },
    resize: {
      animation: {
        duration: 0
      }
    },
    show: {
      animations: {
        colors: {
          from: "transparent"
        },
        visible: {
          type: "boolean",
          duration: 0
        }
      }
    },
    hide: {
      animations: {
        colors: {
          to: "transparent"
        },
        visible: {
          type: "boolean",
          easing: "linear",
          fn: function fn(t) {
            return 0 | t;
          }
        }
      }
    }
  });
  var ms = /*#__PURE__*/function () {
    function ms(t, e) {
      _classCallCheck(this, ms);
      this._chart = t, this._properties = new Map(), this.configure(e);
    }
    _createClass(ms, [{
      key: "configure",
      value: function configure(t) {
        if (!q(t)) return;
        var e = this._properties;
        Object.getOwnPropertyNames(t).forEach(function (i) {
          var s = t[i];
          if (!q(s)) return;
          var n = {};
          for (var _i21 = 0, _ps = ps; _i21 < _ps.length; _i21++) {
            var _t18 = _ps[_i21];
            n[_t18] = s[_t18];
          }
          (X(s.properties) && s.properties || [i]).forEach(function (t) {
            t !== i && e.has(t) || e.set(t, n);
          });
        });
      }
    }, {
      key: "_animateOptions",
      value: function _animateOptions(t, e) {
        var i = e.options,
          s = function (t, e) {
            if (!e) return;
            var i = t.options;
            if (!i) return void (t.options = e);
            i.$shared && (t.options = i = Object.assign({}, i, {
              $shared: !1,
              $animations: {}
            }));
            return i;
          }(t, i);
        if (!s) return [];
        var n = this._createAnimations(s, i);
        return i.$shared && function (t, e) {
          var i = [],
            s = Object.keys(e);
          for (var _e15 = 0; _e15 < s.length; _e15++) {
            var _n12 = t[s[_e15]];
            _n12 && _n12.active() && i.push(_n12.wait());
          }
          return Promise.all(i);
        }(t.options.$animations, i).then(function () {
          t.options = i;
        }, function () {}), n;
      }
    }, {
      key: "_createAnimations",
      value: function _createAnimations(t, e) {
        var i = this._properties,
          s = [],
          n = t.$animations || (t.$animations = {}),
          o = Object.keys(e),
          a = Date.now();
        var r;
        for (r = o.length - 1; r >= 0; --r) {
          var _l8 = o[r];
          if ("$" === _l8.charAt(0)) continue;
          if ("options" === _l8) {
            s.push.apply(s, _toConsumableArray(this._animateOptions(t, e)));
            continue;
          }
          var _h6 = e[_l8];
          var _c4 = n[_l8];
          var _d2 = i.get(_l8);
          if (_c4) {
            if (_d2 && _c4.active()) {
              _c4.update(_d2, _h6, a);
              continue;
            }
            _c4.cancel();
          }
          _d2 && _d2.duration ? (n[_l8] = _c4 = new gs(_d2, t, _l8, _h6), s.push(_c4)) : t[_l8] = _h6;
        }
        return s;
      }
    }, {
      key: "update",
      value: function update(t, e) {
        if (0 === this._properties.size) return void Object.assign(t, e);
        var i = this._createAnimations(t, e);
        return i.length ? (a.add(this._chart, i), !0) : void 0;
      }
    }]);
    return ms;
  }();
  function bs(t, e) {
    var i = t && t.options || {},
      s = i.reverse,
      n = void 0 === i.min ? e : 0,
      o = void 0 === i.max ? e : 0;
    return {
      start: s ? o : n,
      end: s ? n : o
    };
  }
  function xs(t, e) {
    var i = [],
      s = t._getSortedDatasetMetas(e);
    var n, o;
    for (n = 0, o = s.length; n < o; ++n) i.push(s[n].index);
    return i;
  }
  function _s(t, e, i) {
    var s = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : {};
    var n = t.keys,
      o = "single" === s.mode;
    var a, r, l, h;
    if (null !== e) {
      for (a = 0, r = n.length; a < r; ++a) {
        if (l = +n[a], l === i) {
          if (s.all) continue;
          break;
        }
        h = t.values[l], K(h) && (o || 0 === e || Bt(e) === Bt(h)) && (e += h);
      }
      return e;
    }
  }
  function ys(t, e) {
    var i = t && t.options.stacked;
    return i || void 0 === i && void 0 !== e.stack;
  }
  function vs(t, e, i) {
    var s = t[e] || (t[e] = {});
    return s[i] || (s[i] = {});
  }
  function ws(t, e, i, s) {
    var _iterator15 = _createForOfIteratorHelper(e.getMatchingVisibleMetas(s).reverse()),
      _step15;
    try {
      for (_iterator15.s(); !(_step15 = _iterator15.n()).done;) {
        var _n13 = _step15.value;
        var _e16 = t[_n13.index];
        if (i && _e16 > 0 || !i && _e16 < 0) return _n13.index;
      }
    } catch (err) {
      _iterator15.e(err);
    } finally {
      _iterator15.f();
    }
    return null;
  }
  function Ms(t, e) {
    var i = t.chart,
      s = t._cachedMeta,
      n = i._stacks || (i._stacks = {}),
      o = s.iScale,
      a = s.vScale,
      r = s.index,
      l = o.axis,
      h = a.axis,
      c = function (t, e, i) {
        return "".concat(t.id, ".").concat(e.id, ".").concat(i.stack || i.type);
      }(o, a, s),
      d = e.length;
    var u;
    for (var _t19 = 0; _t19 < d; ++_t19) {
      var _i22 = e[_t19],
        _o15 = _i22[l],
        _d3 = _i22[h];
      u = (_i22._stacks || (_i22._stacks = {}))[h] = vs(n, c, _o15), u[r] = _d3, u._top = ws(u, a, !0, s.type), u._bottom = ws(u, a, !1, s.type);
    }
  }
  function ks(t, e) {
    var i = t.scales;
    return Object.keys(i).filter(function (t) {
      return i[t].axis === e;
    }).shift();
  }
  function Ss(t, e) {
    var i = t.controller.index,
      s = t.vScale && t.vScale.axis;
    if (s) {
      e = e || t._parsed;
      var _iterator16 = _createForOfIteratorHelper(e),
        _step16;
      try {
        for (_iterator16.s(); !(_step16 = _iterator16.n()).done;) {
          var _t20 = _step16.value;
          var _e17 = _t20._stacks;
          if (!_e17 || void 0 === _e17[s] || void 0 === _e17[s][i]) return;
          delete _e17[s][i];
        }
      } catch (err) {
        _iterator16.e(err);
      } finally {
        _iterator16.f();
      }
    }
  }
  var Ps = function Ps(t) {
      return "reset" === t || "none" === t;
    },
    Ds = function Ds(t, e) {
      return e ? t : Object.assign({}, t);
    };
  var Cs = /*#__PURE__*/function () {
    function Cs(t, e) {
      _classCallCheck(this, Cs);
      this.chart = t, this._ctx = t.ctx, this.index = e, this._cachedDataOpts = {}, this._cachedMeta = this.getMeta(), this._type = this._cachedMeta.type, this.options = void 0, this._parsing = !1, this._data = void 0, this._objectData = void 0, this._sharedOptions = void 0, this._drawStart = void 0, this._drawCount = void 0, this.enableOptionSharing = !1, this.supportsDecimation = !1, this.$context = void 0, this._syncList = [], this.initialize();
    }
    _createClass(Cs, [{
      key: "initialize",
      value: function initialize() {
        var t = this._cachedMeta;
        this.configure(), this.linkScales(), t._stacked = ys(t.vScale, t), this.addElements();
      }
    }, {
      key: "updateIndex",
      value: function updateIndex(t) {
        this.index !== t && Ss(this._cachedMeta), this.index = t;
      }
    }, {
      key: "linkScales",
      value: function linkScales() {
        var t = this.chart,
          e = this._cachedMeta,
          i = this.getDataset(),
          s = function s(t, e, i, _s17) {
            return "x" === t ? e : "r" === t ? _s17 : i;
          },
          n = e.xAxisID = Z(i.xAxisID, ks(t, "x")),
          o = e.yAxisID = Z(i.yAxisID, ks(t, "y")),
          a = e.rAxisID = Z(i.rAxisID, ks(t, "r")),
          r = e.indexAxis,
          l = e.iAxisID = s(r, n, o, a),
          h = e.vAxisID = s(r, o, n, a);
        e.xScale = this.getScaleForId(n), e.yScale = this.getScaleForId(o), e.rScale = this.getScaleForId(a), e.iScale = this.getScaleForId(l), e.vScale = this.getScaleForId(h);
      }
    }, {
      key: "getDataset",
      value: function getDataset() {
        return this.chart.data.datasets[this.index];
      }
    }, {
      key: "getMeta",
      value: function getMeta() {
        return this.chart.getDatasetMeta(this.index);
      }
    }, {
      key: "getScaleForId",
      value: function getScaleForId(t) {
        return this.chart.scales[t];
      }
    }, {
      key: "_getOtherScale",
      value: function _getOtherScale(t) {
        var e = this._cachedMeta;
        return t === e.iScale ? e.vScale : e.iScale;
      }
    }, {
      key: "reset",
      value: function reset() {
        this._update("reset");
      }
    }, {
      key: "_destroy",
      value: function _destroy() {
        var t = this._cachedMeta;
        this._data && Dt(this._data, this), t._stacked && Ss(t);
      }
    }, {
      key: "_dataCheck",
      value: function _dataCheck() {
        var t = this.getDataset(),
          e = t.data || (t.data = []),
          i = this._data;
        if (q(e)) this._data = function (t) {
          var e = Object.keys(t),
            i = new Array(e.length);
          var s, n, o;
          for (s = 0, n = e.length; s < n; ++s) o = e[s], i[s] = {
            x: o,
            y: t[o]
          };
          return i;
        }(e);else if (i !== e) {
          if (i) {
            Dt(i, this);
            var _t21 = this._cachedMeta;
            Ss(_t21), _t21._parsed = [];
          }
          e && Object.isExtensible(e) && Pt(e, this), this._syncList = [], this._data = e;
        }
      }
    }, {
      key: "addElements",
      value: function addElements() {
        var t = this._cachedMeta;
        this._dataCheck(), this.datasetElementType && (t.dataset = new this.datasetElementType());
      }
    }, {
      key: "buildOrUpdateElements",
      value: function buildOrUpdateElements(t) {
        var e = this._cachedMeta,
          i = this.getDataset();
        var s = !1;
        this._dataCheck();
        var n = e._stacked;
        e._stacked = ys(e.vScale, e), e.stack !== i.stack && (s = !0, Ss(e), e.stack = i.stack), this._resyncElements(t), (s || n !== e._stacked) && Ms(this, e._parsed);
      }
    }, {
      key: "configure",
      value: function configure() {
        var t = this.chart.config,
          e = t.datasetScopeKeys(this._type),
          i = t.getOptionScopes(this.getDataset(), e, !0);
        this.options = t.createResolver(i, this.getContext()), this._parsing = this.options.parsing, this._cachedDataOpts = {};
      }
    }, {
      key: "parse",
      value: function parse(t, e) {
        var i = this._cachedMeta,
          s = this._data,
          n = i.iScale,
          o = i._stacked,
          a = n.axis;
        var r,
          l,
          h,
          c = 0 === t && e === s.length || i._sorted,
          d = t > 0 && i._parsed[t - 1];
        if (!1 === this._parsing) i._parsed = s, i._sorted = !0, h = s;else {
          h = X(s[t]) ? this.parseArrayData(i, s, t, e) : q(s[t]) ? this.parseObjectData(i, s, t, e) : this.parsePrimitiveData(i, s, t, e);
          var _n14 = function _n14() {
            return null === l[a] || d && l[a] < d[a];
          };
          for (r = 0; r < e; ++r) i._parsed[r + t] = l = h[r], c && (_n14() && (c = !1), d = l);
          i._sorted = c;
        }
        o && Ms(this, h);
      }
    }, {
      key: "parsePrimitiveData",
      value: function parsePrimitiveData(t, e, i, s) {
        var n = t.iScale,
          o = t.vScale,
          a = n.axis,
          r = o.axis,
          l = n.getLabels(),
          h = n === o,
          c = new Array(s);
        var d, u, f;
        for (d = 0, u = s; d < u; ++d) {
          var _c$d;
          f = d + i, c[d] = (_c$d = {}, _defineProperty(_c$d, a, h || n.parse(l[f], f)), _defineProperty(_c$d, r, o.parse(e[f], f)), _c$d);
        }
        return c;
      }
    }, {
      key: "parseArrayData",
      value: function parseArrayData(t, e, i, s) {
        var n = t.xScale,
          o = t.yScale,
          a = new Array(s);
        var r, l, h, c;
        for (r = 0, l = s; r < l; ++r) h = r + i, c = e[h], a[r] = {
          x: n.parse(c[0], h),
          y: o.parse(c[1], h)
        };
        return a;
      }
    }, {
      key: "parseObjectData",
      value: function parseObjectData(t, e, i, s) {
        var n = t.xScale,
          o = t.yScale,
          _this$_parsing = this._parsing,
          _this$_parsing$xAxisK = _this$_parsing.xAxisKey,
          a = _this$_parsing$xAxisK === void 0 ? "x" : _this$_parsing$xAxisK,
          _this$_parsing$yAxisK = _this$_parsing.yAxisKey,
          r = _this$_parsing$yAxisK === void 0 ? "y" : _this$_parsing$yAxisK,
          l = new Array(s);
        var h, c, d, u;
        for (h = 0, c = s; h < c; ++h) d = h + i, u = e[d], l[h] = {
          x: n.parse(ct(u, a), d),
          y: o.parse(ct(u, r), d)
        };
        return l;
      }
    }, {
      key: "getParsed",
      value: function getParsed(t) {
        return this._cachedMeta._parsed[t];
      }
    }, {
      key: "getDataElement",
      value: function getDataElement(t) {
        return this._cachedMeta.data[t];
      }
    }, {
      key: "applyStack",
      value: function applyStack(t, e, i) {
        var s = this.chart,
          n = this._cachedMeta,
          o = e[t.axis];
        return _s({
          keys: xs(s, !0),
          values: e._stacks[t.axis]
        }, o, n.index, {
          mode: i
        });
      }
    }, {
      key: "updateRangeFromParsed",
      value: function updateRangeFromParsed(t, e, i, s) {
        var n = i[e.axis];
        var o = null === n ? NaN : n;
        var a = s && i._stacks[e.axis];
        s && a && (s.values = a, o = _s(s, n, this._cachedMeta.index)), t.min = Math.min(t.min, o), t.max = Math.max(t.max, o);
      }
    }, {
      key: "getMinMax",
      value: function getMinMax(t, e) {
        var i = this._cachedMeta,
          s = i._parsed,
          n = i._sorted && t === i.iScale,
          o = s.length,
          a = this._getOtherScale(t),
          r = function (t, e, i) {
            return t && !e.hidden && e._stacked && {
              keys: xs(i, !0),
              values: null
            };
          }(e, i, this.chart),
          l = {
            min: Number.POSITIVE_INFINITY,
            max: Number.NEGATIVE_INFINITY
          },
          _ref5 = function (t) {
            var _t$getUserBounds = t.getUserBounds(),
              e = _t$getUserBounds.min,
              i = _t$getUserBounds.max,
              s = _t$getUserBounds.minDefined,
              n = _t$getUserBounds.maxDefined;
            return {
              min: s ? e : Number.NEGATIVE_INFINITY,
              max: n ? i : Number.POSITIVE_INFINITY
            };
          }(a),
          h = _ref5.min,
          c = _ref5.max;
        var d, u;
        function f() {
          u = s[d];
          var e = u[a.axis];
          return !K(u[t.axis]) || h > e || c < e;
        }
        for (d = 0; d < o && (f() || (this.updateRangeFromParsed(l, t, u, r), !n)); ++d);
        if (n) for (d = o - 1; d >= 0; --d) if (!f()) {
          this.updateRangeFromParsed(l, t, u, r);
          break;
        }
        return l;
      }
    }, {
      key: "getAllParsedValues",
      value: function getAllParsedValues(t) {
        var e = this._cachedMeta._parsed,
          i = [];
        var s, n, o;
        for (s = 0, n = e.length; s < n; ++s) o = e[s][t.axis], K(o) && i.push(o);
        return i;
      }
    }, {
      key: "getMaxOverflow",
      value: function getMaxOverflow() {
        return !1;
      }
    }, {
      key: "getLabelAndValue",
      value: function getLabelAndValue(t) {
        var e = this._cachedMeta,
          i = e.iScale,
          s = e.vScale,
          n = this.getParsed(t);
        return {
          label: i ? "" + i.getLabelForValue(n[i.axis]) : "",
          value: s ? "" + s.getLabelForValue(n[s.axis]) : ""
        };
      }
    }, {
      key: "_update",
      value: function _update(t) {
        var e = this._cachedMeta;
        this.update(t || "default"), e._clip = function (t) {
          var e, i, s, n;
          return q(t) ? (e = t.top, i = t.right, s = t.bottom, n = t.left) : e = i = s = n = t, {
            top: e,
            right: i,
            bottom: s,
            left: n,
            disabled: !1 === t
          };
        }(Z(this.options.clip, function (t, e, i) {
          if (!1 === i) return !1;
          var s = bs(t, i),
            n = bs(e, i);
          return {
            top: n.end,
            right: s.end,
            bottom: n.start,
            left: s.start
          };
        }(e.xScale, e.yScale, this.getMaxOverflow())));
      }
    }, {
      key: "update",
      value: function update(t) {}
    }, {
      key: "draw",
      value: function draw() {
        var t = this._ctx,
          e = this.chart,
          i = this._cachedMeta,
          s = i.data || [],
          n = e.chartArea,
          o = [],
          a = this._drawStart || 0,
          r = this._drawCount || s.length - a,
          l = this.options.drawActiveElementsOnTop;
        var h;
        for (i.dataset && i.dataset.draw(t, n, a, r), h = a; h < a + r; ++h) {
          var _e18 = s[h];
          _e18.hidden || (_e18.active && l ? o.push(_e18) : _e18.draw(t, n));
        }
        for (h = 0; h < o.length; ++h) o[h].draw(t, n);
      }
    }, {
      key: "getStyle",
      value: function getStyle(t, e) {
        var i = e ? "active" : "default";
        return void 0 === t && this._cachedMeta.dataset ? this.resolveDatasetElementOptions(i) : this.resolveDataElementOptions(t || 0, i);
      }
    }, {
      key: "getContext",
      value: function getContext(t, e, i) {
        var s = this.getDataset();
        var n;
        if (t >= 0 && t < this._cachedMeta.data.length) {
          var _e19 = this._cachedMeta.data[t];
          n = _e19.$context || (_e19.$context = function (t, e, i) {
            return pi(t, {
              active: !1,
              dataIndex: e,
              parsed: void 0,
              raw: void 0,
              element: i,
              index: e,
              mode: "default",
              type: "data"
            });
          }(this.getContext(), t, _e19)), n.parsed = this.getParsed(t), n.raw = s.data[t], n.index = n.dataIndex = t;
        } else n = this.$context || (this.$context = function (t, e) {
          return pi(t, {
            active: !1,
            dataset: void 0,
            datasetIndex: e,
            index: e,
            mode: "default",
            type: "dataset"
          });
        }(this.chart.getContext(), this.index)), n.dataset = s, n.index = n.datasetIndex = this.index;
        return n.active = !!e, n.mode = i, n;
      }
    }, {
      key: "resolveDatasetElementOptions",
      value: function resolveDatasetElementOptions(t) {
        return this._resolveElementOptions(this.datasetElementType.id, t);
      }
    }, {
      key: "resolveDataElementOptions",
      value: function resolveDataElementOptions(t, e) {
        return this._resolveElementOptions(this.dataElementType.id, e, t);
      }
    }, {
      key: "_resolveElementOptions",
      value: function _resolveElementOptions(t) {
        var _this3 = this;
        var e = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "default";
        var i = arguments.length > 2 ? arguments[2] : undefined;
        var s = "active" === e,
          n = this._cachedDataOpts,
          o = t + "-" + e,
          a = n[o],
          r = this.enableOptionSharing && ut(i);
        if (a) return Ds(a, r);
        var l = this.chart.config,
          h = l.datasetElementScopeKeys(this._type, t),
          c = s ? ["".concat(t, "Hover"), "hover", t, ""] : [t, ""],
          d = l.getOptionScopes(this.getDataset(), h),
          u = Object.keys(yt.elements[t]),
          f = l.resolveNamedOptions(d, u, function () {
            return _this3.getContext(i, s);
          }, c);
        return f.$shared && (f.$shared = r, n[o] = Object.freeze(Ds(f, r))), f;
      }
    }, {
      key: "_resolveAnimations",
      value: function _resolveAnimations(t, e, i) {
        var s = this.chart,
          n = this._cachedDataOpts,
          o = "animation-".concat(e),
          a = n[o];
        if (a) return a;
        var r;
        if (!1 !== s.options.animation) {
          var _s18 = this.chart.config,
            _n15 = _s18.datasetAnimationScopeKeys(this._type, e),
            _o16 = _s18.getOptionScopes(this.getDataset(), _n15);
          r = _s18.createResolver(_o16, this.getContext(t, i, e));
        }
        var l = new ms(s, r && r.animations);
        return r && r._cacheable && (n[o] = Object.freeze(l)), l;
      }
    }, {
      key: "getSharedOptions",
      value: function getSharedOptions(t) {
        if (t.$shared) return this._sharedOptions || (this._sharedOptions = Object.assign({}, t));
      }
    }, {
      key: "includeOptions",
      value: function includeOptions(t, e) {
        return !e || Ps(t) || this.chart._animationsDisabled;
      }
    }, {
      key: "updateElement",
      value: function updateElement(t, e, i, s) {
        Ps(s) ? Object.assign(t, i) : this._resolveAnimations(e, s).update(t, i);
      }
    }, {
      key: "updateSharedOptions",
      value: function updateSharedOptions(t, e, i) {
        t && !Ps(e) && this._resolveAnimations(void 0, e).update(t, i);
      }
    }, {
      key: "_setStyle",
      value: function _setStyle(t, e, i, s) {
        t.active = s;
        var n = this.getStyle(e, s);
        this._resolveAnimations(e, i, s).update(t, {
          options: !s && this.getSharedOptions(n) || n
        });
      }
    }, {
      key: "removeHoverStyle",
      value: function removeHoverStyle(t, e, i) {
        this._setStyle(t, i, "active", !1);
      }
    }, {
      key: "setHoverStyle",
      value: function setHoverStyle(t, e, i) {
        this._setStyle(t, i, "active", !0);
      }
    }, {
      key: "_removeDatasetHoverStyle",
      value: function _removeDatasetHoverStyle() {
        var t = this._cachedMeta.dataset;
        t && this._setStyle(t, void 0, "active", !1);
      }
    }, {
      key: "_setDatasetHoverStyle",
      value: function _setDatasetHoverStyle() {
        var t = this._cachedMeta.dataset;
        t && this._setStyle(t, void 0, "active", !0);
      }
    }, {
      key: "_resyncElements",
      value: function _resyncElements(t) {
        var e = this._data,
          i = this._cachedMeta.data;
        var _iterator17 = _createForOfIteratorHelper(this._syncList),
          _step17;
        try {
          for (_iterator17.s(); !(_step17 = _iterator17.n()).done;) {
            var _step17$value = _slicedToArray(_step17.value, 3),
              _t22 = _step17$value[0],
              _e20 = _step17$value[1],
              _i23 = _step17$value[2];
            this[_t22](_e20, _i23);
          }
        } catch (err) {
          _iterator17.e(err);
        } finally {
          _iterator17.f();
        }
        this._syncList = [];
        var s = i.length,
          n = e.length,
          o = Math.min(n, s);
        o && this.parse(0, o), n > s ? this._insertElements(s, n - s, t) : n < s && this._removeElements(n, s - n);
      }
    }, {
      key: "_insertElements",
      value: function _insertElements(t, e) {
        var i = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : !0;
        var s = this._cachedMeta,
          n = s.data,
          o = t + e;
        var a;
        var r = function r(t) {
          for (t.length += e, a = t.length - 1; a >= o; a--) t[a] = t[a - e];
        };
        for (r(n), a = t; a < o; ++a) n[a] = new this.dataElementType();
        this._parsing && r(s._parsed), this.parse(t, e), i && this.updateElements(n, t, e, "reset");
      }
    }, {
      key: "updateElements",
      value: function updateElements(t, e, i, s) {}
    }, {
      key: "_removeElements",
      value: function _removeElements(t, e) {
        var i = this._cachedMeta;
        if (this._parsing) {
          var _s19 = i._parsed.splice(t, e);
          i._stacked && Ss(i, _s19);
        }
        i.data.splice(t, e);
      }
    }, {
      key: "_sync",
      value: function _sync(t) {
        if (this._parsing) this._syncList.push(t);else {
          var _t23 = _slicedToArray(t, 3),
            _e21 = _t23[0],
            _i24 = _t23[1],
            _s20 = _t23[2];
          this[_e21](_i24, _s20);
        }
        this.chart._dataChanges.push([this.index].concat(_toConsumableArray(t)));
      }
    }, {
      key: "_onDataPush",
      value: function _onDataPush() {
        var t = arguments.length;
        this._sync(["_insertElements", this.getDataset().data.length - t, t]);
      }
    }, {
      key: "_onDataPop",
      value: function _onDataPop() {
        this._sync(["_removeElements", this._cachedMeta.data.length - 1, 1]);
      }
    }, {
      key: "_onDataShift",
      value: function _onDataShift() {
        this._sync(["_removeElements", 0, 1]);
      }
    }, {
      key: "_onDataSplice",
      value: function _onDataSplice(t, e) {
        e && this._sync(["_removeElements", t, e]);
        var i = arguments.length - 2;
        i && this._sync(["_insertElements", t, i]);
      }
    }, {
      key: "_onDataUnshift",
      value: function _onDataUnshift() {
        this._sync(["_insertElements", 0, arguments.length]);
      }
    }]);
    return Cs;
  }();
  Cs.defaults = {}, Cs.prototype.datasetElementType = null, Cs.prototype.dataElementType = null;
  var Os = /*#__PURE__*/function () {
    function Os() {
      _classCallCheck(this, Os);
      this.x = void 0, this.y = void 0, this.active = !1, this.options = void 0, this.$animations = void 0;
    }
    _createClass(Os, [{
      key: "tooltipPosition",
      value: function tooltipPosition(t) {
        var _this$getProps = this.getProps(["x", "y"], t),
          e = _this$getProps.x,
          i = _this$getProps.y;
        return {
          x: e,
          y: i
        };
      }
    }, {
      key: "hasValue",
      value: function hasValue() {
        return Wt(this.x) && Wt(this.y);
      }
    }, {
      key: "getProps",
      value: function getProps(t, e) {
        var _this4 = this;
        var i = this.$animations;
        if (!e || !i) return this;
        var s = {};
        return t.forEach(function (t) {
          s[t] = i[t] && i[t].active() ? i[t]._to : _this4[t];
        }), s;
      }
    }]);
    return Os;
  }();
  Os.defaults = {}, Os.defaultRoutes = void 0;
  var As = {
    values: function values(t) {
      return X(t) ? t : "" + t;
    },
    numeric: function numeric(t, e, i) {
      if (0 === t) return "0";
      var s = this.chart.options.locale;
      var n,
        o = t;
      if (i.length > 1) {
        var _e22 = Math.max(Math.abs(i[0].value), Math.abs(i[i.length - 1].value));
        (_e22 < 1e-4 || _e22 > 1e15) && (n = "scientific"), o = function (t, e) {
          var i = e.length > 3 ? e[2].value - e[1].value : e[1].value - e[0].value;
          Math.abs(i) >= 1 && t !== Math.floor(t) && (i = t - Math.floor(t));
          return i;
        }(t, i);
      }
      var a = Ft(Math.abs(o)),
        r = Math.max(Math.min(-1 * Math.floor(a), 20), 0),
        l = {
          notation: n,
          minimumFractionDigits: r,
          maximumFractionDigits: r
        };
      return Object.assign(l, this.options.ticks.format), ni(t, s, l);
    },
    logarithmic: function logarithmic(t, e, i) {
      if (0 === t) return "0";
      var s = t / Math.pow(10, Math.floor(Ft(t)));
      return 1 === s || 2 === s || 5 === s ? As.numeric.call(this, t, e, i) : "";
    }
  };
  var Ts = {
    formatters: As
  };
  function Ls(t, e) {
    var i = t.options.ticks,
      s = i.maxTicksLimit || function (t) {
        var e = t.options.offset,
          i = t._tickSize(),
          s = t._length / i + (e ? 0 : 1),
          n = t._maxLength / i;
        return Math.floor(Math.min(s, n));
      }(t),
      n = i.major.enabled ? function (t) {
        var e = [];
        var i, s;
        for (i = 0, s = t.length; i < s; i++) t[i].major && e.push(i);
        return e;
      }(e) : [],
      o = n.length,
      a = n[0],
      r = n[o - 1],
      l = [];
    if (o > s) return function (t, e, i, s) {
      var n,
        o = 0,
        a = i[0];
      for (s = Math.ceil(s), n = 0; n < t.length; n++) n === a && (e.push(t[n]), o++, a = i[o * s]);
    }(e, l, n, o / s), l;
    var h = function (t, e, i) {
      var s = function (t) {
          var e = t.length;
          var i, s;
          if (e < 2) return !1;
          for (s = t[0], i = 1; i < e; ++i) if (t[i] - t[i - 1] !== s) return !1;
          return s;
        }(t),
        n = e.length / i;
      if (!s) return Math.max(n, 1);
      var o = Nt(s);
      for (var _t24 = 0, _e23 = o.length - 1; _t24 < _e23; _t24++) {
        var _e24 = o[_t24];
        if (_e24 > n) return _e24;
      }
      return Math.max(n, 1);
    }(n, e, s);
    if (o > 0) {
      var _t25, _i25;
      var _s21 = o > 1 ? Math.round((r - a) / (o - 1)) : null;
      for (Rs(e, l, h, U(_s21) ? 0 : a - _s21, a), _t25 = 0, _i25 = o - 1; _t25 < _i25; _t25++) Rs(e, l, h, n[_t25], n[_t25 + 1]);
      return Rs(e, l, h, r, U(_s21) ? e.length : r + _s21), l;
    }
    return Rs(e, l, h), l;
  }
  function Rs(t, e, i, s, n) {
    var o = Z(s, 0),
      a = Math.min(Z(n, t.length), t.length);
    var r,
      l,
      h,
      c = 0;
    for (i = Math.ceil(i), n && (r = n - s, i = r / Math.floor(r / i)), h = o; h < 0;) c++, h = Math.round(o + c * i);
    for (l = Math.max(o, 0); l < a; l++) l === h && (e.push(t[l]), c++, h = Math.round(o + c * i));
  }
  yt.set("scale", {
    display: !0,
    offset: !1,
    reverse: !1,
    beginAtZero: !1,
    bounds: "ticks",
    grace: 0,
    grid: {
      display: !0,
      lineWidth: 1,
      drawBorder: !0,
      drawOnChartArea: !0,
      drawTicks: !0,
      tickLength: 8,
      tickWidth: function tickWidth(t, e) {
        return e.lineWidth;
      },
      tickColor: function tickColor(t, e) {
        return e.color;
      },
      offset: !1,
      borderDash: [],
      borderDashOffset: 0,
      borderWidth: 1
    },
    title: {
      display: !1,
      text: "",
      padding: {
        top: 4,
        bottom: 4
      }
    },
    ticks: {
      minRotation: 0,
      maxRotation: 50,
      mirror: !1,
      textStrokeWidth: 0,
      textStrokeColor: "",
      padding: 3,
      display: !0,
      autoSkip: !0,
      autoSkipPadding: 3,
      labelOffset: 0,
      callback: Ts.formatters.values,
      minor: {},
      major: {},
      align: "center",
      crossAlign: "near",
      showLabelBackdrop: !1,
      backdropColor: "rgba(255, 255, 255, 0.75)",
      backdropPadding: 2
    }
  }), yt.route("scale.ticks", "color", "", "color"), yt.route("scale.grid", "color", "", "borderColor"), yt.route("scale.grid", "borderColor", "", "borderColor"), yt.route("scale.title", "color", "", "color"), yt.describe("scale", {
    _fallback: !1,
    _scriptable: function _scriptable(t) {
      return !t.startsWith("before") && !t.startsWith("after") && "callback" !== t && "parser" !== t;
    },
    _indexable: function _indexable(t) {
      return "borderDash" !== t && "tickBorderDash" !== t;
    }
  }), yt.describe("scales", {
    _fallback: "scale"
  }), yt.describe("scale.ticks", {
    _scriptable: function _scriptable(t) {
      return "backdropPadding" !== t && "callback" !== t;
    },
    _indexable: function _indexable(t) {
      return "backdropPadding" !== t;
    }
  });
  var Es = function Es(t, e, i) {
    return "top" === e || "left" === e ? t[e] + i : t[e] - i;
  };
  function Is(t, e) {
    var i = [],
      s = t.length / e,
      n = t.length;
    var o = 0;
    for (; o < n; o += s) i.push(t[Math.floor(o)]);
    return i;
  }
  function zs(t, e, i) {
    var s = t.ticks.length,
      n = Math.min(e, s - 1),
      o = t._startPixel,
      a = t._endPixel,
      r = 1e-6;
    var l,
      h = t.getPixelForTick(n);
    if (!(i && (l = 1 === s ? Math.max(h - o, a - h) : 0 === e ? (t.getPixelForTick(1) - h) / 2 : (h - t.getPixelForTick(n - 1)) / 2, h += n < e ? l : -l, h < o - r || h > a + r))) return h;
  }
  function Fs(t) {
    return t.drawTicks ? t.tickLength : 0;
  }
  function Bs(t, e) {
    if (!t.display) return 0;
    var i = ui(t.font, e),
      s = di(t.padding);
    return (X(t.text) ? t.text.length : 1) * i.lineHeight + s.height;
  }
  function Vs(t, e, i) {
    var n = s(t);
    return (i && "right" !== e || !i && "right" === e) && (n = function (t) {
      return "left" === t ? "right" : "right" === t ? "left" : t;
    }(n)), n;
  }
  var Ns = /*#__PURE__*/function (_Os) {
    _inherits(Ns, _Os);
    var _super3 = _createSuper(Ns);
    function Ns(t) {
      var _this5;
      _classCallCheck(this, Ns);
      _this5 = _super3.call(this), _this5.id = t.id, _this5.type = t.type, _this5.options = void 0, _this5.ctx = t.ctx, _this5.chart = t.chart, _this5.top = void 0, _this5.bottom = void 0, _this5.left = void 0, _this5.right = void 0, _this5.width = void 0, _this5.height = void 0, _this5._margins = {
        left: 0,
        right: 0,
        top: 0,
        bottom: 0
      }, _this5.maxWidth = void 0, _this5.maxHeight = void 0, _this5.paddingTop = void 0, _this5.paddingBottom = void 0, _this5.paddingLeft = void 0, _this5.paddingRight = void 0, _this5.axis = void 0, _this5.labelRotation = void 0, _this5.min = void 0, _this5.max = void 0, _this5._range = void 0, _this5.ticks = [], _this5._gridLineItems = null, _this5._labelItems = null, _this5._labelSizes = null, _this5._length = 0, _this5._maxLength = 0, _this5._longestTextCache = {}, _this5._startPixel = void 0, _this5._endPixel = void 0, _this5._reversePixels = !1, _this5._userMax = void 0, _this5._userMin = void 0, _this5._suggestedMax = void 0, _this5._suggestedMin = void 0, _this5._ticksLength = 0, _this5._borderValue = 0, _this5._cache = {}, _this5._dataLimitsCached = !1, _this5.$context = void 0;
      return _this5;
    }
    _createClass(Ns, [{
      key: "init",
      value: function init(t) {
        this.options = t.setContext(this.getContext()), this.axis = t.axis, this._userMin = this.parse(t.min), this._userMax = this.parse(t.max), this._suggestedMin = this.parse(t.suggestedMin), this._suggestedMax = this.parse(t.suggestedMax);
      }
    }, {
      key: "parse",
      value: function parse(t, e) {
        return t;
      }
    }, {
      key: "getUserBounds",
      value: function getUserBounds() {
        var t = this._userMin,
          e = this._userMax,
          i = this._suggestedMin,
          s = this._suggestedMax;
        return t = G(t, Number.POSITIVE_INFINITY), e = G(e, Number.NEGATIVE_INFINITY), i = G(i, Number.POSITIVE_INFINITY), s = G(s, Number.NEGATIVE_INFINITY), {
          min: G(t, i),
          max: G(e, s),
          minDefined: K(t),
          maxDefined: K(e)
        };
      }
    }, {
      key: "getMinMax",
      value: function getMinMax(t) {
        var e,
          _this$getUserBounds = this.getUserBounds(),
          i = _this$getUserBounds.min,
          s = _this$getUserBounds.max,
          n = _this$getUserBounds.minDefined,
          o = _this$getUserBounds.maxDefined;
        if (n && o) return {
          min: i,
          max: s
        };
        var a = this.getMatchingVisibleMetas();
        for (var _r7 = 0, _l9 = a.length; _r7 < _l9; ++_r7) e = a[_r7].controller.getMinMax(this, t), n || (i = Math.min(i, e.min)), o || (s = Math.max(s, e.max));
        return i = o && i > s ? s : i, s = n && i > s ? i : s, {
          min: G(i, G(s, i)),
          max: G(s, G(i, s))
        };
      }
    }, {
      key: "getPadding",
      value: function getPadding() {
        return {
          left: this.paddingLeft || 0,
          top: this.paddingTop || 0,
          right: this.paddingRight || 0,
          bottom: this.paddingBottom || 0
        };
      }
    }, {
      key: "getTicks",
      value: function getTicks() {
        return this.ticks;
      }
    }, {
      key: "getLabels",
      value: function getLabels() {
        var t = this.chart.data;
        return this.options.labels || (this.isHorizontal() ? t.xLabels : t.yLabels) || t.labels || [];
      }
    }, {
      key: "beforeLayout",
      value: function beforeLayout() {
        this._cache = {}, this._dataLimitsCached = !1;
      }
    }, {
      key: "beforeUpdate",
      value: function beforeUpdate() {
        tt(this.options.beforeUpdate, [this]);
      }
    }, {
      key: "update",
      value: function update(t, e, i) {
        var _this$options = this.options,
          s = _this$options.beginAtZero,
          n = _this$options.grace,
          o = _this$options.ticks,
          a = o.sampleSize;
        this.beforeUpdate(), this.maxWidth = t, this.maxHeight = e, this._margins = i = Object.assign({
          left: 0,
          right: 0,
          top: 0,
          bottom: 0
        }, i), this.ticks = null, this._labelSizes = null, this._gridLineItems = null, this._labelItems = null, this.beforeSetDimensions(), this.setDimensions(), this.afterSetDimensions(), this._maxLength = this.isHorizontal() ? this.width + i.left + i.right : this.height + i.top + i.bottom, this._dataLimitsCached || (this.beforeDataLimits(), this.determineDataLimits(), this.afterDataLimits(), this._range = gi(this, n, s), this._dataLimitsCached = !0), this.beforeBuildTicks(), this.ticks = this.buildTicks() || [], this.afterBuildTicks();
        var r = a < this.ticks.length;
        this._convertTicksToLabels(r ? Is(this.ticks, a) : this.ticks), this.configure(), this.beforeCalculateLabelRotation(), this.calculateLabelRotation(), this.afterCalculateLabelRotation(), o.display && (o.autoSkip || "auto" === o.source) && (this.ticks = Ls(this, this.ticks), this._labelSizes = null, this.afterAutoSkip()), r && this._convertTicksToLabels(this.ticks), this.beforeFit(), this.fit(), this.afterFit(), this.afterUpdate();
      }
    }, {
      key: "configure",
      value: function configure() {
        var t,
          e,
          i = this.options.reverse;
        this.isHorizontal() ? (t = this.left, e = this.right) : (t = this.top, e = this.bottom, i = !i), this._startPixel = t, this._endPixel = e, this._reversePixels = i, this._length = e - t, this._alignToPixels = this.options.alignToPixels;
      }
    }, {
      key: "afterUpdate",
      value: function afterUpdate() {
        tt(this.options.afterUpdate, [this]);
      }
    }, {
      key: "beforeSetDimensions",
      value: function beforeSetDimensions() {
        tt(this.options.beforeSetDimensions, [this]);
      }
    }, {
      key: "setDimensions",
      value: function setDimensions() {
        this.isHorizontal() ? (this.width = this.maxWidth, this.left = 0, this.right = this.width) : (this.height = this.maxHeight, this.top = 0, this.bottom = this.height), this.paddingLeft = 0, this.paddingTop = 0, this.paddingRight = 0, this.paddingBottom = 0;
      }
    }, {
      key: "afterSetDimensions",
      value: function afterSetDimensions() {
        tt(this.options.afterSetDimensions, [this]);
      }
    }, {
      key: "_callHooks",
      value: function _callHooks(t) {
        this.chart.notifyPlugins(t, this.getContext()), tt(this.options[t], [this]);
      }
    }, {
      key: "beforeDataLimits",
      value: function beforeDataLimits() {
        this._callHooks("beforeDataLimits");
      }
    }, {
      key: "determineDataLimits",
      value: function determineDataLimits() {}
    }, {
      key: "afterDataLimits",
      value: function afterDataLimits() {
        this._callHooks("afterDataLimits");
      }
    }, {
      key: "beforeBuildTicks",
      value: function beforeBuildTicks() {
        this._callHooks("beforeBuildTicks");
      }
    }, {
      key: "buildTicks",
      value: function buildTicks() {
        return [];
      }
    }, {
      key: "afterBuildTicks",
      value: function afterBuildTicks() {
        this._callHooks("afterBuildTicks");
      }
    }, {
      key: "beforeTickToLabelConversion",
      value: function beforeTickToLabelConversion() {
        tt(this.options.beforeTickToLabelConversion, [this]);
      }
    }, {
      key: "generateTickLabels",
      value: function generateTickLabels(t) {
        var e = this.options.ticks;
        var i, s, n;
        for (i = 0, s = t.length; i < s; i++) n = t[i], n.label = tt(e.callback, [n.value, i, t], this);
      }
    }, {
      key: "afterTickToLabelConversion",
      value: function afterTickToLabelConversion() {
        tt(this.options.afterTickToLabelConversion, [this]);
      }
    }, {
      key: "beforeCalculateLabelRotation",
      value: function beforeCalculateLabelRotation() {
        tt(this.options.beforeCalculateLabelRotation, [this]);
      }
    }, {
      key: "calculateLabelRotation",
      value: function calculateLabelRotation() {
        var t = this.options,
          e = t.ticks,
          i = this.ticks.length,
          s = e.minRotation || 0,
          n = e.maxRotation;
        var o,
          a,
          r,
          l = s;
        if (!this._isVisible() || !e.display || s >= n || i <= 1 || !this.isHorizontal()) return void (this.labelRotation = s);
        var h = this._getLabelSizes(),
          c = h.widest.width,
          d = h.highest.height,
          u = Qt(this.chart.width - c, 0, this.maxWidth);
        o = t.offset ? this.maxWidth / i : u / (i - 1), c + 6 > o && (o = u / (i - (t.offset ? .5 : 1)), a = this.maxHeight - Fs(t.grid) - e.padding - Bs(t.title, this.chart.options.font), r = Math.sqrt(c * c + d * d), l = Ut(Math.min(Math.asin(Qt((h.highest.height + 6) / o, -1, 1)), Math.asin(Qt(a / r, -1, 1)) - Math.asin(Qt(d / r, -1, 1)))), l = Math.max(s, Math.min(n, l))), this.labelRotation = l;
      }
    }, {
      key: "afterCalculateLabelRotation",
      value: function afterCalculateLabelRotation() {
        tt(this.options.afterCalculateLabelRotation, [this]);
      }
    }, {
      key: "afterAutoSkip",
      value: function afterAutoSkip() {}
    }, {
      key: "beforeFit",
      value: function beforeFit() {
        tt(this.options.beforeFit, [this]);
      }
    }, {
      key: "fit",
      value: function fit() {
        var t = {
            width: 0,
            height: 0
          },
          e = this.chart,
          _this$options2 = this.options,
          i = _this$options2.ticks,
          s = _this$options2.title,
          n = _this$options2.grid,
          o = this._isVisible(),
          a = this.isHorizontal();
        if (o) {
          var _o17 = Bs(s, e.options.font);
          if (a ? (t.width = this.maxWidth, t.height = Fs(n) + _o17) : (t.height = this.maxHeight, t.width = Fs(n) + _o17), i.display && this.ticks.length) {
            var _this$_getLabelSizes = this._getLabelSizes(),
              _e25 = _this$_getLabelSizes.first,
              _s22 = _this$_getLabelSizes.last,
              _n16 = _this$_getLabelSizes.widest,
              _o18 = _this$_getLabelSizes.highest,
              _r8 = 2 * i.padding,
              _l10 = Yt(this.labelRotation),
              _h7 = Math.cos(_l10),
              _c5 = Math.sin(_l10);
            if (a) {
              var _e26 = i.mirror ? 0 : _c5 * _n16.width + _h7 * _o18.height;
              t.height = Math.min(this.maxHeight, t.height + _e26 + _r8);
            } else {
              var _e27 = i.mirror ? 0 : _h7 * _n16.width + _c5 * _o18.height;
              t.width = Math.min(this.maxWidth, t.width + _e27 + _r8);
            }
            this._calculatePadding(_e25, _s22, _c5, _h7);
          }
        }
        this._handleMargins(), a ? (this.width = this._length = e.width - this._margins.left - this._margins.right, this.height = t.height) : (this.width = t.width, this.height = this._length = e.height - this._margins.top - this._margins.bottom);
      }
    }, {
      key: "_calculatePadding",
      value: function _calculatePadding(t, e, i, s) {
        var _this$options3 = this.options,
          _this$options3$ticks = _this$options3.ticks,
          n = _this$options3$ticks.align,
          o = _this$options3$ticks.padding,
          a = _this$options3.position,
          r = 0 !== this.labelRotation,
          l = "top" !== a && "x" === this.axis;
        if (this.isHorizontal()) {
          var _a11 = this.getPixelForTick(0) - this.left,
            _h8 = this.right - this.getPixelForTick(this.ticks.length - 1);
          var _c6 = 0,
            _d4 = 0;
          r ? l ? (_c6 = s * t.width, _d4 = i * e.height) : (_c6 = i * t.height, _d4 = s * e.width) : "start" === n ? _d4 = e.width : "end" === n ? _c6 = t.width : "inner" !== n && (_c6 = t.width / 2, _d4 = e.width / 2), this.paddingLeft = Math.max((_c6 - _a11 + o) * this.width / (this.width - _a11), 0), this.paddingRight = Math.max((_d4 - _h8 + o) * this.width / (this.width - _h8), 0);
        } else {
          var _i26 = e.height / 2,
            _s23 = t.height / 2;
          "start" === n ? (_i26 = 0, _s23 = t.height) : "end" === n && (_i26 = e.height, _s23 = 0), this.paddingTop = _i26 + o, this.paddingBottom = _s23 + o;
        }
      }
    }, {
      key: "_handleMargins",
      value: function _handleMargins() {
        this._margins && (this._margins.left = Math.max(this.paddingLeft, this._margins.left), this._margins.top = Math.max(this.paddingTop, this._margins.top), this._margins.right = Math.max(this.paddingRight, this._margins.right), this._margins.bottom = Math.max(this.paddingBottom, this._margins.bottom));
      }
    }, {
      key: "afterFit",
      value: function afterFit() {
        tt(this.options.afterFit, [this]);
      }
    }, {
      key: "isHorizontal",
      value: function isHorizontal() {
        var _this$options4 = this.options,
          t = _this$options4.axis,
          e = _this$options4.position;
        return "top" === e || "bottom" === e || "x" === t;
      }
    }, {
      key: "isFullSize",
      value: function isFullSize() {
        return this.options.fullSize;
      }
    }, {
      key: "_convertTicksToLabels",
      value: function _convertTicksToLabels(t) {
        var e, i;
        for (this.beforeTickToLabelConversion(), this.generateTickLabels(t), e = 0, i = t.length; e < i; e++) U(t[e].label) && (t.splice(e, 1), i--, e--);
        this.afterTickToLabelConversion();
      }
    }, {
      key: "_getLabelSizes",
      value: function _getLabelSizes() {
        var t = this._labelSizes;
        if (!t) {
          var _e28 = this.options.ticks.sampleSize;
          var _i27 = this.ticks;
          _e28 < _i27.length && (_i27 = Is(_i27, _e28)), this._labelSizes = t = this._computeLabelSizes(_i27, _i27.length);
        }
        return t;
      }
    }, {
      key: "_computeLabelSizes",
      value: function _computeLabelSizes(t, e) {
        var i = this.ctx,
          s = this._longestTextCache,
          n = [],
          o = [];
        var a,
          r,
          l,
          h,
          c,
          d,
          u,
          f,
          g,
          p,
          m,
          b = 0,
          x = 0;
        for (a = 0; a < e; ++a) {
          if (h = t[a].label, c = this._resolveTickFontOptions(a), i.font = d = c.string, u = s[d] = s[d] || {
            data: {},
            gc: []
          }, f = c.lineHeight, g = p = 0, U(h) || X(h)) {
            if (X(h)) for (r = 0, l = h.length; r < l; ++r) m = h[r], U(m) || X(m) || (g = me(i, u.data, u.gc, g, m), p += f);
          } else g = me(i, u.data, u.gc, g, h), p = f;
          n.push(g), o.push(p), b = Math.max(g, b), x = Math.max(p, x);
        }
        !function (t, e) {
          et(t, function (t) {
            var i = t.gc,
              s = i.length / 2;
            var n;
            if (s > e) {
              for (n = 0; n < s; ++n) delete t.data[i[n]];
              i.splice(0, s);
            }
          });
        }(s, e);
        var _ = n.indexOf(b),
          y = o.indexOf(x),
          v = function v(t) {
            return {
              width: n[t] || 0,
              height: o[t] || 0
            };
          };
        return {
          first: v(0),
          last: v(e - 1),
          widest: v(_),
          highest: v(y),
          widths: n,
          heights: o
        };
      }
    }, {
      key: "getLabelForValue",
      value: function getLabelForValue(t) {
        return t;
      }
    }, {
      key: "getPixelForValue",
      value: function getPixelForValue(t, e) {
        return NaN;
      }
    }, {
      key: "getValueForPixel",
      value: function getValueForPixel(t) {}
    }, {
      key: "getPixelForTick",
      value: function getPixelForTick(t) {
        var e = this.ticks;
        return t < 0 || t > e.length - 1 ? null : this.getPixelForValue(e[t].value);
      }
    }, {
      key: "getPixelForDecimal",
      value: function getPixelForDecimal(t) {
        this._reversePixels && (t = 1 - t);
        var e = this._startPixel + t * this._length;
        return te(this._alignToPixels ? xe(this.chart, e, 0) : e);
      }
    }, {
      key: "getDecimalForPixel",
      value: function getDecimalForPixel(t) {
        var e = (t - this._startPixel) / this._length;
        return this._reversePixels ? 1 - e : e;
      }
    }, {
      key: "getBasePixel",
      value: function getBasePixel() {
        return this.getPixelForValue(this.getBaseValue());
      }
    }, {
      key: "getBaseValue",
      value: function getBaseValue() {
        var t = this.min,
          e = this.max;
        return t < 0 && e < 0 ? e : t > 0 && e > 0 ? t : 0;
      }
    }, {
      key: "getContext",
      value: function getContext(t) {
        var e = this.ticks || [];
        if (t >= 0 && t < e.length) {
          var _i28 = e[t];
          return _i28.$context || (_i28.$context = function (t, e, i) {
            return pi(t, {
              tick: i,
              index: e,
              type: "tick"
            });
          }(this.getContext(), t, _i28));
        }
        return this.$context || (this.$context = pi(this.chart.getContext(), {
          scale: this,
          type: "scale"
        }));
      }
    }, {
      key: "_tickSize",
      value: function _tickSize() {
        var t = this.options.ticks,
          e = Yt(this.labelRotation),
          i = Math.abs(Math.cos(e)),
          s = Math.abs(Math.sin(e)),
          n = this._getLabelSizes(),
          o = t.autoSkipPadding || 0,
          a = n ? n.widest.width + o : 0,
          r = n ? n.highest.height + o : 0;
        return this.isHorizontal() ? r * i > a * s ? a / i : r / s : r * s < a * i ? r / i : a / s;
      }
    }, {
      key: "_isVisible",
      value: function _isVisible() {
        var t = this.options.display;
        return "auto" !== t ? !!t : this.getMatchingVisibleMetas().length > 0;
      }
    }, {
      key: "_computeGridLineItems",
      value: function _computeGridLineItems(t) {
        var e = this.axis,
          i = this.chart,
          s = this.options,
          n = s.grid,
          o = s.position,
          a = n.offset,
          r = this.isHorizontal(),
          l = this.ticks.length + (a ? 1 : 0),
          h = Fs(n),
          c = [],
          d = n.setContext(this.getContext()),
          u = d.drawBorder ? d.borderWidth : 0,
          f = u / 2,
          g = function g(t) {
            return xe(i, t, u);
          };
        var p, m, b, x, _, y, v, w, M, k, S, P;
        if ("top" === o) p = g(this.bottom), y = this.bottom - h, w = p - f, k = g(t.top) + f, P = t.bottom;else if ("bottom" === o) p = g(this.top), k = t.top, P = g(t.bottom) - f, y = p + f, w = this.top + h;else if ("left" === o) p = g(this.right), _ = this.right - h, v = p - f, M = g(t.left) + f, S = t.right;else if ("right" === o) p = g(this.left), M = t.left, S = g(t.right) - f, _ = p + f, v = this.left + h;else if ("x" === e) {
          if ("center" === o) p = g((t.top + t.bottom) / 2 + .5);else if (q(o)) {
            var _t26 = Object.keys(o)[0],
              _e29 = o[_t26];
            p = g(this.chart.scales[_t26].getPixelForValue(_e29));
          }
          k = t.top, P = t.bottom, y = p + f, w = y + h;
        } else if ("y" === e) {
          if ("center" === o) p = g((t.left + t.right) / 2);else if (q(o)) {
            var _t27 = Object.keys(o)[0],
              _e30 = o[_t27];
            p = g(this.chart.scales[_t27].getPixelForValue(_e30));
          }
          _ = p - f, v = _ - h, M = t.left, S = t.right;
        }
        var D = Z(s.ticks.maxTicksLimit, l),
          C = Math.max(1, Math.ceil(l / D));
        for (m = 0; m < l; m += C) {
          var _t28 = n.setContext(this.getContext(m)),
            _e31 = _t28.lineWidth,
            _s24 = _t28.color,
            _o19 = n.borderDash || [],
            _l11 = _t28.borderDashOffset,
            _h9 = _t28.tickWidth,
            _d5 = _t28.tickColor,
            _u = _t28.tickBorderDash || [],
            _f = _t28.tickBorderDashOffset;
          b = zs(this, m, a), void 0 !== b && (x = xe(i, b, _e31), r ? _ = v = M = S = x : y = w = k = P = x, c.push({
            tx1: _,
            ty1: y,
            tx2: v,
            ty2: w,
            x1: M,
            y1: k,
            x2: S,
            y2: P,
            width: _e31,
            color: _s24,
            borderDash: _o19,
            borderDashOffset: _l11,
            tickWidth: _h9,
            tickColor: _d5,
            tickBorderDash: _u,
            tickBorderDashOffset: _f
          }));
        }
        return this._ticksLength = l, this._borderValue = p, c;
      }
    }, {
      key: "_computeLabelItems",
      value: function _computeLabelItems(t) {
        var e = this.axis,
          i = this.options,
          s = i.position,
          n = i.ticks,
          o = this.isHorizontal(),
          a = this.ticks,
          r = n.align,
          l = n.crossAlign,
          h = n.padding,
          c = n.mirror,
          d = Fs(i.grid),
          u = d + h,
          f = c ? -h : u,
          g = -Yt(this.labelRotation),
          p = [];
        var m,
          b,
          x,
          _,
          y,
          v,
          w,
          M,
          k,
          S,
          P,
          D,
          C = "middle";
        if ("top" === s) v = this.bottom - f, w = this._getXAxisLabelAlignment();else if ("bottom" === s) v = this.top + f, w = this._getXAxisLabelAlignment();else if ("left" === s) {
          var _t29 = this._getYAxisLabelAlignment(d);
          w = _t29.textAlign, y = _t29.x;
        } else if ("right" === s) {
          var _t30 = this._getYAxisLabelAlignment(d);
          w = _t30.textAlign, y = _t30.x;
        } else if ("x" === e) {
          if ("center" === s) v = (t.top + t.bottom) / 2 + u;else if (q(s)) {
            var _t31 = Object.keys(s)[0],
              _e32 = s[_t31];
            v = this.chart.scales[_t31].getPixelForValue(_e32) + u;
          }
          w = this._getXAxisLabelAlignment();
        } else if ("y" === e) {
          if ("center" === s) y = (t.left + t.right) / 2 - u;else if (q(s)) {
            var _t32 = Object.keys(s)[0],
              _e33 = s[_t32];
            y = this.chart.scales[_t32].getPixelForValue(_e33);
          }
          w = this._getYAxisLabelAlignment(d).textAlign;
        }
        "y" === e && ("start" === r ? C = "top" : "end" === r && (C = "bottom"));
        var O = this._getLabelSizes();
        for (m = 0, b = a.length; m < b; ++m) {
          x = a[m], _ = x.label;
          var _t33 = n.setContext(this.getContext(m));
          M = this.getPixelForTick(m) + n.labelOffset, k = this._resolveTickFontOptions(m), S = k.lineHeight, P = X(_) ? _.length : 1;
          var _e34 = P / 2,
            _i29 = _t33.color,
            _r9 = _t33.textStrokeColor,
            _h10 = _t33.textStrokeWidth;
          var _d6 = void 0,
            _u2 = w;
          if (o ? (y = M, "inner" === w && (_u2 = m === b - 1 ? this.options.reverse ? "left" : "right" : 0 === m ? this.options.reverse ? "right" : "left" : "center"), D = "top" === s ? "near" === l || 0 !== g ? -P * S + S / 2 : "center" === l ? -O.highest.height / 2 - _e34 * S + S : -O.highest.height + S / 2 : "near" === l || 0 !== g ? S / 2 : "center" === l ? O.highest.height / 2 - _e34 * S : O.highest.height - P * S, c && (D *= -1)) : (v = M, D = (1 - P) * S / 2), _t33.showLabelBackdrop) {
            var _e35 = di(_t33.backdropPadding),
              _i30 = O.heights[m],
              _s25 = O.widths[m];
            var _n17 = v + D - _e35.top,
              _o20 = y - _e35.left;
            switch (C) {
              case "middle":
                _n17 -= _i30 / 2;
                break;
              case "bottom":
                _n17 -= _i30;
            }
            switch (w) {
              case "center":
                _o20 -= _s25 / 2;
                break;
              case "right":
                _o20 -= _s25;
            }
            _d6 = {
              left: _o20,
              top: _n17,
              width: _s25 + _e35.width,
              height: _i30 + _e35.height,
              color: _t33.backdropColor
            };
          }
          p.push({
            rotation: g,
            label: _,
            font: k,
            color: _i29,
            strokeColor: _r9,
            strokeWidth: _h10,
            textOffset: D,
            textAlign: _u2,
            textBaseline: C,
            translation: [y, v],
            backdrop: _d6
          });
        }
        return p;
      }
    }, {
      key: "_getXAxisLabelAlignment",
      value: function _getXAxisLabelAlignment() {
        var _this$options5 = this.options,
          t = _this$options5.position,
          e = _this$options5.ticks;
        if (-Yt(this.labelRotation)) return "top" === t ? "left" : "right";
        var i = "center";
        return "start" === e.align ? i = "left" : "end" === e.align ? i = "right" : "inner" === e.align && (i = "inner"), i;
      }
    }, {
      key: "_getYAxisLabelAlignment",
      value: function _getYAxisLabelAlignment(t) {
        var _this$options6 = this.options,
          e = _this$options6.position,
          _this$options6$ticks = _this$options6.ticks,
          i = _this$options6$ticks.crossAlign,
          s = _this$options6$ticks.mirror,
          n = _this$options6$ticks.padding,
          o = t + n,
          a = this._getLabelSizes().widest.width;
        var r, l;
        return "left" === e ? s ? (l = this.right + n, "near" === i ? r = "left" : "center" === i ? (r = "center", l += a / 2) : (r = "right", l += a)) : (l = this.right - o, "near" === i ? r = "right" : "center" === i ? (r = "center", l -= a / 2) : (r = "left", l = this.left)) : "right" === e ? s ? (l = this.left + n, "near" === i ? r = "right" : "center" === i ? (r = "center", l -= a / 2) : (r = "left", l -= a)) : (l = this.left + o, "near" === i ? r = "left" : "center" === i ? (r = "center", l += a / 2) : (r = "right", l = this.right)) : r = "right", {
          textAlign: r,
          x: l
        };
      }
    }, {
      key: "_computeLabelArea",
      value: function _computeLabelArea() {
        if (this.options.ticks.mirror) return;
        var t = this.chart,
          e = this.options.position;
        return "left" === e || "right" === e ? {
          top: 0,
          left: this.left,
          bottom: t.height,
          right: this.right
        } : "top" === e || "bottom" === e ? {
          top: this.top,
          left: 0,
          bottom: this.bottom,
          right: t.width
        } : void 0;
      }
    }, {
      key: "drawBackground",
      value: function drawBackground() {
        var t = this.ctx,
          e = this.options.backgroundColor,
          i = this.left,
          s = this.top,
          n = this.width,
          o = this.height;
        e && (t.save(), t.fillStyle = e, t.fillRect(i, s, n, o), t.restore());
      }
    }, {
      key: "getLineWidthForValue",
      value: function getLineWidthForValue(t) {
        var e = this.options.grid;
        if (!this._isVisible() || !e.display) return 0;
        var i = this.ticks.findIndex(function (e) {
          return e.value === t;
        });
        if (i >= 0) {
          return e.setContext(this.getContext(i)).lineWidth;
        }
        return 0;
      }
    }, {
      key: "drawGrid",
      value: function drawGrid(t) {
        var e = this.options.grid,
          i = this.ctx,
          s = this._gridLineItems || (this._gridLineItems = this._computeGridLineItems(t));
        var n, o;
        var a = function a(t, e, s) {
          s.width && s.color && (i.save(), i.lineWidth = s.width, i.strokeStyle = s.color, i.setLineDash(s.borderDash || []), i.lineDashOffset = s.borderDashOffset, i.beginPath(), i.moveTo(t.x, t.y), i.lineTo(e.x, e.y), i.stroke(), i.restore());
        };
        if (e.display) for (n = 0, o = s.length; n < o; ++n) {
          var _t34 = s[n];
          e.drawOnChartArea && a({
            x: _t34.x1,
            y: _t34.y1
          }, {
            x: _t34.x2,
            y: _t34.y2
          }, _t34), e.drawTicks && a({
            x: _t34.tx1,
            y: _t34.ty1
          }, {
            x: _t34.tx2,
            y: _t34.ty2
          }, {
            color: _t34.tickColor,
            width: _t34.tickWidth,
            borderDash: _t34.tickBorderDash,
            borderDashOffset: _t34.tickBorderDashOffset
          });
        }
      }
    }, {
      key: "drawBorder",
      value: function drawBorder() {
        var t = this.chart,
          e = this.ctx,
          i = this.options.grid,
          s = i.setContext(this.getContext()),
          n = i.drawBorder ? s.borderWidth : 0;
        if (!n) return;
        var o = i.setContext(this.getContext(0)).lineWidth,
          a = this._borderValue;
        var r, l, h, c;
        this.isHorizontal() ? (r = xe(t, this.left, n) - n / 2, l = xe(t, this.right, o) + o / 2, h = c = a) : (h = xe(t, this.top, n) - n / 2, c = xe(t, this.bottom, o) + o / 2, r = l = a), e.save(), e.lineWidth = s.borderWidth, e.strokeStyle = s.borderColor, e.beginPath(), e.moveTo(r, h), e.lineTo(l, c), e.stroke(), e.restore();
      }
    }, {
      key: "drawLabels",
      value: function drawLabels(t) {
        if (!this.options.ticks.display) return;
        var e = this.ctx,
          i = this._computeLabelArea();
        i && we(e, i);
        var s = this._labelItems || (this._labelItems = this._computeLabelItems(t));
        var n, o;
        for (n = 0, o = s.length; n < o; ++n) {
          var _t35 = s[n],
            _i31 = _t35.font,
            _o21 = _t35.label;
          _t35.backdrop && (e.fillStyle = _t35.backdrop.color, e.fillRect(_t35.backdrop.left, _t35.backdrop.top, _t35.backdrop.width, _t35.backdrop.height)), Pe(e, _o21, 0, _t35.textOffset, _i31, _t35);
        }
        i && Me(e);
      }
    }, {
      key: "drawTitle",
      value: function drawTitle() {
        var t = this.ctx,
          _this$options7 = this.options,
          e = _this$options7.position,
          i = _this$options7.title,
          s = _this$options7.reverse;
        if (!i.display) return;
        var o = ui(i.font),
          a = di(i.padding),
          r = i.align;
        var l = o.lineHeight / 2;
        "bottom" === e || "center" === e || q(e) ? (l += a.bottom, X(i.text) && (l += o.lineHeight * (i.text.length - 1))) : l += a.top;
        var _ref6 = function (t, e, i, s) {
            var o = t.top,
              a = t.left,
              r = t.bottom,
              l = t.right,
              h = t.chart,
              c = h.chartArea,
              d = h.scales;
            var u,
              f,
              g,
              p = 0;
            var m = r - o,
              b = l - a;
            if (t.isHorizontal()) {
              if (f = n(s, a, l), q(i)) {
                var _t36 = Object.keys(i)[0],
                  _s26 = i[_t36];
                g = d[_t36].getPixelForValue(_s26) + m - e;
              } else g = "center" === i ? (c.bottom + c.top) / 2 + m - e : Es(t, i, e);
              u = l - a;
            } else {
              if (q(i)) {
                var _t37 = Object.keys(i)[0],
                  _s27 = i[_t37];
                f = d[_t37].getPixelForValue(_s27) - b + e;
              } else f = "center" === i ? (c.left + c.right) / 2 - b + e : Es(t, i, e);
              g = n(s, r, o), p = "left" === i ? -Et : Et;
            }
            return {
              titleX: f,
              titleY: g,
              maxWidth: u,
              rotation: p
            };
          }(this, l, e, r),
          h = _ref6.titleX,
          c = _ref6.titleY,
          d = _ref6.maxWidth,
          u = _ref6.rotation;
        Pe(t, i.text, 0, 0, o, {
          color: i.color,
          maxWidth: d,
          rotation: u,
          textAlign: Vs(r, e, s),
          textBaseline: "middle",
          translation: [h, c]
        });
      }
    }, {
      key: "draw",
      value: function draw(t) {
        this._isVisible() && (this.drawBackground(), this.drawGrid(t), this.drawBorder(), this.drawTitle(), this.drawLabels(t));
      }
    }, {
      key: "_layers",
      value: function _layers() {
        var _this6 = this;
        var t = this.options,
          e = t.ticks && t.ticks.z || 0,
          i = Z(t.grid && t.grid.z, -1);
        return this._isVisible() && this.draw === Ns.prototype.draw ? [{
          z: i,
          draw: function draw(t) {
            _this6.drawBackground(), _this6.drawGrid(t), _this6.drawTitle();
          }
        }, {
          z: i + 1,
          draw: function draw() {
            _this6.drawBorder();
          }
        }, {
          z: e,
          draw: function draw(t) {
            _this6.drawLabels(t);
          }
        }] : [{
          z: e,
          draw: function draw(t) {
            _this6.draw(t);
          }
        }];
      }
    }, {
      key: "getMatchingVisibleMetas",
      value: function getMatchingVisibleMetas(t) {
        var e = this.chart.getSortedVisibleDatasetMetas(),
          i = this.axis + "AxisID",
          s = [];
        var n, o;
        for (n = 0, o = e.length; n < o; ++n) {
          var _o22 = e[n];
          _o22[i] !== this.id || t && _o22.type !== t || s.push(_o22);
        }
        return s;
      }
    }, {
      key: "_resolveTickFontOptions",
      value: function _resolveTickFontOptions(t) {
        return ui(this.options.ticks.setContext(this.getContext(t)).font);
      }
    }, {
      key: "_maxDigits",
      value: function _maxDigits() {
        var t = this._resolveTickFontOptions(0).lineHeight;
        return (this.isHorizontal() ? this.width : this.height) / t;
      }
    }]);
    return Ns;
  }(Os);
  var Ws = /*#__PURE__*/function () {
    function Ws(t, e, i) {
      _classCallCheck(this, Ws);
      this.type = t, this.scope = e, this.override = i, this.items = Object.create(null);
    }
    _createClass(Ws, [{
      key: "isForType",
      value: function isForType(t) {
        return Object.prototype.isPrototypeOf.call(this.type.prototype, t.prototype);
      }
    }, {
      key: "register",
      value: function register(t) {
        var e = Object.getPrototypeOf(t);
        var i;
        (function (t) {
          return "id" in t && "defaults" in t;
        })(e) && (i = this.register(e));
        var s = this.items,
          n = t.id,
          o = this.scope + "." + n;
        if (!n) throw new Error("class does not have id: " + t);
        return n in s || (s[n] = t, function (t, e, i) {
          var s = at(Object.create(null), [i ? yt.get(i) : {}, yt.get(e), t.defaults]);
          yt.set(e, s), t.defaultRoutes && function (t, e) {
            Object.keys(e).forEach(function (i) {
              var s = i.split("."),
                n = s.pop(),
                o = [t].concat(s).join("."),
                a = e[i].split("."),
                r = a.pop(),
                l = a.join(".");
              yt.route(o, n, l, r);
            });
          }(e, t.defaultRoutes);
          t.descriptors && yt.describe(e, t.descriptors);
        }(t, o, i), this.override && yt.override(t.id, t.overrides)), o;
      }
    }, {
      key: "get",
      value: function get(t) {
        return this.items[t];
      }
    }, {
      key: "unregister",
      value: function unregister(t) {
        var e = this.items,
          i = t.id,
          s = this.scope;
        i in e && delete e[i], s && i in yt[s] && (delete yt[s][i], this.override && delete mt[i]);
      }
    }]);
    return Ws;
  }();
  var Hs = new ( /*#__PURE__*/function () {
    function _class3() {
      _classCallCheck(this, _class3);
      this.controllers = new Ws(Cs, "datasets", !0), this.elements = new Ws(Os, "elements"), this.plugins = new Ws(Object, "plugins"), this.scales = new Ws(Ns, "scales"), this._typedRegistries = [this.controllers, this.scales, this.elements];
    }
    _createClass(_class3, [{
      key: "add",
      value: function add() {
        for (var _len4 = arguments.length, t = new Array(_len4), _key4 = 0; _key4 < _len4; _key4++) {
          t[_key4] = arguments[_key4];
        }
        this._each("register", t);
      }
    }, {
      key: "remove",
      value: function remove() {
        for (var _len5 = arguments.length, t = new Array(_len5), _key5 = 0; _key5 < _len5; _key5++) {
          t[_key5] = arguments[_key5];
        }
        this._each("unregister", t);
      }
    }, {
      key: "addControllers",
      value: function addControllers() {
        for (var _len6 = arguments.length, t = new Array(_len6), _key6 = 0; _key6 < _len6; _key6++) {
          t[_key6] = arguments[_key6];
        }
        this._each("register", t, this.controllers);
      }
    }, {
      key: "addElements",
      value: function addElements() {
        for (var _len7 = arguments.length, t = new Array(_len7), _key7 = 0; _key7 < _len7; _key7++) {
          t[_key7] = arguments[_key7];
        }
        this._each("register", t, this.elements);
      }
    }, {
      key: "addPlugins",
      value: function addPlugins() {
        for (var _len8 = arguments.length, t = new Array(_len8), _key8 = 0; _key8 < _len8; _key8++) {
          t[_key8] = arguments[_key8];
        }
        this._each("register", t, this.plugins);
      }
    }, {
      key: "addScales",
      value: function addScales() {
        for (var _len9 = arguments.length, t = new Array(_len9), _key9 = 0; _key9 < _len9; _key9++) {
          t[_key9] = arguments[_key9];
        }
        this._each("register", t, this.scales);
      }
    }, {
      key: "getController",
      value: function getController(t) {
        return this._get(t, this.controllers, "controller");
      }
    }, {
      key: "getElement",
      value: function getElement(t) {
        return this._get(t, this.elements, "element");
      }
    }, {
      key: "getPlugin",
      value: function getPlugin(t) {
        return this._get(t, this.plugins, "plugin");
      }
    }, {
      key: "getScale",
      value: function getScale(t) {
        return this._get(t, this.scales, "scale");
      }
    }, {
      key: "removeControllers",
      value: function removeControllers() {
        for (var _len10 = arguments.length, t = new Array(_len10), _key10 = 0; _key10 < _len10; _key10++) {
          t[_key10] = arguments[_key10];
        }
        this._each("unregister", t, this.controllers);
      }
    }, {
      key: "removeElements",
      value: function removeElements() {
        for (var _len11 = arguments.length, t = new Array(_len11), _key11 = 0; _key11 < _len11; _key11++) {
          t[_key11] = arguments[_key11];
        }
        this._each("unregister", t, this.elements);
      }
    }, {
      key: "removePlugins",
      value: function removePlugins() {
        for (var _len12 = arguments.length, t = new Array(_len12), _key12 = 0; _key12 < _len12; _key12++) {
          t[_key12] = arguments[_key12];
        }
        this._each("unregister", t, this.plugins);
      }
    }, {
      key: "removeScales",
      value: function removeScales() {
        for (var _len13 = arguments.length, t = new Array(_len13), _key13 = 0; _key13 < _len13; _key13++) {
          t[_key13] = arguments[_key13];
        }
        this._each("unregister", t, this.scales);
      }
    }, {
      key: "_each",
      value: function _each(t, e, i) {
        var _this7 = this;
        _toConsumableArray(e).forEach(function (e) {
          var s = i || _this7._getRegistryForType(e);
          i || s.isForType(e) || s === _this7.plugins && e.id ? _this7._exec(t, s, e) : et(e, function (e) {
            var s = i || _this7._getRegistryForType(e);
            _this7._exec(t, s, e);
          });
        });
      }
    }, {
      key: "_exec",
      value: function _exec(t, e, i) {
        var s = dt(t);
        tt(i["before" + s], [], i), e[t](i), tt(i["after" + s], [], i);
      }
    }, {
      key: "_getRegistryForType",
      value: function _getRegistryForType(t) {
        for (var _e36 = 0; _e36 < this._typedRegistries.length; _e36++) {
          var _i32 = this._typedRegistries[_e36];
          if (_i32.isForType(t)) return _i32;
        }
        return this.plugins;
      }
    }, {
      key: "_get",
      value: function _get(t, e, i) {
        var s = e.get(t);
        if (void 0 === s) throw new Error('"' + t + '" is not a registered ' + i + ".");
        return s;
      }
    }]);
    return _class3;
  }())();
  var js = /*#__PURE__*/function () {
    function js() {
      _classCallCheck(this, js);
      this._init = [];
    }
    _createClass(js, [{
      key: "notify",
      value: function notify(t, e, i, s) {
        "beforeInit" === e && (this._init = this._createDescriptors(t, !0), this._notify(this._init, t, "install"));
        var n = s ? this._descriptors(t).filter(s) : this._descriptors(t),
          o = this._notify(n, t, e, i);
        return "afterDestroy" === e && (this._notify(n, t, "stop"), this._notify(this._init, t, "uninstall")), o;
      }
    }, {
      key: "_notify",
      value: function _notify(t, e, i, s) {
        s = s || {};
        var _iterator18 = _createForOfIteratorHelper(t),
          _step18;
        try {
          for (_iterator18.s(); !(_step18 = _iterator18.n()).done;) {
            var _n18 = _step18.value;
            var _t38 = _n18.plugin;
            if (!1 === tt(_t38[i], [e, s, _n18.options], _t38) && s.cancelable) return !1;
          }
        } catch (err) {
          _iterator18.e(err);
        } finally {
          _iterator18.f();
        }
        return !0;
      }
    }, {
      key: "invalidate",
      value: function invalidate() {
        U(this._cache) || (this._oldCache = this._cache, this._cache = void 0);
      }
    }, {
      key: "_descriptors",
      value: function _descriptors(t) {
        if (this._cache) return this._cache;
        var e = this._cache = this._createDescriptors(t);
        return this._notifyStateChanges(t), e;
      }
    }, {
      key: "_createDescriptors",
      value: function _createDescriptors(t, e) {
        var i = t && t.config,
          s = Z(i.options && i.options.plugins, {}),
          n = function (t) {
            var e = [],
              i = Object.keys(Hs.plugins.items);
            for (var _t39 = 0; _t39 < i.length; _t39++) e.push(Hs.getPlugin(i[_t39]));
            var s = t.plugins || [];
            for (var _t40 = 0; _t40 < s.length; _t40++) {
              var _i33 = s[_t40];
              -1 === e.indexOf(_i33) && e.push(_i33);
            }
            return e;
          }(i);
        return !1 !== s || e ? function (t, e, i, s) {
          var n = [],
            o = t.getContext();
          for (var _a12 = 0; _a12 < e.length; _a12++) {
            var _r10 = e[_a12],
              _l12 = $s(i[_r10.id], s);
            null !== _l12 && n.push({
              plugin: _r10,
              options: Ys(t.config, _r10, _l12, o)
            });
          }
          return n;
        }(t, n, s, e) : [];
      }
    }, {
      key: "_notifyStateChanges",
      value: function _notifyStateChanges(t) {
        var e = this._oldCache || [],
          i = this._cache,
          s = function s(t, e) {
            return t.filter(function (t) {
              return !e.some(function (e) {
                return t.plugin.id === e.plugin.id;
              });
            });
          };
        this._notify(s(e, i), t, "stop"), this._notify(s(i, e), t, "start");
      }
    }]);
    return js;
  }();
  function $s(t, e) {
    return e || !1 !== t ? !0 === t ? {} : t : null;
  }
  function Ys(t, e, i, s) {
    var n = t.pluginScopeKeys(e),
      o = t.getOptionScopes(i, n);
    return t.createResolver(o, s, [""], {
      scriptable: !1,
      indexable: !1,
      allKeys: !0
    });
  }
  function Us(t, e) {
    var i = yt.datasets[t] || {};
    return ((e.datasets || {})[t] || {}).indexAxis || e.indexAxis || i.indexAxis || "x";
  }
  function Xs(t, e) {
    return "x" === t || "y" === t ? t : e.axis || ("top" === (i = e.position) || "bottom" === i ? "x" : "left" === i || "right" === i ? "y" : void 0) || t.charAt(0).toLowerCase();
    var i;
  }
  function qs(t) {
    var e = t.options || (t.options = {});
    e.plugins = Z(e.plugins, {}), e.scales = function (t, e) {
      var i = mt[t.type] || {
          scales: {}
        },
        s = e.scales || {},
        n = Us(t.type, e),
        o = Object.create(null),
        a = Object.create(null);
      return Object.keys(s).forEach(function (t) {
        var e = s[t];
        if (!q(e)) return console.error("Invalid scale configuration for scale: ".concat(t));
        if (e._proxy) return console.warn("Ignoring resolver passed as options for scale: ".concat(t));
        var r = Xs(t, e),
          l = function (t, e) {
            return t === e ? "_index_" : "_value_";
          }(r, n),
          h = i.scales || {};
        o[r] = o[r] || t, a[t] = rt(Object.create(null), [{
          axis: r
        }, e, h[r], h[l]]);
      }), t.data.datasets.forEach(function (i) {
        var n = i.type || t.type,
          r = i.indexAxis || Us(n, e),
          l = (mt[n] || {}).scales || {};
        Object.keys(l).forEach(function (t) {
          var e = function (t, e) {
              var i = t;
              return "_index_" === t ? i = e : "_value_" === t && (i = "x" === e ? "y" : "x"), i;
            }(t, r),
            n = i[e + "AxisID"] || o[e] || e;
          a[n] = a[n] || Object.create(null), rt(a[n], [{
            axis: e
          }, s[n], l[t]]);
        });
      }), Object.keys(a).forEach(function (t) {
        var e = a[t];
        rt(e, [yt.scales[e.type], yt.scale]);
      }), a;
    }(t, e);
  }
  function Ks(t) {
    return (t = t || {}).datasets = t.datasets || [], t.labels = t.labels || [], t;
  }
  var Gs = new Map(),
    Zs = new Set();
  function Js(t, e) {
    var i = Gs.get(t);
    return i || (i = e(), Gs.set(t, i), Zs.add(i)), i;
  }
  var Qs = function Qs(t, e, i) {
    var s = ct(e, i);
    void 0 !== s && t.add(s);
  };
  var tn = /*#__PURE__*/function () {
    function tn(t) {
      _classCallCheck(this, tn);
      this._config = function (t) {
        return (t = t || {}).data = Ks(t.data), qs(t), t;
      }(t), this._scopeCache = new Map(), this._resolverCache = new Map();
    }
    _createClass(tn, [{
      key: "platform",
      get: function get() {
        return this._config.platform;
      }
    }, {
      key: "type",
      get: function get() {
        return this._config.type;
      },
      set: function set(t) {
        this._config.type = t;
      }
    }, {
      key: "data",
      get: function get() {
        return this._config.data;
      },
      set: function set(t) {
        this._config.data = Ks(t);
      }
    }, {
      key: "options",
      get: function get() {
        return this._config.options;
      },
      set: function set(t) {
        this._config.options = t;
      }
    }, {
      key: "plugins",
      get: function get() {
        return this._config.plugins;
      }
    }, {
      key: "update",
      value: function update() {
        var t = this._config;
        this.clearCache(), qs(t);
      }
    }, {
      key: "clearCache",
      value: function clearCache() {
        this._scopeCache.clear(), this._resolverCache.clear();
      }
    }, {
      key: "datasetScopeKeys",
      value: function datasetScopeKeys(t) {
        return Js(t, function () {
          return [["datasets.".concat(t), ""]];
        });
      }
    }, {
      key: "datasetAnimationScopeKeys",
      value: function datasetAnimationScopeKeys(t, e) {
        return Js("".concat(t, ".transition.").concat(e), function () {
          return [["datasets.".concat(t, ".transitions.").concat(e), "transitions.".concat(e)], ["datasets.".concat(t), ""]];
        });
      }
    }, {
      key: "datasetElementScopeKeys",
      value: function datasetElementScopeKeys(t, e) {
        return Js("".concat(t, "-").concat(e), function () {
          return [["datasets.".concat(t, ".elements.").concat(e), "datasets.".concat(t), "elements.".concat(e), ""]];
        });
      }
    }, {
      key: "pluginScopeKeys",
      value: function pluginScopeKeys(t) {
        var e = t.id;
        return Js("".concat(this.type, "-plugin-").concat(e), function () {
          return [["plugins.".concat(e)].concat(_toConsumableArray(t.additionalOptionScopes || []))];
        });
      }
    }, {
      key: "_cachedScopes",
      value: function _cachedScopes(t, e) {
        var i = this._scopeCache;
        var s = i.get(t);
        return s && !e || (s = new Map(), i.set(t, s)), s;
      }
    }, {
      key: "getOptionScopes",
      value: function getOptionScopes(t, e, i) {
        var s = this.options,
          n = this.type,
          o = this._cachedScopes(t, i),
          a = o.get(e);
        if (a) return a;
        var r = new Set();
        e.forEach(function (e) {
          t && (r.add(t), e.forEach(function (e) {
            return Qs(r, t, e);
          })), e.forEach(function (t) {
            return Qs(r, s, t);
          }), e.forEach(function (t) {
            return Qs(r, mt[n] || {}, t);
          }), e.forEach(function (t) {
            return Qs(r, yt, t);
          }), e.forEach(function (t) {
            return Qs(r, bt, t);
          });
        });
        var l = Array.from(r);
        return 0 === l.length && l.push(Object.create(null)), Zs.has(e) && o.set(e, l), l;
      }
    }, {
      key: "chartOptionScopes",
      value: function chartOptionScopes() {
        var t = this.options,
          e = this.type;
        return [t, mt[e] || {}, yt.datasets[e] || {}, {
          type: e
        }, yt, bt];
      }
    }, {
      key: "resolveNamedOptions",
      value: function resolveNamedOptions(t, e, i) {
        var s = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : [""];
        var n = {
            $shared: !0
          },
          _en = en(this._resolverCache, t, s),
          o = _en.resolver,
          a = _en.subPrefixes;
        var r = o;
        if (function (t, e) {
          var _Te = Te(t),
            i = _Te.isScriptable,
            s = _Te.isIndexable;
          var _iterator19 = _createForOfIteratorHelper(e),
            _step19;
          try {
            for (_iterator19.s(); !(_step19 = _iterator19.n()).done;) {
              var _n19 = _step19.value;
              var _e37 = i(_n19),
                _o23 = s(_n19),
                _a13 = (_o23 || _e37) && t[_n19];
              if (_e37 && (ft(_a13) || sn(_a13)) || _o23 && X(_a13)) return !0;
            }
          } catch (err) {
            _iterator19.e(err);
          } finally {
            _iterator19.f();
          }
          return !1;
        }(o, e)) {
          n.$shared = !1;
          r = Ae(o, i = ft(i) ? i() : i, this.createResolver(t, i, a));
        }
        var _iterator20 = _createForOfIteratorHelper(e),
          _step20;
        try {
          for (_iterator20.s(); !(_step20 = _iterator20.n()).done;) {
            var _t41 = _step20.value;
            n[_t41] = r[_t41];
          }
        } catch (err) {
          _iterator20.e(err);
        } finally {
          _iterator20.f();
        }
        return n;
      }
    }, {
      key: "createResolver",
      value: function createResolver(t, e) {
        var i = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : [""];
        var s = arguments.length > 3 ? arguments[3] : undefined;
        var _en2 = en(this._resolverCache, t, i),
          n = _en2.resolver;
        return q(e) ? Ae(n, e, void 0, s) : n;
      }
    }]);
    return tn;
  }();
  function en(t, e, i) {
    var s = t.get(e);
    s || (s = new Map(), t.set(e, s));
    var n = i.join();
    var o = s.get(n);
    if (!o) {
      o = {
        resolver: Oe(e, i),
        subPrefixes: i.filter(function (t) {
          return !t.toLowerCase().includes("hover");
        })
      }, s.set(n, o);
    }
    return o;
  }
  var sn = function sn(t) {
    return q(t) && Object.getOwnPropertyNames(t).reduce(function (e, i) {
      return e || ft(t[i]);
    }, !1);
  };
  var nn = ["top", "bottom", "left", "right", "chartArea"];
  function on(t, e) {
    return "top" === t || "bottom" === t || -1 === nn.indexOf(t) && "x" === e;
  }
  function an(t, e) {
    return function (i, s) {
      return i[t] === s[t] ? i[e] - s[e] : i[t] - s[t];
    };
  }
  function rn(t) {
    var e = t.chart,
      i = e.options.animation;
    e.notifyPlugins("afterRender"), tt(i && i.onComplete, [t], e);
  }
  function ln(t) {
    var e = t.chart,
      i = e.options.animation;
    tt(i && i.onProgress, [t], e);
  }
  function hn(t) {
    return ie() && "string" == typeof t ? t = document.getElementById(t) : t && t.length && (t = t[0]), t && t.canvas && (t = t.canvas), t;
  }
  var cn = {},
    dn = function dn(t) {
      var e = hn(t);
      return Object.values(cn).filter(function (t) {
        return t.canvas === e;
      }).pop();
    };
  function un(t, e, i) {
    var s = Object.keys(t);
    for (var _i34 = 0, _s28 = s; _i34 < _s28.length; _i34++) {
      var _n20 = _s28[_i34];
      var _s29 = +_n20;
      if (_s29 >= e) {
        var _o24 = t[_n20];
        delete t[_n20], (i > 0 || _s29 > e) && (t[_s29 + i] = _o24);
      }
    }
  }
  var fn = /*#__PURE__*/function () {
    function fn(t, e) {
      var _this8 = this;
      _classCallCheck(this, fn);
      var s = this.config = new tn(e),
        n = hn(t),
        o = dn(n);
      if (o) throw new Error("Canvas is already in use. Chart with ID '" + o.id + "' must be destroyed before the canvas can be reused.");
      var r = s.createResolver(s.chartOptionScopes(), this.getContext());
      this.platform = new (s.platform || cs(n))(), this.platform.updateConfig(s);
      var l = this.platform.acquireContext(n, r.aspectRatio),
        h = l && l.canvas,
        c = h && h.height,
        d = h && h.width;
      this.id = Y(), this.ctx = l, this.canvas = h, this.width = d, this.height = c, this._options = r, this._aspectRatio = this.aspectRatio, this._layers = [], this._metasets = [], this._stacks = void 0, this.boxes = [], this.currentDevicePixelRatio = void 0, this.chartArea = void 0, this._active = [], this._lastEvent = void 0, this._listeners = {}, this._responsiveListeners = void 0, this._sortedMetasets = [], this.scales = {}, this._plugins = new js(), this.$proxies = {}, this._hiddenIndices = {}, this.attached = !1, this._animationsDisabled = void 0, this.$context = void 0, this._doResize = i(function (t) {
        return _this8.update(t);
      }, r.resizeDelay || 0), this._dataChanges = [], cn[this.id] = this, l && h ? (a.listen(this, "complete", rn), a.listen(this, "progress", ln), this._initialize(), this.attached && this.update()) : console.error("Failed to create chart: can't acquire context from the given item");
    }
    _createClass(fn, [{
      key: "aspectRatio",
      get: function get() {
        var _this$options8 = this.options,
          t = _this$options8.aspectRatio,
          e = _this$options8.maintainAspectRatio,
          i = this.width,
          s = this.height,
          n = this._aspectRatio;
        return U(t) ? e && n ? n : s ? i / s : null : t;
      }
    }, {
      key: "data",
      get: function get() {
        return this.config.data;
      },
      set: function set(t) {
        this.config.data = t;
      }
    }, {
      key: "options",
      get: function get() {
        return this._options;
      },
      set: function set(t) {
        this.config.options = t;
      }
    }, {
      key: "_initialize",
      value: function _initialize() {
        return this.notifyPlugins("beforeInit"), this.options.responsive ? this.resize() : ue(this, this.options.devicePixelRatio), this.bindEvents(), this.notifyPlugins("afterInit"), this;
      }
    }, {
      key: "clear",
      value: function clear() {
        return _e(this.canvas, this.ctx), this;
      }
    }, {
      key: "stop",
      value: function stop() {
        return a.stop(this), this;
      }
    }, {
      key: "resize",
      value: function resize(t, e) {
        a.running(this) ? this._resizeBeforeDraw = {
          width: t,
          height: e
        } : this._resize(t, e);
      }
    }, {
      key: "_resize",
      value: function _resize(t, e) {
        var i = this.options,
          s = this.canvas,
          n = i.maintainAspectRatio && this.aspectRatio,
          o = this.platform.getMaximumSize(s, t, e, n),
          a = i.devicePixelRatio || this.platform.getDevicePixelRatio(),
          r = this.width ? "resize" : "attach";
        this.width = o.width, this.height = o.height, this._aspectRatio = this.aspectRatio, ue(this, a, !0) && (this.notifyPlugins("resize", {
          size: o
        }), tt(i.onResize, [this, o], this), this.attached && this._doResize(r) && this.render());
      }
    }, {
      key: "ensureScalesHaveIDs",
      value: function ensureScalesHaveIDs() {
        et(this.options.scales || {}, function (t, e) {
          t.id = e;
        });
      }
    }, {
      key: "buildOrUpdateScales",
      value: function buildOrUpdateScales() {
        var _this9 = this;
        var t = this.options,
          e = t.scales,
          i = this.scales,
          s = Object.keys(i).reduce(function (t, e) {
            return t[e] = !1, t;
          }, {});
        var n = [];
        e && (n = n.concat(Object.keys(e).map(function (t) {
          var i = e[t],
            s = Xs(t, i),
            n = "r" === s,
            o = "x" === s;
          return {
            options: i,
            dposition: n ? "chartArea" : o ? "bottom" : "left",
            dtype: n ? "radialLinear" : o ? "category" : "linear"
          };
        }))), et(n, function (e) {
          var n = e.options,
            o = n.id,
            a = Xs(o, n),
            r = Z(n.type, e.dtype);
          void 0 !== n.position && on(n.position, a) === on(e.dposition) || (n.position = e.dposition), s[o] = !0;
          var l = null;
          if (o in i && i[o].type === r) l = i[o];else {
            l = new (Hs.getScale(r))({
              id: o,
              type: r,
              ctx: _this9.ctx,
              chart: _this9
            }), i[l.id] = l;
          }
          l.init(n, t);
        }), et(s, function (t, e) {
          t || delete i[e];
        }), et(i, function (t) {
          Xi.configure(_this9, t, t.options), Xi.addBox(_this9, t);
        });
      }
    }, {
      key: "_updateMetasets",
      value: function _updateMetasets() {
        var t = this._metasets,
          e = this.data.datasets.length,
          i = t.length;
        if (t.sort(function (t, e) {
          return t.index - e.index;
        }), i > e) {
          for (var _t42 = e; _t42 < i; ++_t42) this._destroyDatasetMeta(_t42);
          t.splice(e, i - e);
        }
        this._sortedMetasets = t.slice(0).sort(an("order", "index"));
      }
    }, {
      key: "_removeUnreferencedMetasets",
      value: function _removeUnreferencedMetasets() {
        var _this10 = this;
        var t = this._metasets,
          e = this.data.datasets;
        t.length > e.length && delete this._stacks, t.forEach(function (t, i) {
          0 === e.filter(function (e) {
            return e === t._dataset;
          }).length && _this10._destroyDatasetMeta(i);
        });
      }
    }, {
      key: "buildOrUpdateControllers",
      value: function buildOrUpdateControllers() {
        var t = [],
          e = this.data.datasets;
        var i, s;
        for (this._removeUnreferencedMetasets(), i = 0, s = e.length; i < s; i++) {
          var _s30 = e[i];
          var _n21 = this.getDatasetMeta(i);
          var _o25 = _s30.type || this.config.type;
          if (_n21.type && _n21.type !== _o25 && (this._destroyDatasetMeta(i), _n21 = this.getDatasetMeta(i)), _n21.type = _o25, _n21.indexAxis = _s30.indexAxis || Us(_o25, this.options), _n21.order = _s30.order || 0, _n21.index = i, _n21.label = "" + _s30.label, _n21.visible = this.isDatasetVisible(i), _n21.controller) _n21.controller.updateIndex(i), _n21.controller.linkScales();else {
            var _e38 = Hs.getController(_o25),
              _yt$datasets$_o = yt.datasets[_o25],
              _s31 = _yt$datasets$_o.datasetElementType,
              _a14 = _yt$datasets$_o.dataElementType;
            Object.assign(_e38.prototype, {
              dataElementType: Hs.getElement(_a14),
              datasetElementType: _s31 && Hs.getElement(_s31)
            }), _n21.controller = new _e38(this, i), t.push(_n21.controller);
          }
        }
        return this._updateMetasets(), t;
      }
    }, {
      key: "_resetElements",
      value: function _resetElements() {
        var _this11 = this;
        et(this.data.datasets, function (t, e) {
          _this11.getDatasetMeta(e).controller.reset();
        }, this);
      }
    }, {
      key: "reset",
      value: function reset() {
        this._resetElements(), this.notifyPlugins("reset");
      }
    }, {
      key: "update",
      value: function update(t) {
        var e = this.config;
        e.update();
        var i = this._options = e.createResolver(e.chartOptionScopes(), this.getContext()),
          s = this._animationsDisabled = !i.animation;
        if (this._updateScales(), this._checkEventBindings(), this._updateHiddenIndices(), this._plugins.invalidate(), !1 === this.notifyPlugins("beforeUpdate", {
          mode: t,
          cancelable: !0
        })) return;
        var n = this.buildOrUpdateControllers();
        this.notifyPlugins("beforeElementsUpdate");
        var o = 0;
        for (var _t43 = 0, _e39 = this.data.datasets.length; _t43 < _e39; _t43++) {
          var _this$getDatasetMeta = this.getDatasetMeta(_t43),
            _e40 = _this$getDatasetMeta.controller,
            _i35 = !s && -1 === n.indexOf(_e40);
          _e40.buildOrUpdateElements(_i35), o = Math.max(+_e40.getMaxOverflow(), o);
        }
        o = this._minPadding = i.layout.autoPadding ? o : 0, this._updateLayout(o), s || et(n, function (t) {
          t.reset();
        }), this._updateDatasets(t), this.notifyPlugins("afterUpdate", {
          mode: t
        }), this._layers.sort(an("z", "_idx"));
        var a = this._active,
          r = this._lastEvent;
        r ? this._eventHandler(r, !0) : a.length && this._updateHoverStyles(a, a, !0), this.render();
      }
    }, {
      key: "_updateScales",
      value: function _updateScales() {
        var _this12 = this;
        et(this.scales, function (t) {
          Xi.removeBox(_this12, t);
        }), this.ensureScalesHaveIDs(), this.buildOrUpdateScales();
      }
    }, {
      key: "_checkEventBindings",
      value: function _checkEventBindings() {
        var t = this.options,
          e = new Set(Object.keys(this._listeners)),
          i = new Set(t.events);
        gt(e, i) && !!this._responsiveListeners === t.responsive || (this.unbindEvents(), this.bindEvents());
      }
    }, {
      key: "_updateHiddenIndices",
      value: function _updateHiddenIndices() {
        var t = this._hiddenIndices,
          e = this._getUniformDataChanges() || [];
        var _iterator21 = _createForOfIteratorHelper(e),
          _step21;
        try {
          for (_iterator21.s(); !(_step21 = _iterator21.n()).done;) {
            var _step21$value = _step21.value,
              _i36 = _step21$value.method,
              _s32 = _step21$value.start,
              _n22 = _step21$value.count;
            un(t, _s32, "_removeElements" === _i36 ? -_n22 : _n22);
          }
        } catch (err) {
          _iterator21.e(err);
        } finally {
          _iterator21.f();
        }
      }
    }, {
      key: "_getUniformDataChanges",
      value: function _getUniformDataChanges() {
        var t = this._dataChanges;
        if (!t || !t.length) return;
        this._dataChanges = [];
        var e = this.data.datasets.length,
          i = function i(e) {
            return new Set(t.filter(function (t) {
              return t[0] === e;
            }).map(function (t, e) {
              return e + "," + t.splice(1).join(",");
            }));
          },
          s = i(0);
        for (var _t44 = 1; _t44 < e; _t44++) if (!gt(s, i(_t44))) return;
        return Array.from(s).map(function (t) {
          return t.split(",");
        }).map(function (t) {
          return {
            method: t[1],
            start: +t[2],
            count: +t[3]
          };
        });
      }
    }, {
      key: "_updateLayout",
      value: function _updateLayout(t) {
        var _this13 = this;
        if (!1 === this.notifyPlugins("beforeLayout", {
          cancelable: !0
        })) return;
        Xi.update(this, this.width, this.height, t);
        var e = this.chartArea,
          i = e.width <= 0 || e.height <= 0;
        this._layers = [], et(this.boxes, function (t) {
          var _this13$_layers;
          i && "chartArea" === t.position || (t.configure && t.configure(), (_this13$_layers = _this13._layers).push.apply(_this13$_layers, _toConsumableArray(t._layers())));
        }, this), this._layers.forEach(function (t, e) {
          t._idx = e;
        }), this.notifyPlugins("afterLayout");
      }
    }, {
      key: "_updateDatasets",
      value: function _updateDatasets(t) {
        if (!1 !== this.notifyPlugins("beforeDatasetsUpdate", {
          mode: t,
          cancelable: !0
        })) {
          for (var _t45 = 0, _e41 = this.data.datasets.length; _t45 < _e41; ++_t45) this.getDatasetMeta(_t45).controller.configure();
          for (var _e42 = 0, _i37 = this.data.datasets.length; _e42 < _i37; ++_e42) this._updateDataset(_e42, ft(t) ? t({
            datasetIndex: _e42
          }) : t);
          this.notifyPlugins("afterDatasetsUpdate", {
            mode: t
          });
        }
      }
    }, {
      key: "_updateDataset",
      value: function _updateDataset(t, e) {
        var i = this.getDatasetMeta(t),
          s = {
            meta: i,
            index: t,
            mode: e,
            cancelable: !0
          };
        !1 !== this.notifyPlugins("beforeDatasetUpdate", s) && (i.controller._update(e), s.cancelable = !1, this.notifyPlugins("afterDatasetUpdate", s));
      }
    }, {
      key: "render",
      value: function render() {
        !1 !== this.notifyPlugins("beforeRender", {
          cancelable: !0
        }) && (a.has(this) ? this.attached && !a.running(this) && a.start(this) : (this.draw(), rn({
          chart: this
        })));
      }
    }, {
      key: "draw",
      value: function draw() {
        var t;
        if (this._resizeBeforeDraw) {
          var _this$_resizeBeforeDr = this._resizeBeforeDraw,
            _t46 = _this$_resizeBeforeDr.width,
            _e43 = _this$_resizeBeforeDr.height;
          this._resize(_t46, _e43), this._resizeBeforeDraw = null;
        }
        if (this.clear(), this.width <= 0 || this.height <= 0) return;
        if (!1 === this.notifyPlugins("beforeDraw", {
          cancelable: !0
        })) return;
        var e = this._layers;
        for (t = 0; t < e.length && e[t].z <= 0; ++t) e[t].draw(this.chartArea);
        for (this._drawDatasets(); t < e.length; ++t) e[t].draw(this.chartArea);
        this.notifyPlugins("afterDraw");
      }
    }, {
      key: "_getSortedDatasetMetas",
      value: function _getSortedDatasetMetas(t) {
        var e = this._sortedMetasets,
          i = [];
        var s, n;
        for (s = 0, n = e.length; s < n; ++s) {
          var _n23 = e[s];
          t && !_n23.visible || i.push(_n23);
        }
        return i;
      }
    }, {
      key: "getSortedVisibleDatasetMetas",
      value: function getSortedVisibleDatasetMetas() {
        return this._getSortedDatasetMetas(!0);
      }
    }, {
      key: "_drawDatasets",
      value: function _drawDatasets() {
        if (!1 === this.notifyPlugins("beforeDatasetsDraw", {
          cancelable: !0
        })) return;
        var t = this.getSortedVisibleDatasetMetas();
        for (var _e44 = t.length - 1; _e44 >= 0; --_e44) this._drawDataset(t[_e44]);
        this.notifyPlugins("afterDatasetsDraw");
      }
    }, {
      key: "_drawDataset",
      value: function _drawDataset(t) {
        var e = this.ctx,
          i = t._clip,
          s = !i.disabled,
          n = this.chartArea,
          o = {
            meta: t,
            index: t.index,
            cancelable: !0
          };
        !1 !== this.notifyPlugins("beforeDatasetDraw", o) && (s && we(e, {
          left: !1 === i.left ? 0 : n.left - i.left,
          right: !1 === i.right ? this.width : n.right + i.right,
          top: !1 === i.top ? 0 : n.top - i.top,
          bottom: !1 === i.bottom ? this.height : n.bottom + i.bottom
        }), t.controller.draw(), s && Me(e), o.cancelable = !1, this.notifyPlugins("afterDatasetDraw", o));
      }
    }, {
      key: "isPointInArea",
      value: function isPointInArea(t) {
        return ve(t, this.chartArea, this._minPadding);
      }
    }, {
      key: "getElementsAtEventForMode",
      value: function getElementsAtEventForMode(t, e, i, s) {
        var n = Ei.modes[e];
        return "function" == typeof n ? n(this, t, i, s) : [];
      }
    }, {
      key: "getDatasetMeta",
      value: function getDatasetMeta(t) {
        var e = this.data.datasets[t],
          i = this._metasets;
        var s = i.filter(function (t) {
          return t && t._dataset === e;
        }).pop();
        return s || (s = {
          type: null,
          data: [],
          dataset: null,
          controller: null,
          hidden: null,
          xAxisID: null,
          yAxisID: null,
          order: e && e.order || 0,
          index: t,
          _dataset: e,
          _parsed: [],
          _sorted: !1
        }, i.push(s)), s;
      }
    }, {
      key: "getContext",
      value: function getContext() {
        return this.$context || (this.$context = pi(null, {
          chart: this,
          type: "chart"
        }));
      }
    }, {
      key: "getVisibleDatasetCount",
      value: function getVisibleDatasetCount() {
        return this.getSortedVisibleDatasetMetas().length;
      }
    }, {
      key: "isDatasetVisible",
      value: function isDatasetVisible(t) {
        var e = this.data.datasets[t];
        if (!e) return !1;
        var i = this.getDatasetMeta(t);
        return "boolean" == typeof i.hidden ? !i.hidden : !e.hidden;
      }
    }, {
      key: "setDatasetVisibility",
      value: function setDatasetVisibility(t, e) {
        this.getDatasetMeta(t).hidden = !e;
      }
    }, {
      key: "toggleDataVisibility",
      value: function toggleDataVisibility(t) {
        this._hiddenIndices[t] = !this._hiddenIndices[t];
      }
    }, {
      key: "getDataVisibility",
      value: function getDataVisibility(t) {
        return !this._hiddenIndices[t];
      }
    }, {
      key: "_updateVisibility",
      value: function _updateVisibility(t, e, i) {
        var s = i ? "show" : "hide",
          n = this.getDatasetMeta(t),
          o = n.controller._resolveAnimations(void 0, s);
        ut(e) ? (n.data[e].hidden = !i, this.update()) : (this.setDatasetVisibility(t, i), o.update(n, {
          visible: i
        }), this.update(function (e) {
          return e.datasetIndex === t ? s : void 0;
        }));
      }
    }, {
      key: "hide",
      value: function hide(t, e) {
        this._updateVisibility(t, e, !1);
      }
    }, {
      key: "show",
      value: function show(t, e) {
        this._updateVisibility(t, e, !0);
      }
    }, {
      key: "_destroyDatasetMeta",
      value: function _destroyDatasetMeta(t) {
        var e = this._metasets[t];
        e && e.controller && e.controller._destroy(), delete this._metasets[t];
      }
    }, {
      key: "_stop",
      value: function _stop() {
        var t, e;
        for (this.stop(), a.remove(this), t = 0, e = this.data.datasets.length; t < e; ++t) this._destroyDatasetMeta(t);
      }
    }, {
      key: "destroy",
      value: function destroy() {
        this.notifyPlugins("beforeDestroy");
        var t = this.canvas,
          e = this.ctx;
        this._stop(), this.config.clearCache(), t && (this.unbindEvents(), _e(t, e), this.platform.releaseContext(e), this.canvas = null, this.ctx = null), this.notifyPlugins("destroy"), delete cn[this.id], this.notifyPlugins("afterDestroy");
      }
    }, {
      key: "toBase64Image",
      value: function toBase64Image() {
        var _this$canvas;
        return (_this$canvas = this.canvas).toDataURL.apply(_this$canvas, arguments);
      }
    }, {
      key: "bindEvents",
      value: function bindEvents() {
        this.bindUserEvents(), this.options.responsive ? this.bindResponsiveEvents() : this.attached = !0;
      }
    }, {
      key: "bindUserEvents",
      value: function bindUserEvents() {
        var _this14 = this;
        var t = this._listeners,
          e = this.platform,
          i = function i(_i38, s) {
            e.addEventListener(_this14, _i38, s), t[_i38] = s;
          },
          s = function s(t, e, i) {
            t.offsetX = e, t.offsetY = i, _this14._eventHandler(t);
          };
        et(this.options.events, function (t) {
          return i(t, s);
        });
      }
    }, {
      key: "bindResponsiveEvents",
      value: function bindResponsiveEvents() {
        var _this15 = this;
        this._responsiveListeners || (this._responsiveListeners = {});
        var t = this._responsiveListeners,
          e = this.platform,
          i = function i(_i39, s) {
            e.addEventListener(_this15, _i39, s), t[_i39] = s;
          },
          s = function s(i, _s33) {
            t[i] && (e.removeEventListener(_this15, i, _s33), delete t[i]);
          },
          n = function n(t, e) {
            _this15.canvas && _this15.resize(t, e);
          };
        var o;
        var a = function a() {
          s("attach", a), _this15.attached = !0, _this15.resize(), i("resize", n), i("detach", o);
        };
        o = function o() {
          _this15.attached = !1, s("resize", n), _this15._stop(), _this15._resize(0, 0), i("attach", a);
        }, e.isAttached(this.canvas) ? a() : o();
      }
    }, {
      key: "unbindEvents",
      value: function unbindEvents() {
        var _this16 = this;
        et(this._listeners, function (t, e) {
          _this16.platform.removeEventListener(_this16, e, t);
        }), this._listeners = {}, et(this._responsiveListeners, function (t, e) {
          _this16.platform.removeEventListener(_this16, e, t);
        }), this._responsiveListeners = void 0;
      }
    }, {
      key: "updateHoverStyle",
      value: function updateHoverStyle(t, e, i) {
        var s = i ? "set" : "remove";
        var n, o, a, r;
        for ("dataset" === e && (n = this.getDatasetMeta(t[0].datasetIndex), n.controller["_" + s + "DatasetHoverStyle"]()), a = 0, r = t.length; a < r; ++a) {
          o = t[a];
          var _e45 = o && this.getDatasetMeta(o.datasetIndex).controller;
          _e45 && _e45[s + "HoverStyle"](o.element, o.datasetIndex, o.index);
        }
      }
    }, {
      key: "getActiveElements",
      value: function getActiveElements() {
        return this._active || [];
      }
    }, {
      key: "setActiveElements",
      value: function setActiveElements(t) {
        var _this17 = this;
        var e = this._active || [],
          i = t.map(function (_ref7) {
            var t = _ref7.datasetIndex,
              e = _ref7.index;
            var i = _this17.getDatasetMeta(t);
            if (!i) throw new Error("No dataset found at index " + t);
            return {
              datasetIndex: t,
              element: i.data[e],
              index: e
            };
          });
        !it(i, e) && (this._active = i, this._lastEvent = null, this._updateHoverStyles(i, e));
      }
    }, {
      key: "notifyPlugins",
      value: function notifyPlugins(t, e, i) {
        return this._plugins.notify(this, t, e, i);
      }
    }, {
      key: "_updateHoverStyles",
      value: function _updateHoverStyles(t, e, i) {
        var s = this.options.hover,
          n = function n(t, e) {
            return t.filter(function (t) {
              return !e.some(function (e) {
                return t.datasetIndex === e.datasetIndex && t.index === e.index;
              });
            });
          },
          o = n(e, t),
          a = i ? t : n(t, e);
        o.length && this.updateHoverStyle(o, s.mode, !1), a.length && s.mode && this.updateHoverStyle(a, s.mode, !0);
      }
    }, {
      key: "_eventHandler",
      value: function _eventHandler(t, e) {
        var _this18 = this;
        var i = {
            event: t,
            replay: e,
            cancelable: !0,
            inChartArea: this.isPointInArea(t)
          },
          s = function s(e) {
            return (e.options.events || _this18.options.events).includes(t["native"].type);
          };
        if (!1 === this.notifyPlugins("beforeEvent", i, s)) return;
        var n = this._handleEvent(t, e, i.inChartArea);
        return i.cancelable = !1, this.notifyPlugins("afterEvent", i, s), (n || i.changed) && this.render(), this;
      }
    }, {
      key: "_handleEvent",
      value: function _handleEvent(t, e, i) {
        var _this$_active = this._active,
          s = _this$_active === void 0 ? [] : _this$_active,
          n = this.options,
          o = e,
          a = this._getActiveElements(t, s, i, o),
          r = pt(t),
          l = function (t, e, i, s) {
            return i && "mouseout" !== t.type ? s ? e : t : null;
          }(t, this._lastEvent, i, r);
        i && (this._lastEvent = null, tt(n.onHover, [t, a, this], this), r && tt(n.onClick, [t, a, this], this));
        var h = !it(a, s);
        return (h || e) && (this._active = a, this._updateHoverStyles(a, s, e)), this._lastEvent = l, h;
      }
    }, {
      key: "_getActiveElements",
      value: function _getActiveElements(t, e, i, s) {
        if ("mouseout" === t.type) return [];
        if (!i) return e;
        var n = this.options.hover;
        return this.getElementsAtEventForMode(t, n.mode, n, s);
      }
    }]);
    return fn;
  }();
  var gn = function gn() {
      return et(fn.instances, function (t) {
        return t._plugins.invalidate();
      });
    },
    pn = !0;
  function mn() {
    throw new Error("This method is not implemented: Check that a complete date adapter is provided.");
  }
  Object.defineProperties(fn, {
    defaults: {
      enumerable: pn,
      value: yt
    },
    instances: {
      enumerable: pn,
      value: cn
    },
    overrides: {
      enumerable: pn,
      value: mt
    },
    registry: {
      enumerable: pn,
      value: Hs
    },
    version: {
      enumerable: pn,
      value: "3.8.0"
    },
    getChart: {
      enumerable: pn,
      value: dn
    },
    register: {
      enumerable: pn,
      value: function value() {
        Hs.add.apply(Hs, arguments), gn();
      }
    },
    unregister: {
      enumerable: pn,
      value: function value() {
        Hs.remove.apply(Hs, arguments), gn();
      }
    }
  });
  var bn = /*#__PURE__*/function () {
    function bn(t) {
      _classCallCheck(this, bn);
      this.options = t || {};
    }
    _createClass(bn, [{
      key: "formats",
      value: function formats() {
        return mn();
      }
    }, {
      key: "parse",
      value: function parse(t, e) {
        return mn();
      }
    }, {
      key: "format",
      value: function format(t, e) {
        return mn();
      }
    }, {
      key: "add",
      value: function add(t, e, i) {
        return mn();
      }
    }, {
      key: "diff",
      value: function diff(t, e, i) {
        return mn();
      }
    }, {
      key: "startOf",
      value: function startOf(t, e, i) {
        return mn();
      }
    }, {
      key: "endOf",
      value: function endOf(t, e) {
        return mn();
      }
    }]);
    return bn;
  }();
  bn.override = function (t) {
    Object.assign(bn.prototype, t);
  };
  var xn = {
    _date: bn
  };
  function _n(t) {
    var e = t.iScale,
      i = function (t, e) {
        if (!t._cache.$bar) {
          var _i40 = t.getMatchingVisibleMetas(e);
          var _s34 = [];
          for (var _e46 = 0, _n24 = _i40.length; _e46 < _n24; _e46++) _s34 = _s34.concat(_i40[_e46].controller.getAllParsedValues(t));
          t._cache.$bar = Ct(_s34.sort(function (t, e) {
            return t - e;
          }));
        }
        return t._cache.$bar;
      }(e, t.type);
    var s,
      n,
      o,
      a,
      r = e._length;
    var l = function l() {
      32767 !== o && -32768 !== o && (ut(a) && (r = Math.min(r, Math.abs(o - a) || r)), a = o);
    };
    for (s = 0, n = i.length; s < n; ++s) o = e.getPixelForValue(i[s]), l();
    for (a = void 0, s = 0, n = e.ticks.length; s < n; ++s) o = e.getPixelForTick(s), l();
    return r;
  }
  function yn(t, e, i, s) {
    return X(t) ? function (t, e, i, s) {
      var n = i.parse(t[0], s),
        o = i.parse(t[1], s),
        a = Math.min(n, o),
        r = Math.max(n, o);
      var l = a,
        h = r;
      Math.abs(a) > Math.abs(r) && (l = r, h = a), e[i.axis] = h, e._custom = {
        barStart: l,
        barEnd: h,
        start: n,
        end: o,
        min: a,
        max: r
      };
    }(t, e, i, s) : e[i.axis] = i.parse(t, s), e;
  }
  function vn(t, e, i, s) {
    var n = t.iScale,
      o = t.vScale,
      a = n.getLabels(),
      r = n === o,
      l = [];
    var h, c, d, u;
    for (h = i, c = i + s; h < c; ++h) u = e[h], d = {}, d[n.axis] = r || n.parse(a[h], h), l.push(yn(u, d, o, h));
    return l;
  }
  function wn(t) {
    return t && void 0 !== t.barStart && void 0 !== t.barEnd;
  }
  function Mn(t, e, i, s) {
    var n = e.borderSkipped;
    var o = {};
    if (!n) return void (t.borderSkipped = o);
    var _ref8 = function (t) {
        var e, i, s, n, o;
        return t.horizontal ? (e = t.base > t.x, i = "left", s = "right") : (e = t.base < t.y, i = "bottom", s = "top"), e ? (n = "end", o = "start") : (n = "start", o = "end"), {
          start: i,
          end: s,
          reverse: e,
          top: n,
          bottom: o
        };
      }(t),
      a = _ref8.start,
      r = _ref8.end,
      l = _ref8.reverse,
      h = _ref8.top,
      c = _ref8.bottom;
    "middle" === n && i && (t.enableBorderRadius = !0, (i._top || 0) === s ? n = h : (i._bottom || 0) === s ? n = c : (o[kn(c, a, r, l)] = !0, n = h)), o[kn(n, a, r, l)] = !0, t.borderSkipped = o;
  }
  function kn(t, e, i, s) {
    var n, o, a;
    return s ? (a = i, t = Sn(t = (n = t) === (o = e) ? a : n === a ? o : n, i, e)) : t = Sn(t, e, i), t;
  }
  function Sn(t, e, i) {
    return "start" === t ? e : "end" === t ? i : t;
  }
  function Pn(t, _ref9, i) {
    var e = _ref9.inflateAmount;
    t.inflateAmount = "auto" === e ? 1 === i ? .33 : 0 : e;
  }
  var Dn = /*#__PURE__*/function (_Cs) {
    _inherits(Dn, _Cs);
    var _super4 = _createSuper(Dn);
    function Dn() {
      _classCallCheck(this, Dn);
      return _super4.apply(this, arguments);
    }
    _createClass(Dn, [{
      key: "parsePrimitiveData",
      value: function parsePrimitiveData(t, e, i, s) {
        return vn(t, e, i, s);
      }
    }, {
      key: "parseArrayData",
      value: function parseArrayData(t, e, i, s) {
        return vn(t, e, i, s);
      }
    }, {
      key: "parseObjectData",
      value: function parseObjectData(t, e, i, s) {
        var n = t.iScale,
          o = t.vScale,
          _this$_parsing2 = this._parsing,
          _this$_parsing2$xAxis = _this$_parsing2.xAxisKey,
          a = _this$_parsing2$xAxis === void 0 ? "x" : _this$_parsing2$xAxis,
          _this$_parsing2$yAxis = _this$_parsing2.yAxisKey,
          r = _this$_parsing2$yAxis === void 0 ? "y" : _this$_parsing2$yAxis,
          l = "x" === n.axis ? a : r,
          h = "x" === o.axis ? a : r,
          c = [];
        var d, u, f, g;
        for (d = i, u = i + s; d < u; ++d) g = e[d], f = {}, f[n.axis] = n.parse(ct(g, l), d), c.push(yn(ct(g, h), f, o, d));
        return c;
      }
    }, {
      key: "updateRangeFromParsed",
      value: function updateRangeFromParsed(t, e, i, s) {
        _get2(_getPrototypeOf(Dn.prototype), "updateRangeFromParsed", this).call(this, t, e, i, s);
        var n = i._custom;
        n && e === this._cachedMeta.vScale && (t.min = Math.min(t.min, n.min), t.max = Math.max(t.max, n.max));
      }
    }, {
      key: "getMaxOverflow",
      value: function getMaxOverflow() {
        return 0;
      }
    }, {
      key: "getLabelAndValue",
      value: function getLabelAndValue(t) {
        var e = this._cachedMeta,
          i = e.iScale,
          s = e.vScale,
          n = this.getParsed(t),
          o = n._custom,
          a = wn(o) ? "[" + o.start + ", " + o.end + "]" : "" + s.getLabelForValue(n[s.axis]);
        return {
          label: "" + i.getLabelForValue(n[i.axis]),
          value: a
        };
      }
    }, {
      key: "initialize",
      value: function initialize() {
        this.enableOptionSharing = !0, _get2(_getPrototypeOf(Dn.prototype), "initialize", this).call(this);
        this._cachedMeta.stack = this.getDataset().stack;
      }
    }, {
      key: "update",
      value: function update(t) {
        var e = this._cachedMeta;
        this.updateElements(e.data, 0, e.data.length, t);
      }
    }, {
      key: "updateElements",
      value: function updateElements(t, e, i, s) {
        var n = "reset" === s,
          o = this.index,
          a = this._cachedMeta.vScale,
          r = a.getBasePixel(),
          l = a.isHorizontal(),
          h = this._getRuler(),
          c = this.resolveDataElementOptions(e, s),
          d = this.getSharedOptions(c),
          u = this.includeOptions(s, d);
        this.updateSharedOptions(d, s, c);
        for (var _c7 = e; _c7 < e + i; _c7++) {
          var _e47 = this.getParsed(_c7),
            _i41 = n || U(_e47[a.axis]) ? {
              base: r,
              head: r
            } : this._calculateBarValuePixels(_c7),
            _f2 = this._calculateBarIndexPixels(_c7, h),
            _g = (_e47._stacks || {})[a.axis],
            _p = {
              horizontal: l,
              base: _i41.base,
              enableBorderRadius: !_g || wn(_e47._custom) || o === _g._top || o === _g._bottom,
              x: l ? _i41.head : _f2.center,
              y: l ? _f2.center : _i41.head,
              height: l ? _f2.size : Math.abs(_i41.size),
              width: l ? Math.abs(_i41.size) : _f2.size
            };
          u && (_p.options = d || this.resolveDataElementOptions(_c7, t[_c7].active ? "active" : s));
          var _m = _p.options || t[_c7].options;
          Mn(_p, _m, _g, o), Pn(_p, _m, h.ratio), this.updateElement(t[_c7], _c7, _p, s);
        }
      }
    }, {
      key: "_getStacks",
      value: function _getStacks(t, e) {
        var i = this._cachedMeta.iScale,
          s = i.getMatchingVisibleMetas(this._type),
          n = i.options.stacked,
          o = s.length,
          a = [];
        var r, l;
        for (r = 0; r < o; ++r) if (l = s[r], l.controller.options.grouped) {
          if (void 0 !== e) {
            var _t47 = l.controller.getParsed(e)[l.controller._cachedMeta.vScale.axis];
            if (U(_t47) || isNaN(_t47)) continue;
          }
          if ((!1 === n || -1 === a.indexOf(l.stack) || void 0 === n && void 0 === l.stack) && a.push(l.stack), l.index === t) break;
        }
        return a.length || a.push(void 0), a;
      }
    }, {
      key: "_getStackCount",
      value: function _getStackCount(t) {
        return this._getStacks(void 0, t).length;
      }
    }, {
      key: "_getStackIndex",
      value: function _getStackIndex(t, e, i) {
        var s = this._getStacks(t, i),
          n = void 0 !== e ? s.indexOf(e) : -1;
        return -1 === n ? s.length - 1 : n;
      }
    }, {
      key: "_getRuler",
      value: function _getRuler() {
        var t = this.options,
          e = this._cachedMeta,
          i = e.iScale,
          s = [];
        var n, o;
        for (n = 0, o = e.data.length; n < o; ++n) s.push(i.getPixelForValue(this.getParsed(n)[i.axis], n));
        var a = t.barThickness;
        return {
          min: a || _n(e),
          pixels: s,
          start: i._startPixel,
          end: i._endPixel,
          stackCount: this._getStackCount(),
          scale: i,
          grouped: t.grouped,
          ratio: a ? 1 : t.categoryPercentage * t.barPercentage
        };
      }
    }, {
      key: "_calculateBarValuePixels",
      value: function _calculateBarValuePixels(t) {
        var _this$_cachedMeta = this._cachedMeta,
          e = _this$_cachedMeta.vScale,
          i = _this$_cachedMeta._stacked,
          _this$options9 = this.options,
          s = _this$options9.base,
          n = _this$options9.minBarLength,
          o = s || 0,
          a = this.getParsed(t),
          r = a._custom,
          l = wn(r);
        var h,
          c,
          d = a[e.axis],
          u = 0,
          f = i ? this.applyStack(e, a, i) : d;
        f !== d && (u = f - d, f = d), l && (d = r.barStart, f = r.barEnd - r.barStart, 0 !== d && Bt(d) !== Bt(r.barEnd) && (u = 0), u += d);
        var g = U(s) || l ? u : s;
        var p = e.getPixelForValue(g);
        if (h = this.chart.getDataVisibility(t) ? e.getPixelForValue(u + f) : p, c = h - p, Math.abs(c) < n) {
          c = function (t, e, i) {
            return 0 !== t ? Bt(t) : (e.isHorizontal() ? 1 : -1) * (e.min >= i ? 1 : -1);
          }(c, e, o) * n, d === o && (p -= c / 2);
          var _t48 = e.getPixelForDecimal(0),
            _i42 = e.getPixelForDecimal(1),
            _s35 = Math.min(_t48, _i42),
            _a15 = Math.max(_t48, _i42);
          p = Math.max(Math.min(p, _a15), _s35), h = p + c;
        }
        if (p === e.getPixelForValue(o)) {
          var _t49 = Bt(c) * e.getLineWidthForValue(o) / 2;
          p += _t49, c -= _t49;
        }
        return {
          size: c,
          base: p,
          head: h,
          center: h + c / 2
        };
      }
    }, {
      key: "_calculateBarIndexPixels",
      value: function _calculateBarIndexPixels(t, e) {
        var i = e.scale,
          s = this.options,
          n = s.skipNull,
          o = Z(s.maxBarThickness, 1 / 0);
        var a, r;
        if (e.grouped) {
          var _i43 = n ? this._getStackCount(t) : e.stackCount,
            _l13 = "flex" === s.barThickness ? function (t, e, i, s) {
              var n = e.pixels,
                o = n[t];
              var a = t > 0 ? n[t - 1] : null,
                r = t < n.length - 1 ? n[t + 1] : null;
              var l = i.categoryPercentage;
              null === a && (a = o - (null === r ? e.end - e.start : r - o)), null === r && (r = o + o - a);
              var h = o - (o - Math.min(a, r)) / 2 * l;
              return {
                chunk: Math.abs(r - a) / 2 * l / s,
                ratio: i.barPercentage,
                start: h
              };
            }(t, e, s, _i43) : function (t, e, i, s) {
              var n = i.barThickness;
              var o, a;
              return U(n) ? (o = e.min * i.categoryPercentage, a = i.barPercentage) : (o = n * s, a = 1), {
                chunk: o / s,
                ratio: a,
                start: e.pixels[t] - o / 2
              };
            }(t, e, s, _i43),
            _h11 = this._getStackIndex(this.index, this._cachedMeta.stack, n ? t : void 0);
          a = _l13.start + _l13.chunk * _h11 + _l13.chunk / 2, r = Math.min(o, _l13.chunk * _l13.ratio);
        } else a = i.getPixelForValue(this.getParsed(t)[i.axis], t), r = Math.min(o, e.min * e.ratio);
        return {
          base: a - r / 2,
          head: a + r / 2,
          center: a,
          size: r
        };
      }
    }, {
      key: "draw",
      value: function draw() {
        var t = this._cachedMeta,
          e = t.vScale,
          i = t.data,
          s = i.length;
        var n = 0;
        for (; n < s; ++n) null !== this.getParsed(n)[e.axis] && i[n].draw(this._ctx);
      }
    }]);
    return Dn;
  }(Cs);
  Dn.id = "bar", Dn.defaults = {
    datasetElementType: !1,
    dataElementType: "bar",
    categoryPercentage: .8,
    barPercentage: .9,
    grouped: !0,
    animations: {
      numbers: {
        type: "number",
        properties: ["x", "y", "base", "width", "height"]
      }
    }
  }, Dn.overrides = {
    scales: {
      _index_: {
        type: "category",
        offset: !0,
        grid: {
          offset: !0
        }
      },
      _value_: {
        type: "linear",
        beginAtZero: !0
      }
    }
  };
  var Cn = /*#__PURE__*/function (_Cs2) {
    _inherits(Cn, _Cs2);
    var _super5 = _createSuper(Cn);
    function Cn() {
      _classCallCheck(this, Cn);
      return _super5.apply(this, arguments);
    }
    _createClass(Cn, [{
      key: "initialize",
      value: function initialize() {
        this.enableOptionSharing = !0, _get2(_getPrototypeOf(Cn.prototype), "initialize", this).call(this);
      }
    }, {
      key: "parsePrimitiveData",
      value: function parsePrimitiveData(t, e, i, s) {
        var n = _get2(_getPrototypeOf(Cn.prototype), "parsePrimitiveData", this).call(this, t, e, i, s);
        for (var _t50 = 0; _t50 < n.length; _t50++) n[_t50]._custom = this.resolveDataElementOptions(_t50 + i).radius;
        return n;
      }
    }, {
      key: "parseArrayData",
      value: function parseArrayData(t, e, i, s) {
        var n = _get2(_getPrototypeOf(Cn.prototype), "parseArrayData", this).call(this, t, e, i, s);
        for (var _t51 = 0; _t51 < n.length; _t51++) {
          var _s36 = e[i + _t51];
          n[_t51]._custom = Z(_s36[2], this.resolveDataElementOptions(_t51 + i).radius);
        }
        return n;
      }
    }, {
      key: "parseObjectData",
      value: function parseObjectData(t, e, i, s) {
        var n = _get2(_getPrototypeOf(Cn.prototype), "parseObjectData", this).call(this, t, e, i, s);
        for (var _t52 = 0; _t52 < n.length; _t52++) {
          var _s37 = e[i + _t52];
          n[_t52]._custom = Z(_s37 && _s37.r && +_s37.r, this.resolveDataElementOptions(_t52 + i).radius);
        }
        return n;
      }
    }, {
      key: "getMaxOverflow",
      value: function getMaxOverflow() {
        var t = this._cachedMeta.data;
        var e = 0;
        for (var _i44 = t.length - 1; _i44 >= 0; --_i44) e = Math.max(e, t[_i44].size(this.resolveDataElementOptions(_i44)) / 2);
        return e > 0 && e;
      }
    }, {
      key: "getLabelAndValue",
      value: function getLabelAndValue(t) {
        var e = this._cachedMeta,
          i = e.xScale,
          s = e.yScale,
          n = this.getParsed(t),
          o = i.getLabelForValue(n.x),
          a = s.getLabelForValue(n.y),
          r = n._custom;
        return {
          label: e.label,
          value: "(" + o + ", " + a + (r ? ", " + r : "") + ")"
        };
      }
    }, {
      key: "update",
      value: function update(t) {
        var e = this._cachedMeta.data;
        this.updateElements(e, 0, e.length, t);
      }
    }, {
      key: "updateElements",
      value: function updateElements(t, e, i, s) {
        var n = "reset" === s,
          _this$_cachedMeta2 = this._cachedMeta,
          o = _this$_cachedMeta2.iScale,
          a = _this$_cachedMeta2.vScale,
          r = this.resolveDataElementOptions(e, s),
          l = this.getSharedOptions(r),
          h = this.includeOptions(s, l),
          c = o.axis,
          d = a.axis;
        for (var _r11 = e; _r11 < e + i; _r11++) {
          var _e48 = t[_r11],
            _i45 = !n && this.getParsed(_r11),
            _l14 = {},
            _u3 = _l14[c] = n ? o.getPixelForDecimal(.5) : o.getPixelForValue(_i45[c]),
            _f3 = _l14[d] = n ? a.getBasePixel() : a.getPixelForValue(_i45[d]);
          _l14.skip = isNaN(_u3) || isNaN(_f3), h && (_l14.options = this.resolveDataElementOptions(_r11, _e48.active ? "active" : s), n && (_l14.options.radius = 0)), this.updateElement(_e48, _r11, _l14, s);
        }
        this.updateSharedOptions(l, s, r);
      }
    }, {
      key: "resolveDataElementOptions",
      value: function resolveDataElementOptions(t, e) {
        var i = this.getParsed(t);
        var s = _get2(_getPrototypeOf(Cn.prototype), "resolveDataElementOptions", this).call(this, t, e);
        s.$shared && (s = Object.assign({}, s, {
          $shared: !1
        }));
        var n = s.radius;
        return "active" !== e && (s.radius = 0), s.radius += Z(i && i._custom, n), s;
      }
    }]);
    return Cn;
  }(Cs);
  Cn.id = "bubble", Cn.defaults = {
    datasetElementType: !1,
    dataElementType: "point",
    animations: {
      numbers: {
        type: "number",
        properties: ["x", "y", "borderWidth", "radius"]
      }
    }
  }, Cn.overrides = {
    scales: {
      x: {
        type: "linear"
      },
      y: {
        type: "linear"
      }
    },
    plugins: {
      tooltip: {
        callbacks: {
          title: function title() {
            return "";
          }
        }
      }
    }
  };
  var On = /*#__PURE__*/function (_Cs3) {
    _inherits(On, _Cs3);
    var _super6 = _createSuper(On);
    function On(t, e) {
      var _this19;
      _classCallCheck(this, On);
      _this19 = _super6.call(this, t, e), _this19.enableOptionSharing = !0, _this19.innerRadius = void 0, _this19.outerRadius = void 0, _this19.offsetX = void 0, _this19.offsetY = void 0;
      return _this19;
    }
    _createClass(On, [{
      key: "linkScales",
      value: function linkScales() {}
    }, {
      key: "parse",
      value: function parse(t, e) {
        var i = this.getDataset().data,
          s = this._cachedMeta;
        if (!1 === this._parsing) s._parsed = i;else {
          var _n25,
            _o26,
            _a16 = function _a16(t) {
              return +i[t];
            };
          if (q(i[t])) {
            var _this$_parsing$key2 = this._parsing.key,
              _t53 = _this$_parsing$key2 === void 0 ? "value" : _this$_parsing$key2;
            _a16 = function _a16(e) {
              return +ct(i[e], _t53);
            };
          }
          for (_n25 = t, _o26 = t + e; _n25 < _o26; ++_n25) s._parsed[_n25] = _a16(_n25);
        }
      }
    }, {
      key: "_getRotation",
      value: function _getRotation() {
        return Yt(this.options.rotation - 90);
      }
    }, {
      key: "_getCircumference",
      value: function _getCircumference() {
        return Yt(this.options.circumference);
      }
    }, {
      key: "_getRotationExtents",
      value: function _getRotationExtents() {
        var t = At,
          e = -At;
        for (var _i46 = 0; _i46 < this.chart.data.datasets.length; ++_i46) if (this.chart.isDatasetVisible(_i46)) {
          var _s38 = this.chart.getDatasetMeta(_i46).controller,
            _n26 = _s38._getRotation(),
            _o27 = _s38._getCircumference();
          t = Math.min(t, _n26), e = Math.max(e, _n26 + _o27);
        }
        return {
          rotation: t,
          circumference: e - t
        };
      }
    }, {
      key: "update",
      value: function update(t) {
        var e = this.chart,
          i = e.chartArea,
          s = this._cachedMeta,
          n = s.data,
          o = this.getMaxBorderWidth() + this.getMaxOffset(n) + this.options.spacing,
          a = Math.max((Math.min(i.width, i.height) - o) / 2, 0),
          r = Math.min(J(this.options.cutout, a), 1),
          l = this._getRingWeight(this.index),
          _this$_getRotationExt = this._getRotationExtents(),
          h = _this$_getRotationExt.circumference,
          c = _this$_getRotationExt.rotation,
          _ref10 = function (t, e, i) {
            var s = 1,
              n = 1,
              o = 0,
              a = 0;
            if (e < At) {
              var _r12 = t,
                _l15 = _r12 + e,
                _h12 = Math.cos(_r12),
                _c8 = Math.sin(_r12),
                _d7 = Math.cos(_l15),
                _u4 = Math.sin(_l15),
                _f4 = function _f4(t, e, s) {
                  return Jt(t, _r12, _l15, !0) ? 1 : Math.max(e, e * i, s, s * i);
                },
                _g2 = function _g2(t, e, s) {
                  return Jt(t, _r12, _l15, !0) ? -1 : Math.min(e, e * i, s, s * i);
                },
                _p2 = _f4(0, _h12, _d7),
                _m2 = _f4(Et, _c8, _u4),
                _b = _g2(Ot, _h12, _d7),
                _x2 = _g2(Ot + Et, _c8, _u4);
              s = (_p2 - _b) / 2, n = (_m2 - _x2) / 2, o = -(_p2 + _b) / 2, a = -(_m2 + _x2) / 2;
            }
            return {
              ratioX: s,
              ratioY: n,
              offsetX: o,
              offsetY: a
            };
          }(c, h, r),
          d = _ref10.ratioX,
          u = _ref10.ratioY,
          f = _ref10.offsetX,
          g = _ref10.offsetY,
          p = (i.width - o) / d,
          m = (i.height - o) / u,
          b = Math.max(Math.min(p, m) / 2, 0),
          x = Q(this.options.radius, b),
          _ = (x - Math.max(x * r, 0)) / this._getVisibleDatasetWeightTotal();
        this.offsetX = f * x, this.offsetY = g * x, s.total = this.calculateTotal(), this.outerRadius = x - _ * this._getRingWeightOffset(this.index), this.innerRadius = Math.max(this.outerRadius - _ * l, 0), this.updateElements(n, 0, n.length, t);
      }
    }, {
      key: "_circumference",
      value: function _circumference(t, e) {
        var i = this.options,
          s = this._cachedMeta,
          n = this._getCircumference();
        return e && i.animation.animateRotate || !this.chart.getDataVisibility(t) || null === s._parsed[t] || s.data[t].hidden ? 0 : this.calculateCircumference(s._parsed[t] * n / At);
      }
    }, {
      key: "updateElements",
      value: function updateElements(t, e, i, s) {
        var n = "reset" === s,
          o = this.chart,
          a = o.chartArea,
          r = o.options.animation,
          l = (a.left + a.right) / 2,
          h = (a.top + a.bottom) / 2,
          c = n && r.animateScale,
          d = c ? 0 : this.innerRadius,
          u = c ? 0 : this.outerRadius,
          f = this.resolveDataElementOptions(e, s),
          g = this.getSharedOptions(f),
          p = this.includeOptions(s, g);
        var m,
          b = this._getRotation();
        for (m = 0; m < e; ++m) b += this._circumference(m, n);
        for (m = e; m < e + i; ++m) {
          var _e49 = this._circumference(m, n),
            _i47 = t[m],
            _o28 = {
              x: l + this.offsetX,
              y: h + this.offsetY,
              startAngle: b,
              endAngle: b + _e49,
              circumference: _e49,
              outerRadius: u,
              innerRadius: d
            };
          p && (_o28.options = g || this.resolveDataElementOptions(m, _i47.active ? "active" : s)), b += _e49, this.updateElement(_i47, m, _o28, s);
        }
        this.updateSharedOptions(g, s, f);
      }
    }, {
      key: "calculateTotal",
      value: function calculateTotal() {
        var t = this._cachedMeta,
          e = t.data;
        var i,
          s = 0;
        for (i = 0; i < e.length; i++) {
          var _n27 = t._parsed[i];
          null === _n27 || isNaN(_n27) || !this.chart.getDataVisibility(i) || e[i].hidden || (s += Math.abs(_n27));
        }
        return s;
      }
    }, {
      key: "calculateCircumference",
      value: function calculateCircumference(t) {
        var e = this._cachedMeta.total;
        return e > 0 && !isNaN(t) ? At * (Math.abs(t) / e) : 0;
      }
    }, {
      key: "getLabelAndValue",
      value: function getLabelAndValue(t) {
        var e = this._cachedMeta,
          i = this.chart,
          s = i.data.labels || [],
          n = ni(e._parsed[t], i.options.locale);
        return {
          label: s[t] || "",
          value: n
        };
      }
    }, {
      key: "getMaxBorderWidth",
      value: function getMaxBorderWidth(t) {
        var e = 0;
        var i = this.chart;
        var s, n, o, a, r;
        if (!t) for (s = 0, n = i.data.datasets.length; s < n; ++s) if (i.isDatasetVisible(s)) {
          o = i.getDatasetMeta(s), t = o.data, a = o.controller;
          break;
        }
        if (!t) return 0;
        for (s = 0, n = t.length; s < n; ++s) r = a.resolveDataElementOptions(s), "inner" !== r.borderAlign && (e = Math.max(e, r.borderWidth || 0, r.hoverBorderWidth || 0));
        return e;
      }
    }, {
      key: "getMaxOffset",
      value: function getMaxOffset(t) {
        var e = 0;
        for (var _i48 = 0, _s39 = t.length; _i48 < _s39; ++_i48) {
          var _t54 = this.resolveDataElementOptions(_i48);
          e = Math.max(e, _t54.offset || 0, _t54.hoverOffset || 0);
        }
        return e;
      }
    }, {
      key: "_getRingWeightOffset",
      value: function _getRingWeightOffset(t) {
        var e = 0;
        for (var _i49 = 0; _i49 < t; ++_i49) this.chart.isDatasetVisible(_i49) && (e += this._getRingWeight(_i49));
        return e;
      }
    }, {
      key: "_getRingWeight",
      value: function _getRingWeight(t) {
        return Math.max(Z(this.chart.data.datasets[t].weight, 1), 0);
      }
    }, {
      key: "_getVisibleDatasetWeightTotal",
      value: function _getVisibleDatasetWeightTotal() {
        return this._getRingWeightOffset(this.chart.data.datasets.length) || 1;
      }
    }]);
    return On;
  }(Cs);
  On.id = "doughnut", On.defaults = {
    datasetElementType: !1,
    dataElementType: "arc",
    animation: {
      animateRotate: !0,
      animateScale: !1
    },
    animations: {
      numbers: {
        type: "number",
        properties: ["circumference", "endAngle", "innerRadius", "outerRadius", "startAngle", "x", "y", "offset", "borderWidth", "spacing"]
      }
    },
    cutout: "50%",
    rotation: 0,
    circumference: 360,
    radius: "100%",
    spacing: 0,
    indexAxis: "r"
  }, On.descriptors = {
    _scriptable: function _scriptable(t) {
      return "spacing" !== t;
    },
    _indexable: function _indexable(t) {
      return "spacing" !== t;
    }
  }, On.overrides = {
    aspectRatio: 1,
    plugins: {
      legend: {
        labels: {
          generateLabels: function generateLabels(t) {
            var e = t.data;
            if (e.labels.length && e.datasets.length) {
              var _i50 = t.legend.options.labels.pointStyle;
              return e.labels.map(function (e, s) {
                var n = t.getDatasetMeta(0).controller.getStyle(s);
                return {
                  text: e,
                  fillStyle: n.backgroundColor,
                  strokeStyle: n.borderColor,
                  lineWidth: n.borderWidth,
                  pointStyle: _i50,
                  hidden: !t.getDataVisibility(s),
                  index: s
                };
              });
            }
            return [];
          }
        },
        onClick: function onClick(t, e, i) {
          i.chart.toggleDataVisibility(e.index), i.chart.update();
        }
      },
      tooltip: {
        callbacks: {
          title: function title() {
            return "";
          },
          label: function label(t) {
            var e = t.label;
            var i = ": " + t.formattedValue;
            return X(e) ? (e = e.slice(), e[0] += i) : e += i, e;
          }
        }
      }
    }
  };
  var An = /*#__PURE__*/function (_Cs4) {
    _inherits(An, _Cs4);
    var _super7 = _createSuper(An);
    function An() {
      _classCallCheck(this, An);
      return _super7.apply(this, arguments);
    }
    _createClass(An, [{
      key: "initialize",
      value: function initialize() {
        this.enableOptionSharing = !0, this.supportsDecimation = !0, _get2(_getPrototypeOf(An.prototype), "initialize", this).call(this);
      }
    }, {
      key: "update",
      value: function update(t) {
        var e = this._cachedMeta,
          i = e.dataset,
          _e$data = e.data,
          s = _e$data === void 0 ? [] : _e$data,
          n = e._dataset,
          o = this.chart._animationsDisabled;
        var _ref11 = function (t, e, i) {
            var s = e.length;
            var n = 0,
              o = s;
            if (t._sorted) {
              var _a17 = t.iScale,
                _r13 = t._parsed,
                _l16 = _a17.axis,
                _a$getUserBounds = _a17.getUserBounds(),
                _h13 = _a$getUserBounds.min,
                _c9 = _a$getUserBounds.max,
                _d8 = _a$getUserBounds.minDefined,
                _u5 = _a$getUserBounds.maxDefined;
              _d8 && (n = Qt(Math.min(wt(_r13, _a17.axis, _h13).lo, i ? s : wt(e, _l16, _a17.getPixelForValue(_h13)).lo), 0, s - 1)), o = _u5 ? Qt(Math.max(wt(_r13, _a17.axis, _c9).hi + 1, i ? 0 : wt(e, _l16, _a17.getPixelForValue(_c9)).hi + 1), n, s) - n : s - n;
            }
            return {
              start: n,
              count: o
            };
          }(e, s, o),
          a = _ref11.start,
          r = _ref11.count;
        this._drawStart = a, this._drawCount = r, function (t) {
          var e = t.xScale,
            i = t.yScale,
            s = t._scaleRanges,
            n = {
              xmin: e.min,
              xmax: e.max,
              ymin: i.min,
              ymax: i.max
            };
          if (!s) return t._scaleRanges = n, !0;
          var o = s.xmin !== e.min || s.xmax !== e.max || s.ymin !== i.min || s.ymax !== i.max;
          return Object.assign(s, n), o;
        }(e) && (a = 0, r = s.length), i._chart = this.chart, i._datasetIndex = this.index, i._decimated = !!n._decimated, i.points = s;
        var l = this.resolveDatasetElementOptions(t);
        this.options.showLine || (l.borderWidth = 0), l.segment = this.options.segment, this.updateElement(i, void 0, {
          animated: !o,
          options: l
        }, t), this.updateElements(s, a, r, t);
      }
    }, {
      key: "updateElements",
      value: function updateElements(t, e, i, s) {
        var n = "reset" === s,
          _this$_cachedMeta3 = this._cachedMeta,
          o = _this$_cachedMeta3.iScale,
          a = _this$_cachedMeta3.vScale,
          r = _this$_cachedMeta3._stacked,
          l = _this$_cachedMeta3._dataset,
          h = this.resolveDataElementOptions(e, s),
          c = this.getSharedOptions(h),
          d = this.includeOptions(s, c),
          u = o.axis,
          f = a.axis,
          _this$options10 = this.options,
          g = _this$options10.spanGaps,
          p = _this$options10.segment,
          m = Wt(g) ? g : Number.POSITIVE_INFINITY,
          b = this.chart._animationsDisabled || n || "none" === s;
        var x = e > 0 && this.getParsed(e - 1);
        for (var _h14 = e; _h14 < e + i; ++_h14) {
          var _e50 = t[_h14],
            _i51 = this.getParsed(_h14),
            _g3 = b ? _e50 : {},
            _2 = U(_i51[f]),
            _y = _g3[u] = o.getPixelForValue(_i51[u], _h14),
            _v = _g3[f] = n || _2 ? a.getBasePixel() : a.getPixelForValue(r ? this.applyStack(a, _i51, r) : _i51[f], _h14);
          _g3.skip = isNaN(_y) || isNaN(_v) || _2, _g3.stop = _h14 > 0 && Math.abs(_i51[u] - x[u]) > m, p && (_g3.parsed = _i51, _g3.raw = l.data[_h14]), d && (_g3.options = c || this.resolveDataElementOptions(_h14, _e50.active ? "active" : s)), b || this.updateElement(_e50, _h14, _g3, s), x = _i51;
        }
        this.updateSharedOptions(c, s, h);
      }
    }, {
      key: "getMaxOverflow",
      value: function getMaxOverflow() {
        var t = this._cachedMeta,
          e = t.dataset,
          i = e.options && e.options.borderWidth || 0,
          s = t.data || [];
        if (!s.length) return i;
        var n = s[0].size(this.resolveDataElementOptions(0)),
          o = s[s.length - 1].size(this.resolveDataElementOptions(s.length - 1));
        return Math.max(i, n, o) / 2;
      }
    }, {
      key: "draw",
      value: function draw() {
        var t = this._cachedMeta;
        t.dataset.updateControlPoints(this.chart.chartArea, t.iScale.axis), _get2(_getPrototypeOf(An.prototype), "draw", this).call(this);
      }
    }]);
    return An;
  }(Cs);
  An.id = "line", An.defaults = {
    datasetElementType: "line",
    dataElementType: "point",
    showLine: !0,
    spanGaps: !1
  }, An.overrides = {
    scales: {
      _index_: {
        type: "category"
      },
      _value_: {
        type: "linear"
      }
    }
  };
  var Tn = /*#__PURE__*/function (_Cs5) {
    _inherits(Tn, _Cs5);
    var _super8 = _createSuper(Tn);
    function Tn(t, e) {
      var _this20;
      _classCallCheck(this, Tn);
      _this20 = _super8.call(this, t, e), _this20.innerRadius = void 0, _this20.outerRadius = void 0;
      return _this20;
    }
    _createClass(Tn, [{
      key: "getLabelAndValue",
      value: function getLabelAndValue(t) {
        var e = this._cachedMeta,
          i = this.chart,
          s = i.data.labels || [],
          n = ni(e._parsed[t].r, i.options.locale);
        return {
          label: s[t] || "",
          value: n
        };
      }
    }, {
      key: "parseObjectData",
      value: function parseObjectData(t, e, i, s) {
        return He.bind(this)(t, e, i, s);
      }
    }, {
      key: "update",
      value: function update(t) {
        var e = this._cachedMeta.data;
        this._updateRadius(), this.updateElements(e, 0, e.length, t);
      }
    }, {
      key: "getMinMax",
      value: function getMinMax() {
        var _this21 = this;
        var t = this._cachedMeta,
          e = {
            min: Number.POSITIVE_INFINITY,
            max: Number.NEGATIVE_INFINITY
          };
        return t.data.forEach(function (t, i) {
          var s = _this21.getParsed(i).r;
          !isNaN(s) && _this21.chart.getDataVisibility(i) && (s < e.min && (e.min = s), s > e.max && (e.max = s));
        }), e;
      }
    }, {
      key: "_updateRadius",
      value: function _updateRadius() {
        var t = this.chart,
          e = t.chartArea,
          i = t.options,
          s = Math.min(e.right - e.left, e.bottom - e.top),
          n = Math.max(s / 2, 0),
          o = (n - Math.max(i.cutoutPercentage ? n / 100 * i.cutoutPercentage : 1, 0)) / t.getVisibleDatasetCount();
        this.outerRadius = n - o * this.index, this.innerRadius = this.outerRadius - o;
      }
    }, {
      key: "updateElements",
      value: function updateElements(t, e, i, s) {
        var n = "reset" === s,
          o = this.chart,
          a = o.options.animation,
          r = this._cachedMeta.rScale,
          l = r.xCenter,
          h = r.yCenter,
          c = r.getIndexAngle(0) - .5 * Ot;
        var d,
          u = c;
        var f = 360 / this.countVisibleElements();
        for (d = 0; d < e; ++d) u += this._computeAngle(d, s, f);
        for (d = e; d < e + i; d++) {
          var _e51 = t[d];
          var _i52 = u,
            _g4 = u + this._computeAngle(d, s, f),
            _p3 = o.getDataVisibility(d) ? r.getDistanceFromCenterForValue(this.getParsed(d).r) : 0;
          u = _g4, n && (a.animateScale && (_p3 = 0), a.animateRotate && (_i52 = _g4 = c));
          var _m3 = {
            x: l,
            y: h,
            innerRadius: 0,
            outerRadius: _p3,
            startAngle: _i52,
            endAngle: _g4,
            options: this.resolveDataElementOptions(d, _e51.active ? "active" : s)
          };
          this.updateElement(_e51, d, _m3, s);
        }
      }
    }, {
      key: "countVisibleElements",
      value: function countVisibleElements() {
        var _this22 = this;
        var t = this._cachedMeta;
        var e = 0;
        return t.data.forEach(function (t, i) {
          !isNaN(_this22.getParsed(i).r) && _this22.chart.getDataVisibility(i) && e++;
        }), e;
      }
    }, {
      key: "_computeAngle",
      value: function _computeAngle(t, e, i) {
        return this.chart.getDataVisibility(t) ? Yt(this.resolveDataElementOptions(t, e).angle || i) : 0;
      }
    }]);
    return Tn;
  }(Cs);
  Tn.id = "polarArea", Tn.defaults = {
    dataElementType: "arc",
    animation: {
      animateRotate: !0,
      animateScale: !0
    },
    animations: {
      numbers: {
        type: "number",
        properties: ["x", "y", "startAngle", "endAngle", "innerRadius", "outerRadius"]
      }
    },
    indexAxis: "r",
    startAngle: 0
  }, Tn.overrides = {
    aspectRatio: 1,
    plugins: {
      legend: {
        labels: {
          generateLabels: function generateLabels(t) {
            var e = t.data;
            if (e.labels.length && e.datasets.length) {
              var _i53 = t.legend.options.labels.pointStyle;
              return e.labels.map(function (e, s) {
                var n = t.getDatasetMeta(0).controller.getStyle(s);
                return {
                  text: e,
                  fillStyle: n.backgroundColor,
                  strokeStyle: n.borderColor,
                  lineWidth: n.borderWidth,
                  pointStyle: _i53,
                  hidden: !t.getDataVisibility(s),
                  index: s
                };
              });
            }
            return [];
          }
        },
        onClick: function onClick(t, e, i) {
          i.chart.toggleDataVisibility(e.index), i.chart.update();
        }
      },
      tooltip: {
        callbacks: {
          title: function title() {
            return "";
          },
          label: function label(t) {
            return t.chart.data.labels[t.dataIndex] + ": " + t.formattedValue;
          }
        }
      }
    },
    scales: {
      r: {
        type: "radialLinear",
        angleLines: {
          display: !1
        },
        beginAtZero: !0,
        grid: {
          circular: !0
        },
        pointLabels: {
          display: !1
        },
        startAngle: 0
      }
    }
  };
  var Ln = /*#__PURE__*/function (_On) {
    _inherits(Ln, _On);
    var _super9 = _createSuper(Ln);
    function Ln() {
      _classCallCheck(this, Ln);
      return _super9.apply(this, arguments);
    }
    return _createClass(Ln);
  }(On);
  Ln.id = "pie", Ln.defaults = {
    cutout: 0,
    rotation: 0,
    circumference: 360,
    radius: "100%"
  };
  var Rn = /*#__PURE__*/function (_Cs6) {
    _inherits(Rn, _Cs6);
    var _super10 = _createSuper(Rn);
    function Rn() {
      _classCallCheck(this, Rn);
      return _super10.apply(this, arguments);
    }
    _createClass(Rn, [{
      key: "getLabelAndValue",
      value: function getLabelAndValue(t) {
        var e = this._cachedMeta.vScale,
          i = this.getParsed(t);
        return {
          label: e.getLabels()[t],
          value: "" + e.getLabelForValue(i[e.axis])
        };
      }
    }, {
      key: "parseObjectData",
      value: function parseObjectData(t, e, i, s) {
        return He.bind(this)(t, e, i, s);
      }
    }, {
      key: "update",
      value: function update(t) {
        var e = this._cachedMeta,
          i = e.dataset,
          s = e.data || [],
          n = e.iScale.getLabels();
        if (i.points = s, "resize" !== t) {
          var _e52 = this.resolveDatasetElementOptions(t);
          this.options.showLine || (_e52.borderWidth = 0);
          var _o29 = {
            _loop: !0,
            _fullLoop: n.length === s.length,
            options: _e52
          };
          this.updateElement(i, void 0, _o29, t);
        }
        this.updateElements(s, 0, s.length, t);
      }
    }, {
      key: "updateElements",
      value: function updateElements(t, e, i, s) {
        var n = this._cachedMeta.rScale,
          o = "reset" === s;
        for (var _a18 = e; _a18 < e + i; _a18++) {
          var _e53 = t[_a18],
            _i54 = this.resolveDataElementOptions(_a18, _e53.active ? "active" : s),
            _r14 = n.getPointPositionForValue(_a18, this.getParsed(_a18).r),
            _l17 = o ? n.xCenter : _r14.x,
            _h15 = o ? n.yCenter : _r14.y,
            _c10 = {
              x: _l17,
              y: _h15,
              angle: _r14.angle,
              skip: isNaN(_l17) || isNaN(_h15),
              options: _i54
            };
          this.updateElement(_e53, _a18, _c10, s);
        }
      }
    }]);
    return Rn;
  }(Cs);
  Rn.id = "radar", Rn.defaults = {
    datasetElementType: "line",
    dataElementType: "point",
    indexAxis: "r",
    showLine: !0,
    elements: {
      line: {
        fill: "start"
      }
    }
  }, Rn.overrides = {
    aspectRatio: 1,
    scales: {
      r: {
        type: "radialLinear"
      }
    }
  };
  var En = /*#__PURE__*/function (_An) {
    _inherits(En, _An);
    var _super11 = _createSuper(En);
    function En() {
      _classCallCheck(this, En);
      return _super11.apply(this, arguments);
    }
    return _createClass(En);
  }(An);
  En.id = "scatter", En.defaults = {
    showLine: !1,
    fill: !1
  }, En.overrides = {
    interaction: {
      mode: "point"
    },
    plugins: {
      tooltip: {
        callbacks: {
          title: function title() {
            return "";
          },
          label: function label(t) {
            return "(" + t.label + ", " + t.formattedValue + ")";
          }
        }
      }
    },
    scales: {
      x: {
        type: "linear"
      },
      y: {
        type: "linear"
      }
    }
  };
  var In = Object.freeze({
    __proto__: null,
    BarController: Dn,
    BubbleController: Cn,
    DoughnutController: On,
    LineController: An,
    PolarAreaController: Tn,
    PieController: Ln,
    RadarController: Rn,
    ScatterController: En
  });
  function zn(t, e, i) {
    var s = e.startAngle,
      n = e.pixelMargin,
      o = e.x,
      a = e.y,
      r = e.outerRadius,
      l = e.innerRadius;
    var h = n / r;
    t.beginPath(), t.arc(o, a, r, s - h, i + h), l > n ? (h = n / l, t.arc(o, a, l, i + h, s - h, !0)) : t.arc(o, a, n, i + Et, s - Et), t.closePath(), t.clip();
  }
  function Fn(t, e, i, s) {
    var n = li(t.options.borderRadius, ["outerStart", "outerEnd", "innerStart", "innerEnd"]);
    var o = (i - e) / 2,
      a = Math.min(o, s * e / 2),
      r = function r(t) {
        var e = (i - Math.min(o, t)) * s / 2;
        return Qt(t, 0, Math.min(o, e));
      };
    return {
      outerStart: r(n.outerStart),
      outerEnd: r(n.outerEnd),
      innerStart: Qt(n.innerStart, 0, a),
      innerEnd: Qt(n.innerEnd, 0, a)
    };
  }
  function Bn(t, e, i, s) {
    return {
      x: i + t * Math.cos(e),
      y: s + t * Math.sin(e)
    };
  }
  function Vn(t, e, i, s, n) {
    var o = e.x,
      a = e.y,
      r = e.startAngle,
      l = e.pixelMargin,
      h = e.innerRadius,
      c = Math.max(e.outerRadius + s + i - l, 0),
      d = h > 0 ? h + s + i + l : 0;
    var u = 0;
    var f = n - r;
    if (s) {
      var _t55 = ((h > 0 ? h - s : 0) + (c > 0 ? c - s : 0)) / 2;
      u = (f - (0 !== _t55 ? f * _t55 / (_t55 + s) : f)) / 2;
    }
    var g = (f - Math.max(.001, f * c - i / Ot) / c) / 2,
      p = r + g + u,
      m = n - g - u,
      _Fn = Fn(e, d, c, m - p),
      b = _Fn.outerStart,
      x = _Fn.outerEnd,
      _ = _Fn.innerStart,
      y = _Fn.innerEnd,
      v = c - b,
      w = c - x,
      M = p + b / v,
      k = m - x / w,
      S = d + _,
      P = d + y,
      D = p + _ / S,
      C = m - y / P;
    if (t.beginPath(), t.arc(o, a, c, M, k), x > 0) {
      var _e54 = Bn(w, k, o, a);
      t.arc(_e54.x, _e54.y, x, k, m + Et);
    }
    var O = Bn(P, m, o, a);
    if (t.lineTo(O.x, O.y), y > 0) {
      var _e55 = Bn(P, C, o, a);
      t.arc(_e55.x, _e55.y, y, m + Et, C + Math.PI);
    }
    if (t.arc(o, a, d, m - y / d, p + _ / d, !0), _ > 0) {
      var _e56 = Bn(S, D, o, a);
      t.arc(_e56.x, _e56.y, _, D + Math.PI, p - Et);
    }
    var A = Bn(v, p, o, a);
    if (t.lineTo(A.x, A.y), b > 0) {
      var _e57 = Bn(v, M, o, a);
      t.arc(_e57.x, _e57.y, b, p - Et, M);
    }
    t.closePath();
  }
  function Nn(t, e, i, s, n) {
    var o = e.options,
      a = o.borderWidth,
      r = o.borderJoinStyle,
      l = "inner" === o.borderAlign;
    a && (l ? (t.lineWidth = 2 * a, t.lineJoin = r || "round") : (t.lineWidth = a, t.lineJoin = r || "bevel"), e.fullCircles && function (t, e, i) {
      var s = e.x,
        n = e.y,
        o = e.startAngle,
        a = e.pixelMargin,
        r = e.fullCircles,
        l = Math.max(e.outerRadius - a, 0),
        h = e.innerRadius + a;
      var c;
      for (i && zn(t, e, o + At), t.beginPath(), t.arc(s, n, h, o + At, o, !0), c = 0; c < r; ++c) t.stroke();
      for (t.beginPath(), t.arc(s, n, l, o, o + At), c = 0; c < r; ++c) t.stroke();
    }(t, e, l), l && zn(t, e, n), Vn(t, e, i, s, n), t.stroke());
  }
  var Wn = /*#__PURE__*/function (_Os2) {
    _inherits(Wn, _Os2);
    var _super12 = _createSuper(Wn);
    function Wn(t) {
      var _this23;
      _classCallCheck(this, Wn);
      _this23 = _super12.call(this), _this23.options = void 0, _this23.circumference = void 0, _this23.startAngle = void 0, _this23.endAngle = void 0, _this23.innerRadius = void 0, _this23.outerRadius = void 0, _this23.pixelMargin = 0, _this23.fullCircles = 0, t && Object.assign(_assertThisInitialized(_this23), t);
      return _this23;
    }
    _createClass(Wn, [{
      key: "inRange",
      value: function inRange(t, e, i) {
        var s = this.getProps(["x", "y"], i),
          _qt2 = qt(s, {
            x: t,
            y: e
          }),
          n = _qt2.angle,
          o = _qt2.distance,
          _this$getProps2 = this.getProps(["startAngle", "endAngle", "innerRadius", "outerRadius", "circumference"], i),
          a = _this$getProps2.startAngle,
          r = _this$getProps2.endAngle,
          l = _this$getProps2.innerRadius,
          h = _this$getProps2.outerRadius,
          c = _this$getProps2.circumference,
          d = this.options.spacing / 2,
          u = Z(c, r - a) >= At || Jt(n, a, r),
          f = ee(o, l + d, h + d);
        return u && f;
      }
    }, {
      key: "getCenterPoint",
      value: function getCenterPoint(t) {
        var _this$getProps3 = this.getProps(["x", "y", "startAngle", "endAngle", "innerRadius", "outerRadius", "circumference"], t),
          e = _this$getProps3.x,
          i = _this$getProps3.y,
          s = _this$getProps3.startAngle,
          n = _this$getProps3.endAngle,
          o = _this$getProps3.innerRadius,
          a = _this$getProps3.outerRadius,
          _this$options11 = this.options,
          r = _this$options11.offset,
          l = _this$options11.spacing,
          h = (s + n) / 2,
          c = (o + a + l + r) / 2;
        return {
          x: e + Math.cos(h) * c,
          y: i + Math.sin(h) * c
        };
      }
    }, {
      key: "tooltipPosition",
      value: function tooltipPosition(t) {
        return this.getCenterPoint(t);
      }
    }, {
      key: "draw",
      value: function draw(t) {
        var e = this.options,
          i = this.circumference,
          s = (e.offset || 0) / 2,
          n = (e.spacing || 0) / 2;
        if (this.pixelMargin = "inner" === e.borderAlign ? .33 : 0, this.fullCircles = i > At ? Math.floor(i / At) : 0, 0 === i || this.innerRadius < 0 || this.outerRadius < 0) return;
        t.save();
        var o = 0;
        if (s) {
          o = s / 2;
          var _e58 = (this.startAngle + this.endAngle) / 2;
          t.translate(Math.cos(_e58) * o, Math.sin(_e58) * o), this.circumference >= Ot && (o = s);
        }
        t.fillStyle = e.backgroundColor, t.strokeStyle = e.borderColor;
        var a = function (t, e, i, s) {
          var n = e.fullCircles,
            o = e.startAngle,
            a = e.circumference;
          var r = e.endAngle;
          if (n) {
            Vn(t, e, i, s, o + At);
            for (var _e59 = 0; _e59 < n; ++_e59) t.fill();
            isNaN(a) || (r = o + a % At, a % At == 0 && (r += At));
          }
          return Vn(t, e, i, s, r), t.fill(), r;
        }(t, this, o, n);
        Nn(t, this, o, n, a), t.restore();
      }
    }]);
    return Wn;
  }(Os);
  function Hn(t, e) {
    var i = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : e;
    t.lineCap = Z(i.borderCapStyle, e.borderCapStyle), t.setLineDash(Z(i.borderDash, e.borderDash)), t.lineDashOffset = Z(i.borderDashOffset, e.borderDashOffset), t.lineJoin = Z(i.borderJoinStyle, e.borderJoinStyle), t.lineWidth = Z(i.borderWidth, e.borderWidth), t.strokeStyle = Z(i.borderColor, e.borderColor);
  }
  function jn(t, e, i) {
    t.lineTo(i.x, i.y);
  }
  function $n(t, e) {
    var i = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    var s = t.length,
      _i$start = i.start,
      n = _i$start === void 0 ? 0 : _i$start,
      _i$end = i.end,
      o = _i$end === void 0 ? s - 1 : _i$end,
      a = e.start,
      r = e.end,
      l = Math.max(n, a),
      h = Math.min(o, r),
      c = n < a && o < a || n > r && o > r;
    return {
      count: s,
      start: l,
      loop: e.loop,
      ilen: h < l && !c ? s + h - l : h - l
    };
  }
  function Yn(t, e, i, s) {
    var n = e.points,
      o = e.options,
      _$n = $n(n, i, s),
      a = _$n.count,
      r = _$n.start,
      l = _$n.loop,
      h = _$n.ilen,
      c = function (t) {
        return t.stepped ? ke : t.tension || "monotone" === t.cubicInterpolationMode ? Se : jn;
      }(o);
    var d,
      u,
      f,
      _ref12 = s || {},
      _ref12$move = _ref12.move,
      g = _ref12$move === void 0 ? !0 : _ref12$move,
      p = _ref12.reverse;
    for (d = 0; d <= h; ++d) u = n[(r + (p ? h - d : d)) % a], u.skip || (g ? (t.moveTo(u.x, u.y), g = !1) : c(t, f, u, p, o.stepped), f = u);
    return l && (u = n[(r + (p ? h : 0)) % a], c(t, f, u, p, o.stepped)), !!l;
  }
  function Un(t, e, i, s) {
    var n = e.points,
      _$n2 = $n(n, i, s),
      o = _$n2.count,
      a = _$n2.start,
      r = _$n2.ilen,
      _ref13 = s || {},
      _ref13$move = _ref13.move,
      l = _ref13$move === void 0 ? !0 : _ref13$move,
      h = _ref13.reverse;
    var c,
      d,
      u,
      f,
      g,
      p,
      m = 0,
      b = 0;
    var x = function x(t) {
        return (a + (h ? r - t : t)) % o;
      },
      _ = function _() {
        f !== g && (t.lineTo(m, g), t.lineTo(m, f), t.lineTo(m, p));
      };
    for (l && (d = n[x(0)], t.moveTo(d.x, d.y)), c = 0; c <= r; ++c) {
      if (d = n[x(c)], d.skip) continue;
      var _e60 = d.x,
        _i55 = d.y,
        _s40 = 0 | _e60;
      _s40 === u ? (_i55 < f ? f = _i55 : _i55 > g && (g = _i55), m = (b * m + _e60) / ++b) : (_(), t.lineTo(_e60, _i55), u = _s40, b = 0, f = g = _i55), p = _i55;
    }
    _();
  }
  function Xn(t) {
    var e = t.options,
      i = e.borderDash && e.borderDash.length;
    return !(t._decimated || t._loop || e.tension || "monotone" === e.cubicInterpolationMode || e.stepped || i) ? Un : Yn;
  }
  Wn.id = "arc", Wn.defaults = {
    borderAlign: "center",
    borderColor: "#fff",
    borderJoinStyle: void 0,
    borderRadius: 0,
    borderWidth: 2,
    offset: 0,
    spacing: 0,
    angle: void 0
  }, Wn.defaultRoutes = {
    backgroundColor: "backgroundColor"
  };
  var qn = "function" == typeof Path2D;
  function Kn(t, e, i, s) {
    qn && !e.options.segment ? function (t, e, i, s) {
      var n = e._path;
      n || (n = e._path = new Path2D(), e.path(n, i, s) && n.closePath()), Hn(t, e.options), t.stroke(n);
    }(t, e, i, s) : function (t, e, i, s) {
      var n = e.segments,
        o = e.options,
        a = Xn(e);
      var _iterator22 = _createForOfIteratorHelper(n),
        _step22;
      try {
        for (_iterator22.s(); !(_step22 = _iterator22.n()).done;) {
          var _r15 = _step22.value;
          Hn(t, o, _r15.style), t.beginPath(), a(t, e, _r15, {
            start: i,
            end: i + s - 1
          }) && t.closePath(), t.stroke();
        }
      } catch (err) {
        _iterator22.e(err);
      } finally {
        _iterator22.f();
      }
    }(t, e, i, s);
  }
  var Gn = /*#__PURE__*/function (_Os3) {
    _inherits(Gn, _Os3);
    var _super13 = _createSuper(Gn);
    function Gn(t) {
      var _this24;
      _classCallCheck(this, Gn);
      _this24 = _super13.call(this), _this24.animated = !0, _this24.options = void 0, _this24._chart = void 0, _this24._loop = void 0, _this24._fullLoop = void 0, _this24._path = void 0, _this24._points = void 0, _this24._segments = void 0, _this24._decimated = !1, _this24._pointsUpdated = !1, _this24._datasetIndex = void 0, t && Object.assign(_assertThisInitialized(_this24), t);
      return _this24;
    }
    _createClass(Gn, [{
      key: "updateControlPoints",
      value: function updateControlPoints(t, e) {
        var i = this.options;
        if ((i.tension || "monotone" === i.cubicInterpolationMode) && !i.stepped && !this._pointsUpdated) {
          var _s41 = i.spanGaps ? this._loop : this._fullLoop;
          Ke(this._points, i, t, _s41, e), this._pointsUpdated = !0;
        }
      }
    }, {
      key: "points",
      get: function get() {
        return this._points;
      },
      set: function set(t) {
        this._points = t, delete this._segments, delete this._path, this._pointsUpdated = !1;
      }
    }, {
      key: "segments",
      get: function get() {
        return this._segments || (this._segments = Mi(this, this.options.segment));
      }
    }, {
      key: "first",
      value: function first() {
        var t = this.segments,
          e = this.points;
        return t.length && e[t[0].start];
      }
    }, {
      key: "last",
      value: function last() {
        var t = this.segments,
          e = this.points,
          i = t.length;
        return i && e[t[i - 1].end];
      }
    }, {
      key: "interpolate",
      value: function interpolate(t, e) {
        var i = this.options,
          s = t[e],
          n = this.points,
          o = wi(this, {
            property: e,
            start: s,
            end: s
          });
        if (!o.length) return;
        var a = [],
          r = function (t) {
            return t.stepped ? ei : t.tension || "monotone" === t.cubicInterpolationMode ? ii : ti;
          }(i);
        var l, h;
        for (l = 0, h = o.length; l < h; ++l) {
          var _o$l = o[l],
            _h16 = _o$l.start,
            _c11 = _o$l.end,
            _d9 = n[_h16],
            _u6 = n[_c11];
          if (_d9 === _u6) {
            a.push(_d9);
            continue;
          }
          var _f5 = r(_d9, _u6, Math.abs((s - _d9[e]) / (_u6[e] - _d9[e])), i.stepped);
          _f5[e] = t[e], a.push(_f5);
        }
        return 1 === a.length ? a[0] : a;
      }
    }, {
      key: "pathSegment",
      value: function pathSegment(t, e, i) {
        return Xn(this)(t, this, e, i);
      }
    }, {
      key: "path",
      value: function path(t, e, i) {
        var s = this.segments,
          n = Xn(this);
        var o = this._loop;
        e = e || 0, i = i || this.points.length - e;
        var _iterator23 = _createForOfIteratorHelper(s),
          _step23;
        try {
          for (_iterator23.s(); !(_step23 = _iterator23.n()).done;) {
            var _a19 = _step23.value;
            o &= n(t, this, _a19, {
              start: e,
              end: e + i - 1
            });
          }
        } catch (err) {
          _iterator23.e(err);
        } finally {
          _iterator23.f();
        }
        return !!o;
      }
    }, {
      key: "draw",
      value: function draw(t, e, i, s) {
        var n = this.options || {};
        (this.points || []).length && n.borderWidth && (t.save(), Kn(t, this, i, s), t.restore()), this.animated && (this._pointsUpdated = !1, this._path = void 0);
      }
    }]);
    return Gn;
  }(Os);
  function Zn(t, e, i, s) {
    var n = t.options,
      _t$getProps2 = t.getProps([i], s),
      o = _t$getProps2[i];
    return Math.abs(e - o) < n.radius + n.hitRadius;
  }
  Gn.id = "line", Gn.defaults = {
    borderCapStyle: "butt",
    borderDash: [],
    borderDashOffset: 0,
    borderJoinStyle: "miter",
    borderWidth: 3,
    capBezierPoints: !0,
    cubicInterpolationMode: "default",
    fill: !1,
    spanGaps: !1,
    stepped: !1,
    tension: 0
  }, Gn.defaultRoutes = {
    backgroundColor: "backgroundColor",
    borderColor: "borderColor"
  }, Gn.descriptors = {
    _scriptable: !0,
    _indexable: function _indexable(t) {
      return "borderDash" !== t && "fill" !== t;
    }
  };
  var Jn = /*#__PURE__*/function (_Os4) {
    _inherits(Jn, _Os4);
    var _super14 = _createSuper(Jn);
    function Jn(t) {
      var _this25;
      _classCallCheck(this, Jn);
      _this25 = _super14.call(this), _this25.options = void 0, _this25.parsed = void 0, _this25.skip = void 0, _this25.stop = void 0, t && Object.assign(_assertThisInitialized(_this25), t);
      return _this25;
    }
    _createClass(Jn, [{
      key: "inRange",
      value: function inRange(t, e, i) {
        var s = this.options,
          _this$getProps4 = this.getProps(["x", "y"], i),
          n = _this$getProps4.x,
          o = _this$getProps4.y;
        return Math.pow(t - n, 2) + Math.pow(e - o, 2) < Math.pow(s.hitRadius + s.radius, 2);
      }
    }, {
      key: "inXRange",
      value: function inXRange(t, e) {
        return Zn(this, t, "x", e);
      }
    }, {
      key: "inYRange",
      value: function inYRange(t, e) {
        return Zn(this, t, "y", e);
      }
    }, {
      key: "getCenterPoint",
      value: function getCenterPoint(t) {
        var _this$getProps5 = this.getProps(["x", "y"], t),
          e = _this$getProps5.x,
          i = _this$getProps5.y;
        return {
          x: e,
          y: i
        };
      }
    }, {
      key: "size",
      value: function size(t) {
        var e = (t = t || this.options || {}).radius || 0;
        e = Math.max(e, e && t.hoverRadius || 0);
        return 2 * (e + (e && t.borderWidth || 0));
      }
    }, {
      key: "draw",
      value: function draw(t, e) {
        var i = this.options;
        this.skip || i.radius < .1 || !ve(this, e, this.size(i) / 2) || (t.strokeStyle = i.borderColor, t.lineWidth = i.borderWidth, t.fillStyle = i.backgroundColor, ye(t, i, this.x, this.y));
      }
    }, {
      key: "getRange",
      value: function getRange() {
        var t = this.options || {};
        return t.radius + t.hitRadius;
      }
    }]);
    return Jn;
  }(Os);
  function Qn(t, e) {
    var _t$getProps3 = t.getProps(["x", "y", "base", "width", "height"], e),
      i = _t$getProps3.x,
      s = _t$getProps3.y,
      n = _t$getProps3.base,
      o = _t$getProps3.width,
      a = _t$getProps3.height;
    var r, l, h, c, d;
    return t.horizontal ? (d = a / 2, r = Math.min(i, n), l = Math.max(i, n), h = s - d, c = s + d) : (d = o / 2, r = i - d, l = i + d, h = Math.min(s, n), c = Math.max(s, n)), {
      left: r,
      top: h,
      right: l,
      bottom: c
    };
  }
  function to(t, e, i, s) {
    return t ? 0 : Qt(e, i, s);
  }
  function eo(t) {
    var e = Qn(t),
      i = e.right - e.left,
      s = e.bottom - e.top,
      n = function (t, e, i) {
        var s = t.options.borderWidth,
          n = t.borderSkipped,
          o = hi(s);
        return {
          t: to(n.top, o.top, 0, i),
          r: to(n.right, o.right, 0, e),
          b: to(n.bottom, o.bottom, 0, i),
          l: to(n.left, o.left, 0, e)
        };
      }(t, i / 2, s / 2),
      o = function (t, e, i) {
        var _t$getProps4 = t.getProps(["enableBorderRadius"]),
          s = _t$getProps4.enableBorderRadius,
          n = t.options.borderRadius,
          o = ci(n),
          a = Math.min(e, i),
          r = t.borderSkipped,
          l = s || q(n);
        return {
          topLeft: to(!l || r.top || r.left, o.topLeft, 0, a),
          topRight: to(!l || r.top || r.right, o.topRight, 0, a),
          bottomLeft: to(!l || r.bottom || r.left, o.bottomLeft, 0, a),
          bottomRight: to(!l || r.bottom || r.right, o.bottomRight, 0, a)
        };
      }(t, i / 2, s / 2);
    return {
      outer: {
        x: e.left,
        y: e.top,
        w: i,
        h: s,
        radius: o
      },
      inner: {
        x: e.left + n.l,
        y: e.top + n.t,
        w: i - n.l - n.r,
        h: s - n.t - n.b,
        radius: {
          topLeft: Math.max(0, o.topLeft - Math.max(n.t, n.l)),
          topRight: Math.max(0, o.topRight - Math.max(n.t, n.r)),
          bottomLeft: Math.max(0, o.bottomLeft - Math.max(n.b, n.l)),
          bottomRight: Math.max(0, o.bottomRight - Math.max(n.b, n.r))
        }
      }
    };
  }
  function io(t, e, i, s) {
    var n = null === e,
      o = null === i,
      a = t && !(n && o) && Qn(t, s);
    return a && (n || ee(e, a.left, a.right)) && (o || ee(i, a.top, a.bottom));
  }
  function so(t, e) {
    t.rect(e.x, e.y, e.w, e.h);
  }
  function no(t, e) {
    var i = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    var s = t.x !== i.x ? -e : 0,
      n = t.y !== i.y ? -e : 0,
      o = (t.x + t.w !== i.x + i.w ? e : 0) - s,
      a = (t.y + t.h !== i.y + i.h ? e : 0) - n;
    return {
      x: t.x + s,
      y: t.y + n,
      w: t.w + o,
      h: t.h + a,
      radius: t.radius
    };
  }
  Jn.id = "point", Jn.defaults = {
    borderWidth: 1,
    hitRadius: 1,
    hoverBorderWidth: 1,
    hoverRadius: 4,
    pointStyle: "circle",
    radius: 3,
    rotation: 0
  }, Jn.defaultRoutes = {
    backgroundColor: "backgroundColor",
    borderColor: "borderColor"
  };
  var oo = /*#__PURE__*/function (_Os5) {
    _inherits(oo, _Os5);
    var _super15 = _createSuper(oo);
    function oo(t) {
      var _this26;
      _classCallCheck(this, oo);
      _this26 = _super15.call(this), _this26.options = void 0, _this26.horizontal = void 0, _this26.base = void 0, _this26.width = void 0, _this26.height = void 0, _this26.inflateAmount = void 0, t && Object.assign(_assertThisInitialized(_this26), t);
      return _this26;
    }
    _createClass(oo, [{
      key: "draw",
      value: function draw(t) {
        var e = this.inflateAmount,
          _this$options12 = this.options,
          i = _this$options12.borderColor,
          s = _this$options12.backgroundColor,
          _eo = eo(this),
          n = _eo.inner,
          o = _eo.outer,
          a = (r = o.radius).topLeft || r.topRight || r.bottomLeft || r.bottomRight ? Ce : so;
        var r;
        t.save(), o.w === n.w && o.h === n.h || (t.beginPath(), a(t, no(o, e, n)), t.clip(), a(t, no(n, -e, o)), t.fillStyle = i, t.fill("evenodd")), t.beginPath(), a(t, no(n, e)), t.fillStyle = s, t.fill(), t.restore();
      }
    }, {
      key: "inRange",
      value: function inRange(t, e, i) {
        return io(this, t, e, i);
      }
    }, {
      key: "inXRange",
      value: function inXRange(t, e) {
        return io(this, t, null, e);
      }
    }, {
      key: "inYRange",
      value: function inYRange(t, e) {
        return io(this, null, t, e);
      }
    }, {
      key: "getCenterPoint",
      value: function getCenterPoint(t) {
        var _this$getProps6 = this.getProps(["x", "y", "base", "horizontal"], t),
          e = _this$getProps6.x,
          i = _this$getProps6.y,
          s = _this$getProps6.base,
          n = _this$getProps6.horizontal;
        return {
          x: n ? (e + s) / 2 : e,
          y: n ? i : (i + s) / 2
        };
      }
    }, {
      key: "getRange",
      value: function getRange(t) {
        return "x" === t ? this.width / 2 : this.height / 2;
      }
    }]);
    return oo;
  }(Os);
  oo.id = "bar", oo.defaults = {
    borderSkipped: "start",
    borderWidth: 0,
    borderRadius: 0,
    inflateAmount: "auto",
    pointStyle: void 0
  }, oo.defaultRoutes = {
    backgroundColor: "backgroundColor",
    borderColor: "borderColor"
  };
  var ao = Object.freeze({
    __proto__: null,
    ArcElement: Wn,
    LineElement: Gn,
    PointElement: Jn,
    BarElement: oo
  });
  function ro(t) {
    if (t._decimated) {
      var _e61 = t._data;
      delete t._decimated, delete t._data, Object.defineProperty(t, "data", {
        value: _e61
      });
    }
  }
  function lo(t) {
    t.data.datasets.forEach(function (t) {
      ro(t);
    });
  }
  var ho = {
    id: "decimation",
    defaults: {
      algorithm: "min-max",
      enabled: !1
    },
    beforeElementsUpdate: function beforeElementsUpdate(t, e, i) {
      if (!i.enabled) return void lo(t);
      var s = t.width;
      t.data.datasets.forEach(function (e, n) {
        var o = e._data,
          a = e.indexAxis,
          r = t.getDatasetMeta(n),
          l = o || e.data;
        if ("y" === fi([a, t.options.indexAxis])) return;
        if (!r.controller.supportsDecimation) return;
        var h = t.scales[r.xAxisID];
        if ("linear" !== h.type && "time" !== h.type) return;
        if (t.options.parsing) return;
        var _ref14 = function (t, e) {
            var i = e.length;
            var s,
              n = 0;
            var o = t.iScale,
              _o$getUserBounds = o.getUserBounds(),
              a = _o$getUserBounds.min,
              r = _o$getUserBounds.max,
              l = _o$getUserBounds.minDefined,
              h = _o$getUserBounds.maxDefined;
            return l && (n = Qt(wt(e, o.axis, a).lo, 0, i - 1)), s = h ? Qt(wt(e, o.axis, r).hi + 1, n, i) - n : i - n, {
              start: n,
              count: s
            };
          }(r, l),
          c = _ref14.start,
          d = _ref14.count;
        if (d <= (i.threshold || 4 * s)) return void ro(e);
        var u;
        switch (U(o) && (e._data = l, delete e.data, Object.defineProperty(e, "data", {
          configurable: !0,
          enumerable: !0,
          get: function get() {
            return this._decimated;
          },
          set: function set(t) {
            this._data = t;
          }
        })), i.algorithm) {
          case "lttb":
            u = function (t, e, i, s, n) {
              var o = n.samples || s;
              if (o >= i) return t.slice(e, e + i);
              var a = [],
                r = (i - 2) / (o - 2);
              var l = 0;
              var h = e + i - 1;
              var c,
                d,
                u,
                f,
                g,
                p = e;
              for (a[l++] = t[p], c = 0; c < o - 2; c++) {
                var _s42 = void 0,
                  _n28 = 0,
                  _o30 = 0;
                var _h17 = Math.floor((c + 1) * r) + 1 + e,
                  _m4 = Math.min(Math.floor((c + 2) * r) + 1, i) + e,
                  _b2 = _m4 - _h17;
                for (_s42 = _h17; _s42 < _m4; _s42++) _n28 += t[_s42].x, _o30 += t[_s42].y;
                _n28 /= _b2, _o30 /= _b2;
                var _x3 = Math.floor(c * r) + 1 + e,
                  _3 = Math.min(Math.floor((c + 1) * r) + 1, i) + e,
                  _t$p = t[p],
                  _y2 = _t$p.x,
                  _v2 = _t$p.y;
                for (u = f = -1, _s42 = _x3; _s42 < _3; _s42++) f = .5 * Math.abs((_y2 - _n28) * (t[_s42].y - _v2) - (_y2 - t[_s42].x) * (_o30 - _v2)), f > u && (u = f, d = t[_s42], g = _s42);
                a[l++] = d, p = g;
              }
              return a[l++] = t[h], a;
            }(l, c, d, s, i);
            break;
          case "min-max":
            u = function (t, e, i, s) {
              var n,
                o,
                a,
                r,
                l,
                h,
                c,
                d,
                u,
                f,
                g = 0,
                p = 0;
              var m = [],
                b = e + i - 1,
                x = t[e].x,
                _ = t[b].x - x;
              for (n = e; n < e + i; ++n) {
                o = t[n], a = (o.x - x) / _ * s, r = o.y;
                var _e62 = 0 | a;
                if (_e62 === l) r < u ? (u = r, h = n) : r > f && (f = r, c = n), g = (p * g + o.x) / ++p;else {
                  var _i56 = n - 1;
                  if (!U(h) && !U(c)) {
                    var _e63 = Math.min(h, c),
                      _s43 = Math.max(h, c);
                    _e63 !== d && _e63 !== _i56 && m.push(_objectSpread(_objectSpread({}, t[_e63]), {}, {
                      x: g
                    })), _s43 !== d && _s43 !== _i56 && m.push(_objectSpread(_objectSpread({}, t[_s43]), {}, {
                      x: g
                    }));
                  }
                  n > 0 && _i56 !== d && m.push(t[_i56]), m.push(o), l = _e62, p = 0, u = f = r, h = c = d = n;
                }
              }
              return m;
            }(l, c, d, s);
            break;
          default:
            throw new Error("Unsupported decimation algorithm '".concat(i.algorithm, "'"));
        }
        e._decimated = u;
      });
    },
    destroy: function destroy(t) {
      lo(t);
    }
  };
  function co(t, e, i, s) {
    if (s) return;
    var n = e[t],
      o = i[t];
    return "angle" === t && (n = Zt(n), o = Zt(o)), {
      property: t,
      start: n,
      end: o
    };
  }
  function uo(t, e, i) {
    for (; e > t; e--) {
      var _t56 = i[e];
      if (!isNaN(_t56.x) && !isNaN(_t56.y)) break;
    }
    return e;
  }
  function fo(t, e, i, s) {
    return t && e ? s(t[i], e[i]) : t ? t[i] : e ? e[i] : 0;
  }
  function go(t, e) {
    var i = [],
      s = !1;
    return X(t) ? (s = !0, i = t) : i = function (t, e) {
      var _ref15 = t || {},
        _ref15$x = _ref15.x,
        i = _ref15$x === void 0 ? null : _ref15$x,
        _ref15$y = _ref15.y,
        s = _ref15$y === void 0 ? null : _ref15$y,
        n = e.points,
        o = [];
      return e.segments.forEach(function (_ref16) {
        var t = _ref16.start,
          e = _ref16.end;
        e = uo(t, e, n);
        var a = n[t],
          r = n[e];
        null !== s ? (o.push({
          x: a.x,
          y: s
        }), o.push({
          x: r.x,
          y: s
        })) : null !== i && (o.push({
          x: i,
          y: a.y
        }), o.push({
          x: i,
          y: r.y
        }));
      }), o;
    }(t, e), i.length ? new Gn({
      points: i,
      options: {
        tension: 0
      },
      _loop: s,
      _fullLoop: s
    }) : null;
  }
  function po(t, e, i) {
    var s = t[e].fill;
    var n = [e];
    var o;
    if (!i) return s;
    for (; !1 !== s && -1 === n.indexOf(s);) {
      if (!K(s)) return s;
      if (o = t[s], !o) return !1;
      if (o.visible) return s;
      n.push(s), s = o.fill;
    }
    return !1;
  }
  function mo(t, e, i) {
    var s = function (t) {
      var e = t.options,
        i = e.fill;
      var s = Z(i && i.target, i);
      void 0 === s && (s = !!e.backgroundColor);
      if (!1 === s || null === s) return !1;
      if (!0 === s) return "origin";
      return s;
    }(t);
    if (q(s)) return !isNaN(s.value) && s;
    var n = parseFloat(s);
    return K(n) && Math.floor(n) === n ? function (t, e, i, s) {
      "-" !== t && "+" !== t || (i = e + i);
      if (i === e || i < 0 || i >= s) return !1;
      return i;
    }(s[0], e, n, i) : ["origin", "start", "end", "stack", "shape"].indexOf(s) >= 0 && s;
  }
  function bo(t, e, i) {
    var s = [];
    for (var _n29 = 0; _n29 < i.length; _n29++) {
      var _o31 = i[_n29],
        _xo = xo(_o31, e, "x"),
        _a20 = _xo.first,
        _r16 = _xo.last,
        _l18 = _xo.point;
      if (!(!_l18 || _a20 && _r16)) if (_a20) s.unshift(_l18);else if (t.push(_l18), !_r16) break;
    }
    t.push.apply(t, s);
  }
  function xo(t, e, i) {
    var s = t.interpolate(e, i);
    if (!s) return {};
    var n = s[i],
      o = t.segments,
      a = t.points;
    var r = !1,
      l = !1;
    for (var _t57 = 0; _t57 < o.length; _t57++) {
      var _e64 = o[_t57],
        _s44 = a[_e64.start][i],
        _h18 = a[_e64.end][i];
      if (ee(n, _s44, _h18)) {
        r = n === _s44, l = n === _h18;
        break;
      }
    }
    return {
      first: r,
      last: l,
      point: s
    };
  }
  var _o = /*#__PURE__*/function () {
    function _o(t) {
      _classCallCheck(this, _o);
      this.x = t.x, this.y = t.y, this.radius = t.radius;
    }
    _createClass(_o, [{
      key: "pathSegment",
      value: function pathSegment(t, e, i) {
        var s = this.x,
          n = this.y,
          o = this.radius;
        return e = e || {
          start: 0,
          end: At
        }, t.arc(s, n, o, e.end, e.start, !0), !i.bounds;
      }
    }, {
      key: "interpolate",
      value: function interpolate(t) {
        var e = this.x,
          i = this.y,
          s = this.radius,
          n = t.angle;
        return {
          x: e + Math.cos(n) * s,
          y: i + Math.sin(n) * s,
          angle: n
        };
      }
    }]);
    return _o;
  }();
  function yo(t) {
    var e = t.chart,
      i = t.fill,
      s = t.line;
    if (K(i)) return function (t, e) {
      var i = t.getDatasetMeta(e);
      return i && t.isDatasetVisible(e) ? i.dataset : null;
    }(e, i);
    if ("stack" === i) return function (t) {
      var e = t.scale,
        i = t.index,
        s = t.line,
        n = [],
        o = s.segments,
        a = s.points,
        r = function (t, e) {
          var i = [],
            s = t.getMatchingVisibleMetas("line");
          for (var _t58 = 0; _t58 < s.length; _t58++) {
            var _n30 = s[_t58];
            if (_n30.index === e) break;
            _n30.hidden || i.unshift(_n30.dataset);
          }
          return i;
        }(e, i);
      r.push(go({
        x: null,
        y: e.bottom
      }, s));
      for (var _t59 = 0; _t59 < o.length; _t59++) {
        var _e65 = o[_t59];
        for (var _t60 = _e65.start; _t60 <= _e65.end; _t60++) bo(n, a[_t60], r);
      }
      return new Gn({
        points: n,
        options: {}
      });
    }(t);
    if ("shape" === i) return !0;
    var n = function (t) {
      if ((t.scale || {}).getPointPositionForValue) return function (t) {
        var e = t.scale,
          i = t.fill,
          s = e.options,
          n = e.getLabels().length,
          o = s.reverse ? e.max : e.min,
          a = function (t, e, i) {
            var s;
            return s = "start" === t ? i : "end" === t ? e.options.reverse ? e.min : e.max : q(t) ? t.value : e.getBaseValue(), s;
          }(i, e, o),
          r = [];
        if (s.grid.circular) {
          var _t61 = e.getPointPositionForValue(0, o);
          return new _o({
            x: _t61.x,
            y: _t61.y,
            radius: e.getDistanceFromCenterForValue(a)
          });
        }
        for (var _t62 = 0; _t62 < n; ++_t62) r.push(e.getPointPositionForValue(_t62, a));
        return r;
      }(t);
      return function (t) {
        var _t$scale = t.scale,
          e = _t$scale === void 0 ? {} : _t$scale,
          i = t.fill,
          s = function (t, e) {
            var i = null;
            return "start" === t ? i = e.bottom : "end" === t ? i = e.top : q(t) ? i = e.getPixelForValue(t.value) : e.getBasePixel && (i = e.getBasePixel()), i;
          }(i, e);
        if (K(s)) {
          var _t63 = e.isHorizontal();
          return {
            x: _t63 ? s : null,
            y: _t63 ? null : s
          };
        }
        return null;
      }(t);
    }(t);
    return n instanceof _o ? n : go(n, s);
  }
  function vo(t, e, i) {
    var s = yo(e),
      n = e.line,
      o = e.scale,
      a = e.axis,
      r = n.options,
      l = r.fill,
      h = r.backgroundColor,
      _ref17 = l || {},
      _ref17$above = _ref17.above,
      c = _ref17$above === void 0 ? h : _ref17$above,
      _ref17$below = _ref17.below,
      d = _ref17$below === void 0 ? h : _ref17$below;
    s && n.points.length && (we(t, i), function (t, e) {
      var i = e.line,
        s = e.target,
        n = e.above,
        o = e.below,
        a = e.area,
        r = e.scale,
        l = i._loop ? "angle" : e.axis;
      t.save(), "x" === l && o !== n && (wo(t, s, a.top), Mo(t, {
        line: i,
        target: s,
        color: n,
        scale: r,
        property: l
      }), t.restore(), t.save(), wo(t, s, a.bottom));
      Mo(t, {
        line: i,
        target: s,
        color: o,
        scale: r,
        property: l
      }), t.restore();
    }(t, {
      line: n,
      target: s,
      above: c,
      below: d,
      area: i,
      scale: o,
      axis: a
    }), Me(t));
  }
  function wo(t, e, i) {
    var s = e.segments,
      n = e.points;
    var o = !0,
      a = !1;
    t.beginPath();
    var _iterator24 = _createForOfIteratorHelper(s),
      _step24;
    try {
      for (_iterator24.s(); !(_step24 = _iterator24.n()).done;) {
        var _r17 = _step24.value;
        var _s45 = _r17.start,
          _l19 = _r17.end,
          _h19 = n[_s45],
          _c12 = n[uo(_s45, _l19, n)];
        o ? (t.moveTo(_h19.x, _h19.y), o = !1) : (t.lineTo(_h19.x, i), t.lineTo(_h19.x, _h19.y)), a = !!e.pathSegment(t, _r17, {
          move: a
        }), a ? t.closePath() : t.lineTo(_c12.x, i);
      }
    } catch (err) {
      _iterator24.e(err);
    } finally {
      _iterator24.f();
    }
    t.lineTo(e.first().x, i), t.closePath(), t.clip();
  }
  function Mo(t, e) {
    var i = e.line,
      s = e.target,
      n = e.property,
      o = e.color,
      a = e.scale,
      r = function (t, e, i) {
        var s = t.segments,
          n = t.points,
          o = e.points,
          a = [];
        var _iterator25 = _createForOfIteratorHelper(s),
          _step25;
        try {
          for (_iterator25.s(); !(_step25 = _iterator25.n()).done;) {
            var _t64 = _step25.value;
            var _s46 = _t64.start,
              _r18 = _t64.end;
            _r18 = uo(_s46, _r18, n);
            var _l20 = co(i, n[_s46], n[_r18], _t64.loop);
            if (!e.segments) {
              a.push({
                source: _t64,
                target: _l20,
                start: n[_s46],
                end: n[_r18]
              });
              continue;
            }
            var _h20 = wi(e, _l20);
            var _iterator26 = _createForOfIteratorHelper(_h20),
              _step26;
            try {
              for (_iterator26.s(); !(_step26 = _iterator26.n()).done;) {
                var _e66 = _step26.value;
                var _s47 = co(i, o[_e66.start], o[_e66.end], _e66.loop),
                  _r19 = vi(_t64, n, _s47);
                var _iterator27 = _createForOfIteratorHelper(_r19),
                  _step27;
                try {
                  for (_iterator27.s(); !(_step27 = _iterator27.n()).done;) {
                    var _t65 = _step27.value;
                    a.push({
                      source: _t65,
                      target: _e66,
                      start: _defineProperty({}, i, fo(_l20, _s47, "start", Math.max)),
                      end: _defineProperty({}, i, fo(_l20, _s47, "end", Math.min))
                    });
                  }
                } catch (err) {
                  _iterator27.e(err);
                } finally {
                  _iterator27.f();
                }
              }
            } catch (err) {
              _iterator26.e(err);
            } finally {
              _iterator26.f();
            }
          }
        } catch (err) {
          _iterator25.e(err);
        } finally {
          _iterator25.f();
        }
        return a;
      }(i, s, n);
    var _iterator28 = _createForOfIteratorHelper(r),
      _step28;
    try {
      for (_iterator28.s(); !(_step28 = _iterator28.n()).done;) {
        var _step28$value = _step28.value,
          _e67 = _step28$value.source,
          _l21 = _step28$value.target,
          _h21 = _step28$value.start,
          _c13 = _step28$value.end;
        var _e67$style = _e67.style,
          _e67$style2 = _e67$style === void 0 ? {} : _e67$style,
          _e67$style2$backgroun = _e67$style2.backgroundColor,
          _r20 = _e67$style2$backgroun === void 0 ? o : _e67$style2$backgroun,
          _d10 = !0 !== s;
        t.save(), t.fillStyle = _r20, ko(t, a, _d10 && co(n, _h21, _c13)), t.beginPath();
        var _u7 = !!i.pathSegment(t, _e67);
        var _f6 = void 0;
        if (_d10) {
          _u7 ? t.closePath() : So(t, s, _c13, n);
          var _e68 = !!s.pathSegment(t, _l21, {
            move: _u7,
            reverse: !0
          });
          _f6 = _u7 && _e68, _f6 || So(t, s, _h21, n);
        }
        t.closePath(), t.fill(_f6 ? "evenodd" : "nonzero"), t.restore();
      }
    } catch (err) {
      _iterator28.e(err);
    } finally {
      _iterator28.f();
    }
  }
  function ko(t, e, i) {
    var _e$chart$chartArea = e.chart.chartArea,
      s = _e$chart$chartArea.top,
      n = _e$chart$chartArea.bottom,
      _ref18 = i || {},
      o = _ref18.property,
      a = _ref18.start,
      r = _ref18.end;
    "x" === o && (t.beginPath(), t.rect(a, s, r - a, n - s), t.clip());
  }
  function So(t, e, i, s) {
    var n = e.interpolate(i, s);
    n && t.lineTo(n.x, n.y);
  }
  var Po = {
    id: "filler",
    afterDatasetsUpdate: function afterDatasetsUpdate(t, e, i) {
      var s = (t.data.datasets || []).length,
        n = [];
      var o, a, r, l;
      for (a = 0; a < s; ++a) o = t.getDatasetMeta(a), r = o.dataset, l = null, r && r.options && r instanceof Gn && (l = {
        visible: t.isDatasetVisible(a),
        index: a,
        fill: mo(r, a, s),
        chart: t,
        axis: o.controller.options.indexAxis,
        scale: o.vScale,
        line: r
      }), o.$filler = l, n.push(l);
      for (a = 0; a < s; ++a) l = n[a], l && !1 !== l.fill && (l.fill = po(n, a, i.propagate));
    },
    beforeDraw: function beforeDraw(t, e, i) {
      var s = "beforeDraw" === i.drawTime,
        n = t.getSortedVisibleDatasetMetas(),
        o = t.chartArea;
      for (var _e69 = n.length - 1; _e69 >= 0; --_e69) {
        var _i57 = n[_e69].$filler;
        _i57 && (_i57.line.updateControlPoints(o, _i57.axis), s && vo(t.ctx, _i57, o));
      }
    },
    beforeDatasetsDraw: function beforeDatasetsDraw(t, e, i) {
      if ("beforeDatasetsDraw" !== i.drawTime) return;
      var s = t.getSortedVisibleDatasetMetas();
      for (var _e70 = s.length - 1; _e70 >= 0; --_e70) {
        var _i58 = s[_e70].$filler;
        _i58 && vo(t.ctx, _i58, t.chartArea);
      }
    },
    beforeDatasetDraw: function beforeDatasetDraw(t, e, i) {
      var s = e.meta.$filler;
      s && !1 !== s.fill && "beforeDatasetDraw" === i.drawTime && vo(t.ctx, s, t.chartArea);
    },
    defaults: {
      propagate: !0,
      drawTime: "beforeDatasetDraw"
    }
  };
  var Do = function Do(t, e) {
    var _t$boxHeight = t.boxHeight,
      i = _t$boxHeight === void 0 ? e : _t$boxHeight,
      _t$boxWidth = t.boxWidth,
      s = _t$boxWidth === void 0 ? e : _t$boxWidth;
    return t.usePointStyle && (i = Math.min(i, e), s = Math.min(s, e)), {
      boxWidth: s,
      boxHeight: i,
      itemHeight: Math.max(e, i)
    };
  };
  var Co = /*#__PURE__*/function (_Os6) {
    _inherits(Co, _Os6);
    var _super16 = _createSuper(Co);
    function Co(t) {
      var _this27;
      _classCallCheck(this, Co);
      _this27 = _super16.call(this), _this27._added = !1, _this27.legendHitBoxes = [], _this27._hoveredItem = null, _this27.doughnutMode = !1, _this27.chart = t.chart, _this27.options = t.options, _this27.ctx = t.ctx, _this27.legendItems = void 0, _this27.columnSizes = void 0, _this27.lineWidths = void 0, _this27.maxHeight = void 0, _this27.maxWidth = void 0, _this27.top = void 0, _this27.bottom = void 0, _this27.left = void 0, _this27.right = void 0, _this27.height = void 0, _this27.width = void 0, _this27._margins = void 0, _this27.position = void 0, _this27.weight = void 0, _this27.fullSize = void 0;
      return _this27;
    }
    _createClass(Co, [{
      key: "update",
      value: function update(t, e, i) {
        this.maxWidth = t, this.maxHeight = e, this._margins = i, this.setDimensions(), this.buildLabels(), this.fit();
      }
    }, {
      key: "setDimensions",
      value: function setDimensions() {
        this.isHorizontal() ? (this.width = this.maxWidth, this.left = this._margins.left, this.right = this.width) : (this.height = this.maxHeight, this.top = this._margins.top, this.bottom = this.height);
      }
    }, {
      key: "buildLabels",
      value: function buildLabels() {
        var _this28 = this;
        var t = this.options.labels || {};
        var e = tt(t.generateLabels, [this.chart], this) || [];
        t.filter && (e = e.filter(function (e) {
          return t.filter(e, _this28.chart.data);
        })), t.sort && (e = e.sort(function (e, i) {
          return t.sort(e, i, _this28.chart.data);
        })), this.options.reverse && e.reverse(), this.legendItems = e;
      }
    }, {
      key: "fit",
      value: function fit() {
        var t = this.options,
          e = this.ctx;
        if (!t.display) return void (this.width = this.height = 0);
        var i = t.labels,
          s = ui(i.font),
          n = s.size,
          o = this._computeTitleHeight(),
          _Do = Do(i, n),
          a = _Do.boxWidth,
          r = _Do.itemHeight;
        var l, h;
        e.font = s.string, this.isHorizontal() ? (l = this.maxWidth, h = this._fitRows(o, n, a, r) + 10) : (h = this.maxHeight, l = this._fitCols(o, n, a, r) + 10), this.width = Math.min(l, t.maxWidth || this.maxWidth), this.height = Math.min(h, t.maxHeight || this.maxHeight);
      }
    }, {
      key: "_fitRows",
      value: function _fitRows(t, e, i, s) {
        var n = this.ctx,
          o = this.maxWidth,
          a = this.options.labels.padding,
          r = this.legendHitBoxes = [],
          l = this.lineWidths = [0],
          h = s + a;
        var c = t;
        n.textAlign = "left", n.textBaseline = "middle";
        var d = -1,
          u = -h;
        return this.legendItems.forEach(function (t, f) {
          var g = i + e / 2 + n.measureText(t.text).width;
          (0 === f || l[l.length - 1] + g + 2 * a > o) && (c += h, l[l.length - (f > 0 ? 0 : 1)] = 0, u += h, d++), r[f] = {
            left: 0,
            top: u,
            row: d,
            width: g,
            height: s
          }, l[l.length - 1] += g + a;
        }), c;
      }
    }, {
      key: "_fitCols",
      value: function _fitCols(t, e, i, s) {
        var n = this.ctx,
          o = this.maxHeight,
          a = this.options.labels.padding,
          r = this.legendHitBoxes = [],
          l = this.columnSizes = [],
          h = o - t;
        var c = a,
          d = 0,
          u = 0,
          f = 0,
          g = 0;
        return this.legendItems.forEach(function (t, o) {
          var p = i + e / 2 + n.measureText(t.text).width;
          o > 0 && u + s + 2 * a > h && (c += d + a, l.push({
            width: d,
            height: u
          }), f += d + a, g++, d = u = 0), r[o] = {
            left: f,
            top: u,
            col: g,
            width: p,
            height: s
          }, d = Math.max(d, p), u += s + a;
        }), c += d, l.push({
          width: d,
          height: u
        }), c;
      }
    }, {
      key: "adjustHitBoxes",
      value: function adjustHitBoxes() {
        if (!this.options.display) return;
        var t = this._computeTitleHeight(),
          e = this.legendHitBoxes,
          _this$options13 = this.options,
          i = _this$options13.align,
          s = _this$options13.labels.padding,
          o = _this$options13.rtl,
          a = mi(o, this.left, this.width);
        if (this.isHorizontal()) {
          var _o32 = 0,
            _r21 = n(i, this.left + s, this.right - this.lineWidths[_o32]);
          var _iterator29 = _createForOfIteratorHelper(e),
            _step29;
          try {
            for (_iterator29.s(); !(_step29 = _iterator29.n()).done;) {
              var _l22 = _step29.value;
              _o32 !== _l22.row && (_o32 = _l22.row, _r21 = n(i, this.left + s, this.right - this.lineWidths[_o32])), _l22.top += this.top + t + s, _l22.left = a.leftForLtr(a.x(_r21), _l22.width), _r21 += _l22.width + s;
            }
          } catch (err) {
            _iterator29.e(err);
          } finally {
            _iterator29.f();
          }
        } else {
          var _o33 = 0,
            _r22 = n(i, this.top + t + s, this.bottom - this.columnSizes[_o33].height);
          var _iterator30 = _createForOfIteratorHelper(e),
            _step30;
          try {
            for (_iterator30.s(); !(_step30 = _iterator30.n()).done;) {
              var _l23 = _step30.value;
              _l23.col !== _o33 && (_o33 = _l23.col, _r22 = n(i, this.top + t + s, this.bottom - this.columnSizes[_o33].height)), _l23.top = _r22, _l23.left += this.left + s, _l23.left = a.leftForLtr(a.x(_l23.left), _l23.width), _r22 += _l23.height + s;
            }
          } catch (err) {
            _iterator30.e(err);
          } finally {
            _iterator30.f();
          }
        }
      }
    }, {
      key: "isHorizontal",
      value: function isHorizontal() {
        return "top" === this.options.position || "bottom" === this.options.position;
      }
    }, {
      key: "draw",
      value: function draw() {
        if (this.options.display) {
          var _t66 = this.ctx;
          we(_t66, this), this._draw(), Me(_t66);
        }
      }
    }, {
      key: "_draw",
      value: function _draw() {
        var _this29 = this;
        var t = this.options,
          e = this.columnSizes,
          i = this.lineWidths,
          s = this.ctx,
          a = t.align,
          r = t.labels,
          l = yt.color,
          h = mi(t.rtl, this.left, this.width),
          c = ui(r.font),
          d = r.color,
          u = r.padding,
          f = c.size,
          g = f / 2;
        var p;
        this.drawTitle(), s.textAlign = h.textAlign("left"), s.textBaseline = "middle", s.lineWidth = .5, s.font = c.string;
        var _Do2 = Do(r, f),
          m = _Do2.boxWidth,
          b = _Do2.boxHeight,
          x = _Do2.itemHeight,
          _ = this.isHorizontal(),
          y = this._computeTitleHeight();
        p = _ ? {
          x: n(a, this.left + u, this.right - i[0]),
          y: this.top + u + y,
          line: 0
        } : {
          x: this.left + u,
          y: n(a, this.top + y + u, this.bottom - e[0].height),
          line: 0
        }, bi(this.ctx, t.textDirection);
        var v = x + u;
        this.legendItems.forEach(function (w, M) {
          s.strokeStyle = w.fontColor || d, s.fillStyle = w.fontColor || d;
          var k = s.measureText(w.text).width,
            S = h.textAlign(w.textAlign || (w.textAlign = r.textAlign)),
            P = m + g + k;
          var D = p.x,
            C = p.y;
          h.setWidth(_this29.width), _ ? M > 0 && D + P + u > _this29.right && (C = p.y += v, p.line++, D = p.x = n(a, _this29.left + u, _this29.right - i[p.line])) : M > 0 && C + v > _this29.bottom && (D = p.x = D + e[p.line].width + u, p.line++, C = p.y = n(a, _this29.top + y + u, _this29.bottom - e[p.line].height));
          !function (t, e, i) {
            if (isNaN(m) || m <= 0 || isNaN(b) || b < 0) return;
            s.save();
            var n = Z(i.lineWidth, 1);
            if (s.fillStyle = Z(i.fillStyle, l), s.lineCap = Z(i.lineCap, "butt"), s.lineDashOffset = Z(i.lineDashOffset, 0), s.lineJoin = Z(i.lineJoin, "miter"), s.lineWidth = n, s.strokeStyle = Z(i.strokeStyle, l), s.setLineDash(Z(i.lineDash, [])), r.usePointStyle) {
              var _o34 = {
                  radius: m * Math.SQRT2 / 2,
                  pointStyle: i.pointStyle,
                  rotation: i.rotation,
                  borderWidth: n
                },
                _a21 = h.xPlus(t, m / 2);
              ye(s, _o34, _a21, e + g);
            } else {
              var _o35 = e + Math.max((f - b) / 2, 0),
                _a22 = h.leftForLtr(t, m),
                _r23 = ci(i.borderRadius);
              s.beginPath(), Object.values(_r23).some(function (t) {
                return 0 !== t;
              }) ? Ce(s, {
                x: _a22,
                y: _o35,
                w: m,
                h: b,
                radius: _r23
              }) : s.rect(_a22, _o35, m, b), s.fill(), 0 !== n && s.stroke();
            }
            s.restore();
          }(h.x(D), C, w), D = o(S, D + m + g, _ ? D + P : _this29.right, t.rtl), function (t, e, i) {
            Pe(s, i.text, t, e + x / 2, c, {
              strikethrough: i.hidden,
              textAlign: h.textAlign(i.textAlign)
            });
          }(h.x(D), C, w), _ ? p.x += P + u : p.y += v;
        }), xi(this.ctx, t.textDirection);
      }
    }, {
      key: "drawTitle",
      value: function drawTitle() {
        var t = this.options,
          e = t.title,
          i = ui(e.font),
          o = di(e.padding);
        if (!e.display) return;
        var a = mi(t.rtl, this.left, this.width),
          r = this.ctx,
          l = e.position,
          h = i.size / 2,
          c = o.top + h;
        var d,
          u = this.left,
          f = this.width;
        if (this.isHorizontal()) f = Math.max.apply(Math, _toConsumableArray(this.lineWidths)), d = this.top + c, u = n(t.align, u, this.right - f);else {
          var _e71 = this.columnSizes.reduce(function (t, e) {
            return Math.max(t, e.height);
          }, 0);
          d = c + n(t.align, this.top, this.bottom - _e71 - t.labels.padding - this._computeTitleHeight());
        }
        var g = n(l, u, u + f);
        r.textAlign = a.textAlign(s(l)), r.textBaseline = "middle", r.strokeStyle = e.color, r.fillStyle = e.color, r.font = i.string, Pe(r, e.text, g, d, i);
      }
    }, {
      key: "_computeTitleHeight",
      value: function _computeTitleHeight() {
        var t = this.options.title,
          e = ui(t.font),
          i = di(t.padding);
        return t.display ? e.lineHeight + i.height : 0;
      }
    }, {
      key: "_getLegendItemAt",
      value: function _getLegendItemAt(t, e) {
        var i, s, n;
        if (ee(t, this.left, this.right) && ee(e, this.top, this.bottom)) for (n = this.legendHitBoxes, i = 0; i < n.length; ++i) if (s = n[i], ee(t, s.left, s.left + s.width) && ee(e, s.top, s.top + s.height)) return this.legendItems[i];
        return null;
      }
    }, {
      key: "handleEvent",
      value: function handleEvent(t) {
        var e = this.options;
        if (!function (t, e) {
          if (("mousemove" === t || "mouseout" === t) && (e.onHover || e.onLeave)) return !0;
          if (e.onClick && ("click" === t || "mouseup" === t)) return !0;
          return !1;
        }(t.type, e)) return;
        var i = this._getLegendItemAt(t.x, t.y);
        if ("mousemove" === t.type || "mouseout" === t.type) {
          var _o36 = this._hoveredItem,
            _a23 = (n = i, null !== (s = _o36) && null !== n && s.datasetIndex === n.datasetIndex && s.index === n.index);
          _o36 && !_a23 && tt(e.onLeave, [t, _o36, this], this), this._hoveredItem = i, i && !_a23 && tt(e.onHover, [t, i, this], this);
        } else i && tt(e.onClick, [t, i, this], this);
        var s, n;
      }
    }]);
    return Co;
  }(Os);
  var Oo = {
    id: "legend",
    _element: Co,
    start: function start(t, e, i) {
      var s = t.legend = new Co({
        ctx: t.ctx,
        options: i,
        chart: t
      });
      Xi.configure(t, s, i), Xi.addBox(t, s);
    },
    stop: function stop(t) {
      Xi.removeBox(t, t.legend), delete t.legend;
    },
    beforeUpdate: function beforeUpdate(t, e, i) {
      var s = t.legend;
      Xi.configure(t, s, i), s.options = i;
    },
    afterUpdate: function afterUpdate(t) {
      var e = t.legend;
      e.buildLabels(), e.adjustHitBoxes();
    },
    afterEvent: function afterEvent(t, e) {
      e.replay || t.legend.handleEvent(e.event);
    },
    defaults: {
      display: !0,
      position: "top",
      align: "center",
      fullSize: !0,
      reverse: !1,
      weight: 1e3,
      onClick: function onClick(t, e, i) {
        var s = e.datasetIndex,
          n = i.chart;
        n.isDatasetVisible(s) ? (n.hide(s), e.hidden = !0) : (n.show(s), e.hidden = !1);
      },
      onHover: null,
      onLeave: null,
      labels: {
        color: function color(t) {
          return t.chart.options.color;
        },
        boxWidth: 40,
        padding: 10,
        generateLabels: function generateLabels(t) {
          var e = t.data.datasets,
            _t$legend$options$lab = t.legend.options.labels,
            i = _t$legend$options$lab.usePointStyle,
            s = _t$legend$options$lab.pointStyle,
            n = _t$legend$options$lab.textAlign,
            o = _t$legend$options$lab.color;
          return t._getSortedDatasetMetas().map(function (t) {
            var a = t.controller.getStyle(i ? 0 : void 0),
              r = di(a.borderWidth);
            return {
              text: e[t.index].label,
              fillStyle: a.backgroundColor,
              fontColor: o,
              hidden: !t.visible,
              lineCap: a.borderCapStyle,
              lineDash: a.borderDash,
              lineDashOffset: a.borderDashOffset,
              lineJoin: a.borderJoinStyle,
              lineWidth: (r.width + r.height) / 4,
              strokeStyle: a.borderColor,
              pointStyle: s || a.pointStyle,
              rotation: a.rotation,
              textAlign: n || a.textAlign,
              borderRadius: 0,
              datasetIndex: t.index
            };
          }, this);
        }
      },
      title: {
        color: function color(t) {
          return t.chart.options.color;
        },
        display: !1,
        position: "center",
        text: ""
      }
    },
    descriptors: {
      _scriptable: function _scriptable(t) {
        return !t.startsWith("on");
      },
      labels: {
        _scriptable: function _scriptable(t) {
          return !["generateLabels", "filter", "sort"].includes(t);
        }
      }
    }
  };
  var Ao = /*#__PURE__*/function (_Os7) {
    _inherits(Ao, _Os7);
    var _super17 = _createSuper(Ao);
    function Ao(t) {
      var _this30;
      _classCallCheck(this, Ao);
      _this30 = _super17.call(this), _this30.chart = t.chart, _this30.options = t.options, _this30.ctx = t.ctx, _this30._padding = void 0, _this30.top = void 0, _this30.bottom = void 0, _this30.left = void 0, _this30.right = void 0, _this30.width = void 0, _this30.height = void 0, _this30.position = void 0, _this30.weight = void 0, _this30.fullSize = void 0;
      return _this30;
    }
    _createClass(Ao, [{
      key: "update",
      value: function update(t, e) {
        var i = this.options;
        if (this.left = 0, this.top = 0, !i.display) return void (this.width = this.height = this.right = this.bottom = 0);
        this.width = this.right = t, this.height = this.bottom = e;
        var s = X(i.text) ? i.text.length : 1;
        this._padding = di(i.padding);
        var n = s * ui(i.font).lineHeight + this._padding.height;
        this.isHorizontal() ? this.height = n : this.width = n;
      }
    }, {
      key: "isHorizontal",
      value: function isHorizontal() {
        var t = this.options.position;
        return "top" === t || "bottom" === t;
      }
    }, {
      key: "_drawArgs",
      value: function _drawArgs(t) {
        var e = this.top,
          i = this.left,
          s = this.bottom,
          o = this.right,
          a = this.options,
          r = a.align;
        var l,
          h,
          c,
          d = 0;
        return this.isHorizontal() ? (h = n(r, i, o), c = e + t, l = o - i) : ("left" === a.position ? (h = i + t, c = n(r, s, e), d = -.5 * Ot) : (h = o - t, c = n(r, e, s), d = .5 * Ot), l = s - e), {
          titleX: h,
          titleY: c,
          maxWidth: l,
          rotation: d
        };
      }
    }, {
      key: "draw",
      value: function draw() {
        var t = this.ctx,
          e = this.options;
        if (!e.display) return;
        var i = ui(e.font),
          n = i.lineHeight / 2 + this._padding.top,
          _this$_drawArgs = this._drawArgs(n),
          o = _this$_drawArgs.titleX,
          a = _this$_drawArgs.titleY,
          r = _this$_drawArgs.maxWidth,
          l = _this$_drawArgs.rotation;
        Pe(t, e.text, 0, 0, i, {
          color: e.color,
          maxWidth: r,
          rotation: l,
          textAlign: s(e.align),
          textBaseline: "middle",
          translation: [o, a]
        });
      }
    }]);
    return Ao;
  }(Os);
  var To = {
    id: "title",
    _element: Ao,
    start: function start(t, e, i) {
      !function (t, e) {
        var i = new Ao({
          ctx: t.ctx,
          options: e,
          chart: t
        });
        Xi.configure(t, i, e), Xi.addBox(t, i), t.titleBlock = i;
      }(t, i);
    },
    stop: function stop(t) {
      var e = t.titleBlock;
      Xi.removeBox(t, e), delete t.titleBlock;
    },
    beforeUpdate: function beforeUpdate(t, e, i) {
      var s = t.titleBlock;
      Xi.configure(t, s, i), s.options = i;
    },
    defaults: {
      align: "center",
      display: !1,
      font: {
        weight: "bold"
      },
      fullSize: !0,
      padding: 10,
      position: "top",
      text: "",
      weight: 2e3
    },
    defaultRoutes: {
      color: "color"
    },
    descriptors: {
      _scriptable: !0,
      _indexable: !1
    }
  };
  var Lo = new WeakMap();
  var Ro = {
    id: "subtitle",
    start: function start(t, e, i) {
      var s = new Ao({
        ctx: t.ctx,
        options: i,
        chart: t
      });
      Xi.configure(t, s, i), Xi.addBox(t, s), Lo.set(t, s);
    },
    stop: function stop(t) {
      Xi.removeBox(t, Lo.get(t)), Lo["delete"](t);
    },
    beforeUpdate: function beforeUpdate(t, e, i) {
      var s = Lo.get(t);
      Xi.configure(t, s, i), s.options = i;
    },
    defaults: {
      align: "center",
      display: !1,
      font: {
        weight: "normal"
      },
      fullSize: !0,
      padding: 0,
      position: "top",
      text: "",
      weight: 1500
    },
    defaultRoutes: {
      color: "color"
    },
    descriptors: {
      _scriptable: !0,
      _indexable: !1
    }
  };
  var Eo = {
    average: function average(t) {
      if (!t.length) return !1;
      var e,
        i,
        s = 0,
        n = 0,
        o = 0;
      for (e = 0, i = t.length; e < i; ++e) {
        var _i59 = t[e].element;
        if (_i59 && _i59.hasValue()) {
          var _t67 = _i59.tooltipPosition();
          s += _t67.x, n += _t67.y, ++o;
        }
      }
      return {
        x: s / o,
        y: n / o
      };
    },
    nearest: function nearest(t, e) {
      if (!t.length) return !1;
      var i,
        s,
        n,
        o = e.x,
        a = e.y,
        r = Number.POSITIVE_INFINITY;
      for (i = 0, s = t.length; i < s; ++i) {
        var _s48 = t[i].element;
        if (_s48 && _s48.hasValue()) {
          var _t68 = Kt(e, _s48.getCenterPoint());
          _t68 < r && (r = _t68, n = _s48);
        }
      }
      if (n) {
        var _t69 = n.tooltipPosition();
        o = _t69.x, a = _t69.y;
      }
      return {
        x: o,
        y: a
      };
    }
  };
  function Io(t, e) {
    return e && (X(e) ? Array.prototype.push.apply(t, e) : t.push(e)), t;
  }
  function zo(t) {
    return ("string" == typeof t || t instanceof String) && t.indexOf("\n") > -1 ? t.split("\n") : t;
  }
  function Fo(t, e) {
    var i = e.element,
      s = e.datasetIndex,
      n = e.index,
      o = t.getDatasetMeta(s).controller,
      _o$getLabelAndValue = o.getLabelAndValue(n),
      a = _o$getLabelAndValue.label,
      r = _o$getLabelAndValue.value;
    return {
      chart: t,
      label: a,
      parsed: o.getParsed(n),
      raw: t.data.datasets[s].data[n],
      formattedValue: r,
      dataset: o.getDataset(),
      dataIndex: n,
      datasetIndex: s,
      element: i
    };
  }
  function Bo(t, e) {
    var i = t.chart.ctx,
      s = t.body,
      n = t.footer,
      o = t.title,
      a = e.boxWidth,
      r = e.boxHeight,
      l = ui(e.bodyFont),
      h = ui(e.titleFont),
      c = ui(e.footerFont),
      d = o.length,
      u = n.length,
      f = s.length,
      g = di(e.padding);
    var p = g.height,
      m = 0,
      b = s.reduce(function (t, e) {
        return t + e.before.length + e.lines.length + e.after.length;
      }, 0);
    if (b += t.beforeBody.length + t.afterBody.length, d && (p += d * h.lineHeight + (d - 1) * e.titleSpacing + e.titleMarginBottom), b) {
      p += f * (e.displayColors ? Math.max(r, l.lineHeight) : l.lineHeight) + (b - f) * l.lineHeight + (b - 1) * e.bodySpacing;
    }
    u && (p += e.footerMarginTop + u * c.lineHeight + (u - 1) * e.footerSpacing);
    var x = 0;
    var _ = function _(t) {
      m = Math.max(m, i.measureText(t).width + x);
    };
    return i.save(), i.font = h.string, et(t.title, _), i.font = l.string, et(t.beforeBody.concat(t.afterBody), _), x = e.displayColors ? a + 2 + e.boxPadding : 0, et(s, function (t) {
      et(t.before, _), et(t.lines, _), et(t.after, _);
    }), x = 0, i.font = c.string, et(t.footer, _), i.restore(), m += g.width, {
      width: m,
      height: p
    };
  }
  function Vo(t, e, i, s) {
    var n = i.x,
      o = i.width,
      a = t.width,
      _t$chartArea = t.chartArea,
      r = _t$chartArea.left,
      l = _t$chartArea.right;
    var h = "center";
    return "center" === s ? h = n <= (r + l) / 2 ? "left" : "right" : n <= o / 2 ? h = "left" : n >= a - o / 2 && (h = "right"), function (t, e, i, s) {
      var n = s.x,
        o = s.width,
        a = i.caretSize + i.caretPadding;
      return "left" === t && n + o + a > e.width || "right" === t && n - o - a < 0 || void 0;
    }(h, t, e, i) && (h = "center"), h;
  }
  function No(t, e, i) {
    var s = i.yAlign || e.yAlign || function (t, e) {
      var i = e.y,
        s = e.height;
      return i < s / 2 ? "top" : i > t.height - s / 2 ? "bottom" : "center";
    }(t, i);
    return {
      xAlign: i.xAlign || e.xAlign || Vo(t, e, i, s),
      yAlign: s
    };
  }
  function Wo(t, e, i, s) {
    var n = t.caretSize,
      o = t.caretPadding,
      a = t.cornerRadius,
      r = i.xAlign,
      l = i.yAlign,
      h = n + o,
      _ci = ci(a),
      c = _ci.topLeft,
      d = _ci.topRight,
      u = _ci.bottomLeft,
      f = _ci.bottomRight;
    var g = function (t, e) {
      var i = t.x,
        s = t.width;
      return "right" === e ? i -= s : "center" === e && (i -= s / 2), i;
    }(e, r);
    var p = function (t, e, i) {
      var s = t.y,
        n = t.height;
      return "top" === e ? s += i : s -= "bottom" === e ? n + i : n / 2, s;
    }(e, l, h);
    return "center" === l ? "left" === r ? g += h : "right" === r && (g -= h) : "left" === r ? g -= Math.max(c, u) + n : "right" === r && (g += Math.max(d, f) + n), {
      x: Qt(g, 0, s.width - e.width),
      y: Qt(p, 0, s.height - e.height)
    };
  }
  function Ho(t, e, i) {
    var s = di(i.padding);
    return "center" === e ? t.x + t.width / 2 : "right" === e ? t.x + t.width - s.right : t.x + s.left;
  }
  function jo(t) {
    return Io([], zo(t));
  }
  function $o(t, e) {
    var i = e && e.dataset && e.dataset.tooltip && e.dataset.tooltip.callbacks;
    return i ? t.override(i) : t;
  }
  var Yo = /*#__PURE__*/function (_Os8) {
    _inherits(Yo, _Os8);
    var _super18 = _createSuper(Yo);
    function Yo(t) {
      var _this31;
      _classCallCheck(this, Yo);
      _this31 = _super18.call(this), _this31.opacity = 0, _this31._active = [], _this31._eventPosition = void 0, _this31._size = void 0, _this31._cachedAnimations = void 0, _this31._tooltipItems = [], _this31.$animations = void 0, _this31.$context = void 0, _this31.chart = t.chart || t._chart, _this31._chart = _this31.chart, _this31.options = t.options, _this31.dataPoints = void 0, _this31.title = void 0, _this31.beforeBody = void 0, _this31.body = void 0, _this31.afterBody = void 0, _this31.footer = void 0, _this31.xAlign = void 0, _this31.yAlign = void 0, _this31.x = void 0, _this31.y = void 0, _this31.height = void 0, _this31.width = void 0, _this31.caretX = void 0, _this31.caretY = void 0, _this31.labelColors = void 0, _this31.labelPointStyles = void 0, _this31.labelTextColors = void 0;
      return _this31;
    }
    _createClass(Yo, [{
      key: "initialize",
      value: function initialize(t) {
        this.options = t, this._cachedAnimations = void 0, this.$context = void 0;
      }
    }, {
      key: "_resolveAnimations",
      value: function _resolveAnimations() {
        var t = this._cachedAnimations;
        if (t) return t;
        var e = this.chart,
          i = this.options.setContext(this.getContext()),
          s = i.enabled && e.options.animation && i.animations,
          n = new ms(this.chart, s);
        return s._cacheable && (this._cachedAnimations = Object.freeze(n)), n;
      }
    }, {
      key: "getContext",
      value: function getContext() {
        return this.$context || (this.$context = (t = this.chart.getContext(), e = this, i = this._tooltipItems, pi(t, {
          tooltip: e,
          tooltipItems: i,
          type: "tooltip"
        })));
        var t, e, i;
      }
    }, {
      key: "getTitle",
      value: function getTitle(t, e) {
        var i = e.callbacks,
          s = i.beforeTitle.apply(this, [t]),
          n = i.title.apply(this, [t]),
          o = i.afterTitle.apply(this, [t]);
        var a = [];
        return a = Io(a, zo(s)), a = Io(a, zo(n)), a = Io(a, zo(o)), a;
      }
    }, {
      key: "getBeforeBody",
      value: function getBeforeBody(t, e) {
        return jo(e.callbacks.beforeBody.apply(this, [t]));
      }
    }, {
      key: "getBody",
      value: function getBody(t, e) {
        var _this32 = this;
        var i = e.callbacks,
          s = [];
        return et(t, function (t) {
          var e = {
              before: [],
              lines: [],
              after: []
            },
            n = $o(i, t);
          Io(e.before, zo(n.beforeLabel.call(_this32, t))), Io(e.lines, n.label.call(_this32, t)), Io(e.after, zo(n.afterLabel.call(_this32, t))), s.push(e);
        }), s;
      }
    }, {
      key: "getAfterBody",
      value: function getAfterBody(t, e) {
        return jo(e.callbacks.afterBody.apply(this, [t]));
      }
    }, {
      key: "getFooter",
      value: function getFooter(t, e) {
        var i = e.callbacks,
          s = i.beforeFooter.apply(this, [t]),
          n = i.footer.apply(this, [t]),
          o = i.afterFooter.apply(this, [t]);
        var a = [];
        return a = Io(a, zo(s)), a = Io(a, zo(n)), a = Io(a, zo(o)), a;
      }
    }, {
      key: "_createItems",
      value: function _createItems(t) {
        var _this33 = this;
        var e = this._active,
          i = this.chart.data,
          s = [],
          n = [],
          o = [];
        var a,
          r,
          l = [];
        for (a = 0, r = e.length; a < r; ++a) l.push(Fo(this.chart, e[a]));
        return t.filter && (l = l.filter(function (e, s, n) {
          return t.filter(e, s, n, i);
        })), t.itemSort && (l = l.sort(function (e, s) {
          return t.itemSort(e, s, i);
        })), et(l, function (e) {
          var i = $o(t.callbacks, e);
          s.push(i.labelColor.call(_this33, e)), n.push(i.labelPointStyle.call(_this33, e)), o.push(i.labelTextColor.call(_this33, e));
        }), this.labelColors = s, this.labelPointStyles = n, this.labelTextColors = o, this.dataPoints = l, l;
      }
    }, {
      key: "update",
      value: function update(t, e) {
        var i = this.options.setContext(this.getContext()),
          s = this._active;
        var n,
          o = [];
        if (s.length) {
          var _t70 = Eo[i.position].call(this, s, this._eventPosition);
          o = this._createItems(i), this.title = this.getTitle(o, i), this.beforeBody = this.getBeforeBody(o, i), this.body = this.getBody(o, i), this.afterBody = this.getAfterBody(o, i), this.footer = this.getFooter(o, i);
          var _e72 = this._size = Bo(this, i),
            _a24 = Object.assign({}, _t70, _e72),
            _r24 = No(this.chart, i, _a24),
            _l24 = Wo(i, _a24, _r24, this.chart);
          this.xAlign = _r24.xAlign, this.yAlign = _r24.yAlign, n = {
            opacity: 1,
            x: _l24.x,
            y: _l24.y,
            width: _e72.width,
            height: _e72.height,
            caretX: _t70.x,
            caretY: _t70.y
          };
        } else 0 !== this.opacity && (n = {
          opacity: 0
        });
        this._tooltipItems = o, this.$context = void 0, n && this._resolveAnimations().update(this, n), t && i.external && i.external.call(this, {
          chart: this.chart,
          tooltip: this,
          replay: e
        });
      }
    }, {
      key: "drawCaret",
      value: function drawCaret(t, e, i, s) {
        var n = this.getCaretPosition(t, i, s);
        e.lineTo(n.x1, n.y1), e.lineTo(n.x2, n.y2), e.lineTo(n.x3, n.y3);
      }
    }, {
      key: "getCaretPosition",
      value: function getCaretPosition(t, e, i) {
        var s = this.xAlign,
          n = this.yAlign,
          o = i.caretSize,
          a = i.cornerRadius,
          _ci2 = ci(a),
          r = _ci2.topLeft,
          l = _ci2.topRight,
          h = _ci2.bottomLeft,
          c = _ci2.bottomRight,
          d = t.x,
          u = t.y,
          f = e.width,
          g = e.height;
        var p, m, b, x, _, y;
        return "center" === n ? (_ = u + g / 2, "left" === s ? (p = d, m = p - o, x = _ + o, y = _ - o) : (p = d + f, m = p + o, x = _ - o, y = _ + o), b = p) : (m = "left" === s ? d + Math.max(r, h) + o : "right" === s ? d + f - Math.max(l, c) - o : this.caretX, "top" === n ? (x = u, _ = x - o, p = m - o, b = m + o) : (x = u + g, _ = x + o, p = m + o, b = m - o), y = x), {
          x1: p,
          x2: m,
          x3: b,
          y1: x,
          y2: _,
          y3: y
        };
      }
    }, {
      key: "drawTitle",
      value: function drawTitle(t, e, i) {
        var s = this.title,
          n = s.length;
        var o, a, r;
        if (n) {
          var _l25 = mi(i.rtl, this.x, this.width);
          for (t.x = Ho(this, i.titleAlign, i), e.textAlign = _l25.textAlign(i.titleAlign), e.textBaseline = "middle", o = ui(i.titleFont), a = i.titleSpacing, e.fillStyle = i.titleColor, e.font = o.string, r = 0; r < n; ++r) e.fillText(s[r], _l25.x(t.x), t.y + o.lineHeight / 2), t.y += o.lineHeight + a, r + 1 === n && (t.y += i.titleMarginBottom - a);
        }
      }
    }, {
      key: "_drawColorBox",
      value: function _drawColorBox(t, e, i, s, n) {
        var o = this.labelColors[i],
          a = this.labelPointStyles[i],
          r = n.boxHeight,
          l = n.boxWidth,
          h = n.boxPadding,
          c = ui(n.bodyFont),
          d = Ho(this, "left", n),
          u = s.x(d),
          f = r < c.lineHeight ? (c.lineHeight - r) / 2 : 0,
          g = e.y + f;
        if (n.usePointStyle) {
          var _e73 = {
              radius: Math.min(l, r) / 2,
              pointStyle: a.pointStyle,
              rotation: a.rotation,
              borderWidth: 1
            },
            _i60 = s.leftForLtr(u, l) + l / 2,
            _h22 = g + r / 2;
          t.strokeStyle = n.multiKeyBackground, t.fillStyle = n.multiKeyBackground, ye(t, _e73, _i60, _h22), t.strokeStyle = o.borderColor, t.fillStyle = o.backgroundColor, ye(t, _e73, _i60, _h22);
        } else {
          t.lineWidth = o.borderWidth || 1, t.strokeStyle = o.borderColor, t.setLineDash(o.borderDash || []), t.lineDashOffset = o.borderDashOffset || 0;
          var _e74 = s.leftForLtr(u, l - h),
            _i61 = s.leftForLtr(s.xPlus(u, 1), l - h - 2),
            _a25 = ci(o.borderRadius);
          Object.values(_a25).some(function (t) {
            return 0 !== t;
          }) ? (t.beginPath(), t.fillStyle = n.multiKeyBackground, Ce(t, {
            x: _e74,
            y: g,
            w: l,
            h: r,
            radius: _a25
          }), t.fill(), t.stroke(), t.fillStyle = o.backgroundColor, t.beginPath(), Ce(t, {
            x: _i61,
            y: g + 1,
            w: l - 2,
            h: r - 2,
            radius: _a25
          }), t.fill()) : (t.fillStyle = n.multiKeyBackground, t.fillRect(_e74, g, l, r), t.strokeRect(_e74, g, l, r), t.fillStyle = o.backgroundColor, t.fillRect(_i61, g + 1, l - 2, r - 2));
        }
        t.fillStyle = this.labelTextColors[i];
      }
    }, {
      key: "drawBody",
      value: function drawBody(t, e, i) {
        var s = this.body,
          n = i.bodySpacing,
          o = i.bodyAlign,
          a = i.displayColors,
          r = i.boxHeight,
          l = i.boxWidth,
          h = i.boxPadding,
          c = ui(i.bodyFont);
        var d = c.lineHeight,
          u = 0;
        var f = mi(i.rtl, this.x, this.width),
          g = function g(i) {
            e.fillText(i, f.x(t.x + u), t.y + d / 2), t.y += d + n;
          },
          p = f.textAlign(o);
        var m, b, x, _, y, v, w;
        for (e.textAlign = o, e.textBaseline = "middle", e.font = c.string, t.x = Ho(this, p, i), e.fillStyle = i.bodyColor, et(this.beforeBody, g), u = a && "right" !== p ? "center" === o ? l / 2 + h : l + 2 + h : 0, _ = 0, v = s.length; _ < v; ++_) {
          for (m = s[_], b = this.labelTextColors[_], e.fillStyle = b, et(m.before, g), x = m.lines, a && x.length && (this._drawColorBox(e, t, _, f, i), d = Math.max(c.lineHeight, r)), y = 0, w = x.length; y < w; ++y) g(x[y]), d = c.lineHeight;
          et(m.after, g);
        }
        u = 0, d = c.lineHeight, et(this.afterBody, g), t.y -= n;
      }
    }, {
      key: "drawFooter",
      value: function drawFooter(t, e, i) {
        var s = this.footer,
          n = s.length;
        var o, a;
        if (n) {
          var _r25 = mi(i.rtl, this.x, this.width);
          for (t.x = Ho(this, i.footerAlign, i), t.y += i.footerMarginTop, e.textAlign = _r25.textAlign(i.footerAlign), e.textBaseline = "middle", o = ui(i.footerFont), e.fillStyle = i.footerColor, e.font = o.string, a = 0; a < n; ++a) e.fillText(s[a], _r25.x(t.x), t.y + o.lineHeight / 2), t.y += o.lineHeight + i.footerSpacing;
        }
      }
    }, {
      key: "drawBackground",
      value: function drawBackground(t, e, i, s) {
        var n = this.xAlign,
          o = this.yAlign,
          a = t.x,
          r = t.y,
          l = i.width,
          h = i.height,
          _ci3 = ci(s.cornerRadius),
          c = _ci3.topLeft,
          d = _ci3.topRight,
          u = _ci3.bottomLeft,
          f = _ci3.bottomRight;
        e.fillStyle = s.backgroundColor, e.strokeStyle = s.borderColor, e.lineWidth = s.borderWidth, e.beginPath(), e.moveTo(a + c, r), "top" === o && this.drawCaret(t, e, i, s), e.lineTo(a + l - d, r), e.quadraticCurveTo(a + l, r, a + l, r + d), "center" === o && "right" === n && this.drawCaret(t, e, i, s), e.lineTo(a + l, r + h - f), e.quadraticCurveTo(a + l, r + h, a + l - f, r + h), "bottom" === o && this.drawCaret(t, e, i, s), e.lineTo(a + u, r + h), e.quadraticCurveTo(a, r + h, a, r + h - u), "center" === o && "left" === n && this.drawCaret(t, e, i, s), e.lineTo(a, r + c), e.quadraticCurveTo(a, r, a + c, r), e.closePath(), e.fill(), s.borderWidth > 0 && e.stroke();
      }
    }, {
      key: "_updateAnimationTarget",
      value: function _updateAnimationTarget(t) {
        var e = this.chart,
          i = this.$animations,
          s = i && i.x,
          n = i && i.y;
        if (s || n) {
          var _i62 = Eo[t.position].call(this, this._active, this._eventPosition);
          if (!_i62) return;
          var _o37 = this._size = Bo(this, t),
            _a26 = Object.assign({}, _i62, this._size),
            _r26 = No(e, t, _a26),
            _l26 = Wo(t, _a26, _r26, e);
          s._to === _l26.x && n._to === _l26.y || (this.xAlign = _r26.xAlign, this.yAlign = _r26.yAlign, this.width = _o37.width, this.height = _o37.height, this.caretX = _i62.x, this.caretY = _i62.y, this._resolveAnimations().update(this, _l26));
        }
      }
    }, {
      key: "_willRender",
      value: function _willRender() {
        return !!this.opacity;
      }
    }, {
      key: "draw",
      value: function draw(t) {
        var e = this.options.setContext(this.getContext());
        var i = this.opacity;
        if (!i) return;
        this._updateAnimationTarget(e);
        var s = {
            width: this.width,
            height: this.height
          },
          n = {
            x: this.x,
            y: this.y
          };
        i = Math.abs(i) < .001 ? 0 : i;
        var o = di(e.padding),
          a = this.title.length || this.beforeBody.length || this.body.length || this.afterBody.length || this.footer.length;
        e.enabled && a && (t.save(), t.globalAlpha = i, this.drawBackground(n, t, s, e), bi(t, e.textDirection), n.y += o.top, this.drawTitle(n, t, e), this.drawBody(n, t, e), this.drawFooter(n, t, e), xi(t, e.textDirection), t.restore());
      }
    }, {
      key: "getActiveElements",
      value: function getActiveElements() {
        return this._active || [];
      }
    }, {
      key: "setActiveElements",
      value: function setActiveElements(t, e) {
        var _this34 = this;
        var i = this._active,
          s = t.map(function (_ref19) {
            var t = _ref19.datasetIndex,
              e = _ref19.index;
            var i = _this34.chart.getDatasetMeta(t);
            if (!i) throw new Error("Cannot find a dataset at index " + t);
            return {
              datasetIndex: t,
              element: i.data[e],
              index: e
            };
          }),
          n = !it(i, s),
          o = this._positionChanged(s, e);
        (n || o) && (this._active = s, this._eventPosition = e, this._ignoreReplayEvents = !0, this.update(!0));
      }
    }, {
      key: "handleEvent",
      value: function handleEvent(t, e) {
        var i = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : !0;
        if (e && this._ignoreReplayEvents) return !1;
        this._ignoreReplayEvents = !1;
        var s = this.options,
          n = this._active || [],
          o = this._getActiveElements(t, n, e, i),
          a = this._positionChanged(o, t),
          r = e || !it(o, n) || a;
        return r && (this._active = o, (s.enabled || s.external) && (this._eventPosition = {
          x: t.x,
          y: t.y
        }, this.update(!0, e))), r;
      }
    }, {
      key: "_getActiveElements",
      value: function _getActiveElements(t, e, i, s) {
        var n = this.options;
        if ("mouseout" === t.type) return [];
        if (!s) return e;
        var o = this.chart.getElementsAtEventForMode(t, n.mode, n, i);
        return n.reverse && o.reverse(), o;
      }
    }, {
      key: "_positionChanged",
      value: function _positionChanged(t, e) {
        var i = this.caretX,
          s = this.caretY,
          n = this.options,
          o = Eo[n.position].call(this, t, e);
        return !1 !== o && (i !== o.x || s !== o.y);
      }
    }]);
    return Yo;
  }(Os);
  Yo.positioners = Eo;
  var Uo = {
      id: "tooltip",
      _element: Yo,
      positioners: Eo,
      afterInit: function afterInit(t, e, i) {
        i && (t.tooltip = new Yo({
          chart: t,
          options: i
        }));
      },
      beforeUpdate: function beforeUpdate(t, e, i) {
        t.tooltip && t.tooltip.initialize(i);
      },
      reset: function reset(t, e, i) {
        t.tooltip && t.tooltip.initialize(i);
      },
      afterDraw: function afterDraw(t) {
        var e = t.tooltip;
        if (e && e._willRender()) {
          var _i63 = {
            tooltip: e
          };
          if (!1 === t.notifyPlugins("beforeTooltipDraw", _i63)) return;
          e.draw(t.ctx), t.notifyPlugins("afterTooltipDraw", _i63);
        }
      },
      afterEvent: function afterEvent(t, e) {
        if (t.tooltip) {
          var _i64 = e.replay;
          t.tooltip.handleEvent(e.event, _i64, e.inChartArea) && (e.changed = !0);
        }
      },
      defaults: {
        enabled: !0,
        external: null,
        position: "average",
        backgroundColor: "rgba(0,0,0,0.8)",
        titleColor: "#fff",
        titleFont: {
          weight: "bold"
        },
        titleSpacing: 2,
        titleMarginBottom: 6,
        titleAlign: "left",
        bodyColor: "#fff",
        bodySpacing: 2,
        bodyFont: {},
        bodyAlign: "left",
        footerColor: "#fff",
        footerSpacing: 2,
        footerMarginTop: 6,
        footerFont: {
          weight: "bold"
        },
        footerAlign: "left",
        padding: 6,
        caretPadding: 2,
        caretSize: 5,
        cornerRadius: 6,
        boxHeight: function boxHeight(t, e) {
          return e.bodyFont.size;
        },
        boxWidth: function boxWidth(t, e) {
          return e.bodyFont.size;
        },
        multiKeyBackground: "#fff",
        displayColors: !0,
        boxPadding: 0,
        borderColor: "rgba(0,0,0,0)",
        borderWidth: 0,
        animation: {
          duration: 400,
          easing: "easeOutQuart"
        },
        animations: {
          numbers: {
            type: "number",
            properties: ["x", "y", "width", "height", "caretX", "caretY"]
          },
          opacity: {
            easing: "linear",
            duration: 200
          }
        },
        callbacks: {
          beforeTitle: $,
          title: function title(t) {
            if (t.length > 0) {
              var _e75 = t[0],
                _i65 = _e75.chart.data.labels,
                _s49 = _i65 ? _i65.length : 0;
              if (this && this.options && "dataset" === this.options.mode) return _e75.dataset.label || "";
              if (_e75.label) return _e75.label;
              if (_s49 > 0 && _e75.dataIndex < _s49) return _i65[_e75.dataIndex];
            }
            return "";
          },
          afterTitle: $,
          beforeBody: $,
          beforeLabel: $,
          label: function label(t) {
            if (this && this.options && "dataset" === this.options.mode) return t.label + ": " + t.formattedValue || t.formattedValue;
            var e = t.dataset.label || "";
            e && (e += ": ");
            var i = t.formattedValue;
            return U(i) || (e += i), e;
          },
          labelColor: function labelColor(t) {
            var e = t.chart.getDatasetMeta(t.datasetIndex).controller.getStyle(t.dataIndex);
            return {
              borderColor: e.borderColor,
              backgroundColor: e.backgroundColor,
              borderWidth: e.borderWidth,
              borderDash: e.borderDash,
              borderDashOffset: e.borderDashOffset,
              borderRadius: 0
            };
          },
          labelTextColor: function labelTextColor() {
            return this.options.bodyColor;
          },
          labelPointStyle: function labelPointStyle(t) {
            var e = t.chart.getDatasetMeta(t.datasetIndex).controller.getStyle(t.dataIndex);
            return {
              pointStyle: e.pointStyle,
              rotation: e.rotation
            };
          },
          afterLabel: $,
          afterBody: $,
          beforeFooter: $,
          footer: $,
          afterFooter: $
        }
      },
      defaultRoutes: {
        bodyFont: "font",
        footerFont: "font",
        titleFont: "font"
      },
      descriptors: {
        _scriptable: function _scriptable(t) {
          return "filter" !== t && "itemSort" !== t && "external" !== t;
        },
        _indexable: !1,
        callbacks: {
          _scriptable: !1,
          _indexable: !1
        },
        animation: {
          _fallback: !1
        },
        animations: {
          _fallback: "animation"
        }
      },
      additionalOptionScopes: ["interaction"]
    },
    Xo = Object.freeze({
      __proto__: null,
      Decimation: ho,
      Filler: Po,
      Legend: Oo,
      SubTitle: Ro,
      Title: To,
      Tooltip: Uo
    });
  function qo(t, e, i, s) {
    var n = t.indexOf(e);
    if (-1 === n) return function (t, e, i, s) {
      return "string" == typeof e ? (i = t.push(e) - 1, s.unshift({
        index: i,
        label: e
      })) : isNaN(e) && (i = null), i;
    }(t, e, i, s);
    return n !== t.lastIndexOf(e) ? i : n;
  }
  var Ko = /*#__PURE__*/function (_Ns) {
    _inherits(Ko, _Ns);
    var _super19 = _createSuper(Ko);
    function Ko(t) {
      var _this35;
      _classCallCheck(this, Ko);
      _this35 = _super19.call(this, t), _this35._startValue = void 0, _this35._valueRange = 0, _this35._addedLabels = [];
      return _this35;
    }
    _createClass(Ko, [{
      key: "init",
      value: function init(t) {
        var e = this._addedLabels;
        if (e.length) {
          var _t71 = this.getLabels();
          var _iterator31 = _createForOfIteratorHelper(e),
            _step31;
          try {
            for (_iterator31.s(); !(_step31 = _iterator31.n()).done;) {
              var _step31$value = _step31.value,
                _i66 = _step31$value.index,
                _s50 = _step31$value.label;
              _t71[_i66] === _s50 && _t71.splice(_i66, 1);
            }
          } catch (err) {
            _iterator31.e(err);
          } finally {
            _iterator31.f();
          }
          this._addedLabels = [];
        }
        _get2(_getPrototypeOf(Ko.prototype), "init", this).call(this, t);
      }
    }, {
      key: "parse",
      value: function parse(t, e) {
        if (U(t)) return null;
        var i = this.getLabels();
        return function (t, e) {
          return null === t ? null : Qt(Math.round(t), 0, e);
        }(e = isFinite(e) && i[e] === t ? e : qo(i, t, Z(e, t), this._addedLabels), i.length - 1);
      }
    }, {
      key: "determineDataLimits",
      value: function determineDataLimits() {
        var _this$getUserBounds2 = this.getUserBounds(),
          t = _this$getUserBounds2.minDefined,
          e = _this$getUserBounds2.maxDefined;
        var _this$getMinMax = this.getMinMax(!0),
          i = _this$getMinMax.min,
          s = _this$getMinMax.max;
        "ticks" === this.options.bounds && (t || (i = 0), e || (s = this.getLabels().length - 1)), this.min = i, this.max = s;
      }
    }, {
      key: "buildTicks",
      value: function buildTicks() {
        var t = this.min,
          e = this.max,
          i = this.options.offset,
          s = [];
        var n = this.getLabels();
        n = 0 === t && e === n.length - 1 ? n : n.slice(t, e + 1), this._valueRange = Math.max(n.length - (i ? 0 : 1), 1), this._startValue = this.min - (i ? .5 : 0);
        for (var _i67 = t; _i67 <= e; _i67++) s.push({
          value: _i67
        });
        return s;
      }
    }, {
      key: "getLabelForValue",
      value: function getLabelForValue(t) {
        var e = this.getLabels();
        return t >= 0 && t < e.length ? e[t] : t;
      }
    }, {
      key: "configure",
      value: function configure() {
        _get2(_getPrototypeOf(Ko.prototype), "configure", this).call(this), this.isHorizontal() || (this._reversePixels = !this._reversePixels);
      }
    }, {
      key: "getPixelForValue",
      value: function getPixelForValue(t) {
        return "number" != typeof t && (t = this.parse(t)), null === t ? NaN : this.getPixelForDecimal((t - this._startValue) / this._valueRange);
      }
    }, {
      key: "getPixelForTick",
      value: function getPixelForTick(t) {
        var e = this.ticks;
        return t < 0 || t > e.length - 1 ? null : this.getPixelForValue(e[t].value);
      }
    }, {
      key: "getValueForPixel",
      value: function getValueForPixel(t) {
        return Math.round(this._startValue + this.getDecimalForPixel(t) * this._valueRange);
      }
    }, {
      key: "getBasePixel",
      value: function getBasePixel() {
        return this.bottom;
      }
    }]);
    return Ko;
  }(Ns);
  function Go(t, e, _ref20) {
    var i = _ref20.horizontal,
      s = _ref20.minRotation;
    var n = Yt(s),
      o = (i ? Math.sin(n) : Math.cos(n)) || .001,
      a = .75 * e * ("" + t).length;
    return Math.min(e / o, a);
  }
  Ko.id = "category", Ko.defaults = {
    ticks: {
      callback: Ko.prototype.getLabelForValue
    }
  };
  var Zo = /*#__PURE__*/function (_Ns2) {
    _inherits(Zo, _Ns2);
    var _super20 = _createSuper(Zo);
    function Zo(t) {
      var _this36;
      _classCallCheck(this, Zo);
      _this36 = _super20.call(this, t), _this36.start = void 0, _this36.end = void 0, _this36._startValue = void 0, _this36._endValue = void 0, _this36._valueRange = 0;
      return _this36;
    }
    _createClass(Zo, [{
      key: "parse",
      value: function parse(t, e) {
        return U(t) || ("number" == typeof t || t instanceof Number) && !isFinite(+t) ? null : +t;
      }
    }, {
      key: "handleTickRangeOptions",
      value: function handleTickRangeOptions() {
        var t = this.options.beginAtZero,
          _this$getUserBounds3 = this.getUserBounds(),
          e = _this$getUserBounds3.minDefined,
          i = _this$getUserBounds3.maxDefined;
        var s = this.min,
          n = this.max;
        var o = function o(t) {
            return s = e ? s : t;
          },
          a = function a(t) {
            return n = i ? n : t;
          };
        if (t) {
          var _t72 = Bt(s),
            _e76 = Bt(n);
          _t72 < 0 && _e76 < 0 ? a(0) : _t72 > 0 && _e76 > 0 && o(0);
        }
        if (s === n) {
          var _e77 = 1;
          (n >= Number.MAX_SAFE_INTEGER || s <= Number.MIN_SAFE_INTEGER) && (_e77 = Math.abs(.05 * n)), a(n + _e77), t || o(s - _e77);
        }
        this.min = s, this.max = n;
      }
    }, {
      key: "getTickLimit",
      value: function getTickLimit() {
        var t = this.options.ticks;
        var e,
          i = t.maxTicksLimit,
          s = t.stepSize;
        return s ? (e = Math.ceil(this.max / s) - Math.floor(this.min / s) + 1, e > 1e3 && (console.warn("scales.".concat(this.id, ".ticks.stepSize: ").concat(s, " would result generating up to ").concat(e, " ticks. Limiting to 1000.")), e = 1e3)) : (e = this.computeTickLimit(), i = i || 11), i && (e = Math.min(i, e)), e;
      }
    }, {
      key: "computeTickLimit",
      value: function computeTickLimit() {
        return Number.POSITIVE_INFINITY;
      }
    }, {
      key: "buildTicks",
      value: function buildTicks() {
        var t = this.options,
          e = t.ticks;
        var i = this.getTickLimit();
        i = Math.max(2, i);
        var s = function (t, e) {
          var i = [],
            s = t.bounds,
            n = t.step,
            o = t.min,
            a = t.max,
            r = t.precision,
            l = t.count,
            h = t.maxTicks,
            c = t.maxDigits,
            d = t.includeBounds,
            u = n || 1,
            f = h - 1,
            g = e.min,
            p = e.max,
            m = !U(o),
            b = !U(a),
            x = !U(l),
            _ = (p - g) / (c + 1);
          var y,
            v,
            w,
            M,
            k = Vt((p - g) / f / u) * u;
          if (k < 1e-14 && !m && !b) return [{
            value: g
          }, {
            value: p
          }];
          M = Math.ceil(p / k) - Math.floor(g / k), M > f && (k = Vt(M * k / f / u) * u), U(r) || (y = Math.pow(10, r), k = Math.ceil(k * y) / y), "ticks" === s ? (v = Math.floor(g / k) * k, w = Math.ceil(p / k) * k) : (v = g, w = p), m && b && n && jt((a - o) / n, k / 1e3) ? (M = Math.round(Math.min((a - o) / k, h)), k = (a - o) / M, v = o, w = a) : x ? (v = m ? o : v, w = b ? a : w, M = l - 1, k = (w - v) / M) : (M = (w - v) / k, M = Ht(M, Math.round(M), k / 1e3) ? Math.round(M) : Math.ceil(M));
          var S = Math.max(Xt(k), Xt(v));
          y = Math.pow(10, U(r) ? S : r), v = Math.round(v * y) / y, w = Math.round(w * y) / y;
          var P = 0;
          for (m && (d && v !== o ? (i.push({
            value: o
          }), v < o && P++, Ht(Math.round((v + P * k) * y) / y, o, Go(o, _, t)) && P++) : v < o && P++); P < M; ++P) i.push({
            value: Math.round((v + P * k) * y) / y
          });
          return b && d && w !== a ? i.length && Ht(i[i.length - 1].value, a, Go(a, _, t)) ? i[i.length - 1].value = a : i.push({
            value: a
          }) : b && w !== a || i.push({
            value: w
          }), i;
        }({
          maxTicks: i,
          bounds: t.bounds,
          min: t.min,
          max: t.max,
          precision: e.precision,
          step: e.stepSize,
          count: e.count,
          maxDigits: this._maxDigits(),
          horizontal: this.isHorizontal(),
          minRotation: e.minRotation || 0,
          includeBounds: !1 !== e.includeBounds
        }, this._range || this);
        return "ticks" === t.bounds && $t(s, this, "value"), t.reverse ? (s.reverse(), this.start = this.max, this.end = this.min) : (this.start = this.min, this.end = this.max), s;
      }
    }, {
      key: "configure",
      value: function configure() {
        var t = this.ticks;
        var e = this.min,
          i = this.max;
        if (_get2(_getPrototypeOf(Zo.prototype), "configure", this).call(this), this.options.offset && t.length) {
          var _s51 = (i - e) / Math.max(t.length - 1, 1) / 2;
          e -= _s51, i += _s51;
        }
        this._startValue = e, this._endValue = i, this._valueRange = i - e;
      }
    }, {
      key: "getLabelForValue",
      value: function getLabelForValue(t) {
        return ni(t, this.chart.options.locale, this.options.ticks.format);
      }
    }]);
    return Zo;
  }(Ns);
  var Jo = /*#__PURE__*/function (_Zo) {
    _inherits(Jo, _Zo);
    var _super21 = _createSuper(Jo);
    function Jo() {
      _classCallCheck(this, Jo);
      return _super21.apply(this, arguments);
    }
    _createClass(Jo, [{
      key: "determineDataLimits",
      value: function determineDataLimits() {
        var _this$getMinMax2 = this.getMinMax(!0),
          t = _this$getMinMax2.min,
          e = _this$getMinMax2.max;
        this.min = K(t) ? t : 0, this.max = K(e) ? e : 1, this.handleTickRangeOptions();
      }
    }, {
      key: "computeTickLimit",
      value: function computeTickLimit() {
        var t = this.isHorizontal(),
          e = t ? this.width : this.height,
          i = Yt(this.options.ticks.minRotation),
          s = (t ? Math.sin(i) : Math.cos(i)) || .001,
          n = this._resolveTickFontOptions(0);
        return Math.ceil(e / Math.min(40, n.lineHeight / s));
      }
    }, {
      key: "getPixelForValue",
      value: function getPixelForValue(t) {
        return null === t ? NaN : this.getPixelForDecimal((t - this._startValue) / this._valueRange);
      }
    }, {
      key: "getValueForPixel",
      value: function getValueForPixel(t) {
        return this._startValue + this.getDecimalForPixel(t) * this._valueRange;
      }
    }]);
    return Jo;
  }(Zo);
  function Qo(t) {
    return 1 === t / Math.pow(10, Math.floor(Ft(t)));
  }
  Jo.id = "linear", Jo.defaults = {
    ticks: {
      callback: Ts.formatters.numeric
    }
  };
  var ta = /*#__PURE__*/function (_Ns3) {
    _inherits(ta, _Ns3);
    var _super22 = _createSuper(ta);
    function ta(t) {
      var _this37;
      _classCallCheck(this, ta);
      _this37 = _super22.call(this, t), _this37.start = void 0, _this37.end = void 0, _this37._startValue = void 0, _this37._valueRange = 0;
      return _this37;
    }
    _createClass(ta, [{
      key: "parse",
      value: function parse(t, e) {
        var i = Zo.prototype.parse.apply(this, [t, e]);
        if (0 !== i) return K(i) && i > 0 ? i : null;
        this._zero = !0;
      }
    }, {
      key: "determineDataLimits",
      value: function determineDataLimits() {
        var _this$getMinMax3 = this.getMinMax(!0),
          t = _this$getMinMax3.min,
          e = _this$getMinMax3.max;
        this.min = K(t) ? Math.max(0, t) : null, this.max = K(e) ? Math.max(0, e) : null, this.options.beginAtZero && (this._zero = !0), this.handleTickRangeOptions();
      }
    }, {
      key: "handleTickRangeOptions",
      value: function handleTickRangeOptions() {
        var _this$getUserBounds4 = this.getUserBounds(),
          t = _this$getUserBounds4.minDefined,
          e = _this$getUserBounds4.maxDefined;
        var i = this.min,
          s = this.max;
        var n = function n(e) {
            return i = t ? i : e;
          },
          o = function o(t) {
            return s = e ? s : t;
          },
          a = function a(t, e) {
            return Math.pow(10, Math.floor(Ft(t)) + e);
          };
        i === s && (i <= 0 ? (n(1), o(10)) : (n(a(i, -1)), o(a(s, 1)))), i <= 0 && n(a(s, -1)), s <= 0 && o(a(i, 1)), this._zero && this.min !== this._suggestedMin && i === a(this.min, 0) && n(a(i, -1)), this.min = i, this.max = s;
      }
    }, {
      key: "buildTicks",
      value: function buildTicks() {
        var t = this.options,
          e = function (t, e) {
            var i = Math.floor(Ft(e.max)),
              s = Math.ceil(e.max / Math.pow(10, i)),
              n = [];
            var o = G(t.min, Math.pow(10, Math.floor(Ft(e.min)))),
              a = Math.floor(Ft(o)),
              r = Math.floor(o / Math.pow(10, a)),
              l = a < 0 ? Math.pow(10, Math.abs(a)) : 1;
            do {
              n.push({
                value: o,
                major: Qo(o)
              }), ++r, 10 === r && (r = 1, ++a, l = a >= 0 ? 1 : l), o = Math.round(r * Math.pow(10, a) * l) / l;
            } while (a < i || a === i && r < s);
            var h = G(t.max, o);
            return n.push({
              value: h,
              major: Qo(o)
            }), n;
          }({
            min: this._userMin,
            max: this._userMax
          }, this);
        return "ticks" === t.bounds && $t(e, this, "value"), t.reverse ? (e.reverse(), this.start = this.max, this.end = this.min) : (this.start = this.min, this.end = this.max), e;
      }
    }, {
      key: "getLabelForValue",
      value: function getLabelForValue(t) {
        return void 0 === t ? "0" : ni(t, this.chart.options.locale, this.options.ticks.format);
      }
    }, {
      key: "configure",
      value: function configure() {
        var t = this.min;
        _get2(_getPrototypeOf(ta.prototype), "configure", this).call(this), this._startValue = Ft(t), this._valueRange = Ft(this.max) - Ft(t);
      }
    }, {
      key: "getPixelForValue",
      value: function getPixelForValue(t) {
        return void 0 !== t && 0 !== t || (t = this.min), null === t || isNaN(t) ? NaN : this.getPixelForDecimal(t === this.min ? 0 : (Ft(t) - this._startValue) / this._valueRange);
      }
    }, {
      key: "getValueForPixel",
      value: function getValueForPixel(t) {
        var e = this.getDecimalForPixel(t);
        return Math.pow(10, this._startValue + e * this._valueRange);
      }
    }]);
    return ta;
  }(Ns);
  function ea(t) {
    var e = t.ticks;
    if (e.display && t.display) {
      var _t73 = di(e.backdropPadding);
      return Z(e.font && e.font.size, yt.font.size) + _t73.height;
    }
    return 0;
  }
  function ia(t, e, i, s, n) {
    return t === s || t === n ? {
      start: e - i / 2,
      end: e + i / 2
    } : t < s || t > n ? {
      start: e - i,
      end: e
    } : {
      start: e,
      end: e + i
    };
  }
  function sa(t) {
    var e = {
        l: t.left + t._padding.left,
        r: t.right - t._padding.right,
        t: t.top + t._padding.top,
        b: t.bottom - t._padding.bottom
      },
      i = Object.assign({}, e),
      s = [],
      n = [],
      o = t._pointLabels.length,
      a = t.options.pointLabels,
      r = a.centerPointLabels ? Ot / o : 0;
    for (var _d11 = 0; _d11 < o; _d11++) {
      var _o38 = a.setContext(t.getPointLabelContext(_d11));
      n[_d11] = _o38.padding;
      var _u8 = t.getPointPosition(_d11, t.drawingArea + n[_d11], r),
        _f7 = ui(_o38.font),
        _g5 = (l = t.ctx, h = _f7, c = X(c = t._pointLabels[_d11]) ? c : [c], {
          w: be(l, h.string, c),
          h: c.length * h.lineHeight
        });
      s[_d11] = _g5;
      var _p4 = Zt(t.getIndexAngle(_d11) + r),
        _m5 = Math.round(Ut(_p4));
      na(i, e, _p4, ia(_m5, _u8.x, _g5.w, 0, 180), ia(_m5, _u8.y, _g5.h, 90, 270));
    }
    var l, h, c;
    t.setCenterPoint(e.l - i.l, i.r - e.r, e.t - i.t, i.b - e.b), t._pointLabelItems = function (t, e, i) {
      var s = [],
        n = t._pointLabels.length,
        o = t.options,
        a = ea(o) / 2,
        r = t.drawingArea,
        l = o.pointLabels.centerPointLabels ? Ot / n : 0;
      for (var _o39 = 0; _o39 < n; _o39++) {
        var _n31 = t.getPointPosition(_o39, r + a + i[_o39], l),
          _h23 = Math.round(Ut(Zt(_n31.angle + Et))),
          _c14 = e[_o39],
          _d12 = ra(_n31.y, _c14.h, _h23),
          _u9 = oa(_h23),
          _f8 = aa(_n31.x, _c14.w, _u9);
        s.push({
          x: _n31.x,
          y: _d12,
          textAlign: _u9,
          left: _f8,
          top: _d12,
          right: _f8 + _c14.w,
          bottom: _d12 + _c14.h
        });
      }
      return s;
    }(t, s, n);
  }
  function na(t, e, i, s, n) {
    var o = Math.abs(Math.sin(i)),
      a = Math.abs(Math.cos(i));
    var r = 0,
      l = 0;
    s.start < e.l ? (r = (e.l - s.start) / o, t.l = Math.min(t.l, e.l - r)) : s.end > e.r && (r = (s.end - e.r) / o, t.r = Math.max(t.r, e.r + r)), n.start < e.t ? (l = (e.t - n.start) / a, t.t = Math.min(t.t, e.t - l)) : n.end > e.b && (l = (n.end - e.b) / a, t.b = Math.max(t.b, e.b + l));
  }
  function oa(t) {
    return 0 === t || 180 === t ? "center" : t < 180 ? "left" : "right";
  }
  function aa(t, e, i) {
    return "right" === i ? t -= e : "center" === i && (t -= e / 2), t;
  }
  function ra(t, e, i) {
    return 90 === i || 270 === i ? t -= e / 2 : (i > 270 || i < 90) && (t -= e), t;
  }
  function la(t, e, i, s) {
    var n = t.ctx;
    if (i) n.arc(t.xCenter, t.yCenter, e, 0, At);else {
      var _i68 = t.getPointPosition(0, e);
      n.moveTo(_i68.x, _i68.y);
      for (var _o40 = 1; _o40 < s; _o40++) _i68 = t.getPointPosition(_o40, e), n.lineTo(_i68.x, _i68.y);
    }
  }
  ta.id = "logarithmic", ta.defaults = {
    ticks: {
      callback: Ts.formatters.logarithmic,
      major: {
        enabled: !0
      }
    }
  };
  var ha = /*#__PURE__*/function (_Zo2) {
    _inherits(ha, _Zo2);
    var _super23 = _createSuper(ha);
    function ha(t) {
      var _this38;
      _classCallCheck(this, ha);
      _this38 = _super23.call(this, t), _this38.xCenter = void 0, _this38.yCenter = void 0, _this38.drawingArea = void 0, _this38._pointLabels = [], _this38._pointLabelItems = [];
      return _this38;
    }
    _createClass(ha, [{
      key: "setDimensions",
      value: function setDimensions() {
        var t = this._padding = di(ea(this.options) / 2),
          e = this.width = this.maxWidth - t.width,
          i = this.height = this.maxHeight - t.height;
        this.xCenter = Math.floor(this.left + e / 2 + t.left), this.yCenter = Math.floor(this.top + i / 2 + t.top), this.drawingArea = Math.floor(Math.min(e, i) / 2);
      }
    }, {
      key: "determineDataLimits",
      value: function determineDataLimits() {
        var _this$getMinMax4 = this.getMinMax(!1),
          t = _this$getMinMax4.min,
          e = _this$getMinMax4.max;
        this.min = K(t) && !isNaN(t) ? t : 0, this.max = K(e) && !isNaN(e) ? e : 0, this.handleTickRangeOptions();
      }
    }, {
      key: "computeTickLimit",
      value: function computeTickLimit() {
        return Math.ceil(this.drawingArea / ea(this.options));
      }
    }, {
      key: "generateTickLabels",
      value: function generateTickLabels(t) {
        var _this39 = this;
        Zo.prototype.generateTickLabels.call(this, t), this._pointLabels = this.getLabels().map(function (t, e) {
          var i = tt(_this39.options.pointLabels.callback, [t, e], _this39);
          return i || 0 === i ? i : "";
        }).filter(function (t, e) {
          return _this39.chart.getDataVisibility(e);
        });
      }
    }, {
      key: "fit",
      value: function fit() {
        var t = this.options;
        t.display && t.pointLabels.display ? sa(this) : this.setCenterPoint(0, 0, 0, 0);
      }
    }, {
      key: "setCenterPoint",
      value: function setCenterPoint(t, e, i, s) {
        this.xCenter += Math.floor((t - e) / 2), this.yCenter += Math.floor((i - s) / 2), this.drawingArea -= Math.min(this.drawingArea / 2, Math.max(t, e, i, s));
      }
    }, {
      key: "getIndexAngle",
      value: function getIndexAngle(t) {
        return Zt(t * (At / (this._pointLabels.length || 1)) + Yt(this.options.startAngle || 0));
      }
    }, {
      key: "getDistanceFromCenterForValue",
      value: function getDistanceFromCenterForValue(t) {
        if (U(t)) return NaN;
        var e = this.drawingArea / (this.max - this.min);
        return this.options.reverse ? (this.max - t) * e : (t - this.min) * e;
      }
    }, {
      key: "getValueForDistanceFromCenter",
      value: function getValueForDistanceFromCenter(t) {
        if (U(t)) return NaN;
        var e = t / (this.drawingArea / (this.max - this.min));
        return this.options.reverse ? this.max - e : this.min + e;
      }
    }, {
      key: "getPointLabelContext",
      value: function getPointLabelContext(t) {
        var e = this._pointLabels || [];
        if (t >= 0 && t < e.length) {
          var _i69 = e[t];
          return function (t, e, i) {
            return pi(t, {
              label: i,
              index: e,
              type: "pointLabel"
            });
          }(this.getContext(), t, _i69);
        }
      }
    }, {
      key: "getPointPosition",
      value: function getPointPosition(t, e) {
        var i = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 0;
        var s = this.getIndexAngle(t) - Et + i;
        return {
          x: Math.cos(s) * e + this.xCenter,
          y: Math.sin(s) * e + this.yCenter,
          angle: s
        };
      }
    }, {
      key: "getPointPositionForValue",
      value: function getPointPositionForValue(t, e) {
        return this.getPointPosition(t, this.getDistanceFromCenterForValue(e));
      }
    }, {
      key: "getBasePosition",
      value: function getBasePosition(t) {
        return this.getPointPositionForValue(t || 0, this.getBaseValue());
      }
    }, {
      key: "getPointLabelPosition",
      value: function getPointLabelPosition(t) {
        var _this$_pointLabelItem = this._pointLabelItems[t],
          e = _this$_pointLabelItem.left,
          i = _this$_pointLabelItem.top,
          s = _this$_pointLabelItem.right,
          n = _this$_pointLabelItem.bottom;
        return {
          left: e,
          top: i,
          right: s,
          bottom: n
        };
      }
    }, {
      key: "drawBackground",
      value: function drawBackground() {
        var _this$options14 = this.options,
          t = _this$options14.backgroundColor,
          e = _this$options14.grid.circular;
        if (t) {
          var _i70 = this.ctx;
          _i70.save(), _i70.beginPath(), la(this, this.getDistanceFromCenterForValue(this._endValue), e, this._pointLabels.length), _i70.closePath(), _i70.fillStyle = t, _i70.fill(), _i70.restore();
        }
      }
    }, {
      key: "drawGrid",
      value: function drawGrid() {
        var _this40 = this;
        var t = this.ctx,
          e = this.options,
          i = e.angleLines,
          s = e.grid,
          n = this._pointLabels.length;
        var o, a, r;
        if (e.pointLabels.display && function (t, e) {
          var i = t.ctx,
            s = t.options.pointLabels;
          for (var _n32 = e - 1; _n32 >= 0; _n32--) {
            var _e78 = s.setContext(t.getPointLabelContext(_n32)),
              _o41 = ui(_e78.font),
              _t$_pointLabelItems$_ = t._pointLabelItems[_n32],
              _a27 = _t$_pointLabelItems$_.x,
              _r27 = _t$_pointLabelItems$_.y,
              _l27 = _t$_pointLabelItems$_.textAlign,
              _h24 = _t$_pointLabelItems$_.left,
              _c15 = _t$_pointLabelItems$_.top,
              _d13 = _t$_pointLabelItems$_.right,
              _u10 = _t$_pointLabelItems$_.bottom,
              _f9 = _e78.backdropColor;
            if (!U(_f9)) {
              var _t74 = ci(_e78.borderRadius),
                _s52 = di(_e78.backdropPadding);
              i.fillStyle = _f9;
              var _n33 = _h24 - _s52.left,
                _o42 = _c15 - _s52.top,
                _a28 = _d13 - _h24 + _s52.width,
                _r28 = _u10 - _c15 + _s52.height;
              Object.values(_t74).some(function (t) {
                return 0 !== t;
              }) ? (i.beginPath(), Ce(i, {
                x: _n33,
                y: _o42,
                w: _a28,
                h: _r28,
                radius: _t74
              }), i.fill()) : i.fillRect(_n33, _o42, _a28, _r28);
            }
            Pe(i, t._pointLabels[_n32], _a27, _r27 + _o41.lineHeight / 2, _o41, {
              color: _e78.color,
              textAlign: _l27,
              textBaseline: "middle"
            });
          }
        }(this, n), s.display && this.ticks.forEach(function (t, e) {
          if (0 !== e) {
            a = _this40.getDistanceFromCenterForValue(t.value);
            !function (t, e, i, s) {
              var n = t.ctx,
                o = e.circular,
                a = e.color,
                r = e.lineWidth;
              !o && !s || !a || !r || i < 0 || (n.save(), n.strokeStyle = a, n.lineWidth = r, n.setLineDash(e.borderDash), n.lineDashOffset = e.borderDashOffset, n.beginPath(), la(t, i, o, s), n.closePath(), n.stroke(), n.restore());
            }(_this40, s.setContext(_this40.getContext(e - 1)), a, n);
          }
        }), i.display) {
          for (t.save(), o = n - 1; o >= 0; o--) {
            var _s53 = i.setContext(this.getPointLabelContext(o)),
              _n34 = _s53.color,
              _l28 = _s53.lineWidth;
            _l28 && _n34 && (t.lineWidth = _l28, t.strokeStyle = _n34, t.setLineDash(_s53.borderDash), t.lineDashOffset = _s53.borderDashOffset, a = this.getDistanceFromCenterForValue(e.ticks.reverse ? this.min : this.max), r = this.getPointPosition(o, a), t.beginPath(), t.moveTo(this.xCenter, this.yCenter), t.lineTo(r.x, r.y), t.stroke());
          }
          t.restore();
        }
      }
    }, {
      key: "drawBorder",
      value: function drawBorder() {}
    }, {
      key: "drawLabels",
      value: function drawLabels() {
        var _this41 = this;
        var t = this.ctx,
          e = this.options,
          i = e.ticks;
        if (!i.display) return;
        var s = this.getIndexAngle(0);
        var n, o;
        t.save(), t.translate(this.xCenter, this.yCenter), t.rotate(s), t.textAlign = "center", t.textBaseline = "middle", this.ticks.forEach(function (s, a) {
          if (0 === a && !e.reverse) return;
          var r = i.setContext(_this41.getContext(a)),
            l = ui(r.font);
          if (n = _this41.getDistanceFromCenterForValue(_this41.ticks[a].value), r.showLabelBackdrop) {
            t.font = l.string, o = t.measureText(s.label).width, t.fillStyle = r.backdropColor;
            var _e79 = di(r.backdropPadding);
            t.fillRect(-o / 2 - _e79.left, -n - l.size / 2 - _e79.top, o + _e79.width, l.size + _e79.height);
          }
          Pe(t, s.label, 0, -n, l, {
            color: r.color
          });
        }), t.restore();
      }
    }, {
      key: "drawTitle",
      value: function drawTitle() {}
    }]);
    return ha;
  }(Zo);
  ha.id = "radialLinear", ha.defaults = {
    display: !0,
    animate: !0,
    position: "chartArea",
    angleLines: {
      display: !0,
      lineWidth: 1,
      borderDash: [],
      borderDashOffset: 0
    },
    grid: {
      circular: !1
    },
    startAngle: 0,
    ticks: {
      showLabelBackdrop: !0,
      callback: Ts.formatters.numeric
    },
    pointLabels: {
      backdropColor: void 0,
      backdropPadding: 2,
      display: !0,
      font: {
        size: 10
      },
      callback: function callback(t) {
        return t;
      },
      padding: 5,
      centerPointLabels: !1
    }
  }, ha.defaultRoutes = {
    "angleLines.color": "borderColor",
    "pointLabels.color": "color",
    "ticks.color": "color"
  }, ha.descriptors = {
    angleLines: {
      _fallback: "grid"
    }
  };
  var ca = {
      millisecond: {
        common: !0,
        size: 1,
        steps: 1e3
      },
      second: {
        common: !0,
        size: 1e3,
        steps: 60
      },
      minute: {
        common: !0,
        size: 6e4,
        steps: 60
      },
      hour: {
        common: !0,
        size: 36e5,
        steps: 24
      },
      day: {
        common: !0,
        size: 864e5,
        steps: 30
      },
      week: {
        common: !1,
        size: 6048e5,
        steps: 4
      },
      month: {
        common: !0,
        size: 2628e6,
        steps: 12
      },
      quarter: {
        common: !1,
        size: 7884e6,
        steps: 4
      },
      year: {
        common: !0,
        size: 3154e7
      }
    },
    da = Object.keys(ca);
  function ua(t, e) {
    return t - e;
  }
  function fa(t, e) {
    if (U(e)) return null;
    var i = t._adapter,
      _t$_parseOpts = t._parseOpts,
      s = _t$_parseOpts.parser,
      n = _t$_parseOpts.round,
      o = _t$_parseOpts.isoWeekday;
    var a = e;
    return "function" == typeof s && (a = s(a)), K(a) || (a = "string" == typeof s ? i.parse(a, s) : i.parse(a)), null === a ? null : (n && (a = "week" !== n || !Wt(o) && !0 !== o ? i.startOf(a, n) : i.startOf(a, "isoWeek", o)), +a);
  }
  function ga(t, e, i, s) {
    var n = da.length;
    for (var _o43 = da.indexOf(t); _o43 < n - 1; ++_o43) {
      var _t75 = ca[da[_o43]],
        _n35 = _t75.steps ? _t75.steps : Number.MAX_SAFE_INTEGER;
      if (_t75.common && Math.ceil((i - e) / (_n35 * _t75.size)) <= s) return da[_o43];
    }
    return da[n - 1];
  }
  function pa(t, e, i) {
    if (i) {
      if (i.length) {
        var _vt = vt(i, e),
          _s54 = _vt.lo,
          _n36 = _vt.hi;
        t[i[_s54] >= e ? i[_s54] : i[_n36]] = !0;
      }
    } else t[e] = !0;
  }
  function ma(t, e, i) {
    var s = [],
      n = {},
      o = e.length;
    var a, r;
    for (a = 0; a < o; ++a) r = e[a], n[r] = a, s.push({
      value: r,
      major: !1
    });
    return 0 !== o && i ? function (t, e, i, s) {
      var n = t._adapter,
        o = +n.startOf(e[0].value, s),
        a = e[e.length - 1].value;
      var r, l;
      for (r = o; r <= a; r = +n.add(r, 1, s)) l = i[r], l >= 0 && (e[l].major = !0);
      return e;
    }(t, s, n, i) : s;
  }
  var ba = /*#__PURE__*/function (_Ns4) {
    _inherits(ba, _Ns4);
    var _super24 = _createSuper(ba);
    function ba(t) {
      var _this42;
      _classCallCheck(this, ba);
      _this42 = _super24.call(this, t), _this42._cache = {
        data: [],
        labels: [],
        all: []
      }, _this42._unit = "day", _this42._majorUnit = void 0, _this42._offsets = {}, _this42._normalized = !1, _this42._parseOpts = void 0;
      return _this42;
    }
    _createClass(ba, [{
      key: "init",
      value: function init(t, e) {
        var i = t.time || (t.time = {}),
          s = this._adapter = new xn._date(t.adapters.date);
        rt(i.displayFormats, s.formats()), this._parseOpts = {
          parser: i.parser,
          round: i.round,
          isoWeekday: i.isoWeekday
        }, _get2(_getPrototypeOf(ba.prototype), "init", this).call(this, t), this._normalized = e.normalized;
      }
    }, {
      key: "parse",
      value: function parse(t, e) {
        return void 0 === t ? null : fa(this, t);
      }
    }, {
      key: "beforeLayout",
      value: function beforeLayout() {
        _get2(_getPrototypeOf(ba.prototype), "beforeLayout", this).call(this), this._cache = {
          data: [],
          labels: [],
          all: []
        };
      }
    }, {
      key: "determineDataLimits",
      value: function determineDataLimits() {
        var t = this.options,
          e = this._adapter,
          i = t.time.unit || "day";
        var _this$getUserBounds5 = this.getUserBounds(),
          s = _this$getUserBounds5.min,
          n = _this$getUserBounds5.max,
          o = _this$getUserBounds5.minDefined,
          a = _this$getUserBounds5.maxDefined;
        function r(t) {
          o || isNaN(t.min) || (s = Math.min(s, t.min)), a || isNaN(t.max) || (n = Math.max(n, t.max));
        }
        o && a || (r(this._getLabelBounds()), "ticks" === t.bounds && "labels" === t.ticks.source || r(this.getMinMax(!1))), s = K(s) && !isNaN(s) ? s : +e.startOf(Date.now(), i), n = K(n) && !isNaN(n) ? n : +e.endOf(Date.now(), i) + 1, this.min = Math.min(s, n - 1), this.max = Math.max(s + 1, n);
      }
    }, {
      key: "_getLabelBounds",
      value: function _getLabelBounds() {
        var t = this.getLabelTimestamps();
        var e = Number.POSITIVE_INFINITY,
          i = Number.NEGATIVE_INFINITY;
        return t.length && (e = t[0], i = t[t.length - 1]), {
          min: e,
          max: i
        };
      }
    }, {
      key: "buildTicks",
      value: function buildTicks() {
        var t = this.options,
          e = t.time,
          i = t.ticks,
          s = "labels" === i.source ? this.getLabelTimestamps() : this._generate();
        "ticks" === t.bounds && s.length && (this.min = this._userMin || s[0], this.max = this._userMax || s[s.length - 1]);
        var n = this.min,
          o = kt(s, n, this.max);
        return this._unit = e.unit || (i.autoSkip ? ga(e.minUnit, this.min, this.max, this._getLabelCapacity(n)) : function (t, e, i, s, n) {
          for (var _o44 = da.length - 1; _o44 >= da.indexOf(i); _o44--) {
            var _i71 = da[_o44];
            if (ca[_i71].common && t._adapter.diff(n, s, _i71) >= e - 1) return _i71;
          }
          return da[i ? da.indexOf(i) : 0];
        }(this, o.length, e.minUnit, this.min, this.max)), this._majorUnit = i.major.enabled && "year" !== this._unit ? function (t) {
          for (var _e80 = da.indexOf(t) + 1, _i72 = da.length; _e80 < _i72; ++_e80) if (ca[da[_e80]].common) return da[_e80];
        }(this._unit) : void 0, this.initOffsets(s), t.reverse && o.reverse(), ma(this, o, this._majorUnit);
      }
    }, {
      key: "afterAutoSkip",
      value: function afterAutoSkip() {
        this.options.offsetAfterAutoskip && this.initOffsets(this.ticks.map(function (t) {
          return +t.value;
        }));
      }
    }, {
      key: "initOffsets",
      value: function initOffsets(t) {
        var e,
          i,
          s = 0,
          n = 0;
        this.options.offset && t.length && (e = this.getDecimalForValue(t[0]), s = 1 === t.length ? 1 - e : (this.getDecimalForValue(t[1]) - e) / 2, i = this.getDecimalForValue(t[t.length - 1]), n = 1 === t.length ? i : (i - this.getDecimalForValue(t[t.length - 2])) / 2);
        var o = t.length < 3 ? .5 : .25;
        s = Qt(s, 0, o), n = Qt(n, 0, o), this._offsets = {
          start: s,
          end: n,
          factor: 1 / (s + 1 + n)
        };
      }
    }, {
      key: "_generate",
      value: function _generate() {
        var t = this._adapter,
          e = this.min,
          i = this.max,
          s = this.options,
          n = s.time,
          o = n.unit || ga(n.minUnit, e, i, this._getLabelCapacity(e)),
          a = Z(n.stepSize, 1),
          r = "week" === o && n.isoWeekday,
          l = Wt(r) || !0 === r,
          h = {};
        var c,
          d,
          u = e;
        if (l && (u = +t.startOf(u, "isoWeek", r)), u = +t.startOf(u, l ? "day" : o), t.diff(i, e, o) > 1e5 * a) throw new Error(e + " and " + i + " are too far apart with stepSize of " + a + " " + o);
        var f = "data" === s.ticks.source && this.getDataTimestamps();
        for (c = u, d = 0; c < i; c = +t.add(c, a, o), d++) pa(h, c, f);
        return c !== i && "ticks" !== s.bounds && 1 !== d || pa(h, c, f), Object.keys(h).sort(function (t, e) {
          return t - e;
        }).map(function (t) {
          return +t;
        });
      }
    }, {
      key: "getLabelForValue",
      value: function getLabelForValue(t) {
        var e = this._adapter,
          i = this.options.time;
        return i.tooltipFormat ? e.format(t, i.tooltipFormat) : e.format(t, i.displayFormats.datetime);
      }
    }, {
      key: "_tickFormatFunction",
      value: function _tickFormatFunction(t, e, i, s) {
        var n = this.options,
          o = n.time.displayFormats,
          a = this._unit,
          r = this._majorUnit,
          l = a && o[a],
          h = r && o[r],
          c = i[e],
          d = r && h && c && c.major,
          u = this._adapter.format(t, s || (d ? h : l)),
          f = n.ticks.callback;
        return f ? tt(f, [u, e, i], this) : u;
      }
    }, {
      key: "generateTickLabels",
      value: function generateTickLabels(t) {
        var e, i, s;
        for (e = 0, i = t.length; e < i; ++e) s = t[e], s.label = this._tickFormatFunction(s.value, e, t);
      }
    }, {
      key: "getDecimalForValue",
      value: function getDecimalForValue(t) {
        return null === t ? NaN : (t - this.min) / (this.max - this.min);
      }
    }, {
      key: "getPixelForValue",
      value: function getPixelForValue(t) {
        var e = this._offsets,
          i = this.getDecimalForValue(t);
        return this.getPixelForDecimal((e.start + i) * e.factor);
      }
    }, {
      key: "getValueForPixel",
      value: function getValueForPixel(t) {
        var e = this._offsets,
          i = this.getDecimalForPixel(t) / e.factor - e.end;
        return this.min + i * (this.max - this.min);
      }
    }, {
      key: "_getLabelSize",
      value: function _getLabelSize(t) {
        var e = this.options.ticks,
          i = this.ctx.measureText(t).width,
          s = Yt(this.isHorizontal() ? e.maxRotation : e.minRotation),
          n = Math.cos(s),
          o = Math.sin(s),
          a = this._resolveTickFontOptions(0).size;
        return {
          w: i * n + a * o,
          h: i * o + a * n
        };
      }
    }, {
      key: "_getLabelCapacity",
      value: function _getLabelCapacity(t) {
        var e = this.options.time,
          i = e.displayFormats,
          s = i[e.unit] || i.millisecond,
          n = this._tickFormatFunction(t, 0, ma(this, [t], this._majorUnit), s),
          o = this._getLabelSize(n),
          a = Math.floor(this.isHorizontal() ? this.width / o.w : this.height / o.h) - 1;
        return a > 0 ? a : 1;
      }
    }, {
      key: "getDataTimestamps",
      value: function getDataTimestamps() {
        var t,
          e,
          i = this._cache.data || [];
        if (i.length) return i;
        var s = this.getMatchingVisibleMetas();
        if (this._normalized && s.length) return this._cache.data = s[0].controller.getAllParsedValues(this);
        for (t = 0, e = s.length; t < e; ++t) i = i.concat(s[t].controller.getAllParsedValues(this));
        return this._cache.data = this.normalize(i);
      }
    }, {
      key: "getLabelTimestamps",
      value: function getLabelTimestamps() {
        var t = this._cache.labels || [];
        var e, i;
        if (t.length) return t;
        var s = this.getLabels();
        for (e = 0, i = s.length; e < i; ++e) t.push(fa(this, s[e]));
        return this._cache.labels = this._normalized ? t : this.normalize(t);
      }
    }, {
      key: "normalize",
      value: function normalize(t) {
        return Ct(t.sort(ua));
      }
    }]);
    return ba;
  }(Ns);
  function xa(t, e, i) {
    var _wt, _t$r, _t$l, _wt2, _t$r2, _t$l2;
    var s,
      n,
      o,
      a,
      r = 0,
      l = t.length - 1;
    i ? (e >= t[r].pos && e <= t[l].pos && (_wt = wt(t, "pos", e), r = _wt.lo, l = _wt.hi, _wt), (_t$r = t[r], s = _t$r.pos, o = _t$r.time), (_t$l = t[l], n = _t$l.pos, a = _t$l.time)) : (e >= t[r].time && e <= t[l].time && (_wt2 = wt(t, "time", e), r = _wt2.lo, l = _wt2.hi, _wt2), (_t$r2 = t[r], s = _t$r2.time, o = _t$r2.pos), (_t$l2 = t[l], n = _t$l2.time, a = _t$l2.pos));
    var h = n - s;
    return h ? o + (a - o) * (e - s) / h : o;
  }
  ba.id = "time", ba.defaults = {
    bounds: "data",
    adapters: {},
    time: {
      parser: !1,
      unit: !1,
      round: !1,
      isoWeekday: !1,
      minUnit: "millisecond",
      displayFormats: {}
    },
    ticks: {
      source: "auto",
      major: {
        enabled: !1
      }
    }
  };
  var _a = /*#__PURE__*/function (_ba) {
    _inherits(_a, _ba);
    var _super25 = _createSuper(_a);
    function _a(t) {
      var _this43;
      _classCallCheck(this, _a);
      _this43 = _super25.call(this, t), _this43._table = [], _this43._minPos = void 0, _this43._tableRange = void 0;
      return _this43;
    }
    _createClass(_a, [{
      key: "initOffsets",
      value: function initOffsets() {
        var t = this._getTimestampsForTable(),
          e = this._table = this.buildLookupTable(t);
        this._minPos = xa(e, this.min), this._tableRange = xa(e, this.max) - this._minPos, _get2(_getPrototypeOf(_a.prototype), "initOffsets", this).call(this, t);
      }
    }, {
      key: "buildLookupTable",
      value: function buildLookupTable(t) {
        var e = this.min,
          i = this.max,
          s = [],
          n = [];
        var o, a, r, l, h;
        for (o = 0, a = t.length; o < a; ++o) l = t[o], l >= e && l <= i && s.push(l);
        if (s.length < 2) return [{
          time: e,
          pos: 0
        }, {
          time: i,
          pos: 1
        }];
        for (o = 0, a = s.length; o < a; ++o) h = s[o + 1], r = s[o - 1], l = s[o], Math.round((h + r) / 2) !== l && n.push({
          time: l,
          pos: o / (a - 1)
        });
        return n;
      }
    }, {
      key: "_getTimestampsForTable",
      value: function _getTimestampsForTable() {
        var t = this._cache.all || [];
        if (t.length) return t;
        var e = this.getDataTimestamps(),
          i = this.getLabelTimestamps();
        return t = e.length && i.length ? this.normalize(e.concat(i)) : e.length ? e : i, t = this._cache.all = t, t;
      }
    }, {
      key: "getDecimalForValue",
      value: function getDecimalForValue(t) {
        return (xa(this._table, t) - this._minPos) / this._tableRange;
      }
    }, {
      key: "getValueForPixel",
      value: function getValueForPixel(t) {
        var e = this._offsets,
          i = this.getDecimalForPixel(t) / e.factor - e.end;
        return xa(this._table, i * this._tableRange + this._minPos, !0);
      }
    }]);
    return _a;
  }(ba);
  _a.id = "timeseries", _a.defaults = ba.defaults;
  var ya = Object.freeze({
    __proto__: null,
    CategoryScale: Ko,
    LinearScale: Jo,
    LogarithmicScale: ta,
    RadialLinearScale: ha,
    TimeScale: ba,
    TimeSeriesScale: _a
  });
  return fn.register(In, ya, ao, Xo), fn.helpers = _objectSpread({}, Di), fn._adapters = xn, fn.Animation = gs, fn.Animations = ms, fn.animator = a, fn.controllers = Hs.controllers.items, fn.DatasetController = Cs, fn.Element = Os, fn.elements = ao, fn.Interaction = Ei, fn.layouts = Xi, fn.platforms = ds, fn.Scale = Ns, fn.Ticks = Ts, Object.assign(fn, In, ya, ao, Xo, ds), fn.Chart = fn, "undefined" != typeof window && (window.Chart = fn), fn;
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/js/chart.js");
/******/ 	
/******/ })()
;