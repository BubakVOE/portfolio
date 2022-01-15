@extends('layouts.user')
@section('content')

<section class="bg-own-lightgray">
    <nav>
        <ol role="list" class="max-w-2xl py-4 border-b border-own-darkgray mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
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
                    <a href="{{ route('skins-show', $championName) }}" class="mr-2 text-sm font-medium text-black-custom capitalize">
                        {{ $championName }}
                    </a>
                </div>
            </li>

        </ol>
    </nav>

    <div class="max-w-3xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-full lg:px-8">

        <div class="relative flex flex-col items-center justify-center">

            <div class="h-80 overflow-hidden">
                <img class="" src="{{ ('https://ddragon.leagueoflegends.com/cdn/img/champion/splash/'.$championName.'_0.jpg') }}" alt="">
            </div>

            <div class="text-center absolute top-1/2">
                <div class="backdrop-filter  backdrop-blur-xl p-5">
                    <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                        <a class="flex items-center justify-evenly flex-row" href="{{ route('champions-show', $championName) }}">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            {{ $championName }}
                        </a>
                    </h1>

                    <h2 class="text-gray-200">Splash obrázky</h2>

                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 place-items-center gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8 bg-gradient-to-br from-own-orange to-gradient-red rounded-lg px-4 py-24 md:px-16 md:py-16">
            @foreach ($dataSkin as $dataSkin)
                <div>
                    <img src="{{ ('https://ddragon.leagueoflegends.com/cdn/img/champion/splash/'.$championName.'_'.$dataSkin['num'].'.jpg') }}" alt="">

                    <div class="font-bold text-center relative bottom-8 md:bottom-10 rounded-t-lg w-6/12 mx-auto py-2 backdrop-filter backdrop-blur-xl text-own-lightgray text-xs md:text-base">
                        @if ($dataSkin['name'] == 'default')
                            <h1 class="">{{ $championName }}</h1>
                        @else
                            <h1 class="">{{ $dataSkin['name'] }}</h1>
                        @endif
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>

@endsection

