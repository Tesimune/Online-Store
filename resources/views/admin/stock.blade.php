@extends('layouts.app')

@section('content')
<div class="grid gap-2 mx-3 md:px-20">
    
    <!-- card -->
    <div class="bg-slate-300 flex gap-1 justify-between p-2 rounded">
        <div class="flex">
            <input class="my-3 mx-1" type="checkbox"/>
            <a href="" class="bg-white h-11 w-10  rounded">
                {{-- <img src="" class="w-full h-full" /> --}}
            </a>
        </div>
        <div class="bg-white rounded flex gap-1 p-2">
            <a href="">
                <span class="text-red-500">₦900</span>
                <strike class="opacity-50">₦500</strike>
            </a>
        </div>
        <div class="flex gap-1 md:gap-5"> 
            <a href="" class="bg-blue-500 text-white text-center p-2 rounded w-20 shadow-md">Edit</a>
            <form method="post" class="bg-red-500 text-white text-center p-2 rounded w-20 shadow-md">
                <button class="w-full h-full">Delete</button>
            </form>
        </div>
    </div>
    <!-- end card -->
    <!-- card -->
    <div class="bg-slate-300 flex gap-1 justify-between p-2 rounded">
        <div class="flex">
            <input class="my-3 mx-1" type="checkbox"/>
            <a href="" class="bg-white h-10 w-10  rounded">
               {{-- <img src="" class="w-full h-full" /> --}}
            </a>
        </div>
        <div class="bg-white rounded flex gap-1 p-2">
            <a href="">
                <span class="text-red-500">₦900</span>
                <strike class="opacity-50">₦500</strike>
            </a>
        </div>
        <div class="flex gap-1 md:gap-5"> 
            <a href="" class="bg-blue-500 text-white text-center p-2 rounded w-20 shadow-md">Edit</a>
            <form method="post" class="bg-red-500 text-white text-center p-2 rounded w-20 shadow-md">
                <button class="w-full h-full">Delete</button>
            </form>
        </div>
    </div>
    <!-- end card -->
</div>
@endsection