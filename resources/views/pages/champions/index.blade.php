@extends('layouts.user')

@section('content')

    <div class="bg-own-lightgray">

        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="">

                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl text-center flex flex-col">
                    <span class="block xl:inline">LEAGUE OF LEGENDS</span>

                    <div class="text-left flex flex-col my-5">
                        <span class="block font-bold  text-xl xl:inline text-gray-700">
                            verze patche <span class="font-extrabold tracking-tight text-own-orange">{{ env('patch') }}</span>
                        </span>

                        <span class="block font-bold  text-xl xl:inline text-gray-700">
                            počet postav <span class="font-extrabold tracking-tight text-own-orange">{{ $amount }}
                        </span>
                    </div>
                </h1>


            </div>

            <div class=" grid grid-cols-1 place-items-center gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 bg-gradient-to-br from-own-orange to-gradient-red rounded-lg px-4 py-24 md:px-16 md:py-16">

                @foreach ($champions as $champion)
                    <x-champions.champion-card :champion="$champion"/>
                @endforeach

                @empty($champion)
                    <h1 class="text-center font-bold uppercase ">Žádné data nebyly načteny</h1>
                @endempty



            </div>

        </div>

    </div>

@endsection
