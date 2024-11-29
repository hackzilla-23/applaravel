@extends('users.text')
@section('form')
    <form class="flex justify-center h-lvh items-center" action="#" method="POST">
        <div class="w-[400px] px-10 container rounded-md mx-auto">
            <div class="text-white">
                <ul class="flex justify-between items-center py-7">
                    <li class="text-2xl font-bold">MarketX</li>
                    <li><a href="#"><i class="text-2xl fa-solid fa-home"></i></a></li>
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
                <input type="number" name="quq=antite" class="rounded-lg  mt-2 py-2.5 pl-5 outline-none w-[315px]">
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

{{-- @include('partials._form') --}}
{{-- @endsection --}}
