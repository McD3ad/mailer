import Vue from 'vue';
import Axios from 'axios';

window.Vue = Vue;
window.axios = Axios;
window.$ = window.jQuery = require('./../../../node_modules/jquery/dist/jquery');
import "./../../../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar";

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
