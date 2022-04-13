<header class="">

    <div class="py-8 flex items-center justify-center md:w-2/4 w-2/5 mx-auto bg-blue-300 my-2">
        <h1>ADS</h1>
    </div>

    <div class="py-3 md:px-10 px-2 bg-white border-b">

        <nav class="flex items-center gap-5 justify-between" id="navbar">

            <a href="/" class="font-bold text-xl text-blue-500 ">Woli</a>

            <div class="flex gap-5">
                <search></search>
                <cart></cart>
                <auth :is-logged-in="{{ auth()->user() }}"></auth>
            </div>


        </nav>

    </div>

</header>