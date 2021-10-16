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
                <a href="{{ route('skins') }}" class="mr-2 text-sm font-medium text-black-custom capitalize">
                    Skins
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
                <a href="{{ route('skins-show',$champion->id) }}" class="mr-2 text-sm font-medium text-black-custom ">
                    {{ $champion->nickname }}
                </a>
            </div>
        </li>

    </ol>
</nav>


<div class="max-w-3xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-full lg:px-8">

    <div class="">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl text-center flex flex-col">
            <span class="block xl:inline uppercase w-2/12 mx-auto">
                <a class="flex items-center justify-evenly flex-row" href="{{ route('champions-show', $champion) }}">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    {{ $champion->nickname }}
                </a>
            </span>

            <div class="my-5 flex items-center justify-center">
                <span class="block font-bold text-xl xl:inline text-gray-700">
                    Splash obrázky
                </span>
            </div>
        </h1>
    </div>

    <div class="grid grid-cols-1 place-items-center gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8 bg-gradient-to-br from-own-orange to-gradient-red rounded-lg px-4 py-24 md:px-16 md:py-16">
        @foreach ($dataSkin as $dataSkin)
            <div>
                <img src="{{ ('https://ddragon.leagueoflegends.com/cdn/img/champion/splash/'.$champion->nickname.'_'.$dataSkin['num'].'.jpg') }}" alt="">

                <div class="font-bold text-center relative bottom-8 md:bottom-10 rounded-t-lg w-6/12 mx-auto py-2 backdrop-filter backdrop-blur-xl text-own-lightgray text-xs md:text-base">
                    @if ($dataSkin['name'] == 'default')
                        <h1 class="">{{ $champion->nickname }}</h1>
                    @else
                        <h1 class="">{{ $dataSkin['name'] }}</h1>
                    @endif
                </div>

            </div>
        @endforeach
    </div>

</div>

@endsection

