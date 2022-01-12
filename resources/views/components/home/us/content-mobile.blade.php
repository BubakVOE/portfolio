
            <h1 class="hidden xl:block absolute uppercase text-8xl font-Raleway font-extrabold right-5 top-5 transform z-20  opacity-30">
                služby
            </h1>

            <div class="py-12 bg-own-darkgray relative">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h1 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl uppercase font-poppins  text-transparent bg-clip-text bg-gradient-to-r from-gradient-red to-own-orange pt-2">
                            Proč u nás ?</h2>

                        <p class="mt-4 max-w-2xl text-lg text-gray-200 lg:mx-auto">
                            Na naší webové stránce můžeš najít spoustu informací o svém účtu, které ti následně můžou pomoct ve zlepšování tvého <strong>skillu</strong>
                        </p>
                    </div>

                    <div class="mt-10">
                        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">

                            {{-- Runy --}}
                            <a href="#" class="relative p-2 rounded-lg shadow-xl hover:shadow-none hover:scale-95 transform duration-200 ease-in-out bg-gray-medium hover:bg-gray-old ">
                                <dt>
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gray-old text-white border border-white">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-white">Runy</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Přehledné hledání <strong>run</strong>, které ti padnout do aktuálního matchmakingu proti nepřátelům !
                                </dd>
                            </a>

                            {{-- Champions --}}
                            <a href="{{ route('champions') }}" class="relative p-2 rounded-lg shadow-xl hover:shadow-none hover:scale-95 transform duration-200 ease-in-out bg-gray-medium hover:bg-gray-old ">
                                <dt>
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gray-old text-white border border-white">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-white">Champions</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Přečti si příběh o postavách, informace o kouzlech, podívej se na skiny daných postav a nebo zjisti pouze obtížnost postavy !
                                </dd>
                            </a>

                            {{-- buildy --}}
                            <a href="#" class="relative p-2 rounded-lg shadow-xl hover:shadow-none hover:scale-95 transform duration-200 ease-in-out bg-gray-medium hover:bg-gray-old ">
                                <dt>
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gray-old text-white border border-white">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-white">Buildy</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Můžeš získat inspiraci buildů pro tvojí oblibenou postavu od ostatních hráčů. Každý zaregistrovaný uživatel má možnost přidávat buildy (itemy, runy, styl hraní) pro ostatní hráče
                                </dd>
                            </a>

                            {{-- Skins --}}
                            <a href="{{ route('skins') }}" class="relative p-2 rounded-lg shadow-xl hover:shadow-none hover:scale-95 transform duration-200 ease-in-out bg-gray-medium hover:bg-gray-old ">
                                <dt>
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gray-old text-white border border-white">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-white">Skins</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Prohlédni si veškeré skiny, které ve hře existují. Můžeš si také stáhnout daný skin z <strong>ART</strong> kolekce (fullHD) a následně si jí nastavit jako tapetu plochy
                                </dd>
                            </a>

                        </dl>
                    </div>
                </div>
            </div>
