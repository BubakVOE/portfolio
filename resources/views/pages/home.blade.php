@extends('layouts.user')


@section('content')

{{-- úvod --}}

<h1 class="hidden xl:block absolute uppercase text-8xl font-Raleway font-extrabold -top-12 left-5 transform z-20 -translate-y-1/2 opacity-10">
    domů
</h1>


    <div class="relative bg-white overflow-hidden my-28 ">

        <div class="max-w-7xl mx-auto ">
            <div class="relative bg-gray-200 p-5  z-30 lg:max-w-2xl lg:w-full ">

                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-gray-200 transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>



                <div class="w-9/12">
                    <div class="hidden md:flex justify-evenly items-center cursor-default md:space-x-8  p-2 bg-gray-200 rounded-b-lg ">
                        <h1 class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                            Aatrox
                        </h1>

                        <h1 class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                            Ahri
                        </h1>

                        <h1 class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                            Ekko
                        </h1>

                        <h1 class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                            Janna
                        </h1>

                        <h1 class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                            Akali
                        </h1>
                    </div>
                </div>



                <main class="mt-10 mx-auto max-w-7xl sm:mt-12 md:mt-16 lg:mt-20 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl text-center lg:text-left tracking-tight font-extrabold sm:text-5xl md:text-6xl uppercase font-poppins text-transparent bg-clip-text bg-gradient-to-r from-gradient-red to-own-darkgray">
                            <span class="block md:inline">League</span>
                            <span class="block md:inline text-3xl">of</span>
                            <span class="block md:inline  ">legends</span>
                        </h1>

                        <div class="grid grid-cols-2 my-10 lg:w-6/12 gap-x-4 gap-y-2  font-bold text-gray-light uppercase">
                            <h1 class="flex flex-row justify-between ">
                                <span class="">
                                    rychlejší
                                </span>
                                <span class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-custom" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                    </svg>
                                </span>
                            </h1>

                            <h1 class="flex flex-row justify-between ">
                                <span class="">
                                    přehlednější
                                </span>
                                <span class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-custom " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                </span>
                            </h1>

                            <h1 class="flex flex-row justify-between ">
                                <span class="">
                                    modernější
                                </span>
                                <span class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-custom" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                                    </svg>
                                </span>
                            </h1>

                            <h1 class="flex flex-row justify-between ">
                                <span class="">
                                    jednodušší
                                </span>
                                <span class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-custom" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                </span>
                            </h1>
                        </div>


                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-start lg:justify-start">
                            <div class="relative text-gray-600">
                                <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none w-96"
                                        type="search"
                                        name="search"
                                        placeholder="Vyvolávač"
                                >

                                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                    width="512px" height="512px">
                                    <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                </svg>
                                </button>

                            </div>
                        </div>

                    </div>
                </main>

            </div>
        </div>


        <div class="mySlides fade lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-11/12 lg:h-full " src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_1.jpg">
        </div>

        <div class="mySlides fade lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-11/12 lg:h-full " src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ahri_2.jpg">
        </div>

        <div class="mySlides fade lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-11/12 lg:h-full " src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ekko_2.jpg">
        </div>

        <div class="mySlides fade lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-11/12 lg:h-full " src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Janna_3.jpg">
        </div>

        <div class="mySlides fade lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-11/12 lg:h-full " src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Akali_2.jpg">
        </div>

    </div>

{{-- služby --}}
    <div class="py-12  bg-own-darkgray relative">

        <h1 class="hidden xl:block absolute uppercase text-8xl font-Raleway font-extrabold right-5 top-5 transform z-20  opacity-30">
            služby
        </h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl uppercase font-poppins text-gradient-red">
                    Proč u nás ?</h2>

                <p class="mt-4 max-w-2xl text-lg text-gray-200 lg:mx-auto">
                    Na naší webové stránce můžeš najít spoustu informací o svém účtu, které ti následně můžou pomoct ve zlepšování tvého <strong>skillu</strong>
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">

                <div class="relative p-2 rounded-lg shadow-xl hover:shadow-none hover:scale-95 transform delay-200 duration-200 ease-in-out bg-gray-medium hover:bg-gray-old ">
                    <dt>
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gray-old text-white border border-white">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-white">Historie zápasů</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                        Přehledné hledání odehraných zápasů a zjištění veškerých informací o zápasech.
                    </dd>
                </div>

                <div class="relative p-2 rounded-lg shadow-xl hover:shadow-none hover:scale-95 transform delay-200 duration-200 ease-in-out bg-gray-medium hover:bg-gray-old ">
                    <dt>
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gray-old text-white border border-white">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-white">Champions</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                        Přečti si příběh o postavách, informace o kouzlech, podívej se na skiny daných postav a nebo zjisti pouze obtížnost postavy !
                    </dd>
                </div>

                <div class="relative p-2 rounded-lg shadow-xl hover:shadow-none hover:scale-95 transform delay-200 duration-200 ease-in-out bg-gray-medium hover:bg-gray-old ">
                    <dt>
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gray-old text-white border border-white">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-white">Skins</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                        Prohlédni si veškeré skiny, které ve hře existují. Můžeš si také stáhnout daný skin z <strong>ART</strong> kolekce (fullHD) a následně si jí nastavit jako tapetu plochy
                    </dd>
                </div>

                <div class="relative p-2 rounded-lg shadow-xl hover:shadow-none hover:scale-95 transform delay-200 duration-200 ease-in-out bg-gray-medium hover:bg-gray-old ">
                    <dt>
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gray-old text-white border border-white">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-white">Buildy</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                        Můžeš získat inspiraci buildů pro tvojí oblibenou postavu od ostatních hráčů. Každý zaregistrovaný uživatel má možnost přidávat buildy (itemy, runy, styl hraní) pro ostatní hráče
                    </dd>
                </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="py-12 bg-white relative">
        <h1 class="absolute uppercase text-9xl font-Raleway font-extrabold top-5 left-5 z-10 opacity-40">
            živé zápasy
        </h1>

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-1/12">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        Back End Developer
                    </h2>
                    <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                        <!-- Heroicon name: solid/briefcase -->
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                        </svg>
                        Full-time
                        </div>
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                        <!-- Heroicon name: solid/location-marker -->
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        Remote
                        </div>
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                        <!-- Heroicon name: solid/currency-dollar -->
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                        </svg>
                        $120k &ndash; $140k
                        </div>
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                        <!-- Heroicon name: solid/calendar -->
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                        </svg>
                        Closing on January 9, 2020
                        </div>
                    </div>
                </div>

                <div class="mt-5 flex lg:mt-0 lg:ml-4">
                    <span class="hidden sm:block">
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <!-- Heroicon name: solid/pencil -->
                        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                        </svg>
                        Edit
                        </button>
                    </span>

                    <span class="hidden sm:block ml-3">
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <!-- Heroicon name: solid/link -->
                        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd" />
                        </svg>
                        View
                        </button>
                    </span>

                    <span class="sm:ml-3">
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <!-- Heroicon name: solid/check -->
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Publish
                        </button>
                    </span>

                    <!-- Dropdown -->
                    <span class="ml-3 relative sm:hidden">
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="mobile-menu-button" aria-expanded="false" aria-haspopup="true">
                        More
                        <!-- Heroicon name: solid/chevron-down -->
                        <svg class="-mr-1 ml-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                        </button>


                        <div class="origin-top-right absolute right-0 mt-2 -mr-1 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="mobile-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="mobile-menu-item-0">Edit</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="mobile-menu-item-1">View</a>
                        </div>
                    </span>
                </div>
            </div>
        </div>



    </div>


@endsection

{{--





    --}}
