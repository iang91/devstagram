@extends('layouts.app')

@section('titulo')
Registrate en Devstagram 
@endsection


@section('contenido')

<div class=" md:flex md:justify-center">
<div class=" md:w-4/12 rounded-l-lg overflow-hidden">
<img class=" h-full object-cover" src="{{ asset('img/registrar.jpg') }}" alt="imagen login">
</div>

   <div class="md:w-4/12 bg-white p-9 rounded-lg shadow-lg">
    <form action="/crear-cuenta" method="POST">
        @csrf
        <div class="mb-5"> 
            <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre </label>
            <input id="name" name="name" class=" w-full border-gray-950 border p-3 rounded-lg @error('name') border-red-700
            @enderror" type="text" placeholder="ru nombre" value="{{old('name')}}" />
            @error('name')
              <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p> 
          @enderror
        </div>
        <div class="mb-5"> 
            <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username </label>
            <input id="username"  name="username" class=" w-full border-gray-950 border p-3 rounded-lg @error('username') border-red-700
            @enderror" type="text" placeholder="Tu nombre de Usuario" value="{{old('username')}}" />
            @error('username')
            <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p> 
        @enderror
        </div>
        <div class="mb-5"> 
            <label for="email" class="mb-2 block uppercase text-gray-500 font-bold ">Email </label>
            <input id="email" name="email" class=" w-full border-gray-950 border p-3 rounded-lg @error('email') border-red-700
            @enderror" type="text" placeholder="Tu nombre de Usuario" value="{{old('email')}}"/>
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
            <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Password </label>
            <input id="password_confirmation" name="password_confirmation" class=" w-full border-gray-950 border p-3 rounded-lg @error('password_confirmations') border-red-700
            @enderror" type="password" placeholder="Tu password DE REGISTRO" />
            @error('password_confirmation')
            <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p> 
        @enderror
        </div>
      <input type="submit" value="Crear Cuenta" class=" cursor-pointer font-bold bg-sky-700 hover:bg-sky-500 w-full text-white p-3 rounded-lg"/>

    </form>
   </div>
</div>
@endsection
