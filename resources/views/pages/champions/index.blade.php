@extends('layouts.user')

@section('content')

    <div class="bg-own-lightgray">

        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Customers also purchased</h2>

            <div class="mt-6 grid grid-cols-1 place-items-center gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

                @foreach ($champions as $champion)
                    <x-champions.champion-card :champion="$champion"/>
                @endforeach

            </div>

        </div>

    </div>

@endsection
