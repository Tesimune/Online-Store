@extends('layouts.app')

@section('content')
    <div class="grid md:grid-cols-3 gap-10 justify-center m-5">
        <!-- card -->
        <div class="w-full h-48 bg-white">
            <div class="w-full h-full relative rounded">
                <a href="#">
                     <img src="/{{ $product->thumbnail }}" alt="{{ $product->name }}" class="w-full h-full" />
                </a>
                <span class="bg-red-500 text-white absolute text-xs p-1 top-2 right-2">
                    {{ round(($product->discount / $product->price) * 100, 0) }}%
                </span>
            </div>
            <div class="">
                <a href="">
                    <span class="flex capitalize font-bold">{{$product->name}}</span>
                    <span class="flex gap-2">
                        <h6 class="font-bold">₦{{$product->price - $product->discount}}</h6>
                        <h6 class="font-bold text">₦{{$product->price}}</h6>
                    </span>
                </a>
            </div>
            @if(auth()->id() && auth()->user()->role == 'admin')
                <div class="grid grid-cols-2 gap-1 text-sm">
                    <a href="{{ route('product.edit', ['product' => $product->id]) }}"
                       class="flex-grow bg-blue-500 text-white text-center py-1">Edit</a>
                    <form method="post" class="text-white bg-red-500 py-1"
                          action="{{ route('product.delete', ['product' => $product->id]) }}">
                        @csrf @method('delete')
                        <button class="w-full">Delete</button>
                    </form>
                </div>
            @else
                <button class="bg-blue-600 grid text-white w-full p-1 font-bold text-center rounded">
                    <span></span>
                    <span>+Cart</span>
                </button>
            @endif
        </div>
        <!-- end card -->
        <div class="grid md:col-span-2 my-5 md:my-0">
            <span>{{$product->description}}</span>
        </div>
    </div>
@endsection
