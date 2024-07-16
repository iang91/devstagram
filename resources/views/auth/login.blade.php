@extends('layouts.app')

@section('titulo')
Inicia Session en Devstagram 
@endsection


@section('contenido')

<div class=" md:flex md:justify-center">
<div class=" md:w-4/12 rounded-l-lg overflow-hidden">
<img class=" h-full object-cover" src="{{ asset( "img/login.jpg") }}" alt="imagen login de usuarios">
</div>

   <div class="md:w-4/12 bg-white p-9 rounded-lg shadow-lg">
    <form method="POST" action="{{ route('login') }}" novalidate>
        @csrf
        
       @if(session('mensaje'))
           
       <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ session('mensaje') }} </p> 

       @endif
     
        <div class="mb-5"> 
            <label for="email" class="mb-2 block uppercase text-gray-500 font-bold ">Email </label>
            <input id="email" name="email" class=" w-full border-gray-950 border p-3 rounded-lg @error('email') border-red-700
            @enderror" type="text" placeholder="Tu Email" value="{{old('email')}}"/>
            @error('email')
            <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p> 
        @enderror
        </div>
        <div class="mb-5"> 
            <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password </label>
            <input id="password" name="password" class=" w-full border-gray-950 border p-3 rounded-lg @error('password') border-red-700
            @enderror" type="password" placeholder="Tu password DE REGISTRO"  />
            @error('password')
            <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p> 
        @enderror
        </div>
          
        <div class="mb-5">
            <input type="checkbox" name="remember" id="remember-me"> <label for="remember-me" class=" cursor-pointer">Mantener mi session abierta</label>
        </div>


        <input type="submit" value="Iniciar Session" class=" cursor-pointer font-bold bg-sky-700 hover:bg-sky-500 w-full text-white p-3 rounded-lg"/>

    </form>
   </div>
</div>
@endsection
