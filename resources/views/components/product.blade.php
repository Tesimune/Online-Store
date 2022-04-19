<div class="relative">
    <a href="{{ route('product.show', ['product' => $product->id]) }}"
       class="bg-white shadow">
        <div class="h-36 overflow-hidden">
            <img src="{{ $product->thumbnail }}" alt="{{$product->name}}" class="w-full h-full" />
        </div>

        <div class="px-2 pb-2">
                    <span class="bg-red-500 text-white absolute text-xs font-bold p-1 top-0 right-0">
                      {{ round(($product->discount / $product->price) * 100, 0) }}%
                    </span>
            <h3 class="md:text-lg uppercase text-center">
                <a href="{{ route('product.show', ['product' => $product->id]) }}">
                    {{$product->name}}
                </a>
            </h3>
            <p class="flex items-center gap-4 py-1 justify-center">
                <span class="text-red-500">₦{{$product->price - $product->discount}}</span>
                <strike class="opacity-50">₦{{$product->price}}</strike>
            </p>
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
    </a>
</div>
