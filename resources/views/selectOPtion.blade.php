@extends('dashboard.dashboard')
@section('main')
    <div class="mt-[20px] max-sm:w-[98vw] w-[82vw]"> 

        <div class="flex mb-3 items-center justify-between">
            <div
                class="flex shadow-first hover:shadow-none duration-300 gap-2 items-center pl-6 overflow-hidden bg-white rounded-md">
                <i class="fa-solid fa-search"></i>
                <input type="text" placeholder="Search user..." class="text-sm py-2 w-80 outline-none px-3">
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
        {{-- products  --}}
        <div
            class="bg-white relative h-[86vh] overflow-auto p-6 rounded-[16px] shadow-first hover:shadow-none duration-300 px-6">
            <div>
                <ul
                    class="grid grid-cols-5  gap-30 items-center bg-[#FF0060] rounded-md justify-center px-6 py-2 border-gray-200 border-2">
                    <div class=" grid items-center justify-center">
                        <p class="text-sm text-white">Name</p>
                    </div>

                    <li class="col-span-1 grid items-center justify-center">
                        <p class="text-sm text-white">Surname</p>
                    </li>

                    <li class="col-span-1 grid items-center justify-center">
                        <p class="text-sm text-white">Email</p>
                    </li>

                    <li class="col-span-1 grid items-center justify-center">
                        <p class="text-sm text-white">Age</p>
                    </li>

                    <li class="col-span-1 grid items-center justify-center">
                        <p class="text-sm text-white">Role</p>
                    </li>

                </ul>
            </div>
            @foreach ($allPersonne as $value)
                <ul
                    class="grid grid-cols-5 items-center gap-35 hover:bg-gray-100 duration-300 rounded-md justify-center px-6 py-2 border-gray-200 border-2">
                    <li class="col-span-1 grid items-center justify-center">
                        <p class="text-xs pl-1">{{ $value->nom }}</p>
                    </li>
                    {{-- <input type="hidden" name="personne_id"  value="{{ $value->personne_id }}"> --}}

                    <li class="col-span-1 grid items-center justify-center">
                        <p class="text-xs">{{ $value->prenom }}</p>
                    </li>

                    <li class="col-span-1 grid items-center justify-center">
                        <p class="text-xs">{{ $value->email }}</p>
                    </li>

                    <li class="col-span-1 grid items-center justify-center">
                        <p class="text-xs ">{{ $value->age }}</p>
                    </li>

                    <li class="col-span-1 grid items-center justify-center">
                        <div class="flex items-center gap-2 ">

                            <select name="" id="" class="bg-[#FF0060] cursor-pointer duration-300 rounded hover:bg-white px-2 py-1" >
                                <option value="" name="user">User</option>
                                <option value="" name="admin">Admin</option>
                            </select>
                        </div>
                    </li>
                </ul>
            @endforeach

        </div>
    </div>
@endsection