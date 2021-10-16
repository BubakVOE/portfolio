@extends('layouts.user')


@section('content')



<nav class="">
    <ol role="list" class="max-w-2xl py-4 border-b-2 border-gradient-red mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">

        <li class="flex items-center">
            <a href="{{ route('domu') }}" class="mr-2 text-sm font-medium text-black-custom capitalize">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
            </a>
        </li>

        <li>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-old" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </li>

        <li>
            <div class="flex items-center">
                <a href="{{ route('champions') }}" class="mr-2 text-sm font-medium text-black-custom capitalize">
                    Champions
                </a>
            </div>
        </li>
        <li>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-old" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </li>

        <li>
            <div class="flex items-center">
                <a href="{{ route('freeRotations') }}" class="mr-2 text-sm font-medium text-black-custom capitalize">
                    Free rotations
                </a>
            </div>
        </li>

    </ol>
</nav>


<div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

    <div class="">

        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl text-center flex flex-col">
            <span class="block xl:inline">ROTACE ZDARMA</span>

            <div class="text-left flex flex-col my-5 ">

                <span class="block font-bold text-xl text-gray-700">
                    počet postav <span class="font-extrabold tracking-tight text-own-orange"> 16
                </span>

                <span class="block font-bold text-xl text-gray-700">
                    verze patche <span class="font-extrabold tracking-tight text-own-orange">{{ env('patch') }}</span>
                </span>

                <span class="block font-bold text-xl text-gray-700">
                    nejnovější patch <span class="font-extrabold tracking-tight text-own-orange">{{ Http::get('https://ddragon.leagueoflegends.com/api/versions.json')[0] }}</span>
                </span>
            </div>
        </h1>


    </div>


    <div class="grid grid-cols-1 place-items-center gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 bg-gradient-to-br from-own-orange to-gradient-red rounded-lg px-4 py-24 md:px-16 md:py-16">
        @foreach ($freeChampionsData as $championData)
            <x-champions.champion-card :champion='$championData'/>
        @endforeach
    </div>

</div>

@endsection
