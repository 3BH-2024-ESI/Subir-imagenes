<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;

use Illuminate\Support\Str;

class ImagenController extends Controller
{
    public function Subir(Request $request){
        $file = $request->file('imagen');

        $originalName = $file->getClientOriginalName();
        $fileExtension = $file->getClientOriginalExtension();
        $fileSize = $file->getSize();
        $mimeType = $file->getMimeType();

    
        $fileName = Str::random(50) . ".png";
        $destinationPath = 'imagenes';
        $file->move($destinationPath,$fileName);

        $imagen = new Imagen();
        $imagen -> tipo = $request -> post("tipo");
        $imagen -> archivo = $fileName;
            
        $imagen -> save();

        return view("subirImagen",[
            'subido' => true,
            'originalName' => $originalName,
            'finalName' => $fileName,
            'fileExtension' => $fileExtension,
            'fileSize' => $fileSize,
            'mimeType' => $mimeType
        ]);


        }    
}
