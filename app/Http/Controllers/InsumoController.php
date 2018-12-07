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
        //Ya sirve este pedo pero soy muy mamador como para dejarlo así
        //bueno quizá por esta vez simón ;v
        $insumos = Insumo::where('estado', '=', 'PENDIENTE')->orderBy('id', 'ASC')->paginate();
        $disponibles = Insumo::where('estado', '=', 'DISPONIBLE')->orderBy('id', 'ASC')->paginate();

        /**
         * // Segunda opción, solo se hace una consulta 
        * $insumos = Insumo::orderBy('id', 'ASC')->paginate();
        * // pero pierde las propiedades de ser modelo(Insumo y pasa a ser un objeto tipo Insumo) 
        * $disponibles=array();
        * $pendientes=array();
        * foreach ($insumos as $insumo)
        * {
        *     if($insumo->estado == 'DISPONIBLE')
        *         array_push($disponibles, $insumo);
        *     else if($insumo->estado == 'PENDIENTE')
        *         array_push($pendientes, $insumo);
        * }
        * $insumos = $pendientes; */
        return view('home', compact(['insumos', 'disponibles']));
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
        $insumo->estado = $request->estado;

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
        $insumo->estado = $request->estado;

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
