<div class="flex flex-col justify-between items-center h-10/12 my-auto">
    <div class="flex flex-col justify-evenly items-center h-full">
        <h1 class="font-montserrat">{{ $championMastery->staticData->name}}</h1>

        <div>
            <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$championMastery->staticData->image->full }}" style="width: 80px">
        </div>
    </div>

    <div class="flex flex-col justify-evenly items-center h-full">
        <img src="{{ asset('img/championMasteries/mastery-'.$championMastery->championLevel.'.png') }}" alt="">
        <h1>{{ $championMastery->championPoints}}</h1>
   </div>
</div>
