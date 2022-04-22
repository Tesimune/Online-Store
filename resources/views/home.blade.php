@extends('layouts.app')

@section('content')
<div class="grid md:grid-cols-12 gap-2">
    <div class="hidden md:block col-span-1" id=sidebar>
        <Sidebar></Sidebar>
    </div>
    <div class="border-2 m-2 col-span-11">
        <div class="flex justify-between p-3 border-b-2">
            {{ __('Dashboard') }}
            <span class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </span>
        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

                @if(auth()->user()->role == 'admin')
                    <a href="{{ route('product.create') }}" class="p-2 bg-green-500">
                        Create New Product
                    </a>
                @endif
        </div>
    </div>
</div>
@endsection
