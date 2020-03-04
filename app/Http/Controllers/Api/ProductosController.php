<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();

        return response()->json($productos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');

        $producto->descripcion = $request->input('descripcion');
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
        }
        $producto->imagen = $name;
        $producto->save();

        return response()->json($producto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return response()->json($producto);
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
        $validatedData = $request->validate([
            'nombre' => 'required',
            'imagen' => 'required|image',
        ]);
        $producto = Producto::find($id);
        $file_path = public_path() . '/images/' . $producto->imagen;
        \File::delete($file_path);
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
            $producto->imagen = $name;
        }
        $producto->save();

        return response()->json($producto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $file_path = public_path() . '/images/' . $producto->imagen;
        \File::delete($file_path);
        $producto->delete();

        return "0";
    }
}
