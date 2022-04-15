@extends('layouts.app')

@section('content')
    <div class="grid gap-2 justify-center mb-5">
        <h2 class="bg-slate-700 text-white text-xl text-center p-2 my-3 border border-solid border-black shadow">Create New Product</h2>
        <form>
            @csrf
            <div class="grid md:grid-cols-2 gap-10">
                <div class="bg-white p-2 border border-dashed border-black rounded-lg shadow-md shadow-slate-600">
                    <input type="file" class="flex justify-center p-2 rounded outline-none w-full h-full" placeholder="Selec Image"/>
                </div>
                <div class="grid gap-3">
                    <input type="text" class="p-2 rounded outline-none shadow-md shadow-slate-600" placeholder="Product Name"/>
                    <input type="number" class="p-2 rounded outline-none shadow-md shadow-slate-600" placeholder="Cost Price"/>
                    <input type="number" class="p-2 rounded outline-none shadow-md shadow-slate-600" placeholder="Selling Price"/>
                    <input type="number" class="p-2 rounded outline-none shadow-md shadow-slate-600" placeholder="Old Price"/>
                    <input type="number" class="p-2 rounded outline-none shadow-md shadow-slate-600" placeholder="Stock"/>
                    <textarea class="p-2 rounded outline-none shadow-md shadow-slate-600" placeholder="Description"></textarea>
                </div>
            </div>
            <span><button class="bg-blue-300 p-2 w-full my-3 rounded shadow-md shadow-slate-600">SUBMIT</button></span>
        </form>
    </div>   
@endsection