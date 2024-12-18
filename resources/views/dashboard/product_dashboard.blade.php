@extends('dashboard.dashboard')

<link rel="stylesheet" href="{{ asset('login.css') }}">

@section('main')
    <div class="mt-5 w-[79vw]">
        {{-- haeder --}}
        <div class="flex items-center justify-between">
            <div
                class="flex shadow-first hover:shadow-none duration-300 gap-2 items-center pl-6 overflow-hidden bg-white rounded-md">
                <i class="fa-solid fa-search"></i>
                <input type="text" placeholder="Search for..." class="text-sm py-2 w-80 outline-none px-3">
            </div>

            <div class="flex flex-row gap-4">
                <div
                    class="bg-white rounded-md shadow-first hover:shadow-none duration-300 px-3.5 py-2 flex justify-center items-center">
                    <a href="#">
                        <i class="fa-solid fa-bell"></i>
                    </a>
                </div>
                <div class="relative font-[sans-serif] w-max mx-auto">
                    <button type="button" id="dropdownToggle"
                        class="flex shadow-first hover:shadow-none duration-300 items-center gap-1.5 bg-white px-1.5 py-2 rounded-md">
                        {{-- <img src="{{ url('storage/personne_images/'.auth()->guard('personnes')->user()->images)}}" class="rounded-md w-[25px] h-[25px] object-cover"
                            alt=""> --}}
                        <img src="{{ asset('img/souop.jpg') }}" class="rounded-md w-[25px] h-[25px] object-cover"
                            alt="">
                        <div class="flex items-center gap-6">
                            <div>
                                {{-- <p class="text-xs font-semibold">{{ auth()->guard('personnes')->user()->prenom }}</p>
                                <p class="text-[8px]">Admin Account</p> --}}


                                @if(Auth::guard('admins')->check())
                                    <p class="text-xs font-semibold">{{ auth()->guard('admins')->user()->prenom }}</p>
                                    <p class="text-[8px]">Admin Account</p>
                                
                                @elseif(Auth::guard('personnes')->check())
                                    <p class="text-xs font-semibold">{{ auth()->guard('personnes')->user()->prenom }}</p>
                                    <p class="text-[8px]">User Account</p>

                                @endif
                                {{-- <p class="text-[8px]">{{ $personne->role[0]->nom_role }}</p> --}}
                            </div>
                            <a href="#"><i class="fa-solid fa-caret-down"></i></a>
                        </div>
                    </button>

                    <ul id="dropdownMenu"
                        class='absolute hidden shadow-[0_8px_19px_-7px_rgba(6,81,237,0.2)] bg-white py-2 z-[1000] min-w-full mt-1 rounded divide-y max-h-96 overflow-auto'>
                        <li
                            class="'py-3 px-5 flex items-center gap-2 hover:bg-blue-100 text-gray-800 text-sm cursor-pointer">
                            <img src="{{ asset('img/logout_24dp_5F6368.svg') }}" alt="">
                            <a href="{{ route('logout_personne') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>

            <script>
                let dropdownToggle = document.getElementById('dropdownToggle');
                let dropdownMenu = document.getElementById('dropdownMenu');

                function handleClick() {
                    if (dropdownMenu.className.includes('block')) {
                        dropdownMenu.classList.add('hidden')
                        dropdownMenu.classList.remove('block')
                    } else {
                        dropdownMenu.classList.add('block')
                        dropdownMenu.classList.remove('hidden')
                    }
                }

                dropdownToggle.addEventListener('click', handleClick);
            </script>
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

            <a href="#"
                class="flex addProductBtn items-center gap-2 text-white bg-[#FF0060] px-2 py-1 rounded-md shadow-first hover:shadow-none duration-300 ">
                <i class="fa-brands fa-plus text-sm"></i>
                <p class="text-sm">Add Product</p>
            </a>
        </div>

        {{-- products  --}}
        <div
            class="bg-white relative h-[75vh] overflow-auto p-6 rounded-[16px] shadow-first hover:shadow-none duration-300 px-6">
            <p class="pt-3">Products</p>

            <div>
                <ul
                    class="grid grid-cols-5  gap-30 items-center bg-[#FF0060] rounded-md justify-center px-6 py-2 border-gray-200 border-2">
                    <div class=" grid items-center justify-center">
                        <p class="text-sm text-white">Product Name</p>
                    </div>

                    <li class="col-span-1 grid items-center justify-center">
                        <p class="text-sm text-white">Category</p>
                    </li>

                    <li class="col-span-1 grid items-center justify-center">
                        <p class="text-sm text-white">Price</p>
                    </li>

                    <li class="col-span-1 grid items-center justify-center">
                        <p class="text-sm text-white">Description</p>
                    </li>

                    <li class="col-span-1 grid items-center justify-center">
                        <p class="text-sm text-white">Actions</p>
                    </li>

                </ul>
            </div>

            {{-- formulaire d'ajout  --}}
            <form
                class="fixed top-12 addProductModal left-[40vw] flex z-50 mx-auto w-96 h-auto -translate-y-[800px] transition-all duration-700 ease-out justify-center items-center bg-white shadow-lg"
                action="{{ route('ajout_product') }}" method="POST">
                @csrf
                <div>
                    <div>
                        <ul class="flex justify-between items-center py-7">
                            <li class="text-2xl font-bold">Big Bazzar</li>
                            <button type="button"
                                class="px-1.5 text-sm py-0.5 close font-bold rounded-lg shadow-md shadow-black hover:shadow-lg bg-[#FF0060]   hover:shadow-black duration-300">
                                close
                            </button>
                        </ul>
                    </div>

                    <p class="text-center font-medium text-xl pb-8">ADD PRODUCT</p>
                    <div class="flex flex-col gap-4 mx-auto">
                        <div>
                            <label for="nom" class="font-bold">Product Name</label><br>
                            <input type="text" name="nom"
                                class="rounded-lg bg-[#f1eeef]  mt-2 py-2.5 pl-5 outline-none w-[315px]">
                        </div>
                        <div>
                            <label for="prix" class="font-bold">Price</label><br>
                            <input type="number" name="prix"
                                class="rounded-lg bg-[#f1eeef]  mt-2 py-2.5 pl-5 outline-none w-[315px]">

                        </div>
                        <div>
                            <label for="quantite" class="font-bold">Quantity</label><br>
                            <input type="number" name="quantite"
                                class="rounded-lg  bg-[#f1eeef]  mt-2 py-2.5 pl-5 outline-none w-[315px]">
                        </div>
                        <div>
                            <label for="description" class="font-bold">Description</label><br>
                            <textarea type="text" rows="4" name="description"
                                class="rounded-lg bg-[#f1eeef]  mt-2 py-2.5 pl-5 outline-none w-[315px]"></textarea>
                        </div>
                    </div>

                    <button
                        class="mb-8 mt-8 py-2.5 w-[310px] rounded-lg font-bold shadow-md shadow-black  hover:shadow-lg bg-[#FF0060]   hover:shadow-black duration-300"
                        type="submit">Save</button>
                </div>
            </form>

            {{-- lists  --}}
            <div class="flex flex-col gap-1">
                @foreach ($allproducts as $value)
                    <ul
                        class="grid grid-cols-5 items-center gap-35 hover:bg-gray-100 duration-300 rounded-md justify-center px-6 py-2 border-gray-200 border-2">
                        <li class="col-span-1 grid items-center justify-center">
                            <p class="text-xs pl-1">{{ $value->nom }}</p>
                        </li>
                        {{-- <input type="hidden" name="personne_id"  value="{{ $value->personne_id }}"> --}}

                        <li class="col-span-1 grid items-center justify-center">
                            <p class="text-xs">{{ $value->prix }}</p>
                        </li>

                        <li class="col-span-1 grid items-center justify-center">
                            <p class="text-xs">{{ $value->quantite }}</p>
                        </li>

                        <li class="col-span-1 grid items-center justify-center">
                            <p class="text-xs ">{{ $value->description }}</p>
                        </li>
                        {{-- @dd("{!!$value->id!!}") --}}
                        {{-- @dd({!!$value->id!!}) --}}
                        <li class="col-span-1 grid items-center justify-center">
                            <div class="flex items-center gap-2 ">
                                <div id="editbtn{{$value->id}}" onclick="editeproduct({{$value->id}})"
                                    class="bg-gray-100 px-2 py-1 flex items-center justify-center rounded-md shadow-first hover:shadow-none duration-300"
                                    >
                                    <a href="#">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                </div>

                                {{-- formulaire edit  --}}
                                {{-- @dump($value->id)
                                @dd("editProductModal".$value->id) --}}
                                <form id="{{$value->id}}"
                                    class="fixed top-12 left-[40vw] hidden z-50 mx-auto w-96 -translate-y-[800px] transition-all duration-700 ease-out justify-center items-center bg-white shadow-lg"
                                    action="{{ route('edit_Product') }}" method="POST">
                                    @csrf

                                    <div>
                                        <div>
                                            <ul class="flex justify-between items-center py-7">
                                                <li class="text-2xl font-bold">Big Bazzar</li>
                                                <button type="button" id="closeEditBtn{{$value->id}}"
                                                    class="px-1.5 text-sm py-0.5 bg-[#FF0060] font-bold rounded-lg shadow-md shadow-black hover:shadow-lg  hover:shadow-black  duration-300">
                                                    close
                                                </button>
                                            </ul>
                                        </div>

                                        <p class="text-center font-medium text-xl pb-8">EDIT PRODUCT</p>

                                        <input type="hidden" name="product_id" value="{{ $value->id }}">
                                        <div class="flex flex-col gap-4">
                                            <div>
                                                <label for="nom" class="font-bold">Product Name</label><br>
                                                <input type="text" name="nom" value="{{ $value->nom }}"
                                                    class="rounded-lg bg-[#f1eeef] mt-2 py-2.5 pl-5 outline-none w-[315px]">
                                            </div>
                                            <div>
                                                <label for="prix" class="font-bold">Price</label><br>
                                                <input type="number" name="prix" value="{{ $value->prix }}"
                                                    class="rounded-lg bg-[#f1eeef] mt-2 py-2.5 pl-5 outline-none w-[315px]">

                                            </div>
                                            <div>
                                                <label for="quantite" class="font-bold">Quantity</label><br>
                                                <input type="number" name="quantite" value="{{ $value->quantite }}"
                                                    class="rounded-lg bg-[#f1eeef]  mt-2 py-2.5 pl-5 outline-none w-[315px]">
                                            </div>
                                            <div>
                                                <label for="description" class="font-bold">Description</label><br>
                                                <textarea type="text" rows="4" name="description"
                                                    class="rounded-lg bg-[#f1eeef] mt-2 py-2.5 pl-5 outline-none w-[315px]">{{ $value->description }}</textarea>
                                            </div>
                                        </div>

                                        <button
                                            class="mb-8 mt-8 py-2.5 w-[310px] rounded-lg font-bold shadow-md shadow-black hover:shadow-lg bg-[#FF0060] hover:shadow-black  duration-300"
                                            type="submit">Save</button>
                                    </div>
                                </form>

                                <div
                                    class="bg-gray-100 px-2 py-1 flex items-center justify-center rounded-md shadow-first hover:shadow-none duration-300">
                                    <form action="{{ route('delete_product') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $value->id }}">
                                        <button type="submit" class="text-[#FF0060]"><i
                                                class="fa-solid fa-trash"></i></button>
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
            {{-- <ul class="flex gap-[600px] absolute bottom-0 py-3.5">
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
            </ul> --}}
        </div>
    </div>
@endsection
