import {createApp} from 'vue';

const navbar = createApp({});

navbar.component('filters', require('./Filters.vue').default);
navbar.component('search', require('./Search.vue').default);
navbar.component('feed', require('./Feed.vue').default);
navbar.component('cart', require('./Cart.vue').default);
navbar.component('about', require('./About.vue').default);

navbar.mount("#navbar")
