@extends('layouts.app')

@section('content')
    <div class="grid gap-2 justify-center mb-5">
        <h2 class="bg-slate-700 text-white text-xl text-center p-2 my-3 border border-solid border-black shadow">Create New Product</h2>
        <form method="POST" enctype="multipart/form-data" action="{{ route('product.store') }}">

            @csrf
            <div class="grid md:grid-cols-2 gap-10">

                <div class="bg-white p-2 border border-dashed border-black rounded-lg shadow-md shadow-slate-600">

                    <input type="file" name="thumbnail" class="flex justify-center p-2 rounded outline-none w-full h-full" placeholder="Selec Image"/>
                    @error('thumbnail')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="grid gap-3">

                    <input class="c-input" name="name" type="text" placeholder="Product Name"
                        />
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror

                    <input class="c-input" name="cost_price" type="number" placeholder="Cost Price"
                        value="{{ old('cost_price') ?? '' }}" />
                        @error('cost_price')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror


                    <input class="c-input" name="price" type="number"
                        placeholder="Selling Price" value="{{ old('price') ?? '' }}" />
                        @error('price')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                    <input class="c-input" name="discount" type="number" placeholder="Discount %"
                        value="{{ old('discount') ?? '' }}" />
                    @error('discount')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror

                    <input class="c-input" type="number" placeholder="Quantity" name="quantity"
                        value="{{ old('quantity') ?? '' }}"/>
                        @error('quantity')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                    <input class="c-input" placeholder="Category" name="category_id"
                        value="{{ old('category_id') ?? '' }}"/>
                    @error('category_id')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror

                    <textarea class="c-input resize-none" placeholder="Description" name="description">{{ old('description') ?? '' }}</textarea>
                        @error('description')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                </div>
            </div>
            <span><button class="bg-blue-300 p-2 w-full my-3 rounded shadow-md shadow-slate-600">SUBMIT</button></span>
        </form>
    </div>
@endsection
