@extends('layouts.user')




@section('content')

    <nav class="mb-5 pb-4 border-b-2">
        <ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">

            <li>
                <div class="flex items-center">
                    <a href="{{ route('domu') }}" class="mr-2 text-sm font-medium text-red-custom capitalize">
                        domů
                    </a>

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>

                </div>
            </li>

            <li>
                <div class="flex items-center">
                    <a href="{{ route('profile-index', $user->username) }}" class="mr-2 text-sm font-medium text-red-custom capitalize">
                        {{ $user->username }}
                    </a>
                </div>
            </li>



        </ol>
    </nav>

    <div class="bg-white h-full">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Customers also purchased</h2>

            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">




                <x-profile.profiles-information/>
                <x-profile.profiles-information/>
                <x-profile.profiles-information/>


                <!-- More products... -->
            </div>
        </div>
    </div>







@endsection

