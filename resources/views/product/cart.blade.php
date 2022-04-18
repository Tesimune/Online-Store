@extends('layouts.app')
@section('content')
        
    <div class="flex h-full flex-col bg-white shadow-xl pb-9">
        <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">              
            <div class="mt-8">
                <div class="flow-root">
                    <ul role="list" class="-my-6 divide-y divide-gray-200">
                    {{-- cart item start --}}
                    <li class="flex py-6">
                        <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                        <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                        </div>

                        <div class="ml-4 flex flex-1 flex-col">
                        <div>
                            <div class="flex justify-between text-base font-medium text-gray-900">
                            <h3>
                                <a href="#"> Throwback Hip Bag </a>
                            </h3>
                            <p class="ml-4">₦90.00</p>
                            </div>
                            <p class="mt-1 text-sm text-gray-500">Stock: 50</p>
                        </div>
                        <div class="flex flex-1 items-end justify-between text-sm">
                            <input type="number" class="text-black outline-none p-2 w-10" placeholder="Qty" />

                            <div class="flex">
                            <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                            </div>
                        </div>
                        </div>
                    </li>
                    {{-- cart item end --}}

                    {{-- cart item start --}}
                    <li class="flex py-6">
                        <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                            <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                        </div>

                        <div class="ml-4 flex flex-1 flex-col">
                            <div>
                            <div class="flex justify-between text-base font-medium text-gray-900">
                                <h3>
                                <a href="#"> Throwback Hip Bag </a>
                                </h3>
                                <p class="ml-4">₦90.00</p>
                            </div>
                            <p class="mt-1 text-sm text-gray-500">Stock: 50</p>
                            </div>
                            <div class="flex flex-1 items-end justify-between text-sm">
                            <input type="number" class="text-black outline-none p-2 w-10" placeholder="Qty" />

                            <div class="flex">
                                <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                            </div>
                            </div>
                        </div>
                        </li>
                        {{-- cart item end --}}

                    <!-- More products... -->
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