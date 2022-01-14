@extends('layouts.user')

@section('content')

    <div class="flex justify-center py-10 ">

        <div class="w-10/12 mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-gradient-to-br from-gradient-black to-gray-old rounded-lg">
            <div class="lg:text-center">
        {{-- jméno obrázek --}}
                <div class="flex items-center justify-center">
                    <img class="rounded-xl w-24 bg-gradient-to-br from-own-orange to-own-red p-2" src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/profileicon/'.$summoner->profileIconId.'.png' }}" >

                    <h1 class="relative left-8 text-3xl leading-8 font-extrabold tracking-tight sm:text-4xl text-own-orange">
                        {{ $summoner->name }}
                    </h1>
                </div>
        {{-- duoq/flexky --}}
                <div>


                </div>
            </div>
{{-- nejhranější postavy || pokud více, tak změnit $number < |...| --}}
            <div>

                <h1 class="mt-14 text-lg text-white font-bold font-Rubik w-full text-left border-b-2 border-white">Nejhranější postavy</h1>

                <div class=" grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-5 xl:gap-x-8">
                    @for ($number = 0; $number < 5; $number++)

                        <x-summoner.summoner-masteries :championData='$championMastery[$number]'/>

                    @endfor
                </div>
            </div>
{{-- historie zápasů --}}
            <div>
                <h1 class="mt-14 text-lg text-white font-bold font-Rubik w-full text-left border-b-2 border-white">Historie zápasů</h1>

                <div class="mt-10">
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10 text-white">
                    @foreach ($matchHistories as $matchHistory)
                        <x-summoner.summoner-match-history :matchId='$matchHistory' :username='$username'/>
                     @endforeach
                    </dl>
                </div>
            </div>

        </div>
    </div>

@endsection

