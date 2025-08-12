<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 font-bold">

        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('logo.png') }}" class="h-8" alt="Flowbite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap">Ritmiemde</span>
        </a>

        <div class="flex md:order-2 space-x-3 gap-0 md:gap-2 md:space-x-0 rtl:space-x-reverse">

            {{-- Search --}}
            <form class="max-w-lg mx-auto hidden md:block">
                <div class="flex">
                    <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only">Your
                        Email</label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                        class="shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100"
                        type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdown-button">
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Mockups</button>
                            </li>
                        </ul>
                    </div>
                    <div class="relative w-full">
                        <input type="search" id="search-dropdown"
                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-primary focus:border-primary"
                            placeholder="Search Solo Leveling, Classroom off the elite, and more..." required />
                        <button type="submit"
                            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-primary rounded-e-lg border border-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-primary">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>

            <button type="button"
                class="text-white bg-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-4 py-2 text-center">Login</button>

            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="{{ route('home') }}"
                        class="@if (request()->routeIs('home')) block py-2 px-3 text-white bg-primary rounded-sm md:bg-transparent md:text-primary md:p-0 font-bold @else block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 font-bold @endif"
                        aria-current="@if (request()->routeIs('home')) page @else false @endif">Home</a>
                </li>
                <li>
                    <a href="{{ route('books') }}"
                        class="@if (request()->routeIs('books')) block py-2 px-3 text-white bg-primary rounded-sm md:bg-transparent md:text-primary md:p-0 font-bold @else block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 font-bold @endif"
                        aria-current="@if (request()->routeIs('home')) page @else false @endif">Books</a>
                </li>
                <li>
                    <a href="#"
                        class="@if (request()->routeIs('categories')) block py-2 px-3 text-white bg-primary rounded-sm md:bg-transparent md:text-primary md:p-0 font-bold @else block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 font-bold @endif"
                        aria-current="@if (request()->routeIs('home')) page @else false @endif">Categories</a>
                </li>
                <li>
                    <a href="#"
                        class="@if (request()->routeIs('genres')) block py-2 px-3 text-white bg-primary rounded-sm md:bg-transparent md:text-primary md:p-0 font-bold @else block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 font-bold @endif"
                        aria-current="@if (request()->routeIs('home')) page @else false @endif">Genres</a>
                </li>
                <li>
                    <a href="#"
                        class="@if (request()->routeIs('support')) block py-2 px-3 text-white bg-primary rounded-sm md:bg-transparent md:text-primary md:p-0 font-bold @else block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0 font-bold @endif"
                        aria-current="@if (request()->routeIs('home')) page @else false @endif">Support</a>
                </li>
                <li class="block md:hidden">
                    <form class="max-w-lg mx-auto">
                        <div class="flex">
                            <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only">Your
                                Email</label>
                            <button id="dropdown-button" data-dropdown-toggle="dropdown-mobile"
                                class="shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100"
                                type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <div id="dropdown-mobile"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdown-button">
                                    <li>
                                        <button type="button"
                                            class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Mockups</button>
                                    </li>

                                </ul>
                            </div>
                            <div class="relative w-full">
                                <input type="search" id="search-dropdown"
                                    class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-primary focus:border-primary"
                                    placeholder="Search Solo Leveling, Classroom off the elite, and more..."
                                    required />
                                <button type="submit"
                                    class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-primary rounded-e-lg border border-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-primary">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
