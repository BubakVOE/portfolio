<div class="py-5 xl:flex hidden shadow-out bg-gradient-to-br from-gradient-darkG to-gradient-lightG rounded-xl w-full  flex-col items-center justify-center  ">
    <div class=" rounded-lg  h-40 w-40">
        <img src="{{ asset('img/summoner/emblems/Emblem_'.$summonerData['tier'].'.png') }}" class="w-full h-full ">
    </div>

    <div>
        <h1 class="font-bold font-poppins text-xl">
            Solo
        </h1>
    </div>

    <div>
        <h1>
            {{ $summonerData['tier'] }} {{ $summonerData['rank'] }}
        </h1>

        <h1>
            LP:{{ $summonerData['leaguePoints'] }}
        </h1>

        <h1>
            <span class="text-green-custom font-bold uppercase">w<span class="text-black-custom">-{{ $summonerData['wins'] }}</span> </span>
            <span class="text-black-custom">/</span>
            <span class="text-own-red font-bold uppercase">l<span class="text-black-custom">-{{ $summonerData['losses'] }}</span></span>
        </h1>
    </div>
</div>
