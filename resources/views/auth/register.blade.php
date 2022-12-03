@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 
rounded-lg shadow-lg">

    <h1 class="text-3xl text-center font-bold">Register</h1>

    <form class="mt-4" method="POST" action="">
        @csrf

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full 
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Name"
        id="name" name="name">

        @error('name')
            <p class="border border red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror

        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full 
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email"
        id="email" name="email">

        @error('email')
            <p class="border border red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror

        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full 
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password"
        id="password" name="password">

        @error('password')
            <p class="border border red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror

        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 
        w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
        placeholder="Password Confirmation" id="password_confirmation" 
        name="password_confirmation">

        <!--Aviso de privacidad -->
        <div class="form-group-container">
            <label><b> Aceptar aviso de privacidad
            @if($errors->first('aviso'))
                <p class="text-danger">{{$errors->first('aviso')}}</p>
                @endif
            </b><label>
                <div class="form-check form-check-inline" style="padding-left: 10px;">
                <input name="aviso" class="form-check-input" type="checkbox" id="aviso" value="1">
                <label class="form-check-label" for="inlineCheckbox1"> Acepto </label>
        </div>

        <div class="form-check form-check-inline">
                <input name="aviso" class="form-check-input" type="checkbox" id="aviso" value="2">
                <label class="form-check-label" for="inlineCheckbox2"> No acepto </label>
                
                <div class="form-group container">
                    <li class="nav-item active col-9">
                        <a class="btn btn-warning me-md-5" href=" {{route('aviso')}} "> Aviso de privacidad</a>
                    </li>
                </div>
        </div>
        <div  class="g-recaptcha"   style=" @error('g-recaptcha-response') border: tomato 1px solid;@enderror" data-sitekey="6LdqTxUfAAAAAKtHyqO_HUZC3mlewnaDkydw7rYW"></div>


<div>

        <button type="submit" class="runded-md bg-indigo-500 w-full text-lg
        text-white font-semibold p-2 my-3 hover:bg-indigo-600" >Send </button>



    </form>


</div>

@endsection