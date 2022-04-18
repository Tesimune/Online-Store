@extends('layouts.app')
@section('content')
        
    <div class="flex h-full flex-col bg-white shadow-xl pb-9">
        <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">              
            <div class="mt-8">
                <div class="flow-root">
                    <ul role="list" class="-my-6 divide-y divide-gray-200">
                    {{-- cart item start --}}
                    <li class="bg-slate-200 rounded shadow-sm shadow-slate-700 p-2 my-1 flex py-3 relative">
                        <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                            <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                        </div>

                        <div class="mx-1 md:mx-10 flex flex-1 flex-col">
                            <div class="p-1">
                                <div class="flex justify-between text-base font-medium text-gray-900">
                                    <h3>
                                        <a href="#"> Throwback Hip Bag </a>
                                    </h3>
                                    <p class="ml-4">₦90.00</p>
                                </div>
                                <p class="mt-1 text-sm text-gray-500">Stock: 50</p>
                            </div>
                           
                            <form class="flex justify-end m-1">
                                <input type="number" class="text-black outline-none p-1 mx-1 w-full md:w-20 shadow-sm shadow-slate-900" placeholder="Qty" />
                                <button type="submit" class=" bg-blue-600 p-1 shadow-sm shadow-black text-sm text-white rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <button type="button" class="bg-red-700 font-medium text-white rounded-full absolute top-0 right-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </li>
                    {{-- cart item end --}}
                     {{-- cart item start --}}
                     <li class="bg-slate-200 rounded shadow-sm shadow-slate-700 p-2 my-1 flex py-3 relative">
                        <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                            <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                        </div>

                        <div class="mx-1 md:mx-10 flex flex-1 flex-col">
                            <div class="p-1">
                                <div class="flex justify-between text-base font-medium text-gray-900">
                                    <h3>
                                        <a href="#"> Throwback Hip Bag </a>
                                    </h3>
                                    <p class="ml-4">₦90.00</p>
                                </div>
                                <p class="mt-1 text-sm text-gray-500">Stock: 50</p>
                            </div>
                           
                            <form class="flex justify-end m-1">
                                <input type="number" class="text-black outline-none p-1 mx-1 w-full md:w-20 shadow-sm shadow-slate-900" placeholder="Qty" />
                                <button type="submit" class=" bg-blue-600 p-1 shadow-sm shadow-black text-sm text-white rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <button type="button" class="bg-red-700 font-medium text-white rounded-full absolute top-0 right-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </li>
                    {{-- cart item end --}}

                    
                    </ul>
                </div>
                </div>
            </div>
            <div class="flex justify-between gap-5 m-5">
                <label class="font-bold text-xl">Delevery Location:</label>
                <select class="font-bold text-xl outline-none p-3 rounded shadow-lg shadow-black">
                    <option value=””>Kaduna</option>
                    <option value=””>Abuja</option>
                    <option value=””>Kano</option>
                    <option value=””>Lagos</option>
                </select>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                <div class="flex justify-between text-base font-medium text-gray-900">
                <p>Subtotal</p>
                <p>₦262.00</p>
                </div>
                <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                <div class="mt-6">
                <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
                </div>
                <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                <p>
                    or <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Continue Shopping<span aria-hidden="true"> &rarr;</span></button>
                </p>
            </div>
        </div>
    </div>
       
   
@endsection