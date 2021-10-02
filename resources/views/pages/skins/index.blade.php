@extends('layouts.user')
@section('content')



<div class="max-w-3xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-full lg:px-8">

    <div class="">

        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl text-center flex flex-col">
            <span class="block xl:inline uppercase">ROTACE PRO NOVÁČKY</span>

            <div class="w-5/12 m-auto my-5">
                <div class="text-left  flex flex-col">
                    <span class="block font-bold  text-xl xl:inline text-gray-700">
                        pouze do levelu <span class="font-extrabold tracking-tight text-own-orange"></span> <span class="font-normal text-base relative bottom-1">(po-té bude tahle nabídka nedostupná)</span>
                    </span>

                    <span class="block font-bold  text-xl xl:inline text-gray-700">
                        počet postav <span class="font-extrabold tracking-tight text-own-orange">10</span>
                </div>
            </div>
        </h1>


    </div>


    <div class="grid grid-cols-1 place-items-center gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 bg-gradient-to-br from-own-orange to-gradient-red rounded-lg px-4 py-24 md:px-16 md:py-16">


            @foreach ($saveNicknames as $saveNickname)
                <x-champions.skin-card :skin='$saveNickname'/>
            @endforeach


    </div>

</div>

@endsection

