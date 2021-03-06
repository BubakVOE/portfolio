@extends('layouts.user')

@section('content')

<div class="mx-2 lg:mx-0">
    <div class="lg:mx-auto lg:w-10/12 lg:grid lg:grid-cols-1 lg:gap-y-8 bg-own-darkgray p-5 lg:mt-32 ">

        <div class="grid grid-cols-1  ">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl uppercase font-poppins text-transparent bg-clip-text bg-gradient-to-r from-gradient-red to-own-orange">
                    {{ $summoner->name }}
                </h1>
            </div>

            <div class="mx-auto grid grid-cols-1 lg:grid-cols-3 place-items-center align-middle lg:gap-x-32 w-full xl:px-32 space-y-20 xl:space-y-0">

                <x-summoner.summoner-duoq :summonerData='$summonerData[0]'/>


                <div class="">
                    <img
                        src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/profileicon/'.$summoner->profileIconId.'.png' }}"
                        class="rounded-full bg-black-lighter p-2 w-32 h-32">
                </div>

                <x-summoner.summoner-flex :summonerData='$summonerData[0]'/>


            </div>
        </div>

        <hr class="border border-black-custom my-10 xl:my-0">


        <div class="grid grid-cols-1 gap-y-10 ">

            <div class="grid gap-y-5">
                <h1 class="text-xl tracking-tight font-extrabold sm:text-5xl md:text-2xl uppercase font-poppins text-white">
                    Nejhranější postavy
                </h1>

                <div class=" grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-5 xl:gap-x-8 ">
                    @for ($number = 0; $number < 5; $number++)

                        <x-summoner.summoner-masteries :championData='$championMastery[$number]'/>

                    @endfor
                </div>
            </div>

            <hr class="border border-black-custom">


            <div class="grid gap-y-5">
                <h1 class="text-xl tracking-tight font-extrabold sm:text-5xl md:text-2xl uppercase font-poppins text-white">
                    Historie zápasů
                </h1>

                <div class=" grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8 ">
                    @foreach ($matchHistories as $matchHistory)
                            <x-summoner.summoner-match-history :matchId='$matchHistory' :username='$username'/>
                    @endforeach
                </div>
            </div>

        </div>


    </div>
</div>




@endsection

