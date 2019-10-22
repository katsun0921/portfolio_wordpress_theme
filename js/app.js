/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/ts/index.ts");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/ts/clickClose.ts":
/*!******************************!*\
  !*** ./src/ts/clickClose.ts ***!
  \******************************/
/*! exports provided: clickClose */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "clickClose", function() { return clickClose; });
var btnClose = document.getElementById('js-btnCloseContent');
var topMenu = document.getElementById('js-topMenu');
var topNames = Array.from(document.getElementsByClassName('js-topName'));
var menu = document.getElementById('js-menu');
var contentBlock = document.getElementById('js-content'); // あとでgetにする

function removeClass(elem, className) {
  if (elem !== null) {
    elem.classList.remove(className);
  }
}

function addClass(elem, className) {
  if (elem !== null) {
    elem.classList.add(className);
  }
}
/**
 * @param  {any} obj
 * @returns void
 * closeボタンをクリックしたときのイベント
 */


function clickClose(obj) {
  var url = location.pathname;
  var path = url.split('/');

  if (btnClose !== null) {
    btnClose.onclick = function () {
      /**
       * @param  {} path[1] === ''
       * TOPページかを判定
       * URLのパス名で配列にし、配列の長さが1のときはTOP
       * TOP(/)であれば[""]
       * 下層(/blog)であれば["blog"]となる
       */
      if (path[1] === '') {
        removeClass(topMenu, 'is-none');

        for (var _i = 0, topNames_1 = topNames; _i < topNames_1.length; _i++) {
          var topName = topNames_1[_i];
          var elem = topName;
          elem.classList.remove('is-rotation');
        }

        addClass(menu, 'is-none');
        removeClass(contentBlock, 'is-show');
        Object.keys(obj).forEach(function (key) {
          var elemRemove = document.getElementById(obj[key]);
          removeClass(elemRemove, 'is-show');
        });
      } else {
        window.location.href = '/';
      }
    };
  }
}

/***/ }),

/***/ "./src/ts/clickElement.ts":
/*!********************************!*\
  !*** ./src/ts/clickElement.ts ***!
  \********************************/
/*! exports provided: clickElement */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "clickElement", function() { return clickElement; });
var clickElement =
/** @class */
function () {
  function clickElement(btn, getElement, className) {
    this.btn = btn;
    this.getElement = getElement;
    this.className = className;
  }

  clickElement.prototype.showContent = function () {
    var _this = this;

    var btnContents = Array.from(document.getElementsByClassName(this.btn));
    var elemGetId = document.getElementById(this.getElement);
    var elemAddClasses = document.getElementsByClassName('js-container');
    var url = location.pathname;
    var path = url.split('/');

    for (var _i = 0, btnContents_1 = btnContents; _i < btnContents_1.length; _i++) {
      var btnContent = btnContents_1[_i];
      var elemContent = btnContent;
      /**
       * @param  {} 'click'
       * nav menuをクリックしたときにcontentを表示する
       */

      elemContent.addEventListener('click', function () {
        if (path[1] === '') {
          Object.values(elemAddClasses).forEach(function (elem) {
            elem.classList.add('is-none');
            elem.classList.remove(_this.className);
          });

          if (elemGetId !== null) {
            elemGetId.classList.remove('is-none');
            elemGetId.classList.add(_this.className);
          }
        } else {
          window.location.href = '/#' + _this.getElement;
        }
      }, false);
    }
  };

  clickElement.prototype.showTop = function () {
    var _this = this;

    var btnContents = Array.from(document.getElementsByClassName(this.btn));
    var elemGetId = document.getElementById(this.getElement);

    for (var _i = 0, btnContents_2 = btnContents; _i < btnContents_2.length; _i++) {
      var btnContent = btnContents_2[_i];
      var elemContent = btnContent;
      elemContent.addEventListener('click', function () {
        if (elemGetId !== null) {
          elemGetId.classList.add(_this.className);
        }
      }, false);
    }
  };

  clickElement.prototype.showMenu = function () {
    var _this = this;

    var btnContents = Array.from(document.getElementsByClassName(this.btn));
    var elemGetId = document.getElementById(this.getElement);

    for (var _i = 0, btnContents_3 = btnContents; _i < btnContents_3.length; _i++) {
      var btnContent = btnContents_3[_i];
      var elemContent = btnContent;
      elemContent.addEventListener('click', function () {
        if (elemGetId !== null) {
          elemGetId.classList.remove(_this.className);
        }
      }, false);
    }
  };

  clickElement.prototype.rotationTopName = function () {
    var _this = this;

    var btnContents = Array.from(document.getElementsByClassName(this.btn));
    var rotations = Array.from(document.getElementsByClassName(this.getElement));

    for (var _i = 0, btnContents_4 = btnContents; _i < btnContents_4.length; _i++) {
      var btnContent = btnContents_4[_i];
      var elemContent = btnContent;
      elemContent.addEventListener('click', function () {
        for (var _i = 0, rotations_1 = rotations; _i < rotations_1.length; _i++) {
          var rotation = rotations_1[_i];
          var elem = rotation;
          elem.classList.add(_this.className);
        }
      }, false);
    }
  };

  return clickElement;
}();



/***/ }),

/***/ "./src/ts/ieError.ts":
/*!***************************!*\
  !*** ./src/ts/ieError.ts ***!
  \***************************/
/*! exports provided: isIE */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "isIE", function() { return isIE; });
/* IE判定関数を定義しておく */
function isIE() {
  var userAgent = window.navigator.userAgent.toLowerCase();

  if (userAgent.indexOf('msie') !== -1 || userAgent.indexOf('trident') !== -1) {
    return true;
  } else {
    return false;
  }
}
/* DOM構造読み込み完了後にアラート表示のHTMLを挿入 */

document.addEventListener('DOMContentLoaded', function () {
  if (isIE()) {
    var ieError = document.getElementById('ieError'); // アラート表示を挿入する場所

    var ieDiv = document.createElement('div'); // div要素の生成

    ieDiv.classList.add('ie_alert'); // クラス名付与

    ieDiv.innerHTML = "<span>Internet Explorer\u3001\u30C0\u30E1\u7D76\u5BFE\uFF01</span>\n    <p>\u3042\u306A\u305F\u304C\u4F7F\u7528\u3057\u3066\u3044\u308B <b>Internet Explorer</b> \u3068\u3044\u3046\u30D6\u30E9\u30A6\u30B6\u306F\u3068\u3066\u3082\u53E4\u3044\u3082\u306E\u3067\u3059\u3002\n    <br>\u8A00\u3063\u3066\u3057\u307E\u3048\u3070\u3001\u767E\u5BB3\u3042\u3063\u3066\u4E00\u5229\u306A\u3057\u306E\u8001\u5BB3\u3067\u3059\u3002<br>\n    \u4E16\u754C\u4E2D\u3067\u3001\u591A\u304F\u306EWEB\u5236\u4F5C\u8005\u304C\u3042\u306A\u305F\u306E <b>Internet Explorer</b> \u306E\u305B\u3044\u3067\u82E6\u60A9\u3057\u3066\u3044\u307E\u3059\u3002<br><br>\n    \u3069\u3046\u304B\u3001<b>\u6700\u65B0\u306E\u30E2\u30C0\u30F3\u30D6\u30E9\u30A6\u30B6\uFF08Edge\u3084Firefox\u3001Google Chrome\uFF09</b>\u3092\u304A\u4F7F\u3044\u304F\u3060\u3055\u3044\u3002</p>\n    <a href=\"https://www.google.co.jp/chrome/index.html\">Google Chrome\u3092\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9</a>";
    ieError.appendChild(ieDiv); // HTMLの追加
  }
});

/***/ }),

/***/ "./src/ts/index.ts":
/*!*************************!*\
  !*** ./src/ts/index.ts ***!
  \*************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ieError__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ieError */ "./src/ts/ieError.ts");
/* harmony import */ var _clickElement__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./clickElement */ "./src/ts/clickElement.ts");
/* harmony import */ var _clickClose__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./clickClose */ "./src/ts/clickClose.ts");
/* harmony import */ var _load__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./load */ "./src/ts/load.ts");






{
  /**
   * ie ブラウザで開いたときにエラーを表示
   */
  Object(_ieError__WEBPACK_IMPORTED_MODULE_0__["isIE"])();
}
/*
 * btnにclickのする要素のid名
 * getIdに追加するクラス名
*/

var content = {
  resume: {
    btn: 'js-btnResume',
    getId: 'resume'
  },
  work: {
    btn: 'js-btnWork',
    getId: 'work'
  },
  blog: {
    btn: 'js-btnBlog',
    getId: 'blog'
  }
};
;
{
  Object.keys(content).forEach(function (key) {
    new _clickElement__WEBPACK_IMPORTED_MODULE_1__["clickElement"](content[key]['btn'], content[key]['getId'], 'is-show').showContent();
  });
  new _clickElement__WEBPACK_IMPORTED_MODULE_1__["clickElement"]('js-topBtn', 'js-topMenu', 'is-none').showTop();
  new _clickElement__WEBPACK_IMPORTED_MODULE_1__["clickElement"]('js-topBtn', 'js-content', 'is-show').showTop();
  new _clickElement__WEBPACK_IMPORTED_MODULE_1__["clickElement"]('js-topBtn', 'js-menu', 'is-none').showMenu();
  new _clickElement__WEBPACK_IMPORTED_MODULE_1__["clickElement"]('js-topBtn', 'js-topName', 'is-rotation').rotationTopName();
}
{
  /**
   * @param  {} content
   * nav メニューの閉じるボタンをクリックイベント
   */
  Object(_clickClose__WEBPACK_IMPORTED_MODULE_2__["clickClose"])(content);
}
{
  Object(_load__WEBPACK_IMPORTED_MODULE_3__["loadShowContent"])();
}

/***/ }),

/***/ "./src/ts/load.ts":
/*!************************!*\
  !*** ./src/ts/load.ts ***!
  \************************/
/*! exports provided: loadShowContent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "loadShowContent", function() { return loadShowContent; });
var hash = location.hash;
var getId = document.getElementById(hash.replace('#', ''));
var topMenu = document.getElementById('js-topMenu');
var content = document.getElementById('js-content');
var menuId = document.getElementById('js-menu');
var rotations = Array.from(document.getElementsByClassName('js-topName'));
function loadShowContent() {
  var elemAddClasses = document.getElementsByClassName('js-container');

  if (hash) {
    window.onload = function () {
      /**
       * @param  {} elemAddClasses
       * @param  {} .forEach((elem
       * showContent()
       */
      Object.values(elemAddClasses).forEach(function (elem) {
        elem.classList.add('is-none');
        elem.classList.remove('is-show');
        getId.classList.remove('is-none');
        getId.classList.add('is-show');
      });
      topMenu.classList.add('is-none');
      content.classList.add('is-show');
      /**
       * @param  {} 'is-none'
       * showMenu()
       */

      menuId.classList.remove('is-none');

      for (var _i = 0, rotations_1 = rotations; _i < rotations_1.length; _i++) {
        var rotation = rotations_1[_i];
        var elem = rotation;
        elem.classList.add('is-rotation');
      }
    };
  }
}

/***/ })

/******/ });
//# sourceMappingURL=app.js.map