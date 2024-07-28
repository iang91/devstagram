@extends('layouts.app')

@section('titulo')
  Editar perfil: {{ auth()->user()->username }}
@endsection


@section('contenido')

<div class="md:flex md:justify-center">

    <div class=" md:w-1/2 bg-white shadow p-6">
          <form method="POST" action="{{ route('perfil.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-5"> 
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username </label>
                <input id="username" name="username" class=" w-full border-gray-950 border p-3 rounded-lg @error('username') border-red-700
                @enderror" type="text" placeholder="tu nombre de usuario" value="{{ auth()->user()->username }}" />
                @error('username')
                  <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p> 
              @enderror
            </div>

             <div class="mb-5"> 
                <label for="imagen" class="mb-2 block uppercase text-gray-500 font-bold">Imafgen perfi; </label>
                <input id="imagen" name="imagen" class=" w-full border-gray-950 border p-3 rounded-lg "
                type="file" accept=".jpg, .jpeg, .png"/>
              
            </div>
            <input type="submit" value="Guardar Cambios" class=" cursor-pointer font-bold bg-sky-700 hover:bg-sky-500 w-full text-white p-3 rounded-lg"/>

          </form>
    </div>


</div>

@endsection
