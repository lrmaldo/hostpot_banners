<?php

namespace App\Http\Controllers;

use App\Publicidad;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Publicidad::all();
     return view('banners.index',compact('banners'));
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
            $nombre_imagen = "Banner".time().".".$image->getClientOriginalExtension();
            /* destino de la imagen */
            $destinoPath = public_path('/imagenes/Banners');
            /* mover la imagen a la ruta */
            $image->move($destinoPath,$nombre_imagen);
           
            $carrusel = new  Publicidad();
            $carrusel->url_imagen = '/imagenes/Banners/'.$nombre_imagen;
            $carrusel->save();
            return redirect('banners')->with('success','Imagen de Carrusel guardado correctamente');
            }else{
                return redirect('banners')->with('error', 'No se importo correctamente la imagen');
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
        $carrusel = Publicidad::find($id);
        if($request->file('file')){
            /* si exite la imagen */
            if(file_exists(".".$carrusel->url_image)){
                unlink(".".$carrusel->url_imagen);
            }
                /* obtener la nueva imagen  */
                $image = $request->file('file');
                $nombre_imagen = "Banner".time().".".$image->getClientOriginalExtension();
                /* destino de la imagen */
                $destinoPath = public_path('/imagenes/Banners');
                /* mover la imagen a la ruta */
                $image->move($destinoPath,$nombre_imagen);
                $carrusel->url_imagen = '/imagenes/Banners/'.$nombre_imagen;
                $carrusel->save();
                return redirect('banners')->with('success','Imagen de Banner guardado correctamente');
           
        }else{
            return redirect('banners')->with('error', 'No se importo correctamente la imagen');
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
        $carrusel = Publicidad::find($id);
        /* si exite la imagen */
        if(file_exists(".".$carrusel->url_image)){
           unlink(".".$carrusel->url_imagen);
       }
       Publicidad::destroy($id);
       return redirect('banners')->with('success','Se elimino Correctamente');
    }
}
