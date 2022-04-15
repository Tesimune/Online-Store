const Vue = require('vue').default

Vue.component('feed', require('./Feed.vue').default);
Vue.component('search', require('./Search.vue').default);
Vue.component('cart', require('./Cart.vue').default);


window.app = new Vue({
    el: "#navbar"
})
