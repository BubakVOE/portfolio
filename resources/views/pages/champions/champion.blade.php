@extends('layouts.user')


@section('content')




<div class="bg-own-lightgray">
    <div class="pt-6">
        <nav aria-label="Breadcrumb">
            <ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
                <li>
                    <div class="flex items-center">
                        <a href="{{ route('champions') }}" class="mr-2 text-sm font-medium text-red-custom">
                            champions
                        </a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-own-black">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    </div>
                </li>

                <li>
                    <div class="flex items-center">
                        <a href="{{ route('champions-show', $champion->id) }}" class="mr-2 text-sm font-medium text-red-custom">
                            {{ $champion->name }}
                        </a>

                    </div>
                </li>

            </ol>
        </nav>


              <!-- Product info -->
              <div class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
                  <div class="lg:col-span-2 lg:border-r lg:border-black-custom lg:pr-8 flex items-center flex-row">

                    <img class="w-24 mr-5 rounded-full " src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/champion/'. $champion->img }}" >

                    <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">
                        {{ $champion->name }}
                    </h1>

                </div>

                <!-- Options -->
                <div class="mt-4 lg:mt-0 lg:row-span-3">
                    <!-- Reviews -->
                    <div >
                        <h3 class="text-md font-Raleway font-bold text-gray-900 ">Obtížnost</h3>

                        <div class="flex items-center mt-5 pl-4">
                            <div class="flex items-center space-x-2">
                                @if ($champion->difficulty <= 3)

                                    <h1 class="text-sm font-bold">
                                        <span class="bg-green-500 px-5 py-1 rounded-lg">easy</span>
                                    </h1>

                                @elseif ($champion->difficulty <= 7)

                                    <h1 class="text-sm font-bold">
                                        <span class="bg-yellow-500 px-5 py-1 rounded-lg">medium</span>
                                    </h1>

                                @else

                                    <h1 class="text-sm font-bold">
                                        <span class="bg-red-500 px-5 py-1 rounded-lg">hard</span>
                                    </h1>
                                @endif
                                <h2>-</h2>
                                <h1>{{ $champion->difficulty }}</h1>
                            </div>
                        </div>

                    </div>

                    <form class="mt-10">

                        <div>
                            <h3 class="text-md font-Raleway font-bold text-gray-900">Další informace</h3>

                            <fieldset class="mt-4 pl-4">
                                <div class="flex flex-col ">

                                    <div class="relative cursor-pointer focus:outline-none">
                                        @foreach ($champData['tags'] as $tag)
                                            <h1 class="">
                                                {{ $tag }}
                                            </h1>
                                        @endforeach
                                    </div>

                                    <div class="relative cursor-pointer focus:outline-none mt-4">
                                        <h1 class="">
                                            {{ $champData['partype'] }}
                                        </h1>
                                    </div>


                                </div>
                            </fieldset>
                        </div>

                        <!-- Sizes -->
                        <div class="mt-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-md font-Raleway font-bold text-gray-900">Skiny</h3>
                            </div>

                            <fieldset class="mt-4 pl-4">

                                <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4 ">

                                    @foreach ( $champData['skins'] as $test)

                                        <label class="relative rounded-md md:p-1 focus:outline-none sm:flex-1 sm:py-6 bg-own-black">
                                            <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                                                <img class="rounded-sm" src="{{ 'https://ddragon.leagueoflegends.com/cdn/img/champion/loading/'.$champion->nickname.'_'.$test['num'].'.jpg' }}" alt="">

                                            <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                                        </label>
                                    @endforeach

                                </div>

                            </fieldset>
                        </div>

                        <h1 class="text-center cursor-pointer mt-10 md:mt-20 w-full bg-own-black rounded-md py-3 px-8 text-base font-medium text-white hover:bg-black-custom focus:outline-none">
                            Prohlédnout si Splash obrázky
                        </h1>
                    </form>
                </div>

                <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-black-custom lg:pr-8">
                <!-- Description and details -->
                    <div>
                        <h3 class="text-md font-bold font-Raleway text-gray-900">Příběh</h3>

                        <div class="space-y-6 pl-4">
                            <p class="text-base text-gray-900">
                                {{ $champData['lore'] }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h3 class="text-md font-bold font-Raleway text-gray-900">Spells</h3>

                        <div class="mt-4">
                            <ul role="list" class="pl-4 list-disc text-sm space-y-5">
                                <li class="text-gray-800 list-none flex items-center ">
                                    <img class="rounded-md" src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/passive/'.$champData['passive']['image']['full'] }}">

                                    <div class="flex flex-col ml-4">
                                        <p class="">{{ $champData['passive']['description'] }}</p>
                                    </div>
                                </li>

                                <li class="text-gray-800 list-none flex items-center none">
                                    <img class="rounded-md" src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/spell/'.$champData['spells'][0]['image']['full'] }}">

                                    <div class="flex flex-col ml-4">
                                        <p class="">{{ $champData['spells'][0]['description'] }}</p>
                                        <div class="flex flex-row space-x-2 text-black-custom font-bold mt-1">
                                            <h1>Mana cost:</h1>
                                            <h1 class="">{{ $champData['spells'][0]['costBurn'] }}</h1>
                                        </div>
                                    </div>
                                </li>

                                <li class="text-gray-800 list-none flex items-center ">
                                    <img class="rounded-md" src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/spell/'.$champData['spells'][1]['image']['full'] }}">

                                    <div class="flex flex-col ml-4">
                                        <p class="">{{ $champData['spells'][1]['description'] }}</p>
                                        <div class="flex flex-row space-x-2 text-black-custom font-bold mt-1">
                                            <h1>Mana cost:</h1>
                                            <h1 class="">{{ $champData['spells'][1]['costBurn'] }}</h1>
                                        </div>
                                    </div>
                                </li>

                                <li class="text-gray-800 list-none flex items-center ">
                                    <img class="rounded-md" src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/spell/'.$champData['spells'][2]['image']['full'] }}">

                                    <div class="flex flex-col ml-4">
                                        <p class="">{{ $champData['spells'][2]['description'] }}</p>
                                        <div class="flex flex-row space-x-2 text-black-custom font-bold mt-1">
                                            <h1>Mana cost:</h1>
                                            <h1 class="">{{ $champData['spells'][2]['costBurn'] }}</h1>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-gray-800 list-none flex items-center ">
                                    <img class="rounded-md" src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/spell/'.$champData['spells'][3]['image']['full'] }}">

                                    <div class="flex flex-col ml-4">
                                        <p class="">{{ $champData['spells'][3]['description'] }}</p>
                                        <div class="flex flex-row space-x-2 text-black-custom font-bold mt-1">
                                            <h1>Mana cost:</h1>
                                            <h1 class=" ">{{ $champData['spells'][3]['costBurn'] }}</h1>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

      <!-- Image gallery -->
        {{-- <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">

            <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-01.jpg" alt="Model wearing plain black basic tee." class="w-full h-full object-center object-cover">
                </div>
                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg" alt="Model wearing plain gray basic tee." class="w-full h-full object-center object-cover">
                </div>
            </div>

            <div class="aspect-w-4 aspect-h-5 sm:rounded-lg sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-5">
                <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/loading/{{ $champion->nickname }}_0.jpg" class="w-full h-full object-center object-cover">
            </div>

            <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-01.jpg" alt="Model wearing plain black basic tee." class="w-full h-full object-center object-cover">
                </div>
                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg" alt="Model wearing plain gray basic tee." class="w-full h-full object-center object-cover">
                </div>
            </div>

        </div> --}}


    </div>
</div>



@endsection


