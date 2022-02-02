@extends('layouts.user')

@section('content')

    <div class="bg-own-darkgray">
        <div class="md:py-20 m-auto flex items-center w-full md:w-10/12 md:px-2 p-4 ">
            <div class="h-full max-w-md mx-auto rounded-lg overflow-hidden md:max-w-2xl md:w-9/12 w-full bg-gradient-to-br from-own-orange to-gradient-red">
                <div class="md:flex">

                    <form   class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8"
                            method="POST"
                            action="{{ route('register') }}">

                            @csrf

                    <div class="w-full p-3 px-6 py-10">

                        <div>
                            <img class="mx-auto h-12 w-auto" src="{{ asset('img/navbar/riot-fist.png') }}" alt="Workflow">
                            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                                Zaregistruj si svůj učet
                            </h2>
                            <p class="mt-2 text-center text-sm text-gray-800">
                                zcela zdarma bez poplatků
                            </p>
                        </div>

                        <div>
                            <div class="md:flex md:justify-between">
                                <div class="mt-14 md:mt-16 relative md:w-5/12">
                                    <span class="absolute px-2 pb-1 bottom-12 ml-1 rounded-t-md bg-black-lighter text-own-orange">
                                        Jméno
                                    </span>
                                    <input  id="givenName"
                                            type="text"
                                            name="givenName"
                                            class="@error('givenName') @enderror h-12 px-2 w-full rounded border border-black-custom outline-none "
                                            required
                                            autocomplete="given-name"
                                            placeholder="Pavel"
                                            >
                                </div>

                                <div class="mt-14 md:mt-16 relative md:w-5/12">
                                    <span class="absolute px-2 pb-1 bottom-12 ml-1 rounded-t-md bg-black-lighter text-own-orange">
                                        Příjmení
                                    </span>
                                    <input  type="text"
                                            name="familyName"
                                            class="@error('familyName') @enderror h-12 px-2 w-full rounded border border-black-custom outline-none"
                                            required
                                            autocomplete="family-name"
                                            placeholder="Novák"
                                            >
                                </div>
                            </div>

                            <div class="mt-14 md:mt-16 relative md:w-7/12 md:mx-auto">
                                <span class="absolute px-2 pb-1 bottom-12 ml-1 rounded-t-md bg-black-lighter text-own-orange">
                                    Email
                                </span>
                                <input  type="text"
                                        name="email"
                                        class="@error('email') @enderror h-12 px-2 w-full rounded border border-black-custom outline-none"
                                        required
                                        autocomplete="username"
                                        placeholder="pavelnovak@seznam.cz"
                                        >
                                @error('email')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="md:flex md:justify-between">
                                <div class="mt-14 md:mt-16 relative md:w-5/12">
                                    <span class="absolute px-2 pb-1 bottom-12 ml-1 rounded-t-md bg-black-lighter text-own-orange">
                                        Heslo
                                    </span>
                                    <input  type="password"
                                            name="password"
                                            class="@error('password') @enderror h-12 px-2 w-full rounded border border-black-custom outline-none"
                                            required
                                            autocomplete="password"
                                            placeholder="************"
                                            >
                                    @error('password')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div class="mt-14 md:mt-16 relative md:w-5/12">
                                    <span class="absolute px-2 pb-1 bottom-12 ml-1 rounded-t-md bg-black-lighter text-own-orange">
                                        Potvrdit heslo
                                    </span>
                                    <input  type="password"
                                            name="password_confirmation"
                                            class="h-12 px-2 w-full rounded border border-black-custom outline-none"
                                            required
                                            autocomplete="password"
                                            placeholder="**********"
                                            >
                                </div>
                            </div>


                            <div class="md:flex md:justify-between">
                                <div class="mt-14 md:mt-16 relative md:w-5/12">
                                    <span class="absolute px-2 pb-1 bottom-12 ml-1 rounded-t-md bg-black-lighter text-own-orange">
                                        Server
                                    </span>
                                    <select name="region"
                                            class="h-12 px-2 w-full rounded border border-black-custom outline-none"
                                    >
                                        <option value="EUNE">Europe Nordic & East</option>
                                        <option value="NA">North America</option>
                                        <option value="EW">Europe West</option>
                                        <option value="LAS">Las</option>
                                        <option value="LAC">Lan</option>
                                        <option value="OCE">Oceania</option>
                                    </select>
                                </div>

                                <div class="mt-14 md:mt-16 relative md:w-5/12">
                                    <span class="absolute px-2 pb-1 bottom-12 ml-1 rounded-t-md bg-black-lighter text-own-orange">
                                            In-game Nickname
                                    </span>
                                    <input
                                        type="text"
                                        name="username"
                                        class="@error('username') @enderror h-12 px-2 w-full rounded border border-black-custom outline-none"
                                        placeholder="BubakVOE">
                                </div>
                            </div>


                        </div>

                            <div class="mt-14 md:mt-20 w-full md:w-5/12 md:mx-auto">
                                <button type="submit" class="h-12 w-full bg-black-lighter text-white rounded hover:bg-black-custom">
                                    Zaregistrovat se
                                    <i class="fa fa-long-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="border-2 absolute ">
                        @foreach ($errors->all('<p>:message</p>') as $input_error)
                        {{ $input_error }}
                        @endforeach
                    </div>


                </div>


            </div>
        </div>
    </div>

@endsection
