import {defineStore} from "pinia";
import axios from "axios";

const useProductStore = defineStore('products', {
    state: () => ({
        items: []
    }),
    actions: {
        async updateItems() {
            let response = await axios.get('/api/products');
            this.items = response.data.map(item => ({
                id: item.id,
                name: item.name,
                thumbnail: item.thumbnail,
                oldPrice: item.price,
                newPrice: parseInt(item.price) - parseInt(item.discount),
                discount: Math.floor((parseInt(item.discount) * 100) / parseInt(item.price)),
                availableQuantity: item.quantity,
            }))
        },
    }
})

export default useProductStore;
