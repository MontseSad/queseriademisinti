<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insumo;
use App\Http\Requests\InsumoRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Softon\SweetAlert\Facades\SWAL;  

class InsumoController extends Controller
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
        //alert()->success('Success Message','Title');
        $insumos = Insumo::orderBy('id', 'ASC')->paginate();
        return view('home', compact('insumos'));
    }

    public function create()
    {
        return view('insumo/create');
    }

    public function store(InsumoRequest $request)
    {
        $insumo = new Insumo();

        $insumo->nombre = $request->nombre;
        $insumo->unidad = $request->unidad;
        $insumo->cantidad = $request->cantidad;
        $insumo->precio_t = $request->precio_t;
        $insumo->precio_u = $request->precio_u;

        $insumo->save();

        return redirect('home')->with('info','Nuevo insumo: "'.$insumo->nombre.'" agregado');
    }

    public function edit($id)
    {
        $insumo = Insumo::find($id);
        return view('insumo/edit', compact('insumo'));
    }

    public function update(InsumoRequest $request, $id)
    {
        $insumo = Insumo::find($id);

        $insumo->nombre = $request->nombre;
        $insumo->unidad = $request->unidad;
        $insumo->cantidad = $request->cantidad;
        $insumo->precio_t = $request->precio_t;
        $insumo->precio_u = $request->precio_u;

        $insumo->save();

        return redirect('home')->with('info',$insumo->nombre.' actualizado');
    }

    public function show($id)
    {
        //Alert::warning('Warning Message', 'Optional Title');
        //Alert::warning('Are you sure?', 'you cannot go back')->persistent(true,false);
        //SWAL::message('Good Job','You have successfully logged In!','info');
        //alert()->message('Sweet Alert with message.');  
        $insumo = Insumo::find($id);
        //return $insumo;
        return view('insumo/show', compact('insumo'));
    }

    public function destroy($id)
    {
        $insumo = Insumo::find($id);
        //return ("xd no?");
        Alert::warning('Elemento eliminado', $insumo->nombre.' ya no existe');
        $insumo->delete();
        
        //$insumos = Prducto::orderBy('id', 'ASC')->paginate();
        return redirect('home')->with('info', 'Insumo "'.$insumo->nombre.'" eliminado');//;//, compact('insumos'))->with('info', 'Insumo eliminado');
    }
}
