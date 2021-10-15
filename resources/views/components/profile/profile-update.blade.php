<tbody class="bg-gray-400">
    <tr>
        <td class="px-6 py-4 whitespace-nowrap">
            <h1 class="text-sm font-medium text-gray-900">
                {{ $profile['id'] }}
            </h1>
        </td>


        <form
        action="{{ route('profile-update', $profile['id']) }}"
        method="POST"
        >
        @csrf
        @method('put')

            <td class="px-6 py-4 whitespace-nowrap">
                <input
                    type="text"
                    name="username"
                    id="username"
                    value="{{ $profile['username'] }}"
                    class="focus:ring-0 focus:border-own-lightgray block shadow-sm sm:text-sm border-own-lightgray bg-own-lightgray rounded-md">
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
                <select
                    id="region"
                    name="region"
                    autocomplete="region"
                    class="mt-1 block w-full py-2 px-3 border border-own-lightgray bg-own-lightgray rounded-md shadow-sm focus:outline-none focus:ring-0 focus:border-own-lightgray sm:text-sm">

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
            </td>

            <td>
                <button type="submit">
                    updatovat
                </button>
            </td>

        </form>

        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

            <form
                action="{{ route('profile-delete', $profile['id']) }}"
                method="POST">

                @method('DELETE')
                @csrf

                    <button type="submit" class=" ">
                        smazat
                    </button>
            </form>
        </td>

    </tr>
</tbody>
