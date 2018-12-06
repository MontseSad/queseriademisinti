<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Requests\ProductoRequest;

class ProductoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admins');
    }

    public function index()
    {
        $productos = Producto::orderBy('id', 'ASC')->paginate();
        return view('productos', compact('productos'));
    }

    public function create()
    {
        return view('producto/create');
    }

    public function store(ProductoRequest $request)
    {
        $producto = new Producto();

        $producto->nombre = $request->nombre;
        $producto->receta = $request->receta;
        $producto->precio_in = $request->precio_in;
        $producto->precio_out = $request->precio_out;
        $producto->descripcion = $request->descripcion;

        $producto->save();

        return redirect('productos')->with('info','Nuevo producto: "'.$producto->nombre.'" agregado');
    }

    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('producto/edit', compact('producto'));
    }

    public function update(ProductoRequest $request, $id)
    {
        $producto = Producto::find($id);

        $producto->nombre = $request->nombre;
        $producto->receta = $request->receta;
        $producto->precio_in = $request->precio_in;
        $producto->precio_out = $request->precio_out;
        $producto->descripcion = $request->descripcion;

        $producto->save();

        return redirect('productos')->with('info',$producto->nombre.' actualizado');
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        //return $producto;
        return view('producto/show', compact('producto'));
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        
        //$productos = Prducto::orderBy('id', 'ASC')->paginate();
        return redirect('productos')->with('info', 'Producto "'.$producto->nombre.'" eliminado');//;//, compact('productos'))->with('info', 'Producto eliminado');
    }
}
