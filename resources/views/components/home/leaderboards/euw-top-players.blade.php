@if ($euwTopPlayer  == [])

    <h1 class="text-center font-bold text-xl">Nebyly nalezeny data</h1>

@else

    <div class="w-full relative p-2 rounded-lg shadow-xl hover:shadow-none hover:scale-95 transform duration-200 ease-in-out bg-gray-medium hover:bg-gray-old">
        <a  class="flex items-center justify-center flex-col space-y-5"
            href="{{ route('summoner-show', $euwTopPlayer['summonerName']) }}">

            <h1 class="text-xl font-montserrat text-white font-extrabold">{{ $euwTopPlayer['summonerName'] }}</h1>

            <img class="h-28 w-28" src="{{ asset('img/summoner/emblems/Emblem_'.$euwTopPlayer['tier'].'.png') }}">

            <h1 class="font-bold flex flex-row items-center space-x-2 text-white ">
                <span>{{ $euwTopPlayer['tier'] }}</span>
                <span>{{ $euwTopPlayer['rank'] }}</span>
            </h1>

            <h1 class="text-gray-500">LP: {{ $euwTopPlayer['leaguePoints'] }}</h1>
        </a>
    </div>

@endif
