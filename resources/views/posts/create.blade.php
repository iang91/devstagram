
@extends('layouts.app');

@section('titulo')
crea una nueva publicacion
@endsection

@push('styles')
  <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

@endpush


@section('contenido')
<div class="md:flex md:items-center">
    <div class=" md:w-1/2 px-10">
<form action="{{ route('imagen.store') }}" method="POST" enctype="multipart/form-data" id="dropzone" class="dropzone border-red-950 border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
@csrf
</form>


    </div>
    <div class="md:w-1/2 px-10">
        <div class=" md:w-11/12 bg-white p-9 rounded-lg shadow-lg">

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-5"> 
                <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">Titulo </label>
                <input id="titulo" name="titulo" class=" w-full border-gray-950 border p-3 rounded-lg @error('titulo') border-red-700
                @enderror" type="text" placeholder="Titulo del post" value="{{old('titulo')}}" />
                @error('titulo')
                  <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p> 
              @enderror
            </div>
            <div class="mb-5"> 
                <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">Descripcion </label>
                <textarea id="descripcion" name="descripcion" class=" w-full border-gray-950 border p-3 rounded-lg @error('descripcion') border-red-700
                @enderror" type="text" placeholder="Escribe tu descripcion"> {{old('descripcion')}}</textarea>
                @error('descripcion')
                  <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p> 
              @enderror
            </div>


            <div class="mb-5">
              <input 
                name="imagen"
                type="hidden"
                value="{{ old('imagen') }}"
              />
              @error('imagen')
              <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p> 
          @enderror
            </div>

          <input type="submit" value="Crear Publicacion" class=" cursor-pointer font-bold bg-sky-700 hover:bg-sky-500 w-full text-white p-3 rounded-lg"/>
    
        </form>

        </div>
    </div>
</div>

@endsection