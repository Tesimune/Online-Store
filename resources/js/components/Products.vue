<template>
    <div class="grid grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4 md:gap-9 p-3
                md:p-5 lg:p-10 md:mx-9 mb-20">

        <div v-for="product in productStore.items" class="product">

            <div class="thumbnail-wrapper">
                <a href="">
                    <img :src="product.thumbnail" :alt="product.name"/>
                </a>
            </div>

            <div class="content">

                <span class="discount">{{ product.discount }}%</span>
                <h3 class="product-name">{{ product.name }}</h3>

                <p class="product-price">
                    <span class="new-price">₦{{ product.newPrice }}</span>
                    <span class="old-price">₦{{ product.oldPrice }}</span>
                </p>

                <div v-if="false" class="admin-actions">
                    <button href="" class="btn">Edit</button>
                    <button class="btn delete-btn">Delete</button>
                </div>

                <div class="">
                    <button v-if="cartStore.inCart(product.id)"
                            @click="cartStore.remove(product.id)" class="cart-remove">
                        Remove
                    </button>
                    <button v-else @click="cartStore.add(product)" class="cart-add">
                        Add to Cart
                    </button>
                </div>

            </div>

        </div>

    </div>
</template>

<script>
import useProductStore from "../stores/products";
import useCartStore from "../stores/cart";

export default {
    setup () {
        const productStore = useProductStore();
        const cartStore = useCartStore();
        return { productStore, cartStore, showToast: false }
    },
    mounted() {
        this.productStore.updateItems()
    },
}

</script>
