@extends('layouts.user')

@section('content')

    <nav class="">
        <ol role="list" class="max-w-2xl py-4 border-b-2 border-gradient-red mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">

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
                    <a href="{{ route('profile-index', $user->username) }}" class="mr-2 text-sm font-medium text-black-custom capitalize">
                        {{ $user->username }}
                    </a>
                </div>
            </li>

        </ol>
    </nav>

    <div class="h-full">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Přehled tebou přidaných účtů</h2>

            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">



                @foreach ($profiles as $profile)
                    <x-profile.profiles-information :profile='$profile'/>
                @endforeach


            </div>
        </div>
    </div>







@endsection

