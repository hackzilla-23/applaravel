@extends('dashboard.dashboard')

<link rel="stylesheet" href="{{ asset('login.css') }}">

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

            <a href="#"
                class="flex addProductBtn items-center gap-2 text-white bg-[#FF0060] px-2 py-1 rounded-md shadow-first hover:shadow-none duration-300 ">
                <i class="fa-brands fa-plus text-sm"></i>
                <p class="text-sm">Add Product</p>
            </a>
        </div>

        {{-- products  --}}
        <div class="bg-white relative h-[76vh] rounded-[16px] shadow-first hover:shadow-none duration-300 px-6">
            <p class="pt-3">Products</p>

            <div class="">
                <ul class="flex items-center justify-center gap-32 rounded-b-lg bg-[#FF0060] py-3 mt-3 pl-8">
                    <li class="col-span-1 ">
                        <p class="text-sm text-white">Product Name</p>
                    </li>

                    <li class="col-span-1 ">
                        <p class="text-sm text-white">Price</p>
                    </li>

                    <li>
                        <p class="text-sm text-white">Quantite</p>
                    </li>

                    <li>
                        <p class="text-sm text-white">Description</p>
                    </li>

                    <li class="col-span-1 ">
                        <p class="text-sm text-white">Actions</p>
                    </li>
                </ul>
            </div>

            {{-- formulaire d'ajout  --}}
            <div
                class="login-container -translate-y-[800px] absolute z-10 addProductModal left-60 transition-all duration-500 -top-20 md:w-[400px] md:px-[42px] px-[30px] py-[30px]">
                <form class="login-form" method="POST" action="{{ route('ajout_product') }}">
                    @csrf
                    <div class="flex items-center justify-between pb-6">
                        <h2>Add Product</h2>
                        <img class="close" src="{{ asset('img/close_24dp_000000.svg') }}" alt="">
                    </div>
                    <div class="input-group">
                        <label for="nom">Product Name</label>
                        <input type="text" id="email" name="nom" placeholder="Entrer le nom du produit">
                        {!! $errors->first('email', '<p class = "text-red-500">email incorrect</p>') !!}
                    </div>

                    <div class="input-group">
                        <label for="prix">Price</label>
                        <input type="number" id="prix" name="prix" placeholder="Entrer le prix du rpoduit">
                        {!! $errors->first('password', '<p class = "text-red-500">mot de passe incorrect</p>') !!}
                    </div>

                    <div class="input-group">
                        <label for="password">Quantity</label>
                        <input type="number" id="quantite" name="quantite" placeholder="Entrer la quantite du produit">
                        {!! $errors->first('password', '<p class = "text-red-500">mot de passe incorrect</p>') !!}
                    </div>

                    <div class="input-group">
                        <label for="description">Description</label>
                        <textarea class="p-[12px]" name="description" id="desc" cols="30" rows="5"
                            placeholder="Entrer la description du produit"></textarea>
                        {!! $errors->first('password', '<p class = "text-red-500">mot de passe incorrect</p>') !!}
                    </div>

                    @error('email1')
                        <p class="text-red-500 text-sm text-center pb-2">{{ $message }}</p>
                    @enderror

                    <div class="input-group">
                        <button type="submit" class="submit-btn bg-[#FF0060] hover:bg-[#ff003c] duration-300">Save</button>
                    </div>

                </form>
            </div>

            {{-- lists  --}}
            <div class="flex flex-col gap-1">
                @foreach ($allproducts as $value)
                    <ul
                        class="flex items-center gap-40 hover:bg-gray-100 duration-300 rounded-md justify-center px-6 py-2 border-gray-200 border-2">
                        <li class="col-span-1 grid items-center justify-center">
                            <p class="text-xs pl-1">{{ $value->nom }}</p>
                        </li>

                        <li class="col-span-1 grid items-center justify-center">
                            <p class="text-xs">{{ $value->prix }}</p>
                        </li>

                        <li class="col-span-1 grid items-center justify-center">
                            <p class="text-xs">{{ $value->quantite }}</p>
                        </li>

                        <li class="col-span-1 grid items-center justify-center">
                            <p class="text-xs ">{{ $value->description }}</p>
                        </li>

                        <li class="col-span-1 grid items-center justify-center">
                            <div class="flex items-center gap-2 ">
                                <div
                                    class="bg-gray-100 editbtn px-2 py-1 flex items-center justify-center rounded-md shadow-first hover:shadow-none duration-300">
                                    <a href="#">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                </div>

                                {{-- formulaire edit  --}}
                                <div
                                    class="login-container -translate-y-[800px] absolute z-10 addEditModal left-60 transition-all duration-500 -top-20 md:w-[400px] md:px-[42px] px-[30px] py-[30px]">
                                    <form class="login-form" method="POST" action="{{ route('edit_Product') }}">
                                        @csrf
                                        <input type="hidden" name="" id="" value="{{ $value->id }}">
                                        <div class="flex items-center justify-between pb-6">
                                            <h2>Edit Product</h2>
                                            <img class="closes" src="{{ asset('img/close_24dp_000000.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="input-group">
                                            <label for="nom">Product Name</label>
                                            <input value="{{ $value->nom }}" type="text" id="email" name="nom"
                                                placeholder="Entrer le nom du produit">
                                            {!! $errors->first('email', '<p class = "text-red-500">email incorrect</p>') !!}
                                        </div>

                                        <div class="input-group">
                                            <label for="prix">Price</label>
                                            <input value="{{ $value->prix }}" type="number" id="prix" name="prix"
                                                placeholder="Entrer le prix du rpoduit">
                                            {!! $errors->first('password', '<p class = "text-red-500">mot de passe incorrect</p>') !!}
                                        </div>

                                        <div class="input-group">
                                            <label for="password">Quantity</label>
                                            <input value="{{ $value->quantite }}" type="number" id="quantite" name="quantite"
                                                placeholder="Entrer la quantite du produit">
                                            {!! $errors->first('password', '<p class = "text-red-500">mot de passe incorrect</p>') !!}
                                        </div>

                                        <div class="input-group">
                                            <label for="description">Description</label>
                                            <textarea class="p-[12px]" name="description" id="desc" cols="30" rows="5"
                                                placeholder="Entrer la description du produit">{{ $value->description }}</textarea>
                                            {!! $errors->first('password', '<p class = "text-red-500">mot de passe incorrect</p>') !!}
                                        </div>

                                        @error('email1')
                                            <p class="text-red-500 text-sm text-center pb-2">{{ $message }}</p>
                                        @enderror

                                        <div class="input-group">
                                            <button type="submit"
                                                class="submit-btn bg-[#FF0060] hover:bg-[#ff003c] duration-300">Save</button>
                                        </div>

                                    </form>
                                </div>

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
            <ul class="flex gap-[600px] absolute bottom-0 py-3.5">
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
