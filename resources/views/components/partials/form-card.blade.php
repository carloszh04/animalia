<section class="py-1 bg-blueGray-50">
    <div class="w-full lg:w-11/12 px-4 mx-auto mt-6">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
            <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    {{ $title }}
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-5">
                {{ $content }}
            </div>
        </div>
        <footer class="relative  pt-8 pb-6 mt-2">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                        {{ $footer }}
                    </div>
                </div>
            </div>
        </footer>
    </div>
</section>
