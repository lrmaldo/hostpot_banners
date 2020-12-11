<?php

namespace App\Http\Controllers;

use App\Carrusel;
use Illuminate\Http\Request;

class CarruselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     

      if ($request->hasFile('file')) {
        /* nombre de la imagen y de la ruta  */
        $image = $request->file('file');
        $nombre_imagen = "Carrusel".time().".".$image->getClientOriginalExtension();
        /* destino de la imagen */
        $destinoPath = public_path('/imagenes/Carrusel');
        /* mover la imagen a la ruta */
        $image->move($destinoPath,$nombre_imagen);
       
        $carrusel = new  Carrusel();
        $carrusel->url_imagen = '/imagenes/Carrusel/'.$nombre_imagen;
        $carrusel->zona_id= $request->zona;
        $carrusel->save();
        return redirect('home')->with('success','Imagen de Carrusel guardado correctamente');
        }else{
            return redirect('home')->with('error', 'No se importo correctamente la imagen');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $carrusel = Carrusel::find($id);
        if($request->file('file')){
            /* si exite la imagen */
            if(file_exists(".".$carrusel->url_image)){
                unlink(".".$carrusel->url_imagen);
            }
                /* obtener la nueva imagen  */
                $image = $request->file('file');
                $nombre_imagen = "Carrusel".time().".".$image->getClientOriginalExtension();
                /* destino de la imagen */
                $destinoPath = public_path('/imagenes/Carrusel');
                /* mover la imagen a la ruta */
                $image->move($destinoPath,$nombre_imagen);
                $carrusel->url_imagen = '/imagenes/Carrusel/'.$nombre_imagen;
                $carrusel->save();
                return redirect('home')->with('success','Imagen de Carrusel guardado correctamente');
           
        }else{
            if($request['activar'.$id]){
                
                $carrusel->activo = 1;
            }else{
                $carrusel->activo = 0;
            }
            $carrusel->zona_id = $request['zona'.$id];
            $carrusel->save();
            return redirect('home')->with('success','Datos de Carrusel guardado correctamente');
            
            //return redirect('home')->with('error', 'No se importo correctamente la imagen');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrusel = Carrusel::find($id);
         /* si exite la imagen */
         if(file_exists(".".$carrusel->url_image)){
            unlink(".".$carrusel->url_imagen);
        }
        Carrusel::destroy($id);
        return redirect('home')->with('success','Se elimino Correctamente');
    }
}
