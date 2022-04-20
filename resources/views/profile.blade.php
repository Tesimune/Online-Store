@extends('layouts.app')

@section('content')
<div class="container mb-9">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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
    </div>
    <div class="grid md:grid-cols-2 gap-3  md:m-40 my-5">
        <section class="text-black">
            <label class="mb-5 text-lg text-slate-500">User Information</label>
            <form class="grid gap-3" action="">
                <input class="w-full p-2 rounded-md outline-none border-b-2 border-l-2 border-slate-600" type="text" placeholder="Full Name"/>
                <input class="w-full p-2 rounded-md outline-none border-b-2 border-l-2 border-slate-600" type="email" placeholder="Email"/>
                <input class="w-full p-2 rounded-md outline-none border-b-2 border-l-2 border-slate-600" type="number" placeholder="Phone Numbre"/>
                <textarea class="w-full p-2 rounded-md outline-none border-b-2 border-l-2 border-slate-600" type="text" placeholder="Address"></textarea>
                <button class="bg-green-500 text-white p-2 w-20 rounded shadow-md shadow-black">Submit</button>
            </form>
        </section>
        <section class="grid md:justify-center text-black">
            <label class="mb-5 text-lg text-slate-500">Auth Information</label>
            <form class="grid gap-3" action="">
                <input class="w-full p-2 rounded-md outline-none border-b-2 border-l-2 border-slate-600" type="password" placeholder="Old Password"/>
                <input class="w-full p-2 rounded-md outline-none border-b-2 border-l-2 border-slate-600" type="password" placeholder="New Password"/>
                <input class="w-full p-2 rounded-md outline-none border-b-2 border-l-2 border-slate-600" type="password" placeholder="Confirm New Password"/>
                <button class="bg-blue-500 text-white p-2 w-20 rounded shadow-md shadow-black">Submit</button>
            </form>
        </section>
    </div>
    
</div>
@endsection
