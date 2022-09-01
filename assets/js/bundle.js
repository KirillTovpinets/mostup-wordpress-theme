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
/******/ 	__webpack_require__.p = "/dist/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./js/constants.js":
/*!*************************!*\
  !*** ./js/constants.js ***!
  \*************************/
/*! exports provided: SLICK_CONFIG, TEAM_SLIDER_CONFIG, TESTIMONIALS_SLIDER_CONFIG */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SLICK_CONFIG", function() { return SLICK_CONFIG; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "TEAM_SLIDER_CONFIG", function() { return TEAM_SLIDER_CONFIG; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "TESTIMONIALS_SLIDER_CONFIG", function() { return TESTIMONIALS_SLIDER_CONFIG; });
const SLICK_CONFIG = {
  dots: true,
  infinite: false,
  autoplay: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  arrows: false,
  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
      dots: true
    }
  }, {
    breakpoint: 600,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  }, {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  } // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
};
const TEAM_SLIDER_CONFIG = { ...SLICK_CONFIG,
  slidesToShow: 7,
  slidesToScroll: 7
};
const TESTIMONIALS_SLIDER_CONFIG = { ...SLICK_CONFIG,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  appendDots: '.dots-container',
  prevArrow: '<button type="button" class="slick-prev-btn"><i class="fas fa-angle-left fa-2x"></i></button>',
  nextArrow: '<button type="button" class="slick-next-btn"><i class="fas fa-angle-right fa-2x"></i></button>'
};

/***/ }),

/***/ "./js/index.js":
/*!*********************!*\
  !*** ./js/index.js ***!
  \*********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _show_slider__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./show-slider */ "./js/show-slider.js");
/* harmony import */ var _team_slider__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./team-slider */ "./js/team-slider.js");
/* harmony import */ var _testimonials_slier__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./testimonials-slier */ "./js/testimonials-slier.js");



$(document).ready(function () {
  const showSlider = new _show_slider__WEBPACK_IMPORTED_MODULE_0__["default"]();
  const teamSlider = new _team_slider__WEBPACK_IMPORTED_MODULE_1__["default"]();
  const testimonialsSlider = new _testimonials_slier__WEBPACK_IMPORTED_MODULE_2__["default"]();
  teamSlider.init();
  showSlider.init();
  testimonialsSlider.init();
});

/***/ }),

/***/ "./js/show-slider.js":
/*!***************************!*\
  !*** ./js/show-slider.js ***!
  \***************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ShowSlider; });
/* harmony import */ var _constants__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./constants */ "./js/constants.js");

class ShowSlider {
  constructor() {
    this.container = $('.featured-shows__shows-slider');
  }

  init() {
    this.container.slick(_constants__WEBPACK_IMPORTED_MODULE_0__["SLICK_CONFIG"]);
  }

}

/***/ }),

/***/ "./js/team-slider.js":
/*!***************************!*\
  !*** ./js/team-slider.js ***!
  \***************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return TeamSlider; });
/* harmony import */ var _constants__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./constants */ "./js/constants.js");

class TeamSlider {
  constructor() {
    this.container = $('.our-actors__list-slider');
  }

  init() {
    this.container.slick(_constants__WEBPACK_IMPORTED_MODULE_0__["TEAM_SLIDER_CONFIG"]);
  }

}

/***/ }),

/***/ "./js/testimonials-slier.js":
/*!**********************************!*\
  !*** ./js/testimonials-slier.js ***!
  \**********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return TestimonialsSlider; });
/* harmony import */ var _constants__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./constants */ "./js/constants.js");

class TestimonialsSlider {
  constructor() {
    this.container = $('.testimonials-slider');
  }

  init() {
    this.container.slick(_constants__WEBPACK_IMPORTED_MODULE_0__["TESTIMONIALS_SLIDER_CONFIG"]);
  }

}

/***/ }),

/***/ "./styles.scss":
/*!*********************!*\
  !*** ./styles.scss ***!
  \*********************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (__webpack_require__.p + "/styles.css");

/***/ }),

/***/ 0:
/*!**************************************!*\
  !*** multi ./js/index ./styles.scss ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/kirilltovpinec/Documents/mostup/js/index */"./js/index.js");
module.exports = __webpack_require__(/*! /Users/kirilltovpinec/Documents/mostup/styles.scss */"./styles.scss");


/***/ })

/******/ });
//# sourceMappingURL=bundle.js.map