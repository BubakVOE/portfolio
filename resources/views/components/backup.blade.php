<section class="relative w-full flex items-center justify-center space-x-20 pt-1/12 ">
    {{-- LEFT SIDE --}}
        <h1 class="absolute uppercase text-9xl font-Raleway font-extrabold top-40 transform -translate-y-1/2 left-0 z-10 opacity-40">
            domů
        </h1>

        <div class="flex flex-col items-start space-y-4 bg-gray-400 p-5 pt-0 w-6/12  border-2 border-gray-400 bg-opacity-50 rounded backdrop-filter backdrop-blur z-20 ">
            {{-- Champions --}}
            <div class="hidden md:flex justify-evenly items-center cursor-default md:space-x-8  p-2 w-7/12 mx-auto bg-gray-200 rounded-b-lg  ">
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

        {{-- LEFT-MIDDLE --}}
            <div class="text-4xl tracking-wide font-extrabold text-gray-900 sm:text-5xl md:text-6xl font-poppins flex flex-col items-center text-center justify-center w-full space-y-4 ">
                <h1>LEAGUE</h1>
                <h1 class="text-2xl">OF</h1>
                <h1>LEGENDS</h1>
            </div>

            <div class="w-6/12 mx-auto  ">
                <h1 class="font-bold border-b border-black-custom w-20">Zjisti své</h1>

                <div class="grid grid-cols-2 mt-2">
                    <h1>
                        <span>
                            rychlejší
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-custom" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.933 12.8a1 1 0 000-1.6L6.6 7.2A1 1 0 005 8v8a1 1 0 001.6.8l5.333-4zM19.933 12.8a1 1 0 000-1.6l-5.333-4A1 1 0 0013 8v8a1 1 0 001.6.8l5.333-4z" />
                              </svg>
                        </span>
                    </h1>
                    <h1>přehlednější</h1>
                    <h1>modernější</h1>
                    <h1>jednodušší</h1>
                </div>

            </div>


            <div class="rounded-md flex w-full justify-center">
                <input
                class="w-96 h-12 flex  items-center border-none justify-center px-8 py-3 text-base font-medium rounded-l-lg text-white focus:outline-none bg-own-red hover:bg-own-orange md:pt-4 md:pb-5 md:text-lg md:px-10 placeholder-white placeholder-opacity-30"
                type="text"
                placeholder="DanDy"
                >

                <div class="flex bg-own-black rounded-r-lg ml-2">

                    <button id="myBtn" class=" pl-5 py-2 cursor-pointer outline-none text-own-red focus:outline-none transitionhover:text-gray-500">
                        EUNE
                    </button>

                    <hr class="border-r h-10/12 m-auto border-red-500 mx-4">

                    <button class=" pr-5 py-2  ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-own-red h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>

                </div>

                <x-region-settings/>

            </div>

        </div>

    {{-- MIDDLE SIDE --}}
        <svg class="absolute right-1/2 w-64 z-10 h-full text-own-lightgray transform translate-x-96" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
            <polygon points="50,0 100,0 50,100 0,100" />
        </svg>

    {{-- RIGHT SIDE --}}
        <div class="w-4/12">
            <div class="mySlides fade">
                <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_1.jpg">
            </div>

            <div class="mySlides fade">
                <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ahri_2.jpg">
            </div>

            <div class="mySlides fade">
                <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ekko_2.jpg">
            </div>

            <div class="mySlides fade">
                <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Janna_3.jpg">
            </div>

            <div class="mySlides fade">
                <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Akali_2.jpg">
            </div>
        </div>
    </section>

    <section class="relative pt-2/12 pb-96 w-10/12 mx-auto 0 h-full ">
        <h1 class="absolute uppercase text-9xl font-Raleway font-extrabold top-48 right-0 z-10 opacity-40">
            další
        </h1>

        <div class="relative min-h-full">
            <div class="overflow-hidden absolute w-full">
                <img class="rounded-xl" src="{{ asset('img/background/poro-bg5.png') }}">
            </div>

            <div class="z-10 relative h-80 grid mx-auto grid-cols-3 place-items-center">

                <div class="relative bg-red-custom bg-opacity-10 rounded-xl top-52 backdrop-filter backdrop-blur-2xl hover:bg-opacity-20 group ">
                    <a class="flex items-center justify-center flex-col px-10 py-5  " href="{{ route('champions') }}">
                        <svg class="flex-shrink-0 h-20 w-20 text-own-orange group-hover:text-own-red" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        <h1 class="text-black-custom font-poppins font-bold">Postavy</h1>
                    </a>
                </div>

                <div class="relative bg-red-custom bg-opacity-10 rounded-xl top-52 backdrop-filter backdrop-blur-2xl hover:bg-opacity-20 ">
                    <a class="flex items-center justify-center flex-col px-10 py-5 " href="{{ route('skins') }}">
                        <svg class="flex-shrink-0 h-20 w-20 text-own-orange" xmlns="http://www.w3.org/2000/svg"   fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        <h1 class="text-black-custom font-poppins font-bold">Skiny</h1>
                    </a>
                </div>

                <div class="relative bg-red-custom bg-opacity-10 rounded-xl top-52 backdrop-filter backdrop-blur-2xl hover:bg-opacity-20 ">
                    @auth
                        <a class="flex items-center justify-center flex-col px-10 py-5 " href="{{ route('profile-index',Auth()->user()->username) }}">
                            <svg class="flex-shrink-0 h-20 w-20 text-own-orange"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <h1 class="text-black-custom font-poppins font-bold">Profil</h1>
                        </a>
                    @endauth
                    @guest
                        <a class="flex items-center justify-center flex-col px-10 py-5 " href="{{ route('login') }}">
                            <svg class="flex-shrink-0 h-20 w-20 text-own-orange"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <h1 class="text-black-custom font-poppins font-bold">Přihlaš se</h1>
                        </a>
                    @endguest
                </div>

            </div>
        </div>

    </section>

    <section class="relative pt-1/12 pb-96 w-10/12 mx-auto 0 h-full ">
        <h1 class="absolute uppercase text-9xl font-Raleway font-extrabold top-48 left-0 z-10 opacity-40">
            živé zápasy
        </h1>

        <div class="relative min-h-full">
            <div class="overflow-hidden absolute w-full">
                <img class="rounded-xl" src="{{ asset('img/background/poro-bg5.png') }}">
            </div>

            <div class="z-10 relative h-80 grid mx-auto grid-cols-3 place-items-center">

                <div class="relative bg-red-custom bg-opacity-10 rounded-xl top-52 backdrop-filter backdrop-blur-2xl hover:bg-opacity-20 group ">
                    <a class="flex items-center justify-center flex-col px-10 py-5  " href="{{ route('champions') }}">
                        <svg class="flex-shrink-0 h-20 w-20 text-own-orange group-hover:text-own-red" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        <h1 class="text-black-custom font-poppins font-bold">Postavy</h1>
                    </a>
                </div>

                <div class="relative bg-red-custom bg-opacity-10 rounded-xl top-52 backdrop-filter backdrop-blur-2xl hover:bg-opacity-20 ">
                    <a class="flex items-center justify-center flex-col px-10 py-5 " href="{{ route('skins') }}">
                        <svg class="flex-shrink-0 h-20 w-20 text-own-orange" xmlns="http://www.w3.org/2000/svg"   fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        <h1 class="text-black-custom font-poppins font-bold">Skiny</h1>
                    </a>
                </div>

                <div class="relative bg-red-custom bg-opacity-10 rounded-xl top-52 backdrop-filter backdrop-blur-2xl hover:bg-opacity-20 ">
                    @auth
                        <a class="flex items-center justify-center flex-col px-10 py-5 " href="{{ route('profile-index',Auth()->user()->username) }}">
                            <svg class="flex-shrink-0 h-20 w-20 text-own-orange"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <h1 class="text-black-custom font-poppins font-bold">Profil</h1>
                        </a>
                    @endauth
                    @guest
                        <a class="flex items-center justify-center flex-col px-10 py-5 " href="{{ route('login') }}">
                            <svg class="flex-shrink-0 h-20 w-20 text-own-orange"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <h1 class="text-black-custom font-poppins font-bold">Přihlaš se</h1>
                        </a>
                    @endguest
                </div>

            </div>
        </div>

    </section>
