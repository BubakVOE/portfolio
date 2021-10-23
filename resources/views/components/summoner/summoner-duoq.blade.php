<div class="relative flex flex-row items-center justify-center">
    <div class="mt-2 text-base text-gray-500 w-9/12 mx-auto">

        <h1 class="text-lg leading-6 font-bold font-Rubik text-white mb-5">Hodnocení SOLO/DUO</h1>

        <div>
            <div class="flex flex-row items-center justify-evenly p-2 rounded-md text-white bg-own-darkgray ">

                <div class="bg-green-custom px-3 py-2 text-own-darkgray rounded">
                    <h1 class="font-Rubik font-bold text-base">Výhry</h1>
                    <h1 class="font-sm">{{ $summonerData["wins"] }}</h1>
                </div>

                <div>
                    <img class="h-28 w-28" src="{{ asset('img/summoner/emblems/Emblem_'.$summonerData['tier'].'.png') }}">
                    <h1>{{ $summonerData['tier'] }} {{ $summonerData['rank'] }}</h1>
                    <h1 class="text-sm">LP - {{ $summonerData['leaguePoints'] }}</h1>
                </div>

                <div class="bg-own-red px-3 py-2 text-own-darkgray rounded">
                    <h1 class="font-Rubik font-bold text-base">Prohry</h1>
                    <h1 class="font-sm">{{ $summonerData["losses"] }}</h1>
                </div>

            </div>

        </div>

    </div>
</div>




{{-- <div class="relative flex flex-row items-center justify-center">
    <div class="mt-2 text-base text-gray-500 w-9/12 mx-auto">

        <h1 class="text-lg leading-6 font-bold font-Rubik text-white mb-5">Hodnocení SOLO/DUO</h1>

        <div>
            <div class="flex flex-row items-center justify-evenly p-2 rounded-md text-white bg-own-darkgray ">

                <div class="bg-green-custom px-3 py-2 text-own-darkgray rounded">
                    <h1 class="font-Rubik font-bold text-base">Výhry</h1>
                    <h1 class="font-sm">{{ $summonerData[0]["wins"] }}</h1>
                </div>

                <div>
                    <img class="h-28 w-28" src="{{ asset('img/summoner/emblems/Emblem_'.$summonerData[0]['tier'].'.png') }}">
                    <h1>{{ $summonerData[1]['tier'] }} {{ $summonerData[0]['rank'] }}</h1>
                    <h1 class="text-sm">LP - {{ $summonerData[0]['leaguePoints'] }}</h1>
                </div>

                <div class="bg-own-red px-3 py-2 text-own-darkgray rounded">
                    <h1 class="font-Rubik font-bold text-base">Prohry</h1>
                    <h1 class="font-sm">{{ $summonerData[0]["losses"] }}</h1>
                </div>

            </div>

        </div>

    </div>
</div> --}}
