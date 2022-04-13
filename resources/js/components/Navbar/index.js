import {createApp} from "vue";

const navbar = createApp({});

navbar.component('search', require('./SearchForm.vue').default);
navbar.component('auth', require('./Auth.vue').default);
navbar.component('cart', require('./Cart.vue').default);

navbar.mount('#navbar');
