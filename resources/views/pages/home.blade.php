@extends('layouts.user')


@section('content')

<x-alerts.message/>

<section class="bg-own-lightgray">

{{-- úvod --}}
    <section class="relative pt-32 ">
        <h1 class="hidden xl:block absolute uppercase text-8xl font-Raleway font-extrabold top-4 left-5 transform opacity-30 z-50 ">
            domů
        </h1>

        <div class="relative overflow-hidden md:grid md:grid-cols-2   ">

            <div class="flex items-center justify-center relative left-20 ">
                <div class="relative bg-own-darkgray p-36 z-30 rounded-l-lg ">

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
                                    <x-search-summoner/>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="flex items-center justify-start bg-own-darkgray mr-36 relative rounded-r-lg ">

                <div>
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
                </div>

                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2">
                    <x-home.champions-active/>
                </div>


            </div>
        </div>

    </section>


    {{-- <div class="border border-blue-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
        <div class="animate-pulse flex space-x-4">
          <div class="rounded-full bg-slate-700 h-10 w-10"></div>
          <div class="flex-1 space-y-6 py-1">
            <div class="h-2 bg-slate-700 rounded"></div>
            <div class="space-y-3">
              <div class="grid grid-cols-3 gap-4">
                <div class="h-2 bg-slate-700 rounded col-span-2"></div>
                <div class="h-2 bg-slate-700 rounded col-span-1"></div>
              </div>
              <div class="h-2 bg-slate-700 rounded"></div>
            </div>
          </div>
        </div>
      </div> --}}

{{-- další --}}
    <section class="flex flex-col justify-center items-center relative mt-32">

        <div class="w-full absolute">
            <div class="w-10/12 m-auto relative top-0 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 1440 320" class="rounded-xl animate-backdrop ">
                    <path fill='#444444' fill-opacity="1" d="M0,0L30,37.3C60,75,120,149,180,165.3C240,181,300,139,360,117.3C420,96,480,96,540,122.7C600,149,660,203,720,202.7C780,203,840,149,900,138.7C960,128,1020,160,1080,165.3C1140,171,1200,149,1260,144C1320,139,1380,149,1410,154.7L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                </svg>
            </div>
        </div>

        <div class="flex justify-evenly items-center w-10/12 py-12 backdrop-filter backdrop-blur-xl rounded-xl border-2 border-blue-glass  ">
            <div class="flex items-center flex-col">
                <img class="my-5 object-cover " src="{{ asset('img/background/bg-poro-left.jpg') }}" style="width:350px;">
                <a href="#" class="capitalize text-blue-light border-blue-500 font-montserrat text-md border-b-2 hover:border-blue-light transition delay-100 duration-100">taktiky</a>
            </div>

            <div class="flex items-center flex-col">
                <img class="my-5 object-cover " src="{{ asset('img/background/bg-poro-middle.jpg') }}" style="width:350px;">
                <a href="#" class="capitalize text-blue-light border-blue-500 font-montserrat text-md border-b-2 hover:border-blue-light transition delay-100 duration-100">rady</a>
            </div>

            <div class="flex items-center flex-col">
                <img class="my-5 object-cover" src="{{ asset('img/background/bg-poro-right.jpg') }}" style="width:350px;">
                <a href="#" class="capitalize text-blue-light border-blue-500 font-montserrat text-md border-b-2 hover:border-blue-light transition delay-100 duration-100">tipy</a>
            </div>
        </div>

    </section>

{{-- služby --}}
    <section class="relative mt-32 bg-own-darkgray">
        <h1 class="hidden xl:block absolute uppercase text-8xl font-Raleway font-extrabold right-5 top-5 transform z-20  opacity-30">
            služby
        </h1>

        <div class="py-12 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h1 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl uppercase font-poppins  text-transparent bg-clip-text bg-gradient-to-r from-gradient-red to-own-orange pt-2">
                        Proč u nás ?
                    </h1>

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
    <section class="relative mt-32">
        <h1 class="hidden xl:block absolute uppercase text-8xl font-Raleway font-extrabold -top-28 left-5 transform opacity-30 z-50 ">
            leaderboard
        </h1>

        <div class="overflow-hidden mx-16">
            <div class="w-11/12 mx-auto bg-own-darkgray rounded-lg p-10 space-y-10">

                <div class="lg:text-center">
                    <h1 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl uppercase font-poppins  text-transparent bg-clip-text bg-gradient-to-r from-gradient-red to-own-orange pt-2">
                        Nejlepší hráčí
                    </h1>

                    <p class="mt-4 max-w-2xl text-lg text-gray-200 lg:mx-auto">
                        Nejlepší hráči z <strong>EUNE</strong> regionů
                    </p>
                </div>

            {{-- eune --}}
                <div class="">

                    @if ($euneChallData  == [])

                        <div class="text-center ">
                            <h1 class="font-bold text-xl">Nebyly nalezeny data</h1>
                        </div>

                    @else

                        <div class="grid grid-cols-4 place-items-center gap-x-5">
                            @foreach ($euneChallData as $euneChallData)
                                <div class="bg-own-darkgray border-t border-l border-r rounded-t-xl border-gray-medium  w-full  pt-3 px-3 flex flex-col items-center">
                                    {{-- <img class="rounded-xl w-20 " src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/profileicon/'.$euneChallData->profileIconId.'.png' }}" > --}}
                                    <hr class="mt-3 border border-own-darkgray w-10/12 mx-auto ">
                                </div>
                            @endforeach

                            @foreach ($euneChallOthers as $euneChallOther)
                                <a class="w-full bg-own-darkgray border-b border-l rounded-b-xl border-r border-gray-medium   pt-3 space-y-3 pb-3 flex flex-col items-center justify-center " href="{{ route('summoner-show', $euneChallOther['summonerName']) }}">
                                    <h1 class="text-xl font-montserrat text-white font-extrabold">{{ $euneChallOther['summonerName'] }}</h1>

                                    <div class="bg-own-darkgray p-1 shadow-inner shadow-">
                                        <img class="h-28 w-28" src="{{ asset('img/summoner/emblems/Emblem_'.$euneChallOther['tier'].'.png') }}">
                                    </div>

                                    <div class="flex space-x-1 text-own-lightgray">
                                        <h1 class="font-bold">{{ $euneChallOther['tier'] }}</h1>
                                        <h1 class="font-extrabold">{{ $euneChallOther['rank'] }}</h1>
                                    </div>

                                    <h1 class="text-black-custom">LP: {{ $euneChallOther['leaguePoints'] }}</h1>
                                </a>
                            @endforeach
                        </div>

                    @endif
                </div>

                <div>
                    <p class="text-center text-lg text-gray-200 lg:mx-auto">
                        Nejlepší hráči z <strong>WEST</strong> regionů
                    </p>
                </div>

            {{-- euw --}}
                {{-- <div class="">

                    @if ($euwChallData  == [])

                        <div class="text-center ">
                            <h1 class="font-bold text-xl">Nebyly nalezeny data</h1>
                        </div>

                    @else

                        <div class="grid grid-cols-4 place-items-center gap-x-5">
                            @foreach ($euwChallData as $euwChallData)
                                <div class="bg-own-darkgray border-t border-l border-r rounded-t-xl border-gray-medium  w-full  pt-3 px-3 flex flex-col items-center">
                                    <img class="rounded-xl w-20 " src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/profileicon/'.$euwChallData->profileIconId.'.png' }}" >
                                    <hr class="mt-3 border border-own-darkgray w-10/12 mx-auto ">
                                </div>
                            @endforeach

                            @foreach ($euwChallOthers as $euwChallOther)
                                <a class="w-full bg-own-darkgray border-b border-l rounded-b-xl border-r border-gray-medium   pt-3 space-y-3 pb-3 flex flex-col items-center justify-center " href="{{ route('summoner-show', $euwChallOther['summonerName']) }}">
                                    <h1 class="text-xl font-montserrat text-white font-extrabold">{{ $euwChallOther['summonerName'] }}</h1>

                                    <div class="bg-own-darkgray p-1 shadow-inner shadow-">
                                        <img class="h-28 w-28" src="{{ asset('img/summoner/emblems/Emblem_'.$euwChallOther['tier'].'.png') }}">
                                    </div>

                                    <div class="flex space-x-1 text-own-lightgray">
                                        <h1 class="font-bold">{{ $euwChallOther['tier'] }}</h1>
                                        <h1 class="font-extrabold">{{ $euwChallOther['rank'] }}</h1>
                                    </div>

                                    <h1 class="text-black-custom">LP: {{ $euwChallOther['leaguePoints'] }}</h1>
                                </a>
                            @endforeach
                        </div>

                    @endif
                </div> --}}

            </div>
        </div>
    </section>

</section>



@endsection
