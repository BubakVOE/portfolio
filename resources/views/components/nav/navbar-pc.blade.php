<div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
            <a href="{{ route('domu') }}">
                <span class="sr-only">Workflow</span>
                <img class="h-8 w-auto sm:h-10" src="{{ asset('img/navbar/riot-fist.png') }}" alt="">
            </a>
        </div>

        <div class="-mr-2 -my-2 md:hidden">
            <button type="button" onclick="hamburgerToggle()" class="  border-2 bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="h-6 w-6  " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <nav class="hidden md:flex space-x-10">
        {{-- domů --}}
            <div class="relative {{ active('/') }} border-b border-black-lighter hover:border-own-red ">
                <a href="{{ route('domu') }}" class="font-bold text-xl text-own-orange font-Rubik hover:text-own-red ">
                    Domů
                </a>
            </div>

        {{-- champions --}}
            <div class="relative {{ active(['champions', 'champions/*', 'champion/*', 'skins', 'skins/*']) }} border-b border-black-lighter hover:border-own-red ">
                <button type="button" onclick="champToggle()" class="font-bold text-xl text-own-orange font-Rubik pb-1 hover:text-own-red group rounded-md inline-flex items-center focus:outline-none " aria-expanded="false">
                    <span>Postavy</span>

                    <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div id="champLinks" class="hidden border border-own-orange shadow-lg bg-own-lightgray bg-opacity-40 backdrop-filter backdrop-blur-xl rounded-md absolute z-40 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2 ">
                    <div class=" overflow-hidden ">
                        <div class="relative grid gap-6  px-5 py-6 sm:gap-8 sm:p-8">
                            <a href="{{ route('champions') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <svg class="flex-shrink-0 h-6 w-6 text-own-orange" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>

                                <div class="ml-4">
                                    <p class="text-base font-medium text-black-custom">
                                        Postavy
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Prohlédnout si aktuální Championy ve hře
                                    </p>
                                </div>
                            </a>

                            <a href="{{ route('weeklyRotations') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-own-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>

                                <div class="ml-4">
                                    <p class="text-base font-medium text-black-custom">
                                        Rotace týdne
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Týdenní rotace se mění každý týden v úterý
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Rotace zdarma se odemkne od 11. levelu
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Rotace zdarma obsahuje 16 postav
                                    </p>
                                </div>
                            </a>

                            <a href="{{ route('newbieRotations') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-own-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>

                                <div class="ml-4">
                                    <p class="text-base font-medium text-black-custom">
                                        Rotace pro nováčky
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Postavy zdarma do 11.levelu
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Rotace pro nováčky obsahuje 10 postav
                                    </p>
                                </div>
                            </a>

                            <a href="{{ route('skins') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

                                <!-- Heroicon name: outline/refresh -->

                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-own-orange"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-black-custom">
                                        Arty champů
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Prohlédni si fullHD obrázky všech champů
                                    </p>
                                </div>
                            </a>

                        </div>

                        <div class="px-5 py-5 bg-own-darkgray bg-opacity-70  space-y-6 sm:flex justify-center sm:space-y-0 sm:space-x-10 sm:px-8">
                            <div class="flow-root">
                                <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                <!-- Heroicon name: outline/play -->
                                    <svg class="flex-shrink-0 h-6 w-6 text-red-custom" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="ml-3">Buildy</span>
                                </a>
                            </div>

                            <div class="flow-root">
                                <a href="{{ route('runes') }}" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                <!-- Heroicon name: outline/phone -->
                                <svg class="flex-shrink-0 h-6 w-6 text-red-custom" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="ml-3">Runy</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        {{-- skins --}}
            <div class="relative {{ active(['champions', 'champions/*', 'champion/*', 'skins', 'skins/*']) }} border-b border-black-lighter hover:border-own-red ">
                <button type="button" onclick="champToggle()" class="font-bold text-xl text-own-orange font-Rubik pb-1 hover:text-own-red group rounded-md inline-flex items-center focus:outline-none " aria-expanded="false">
                    <span>Postavy</span>

                    <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div id="champLinks" class="hidden border border-own-orange shadow-lg bg-own-lightgray bg-opacity-40 backdrop-filter backdrop-blur-xl rounded-md absolute z-40 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2 ">
                    <div class=" overflow-hidden ">
                        <div class="relative grid gap-6  px-5 py-6 sm:gap-8 sm:p-8">
                            <a href="{{ route('champions') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <svg class="flex-shrink-0 h-6 w-6 text-own-orange" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>

                                <div class="ml-4">
                                    <p class="text-base font-medium text-black-custom">
                                        Postavy
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Prohlédnout si aktuální Championy ve hře
                                    </p>
                                </div>
                            </a>

                            <a href="{{ route('weeklyRotations') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-own-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>

                                <div class="ml-4">
                                    <p class="text-base font-medium text-black-custom">
                                        Rotace týdne
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Týdenní rotace se mění každý týden v úterý
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Rotace zdarma se odemkne od 11. levelu
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Rotace zdarma obsahuje 16 postav
                                    </p>
                                </div>
                            </a>

                            <a href="{{ route('newbieRotations') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-own-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>

                                <div class="ml-4">
                                    <p class="text-base font-medium text-black-custom">
                                        Rotace pro nováčky
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Postavy zdarma do 11.levelu
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Rotace pro nováčky obsahuje 10 postav
                                    </p>
                                </div>
                            </a>

                            <a href="{{ route('skins') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

                                <!-- Heroicon name: outline/refresh -->

                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-own-orange"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-black-custom">
                                        Arty champů
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Prohlédni si fullHD obrázky všech champů
                                    </p>
                                </div>
                            </a>

                        </div>

                        <div class="px-5 py-5 bg-own-darkgray bg-opacity-70  space-y-6 sm:flex justify-center sm:space-y-0 sm:space-x-10 sm:px-8">
                            <div class="flow-root">
                                <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                <!-- Heroicon name: outline/play -->
                                    <svg class="flex-shrink-0 h-6 w-6 text-red-custom" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="ml-3">Buildy</span>
                                </a>
                            </div>

                            <div class="flow-root">
                                <a href="{{ route('runes') }}" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                <!-- Heroicon name: outline/phone -->
                                <svg class="flex-shrink-0 h-6 w-6 text-red-custom" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="ml-3">Runy</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        {{-- VIP --}}
            <div class="relative {{ active('vip') }} border-b border-black-lighter hover:border-own-red ">
                <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                <button type="button" onclick="vipToggle()" class="font-bold text-xl text-own-orange font-Rubik pb-1 hover:text-own-red group rounded-md inline-flex items-center focus:outline-none " aria-expanded="false">
                    <span>VIP</span>

                    <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div id="vipLinks" class="hidden border border-own-orange shadow-lg bg-own-lightgray bg-opacity-40 backdrop-filter backdrop-blur-xl rounded-md absolute z-40 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2 ">
                    <div class=" overflow-hidden ">
                        <div class="relative grid gap-6  px-5 py-6 sm:gap-8 sm:p-8">
                            <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-own-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">
                                        Předplatné
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Analýzy, grafy, data navíc
                                    </p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

                                <svg class="flex-shrink-0 h-6 w-6 text-own-orange" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>

                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">
                                        Discord
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Discord server, o který se pečuje a jsou zde jenom aktivní hráči, kteří zde hrávají
                                    </p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-own-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                </svg>

                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">
                                        Giveawaye
                                    </p>
                                    <p class="mt-1 text-sm text-gray-900">
                                        Větší šance než plebíci na výhru
                                    </p>
                                </div>
                            </a>

                        </div>

                        <div class="px-5 py-5 bg-own-darkgray sm:px-8 sm:py-8">
                            <ul role="list" class="mt-4 space-y-4">
                                <li class="text-base truncate">
                                    <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                                        Další výhody se připravují
                                    </a>
                                </li>

                                <li class="text-base truncate">
                                    <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                                        Další výhody se připravují
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>

            </div>

            <a href="{{ route('news') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">
                Patch Notes
            </a>
            
        </nav>

        @guest
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                <a href="{{ route('login') }}" class="whitespace-nowrap text-base font-medium text-own-orange hover:text-own-red">
                    Příhlásit se
                </a>
                <a href="{{ route('register') }}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-own-orange hover:bg-own-red">
                    Zaregistrovat se
                </a>
            </div>
        @endguest

        @auth
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">

                <div class="relative bg-own-orange px-3 py-2 rounded-lg">
                    <button type="button" onclick="userToggle()" class=" font-medium font-Rubik group rounded-md inline-flex items-center text-white focus:outline-none " aria-expanded="false">
                        <span>Profil</span>

                        <svg class=" ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div id="userLinks" class="hidden border border-own-orange shadow-lg bg-own-lightgray bg-opacity-40 backdrop-filter backdrop-blur-xl rounded-md absolute z-40 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2 ">
                        <div class="rounded-lg shadow-lg overflow-hidden ">

                            <div class="relative grid gap-6 px-5 py-6 sm:gap-8 sm:p-8">
                                <a href="{{ route('summoner-show', Auth::user()->username ) }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-own-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                    </svg>

                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            {{ Auth::user()->username }}
                                        </p>
                                        <p class="mt-1 text-sm text-gray-900">
                                            Prohlédnout si informace o tvém League of Legends účtu
                                        </p>
                                    </div>
                                </a>

                                <a href="{{ route('account-index', Auth::user()->username) }} " class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-6 w-6 text-own-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                    </svg>

                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Přehled
                                        </p>
                                        <p class="mt-1 text-sm text-gray-900">
                                            Prohlédnout si informace o tvém League of Legends účtu
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="px-5 py-5 bg-own-darkgray space-y-6 sm:flex justify-center sm:space-y-0 sm:space-x-10 sm:px-8">
                                <div class="flow-root">
                                    <a href="{{ route('logout') }}"
                                        class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 group hover:bg-gray-100"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 text-red-custom" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>

                                        <span class="ml-3 text-gray-400 group-hover:text-red-custom">Odhlásit se</span>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                            {{ csrf_field() }}
                                        </form>
                                    </a>
                                </div>

                                <div class="flow-root">
                                    <a href="{{ route('account-edit', Auth::user()->username) }}" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 group hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 text-red-custom" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span class="ml-3 text-gray-400 group-hover:text-red-custom">Nastavení</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        @endauth


    </div>
</div>
