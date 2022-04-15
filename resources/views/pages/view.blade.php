@extends('layouts.app')

@section('content')
    <div class="grid md:grid-cols-3 gap-10 justify-center m-5">
        <!-- card -->
        <div class="w-full h-48 bg-gray-500">
            <div class="w-full h-full relative rounded">
                <a href="#">
                    {{-- <img src="/images" alt="thumbnill" class="w-full h-full" /> --}}
                </a>
                <span class="bg-red-500 text-white absolute text-xs p-1 top-2 right-2">50%</span>
            </div>
            <div class="">
                <a href="">
                    <span class="flex capitalize font-bold">BAG</span>
                    <span class="flex gap-2">
                        <h6 class="font-bold">₦500</h6>
                        <h6 class="font-bold text">₦600</h6>
                    </span>
                </a>
            </div>
            <button class="bg-blue-600 grid text-white w-full p-1 font-bold text-center rounded">
                <span></span>
                <span>+Cart</span>
            </button>
        </div>
        <!-- end card -->
        <div class="grid md:col-span-2 my-5 md:my-0">
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, dolore rerum. Ad mollitia dolore deleniti doloremque itaque eligendi, laboriosam asperiores hic ut quo commodi possimus minima cumque suscipit cum. Impedit earum itaque exercitationem reiciendis, deleniti officia cupiditate asperiores, unde, possimus adipisci laborum consequuntur quis id consectetur fuga harum eos nobis.</span>
        </div>
    </div>    
@endsection