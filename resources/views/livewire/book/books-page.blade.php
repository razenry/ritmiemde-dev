<div>
    <section class="bg-white">
        <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
            <header class="text-center">
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Featured Book Collection</h2>
                <p class="mx-auto mt-4 max-w-md text-gray-500">
                    Discover our curated selection of interactive flipbooks designed to bring back the joy of reading in
                    the digital age.
                </p>
            </header>

            <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <article
                    class="flex flex-col sm:flex-row bg-white transition hover:shadow-xl rounded-lg overflow-hidden border border-gray-100 h-full">
                    <!-- Mobile-first image (shown on mobile, hidden on desktop) -->
                    <div class="block sm:hidden">
                        <img alt="Book Cover: Digital Reading Revolution" src="{{ asset('book1.jpg') }}"
                            class="w-full h-48 object-cover" />
                    </div>

                    <div class="rotate-180 p-2 [writing-mode:_vertical-lr] bg-primary-50 hidden sm:block">
                        <time datetime="2023-11-15"
                            class="flex items-center justify-between gap-4 text-xs font-bold text-primary uppercase">
                            <span>2023</span>
                            <span class="w-px flex-1 bg-primary/30"></span>
                            <span>New Release</span>
                        </time>
                    </div>

                    <!-- Desktop image (hidden on mobile) -->
                    <div class="hidden sm:block sm:basis-56">
                        <img alt="Book Cover: Digital Reading Revolution" src="{{ asset('book1.jpg') }}"
                            class="aspect-square h-full w-full object-cover" />
                    </div>

                    <div class="flex flex-1 flex-col justify-between">
                        <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                            <a href="#">
                                <h3 class="font-bold text-gray-900">
                                    The Digital Reading Revolution
                                </h3>
                            </a>

                            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
                                Explore how interactive flipbooks are transforming digital reading experiences. This
                                guide covers everything from basic navigation to advanced features of modern e-reading.
                            </p>
                        </div>

                        <div class="sm:flex sm:items-end sm:justify-end">
                            <a href="#"
                                class="block bg-primary px-5 py-3 text-center text-xs font-bold text-white uppercase transition hover:bg-primary-700">
                                Read Now
                            </a>
                        </div>
                    </div>
                </article>

                <article
                    class="flex flex-col sm:flex-row bg-white transition hover:shadow-xl rounded-lg overflow-hidden border border-gray-100 h-full">
                    <!-- Mobile-first image -->
                    <div class="block sm:hidden">
                        <img alt="Book Cover: Focused Reading" src="{{ asset('book2.jpeg') }}"
                            class="w-full h-48 object-cover" />
                    </div>

                    <div class="rotate-180 p-2 [writing-mode:_vertical-lr] bg-primary-50 hidden sm:block">
                        <time datetime="2023-09-22"
                            class="flex items-center justify-between gap-4 text-xs font-bold text-primary uppercase">
                            <span>2023</span>
                            <span class="w-px flex-1 bg-primary/30"></span>
                            <span>Bestseller</span>
                        </time>
                    </div>

                    <!-- Desktop image -->
                    <div class="hidden sm:block sm:basis-56">
                        <img alt="Book Cover: Focused Reading" src="{{ asset('book2.jpeg') }}"
                            class="aspect-square h-full w-full object-cover" />
                    </div>

                    <div class="flex flex-1 flex-col justify-between">
                        <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                            <a href="#">
                                <h3 class="font-bold text-gray-900">
                                    The Art of Focused Reading
                                </h3>
                            </a>

                            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
                                Learn techniques to improve your reading focus in our distraction-filled world. This
                                interactive guide includes exercises and tools to enhance your reading comprehension.
                            </p>
                        </div>

                        <div class="sm:flex sm:items-end sm:justify-end">
                            <a href="#"
                                class="block bg-primary px-5 py-3 text-center text-xs font-bold text-white uppercase transition hover:bg-primary-700">
                                Read Now
                            </a>
                        </div>
                    </div>
                </article>

                <article
                    class="flex flex-col sm:flex-row bg-white transition hover:shadow-xl rounded-lg overflow-hidden border border-gray-100 h-full">
                    <!-- Mobile-first image -->
                    <div class="block sm:hidden">
                        <img alt="Book Cover: Focused Reading" src="{{ asset('book3.jpg') }}"
                            class="w-full h-48 object-cover" />
                    </div>

                    <div class="rotate-180 p-2 [writing-mode:_vertical-lr] bg-primary-50 hidden sm:block">
                        <time datetime="2023-09-22"
                            class="flex items-center justify-between gap-4 text-xs font-bold text-primary uppercase">
                            <span>2023</span>
                            <span class="w-px flex-1 bg-primary/30"></span>
                            <span>Bestseller</span>
                        </time>
                    </div>

                    <!-- Desktop image -->
                    <div class="hidden sm:block sm:basis-56">
                        <img alt="Book Cover: Focused Reading" src="{{ asset('book3.jpg') }}"
                            class="aspect-square h-full w-full object-cover" />
                    </div>

                    <div class="flex flex-1 flex-col justify-between">
                        <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                            <a href="#">
                                <h3 class="font-bold text-gray-900">
                                    The Art of Focused Reading
                                </h3>
                            </a>

                            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
                                Learn techniques to improve your reading focus in our distraction-filled world. This
                                interactive guide includes exercises and tools to enhance your reading comprehension.
                            </p>
                        </div>

                        <div class="sm:flex sm:items-end sm:justify-end">
                            <a href="#"
                                class="block bg-primary px-5 py-3 text-center text-xs font-bold text-white uppercase transition hover:bg-primary-700">
                                Read Now
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</div>
