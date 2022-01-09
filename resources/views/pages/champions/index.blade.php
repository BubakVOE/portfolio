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
                        <a href="{{ route('champions') }}" class="mr-2 text-sm font-medium text-black-custom capitalize">
                            Champions
                        </a>
                    </div>
                </li>

            </ol>
        </nav>

        <div class="lg:w-full">
            <div class="py-16 px-4 sm:py-24 sm:px-6 lg:px-8" >

                <div class="">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl text-center flex flex-col">
                        <span class="block xl:inline uppercase">postavy</span>

                        <div class="text-left flex flex-col my-5">


                            <span class="block font-bold text-xl text-gray-700">
                                počet postav <span class="font-extrabold tracking-tight text-own-orange">{{ $amount }}
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

            {{-- MOBILE searchbar MOBILE --}}
                <div id="mobileToggles" class="hidden fixed inset-0  z-40 lg:hidden" role="dialog" aria-modal="true">

                    <div class="fixed inset-0 bg-black bg-opacity-20" aria-hidden="true"></div>

                    <div class="ml-auto relative max-w-xs w-full h-full bg-white shadow-xl py-4 pb-12 flex flex-col overflow-y-auto">

                        <div class="px-4 flex items-center justify-between">
                            <h2 class="text-lg font-medium text-gray-900">Filtry</h2>

                            <button onclick="mobileToggle()" type="button" class="-mr-2 w-10 h-10 bg-white p-2 rounded-md flex items-center justify-center text-gray-400 border-2">
                                <span class="sr-only">Zavřít menu</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Filters -->
                        <form class="mt-4 border-t border-gray-200">
                            <h3 class="sr-only">Filtry</h3>


                        {{-- typ stavby --}}
                            <div class="border-t border-gray-200 px-4 py-6">

                                <h3 class="-mx-2 -my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                    <button type="button" class="px-2 py-3 bg-white w-full flex items-center justify-between text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-0" aria-expanded="false">
                                        <span class="font-medium text-gray-900">
                                            Typ
                                        </span>
                                        <span class="ml-6 flex items-center">
                                            <svg onclick="houseToggle()" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                            </svg>

                                            <svg  onclick="houseToggle()" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>

                                <div id="houseToggles" class="pt-6" id="filter-section-mobile-0">
                                    <div class="">

                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            Free rotace
                                            </label>
                                        </div>

                                    </div>
                                </div>

                            </div>

                    {{-- dispozice --}}
                            <div class="border-t border-gray-200 px-4 py-6">
                                <h3 class="-mx-2 -my-3 flow-root">

                                    <button type="button" class="px-2 py-3 bg-white w-full flex items-center justify-between text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-0" aria-expanded="false">
                                        <span class="font-medium text-gray-900">
                                            Lajna
                                        </span>

                                        <span class="ml-6 flex items-center">
                                            <svg onclick="colorToggle()" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                            </svg>

                                            <svg onclick="colorToggle()" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>

                                <div id="colorToggles" class="pt-6" id="filter-section-mobile-0">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            top
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-color-1" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            jungle
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-color-2" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            mid
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-color-3" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            adc
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-color-4" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            supp
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

            {{--PC search bar PC --}}
                <div class="w-8/12 mx-auto">
                    <div class="w-11/12 mx-auto text-center space-y-5 my-10 block lg:hidden">
                        <div class="text-center ">
                            <button onclick="mobileToggle()" type="button" class="text-gray-400 lg:hidden bg-gray-600 p-2">
                                <span class="sr-only">Filters</span>

                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div class="bg-gray-400 p-2  rounded-lg ">
                            <div class="flex justify-between rounded bg-yellow-custom">
                                <input
                                    type="text"
                                    class="rounded outline-none focus:ring-0 border-0 bg-yellow-custom"
                                    placeholder="Search..."
                                    >

                                <button class="flex items-center justify-center px-4 ">
                                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                {{-- search bar --}}
                    <div class="hidden lg:grid grid-cols-4 place-items-center shadow-outSmaller bg-gray-300 px-3 rounded-lg">
                    {{-- vyhledávání --}}
                        <div class="flex rounded bg-white  shadow-inner">
                            <input
                                type="text"
                                class="pl-0 pr-4 py-2 w-44 xl:w-8/12 mx-auto rounded outline-none focus:ring-0 border-0 bg-transparent "
                                placeholder="Například: Master yi"
                                >

                            <button class="flex items-center justify-center pr-2 xl:px-4 ">
                                <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                </svg>
                            </button>
                        </div>

                    {{-- free rotace --}}
                        <div class="flex flex-row items-center justify-center lg:space-x-10 py-2 xl:w-8/12 mx-auto   ">
                            <img class="rounded p-2 w-10 h-10 xl:w-12 xl:h-12 bg-white shadow-inner transition delay-100 duration-300 ease-in-out hover:bg-red-custom " src="{{ asset('img/searchBar/byt.png') }}" alt="">
                            <img class="rounded p-2 w-10 h-10 xl:w-12 xl:h-12 bg-white shadow-inner transition delay-100 duration-300 ease-in-out hover:bg-red-custom " src="{{ asset('img/searchBar/dum.png') }}" alt="">
                        </div>

                    {{-- role --}}
                        <select name="" class="bg-yellow-custom border-0 ring-0 focus:ring-0 rounded my-3 xl:w-8/12 mx-auto   ">
                            <option value="">top</option>
                            <option value="">jungle</option>
                            <option value="">mid</option>
                            <option value="">adc</option>
                            <option value="">supp</option>
                        </select>

                    {{-- obtížnost --}}
                        <select name="" class="bg-yellow-custom border-0 ring-0 focus:ring-0 rounded my-3 xl:w-8/12 mx-auto   ">
                            <option value="">easy</option>
                            <option value="">medium</option>
                            <option value="">hard</option>
                        </select>
                    </div>
                </div>

                <div class="mt-20 w-10/12 mx-auto grid grid-cols-1 place-items-center gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 bg-gradient-to-br from-own-orange to-gradient-red rounded-lg px-4 py-24 md:px-16 md:py-16">
                    @foreach ($champions as $champion)
                        <x-champions.champion-card :champion="$champion"/>
                    @endforeach

                    @empty($champion)
                        <h1 class="text-center font-bold uppercase ">Žádné data nebyly načteny</h1>
                    @endempty
                </div>

            </div>

        </div>

    </section>

@endsection
