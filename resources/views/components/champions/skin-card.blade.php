<div>
    <a href="{{ route('skins-show', $skin->name) }}">

        <div class="bg-black-custom border-2 border-black-custom hover:bg-own-darkgray">
            <div class="flex flex-col items-center h-full justify-evenly py-6 ">

                <div class="h-full">

                    <div class="flex justify-center py-4">
                        <img style="" src="{{ 'https://ddragon.leagueoflegends.com/cdn/img/champion/splash/'.$skin['nickname'].'_1.jpg' }}" >
                    </div>

                    <div class="text-center ">
                        <h1 class="text-xl font-bold text-black font-apple text-own-red">{{ $skin['name'] }}</h1>
                    </div>

                </div>


            </div>
        </div>

    </a>
</div>

