<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class PerfilController extends Controller
{

    public function __construct()    {
        $this->middleware('auth');
    }
    // 
    function index(){
     return view('perfil.index');    
  }

  public function store(Request $request){
       //modificar el request 
       $request->request->add(['username' => Str::slug($request->username)]);
       request()->validate(['username' => ['required','unique:users','min:3','max:20','not_in:twitter,editar-perfil'],]);

       if($request->imagen){

        $imagen = $request->file('imagen');

        $nombreImagen = Str::uuid() . "." . $imagen->extension();
        $imagenServidor = Image::make($imagen);
        $imagenServidor->fit(1000, 1000);
         
        $imagenPath = public_path('perfiles') .'/'. $nombreImagen;
        $imagenServidor->save($imagenPath);
    
    } 

    // Guardar cambios
    $usuario = User::find(auth()->user()->id);
    $usuario->username = $request->username;
    $usuario->imagen = $nombreImagen ?? auth()->user()->imagen ?? null;
    $usuario->save();

    //Redireccionar
    return redirect()->route('posts.index', $usuario->username);



    
 }
}
