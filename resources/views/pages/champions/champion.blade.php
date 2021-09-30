@extends('layouts.user')


@section('content')




<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    theme: {
      extend: {
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
    <div class="pt-6">
        <nav aria-label="Breadcrumb">
            <ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
                <li>
                    <div class="flex items-center">
                        <a href="{{ route('champions') }}" class="mr-2 text-sm font-medium text-gray-900">
                            champions
                        </a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    </div>
                </li>

                <li>
                    <div class="flex items-center">
                        <a href="{{ route('champions-show', $champion->id) }}" class="mr-2 text-sm font-medium text-gray-900">
                            {{ $champion->name }}
                        </a>

                    </div>
                </li>

            </ol>
        </nav>

      <!-- Image gallery -->
        <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">

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

        </div>

      <!-- Product info -->
        <div class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">
                    {{ $champion->name }}
                </h1>
            </div>

            <!-- Options -->
            <div class="mt-4 lg:mt-0 lg:row-span-3">
            <!-- Reviews -->
            <div >
                <h3 class="text-sm text-gray-900 font-medium">Obtížnost</h3>

                <div class="flex items-center mt-5">
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
                <!-- Colors -->
                <div>
                <h3 class="text-sm text-gray-900 font-medium">Color</h3>

                <fieldset class="mt-4">
                    <legend class="sr-only">
                    Choose a color
                    </legend>
                    <div class="flex items-center space-x-3">
                    <!--
                        Active and Checked: "ring ring-offset-1"
                        Not Active and Checked: "ring-2"
                    -->
                    <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                        <input type="radio" name="color-choice" value="White" class="sr-only" aria-labelledby="color-choice-0-label">
                        <p id="color-choice-0-label" class="sr-only">
                        White
                        </p>
                        <span aria-hidden="true" class="h-8 w-8 bg-white border border-black border-opacity-10 rounded-full"></span>
                    </label>

                    <!--
                        Active and Checked: "ring ring-offset-1"
                        Not Active and Checked: "ring-2"
                    -->
                    <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                        <input type="radio" name="color-choice" value="Gray" class="sr-only" aria-labelledby="color-choice-1-label">
                        <p id="color-choice-1-label" class="sr-only">
                        Gray
                        </p>
                        <span aria-hidden="true" class="h-8 w-8 bg-gray-200 border border-black border-opacity-10 rounded-full"></span>
                    </label>

                    <!--
                        Active and Checked: "ring ring-offset-1"
                        Not Active and Checked: "ring-2"
                    -->
                    <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-900">
                        <input type="radio" name="color-choice" value="Black" class="sr-only" aria-labelledby="color-choice-2-label">
                        <p id="color-choice-2-label" class="sr-only">
                        Black
                        </p>
                        <span aria-hidden="true" class="h-8 w-8 bg-gray-900 border border-black border-opacity-10 rounded-full"></span>
                    </label>
                    </div>
                </fieldset>
                </div>

                <!-- Sizes -->
                <div class="mt-10">
                <div class="flex items-center justify-between">
                    <h3 class="text-sm text-gray-900 font-medium">Size</h3>
                    <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a>
                </div>

                <fieldset class="mt-4">
                    <legend class="sr-only">
                    Choose a size
                    </legend>
                    <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                    <!-- Active: "ring-2 ring-indigo-500" -->
                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-gray-50 text-gray-200 cursor-not-allowed">
                        <input type="radio" name="size-choice" value="XXS" disabled class="sr-only" aria-labelledby="size-choice-0-label">
                        <p id="size-choice-0-label">
                        XXS
                        </p>

                        <div aria-hidden="true" class="absolute -inset-px rounded-md border-2 border-gray-200 pointer-events-none">
                        <svg class="absolute inset-0 w-full h-full text-gray-200 stroke-2" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                            <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                        </svg>
                        </div>
                    </label>

                    <!-- Active: "ring-2 ring-indigo-500" -->
                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                        <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                        <p id="size-choice-1-label">
                        XS
                        </p>

                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                    </label>

                    <!-- Active: "ring-2 ring-indigo-500" -->
                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                        <input type="radio" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
                        <p id="size-choice-2-label">
                        S
                        </p>

                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                    </label>

                    <!-- Active: "ring-2 ring-indigo-500" -->
                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                        <input type="radio" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">
                        <p id="size-choice-3-label">
                        M
                        </p>

                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                    </label>

                    <!-- Active: "ring-2 ring-indigo-500" -->
                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                        <input type="radio" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">
                        <p id="size-choice-4-label">
                        L
                        </p>

                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                    </label>

                    <!-- Active: "ring-2 ring-indigo-500" -->
                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                        <input type="radio" name="size-choice" value="XL" class="sr-only" aria-labelledby="size-choice-5-label">
                        <p id="size-choice-5-label">
                        XL
                        </p>

                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                    </label>

                    <!-- Active: "ring-2 ring-indigo-500" -->
                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                        <input type="radio" name="size-choice" value="2XL" class="sr-only" aria-labelledby="size-choice-6-label">
                        <p id="size-choice-6-label">
                        2XL
                        </p>

                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                    </label>

                    <!-- Active: "ring-2 ring-indigo-500" -->
                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                        <input type="radio" name="size-choice" value="3XL" class="sr-only" aria-labelledby="size-choice-7-label">
                        <p id="size-choice-7-label">
                        3XL
                        </p>

                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                    </label>
                    </div>
                </fieldset>
                </div>

                <button type="submit" class="mt-10 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add to bag</button>
            </form>
            </div>

            <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
            <!-- Description and details -->
            <div>
                <h3 class="sr-only">Description</h3>

                <div class="space-y-6">
                    <p class="text-base text-gray-900">
                        {{ $champData['blurb'] }}
                    </p>
                </div>
            </div>

            <div class="mt-10">
                <h3 class="text-sm font-medium text-gray-900">Spells</h3>

                <div class="mt-4">
                    <ul role="list" class="pl-4 list-disc text-sm space-y-5">
                        <li class="text-gray-400 list-none flex items-center ">
                            <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/passive/'.$champData['passive']['image']['full'] }}">

                            <div class="flex flex-col ml-4">
                                <p class="">{{ $champData['passive']['description'] }}</p>
                            </div>
                        </li>

                        <li class="text-gray-400 list-none flex items-center none">
                            <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/spell/'.$champData['spells'][0]['image']['full'] }}">

                            <div class="flex flex-col ml-4">
                                <p class="">{{ $champData['spells'][0]['description'] }}</p>
                                <div class="flex justify-between w-1/2 text-center text-black-custom font-bold mt-1">
                                    <h1>Mana cost:</h1>
                                    <h1 class="">{{ $champData['spells'][0]['costBurn'] }}</h1>
                                </div>
                            </div>
                        </li>

                        <li class="text-gray-400 list-none flex items-center ">
                            <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/spell/'.$champData['spells'][1]['image']['full'] }}">

                            <div class="flex flex-col ml-4">
                                <p class="">{{ $champData['spells'][1]['description'] }}</p>
                                <div class="flex justify-between w-1/2 text-center text-black-custom font-bold mt-1">
                                    <h1>Mana cost:</h1>
                                    <h1 class="">{{ $champData['spells'][1]['costBurn'] }}</h1>
                                </div>
                            </div>
                        </li>

                        <li class="text-gray-400 list-none flex items-center ">
                            <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/spell/'.$champData['spells'][2]['image']['full'] }}">

                            <div class="flex flex-col ml-4">
                                <p class="">{{ $champData['spells'][2]['description'] }}</p>
                                <div class="flex justify-between w-1/2 text-center text-black-custom font-bold mt-1">
                                    <h1>Mana cost:</h1>
                                    <h1 class="">{{ $champData['spells'][2]['costBurn'] }}</h1>
                                </div>
                            </div>
                        </li>
                        <li class="text-gray-400 list-none flex items-center ">
                            <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/spell/'.$champData['spells'][3]['image']['full'] }}">

                            <div class="flex flex-col ml-4">
                                <p class="">{{ $champData['spells'][3]['description'] }}</p>
                                <div class="flex justify-between w-1/2 text-center text-black-custom font-bold mt-1">
                                    <h1>Mana cost:</h1>
                                    <h1 class=" ">{{ $champData['spells'][3]['costBurn'] }}</h1>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-10">
                <h2 class="text-sm font-medium text-gray-900">Details</h2>

                <div class="mt-4 space-y-6">
                <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>





{{-- <div class="bg-white">
    <div class="max-w-2xl mx-auto py-24 px-4 grid items-center grid-cols-1 gap-y-16 gap-x-8 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8 lg:grid-cols-2">
        <div>
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{ $champion->name }}</h2>
            <p class="mt-4 text-gray-500">{{ $champData['blurb'] }}</p>

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8 ">

                <div class="">
                    <h1>Jak hrát s <span class="font-bold">{{ $champion->name }}</span></h1>

                    @foreach ($champData['allytips'] as $allytips)
                        <div class="border-t border-gray-200 ">
                            <dd class="my-2 text-sm text-gray-500">{{ $champData['allytips'][0] }}</dd>
                        </div>
                    @endforeach
                </div>

                <div>
                    <h1>Jak hrát proti <span class="font-bold">{{ $champion->name }}</span></h1>

                    @foreach ($champData['enemytips'] as $enemytips)
                        <div class="border-t border-gray-200 ">
                            <dd class="my-2 text-sm text-gray-500">{{ $enemytips }}</dd>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>

        <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
            <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/loading/{{ $champion->nickname }}_0.jpg" class="bg-gray-100 rounded-lg">
        </div>
    </div>
</div> --}}


@endsection


