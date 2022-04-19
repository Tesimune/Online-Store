@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-2 gap-3 md:grid-cols-4 lg:grid-cols-5 md:gap-9 p-3 md:p-5 md:mx-9 mb-20">
        @foreach ($products as $product)
            <!-- card -->
        <x-product :product="$product" />
        <!-- end card -->
        @endforeach
    </div>
@endsection
