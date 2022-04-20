<template>
    <div class="cart-wrapper">

        <button @click="cartStore.open = true" class="cart-button">
            <span class="cart-icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </span>
            <span v-if="cartStore.items.length > 0" class="item-numbers">
                {{ cartStore.count }}
            </span>
            <span>Cart</span>
        </button>

        <Transition>
            <div v-if="cartStore.open" @click.self="cartStore.open = false" class="cart-modal">
                <div class="wrapper">
                    <div class="uppercase flex justify-between items-center p-3 border-b">
                        <h3 class="text-lg">shopping cart</h3>
                        <button @click="cartStore.open = false">close</button>
                    </div>

                    <div class="flex-grow overflow-y-auto">
                        <div v-for="item in cartStore.items" class="flex gap-3 items-start border-b p-2 relative">
                            <div class="bg-gray-300 rounded">
                                <div class="w-20 h-20">
                                    <img :src="item.thumbnail" :alt="item.name">
                                </div>
                            </div>
                            <div class="h-full flex flex-col items-start gap-2 justify-between">
                                <h3 class="uppercase truncate">{{ item.name }}</h3>
                                <div class="flex items-center border rounded overflow-hidden">
                                    <button @click="cartStore.decrement(item.id)"
                                            class="px-2 py-1 border-r">-</button>
                                    <input type="text" v-model="item.quantity" class="w-10 text-center px-2 outline-none">
                                    <button @click="cartStore.increment(item.id)"
                                            class="px-2 py-1 border-l">+</button>
                                </div>
                                <h3 class="">
                                    {{ item.quantity }} &times; ₦{{ item.price.toLocaleString('en-US') }}
                                </h3>
                                <button @click="cartStore.remove(item.id)" class="absolute top-2 right-2">
                                    &times;
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 border-t">
                        <div class="mb-3 flex items-center justify-between uppercase text-xl">
                            <h3>Subtotal</h3>
                            <h3>₦{{ cartStore.totalAmount.toLocaleString('en-US') }}</h3>
                        </div>
                        <button class="text-lg uppercase bg-black py-3 rounded w-full text-white">
                            checkout
                        </button>
                    </div>

                </div>
            </div>
        </Transition>
    </div>
</template>

<script>
import useCartStore from "../stores/cart";
import Modal from "./Modal";

export default {
    components: {Modal},
    setup(){
        const cartStore = useCartStore();
        return{ cartStore, showModal: false }
    }
}
</script>

<style lang="scss" scoped>

    .v-enter-active,
    .v-leave-active {
        transition: all .5s ease;
    }

    .v-enter-from,
    .v-leave-to {
        opacity: 0;
    }

    .cart-wrapper {

        .cart-button{
            @apply flex flex-col items-center relative;
            .cart-icon{@apply rounded-full p-2 hover:scale-125 transition duration-500;}
            .item-numbers{
                @apply flex items-center justify-center font-semibold rounded-full bg-red-600
                text-white text-[12px] absolute right-0 top-0 p-0.5 w-5 h-5;
            }
        }

        .cart-modal{
            @apply absolute right-0 bottom-0 w-screen h-screen bg-black/40;
            .wrapper{
                @apply flex flex-col ml-auto w-full max-w-[300px] bg-white shadow w-full h-full;
            }
        }

    }
</style>
