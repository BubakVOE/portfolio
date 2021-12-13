@extends('layouts.user')


@section('content')

{{-- úvod --}}
    <section class="relative border border-white">
        <h1 class="hidden xl:block absolute uppercase text-8xl font-Raleway font-extrabold top-5 left-5 transform z-20 opacity-10">
            domů
        </h1>


        <div class="relative bg-white overflow-hidden my-28 grid grid-cols-2  ">

            <div class="flex items-center justify-center relative left-20 ">
                <div class="relative bg-own-darkgray p-36 z-30 rounded-l-xl">

                    <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-own-darkgray transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                        <polygon points="50,0 100,0 50,100 0,100" />
                    </svg>

                    <div class="">
                        <div class="sm:text-center lg:text-left">
                            <h1 class="text-4xl text-center lg:text-left tracking-tight font-extrabold sm:text-5xl md:text-6xl uppercase font-poppins text-transparent bg-clip-text bg-gradient-to-r from-gradient-red to-own-orange">
                                <span class="block md:inline">League</span>
                                <span class="block md:inline text-3xl">of</span>
                                <span class="block md:inline  ">legends</span>
                            </h1>

                            <div class="grid grid-cols-2 my-10 lg:w-7/12 gap-x-4 gap-y-2 font-bold text-own-lightgray uppercase">
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
                                    <input class="border-2 border-own-orange bg-own-lightgray h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none w-80 placeholder-own-black"
                                            type="search"
                                            name="search"
                                            placeholder="Vyvolávač"
                                    >

                                    <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                    <svg class="text-own-black h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
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
                    </div>

                </div>
            </div>

            <div class="flex items-center justify-start bg-own-darkgray mr-36 relative  ">

                <div class="mySlides fade  ">
                    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-11/12 lg:h-full rounded-r-xl  " src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_1.jpg">
                </div>

                <div class="mySlides fade  ">
                    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-11/12 lg:h-full rounded-r-xl " src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ahri_2.jpg">
                </div>

                <div class="mySlides fade  ">
                    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-11/12 lg:h-full rounded-r-xl " src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ekko_2.jpg">
                </div>

                <div class="mySlides fade  ">
                    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-11/12 lg:h-full rounded-r-xl " src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Janna_3.jpg">
                </div>

                <div class="mySlides fade  ">
                    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-11/12 lg:h-full rounded-r-xl " src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Akali_2.jpg">
                </div>

                <x-home.champions-active/>

            </div>
        </div>
    </section>

{{-- služby --}}
    <section class="relative">

        <h1 class="hidden xl:block absolute uppercase text-8xl font-Raleway font-extrabold right-5 top-5 transform z-20  opacity-30">
            služby
        </h1>

        <div class="py-12 bg-own-darkgray relative">
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

                        {{-- Runy --}}
                        <a href="#" class="relative p-2 rounded-lg shadow-xl hover:shadow-none hover:scale-95 transform duration-200 ease-in-out bg-gray-medium hover:bg-gray-old ">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gray-old text-white border border-white">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-white">Runy</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                Přehledné hledání <strong>run</strong>, které ti padnout do aktuálního matchmakingu proti nepřátelům !
                            </dd>
                        </a>

                        {{-- Champions --}}
                        <a href="{{ route('champions') }}" class="relative p-2 rounded-lg shadow-xl hover:shadow-none hover:scale-95 transform duration-200 ease-in-out bg-gray-medium hover:bg-gray-old ">
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
                        </a>

                        {{-- buildy --}}
                        <a href="#" class="relative p-2 rounded-lg shadow-xl hover:shadow-none hover:scale-95 transform duration-200 ease-in-out bg-gray-medium hover:bg-gray-old ">
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
                        </a>

                        {{-- Skins --}}
                        <a href="{{ route('skins') }}" class="relative p-2 rounded-lg shadow-xl hover:shadow-none hover:scale-95 transform duration-200 ease-in-out bg-gray-medium hover:bg-gray-old ">
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
                        </a>

                    </dl>
                </div>
            </div>
        </div>
    </section>

{{-- leaderboard --}}
    <section class="relative border">
        <h1 class="hidden xl:block absolute uppercase text-8xl font-Raleway font-extrabold top-5 left-5 transform z-20 opacity-10">
            leaderboard
        </h1>

            <div class="bg-white overflow-hidden my-28 mx-20">

                <div class="w-11/12 mx-auto bg-own-darkgray p-10">
                    <div class="grid grid-cols-5 place-items-center gap-x-5">

                        @foreach ($summoners_data as $summoner_data)
                            <div class="bg-gray-medium  w-full  pt-3 px-3 flex flex-col items-center">
                                <img class="rounded-xl w-20 " src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/profileicon/'.$summoner_data->profileIconId.'.png' }}" >
                                <hr class="mt-3 border border-own-darkgray w-10/12 mx-auto ">
                            </div>
                        @endforeach

                        @foreach ($chall_summoners_other as $chall_summoner_other)
                            <a class="w-full bg-gray-medium  pt-3 space-y-3 pb-3 flex flex-col items-center justify-center " href="{{ route('summoner-show', $chall_summoner_other['summonerName']) }}">
                                <h1 class="t text-xl font-montserrat text-white font-extrabold">{{ $chall_summoner_other['summonerName'] }}</h1>

                                <div class="bg-own-darkgray p-1 shadow-inner shadow-">
                                    <img class="h-28 w-28" src="{{ asset('img/summoner/emblems/Emblem_'.$chall_summoner_other['tier'].'.png') }}">
                                </div>

                                <div class="flex space-x-1 text-own-lightgray">
                                    <h1 class="font-bold">{{ $chall_summoner_other['tier'] }}</h1>
                                    <h1 class="font-extrabold">{{ $chall_summoner_other['rank'] }}</h1>
                                </div>

                                <h1 class="text-black-custom">LP: {{ $chall_summoner_other['leaguePoints'] }}</h1>
                            </a>
                        @endforeach

                    </div>
                </div>

            </div>
    </section>





@endsection

{{--





    --}}
