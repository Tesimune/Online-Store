import {defineStore} from 'pinia'
import toast from "../utils/toast";

const useCartStore = defineStore('cart', {
    state: () => {
        return{
            open: false,
            items:  []
        }
    },
    getters: {
        totalAmount: (state) => state.items.reduce((total, item) => {
            return (total + (item.quantity * item.price))
        }, 0),
        count: (state) => state.items.length
    },
    actions: {
        increment(id){
            let item = this.items.find(item => item.id === id);
            item.quantity++;
        },
        decrement(id){
            let item = this.items.find(item => item.id === id);
            item.quantity <= 1 ? item.quantity = 1 : item.quantity--;
        },
        remove(id){
            this.items = this.items.filter(item => item.id !== id);
            toast('Item removed from cart', 'danger');
        },
        add(data){
            let item = this.items.find(item => item.id === data.id);
            if (!item) this.items.push({...data, price: data.newPrice, quantity: 1});
            toast('Item Added to Cart Successfully');
        },
        inCart(id){
            return this.items.find(item => item.id === id);
        }
    }
})

export default useCartStore;
