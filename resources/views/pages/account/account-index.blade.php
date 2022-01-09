@extends('layouts.user')

@section('content')

    <section class="bg-own-lightgray">
        <nav>
            <ol role="list" class="max-w-2xl py-4 border-b border-own-darkgray mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
                <li class="flex items-center">
                    <a href="{{ route('domu') }}" class="mr-2 text-sm font-medium text-black-custom capitalize">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                    </a>
                </li>

                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-old" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </li>

                <li>
                    <div class="flex items-center">
                        <a href="{{ route('account-index', Auth()->user()->username) }}" class="mr-2 text-sm font-medium text-black-custom capitalize">
                            {{ Auth()->user()->username }}
                        </a>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="h-full w-10/12 mx-auto">
            <div class="py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8 space-y-10">

                <div>
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Tvůj hlavní účet</h2>

                    <div class="w-4/12">
                        <a href="{{ route('summoner-show', $user->username) }}">

                            <div class="group relative ">
                                <div class="w-full sm:h-80 bg-gradient-to-br from-own-orange to-gradient-red aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none lg:p-5">
                                    <div class="h-full grid grid-cols-1 justify-items-center">
                                        <div class="flex items-center justify-center">
                                            <img src="{{ asset('img/588.png') }}" class="object-center object-cover rounded-full h-28  ">
                                        </div>

                                        <div class="text-center lg:w-full w-10/12 mx-auto">
                                            <h1 class="mt-4 mb-2">
                                                <p class="font-bold text-xl font-Rubik">{{ $user->username }}</p>
                                                <p class="">{{ $user->region }}</p>
                                            </h1>

                                            <h1 class="mt-4 mb-2">
                                                <p class="font-base text-lg font-Rubik ">Platinum III</p>
                                                <p class="">94 LP</p>
                                            </h1>

                                            <div class="flex justify-evenly text-center space-x-2 bg-gray-old rounded-full px-2 py-1">
                                                <h1 class="text-green-custom">win</h1>
                                                <h1 class="text-green-custom">win</h1>
                                                <h1 class="text-green-custom">win</h1>
                                                <h1 class="text-red-custom">lost</h1>
                                                <h1 class="text-red-custom">lost</h1>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Další přidané účty</h2>

                    <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        @if ($profiles == '[]')
                            <p>Přidej si <a href="{{ route('account-edit', Auth()->user()->username) }}" class="font-bold underline">účet</a></p>
                        @else
                            @foreach ($profiles as $profile)
                                <x-profile.profiles-information :profile='$profile'/>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
        </div>



    </section>

@endsection

