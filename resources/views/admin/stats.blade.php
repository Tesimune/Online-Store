@extends('layouts.app')

@section('content')

<div class="grid md:grid-cols-3 gap-3 md:p-19 p-9 text-white">
    <a href="">
        <div class="bg-green-500 grid gap-5 p-5 rounded-md shadow-lg shadow-black hover:scale-90 hover:text-black">
            <span class="text-3xl">Stock</span>
            <span class="text-xl">1015</span>
        </div>
    </a>
    <a href="">
        <div class="bg-orange-500 grid gap-5 p-5 rounded-md shadow-lg shadow-black hover:scale-90 hover:text-black">
            <span class="text-3xl">Orders</span>
            <span class="text-xl">102</span>
        </div>
    </a>
    <a href="">
        <div class="bg-teal-500 grid gap-5 p-5 rounded-md shadow-lg shadow-black hover:scale-90 hover:text-black">
            <span class="text-3xl">Deleveries</span>
            <span class="text-xl">1.9K</span>
        </div>
    </a>
    <a href="">
        <div class="bg-blue-500 grid gap-5 p-5 rounded-md shadow-lg shadow-black hover:scale-90 hover:text-black">
            <span class="text-3xl">Users</span>
            <span class="text-xl">6.5K</span>
        </div>
    </a>
    <a href="">
        <div class="bg-indigo-500 grid gap-5 p-5 rounded-md shadow-lg shadow-black hover:scale-90 hover:text-black">
            <span class="text-3xl">Net</span>
            <span class="text-xl">6.71M</span>
        </div>
    </a>
    <a href="">
        <div class="bg-violet-500 grid gap-5 p-5 rounded-md shadow-lg shadow-black hover:scale-90 hover:text-black">
            <span class="text-3xl">Groose</span>
            <span class="text-xl">4.3M</span>
        </div>
    </a>

</div>
    
@endsection