<div id="Opacity" class="fixed hidden top-0 left-0 w-full h-screen backdrop-filter backdrop-brightness-50 z-20">
    <div class="h-full w-full flex items-center justify-center">
        <div class="w-8/12 h-8/12 ">
            <div class="bg-gray-500 w-full h-full relative" >
                <div class="text-center">
                    <span id="close" class="cursor-pointer close absolute top-5 right-5 w-10 h-10 border-2 border-gray-400 text-blue-light rounded-xl text-2xl font-bold z-30 ">
                        &times;
                    </span>
                </div>

                <div class="flex w-full h-full top-0 absolute justify-center items-center flex-col text-center ">

                    <div class="w-full flex justify-center">
                        <h1 class="text-blue-light w-8/12 font-montserrat text-xl mt-10 pb-1 border-b-2 border-gray-400">Přidat účet</h1>
                    </div>

                    <div class="w-full h-full  flex justify-center items-center ">

                        <form   action="/user/store"
                                method="POST"
                                class="w-full">
                        @csrf

                            <div class="max-w-4xl mx-auto px-4 sm:px-6 sm:py-0 xl:py-5 bg-gradient-to-br from-own-orange to-gradient-red rounded-lg">

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="username" class="block text-sm font-medium text-black-custom"><span class="font-bold text-red-custom mr-2">*</span>Uživatelské jméno</label>
                                        <input type="text"
                                                name="username"
                                                id="username"
                                                class="mt-1 focus:ring-0 focus:border-own-lightgray block w-full shadow-sm sm:text-sm border-own-lightgray bg-own-lightgray rounded-md">
                                    </div>


                                    <div class="col-span-6 sm:col-span-3">
                                        <label  for="region"
                                                class="block text-sm font-medium text-black-custom">Region</label>

                                        <select id="region"
                                                name="region"
                                                autocomplete="region"
                                                class="mt-1 block w-full py-2 px-3 border border-own-lightgray bg-own-lightgray rounded-md shadow-sm focus:outline-none focus:ring-0 focus:border-own-lightgray sm:text-sm">

                                                <option value="EUNE">Europe Nordic & East</option>
                                                <option value="NA">North America</option>
                                                <option value="EW">Europe West</option>
                                                <option value="LAS">Las</option>
                                                <option value="LAC">Lan</option>
                                                <option value="OCE">Oceania</option>

                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <button class="flex flex-row m-auto bg-own-black hover:bg-black-custom space-x-2 px-3 py-2 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-own-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>

                                            <h1 class="text-own-orange">Přidat</h1>
                                        </button>
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
