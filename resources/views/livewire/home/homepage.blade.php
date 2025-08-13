<div>

    {{-- Hero Section --}}
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
            <a href="#"
                class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-900 bg-gray-100 rounded-full hover:bg-gray-200"
                role="alert">
                <span class="text-xs bg-primary rounded-full text-white px-4 py-1.5 mr-3">New</span>
                <span class="text-sm font-medium">Ritmiemde 1.0 is here! Experience the future of reading</span>
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                Read with rhythm in the digital age</h1>
            <p class="mb-8 text-lg font-normal text-gray-700 lg:text-xl sm:px-16 xl:px-48">
                Ritmiemde transforms digital reading with interactive flipbooks that feel like physical books -
                minimal distractions, maximum focus. No login required.
            </p>
            <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary hover:bg-primary-600 focus:ring-4 focus:ring-primary-300">
                    Start Reading
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                    <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                        </path>
                    </svg>
                    See Demo
                </a>
            </div>
        </div>
    </section>

    {{-- Banner Section --}}
    <section class="bg-white">
        <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12 xl:gap-0 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7 text-center md:text-left">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-gray-900">
                    Rediscover the Joy of Reading with Ritmiemde
                </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">
                    Immerse yourself in interactive flipbooks that bring digital reading to life. Accessible on any
                    device, anywhere, with no login required.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-lg bg-primary hover:bg-primary-700 focus:ring-4 focus:ring-primary-300">
                        Start Reading Now
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                        Explore Books
                    </a>
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex lg:ml-16">
                <img src="{{ asset('banner.png') }}" alt="Person reading on Ritmiemde platform" class="mx-auto">
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900">About Ritmiemde
                </h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg">A digital reading platform designed to bring back
                    the joy of focused reading in the age of distractions.</p>
                <a href="#"
                    class="text-white bg-primary focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Learn
                    More</a>
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
            <div class="max-w-screen-md mb-8 lg:mb-16 text-center md:text-left">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Designed for Readers Like You</h2>
                <p class="text-gray-500 sm:text-xl">Ritmiemde brings back the joy of reading with interactive flipbooks
                    that work seamlessly across all your devices.</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div class="text-center md:text-left">
                    <div
                        class="flex justify-center md:justify-start items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 mx-auto md:mx-0">
                        <svg class="w-5 h-5 text-primary lg:w-6 lg:h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-gray-900">Interactive Flipbooks</h3>
                    <p class="text-gray-500">Experience books that feel physical with page-flipping animation and
                        realistic layouts.</p>
                </div>
                <div class="text-center md:text-left">
                    <div
                        class="flex justify-center md:justify-start items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 mx-auto md:mx-0">
                        <svg class="w-5 h-5 text-primary lg:w-6 lg:h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-gray-900">No Login Required</h3>
                    <p class="text-gray-500">Start reading immediately without account creation or complicated sign-up
                        processes.</p>
                </div>
                <div class="text-center md:text-left">
                    <div
                        class="flex justify-center md:justify-start items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 mx-auto md:mx-0">
                        <svg class="w-5 h-5 text-primary lg:w-6 lg:h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-gray-900">Cross-Device Sync</h3>
                    <p class="text-gray-500">Continue reading from where you left off, whether on desktop, tablet, or
                        phone.</p>
                </div>
                <div class="text-center md:text-left">
                    <div
                        class="flex justify-center md:justify-start items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 mx-auto md:mx-0">
                        <svg class="w-5 h-5 text-primary lg:w-6 lg:h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-gray-900">Minimal Distractions</h3>
                    <p class="text-gray-500">Clean interface with no intrusive ads or popups to maintain your reading
                        focus.</p>
                </div>
                <div class="text-center md:text-left">
                    <div
                        class="flex justify-center md:justify-start items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 mx-auto md:mx-0">
                        <svg class="w-5 h-5 text-primary lg:w-6 lg:h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-gray-900">Mobile Optimized</h3>
                    <p class="text-gray-500">Perfectly readable on smartphones with responsive text sizing and
                        touch-friendly controls.</p>
                </div>
                <div class="text-center md:text-left">
                    <div
                        class="flex justify-center md:justify-start items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 mx-auto md:mx-0">
                        <svg class="w-5 h-5 text-primary lg:w-6 lg:h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-gray-900">Coming Soon</h3>
                    <p class="text-gray-500">Mobile app version for offline reading and additional personalized
                        features.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Team Section  --}}
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Our Team</h2>
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl">The passionate developers behind Ritmiemde's
                    reading revolution</p>
            </div>
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex">
                    <a href="#">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="{{ asset('icon.jpeg') }}"
                            alt="Razenry Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900">
                            <a href="#">Razenry Aretha Silverine</a>
                        </h3>
                        <span class="text-gray-500">Backend Dev & Database Architect</span>
                        <p class="mt-3 mb-4 font-light text-gray-500">Designs robust server architecture ensuring
                            seamless book delivery and data management for all readers.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex">
                    <a href="#">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="{{ asset('icon2.jpeg') }}"
                            alt="Shydrangea Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900">
                            <a href="#">Rils Zyendara Asafel</a>
                        </h3>
                        <span class="text-gray-500">Frontend Dev, UI/UX Designer & Project Manager</span>
                        <p class="mt-3 mb-4 font-light text-gray-500">Crafts intuitive reading interfaces that make
                            digital books feel physical and enjoyable.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-500 hover:text-gray-900">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
