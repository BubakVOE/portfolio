@extends('layouts.user')

@section('content')

<div class="h-10/12 ">
    <table>
        <thead class="text-center border-2">
            <th class="border-2">level</th>
            <th class="border-2">profileiconid</th>
        </thead>


        <tbody class="text-center border-2">
            <td class="border-2">{{ $summoner->summonerLevel }}</td>
            <td class="border-2">{{ $summoner->profileIconId }}</td>
        </tbody>
    </table>


    <x-profile.champion-mastery :championMastery='$championMastery[0]'/>

</div>

@endsection

