import {createApp} from "vue";
import {createPinia} from "pinia";

const app = createApp({});

app.use(createPinia())

app.component('products', require('./components/Products.vue').default);
app.component('cart', require('./components/Cart.vue').default);
app.component('search', require('./components/Search.vue').default);
app.component('about', require('./components/About.vue').default);
app.component('filter', require('./components/Filters.vue').default);
app.component('feed', require('./components/Feed.vue').default);

app.mount('#app');
