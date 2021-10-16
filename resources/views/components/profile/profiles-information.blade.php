<a href="{{ route('summoner-show', $profile->username) }}">

    <div class="group relative ">
        <div class="w-full sm:h-80 bg-gradient-to-br from-own-orange to-gradient-red aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none lg:p-5">
            <div class="h-full grid grid-cols-1 justify-items-center">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('img/588.png') }}" class="object-center object-cover rounded-full h-28  ">
                </div>

                <div class="text-center lg:w-full w-10/12 mx-auto">
                    <h1 class="mt-4 mb-2">
                        <p class="font-bold text-xl font-Rubik">{{ $profile->username }}</p>
                        <p class="">{{ $profile->region }}</p>
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
