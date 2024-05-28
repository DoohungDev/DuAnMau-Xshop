<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <section class="body max-w-7xl mx-auto">
        <!-- header -->
        <section class="header">
            <div class="tittle bg-red-100 text-2xl px-2 py-4 my-3 border rounded-lg">
                <h1 class="px-2 uppercase">Siêu thị trực tuyến</h1>
            </div>

            <div class="menu bg-gray-400 text-white flex px-2 py-3 no-underline list-none border rounded-lg">
                <ui>
                    <li>
                        <a href="" class="px-2 hover:text-xl">Trang chủ</a>
                        <a href="" class="px-2 hover:text-xl">Giới thiệu</a>
                        <a href="" class="px-2 hover:text-xl">Liên hệ</a>
                        <a href="" class="px-2 hover:text-xl">Góp ý</a>
                        <a href="" class="px-2 hover:text-xl">Hỏi đáp</a>
                    </li>
                </ui>
            </div>
        </section>

        <!-- main -->
        <section class="main-content my-4">
            <div class="grid grid-cols-4 gap-4">
                <div class="content-right col-span-3">

                    <!-- slide -->
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
                                        <img src="https://cdn.hoanghamobile.com/i/home/Uploads/2024/04/09/xiaomi-14-1200x375.png"
                                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 2 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://cdn.hoanghamobile.com/i/home/Uploads/2024/05/11/galaxy-s24-ultra-web.jpg"
                                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://cdn.hoanghamobile.com/i/home/Uploads/2024/04/26/ifinix-web_638497496038773409.jpg"
                                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                            alt="...">
                                    </div>
                                </div>
                                <!-- Slider indicators -->
                                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                </div>
                                <!-- Slider controls -->
                                <button type="button"
                                    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
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
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
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

                    <!-- list product -->
                    <div class="list-products">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="product text-center font-bold border rounded-lg shadow-xl">
                                <div class="flex justify-between px-3 py-2">
                                    <img src="https://hoanghamobile.com/Content/web/sticker/apple.png" alt="">
                                    <span class="bg-green-900 border rounded-lg px-2 text-white">Trả góp 0%</span>
                                </div>
                                <div class="grid justify-items-center">
                                    <!-- img Product -->
                                    <img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2023/10/18/iphone-11-black-2-up-vertical-us-en-screen-1.png"
                                        alt="">
                                    <!-- Name Product -->
                                    <p class="px-2">iPhone 11(64gb) - Chính Hãng VN/A</p>
                                    <!-- Price Product -->
                                    <span class="text-red-400 text-xl flex items-center">8,590,000 </span>
                                    </p></span>
                                    <a href="detailpage.html"
                                        class="bg-green-300 border rounded-lg px-4 py-2 my-2 text-white hover:text-red-400 hover:bg-white hover:border-red-200">Chi
                                        tiết sản phẩm
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-left">
                    <!-- account -->
                    <div class="account border rounded-lg my-2">
                        <div class="tittle bg-gray-400 px-2 py-3 rounded-t-lg">
                            <h1 class="uppercase">Tài khoản</h1>
                        </div>
                        <div class="form-account px-3 py-3">
                            <form action="#" method="post">
                                <span>Tên đăng nhập</span><br>
                                <input type="text" placeholder="Enter the username..."
                                    class="border rounded-lg px-2 py-2 w-full my-2"><br>
                                <span>Mật khẩu</span><br>
                                <input type="text" placeholder="Enter the password..."
                                    class="border rounded-lg px-2 py-2 w-full my-2">
                                <div class="check-box-password border rounded-lg px-2 py-1 my-2">
                                    <input type="checkbox" name="" id="">
                                    <span>Ghi nhớ tài khoản?</span>
                                </div>
                                <input type="submit" value="Đăng nhập" class="border rounded-lg px-4 py-2">
                            </form>
                        </div>
                    </div>

                    <!-- categories -->
                    <div class="categories border rounded-lg my-2">
                        <div class="tittle bg-gray-400 px-2 py-3 rounded-t-lg">
                            <h1 class="uppercase">Tài khoản</h1>
                        </div>
                        <div class="grid grid-rows-5 grid-flow-col gap-4">
                            <div class=" border-b-2 px-3 py-3">
                                <a href="">Đồng hồ đeo tay</a>
                            </div>
                        </div>
                        <div class="search bg-gray-400 px-2 py-3 rounded-b-lg">
                            <form action="" method="post">
                                <input type="search" placeholder="Search..." class="w-full border rounded-lg">
                            </form>
                        </div>
                    </div>

                    <!-- top-10 -->
                    <div class="top-10">
                        <div class="categories border rounded-lg my-2">
                            <div class="tittle bg-gray-400 px-2 py-3 rounded-t-lg">
                                <h1 class="uppercase">Top 10 yêu thích</h1>
                            </div>
                            <div class="grid grid-rows-5 grid-flow-col gap-4">
                                <div class=" border-b-2 px-5 py-3 flex">
                                    <a href="#"><img src="https://cdn.hoanghamobile.com/i/productlist/ts/Uploads/2023/10/18/iphone-11-black-2-up-vertical-us-en-screen-1.png" alt="" class="w-5 border rounded-lg"></a>
                                    <a href="#" class="px-2">Đồng hồ đeo tay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <section class="footer">
            <div class="border rounded-lg px-3 py-4 text-center bg-green-300">
                <span>Copyright © 2024</span>
            </div>
        </section>
    </section>
</body>

</html>