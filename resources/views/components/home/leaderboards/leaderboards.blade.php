<section class="relative  bg-own-darkgray">
    <h1 class="hidden xl:block absolute uppercase text-6xl font-Raleway font-extrabold right-5 top-5 transform z-20  opacity-30">
        žebříček
    </h1>

    <div class="py-12 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">

            <div class="lg:text-center">
                <h1 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl uppercase font-poppins  text-transparent bg-clip-text bg-gradient-to-r from-gradient-red to-own-orange pt-2">
                    nejlepší hráči
                </h1>
            </div>

            <div class="text-center">
                <p class="mt-4 max-w-2xl text-lg text-gray-200 lg:mx-auto">
                    Celkový přehled 4 nejlepších hráčů z <strong>EUNE</strong> regionů
                </p>

                <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">

                    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

                        @foreach ($euneTopPlayers as $euneTopPlayer)
                            <x-home.leaderboards.eune-top-players :euneTopPlayer="$euneTopPlayer"/>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="text-center">
                <p class="mt-4 max-w-2xl text-lg text-gray-200 lg:mx-auto">
                    Celkový přehled 4 nejlepších hráčů z <strong>EUNE</strong> regionů
                </p>

                <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">

                    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

                        @foreach ($euwTopPlayers as $euwTopPlayer)
                            <x-home.leaderboards.euw-top-players :euwTopPlayer="$euwTopPlayer"/>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

