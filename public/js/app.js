/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
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
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

/**
 * Created by marimardelacerna on 30/07/2017.
 */
$(":button").click(function () {
    $(".gallery_id").hide();
    var id_check = this.id;
    console.log(id_check);
    try {
        var club_id = $(this).attr("data-content");
        obj = JSON && JSON.parse(club_id) || $.parseJSON(club_id);
    } catch (e) {}

    switch (id_check) {

        case 'add_item':
            break;
        case 'details_item':
            $("#detail_photo_name").attr("src", obj.photo_name);
            $("#detail_title").text(obj.title);
            $("#detail_description").text(obj.description);
            break;
        case 'edit_item':
            $(".gallery_id").val(obj.id);
            $(".photo_name").attr("src", obj.photo_name);
            $(".title").attr("value", obj.title);
            $(".description").val(obj.description);
            break;
        case 'delete_item':
            $(".gallery_id").val(obj.id);
            break;
        case 'add_cancel':
            $("#add_gallery").modal('toggle');
            break;
        case 'edit_cancel':
            $("#edit_gallery").modal('toggle');
            break;
        case 'delete_cancel':
            $("#delete_gallery").modal('toggle');
            break;
        case 'details_cancel':
            $("#details_gallery").modal('toggle');
            break;
        default:
    }
});

function readURL(input, check) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        if (check == 'add_image') {
            reader.onload = function (e) {
                $('.photo_name').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            reader.onload = function (e) {
                $('.photo_name').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
}

$("#input_image_add").change(function () {
    readURL(this, 'add_image');
});
$("#input_image_edit").change(function () {
    readURL(this, 'edit_image');
});

$("p").bind("click", function (event) {
    var str = "( " + event.pageX + ", " + event.pageY + " )";
    $("span").text("Click happened! " + str);
});
$("p").bind("dblclick", function () {
    $("span").text("Double-click happened in " + this.nodeName);
});
$("p").bind("mouseenter mouseleave", function (event) {
    $(this).toggleClass("over");
});

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(0);


/***/ })
/******/ ]);