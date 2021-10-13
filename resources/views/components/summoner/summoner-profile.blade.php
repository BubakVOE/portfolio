@if ($profile ['summoner_id'] == Auth()->user()->id)

    <div class="grid grid-cols-6 gap-6 my-8">

        <div class="col-span-6 sm:col-span-2">
            <label for="username" class="block text-sm font-medium text-black-custom">
                <span class="font-bold text-red-custom mr-2">*</span>Uživatelské jméno
            </label>
            
            <input type="text"
                    name="username"
                    id="username"
                    value="{{ $profile->username }}"
                    class="mt-1 focus:ring-0 focus:border-own-lightgray block w-full shadow-sm sm:text-sm border-own-lightgray bg-own-lightgray rounded-md">
        </div>

        <div class="col-span-6 sm:col-span-4 ml-10 ">
            <label for="username" class="block text-sm font-medium text-black-custom">
                <span class="font-bold text-red-custom mr-2">*</span>Region</label>

            <div class="flex items-center justify-between  w-full">
                <select id="region"
                    name="region"
                    autocomplete="region"
                    class="mt-1 block w-5/12 py-2 px-3 border border-own-lightgray bg-own-lightgray rounded-md shadow-sm focus:outline-none focus:ring-0 focus:border-own-lightgray sm:text-sm">

                    @if ($profile['region'] == 'EUNE')
                        <option value="EUNE">Europe Nordic & East</option>
                        <option value="NA">North America</option>
                        <option value="EW">Europe West</option>
                        <option value="LAS">Las</option>
                        <option value="LAC">Lan</option>
                        <option value="OCE">Oceania</option>

                    @elseif ($profile['region'] == 'NA')
                        <option value="NA">North America</option>
                        <option value="EUNE">Europe Nordic & East</option>
                        <option value="EW">Europe West</option>
                        <option value="LAS">Las</option>
                        <option value="LAC">Lan</option>
                        <option value="OCE">Oceania</option>

                    @elseif ($profile['region'] == 'EW')
                        <option value="EW">Europe West</option>
                        <option value="EUNE">Europe Nordic & East</option>
                        <option value="NA">North America</option>
                        <option value="LAS">Las</option>
                        <option value="LAC">Lan</option>
                        <option value="OCE">Oceania</option>

                    @elseif ($profile['region'] == 'LAS')
                        <option value="LAS">Las</option>
                        <option value="EUNE">Europe Nordic & East</option>
                        <option value="NA">North America</option>
                        <option value="EW">Europe West</option>
                        <option value="LAC">Lan</option>
                        <option value="OCE">Oceania</option>

                    @elseif ($profile['region'] == 'LAC')
                        <option value="LAC">Lan</option>
                        <option value="EUNE">Europe Nordic & East</option>
                        <option value="NA">North America</option>
                        <option value="EW">Europe West</option>
                        <option value="LAS">Las</option>
                        <option value="OCE">Oceania</option>

                    @elseif ($profile['region'] == 'OCE')
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


                    <button type="submit" class="mx-1 bg-blue-500 px-2 py-1 rounded">
                        Potvrdit
                    </button>

            </div>

        </div>

        <form
            action="{{ route('summoner-delete', $profile['id']) }}"
            method="POST">
            @method('DELETE')
            @csrf

            <button type="submit" class="mx-1 bg-red-custom px-2 py-1 rounded">
                {{ $profile['id'] }}
            </button>
        </form>


    </div>

@endif
