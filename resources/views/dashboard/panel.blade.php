@extends('dashboard.dashboard');

@section('main')
    <div class="w-[79vw] bg-white rounded-xl shadow-first hover:shadow-none duration-300">
        <h1 class="text-3xl text-center pt-10 font-bold text-[#FF0060]">Administrator Panel</h1>

        <div class="mt-14 flex justify-center gap-20">
            <div class="w-[100%]">
                <p class="text-2xl text-center font-bold pt-4">UTILISATEURS</p>
                <table class="my-7 max-h-[500px] ml-10 w-full shadow-first hover:shadow-none duration-500 overflow-auto">
                    <thead class="bg-[#FF0060] text-white">
                        <tr>
                            <th class="text-center p-2">ID</th>
                            <th class="text-center p-2">Nom</th>
                            <th class="text-center p-2">Prenom</th>
                            <th class="text-center p-2">Age</th>
                            <th class="text-center p-2">Email</th>
                            <th class="text-center p-2">Action</th>
                        </tr>
                    </thead>

                    <tbody class="bg-gray-100">
                        @foreach ($users as $user)
                            <tr class="hover:bg-gray-200 duration-300">
                                <td class="text-center p-2">{{ $user->id }}</td>
                                <td class="text-center p-2">{{ $user->nom }}</td>
                                <td class="text-center p-2">{{ $user->prenom }}</td>
                                <td class="text-center p-2">{{ $user->age }}</td>
                                <td class="text-center p-2">{{ $user->email }}</td>
                                <td class="text-center p-2">
                                    <a href="{{ route('role_permission', $user->id) }}"
                                        class="text-xs font-semibold hover:text-blue-500 duration-300">
                                        Voir les détails
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="w-[100%]">
                <p class="text-2xl text-center font-bold">ROLES & PERMISSIONS</p>
                <div class="flex justify-center flex-col gap-14 my-7 mr-10">
                    <div>
                        <p class="text-lg pt-4 pb-2 font-bold">Roles</p>
                        <table class="w-full max-h-[500px] shadow-first hover:shadow-none duration-500 overflow-auto">
                            <thead class="bg-[#FF0060] text-white">
                                <tr>
                                    <th class="text-center p-2"></th>
                                    <th class="text-center p-2">ID</th>
                                    <th class="text-center p-2">name_Role</th>
                                    <th class="text-center p-2">guard_name</th>
                                </tr>
                            </thead>

                            <tbody class="bg-gray-100">
                                @if ($role)
                                    <tr>
                                        <td class="text-center p-2"><input type="checkbox" name="role" checked></td>
                                        <td class="text-center p-2">{{ $role->id }}</td>
                                        <td class="text-center p-2">{{ $role->name }}</td>
                                        <td class="text-center p-2">{{ $role->guard_name }}</td>
                                    </tr>
                                @else
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">Aucun role</td>
                                        <td></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <div>
                        <p class="text-lg pt-4 pb-2 font-bold">Permissions</p>
                        <table class="w-full max-h-[500px] shadow-first hover:shadow-none duration-500 overflow-auto">
                            <thead class="bg-[#FF0060] text-white">
                                <tr>
                                    <th class="text-center p-2"></th>
                                    <th class="text-center p-2">ID</th>
                                    <th class="text-center p-2">name_Permission</th>
                                    <th class="text-center p-2">guard_name</th>
                                </tr>
                            </thead>

                            <tbody class="bg-gray-100">
                                @if ($permission)
                                    @foreach ($permission as $permissions)
                                        <tr>
                                            <td class="text-center p-2"><input type="checkbox" name="permission" checked>
                                            </td>
                                            <td class="text-center p-2">{{ $permissions->id }}</td>
                                            <td class="text-center p-2">{{ $permissions->name }}</td>
                                            <td class="text-center p-2">{{ $permissions->guard_name }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">Aucune Permission</td>
                                        <td></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
