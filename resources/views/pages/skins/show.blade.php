@extends('layouts.user')
@section('content')





    <div class="max-w-3xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-full lg:px-8">

        <div class="">

            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl text-center flex flex-col">
                <span class="block xl:inline uppercase">{{ $champion->nickname }}</span>

                <div class="my-5 flex items-center justify-center">
                    <span class="block font-bold text-xl xl:inline text-gray-700">
                        Splash obrázky
                    </span>
                </div>
            </h1>


        </div>


        <div class="grid grid-cols-1 place-items-center gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8 bg-gradient-to-br from-own-orange to-gradient-red rounded-lg px-4 py-24 md:px-16 md:py-16">

            @foreach ($dataSkin as $dataSkin)
                <div>
                    <img src="{{ ('https://ddragon.leagueoflegends.com/cdn/img/champion/splash/'.$champion->nickname.'_'.$dataSkin['num'].'.jpg') }}" alt="">

                    <div class="font-bold text-center relative bottom-10 rounded-t-lg w-6/12 mx-auto py-2 backdrop-filter backdrop-blur-xl">
                        @if ($dataSkin['name'] == 'default')
                            <h1 class="">{{ $champion->nickname }}</h1>
                        @else
                            <h1 class="">{{ $dataSkin['name'] }}</h1>
                        @endif
                    </div>

                </div>
            @endforeach


        </div>

    </div>


@endsection

