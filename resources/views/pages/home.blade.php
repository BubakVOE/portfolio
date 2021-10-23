@extends('layouts.user')


@section('content')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative  overflow-hidden w-full lg:pt-20 lg:pb-28 bg-own-lightgray md:pr-80 h-full  ">
    <div class="max-w-7xl mx-auto  ">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-14 ml-2">

            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>


        {{-- animace --}}

            <div class=" backdrop-filter backdrop-blur-2xl ">

                <div class="z-30 ">
                    <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">

                            <div class="hidden  md:flex cursor-default md:ml-10 md:pr-4 md:space-x-8">
                                <h1 class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                                    Yone
                                </h1>

                                <h1 class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                                    Yasuo
                                </h1>

                                <h1 class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                                    Master YI
                                </h1>

                                <h1 class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                                    Sivir
                                </h1>

                                <h1 class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                                    Veigar
                                </h1>
                            </div>
                        </nav>
                    </div>

                </div>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">

                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl text-center font-poppins">
                            <span class="block xl:inline">LEAGUE OF LEGENDS</span>
                            <span class="block  text-2xl xl:inline space-x-3">
                                <span class="text-own-orange">Moderní</span>
                                <span>&</span>
                                <span class="text-own-orange">Rychlé</span>
                                <span>&</span>
                                <span class="text-own-orange">Přehledné</span>
                            </span>
                        </h1>

                        <p class="mt-3 text-base  text-black-custom sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-base lg:mx-0">
                            Zjisti veškeré informace o daném vyvolávačovi, zápasech, výhrách, statistikách, nejhranějších postav apod. !
                        </p>

                        <div class="mt-5 sm:mt-8 md:mt-20 sm:flex sm:justify-center lg:justify-start">

                            <div class="rounded-md flex">
                                <input
                                class="w-96 flex items-center border-none justify-center px-8 py-3 text-base font-medium rounded-l-lg text-white focus:outline-none bg-own-red hover:bg-own-orange md:pt-4 md:pb-5 md:text-lg md:px-10 placeholder-white placeholder-opacity-30"
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
                    </div>
                </main>
            </div>

        </div>
    </div>

    <div class="lg:absolute lg:inset-y-0 lg:right-40 lg:w-1/2 mt-20 ">

        <div class="mySlides fade">
            <img class="" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img class="" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img class="" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_3.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img class="" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Darius_3.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img class="" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Darius_2.jpg" style="width:100%">
        </div>

    </div>

</div>


<div class=" pb-96 pt-20 w-10/12 mx-auto 0 h-full ">

    <div class="relative min-h-full">
        <div class="overflow-hidden absolute w-full">
            <img class="rounded-xl" src="{{ asset('img/background/poro-bg5.png') }}">
        </div>

        <div class="z-10 relative h-80 grid mx-auto grid-cols-3 place-items-center">

            <div class="relative bg-red-custom bg-opacity-10 rounded-xl top-52 backdrop-filter backdrop-blur-2xl hover:bg-opacity-20 group ">
                <a class="flex items-center justify-center flex-col px-10 py-5  " href="{{ route('skins') }}">
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

</div>



@endsection
