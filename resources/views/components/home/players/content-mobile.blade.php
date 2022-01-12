<h1 class="hidden xl:block absolute uppercase text-8xl font-Raleway font-extrabold top-5 left-5 transform opacity-30 z-50 ">
    leaderboard
</h1>

<div class="overflow-hidden my-28 mx-16">
    <div class="w-11/12 mx-auto bg-own-darkgray rounded-lg p-10">

        @if ($summoners_data  == [])

            <div class="text-center ">
                <h1 class="font-bold text-xl">Nebyly nalezeny data</h1>
            </div>

        @else
            <div class="grid grid-cols-5 place-items-center gap-x-5 w-f ">

                @foreach ($summoners_data as $summoner_data)
                    <div class="bg-own-darkgray border-t border-l border-r rounded-t-xl border-gray-medium  w-full  pt-3 px-3 flex flex-col items-center">
                        <img class="rounded-xl w-20 " src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/profileicon/'.$summoner_data->profileIconId.'.png' }}" >
                        <hr class="mt-3 border border-own-darkgray w-10/12 mx-auto ">
                    </div>
                @endforeach

                @foreach ($chall_summoners_other as $chall_summoner_other)
                    <a class="w-full bg-own-darkgray border-b border-l rounded-b-xl border-r border-gray-medium   pt-3 space-y-3 pb-3 flex flex-col items-center justify-center " href="{{ route('summoner-show', $chall_summoner_other['summonerName']) }}">
                        <h1 class="text-xl font-montserrat text-white font-extrabold">{{ $chall_summoner_other['summonerName'] }}</h1>

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
        @endif
    </div>
</div>
