/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/es6/blocks/forms.js":
/*!************************************!*\
  !*** ./assets/es6/blocks/forms.js ***!
  \************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
const forms = () => {
  try {
    //checkbox
    const checkField = document.querySelectorAll('.checkbox');
    checkField.forEach(field => {
      const fieldInput = field.querySelector('input');
      fieldInput.checked ? field.classList.add('active') : '';
      fieldInput.addEventListener('change', () => {
        field.classList.toggle('active');
      });
    });
  } catch (e) {
    console.log(e.stack);
  }
};
/* harmony default export */ __webpack_exports__["default"] = (forms);

/***/ }),

/***/ "./assets/es6/blocks/mask.js":
/*!***********************************!*\
  !*** ./assets/es6/blocks/mask.js ***!
  \***********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
const mask = selector => {
  let setCursorPosition = (pos, elem) => {
    elem.focus();
    if (elem.setSelectionRange) {
      elem.setSelectionRange(pos, pos);
    } else if (elem.createTextRange) {
      let range = elem.createTextRange();
      range.collapse(true);
      range.moveEnd('character', pos);
      range.moveStart('character', pos);
      range.select();
    }
  };
  function createMask(event) {
    let matrix = '+7 (___) ___-__-__',
      i = 0,
      def = matrix.replace(/\D/g, ''),
      val = this.value.replace(/\D/g, '');
    if (def.length >= val.length) {
      val = def;
    }
    this.value = matrix.replace(/./g, function (a) {
      return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? '' : a;
    });
    if (event.type === 'blur') {
      if (this.value.length == 2) {
        this.value = '';
      }
    } else {
      setCursorPosition(this.value.length, this);
    }
  }
  let inputs = document.querySelectorAll(selector);
  inputs.forEach(input => {
    input.addEventListener('input', createMask);
    input.addEventListener('focus', createMask);
    input.addEventListener('blur', createMask);
  });
};
/* harmony default export */ __webpack_exports__["default"] = (mask);

/***/ }),

/***/ "./assets/es6/blocks/other.js":
/*!************************************!*\
  !*** ./assets/es6/blocks/other.js ***!
  \************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
const other = () => {
  try {
    //elem-text animate
    const targetElem = document.querySelectorAll('.elem_animate'),
      targetText = document.querySelectorAll('.text_animate');
    targetText.forEach(item => {
      let textCont = item.textContent.trim(),
        newInner = '',
        transit = 0;
      for (let i = 0; i < textCont.length; i++) {
        newInner += `<i class="or" style="transition: 0.6s all ${transit.toFixed(2)}s">${textCont[i]}</i>`;
        transit += 0.04;
      }
      item.innerHTML = newInner;
    });
    function returnHeight() {
      return window.innerWidth <= 600 ? window.innerHeight / 1.05 : window.innerHeight / 1.2;
    }
    function setAnim(mass) {
      mass.forEach(item => {
        if (returnHeight() + window.pageYOffset >= item.getBoundingClientRect().y + window.pageYOffset) {
          item.classList.add('anim');
        }
      });
    }
    setAnim(targetElem);
    setAnim(targetText);
    window.addEventListener('scroll', () => {
      setAnim(targetElem);
      setAnim(targetText);
    });
  } catch (e) {
    console.log(e.stack);
  }
};
/* harmony default export */ __webpack_exports__["default"] = (other);

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
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
/*!****************************!*\
  !*** ./assets/es6/main.js ***!
  \****************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _blocks_mask__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./blocks/mask */ "./assets/es6/blocks/mask.js");
/* harmony import */ var _blocks_forms__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./blocks/forms */ "./assets/es6/blocks/forms.js");
/* harmony import */ var _blocks_other__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./blocks/other */ "./assets/es6/blocks/other.js");



'use strict';
window.addEventListener('DOMContentLoaded', () => {
  (0,_blocks_mask__WEBPACK_IMPORTED_MODULE_0__["default"])('input[type="tel"]');
  (0,_blocks_forms__WEBPACK_IMPORTED_MODULE_1__["default"])();
  (0,_blocks_other__WEBPACK_IMPORTED_MODULE_2__["default"])();
});
}();
/******/ })()
;
//# sourceMappingURL=script.js.map