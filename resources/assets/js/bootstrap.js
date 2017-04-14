window.Vue = require('vue');

window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

Vue.prototype.$http = axios;

import lightgallery from 'lightgallery';
import lgshare from 'lg-share';
import lgfullscreen from 'lg-fullscreen';

window.lightgallery = lightgallery;

