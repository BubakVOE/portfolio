@extends('layouts.user')

@section('content')


    <div class="flex justify-center py-10 ">


        @foreach ($matchHistories as $matchHistory)
            <x-summoner.summoner-match-history :matchHistory='$matchHistory'/>
        @endforeach

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

                    <dl class="mt-10 space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        @if ($summonerData[0]['queueType'] == 'RANKED_SOLO_5x5')

                            <x-summoner.summoner-duoq :summonerData='$summonerData[0]'/>

                            <x-summoner.summoner-flex :summonerData='$summonerData[1]'/>

                        @else

                            <x-summoner.summoner-duoq :summonerData='$summonerData[1]'/>

                            <x-summoner.summoner-flex :summonerData='$summonerData[0]'/>

                        @endif
                    </dl>
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
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <!-- Heroicon name: outline/globe-alt -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Competitive exchange rates</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">No hidden fees</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Transfers are instant</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mobile notifications</p>
                            </dt>

                            <dd class="mt-2 ml-16 text-base text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

        </div>
    </div>




@endsection

