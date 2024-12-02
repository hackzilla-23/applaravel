@extends('index')

<link rel="stylesheet" href="{{ asset('login.css') }}">

<div class="login-container md:w-[400px] md:px-[42px] px-[30px] py-[30px]">

    <form class="login-form" method="POST" action="{{ route('login_personne') }}">
        @csrf
        <div class="flex items-center justify-between pb-6">
            <h2>Add Product</h2>
            <img src="{{ asset('img/close_24dp_000000.svg') }}" alt="">
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
            <button type="submit" class="submit-btn">Save</button>
        </div>

    </form>
</div>

{{-- @include('partials._form') --}}
{{-- @endsection --}}
