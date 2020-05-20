/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('opiniones-component', require('./components/OpinionesComponent.vue').default);
Vue.component('conciertos-component', require('./components/ConciertosComponent.vue').default);
Vue.component('playlist-component', require('./components/PlaylistRecomendadaComponent.vue').default);
Vue.component('escuchadas-component', require('./components/EscuchadasRecienteComponent.vue').default);
Vue.component('cancionfav-component', require('./components/CancionesFavComponent.vue').default);
Vue.component('comprasconciertos-component', require('./components/ComprasConciertosComponent.vue').default);
Vue.component('comprascine-component', require('./components/ComprasCineComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
  
});




