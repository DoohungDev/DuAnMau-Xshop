<section class="row mb max-w-7xl mx-auto">
    <div class="grid grid-cols-4 gap-4">
        <div class="content-right col-span-3">
            <div class="banner slide-show">
            <!-- Banner-slideShow -->
                <div class="slide py-2">
                    <!-- This is an example component -->
                    <div class="max-w-7xl mx-auto border border rounded-lg">
                        <div id="default-carousel" class="relative" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <span
                                        class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
                                        Slide</span>
                                    <img src="https://giaysneaker.store/media/wysiwyg/slidershow/home-12/banner_NIKE.jpg"
                                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://giaysneaker.store/media/wysiwyg/slidershow/home-12/banner_NEW_BALANCE.jpg"
                                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://giaysneaker.store/media/wysiwyg/slidershow/home-12/banner_ADIDAS.jpg"
                                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                        alt="...">
                                </div>
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://giaysneaker.store/media/wysiwyg/slidershow/home-12/banner_CONVERSE.jpg"
                                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                        alt="...">
                                </div>
                            </div>
                            <!-- Slider indicators -->
                            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                                    data-carousel-slide-to="0"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                                    data-carousel-slide-to="1"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                                    data-carousel-slide-to="2"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                                    data-carousel-slide-to="2"></button>
                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                    <span class="hidden">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    <span class="hidden">Next</span>
                                </span>
                            </button>
                        </div>
                        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                    </div>
                </div>
            </div>
            <!-- List product -->
            <div class="list-products">
                <div class="flex grid grid-cols-3 gap-6">
                <?php
                    $i = 0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $hinh = $img_path . $img;
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        if (($i == 2) || ($i == 5) || ($i == 8)) {
                            $mr = "";
                        } else {
                            $mr = "mr";
                        }
                        echo  ' 
                                <div class="product text-center font-bold border rounded-lg shadow-xl">
                                    <div class="grid justify-items-center">
                                        <!-- img Product -->
                                        <div class="">
                                            <img src="'.$hinh.'"">
                                        </div>
                                        <!-- Name Product -->
                                        <a href="'.$linksp.'" class="px-2">'.$namesp.'</a>
                                        <!-- Price Product -->
                                        <span class="text-red-400 text-xl flex items-center">'.$price.'</span>
                                        </p></span>
                                        <a href="'.$linksp.'"
                                            class="bg-green-300 border rounded-lg px-4 py-2 my-2 text-white hover:text-red-400 hover:bg-white hover:border-red-200">Chi
                                            tiết sản phẩm
                                        </a>
                                    </div>
                                </div>
                                ';
                                }
                                ?>
                </div>
            </div>
        </div>
        <!-- Box-right -->
        <div class="boxphai">
            <?php include "boxright.php" ?>
        </div>
    </div>
</section>