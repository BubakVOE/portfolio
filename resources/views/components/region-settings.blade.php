<div id="Opacity" class="fixed hidden top-0 left-0 w-full h-screen backdrop-filter backdrop-brightness-50 z-20">
    <div class="h-full w-full flex items-center justify-center">
        <div class="w-8/12 h-8/12 ">
            <div class="bg-gray-500 w-full h-full relative" >
                <div class="text-center">
                    <span id="close" class="cursor-pointer close absolute top-5 right-5 w-10 h-10 border-2 border-gray-400 text-blue-light rounded-xl text-2xl font-bold z-30 ">&times;</span>
                </div>

                <div class="flex w-full h-full top-0 absolute justify-center items-center flex-col text-center ">

                    <div class="w-full flex justify-center">
                        <h1 class="text-blue-light w-8/12 font-montserrat text-xl mt-10 pb-1 border-b-2 border-gray-400">Region</h1>
                    </div>

                    <div class="w-full h-full  flex justify-center items-center ">
                        <form action="" class="w-full">

                            <div class="w-full h-full flex flex-col justify-center items-center">
                                <div class="grid grid-cols-2 gap-10 w-6/12 mt-5">

                                    <div class="grid gap-3">
                                        <div class="flex region-active opacity-75 hover:opacity-100 hover:border-red-500 justify-around items-center cursor-pointer pt-1 pb-2 border-r border-gray-400  ">
                                            <div class="flex justify-between w-9/12">
                                                <img src="{{ asset('img/regions/region-eune.png') }}" alt="">
                                                <h1 class="font-bold font-montserrat">Europe Nordic & East</h1>
                                            </div>

                                        </div>
                                        <div class="hover:border-red-500 opacity-75 hover:opacity-100 flex justify-around items-center cursor-pointer pt-1 pb-2 border-r border-gray-400  ">
                                            <div class="flex justify-between w-9/12">
                                                <img src="{{ asset('img/regions/region-euw.png') }}" alt="">
                                                <h1 class="font-bold font-montserrat">Europe West</h1>
                                            </div>

                                        </div>
                                        <div class="hover:border-red-500 opacity-75 hover:opacity-100 flex justify-around items-center cursor-pointer pt-1 pb-2 border-r border-gray-400  ">
                                            <div class="flex justify-between w-9/12">
                                                <img class="" src="{{ asset('img/regions/region-na.png') }}" alt="">
                                                <h1 class="font-bold font-montserrat">North America</h1>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="grid gap-3">
                                        <div class="hover:border-red-500 opacity-75 hover:opacity-100 flex justify-around items-center cursor-pointer pt-1 pb-2 border-l border-gray-400  ">

                                            <div class="flex justify-between items-center w-9/12">
                                                <h1 class="font-montserrat font-bold">Las</h1>
                                                <img src="{{ asset('img/regions/region-las.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="hover:border-red-500 opacity-75 hover:opacity-100 flex justify-around items-center cursor-pointer pt-1 pb-2 border-l border-gray-400  ">

                                            <div class="flex justify-between w-9/12">
                                                <h1 class="font-bold font-montserrat">Lan</h1>
                                                <img src="{{ asset('img/regions/region-lan.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="hover:border-red-500 opacity-75 hover:opacity-100 flex justify-around items-center cursor-pointer pt-1 pb-2 border-l border-gray-400  ">

                                            <div class="flex justify-between w-9/12">
                                                <h1 class="font-bold font-montserrat">Oceania</h1>
                                                <img src="{{ asset('img/regions/region-oceania.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>


                                </div>



                            </div>


                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
