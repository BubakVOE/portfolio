<div class="absolute top-20">
    @if (Session::has('message'))
        <div class="px-6 py-4 rounded absolute left-1/2 z-50 transform -translate-x-1/2 bg-red-custom">
            <h1 class="text-white font-bold font-montserrat">{{ Session::get('message') }}</h1>
        </div>
    @endif
</div>
