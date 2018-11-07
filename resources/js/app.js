/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('glyphicons');
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('post-register-modal', require('./components/modals/PostRegister.vue'));
Vue.component('private-profile-body', require('./components/PrivateProfileBody.vue'));

const app = new Vue({
    el: '#app'
});

$('.avatar').click((e) => {
    e.preventDefault();
    let settings = $('#settings-menu');

    if (settings.is(":visible")) {
        settings.hide();
    } else {
        settings.show();
    }
});
