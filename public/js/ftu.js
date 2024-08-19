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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/ftu.js":
/*!*****************************!*\
  !*** ./resources/js/ftu.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

// Tareas Firebase: CRUD de usuarios.
// Inicialización:
////////////////////////////////////////////////////////////////////////////////
var config = {
  apiKey: "{{ config('services.firebase.api_key') }}",
  authDomain: "{{ config('services.firebase.auth_domain') }}",
  databaseURL: "{{ config('services.firebase.database_url') }}",
  storageBucket: "{{ config('services.firebase.storage_bucket') }}"
};
firebase.initializeApp(config);
var database = firebase.database();
var lastIndex = 0; ////////////////////////////////////////////////////////////////////////////////
// Obtener datos.

firebase.database().ref('usuarios/').on('value', function (snapshot) {
  var value = snapshot.val();
  var htmls = [];
  $.each(value, function (index, value) {
    if (value) {
      htmls.push('<tr>\
            <td>' + value.uid + '</td>\
            <td>' + value.name + '</td>\
            <td>' + value.email + '</td>\
            <td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '">Update</button>\
            <button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Delete</button></td>\
            </tr>');
    }

    lastIndex = index;
  });
  $('#tbody').html(htmls);
  $("#submitUser").removeClass('desabled');
}); ////////////////////////////////////////////////////////////////////////////////
// Agregar datos (agregar usuario).

$('#adduser').on('click', function () {
  var values = $("#addUserRegister").serializeArray();
  var name = values[0].value;
  var email = values[1].value;
  var uid = values[2].value;
  var userID = lastIndex + 1;
  console.log(values);
  firebase.database().ref('usuarios/' + userID).set({
    uid: uid,
    name: name,
    email: email
  }); // Reasignar el último valor ID.

  lastIndex = userID;
  $("#addUserRegister input").val("");
}); ////////////////////////////////////////////////////////////////////////////////
// Actualizar usuario.

var updateID = 0;
$('body').on('click', '.updateData', function () {
  updateID = $(this).attr('data-id');
  firebase.database().ref('usuarios/' + updateID).on('value', function (snapshot) {
    var values = snapshot.val();
    var updateData = '<div class="form-group">\
            <label for="first_name" class="col-md-12 col-form-label">Name</label>\
            <div class="col-md-12">\
                <input id="first_name" type="text" class="form-control" name="name" value="' + values.name + '" required autofocus>\
            </div>\
        </div>\
        <div class="form-group">\
            <label for="last_name" class="col-md-12 col-form-label">Email</label>\
            <div class="col-md-12">\
                <input id="last_name" type="text" class="form-control" name="email" value="' + values.email + '" required autofocus>\
            </div>\
        </div>';
    $('#updateBody').html(updateData);
  });
});
$('.updateUsuarios').on('click', function () {
  var values = $(".users-update-record-model").serializeArray();
  var postData = {
    name: values[0].value,
    email: values[1].value
  };
  var updates = {};
  updates['/usuarios/' + updateID] = postData;
  firebase.database().ref().update(updates);
  $("#update-modal").modal('hide');
}); ////////////////////////////////////////////////////////////////////////////////
// Remover Data.

$("body").on('click', '.removeData', function () {
  var id = $(this).attr('data-id');
  $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
});
$('.deleteRecord').on('click', function () {
  var values = $(".users-remove-record-model").serializeArray();
  var id = values[0].value;
  firebase.database().ref('usuarios/' + id).remove();
  $('body').find('.users-remove-record-model').find("input").remove();
  $("#remove-modal").modal('hide');
});
$('.remove-data-from-delete-form').click(function () {
  $('body').find('.users-remove-record-model').find("input").remove();
}); ////////////////////////////////////////////////////////////////////////////////

/***/ }),

/***/ 2:
/*!***********************************!*\
  !*** multi ./resources/js/ftu.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/alexsegarra/Documents/laravel-proyects/myformsolution/resources/js/ftu.js */"./resources/js/ftu.js");


/***/ })

/******/ });