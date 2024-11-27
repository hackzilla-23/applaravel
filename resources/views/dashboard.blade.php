@extends('index')
@section('dashboard')
    <!--STRUCTURE MAIN-->
    <div class="bg-gray-100 shadow-sm relative overflow-hidden shadow-slate-500 rounded-2xl flex h-[90vh] mx-20 my-8">
        <!--main-left-->
        <div class="bg-white relative h-[100%] w-[15%]">
            <p class="font-semibold pl-12 text-xl py-5">MarketX</p>

            <div class="flex items-center gap-2 bg-gray-100 w-44 justify-center py-1 mx-auto 2xl:ml-6 rounded-lg">
                <figure class="w-7 h-7">
                    <img src="img/hero.png" alt="">
                </figure>
                <div class="pt-1">
                    <p class="font-semibold text-[11px]">
                    </p>
                    <p class="text-[9px]">Marketing</p>
                </div>
                <i class="fa-solid fa-sliders text-lg px-2 pb-1"></i>
            </div>

            <ul class="flex flex-col gap-7 pl-6 pt-8 pb-12 2xl:pt-16">
                <li class="text-sm">
                    <a href="#" class="flex items-center gap-4 hover:text-blue-600 duration-500">
                        <i class="fa-solid fa-compass"></i>
                        Dashboard
                    </a>
                </li>
                <li class="text-sm">
                    <a href="#" class="flex items-center text-blue-600 gap-4 hover:text-blue-600 duration-500">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Products
                    </a>
                </li>
                <li class="text-sm">
                    <a href="#" class="flex items-center gap-4 hover:text-blue-600 duration-500">
                        <i class="fa-solid fa-ticket"></i>
                        Orders
                    </a>
                </li>
                <li class="text-sm">
                    <a href="#" class="flex items-center gap-4 hover:text-blue-600 duration-500">
                        <i class="fa-solid fa-money-bill"></i>
                        Coupons
                    </a>
                </li>
                <li class="text-sm">
                    <a href="#" class="flex items-center gap-4 hover:text-blue-600 duration-500">
                        <i class="fa-solid fa-people-group"></i>
                        Customers
                    </a>
                </li>
                <li class="text-sm">
                    <a href="#" class="flex items-center gap-4 hover:text-blue-600 duration-500">
                        <i class="fa-solid fa-chart-pie"></i>
                        Marketing
                    </a>
                </li>
                <li class="text-sm">
                    <a href="#" class="flex items-center gap-4 hover:text-blue-600 duration-500">
                        <i class="fa-solid fa-message"></i>
                        Messages
                    </a>
                </li>
            </ul>

            <div class="bg-gray-100 mx-auto w-40 py-4 2xl:mt-0 rounded-lg">
                <div class="relative text-center">
                    <div class="w-2 h-2 rounded-full absolute left-[84px] -top-0.5 bg-yellow-400"></div>
                    <i class="fa-solid fa-message text-xl text-blue-600"></i>
                </div>
                <p class="text-[9px] py-1 font-medium text-center">Complete store settings to get <br> better analytics
                    to your shop</p>
                <ul class="flex gap-2 items-center justify-center">
                    <li><a href="#"
                            class="bg-blue-600 font-medium text-[11px] hover:bg-blue-700 duration-300 py-1 px-2 rounded-md text-white">COMPLETE</a>
                    </li>
                    <li><a href="#" class="text-[12px] text-gray-400 hover:opacity-[0.7] duration-300">LATER</a></li>
                </ul>
            </div>

            <div class="absolute bottom-8">
                <p class="text-[9px] pl-6 pt-6 pb-3 2xl:pt-0 2xl:pb-6 opacity-[0.5] font-medium">STORE PREFERENCES</p>

                <ul class="flex flex-col pb-3 gap-4 pl-6 2xl:pb-10">
                    <li>
                        <a href="#" class="flex items-center gap-4 text-xs hover:text-blue-600 duration-500">
                            <i class="fa-solid fa-gear"></i>
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-4 text-xs hover:text-blue-600 duration-500">
                            <i class="fa-solid fa-circle-info"></i>
                            Help
                        </a>
                    </li>
                </ul>

                <ul class="pl-6">
                    <a href="./deconnection" class="flex items-center gap-2 hover:text-blue-600 duration-500">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <p>log out</p>
                    </a>
                </ul>

                <p class="text-[10px] pl-6 pt-5 opacity-[0.5]"><i class="fa-regular fa-copyright"></i> 2024 MarketX</p>
            </div>

        </div>

        <!--main-right-->
        <div class="w-[85%] overflow-auto relative">
            <div class="flex items-center justify-between pt-6 px-7">
                <div class="bg-gray-200 pl-2.5 rounded-md overflow-hidden">
                    <i class="text-sm fa-solid fa-search"></i>
                    <input type="text" class="w-96 bg-gray-200 outline-none py-1.5 text-[12px]" placeholder="Search...">
                </div>

                <div>
                    <ul class="flex items-center gap-3">
                        <li class="bg-gray-200 hover:bg-gray-300 duration-300 px-2 py-0.5 rounded-md"><a href="#"><i
                                    class="fa-solid fa-ellipsis"></i></a></li>
                        <li class="bg-gray-200 hover:bg-gray-300 duration-300 px-2 py-0.5 rounded-md"><a href="#"><i
                                    class="fa-solid fa-bell"></i></a></li>
                        <li
                            class="rounded-md hover:bg-gray-300 duration-300 overflow-hidden flex items-center gap-1 bg-gray-200 py-0.5 pr-1">
                            <img class="w-6 h-6" src="img/hero.png" alt="">
                            <p class="text-[10px] font-semibold">
                            </p>
                            <i class="text-[10px] fa-solid fa-chevron-down"></i>
                        </li>
                        <li class="bg-gray-200 px-2 py-0.5 rounded-md hover:bg-gray-300 duration-300"><a href="#"><i
                                    class="fa-solid fa-ellipsis"></i></a></li>
                    </ul>
                </div>
            </div>

            <p class="pl-7 pt-6 font-light text-xl">Products</p>

            <div class="pt-8 flex items-center justify-between px-7">
                <div class="py-2 px-2 w-[130px] rounded-md bg-blue-600 hover:bg-blue-700 duration-500">
                    <a href="./viewAddProduct" class="flex items-center gap-2">
                        <i class="bg-white text-blue-600 px-1 py-0.5 rounded-sm text-xs fa-solid fa-plus"></i>
                        <p class="font-medium text-xs text-white">NEW PRODUCT</p>
                    </a>
                </div>

                <div>
                    <ul class="flex items-center gap-3">
                        <li class="w-52">
                            <div class="bg-gray-200 pl-2.5 rounded-md overflow-hidden">
                                <i class="text-sm fa-solid fa-search"></i>
                                <input type="text" class="bg-gray-200 outline-none py-2 px-1 text-[12px]"
                                    placeholder="Search...">
                            </div>
                        </li>

                        <select name="trie" id="trie"
                            class="text-sm w-24 hover:bg-gray-200 duration-500 rounded-md bg-white px-1 py-2 outline-none">
                            <option value="Sort by">Sort by</option>
                            <option value="A-Z">A-Z</option>
                            <option value="Z-A">Z-A</option>
                        </select>

                        <li
                            class="px-2 py-2 rounded-md flex items-center bg-white hover:bg-gray-200 duration-500 w-[150px]">
                            <a href="#" class="flex gap-4 items-center">
                                <p class="text-[13px]">Collection Type</p>
                                <i class="fa-solid text-sm fa-list"></i>
                            </a>
                        </li>

                        <li class="px-2 py-2 rounded-md bg-white hover:bg-gray-200 duration-500 w-[130px]">
                            <a href="#" class="flex gap-4 items-center">
                                <p class="text-[13px]">Price Range</p>
                                <i class="fa-solid text-sm fa-sliders"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col pb-2.5">
                <div>
                    <ul class="flex items-center px-10 pt-10">
                        <li><input type="checkbox" name="box" id="box"></li>
                        <li class="pl-6">
                            <p class="text-[11px] font-medium opacity-[0.6]">PRODUCT DETAILS</p>
                        </li>
                        <li class="pl-60 2xl:pl-[280px]">
                            <p class="text-[11px] font-medium opacity-[0.6]">CATEGORY</p>
                        </li>
                        <li class="pl-[88px] 2xl:pl-[100px]">
                            <p class="text-[11px] font-medium opacity-[0.6]">OPTIONS</p>
                        </li>
                        <li class="pl-[70px] 2xl:pl-[100px]">
                            <p class="text-[11px] font-medium opacity-[0.6]">PRICE</p>
                        </li>
                        <li class="pl-12 2xl:pl-[80px]">
                            <p class="text-[11px] font-medium opacity-[0.6]">QTE</p>
                        </li>
                        <li class="pl-7 2xl:pl-[60px]">
                            <p class="text-[11px] font-medium opacity-[0.6]">ID</p>
                        </li>
                        <li class="pl-20 2xl:pl-[90px]">
                            <p class="text-[11px] font-medium opacity-[0.6]">RATE</p>
                        </li>
                        <li class="pl-24 2xl:pl-40">
                            <p class="text-[11px] font-medium opacity-[0.6]">ACTIONS</p>
                        </li>
                    </ul>
                </div>

                <div class="bg-white py-4 px-4 mx-6 rounded-lg mt-2.5">
                    <ul class="flex items-center">
                        <li><input type="checkbox" name="box" id="box"></li>

                        <li class="flex gap-5 items-center pl-6">
                            <img class="w-14 h-14 shadow-md shadow-slate-300" src="img/portfolio/1.jpg" alt="">
                            <div>
                                <p class="font-semibold text-sm">Wood Chair Dark Brown</p>
                                <p class="text-xs pt-1 opacity-[0.6]">woodyFurniture Offer new products...</p>
                            </div>
                        </li>

                        <li class="px-10 2xl:pl-[80px]">
                            <ul class="flex items-center gap-1">
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Fournitures</p>
                                </li>
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Chair</p>
                                </li>
                            </ul>
                        </li>

                        <li class="pr-10">
                            <ul class="flex items-center gap-1">
                                <li class="w-4 h-4 bg-red-500 rounded-full"></li>
                                <li class="w-4 h-4 bg-green-800 rounded-full"></li>
                                <li class="w-4 h-4 bg-pink-700 rounded-full"></li>
                                <li class="w-4 h-4 bg-purple-900 rounded-full"></li>
                            </ul>
                        </li>

                        <li class="pr-8 2xl:pl-10">
                            <p class="font-semibold text-sm">1000$</p>
                        </li>

                        <li class="pr-8 2xl:pl-9">
                            <p class="font-semibold text-sm">30</p>
                        </li>

                        <li class="pr-8 2xl:pl-6">
                            <p class="font-medium text-sm">UY3749</p>
                        </li>

                        <li class="flex items-center pb-1 2xl:pl-5">
                            <p><i class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-regular fa-star text-[10px]"></i></p>
                            <p class="text-[10px] pt-1.5 pl-1">4.2(182)</p>
                        </li>

                        <li class="pl-8 2xl:pl-20">
                            <ul class="flex items-center gap-5 2xl:gap-8">
                                <li><a href="./edit.php"
                                        class="bg-gray-200 hover:bg-gray-300 duration-500 px-3.5 py-1.5 font-medium text-sm rounded-md">Edit</a>
                                </li>
                                <li class="bg-gray-100 px-1.5 rounded-md hover:bg-gray-200 duration-300 w-6"><a
                                        href="./controller/delete.php"><i
                                            class="fa-solid text-red-500 fa-trash-can text-xs"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="bg-white py-4 px-4 mx-6 rounded-lg mt-2.5">
                    <ul class="flex items-center">
                        <li><input type="checkbox" name="box" id="box"></li>

                        <li class="flex gap-5 items-center pl-6">
                            <img class="w-14 h-14 shadow-md shadow-slate-300" src="img/portfolio/2.jpg" alt="">
                            <div>
                                <p class="font-semibold text-sm">Wood Chair Dark Brown</p>
                                <p class="text-xs pt-1 opacity-[0.6]">woodyFurniture Offer new products...</p>
                            </div>
                        </li>

                        <li class="px-10 2xl:pl-[80px]">
                            <ul class="flex items-center gap-1">
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Fournitures</p>
                                </li>
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Chair</p>
                                </li>
                            </ul>
                        </li>

                        <li class="pr-10">
                            <ul class="flex items-center gap-1">
                                <li class="w-4 h-4 bg-red-500 rounded-full"></li>
                                <li class="w-4 h-4 bg-green-800 rounded-full"></li>
                                <li class="w-4 h-4 bg-pink-700 rounded-full"></li>
                                <li class="w-4 h-4 bg-purple-900 rounded-full"></li>
                            </ul>
                        </li>

                        <li class="pr-8 2xl:pl-10">
                            <p class="font-semibold text-sm">1000$</p>
                        </li>

                        <li class="pr-8 2xl:pl-9">
                            <p class="font-semibold text-sm">30</p>
                        </li>

                        <li class="pr-8 2xl:pl-6">
                            <p class="font-medium text-sm">UY3749</p>
                        </li>

                        <li class="flex items-center pb-1 2xl:pl-5">
                            <p><i class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-regular fa-star text-[10px]"></i></p>
                            <p class="text-[10px] pt-1.5 pl-1">4.2(182)</p>
                        </li>

                        <li class="pl-8 2xl:pl-20">
                            <ul class="flex items-center gap-5 2xl:gap-8">
                                <li><a href="./edit.php"
                                        class="bg-gray-200 hover:bg-gray-300 duration-500 px-3.5 py-1.5 font-medium text-sm rounded-md">Edit</a>
                                </li>
                                <li class="bg-gray-100 px-1.5 rounded-md hover:bg-gray-200 duration-300 w-6"><a
                                        href="./controller/delete.php"><i
                                            class="fa-solid text-red-500 fa-trash-can text-xs"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="bg-white py-4 px-4 mx-6 rounded-lg mt-2.5">
                    <ul class="flex items-center">
                        <li><input type="checkbox" name="box" id="box"></li>

                        <li class="flex gap-5 items-center pl-6">
                            <img class="w-14 h-14 shadow-md shadow-slate-300" src="img/portfolio/3.jpg" alt="">
                            <div>
                                <p class="font-semibold text-sm">Wood Chair Dark Brown</p>
                                <p class="text-xs pt-1 opacity-[0.6]">woodyFurniture Offer new products...</p>
                            </div>
                        </li>

                        <li class="px-10 2xl:pl-[80px]">
                            <ul class="flex items-center gap-1">
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Fournitures</p>
                                </li>
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Chair</p>
                                </li>
                            </ul>
                        </li>

                        <li class="pr-10">
                            <ul class="flex items-center gap-1">
                                <li class="w-4 h-4 bg-red-500 rounded-full"></li>
                                <li class="w-4 h-4 bg-green-800 rounded-full"></li>
                                <li class="w-4 h-4 bg-pink-700 rounded-full"></li>
                                <li class="w-4 h-4 bg-purple-900 rounded-full"></li>
                            </ul>
                        </li>

                        <li class="pr-8 2xl:pl-10">
                            <p class="font-semibold text-sm">1000$</p>
                        </li>

                        <li class="pr-8 2xl:pl-9">
                            <p class="font-semibold text-sm">30</p>
                        </li>

                        <li class="pr-8 2xl:pl-6">
                            <p class="font-medium text-sm">UY3749</p>
                        </li>

                        <li class="flex items-center pb-1 2xl:pl-5">
                            <p><i class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-regular fa-star text-[10px]"></i></p>
                            <p class="text-[10px] pt-1.5 pl-1">4.2(182)</p>
                        </li>

                        <li class="pl-8 2xl:pl-20">
                            <ul class="flex items-center gap-5 2xl:gap-8">
                                <li><a href="./edit.php"
                                        class="bg-gray-200 hover:bg-gray-300 duration-500 px-3.5 py-1.5 font-medium text-sm rounded-md">Edit</a>
                                </li>
                                <li class="bg-gray-100 px-1.5 rounded-md hover:bg-gray-200 duration-300 w-6"><a
                                        href="./controller/delete.php"><i
                                            class="fa-solid text-red-500 fa-trash-can text-xs"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="bg-white py-4 px-4 mx-6 rounded-lg mt-2.5">
                    <ul class="flex items-center">
                        <li><input type="checkbox" name="box" id="box"></li>

                        <li class="flex gap-5 items-center pl-6">
                            <img class="w-14 h-14 shadow-md shadow-slate-300" src="img/portfolio/4.jpg" alt="">
                            <div>
                                <p class="font-semibold text-sm">Wood Chair Dark Brown</p>
                                <p class="text-xs pt-1 opacity-[0.6]">woodyFurniture Offer new products...</p>
                            </div>
                        </li>

                        <li class="px-10 2xl:pl-[80px]">
                            <ul class="flex items-center gap-1">
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Fournitures</p>
                                </li>
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Chair</p>
                                </li>
                            </ul>
                        </li>

                        <li class="pr-10">
                            <ul class="flex items-center gap-1">
                                <li class="w-4 h-4 bg-red-500 rounded-full"></li>
                                <li class="w-4 h-4 bg-green-800 rounded-full"></li>
                                <li class="w-4 h-4 bg-pink-700 rounded-full"></li>
                                <li class="w-4 h-4 bg-purple-900 rounded-full"></li>
                            </ul>
                        </li>

                        <li class="pr-8 2xl:pl-10">
                            <p class="font-semibold text-sm">1000$</p>
                        </li>

                        <li class="pr-8 2xl:pl-9">
                            <p class="font-semibold text-sm">30</p>
                        </li>

                        <li class="pr-8 2xl:pl-6">
                            <p class="font-medium text-sm">UY3749</p>
                        </li>

                        <li class="flex items-center pb-1 2xl:pl-5">
                            <p><i class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-regular fa-star text-[10px]"></i></p>
                            <p class="text-[10px] pt-1.5 pl-1">4.2(182)</p>
                        </li>

                        <li class="pl-8 2xl:pl-20">
                            <ul class="flex items-center gap-5 2xl:gap-8">
                                <li><a href="./edit.php"
                                        class="bg-gray-200 hover:bg-gray-300 duration-500 px-3.5 py-1.5 font-medium text-sm rounded-md">Edit</a>
                                </li>
                                <li class="bg-gray-100 px-1.5 rounded-md hover:bg-gray-200 duration-300 w-6"><a
                                        href="./controller/delete.php"><i
                                            class="fa-solid text-red-500 fa-trash-can text-xs"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="bg-white py-4 px-4 mx-6 rounded-lg mt-2.5">
                    <ul class="flex items-center">
                        <li><input type="checkbox" name="box" id="box"></li>

                        <li class="flex gap-5 items-center pl-6">
                            <img class="w-14 h-14 shadow-md shadow-slate-300" src="img/portfolio/5.jpg" alt="">
                            <div>
                                <p class="font-semibold text-sm">Wood Chair Dark Brown</p>
                                <p class="text-xs pt-1 opacity-[0.6]">woodyFurniture Offer new products...</p>
                            </div>
                        </li>

                        <li class="px-10 2xl:pl-[80px]">
                            <ul class="flex items-center gap-1">
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Fournitures</p>
                                </li>
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Chair</p>
                                </li>
                            </ul>
                        </li>

                        <li class="pr-10">
                            <ul class="flex items-center gap-1">
                                <li class="w-4 h-4 bg-red-500 rounded-full"></li>
                                <li class="w-4 h-4 bg-green-800 rounded-full"></li>
                                <li class="w-4 h-4 bg-pink-700 rounded-full"></li>
                                <li class="w-4 h-4 bg-purple-900 rounded-full"></li>
                            </ul>
                        </li>

                        <li class="pr-8 2xl:pl-10">
                            <p class="font-semibold text-sm">1000$</p>
                        </li>

                        <li class="pr-8 2xl:pl-9">
                            <p class="font-semibold text-sm">30</p>
                        </li>

                        <li class="pr-8 2xl:pl-6">
                            <p class="font-medium text-sm">UY3749</p>
                        </li>

                        <li class="flex items-center pb-1 2xl:pl-5">
                            <p><i class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-regular fa-star text-[10px]"></i></p>
                            <p class="text-[10px] pt-1.5 pl-1">4.2(182)</p>
                        </li>

                        <li class="pl-8 2xl:pl-20">
                            <ul class="flex items-center gap-5 2xl:gap-8">
                                <li><a href="./edit.php"
                                        class="bg-gray-200 hover:bg-gray-300 duration-500 px-3.5 py-1.5 font-medium text-sm rounded-md">Edit</a>
                                </li>
                                <li class="bg-gray-100 px-1.5 rounded-md hover:bg-gray-200 duration-300 w-6"><a
                                        href="./controller/delete.php"><i
                                            class="fa-solid text-red-500 fa-trash-can text-xs"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="bg-white py-4 px-4 mx-6 rounded-lg mt-2.5">
                    <ul class="flex items-center">
                        <li><input type="checkbox" name="box" id="box"></li>

                        <li class="flex gap-5 items-center pl-6">
                            <img class="w-14 h-14 shadow-md shadow-slate-300" src="img/portfolio/6.jpg" alt="">
                            <div>
                                <p class="font-semibold text-sm">Wood Chair Dark Brown</p>
                                <p class="text-xs pt-1 opacity-[0.6]">woodyFurniture Offer new products...</p>
                            </div>
                        </li>

                        <li class="px-10 2xl:pl-[80px]">
                            <ul class="flex items-center gap-1">
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Fournitures</p>
                                </li>
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Chair</p>
                                </li>
                            </ul>
                        </li>

                        <li class="pr-10">
                            <ul class="flex items-center gap-1">
                                <li class="w-4 h-4 bg-red-500 rounded-full"></li>
                                <li class="w-4 h-4 bg-green-800 rounded-full"></li>
                                <li class="w-4 h-4 bg-pink-700 rounded-full"></li>
                                <li class="w-4 h-4 bg-purple-900 rounded-full"></li>
                            </ul>
                        </li>

                        <li class="pr-8 2xl:pl-10">
                            <p class="font-semibold text-sm">1000$</p>
                        </li>

                        <li class="pr-8 2xl:pl-9">
                            <p class="font-semibold text-sm">30</p>
                        </li>

                        <li class="pr-8 2xl:pl-6">
                            <p class="font-medium text-sm">UY3749</p>
                        </li>

                        <li class="flex items-center pb-1 2xl:pl-5">
                            <p><i class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-regular fa-star text-[10px]"></i></p>
                            <p class="text-[10px] pt-1.5 pl-1">4.2(182)</p>
                        </li>

                        <li class="pl-8 2xl:pl-20">
                            <ul class="flex items-center gap-5 2xl:gap-8">
                                <li><a href="./edit.php"
                                        class="bg-gray-200 hover:bg-gray-300 duration-500 px-3.5 py-1.5 font-medium text-sm rounded-md">Edit</a>
                                </li>
                                <li class="bg-gray-100 px-1.5 rounded-md hover:bg-gray-200 duration-300 w-6"><a
                                        href="./controller/delete.php"><i
                                            class="fa-solid text-red-500 fa-trash-can text-xs"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="bg-white py-4 px-4 mx-6 rounded-lg mt-2.5">
                    <ul class="flex items-center">
                        <li><input type="checkbox" name="box" id="box"></li>

                        <li class="flex gap-5 items-center pl-6">
                            <img class="w-14 h-14 shadow-md shadow-slate-300" src="img/portfolio/3.jpg" alt="">
                            <div>
                                <p class="font-semibold text-sm">Wood Chair Dark Brown</p>
                                <p class="text-xs pt-1 opacity-[0.6]">woodyFurniture Offer new products...</p>
                            </div>
                        </li>

                        <li class="px-10 2xl:pl-[80px]">
                            <ul class="flex items-center gap-1">
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Fournitures</p>
                                </li>
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Chair</p>
                                </li>
                            </ul>
                        </li>

                        <li class="pr-10">
                            <ul class="flex items-center gap-1">
                                <li class="w-4 h-4 bg-red-500 rounded-full"></li>
                                <li class="w-4 h-4 bg-green-800 rounded-full"></li>
                                <li class="w-4 h-4 bg-pink-700 rounded-full"></li>
                                <li class="w-4 h-4 bg-purple-900 rounded-full"></li>
                            </ul>
                        </li>

                        <li class="pr-8 2xl:pl-10">
                            <p class="font-semibold text-sm">1000$</p>
                        </li>

                        <li class="pr-8 2xl:pl-9">
                            <p class="font-semibold text-sm">30</p>
                        </li>

                        <li class="pr-8 2xl:pl-6">
                            <p class="font-medium text-sm">UY3749</p>
                        </li>

                        <li class="flex items-center pb-1 2xl:pl-5">
                            <p><i class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-regular fa-star text-[10px]"></i></p>
                            <p class="text-[10px] pt-1.5 pl-1">4.2(182)</p>
                        </li>

                        <li class="pl-8 2xl:pl-20">
                            <ul class="flex items-center gap-5 2xl:gap-8">
                                <li><a href="./edit.php"
                                        class="bg-gray-200 hover:bg-gray-300 duration-500 px-3.5 py-1.5 font-medium text-sm rounded-md">Edit</a>
                                </li>
                                <li class="bg-gray-100 px-1.5 rounded-md hover:bg-gray-200 duration-300 w-6"><a
                                        href="./controller/delete.php"><i
                                            class="fa-solid text-red-500 fa-trash-can text-xs"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="bg-white py-4 px-4 mx-6 rounded-lg mt-2.5">
                    <ul class="flex items-center">
                        <li><input type="checkbox" name="box" id="box"></li>

                        <li class="flex gap-5 items-center pl-6">
                            <img class="w-14 h-14 shadow-md shadow-slate-300" src="img/portfolio/5.jpg" alt="">
                            <div>
                                <p class="font-semibold text-sm">Wood Chair Dark Brown</p>
                                <p class="text-xs pt-1 opacity-[0.6]">woodyFurniture Offer new products...</p>
                            </div>
                        </li>

                        <li class="px-10 2xl:pl-[80px]">
                            <ul class="flex items-center gap-1">
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Fournitures</p>
                                </li>
                                <li class="bg-gray-200 p-1 rounded-md text-[11px]">
                                    <p>Chair</p>
                                </li>
                            </ul>
                        </li>

                        <li class="pr-10">
                            <ul class="flex items-center gap-1">
                                <li class="w-4 h-4 bg-red-500 rounded-full"></li>
                                <li class="w-4 h-4 bg-green-800 rounded-full"></li>
                                <li class="w-4 h-4 bg-pink-700 rounded-full"></li>
                                <li class="w-4 h-4 bg-purple-900 rounded-full"></li>
                            </ul>
                        </li>

                        <li class="pr-8 2xl:pl-10">
                            <p class="font-semibold text-sm">1000$</p>
                        </li>

                        <li class="pr-8 2xl:pl-9">
                            <p class="font-semibold text-sm">30</p>
                        </li>

                        <li class="pr-8 2xl:pl-6">
                            <p class="font-medium text-sm">UY3749</p>
                        </li>

                        <li class="flex items-center pb-1 2xl:pl-5">
                            <p><i class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-solid fa-star text-yellow-500 text-[10px]"></i><i
                                    class="fa-regular fa-star text-[10px]"></i></p>
                            <p class="text-[10px] pt-1.5 pl-1">4.2(182)</p>
                        </li>

                        <li class="pl-8 2xl:pl-20">
                            <ul class="flex items-center gap-5 2xl:gap-8">
                                <li><a href="./edit.php"
                                        class="bg-gray-200 hover:bg-gray-300 duration-500 px-3.5 py-1.5 font-medium text-sm rounded-md">Edit</a>
                                </li>
                                <li class="bg-gray-100 px-1.5 rounded-md hover:bg-gray-200 duration-300 w-6"><a
                                        href="./controller/delete.php"><i
                                            class="fa-solid fa-trash-can text-red-500 text-xs"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection
