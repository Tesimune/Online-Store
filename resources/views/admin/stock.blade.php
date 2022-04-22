@extends('layouts.app')

@section('content')
<div class="grid md:grid-cols-12 gap-2">
    <div class="hidden md:block col-span-1" id=sidebar>
        <Sidebar></Sidebar>
    </div>
    <div class="grid col-span-11 mx-3 md:px-16 my-5">
        <div class="flex justify-between">
            <span class="flex gap-2">
                <input type="checkbox" class="border-2 p-1"/>
                <label>Select All</label>
            </span>
            <span>
                <button class="text-red-600 md:text-black hover:text-red-600">Bulk Delete</button>        
            </span>
        </div>
        <!-- card -->
        <div class="flex gap-1 justify-between m-1">
            <span class="flex gap-2">
                <input type="checkbox" class="border-2"/>
                <a href="" class="flex justify-center">item name</a>
            </span>
            <a class="flex gap-1" href="">
                <span class="text-red-500">₦900</span>
                <strike class="opacity-50">₦500</strike>
            </a>
            <div class="flex gap-1 md:gap-5"> 
                <a href="" class="text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </a>
                <form method="post" class="text-center">
                    <button class="text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <!-- end card -->
    </div>
</div>
@endsection