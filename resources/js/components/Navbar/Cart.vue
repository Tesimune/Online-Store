<template>
    <div class="flex flex-col items-center relative">
        <button @click="open = !open" class="relative">
            <span class="rounded-full p-2 hover:scale-125 transition duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
             <span class=" flex items-center justify-center font-semibold rounded-full bg-red-600 text-white text-[12px] absolute left-5 top-3 p-0.5 w-5 h-5">5</span>
            </span>
            <span>Cart</span>
        </button>

        <div v-if="open" class="absolute w-[90vw] max-w-[500px] h-[85vh] bottom-full p-2">
            <div class="bg-white shadow rounded-lg w-full h-full">

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                open: false,
            }
        }
    }
</script>
