@extends('layouts.user')

@section('content')


<div class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 sm:py-0 xl:py-5 bg-gradient-to-br from-own-orange to-gradient-red rounded-lg">

    {{-- navigace --}}
        <nav class="mb-5 pb-4 border-b-2 border-own-black">
            <ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">

                <li>
                    <div class="flex items-center">
                        <a href="{{ route('domu') }}" class="mr-2 text-sm font-medium text-gray-600 capitalize">
                            domů
                        </a>

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>

                    </div>
                </li>

                <li>
                    <div class="flex items-center">
                        <a href="{{ route('user-index', $user->username) }}" class="mr-2 text-sm font-medium text-gray-600 capitalize">
                            {{ $user->username }}
                        </a>

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>

                    </div>
                </li>

                <li>
                    <div class="flex items-center">
                        <a href="{{ route('user-show', $user->username) }}" class="mr-2 text-sm font-medium text-gray-600 capitalize">
                            Edit
                        </a>
                    </div>
                </li>

            </ol>
        </nav>

        <form   action="{{ route('user-update') }}"
                enctype="multipart/form-data"
                method="POST">
        @csrf
            {{-- league of legends --}}
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">League of Legends</h3>
                            <p class="mt-1 text-sm text-gray-800">
                                Zde si můžeš upravit data o tvém herním účtu
                            </p>
                        </div>
                    </div>

                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-own-darkgray sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="username" class="block text-sm font-medium text-black-custom"><span class="font-bold text-red-custom mr-2">*</span>Uživatelské jméno</label>
                                        <input type="text"
                                                name="username"
                                                id="username"
                                                value="{{ $user->username }}"
                                                class="mt-1 focus:ring-0 focus:border-own-lightgray block w-full shadow-sm sm:text-sm border-own-lightgray bg-own-lightgray rounded-md">
                                    </div>


                                    <div class="col-span-6 sm:col-span-3">
                                        <label  for="country"
                                                class="block text-sm font-medium text-black-custom">Region</label>

                                        <select id="country"
                                                name="country"
                                                autocomplete="country"
                                                class="mt-1 block w-full py-2 px-3 border border-own-lightgray bg-own-lightgray rounded-md shadow-sm focus:outline-none focus:ring-0 focus:border-own-lightgray sm:text-sm">

                                                @if ($user['region'] == 'EUNE')
                                                    <option value="EUNE">Europe Nordic & East</option>
                                                    <option value="NA">North America</option>
                                                    <option value="EW">Europe West</option>
                                                    <option value="LAS">Las</option>
                                                    <option value="LAC">Lan</option>
                                                    <option value="OCE">Oceania</option>

                                                @elseif ($user['region'] == 'NA')
                                                    <option value="NA">North America</option>
                                                    <option value="EUNE">Europe Nordic & East</option>
                                                    <option value="EW">Europe West</option>
                                                    <option value="LAS">Las</option>
                                                    <option value="LAC">Lan</option>
                                                    <option value="OCE">Oceania</option>

                                                @elseif ($user['region'] == 'EW')
                                                    <option value="EW">Europe West</option>
                                                    <option value="EUNE">Europe Nordic & East</option>
                                                    <option value="NA">North America</option>
                                                    <option value="LAS">Las</option>
                                                    <option value="LAC">Lan</option>
                                                    <option value="OCE">Oceania</option>

                                                @elseif ($user['region'] == 'LAS')
                                                    <option value="LAS">Las</option>
                                                    <option value="EUNE">Europe Nordic & East</option>
                                                    <option value="NA">North America</option>
                                                    <option value="EW">Europe West</option>
                                                    <option value="LAC">Lan</option>
                                                    <option value="OCE">Oceania</option>

                                                @elseif ($user['region'] == 'LAC')
                                                    <option value="LAC">Lan</option>
                                                    <option value="EUNE">Europe Nordic & East</option>
                                                    <option value="NA">North America</option>
                                                    <option value="EW">Europe West</option>
                                                    <option value="LAS">Las</option>
                                                    <option value="OCE">Oceania</option>

                                                @elseif ($user['region'] == 'OCE')
                                                    <option value="OCE">Oceania</option>
                                                    <option value="EUNE">Europe Nordic & East</option>
                                                    <option value="NA">North America</option>
                                                    <option value="EW">Europe West</option>
                                                    <option value="LAS">Las</option>
                                                    <option value="LAC">Lan</option>

                                                @else
                                                    <option value="EUNE">Europe Nordic & East</option>
                                                    <option value="NA">North America</option>
                                                    <option value="EW">Europe West</option>
                                                    <option value="LAS">Las</option>
                                                    <option value="LAC">Lan</option>
                                                    <option value="OCE">Oceania</option>

                                                @endif

                                        </select>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        {{-- osobní informace --}}
            <div class="mt-10 sm:mt-0">

                <div class="hidden sm:block" aria-hidden="true">
                    <div class="py-5">
                        <div class="border-t border-own-black"></div>
                    </div>
                </div>

                <div class="md:grid md:grid-cols-3 md:gap-6">

                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Osobní informace</h3>
                            <p class="mt-1 text-sm text-gray-800">
                            Use a permanent address where you can receive mail.
                            </p>
                        </div>
                    </div>

                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-own-darkgray sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="givenName" class="block text-sm font-medium text-black-custom"><span class="font-bold text-red-custom mr-2">*</span>Jméno</label>
                                        <input type="text"
                                                name="givenName"
                                                id="givenName"
                                                value="{{ $user->givenName }}"
                                                autocomplete="givenName"
                                                class="mt-1 focus:ring-0 focus:border-own-lightgray block w-full shadow-sm sm:text-sm border-own-lightgray bg-own-lightgray rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="familyName" class="block text-sm font-medium text-black-custom"><span class="font-bold text-red-custom mr-2">*</span>Příjmení</label>
                                        <input type="text"
                                                name="familyName"
                                                id="familyName"
                                                value="{{ $user->familyName }}"
                                                autocomplete="familyName"
                                                class="mt-1 focus:ring-0 focus:border-own-lightgray block w-full shadow-sm sm:text-sm border-own-lightgray bg-own-lightgray rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email" class="block text-sm font-medium text-black-custom"><span class="font-bold text-red-custom mr-2">*</span> Email address</label>
                                        <input type="text"
                                                name="email"
                                                id="email"
                                                value="{{ $user->email }}"
                                                autocomplete="email"
                                                class="mt-1 focus:ring-0 focus:border-own-lightgray block w-full shadow-sm sm:text-sm border-own-lightgray bg-own-lightgray rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-2">
                                        <label  for="region"
                                                class="block text-sm font-medium text-black-custom"> Stát </label>

                                        <select id="state"
                                                name="state"
                                                autocomplete="state"
                                                class="mt-1 block w-full py-2 px-3 border border-own-lightgray bg-own-lightgray rounded-md shadow-sm focus:outline-none focus:ring-0 focus:border-own-lightgray sm:text-sm">

                                                <option name='cz' >Czech Republic</option>
                                                <option name='sk' >Slovakia</option>
                                                <option name='usa' >United States</option>
                                                <option name='ca' >Canada</option>
                                                <option name='me' >Mexico</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6 w-8/12 mx-auto ">
                                        <label for="street-address" class="block text-sm font-medium text-black-custom ">Street address</label>
                                        <input type="text"
                                                name="street-address"
                                                id="street-address"
                                                autocomplete="street-address"
                                                class="mt-1 focus:ring-0 focus:border-own-lightgray w-full block shadow-sm sm:text-sm border-own-lightgray bg-own-lightgray rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                        <label for="city" class="block text-sm font-medium text-black-custom">City</label>
                                        <input type="text"
                                                name="city"
                                                id="city"
                                                class="mt-1 focus:ring-0 focus:border-own-lightgray block w-full shadow-sm sm:text-sm border-own-lightgray bg-own-lightgray rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                        <label for="state" class="block text-sm font-medium text-black-custom">State / Province</label>
                                        <input type="text"
                                                name="state"
                                                id="state"
                                                class="mt-1 focus:ring-0 focus:border-own-lightgray block w-full shadow-sm sm:text-sm border-own-lightgray bg-own-lightgray rounded-md">
                                    </div>


                                </div>
                            </div>

                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <div class="sm:overflow-hidden">

                                    <div class="px-4 py-5 bg-own-darkgray  space-y-6 sm:p-6">
                                        <div>
                                            <label class="block text-sm font-medium text-black-custom">
                                                Photo
                                            </label>

                                            <div class="mt-1 flex items-center">
                                                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                                </span>
                                                <button type="button" class="ml-5 bg-white py-2 px-3 border border-own-lightgray rounded-md shadow-sm text-sm leading-4 font-medium text-black-custom hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Change
                                                </button>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-black-custom">
                                                Cover photo
                                            </label>
                                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-own-black border-dashed rounded-md">
                                                <div class="space-y-2 text-center flex flex-col items-center justify-center">
                                                    <svg class="mx-auto h-12 w-12 text-black-custom" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="file-upload" class="relative px-4 py-2 cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                            <span>Upload a file</span>
                                                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                        </label>
                                                    </div>

                                                    <p class="text-xs text-own-red">
                                                        PNG, JPG, GIF up to 10MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        {{-- další informace --}}
            <div class="mt-10 sm:mt-0">

                <div class="hidden sm:block" aria-hidden="true">
                    <div class="py-5">
                        <div class="border-t border-own-black"></div>
                    </div>
                </div>

                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Další informace</h3>
                        </div>
                    </div>

                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="px-4 py-5  sm:p-6 rounded bg-own-darkgray">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <span class='h-4 w-4  rounded bg-green-custom'></span>
                                </div>

                                <div class="ml-3 text-sm">
                                    <label for="comments" class="font-medium text-black-custom">Vip</label>
                                    <p class="text-gray-300">VIP máš předkoupeno do <span class="font-bold">28.10.2000</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <div class="flex justify-end ">
                <div class="px-4 sm:px-6 sm:py-0 xl:py-5rounded-lg">
                    <button type="submit" class="px-6 py-3  font-bold shadow-sm rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-0 focus:ring-offset-0">
                    Save
                    </button>
                </div>
            </div>




        </form>

    </div>


</div>





@endsection
