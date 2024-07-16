<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComentarioController extends Controller
{
    //
      public function store(Request $request, User $user, Post $post){
       
    //    dd($post);

        Validator::make($request->all(), [
            'comentario' => 'required|max:255'
            ])->validate();
  //Almacenar en base de datos
   Comentario::create([
    'user_id' => auth()->user()->id,
    'post_id' => $post->id,
    'comentario' => $request->comentario
   ]);

   return back()->with('mensaje', 'Comentario realizado correctamente');
  

    }


}
