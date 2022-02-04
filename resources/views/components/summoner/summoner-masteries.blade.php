<a  class="flex flex-col justify-between items-center my-auto py-5 border border-gradient-darkG shadow-xl hover:shadow-none transition delay-100 duration-300 ease-in-out bg-gradient-to-br from-gradient-lightG to-gradient-darkG"
    href="{{ route('champions-show',$championData->staticData->name) }}">

    <div class="flex flex-col justify-evenly items-center h-full">
        <h1 class="text-lg font-bold font-Rubik">{{ $championData->staticData->name}}</h1>

        <div>
            <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/champion/'.$championData->staticData->image->full }}" style="width: 80px">
        </div>

    </div>

    <div class="flex flex-col justify-evenly items-center h-full">
        <img class="my-5" src="{{ asset('img/summoner/championMasteries/mastery-'.$championData->championLevel.'.png') }}" style="width: 70px">
        <h1 class="font-bold font-Rubik text-base">{{ $championData->championPoints}}</h1>
    </div>

</a>
