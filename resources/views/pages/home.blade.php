@extends('layouts.user')


@section('content')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative  overflow-hidden w-full lg:pt-20 lg:pb-28 bg-own-lightgray md:pr-80  ">
    <div class="max-w-7xl mx-auto  ">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-14">

            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>


        {{-- animace --}}



            <div class=" backdrop-filter backdrop-blur-2xl ">

                <div class="z-30 ">
                    <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">

                            <div class="hidden md:block cursor-default md:ml-10 md:pr-4 md:space-x-8">
                                <a class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                                    Yone
                                </a>

                                <a class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                                    Yasuo
                                </a>

                                <a class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                                    Master YI
                                </a>

                                <a class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                                    Sivir
                                </a>

                                <a class="dot font-medium text-gray-500 hover:text-gray-900 px-3 py-2 rounded-lg">
                                    Veigar
                                </a>
                            </div>
                        </nav>
                    </div>

                </div>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">

                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl text-center">
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

    <div class="lg:absolute lg:inset-y-0 lg:right-32 lg:w-1/2 mt-20 ">

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




@endsection
