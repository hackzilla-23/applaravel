@extends('dashboard.dashboard')

@section('main')
    <!-- Main Content -->
    <main class="lg:overflow-auto xl:overscroll-none xl:h-full lg:h-[90vh] pb-5 xl:pb-0 mt-12 lg:mt-4">
        <h2 class="mb-6 mt-7 xl:mt-0 lg:my-3 text-3xl font-bold pl-8 lg:pl-0">Dashboard</h2>
        {{-- Dashboard --}}
        <div class="dashboard xl:grid xl:grid-cols-3 lg:mx-0 mx-8 flex flex-col gap-5 lg:gap-7 lg:flex lg:flex-col">
            <div
                class="bg-white shadow-first lg:w-full hover:shadow-none duration-300 xl:flex xl:justify-center xl:items-center rounded-[20px] py-4 px-5 md:px-10 lg:px-8">
                <div class="flex items-center justify-between xl:gap-10">
                    <div class="text-center xl:pl-3">
                        <p class="font-[400]">Total Sales</p>
                        <p class="font-extrabold text-[27px]">$65,024</p>
                    </div>

                    <div class="relative w-28 h-28">
                        <svg class="w-full h-full" viewBox="0 0 44 42">
                            <circle cx="21" cy="21" r="15.9155" stroke="#e6e6e6" stroke-width="4"
                                fill="none">
                            </circle>
                            <circle id="progressCircle" class="circle" cx="21" cy="21" r="15.9155"
                                stroke="#2196F3" stroke-width="4" fill="none" stroke-dasharray="100"
                                stroke-dashoffset="100"></circle>
                        </svg>
                        <div id="percentageText"
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-medium text-[#7d8da1] text-sm">
                            0%</div>
                    </div>
                </div>
            </div>

            <div
                class="bg-white shadow-first lg:w-full hover:shadow-none duration-300 xl:flex xl:justify-center xl:items-center rounded-[20px] py-4 px-5 md:px-10 lg:px-8">
                <div class="flex items-center justify-between xl:gap-10">
                    <div class="text-center pl-3">
                        <p class="font-[400]">Site Visit</p>
                        <p class="font-extrabold text-[27px]">24,921</p>
                    </div>
                    <div class="relative w-28 h-28">
                        <svg class="w-full h-full" viewBox="0 0 44 42">
                            <circle cx="21" cy="21" r="15.9155" stroke="#e6e6e6" stroke-width="4"
                                fill="none">
                            </circle>
                            <circle id="progressCircle1" class="circle" cx="21" cy="21" r="15.9155"
                                stroke="#2196F3" stroke-width="4" fill="none" stroke-dasharray="100"
                                stroke-dashoffset="100"></circle>
                        </svg>
                        <div id="percentageText1"
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-medium text-[#7d8da1] text-sm">
                            0%</div>
                    </div>
                </div>
            </div>

            <div
                class="bg-white shadow-first lg:w-full hover:shadow-none duration-300 xl:flex xl:justify-center xl:items-center rounded-[20px] py-4 px-5 md:px-10 lg:px-8">
                <div class="flex items-center justify-between xl:gap-10">
                    <div class="text-center pl-3">
                        <p class="font-[400]">Searches</p>
                        <p class="font-extrabold text-[27px]">14,147</p>
                    </div>
                    <div class="relative w-28 h-28">
                        <svg class="w-full h-full" viewBox="0 0 44 42">
                            <circle cx="21" cy="21" r="15.9155" stroke="#e6e6e6" stroke-width="4"
                                fill="none">
                            </circle>
                            <circle id="progressCircle2" class="circle" cx="21" cy="21" r="15.9155"
                                stroke="#2196F3" stroke-width="4" fill="none" stroke-dasharray="100"
                                stroke-dashoffset="100"></circle>
                        </svg>
                        <div id="percentageText2"
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-medium text-[#7d8da1] text-sm">
                            0%</div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End of Dashboard --}}

        {{-- New Users section  --}}
        <div class="new-users mt-3">
            <h2 class="pl-8 pt-4 lg:pt-0 lg:pl-0 text-xl font-medium pb-3">New Users</h2>
            <div
                class="user-list py-7 xl:gap-0 lg:gap-7 lg:mx-0 mx-8 rounded-[20px] shadow-first hover:shadow-none duration-300 bg-white flex flex-wrap items-center justify-between gap-7 px-[40px] lg:px-[45px] xl:px-[74px]">
                <div class="user">
                    <img class="w-[80px] h-[80px] rounded-[50%] mb-[7px] object-cover"
                        src="{{ asset('img/profile-2.jpg') }}">
                    <h2 class="text-center font-bold text-xl">Jack</h2>
                    <p class="text-xs text-[#7d8da1] font-semibold text-center pt-1">54 Min Ago</p>
                </div>

                <div class="user">
                    <img class="w-[80px] h-[80px] rounded-[50%] mb-[7px] object-cover"
                        src="{{ asset('img/profile-3.jpg') }}">
                    <h2 class="text-center font-bold text-xl">Amir</h2>
                    <p class="text-xs text-[#7d8da1] font-semibold text-center pt-1">3 Hours Ago</p>
                </div>

                <div class="user">
                    <img class="w-[80px] h-[80px] rounded-[50%] mb-[7px] object-cover"
                        src="{{ asset('img/profile-4.jpg') }}">
                    <h2 class="text-center font-bold text-xl">Ember</h2>
                    <p class="text-xs text-[#7d8da1] font-semibold text-center pt-1">6 Hours Ago</p>
                </div>

                <div class="user">
                    <img class="w-[80px] h-[80px] rounded-[50%] mb-[7px] object-cover" src="{{ asset('img/plus.png') }}">
                    <h2 class="text-center font-bold text-xl">More</h2>
                    <p class="text-xs text-[#7d8da1] font-semibold text-center pt-1">New User</p>
                </div>
            </div>
        </div>
        {{-- End of New Users section  --}}

        <!-- Recent Orders Table -->
        <div class="recent-orders text-center mt-4 lg:mx-0 mx-8">
            <h2 class="text-xl text-left font-medium pb-3">Recent Orders</h2>
            <table
                class="min-w-full mb-2 shadow-first hover:shadow-none duration-300 table-auto border-collapse rounded-[20px] bg-white overflow-hidden">
                <!-- En-tête du tableau -->
                <thead>
                    <tr>
                        <th class="pt-6 text-center text-xs font-bold">Course Name</th>
                        <th class="pt-6 text-center text-xs font-bold">Course Number</th>
                        <th class="pt-6 text-center text-xs font-bold">Payment</th>
                        <th class="hidden lg:flex pt-6 text-center text-xs font-bold">Status</th>
                        <th></th>
                    </tr>
                </thead>

                <!-- Corps du tableau -->
                <tbody class="text-[#7d8da1]">
                    <tr class="border-b hover:bg-indigo-50 duration-500">
                        <td class="py-4 text-sm text-center font-medium">Javascript Tutorial</td>
                        <td class="py-4 text-sm text-center">85743</td>
                        <td class="py-4 text-sm text-center">Due</td>
                        <td class="py-4 text-sm text-center text-yellow-500">Pending</td>
                        <td class="hidden lg:flex text-[12px] text-[#6C9BCF]">Details</td>
                    </tr>

                    <tr class="border-b hover:bg-indigo-50 duration-500">
                        <td class="py-4 text-sm text-center font-medium">CSS Full Course</td>
                        <td class="py-4 text-sm text-center">97245</td>
                        <td class="py-4 text-sm text-center ">Refunded</td>
                        <td class="py-4 text-sm text-center text-red-500">Declined</td>
                        <td class="hidden lg:flex text-[12px] text-[#6C9BCF]">Details</td>
                    </tr>

                    <tr class="border-b hover:bg-indigo-50 duration-500">
                        <td class="pt-4 text-sm pb-8 text-center font-medium">Flexbox Tutorial</td>
                        <td class="pt-4 text-sm pb-8 text-center">36452</td>
                        <td class="pt-4 text-sm pb-8 text-center ">Paid</td>
                        <td class="pt-4 text-sm pb-8 text-center text-green-500">Active</td>
                        <td class="hidden lg:flex text-[12px] text-[#6C9BCF] pb-3">Details</td>
                    </tr>
                </tbody>
            </table>
            <a href="#" class="text-center text-sm font-medium text-[#6C9BCF]">Show All</a>
        </div>
        <!-- End of Recent Orders -->
    </main>
    {{-- End of Main Content  --}}

    <!-- Right Section -->
    <div class="right-section ">
        <div class="nav">
            {{-- <div class="profile flex items-center justify-end gap-6 py-2">
                <div class="info text-right">
                    <p class="text-sm">Hey, <b>{{ auth()->guard('personnes')->user()->prenom }}</b></p>
                    <small class="text-xs text-[#7d8da1]">Admin</small>
                </div>

                <div class="profile-photo">
                    <img class="w-[40px] h-[40px] rounded-[50%]" src="{{ asset('img/profile-1.jpg') }}">
                </div>
            </div> --}}

            <div class="flex items-center justify-end gap-4 py-2">


                {{-- <div
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
                </div> --}}

                <div class="flex flex-row gap-4">
                    <div
                        class="bg-white rounded-md shadow-first hover:shadow-none duration-300 px-3.5 py-2 flex justify-center items-center">
                        <a href="#">
                            <i class="fa-solid fa-bell"></i>
                        </a>
                    </div>
                    {{-- @dd(auth()->guard('personnes')->user()) --}}
                    <div class="relative font-[sans-serif] w-max mx-auto">
                        <button type="button" id="dropdownToggle"
                        class="flex shadow-first hover:shadow-none duration-300 items-center gap-1.5 bg-white px-1.5 py-2 rounded-md">

                        @if(auth()->guard('personnes')->check())
                            <img src="{{ url('storage/personne_images/'.auth()->guard('personnes')->user()->images)}}" class="rounded-md w-[25px] h-[25px] object-cover"
                            alt="">
                        @elseif (auth()->guard('admins')->check())
                            <img src="{{  asset('img/souop.jpg')}}" class="rounded-md w-[25px] h-[25px] object-cover"
                            alt="">
                        @endif
                            
                            <div class="flex items-center gap-6">
                                <div>
                                        {{-- <p class="text-xs font-semibold">{{ auth()->guard('personnes')->user()->prenom }}</p> --}}
                                    @if(Auth::guard('admins')->check())
                                        <p class="text-xs font-semibold">{{ auth()->guard('admins')->user()->prenom }}</p>
                                        <p class="text-[8px]">Admin Account</p>
                                    
                                    @elseif(Auth::guard('personnes')->check())
                                        <p class="text-xs font-semibold">{{ auth()->guard('personnes')->user()->prenom }}</p>
                                        <p class="text-[8px]">User Account</p>
                                    
                                    @endif
                                        {{-- <p class="text-xs font-semibold">souop</p>
                                        <p class="text-[8px]">Admin Account</p> --}}
                                </div>
                                <a href="#"><i class="fa-solid fa-caret-down"></i></a>
                            </div>
                        </button>

                        <ul id="dropdownMenu"
                            class="absolute hidden shadow-[0_8px_19px_-7px_rgba(6,81,237,0.2)] bg-white py-2 z-[1000] min-w-full mt-1 rounded divide-y max-h-96 overflow-auto">
                            <li
                                class="'py-3 px-5 flex items-center gap-2  hover:bg-blue-100 text-gray-800 text-sm cursor-pointer">
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
        </div>
        <!-- End of Nav -->

        <div>
            <div class="py-8 bg-white rounded-[20px] text-center shadow-first hover:shadow-none duration-300">
                <img class="mx-auto w-[160px] h-[160px]" src="{{ asset('img/logo.png') }}">
                <h2 class="text-xl font-bold pt-3">Big Bazzar</h2>
                <p class="text-sm text-[#7d8da1] pt-1.5">Fullstack Web Developer</p>
            </div>
        </div>

        <div class="reminders">
            <div class="header pt-8 flex justify-between items-center">
                <h2 class="text-2xl  font-medium">Reminders</h2>
                <div class="bg-white flex items-center justify-center p-2.5 rounded-full">
                    <img src="{{ asset('img/notifications_none_24dp_5F6368.svg') }}" alt="">
                </div>
            </div>

            <div
                class="notification flex items-center my-4 py-5 px-6 rounded-[20px] bg-white shadow-first duration-300 hover:shadow-none">
                <div class="icon bg-[#1B9C85] p-2.5 rounded-[10px]">
                    <img src="{{ asset('img/volume_up_24dp_FFFFFF.svg') }}" alt="">
                </div>

                <div class="content flex items-center justify-between w-[100%] pl-4">
                    <div class="info">
                        <p class="text-xs">Workshop</p>
                        <small class="text-xs">
                            08:00 AM - 12:00 PM
                        </small>
                    </div>
                    <img src="{{ asset('img/more_vert_24dp_5F6368.svg') }}" alt="">
                </div>
            </div>

            <div
                class="notification flex items-center py-5 px-6 rounded-[20px] bg-white shadow-first duration-300 hover:shadow-none">
                <div class="icon bg-[#FF0060] p-2.5 rounded-[10px]">
                    <img src="{{ asset('img/edit_24dp_FFFFFF.svg') }}" alt="">
                </div>

                <div class="content flex items-center justify-between w-[100%] pl-4">
                    <div class="info">
                        <h3 class="text-xs">Workshop</h3>
                        <small class="text-xs">
                            08:00 AM - 12:00 PM
                        </small>
                    </div>
                    <img src="{{ asset('img/more_vert_24dp_5F6368.svg') }}" alt="">
                </div>
            </div>

            <div
                class="notification bg-white border-dashed shadow-first duration-300 hover:bg-[#6C9BCF] hover:shadow-none hover:text-white  border-2 mt-4 border-[#6C9BCF] flex items-center p-6 rounded-[20px]">
                <div class="flex mx-auto items-center">
                    <img src="{{ asset('img/add_24dp_5F6368.svg') }}" alt="">
                    <h3>Add Reminder</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Right Section -->
@endsection
