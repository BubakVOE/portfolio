@extends('layouts.user')

@section('content')



            {{-- <td class="border-2">{{ $summoner->summonerLevel }}</td>
            <td class="border-2">{{ $summoner->profileIconId }}</td> --}}

<div class="flex justify-center py-10">
    <h1>Top 5 nejhranějších postav</h1>

    <div class="flex">
        <x-profile.champion-mastery :championMastery='$championMastery[0]'/>
        <x-profile.champion-mastery :championMastery='$championMastery[1]'/>
        <x-profile.champion-mastery :championMastery='$championMastery[2]'/>
        <x-profile.champion-mastery :championMastery='$championMastery[3]'/>
        <x-profile.champion-mastery :championMastery='$championMastery[4]'/>
    </div>

</div>

<div>
    <h1>Historie zápasů</h1>
</div>



<div>
    @foreach ($matchHistories as $matchHistory )
        <x-summoner.summoner-match-history :matchHistory='$matchHistory'/>
    @endforeach
</div>




@endsection

