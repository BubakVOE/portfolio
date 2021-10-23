<div class="flex flex-col justify-between items-center h-10/12 my-auto">
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
</div>

