@extends('dashboard.dashboard')

@section('main')
    <div class="mt-5">
        {{-- haeder --}}
        <div class="flex items-center justify-between">
            <div
                class="flex shadow-first hover:shadow-none duration-300 gap-2 items-center pl-6 overflow-hidden bg-white rounded-md">
                <i class="fa-solid fa-search"></i>
                <input type="text" placeholder="Search for..." class="text-sm py-2 w-80 outline-none px-3">
            </div>

            <div class="flex items-center gap-4">
                <div
                    class="bg-white rounded-md shadow-first hover:shadow-none duration-300 px-3.5 py-2 flex justify-center items-center">
                    <a href="#">
                        <i class="fa-solid fa-bell"></i>
                    </a>
                </div>

                <div
                    class="flex shadow-first hover:shadow-none duration-300 items-center gap-1.5 bg-white px-1.5 py-2 rounded-md">
                    <img src="{{ asset('img/profile-2.jpg') }}" class="rounded-md w-[25px] h-[25px] object-cover"
                        alt="">
                    <div class="flex items-center gap-6">
                        <div>
                            <p class="text-xs font-semibold">{{ auth()->guard('personnes')->user()->prenom }}</p>
                            <p class="text-[8px]">Admin Account</p>
                        </div>
                        <a href="#"><i class="fa-solid fa-caret-down"></i></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- menu  --}}
        <div class="flex bg-white rounded-md mt-8 mb-4 items-center justify-between py-2 px-6">
            <div class="flex items-center gap-2.5">
                <div class="flex items-center gap-4 border-[1.5px] px-2 rounded-[5px] py-0.5 border-gray-400">
                    <p class="text-sm">Category</p>
                    <i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="flex items-center gap-4 border-[1.5px] px-2 rounded-[5px] py-0.5 border-gray-400">
                    <p class="text-sm">Status</p>
                    <i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="flex items-center gap-4 border-[1.5px] px-2 rounded-[5px] py-0.5 border-gray-400">
                    <p class="text-sm">Price</p>
                    <i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="flex items-center gap-4 border-[1.5px] px-2 rounded-[5px] py-0.5 border-gray-400">
                    <p class="text-sm">Date</p>
                    <i class="fa-solid fa-caret-down"></i>
                </div>
            </div>

            <a href="#" id="addProductBtn"
                class="flex items-center gap-2 text-white bg-[#FF0060] px-2 py-1 rounded-md shadow-first hover:shadow-none duration-300 ">
                <i class="fa-brands fa-plus text-sm"></i>
                <p class="text-sm">Add Product</p>
            </a>
        </div>

        {{-- products  --}}
        <div class="bg-white relative h-[75vh] rounded-[16px] shadow-first hover:shadow-none duration-300 px-6">
            <p class="pt-3">Products</p>

            <div class="">
                <ul class="grid grid-cols-5 items-center rounded-b-lg bg-[#FF0060] py-3 mt-3 pl-8">
                    <li class="col-span-1 ">
                        <p class="text-sm text-white">Product Name</p>
                    </li>
                    {{-- <li>
                        <p class="text-sm text-white">Category</p>
                    </li> --}}
                    <li class="col-span-1 ">
                        <p class="text-sm text-white">Price</p>
                    </li>
                    <li class="col-span-1 ">
                        <p class="text-sm text-white">Quantite</p>
                    </li>
                    {{-- <li>
                        <p class="text-sm text-white">Sold</p>
                    </li> --}}
                    <li class="col-span-1 ">
                        <p class="text-sm text-white">Description</p>
                    </li>
                    <li class="col-span-1 ">
                        <p class="text-sm text-white">Actions</p>
                    </li>
                </ul>
            </div>

            {{-- formulaire d'ajout  --}}
            <form id="addProductModal"
                class="fixed top-12 left-[500px] flex z-50 mx-auto w-96 -translate-y-[800px] transition-all duration-700 ease-out justify-center items-center bg-[#1B9C85]"
                action="{{ route('ajout_product') }}" method="POST">
                @csrf
                <div>
                    <div>
                        <ul class="flex justify-between items-center py-7">
                            <li class="text-2xl font-bold">Big Bazzar</li>
                            <button type="button" id="closeModalBtn"
                                class="px-1.5 text-sm py-0.5 bg-[363949] font-bold rounded-lg shadow-md shadow-black hover:shadow-none duration-300">
                                close
                            </button>
                        </ul>
                    </div>

                    <p class="text-center font-medium text-xl pb-8">ADD PRODUCT</p>

                    <div class="flex flex-col gap-4 mx-auto">
                        <div>
                            <label for="nom" class="font-bold">Product Name</label><br>
                            <input type="text" name="nom" class="rounded-lg mt-2 py-2.5 pl-5 outline-none w-[315px]">
                        </div>
                        <div>
                            <label for="prix" class="font-bold">Price</label><br>
                            <input type="number" name="prix" class="rounded-lg mt-2 py-2.5 pl-5 outline-none w-[315px]">

                        </div>
                        <div>
                            <label for="quantite" class="font-bold">Quantity</label><br>
                            <input type="number" name="quantite"
                                class="rounded-lg  mt-2 py-2.5 pl-5 outline-none w-[315px]">
                        </div>
                        <div>
                            <label for="description" class="font-bold">Description</label><br>
                            <textarea type="text" rows="4" name="description" class="rounded-lg mt-2 py-2.5 pl-5 outline-none w-[315px]"></textarea>
                        </div>
                    </div>

                    <button
                        class="mb-8 bg-[363949] mt-8 py-2.5 w-[310px] rounded-lg font-bold shadow-md shadow-black hover:shadow-none duration-300"
                        type="submit">Save</button>
                </div>
            </form>

            {{-- lists  --}}
            <div class="flex flex-col gap-1">
                @foreach ($allproducts as $value)
                    <ul
                        class="grid grid-cols-5  gap-32 items-center hover:bg-gray-100 duration-300 rounded-md justify-center px-6 py-2 border-gray-200 border-2">
                        <li class="col-span-1 grid items-center justify-center">
                            <p class="text-xs">{{ $value->nom }}</p>
                        </li>

                        {{-- <li>
                            <p class="text-xs">Men, Watch</p>
                        </li> --}}

                        <li class="col-span-1 grid items-center justify-center">
                            <p class="text-xs">{{ $value->prix }}</p>
                        </li>

                        <li class="col-span-1 grid items-center justify-center">
                            <p class="text-xs">{{ $value->quantite }}</p>
                        </li>

                        {{-- <li>
                            <p class="text-xs">66</p>
                        </li> --}}

                        <li class="col-span-1 grid items-center justify-center">
                            <p class="text-xs">{{ $value->description }}</p>
                        </li>

                        <li class="col-span-1 grid items-center justify-center">
                            <div class="flex items-center gap-2 ">
                                <div id="editbtn"
                                    class="bg-gray-100 px-2 py-1 flex items-center justify-center rounded-md shadow-first hover:shadow-none duration-300">
                                    <a href="#">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                </div>

                                {{-- formulaire edit  --}}
                                <form id="editProductModal"
                                    class="fixed top-12 left-[500px] hidden z-50 mx-auto w-96 -translate-y-[800px] transition-all duration-700 ease-out justify-center items-center bg-[#1B9C85]"
                                    action="#" method="POST">
                                    @csrf
                                    <div>
                                        <div>
                                            <ul class="flex justify-between items-center py-7">
                                                <li class="text-2xl font-bold">Big Bazzar</li>
                                                <button type="button" id="closeEditBtn"
                                                    class="px-1.5 text-sm py-0.5 bg-[363949] font-bold rounded-lg shadow-md shadow-black hover:shadow-none duration-300">
                                                    close
                                                </button>
                                            </ul>
                                        </div>

                                        <p class="text-center font-medium text-xl pb-8">EDIT PRODUCT</p>

                                        <div class="flex flex-col gap-4 mx-auto">
                                            <div>
                                                <label for="nom" class="font-bold">Product Name</label><br>
                                                <input type="text" name="nom"
                                                    class="rounded-lg mt-2 py-2.5 pl-5 outline-none w-[315px]">
                                            </div>
                                            <div>
                                                <label for="prix" class="font-bold">Price</label><br>
                                                <input type="number" name="prix"
                                                    class="rounded-lg mt-2 py-2.5 pl-5 outline-none w-[315px]">

                                            </div>
                                            <div>
                                                <label for="quantite" class="font-bold">Quantity</label><br>
                                                <input type="number" name="quq=antite"
                                                    class="rounded-lg  mt-2 py-2.5 pl-5 outline-none w-[315px]">
                                            </div>
                                            <div>
                                                <label for="description" class="font-bold">Description</label><br>
                                                <textarea type="text" rows="4" name="description"
                                                    class="rounded-lg mt-2 py-2.5 pl-5 outline-none w-[315px]"></textarea>
                                            </div>
                                        </div>

                                        <button
                                            class="mb-8 bg-[363949] mt-8 py-2.5 w-[310px] rounded-lg font-bold shadow-md shadow-black hover:shadow-none duration-300"
                                            type="submit">Save</button>
                                    </div>
                                </form>

                                <div
                                    class="bg-gray-100 px-2 py-1 flex items-center justify-center rounded-md shadow-first hover:shadow-none duration-300">
                                    <form action="{{ route('delete_product') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $value->id }}">
                                        <button type="submit" class="text-[#FF0060]"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    {{-- <a href="#" class="text-[#FF0060]">
                                        <i class="fa-solid fa-trash"></i>
                                    </a> --}}
                                </div>
                            </div>
                        </li>
                    </ul>
                @endforeach
            </div>

            {{-- pagination  --}}
            <ul class="flex  gap-[600px] absolute bottom-0 py-3.5">
                <div class="flex px-2 py-1 rounded-md items-center gap-4 border border-gray-400">
                    <p class="text-sm">Show: 8</p>
                    <i class="fa-solid fa-caret-down"></i>
                </div>

                <div class="flex items-center gap-2">
                    <li>
                        <a href="#"><i
                                class="fa-solid fa-caret-left flex px-3 py-2 hover:bg-[#FF0060] duration-300 hover:text-white rounded-md items-center gap-4 border border-gray-400"></i></a>
                    </li>

                    <li>
                        <a href="#"
                            class="flex px-3 py-1 bg-[#FF0060] text-white rounded-md items-center gap-4 border border-gray-400">1</a>
                    </li>

                    <li>
                        <a href="#"
                            class="flex px-3 py-1 hover:bg-[#FF0060] hover:text-white duration-300 rounded-md items-center gap-4 border border-gray-400">2</a>
                    </li>

                    <li>
                        <a href="#"
                            class="flex px-3 py-1 hover:bg-[#FF0060] hover:text-white duration-300 rounded-md items-center gap-4 border border-gray-400">3</a>
                    </li>

                    <li>
                        <a href="#">
                            <i
                                class="fa-solid fa-caret-right flex px-3 py-2 hover:bg-[#FF0060]  duration-300 hover:text-white rounded-md items-center gap-4 border border-gray-400"></i>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
@endsection
