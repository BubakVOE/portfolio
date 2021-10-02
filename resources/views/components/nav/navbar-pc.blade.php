<div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
            <a href="https://www.leagueoflegends.com/cs-cz/">
                <span class="sr-only">Workflow</span>
                <img class="h-8 w-auto sm:h-10" src="{{ asset('img/navbar/riot-fist.png') }}" alt="">
            </a>
        </div>

        <div class="-mr-2 -my-2 md:hidden">
            <button type="button" onclick="hamburgerToggle()" class=" border-2 bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <nav class="hidden md:flex space-x-10">

            <a href="{{ route('domu') }}" class="text-lg font-medium text-own-orange font-Rubik hover:text-own-red">
                Domů
            </a>

            <div class="relative">
                <button type="button" onclick="champToggle()" class="text-lg font-medium text-own-orange font-Rubik group rounded-md inline-flex items-center hover:text-own-red focus:outline-none " aria-expanded="false">
                    <span>Postavy</span>

                    <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div id="champLinks" class="hidden absolute z-40 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2 ">
                    <div class="rounded-lg shadow-lg overflow-hidden ">
                        <div class="relative grid gap-6 bg-own-lightgray px-5 py-6 sm:gap-8 sm:p-8">
                            <a href="{{ route('champions') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <svg class="flex-shrink-0 h-6 w-6 text-own-orange" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>

                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">
                                        Postavy
                                    </p>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Prohlédnout si aktuální Championy ve hře
                                    </p>
                                </div>
                            </a>

                            <a href="{{ route('freeRotations') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                <!-- Heroicon name: outline/cursor-click -->
                                <svg class="flex-shrink-0 h-6 w-6 text-own-orange" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                </svg>

                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">
                                        Rotace týdne
                                    </p>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Free rotation se mění každý týden v úterý
                                    </p>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Free rotace se odemkne od 11. levelu
                                    </p>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Free rotace obsahuje 16 postav
                                    </p>
                                </div>
                            </a>

                            <a href="{{ route('newbieRotation') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                <!-- Heroicon name: outline/shield-check -->
                                <svg class="flex-shrink-0 h-6 w-6 text-own-orange" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>

                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">
                                        Rotace pro nováčky
                                    </p>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Postavy zdarma do 11.levelu
                                    </p>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Rotace pro nováčky obsahuje 10 postav
                                    </p>
                                </div>
                            </a>

                            <a href="{{ route('skins') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                <!-- Heroicon name: outline/refresh -->
                                <svg class="flex-shrink-0 h-6 w-6 text-own-orange" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">
                                        Arty champů
                                    </p>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Prohlédni si fullHD obrázky všech champů
                                    </p>
                                </div>
                            </a>

                        </div>

                        <div class="px-5 py-5 bg-own-darkgray space-y-6 sm:flex justify-center sm:space-y-0 sm:space-x-10 sm:px-8">
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
                                <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                <!-- Heroicon name: outline/phone -->
                                <svg class="flex-shrink-0 h-6 w-6 text-red-custom" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="ml-3">Contact Sales</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="relative">
                <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                <button type="button" onclick="vipToggle()" class="text-own-orange text-lg  group rounded-md inline-flex items-center font-medium hover:text-own-red focus:outline-none " aria-expanded="false">
                    <span>VIP</span>
                    <!--
                        Heroicon name: solid/chevron-down

                        Item active: "text-gray-600", Item inactive: "text-gray-400"
                    -->
                    <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>


                <div id="vipLinks" class="absolute hidden z-40 left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">

                    <div class="rounded-lg shadow-lg overflow-hidden">

                        <div class="relative grid gap-6 bg-own-lightgray px-5 py-6 sm:gap-8 sm:p-8">
                            <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                <!-- Heroicon name: outline/support -->
                                <svg class="flex-shrink-0 h-6 w-6 text-own-orange" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">
                                        Předplatné
                                    </p>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Analýzy, grafy, data navíc
                                    </p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                <!-- Heroicon name: outline/bookmark-alt -->
                                <svg class="flex-shrink-0 h-6 w-6 text-own-orange" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">
                                        Discord
                                    </p>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Discord server, o který se pečuje a jsou zde jenom aktivní hráči, kteří zde hrávají
                                    </p>
                                </div>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                <!-- Heroicon name: outline/calendar -->
                                <svg class="flex-shrink-0 h-6 w-6 text-own-orange" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">
                                        Giveawaye
                                    </p>
                                    <p class="mt-1 text-sm text-gray-500">
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


                <a  href="{{ route('logout') }}"
                    class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-own-orange hover:bg-own-red"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     odhlásit se
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>


            </div>
        @endauth


    </div>
</div>