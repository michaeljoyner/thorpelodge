
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import lodash from 'lodash';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('contact-form', require('./components/ContactForm.vue'));
Vue.component('light-box', require('./components/Lightbox.vue'));

window.eventHub = new Vue();

const app = new Vue({
    el: '#app',

    data: {
        keycodes: {
            27: 'escaped',
            37: 'keyed:left',
            39: 'keyed:right'
        }
    },

    created() {
        document.addEventListener('keydown', ev => this.emitKeyedEvent(ev.keyCode));
    },

    methods: {

        emitKeyedEvent(keyCode) {
            if(this.keycodes.hasOwnProperty(keyCode)) {
                return eventHub.$emit(this.keycodes[keyCode]);
            }
        }
    }
});

window.addEventListener('scroll', lodash.throttle(() => {
    let scrolled = false;
    if((window.scrollY > 70) && ! document.body.classList.contains('scrolled')) {
        document.body.classList.add('scrolled');
    } else if((window.scrollY < 70) && document.body.classList.contains('scrolled')) {
        console.log('remove');
        scrolled = false;
        document.body.classList.remove('scrolled');
    }
}, 150));