<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quesero;
use App\Http\Requests\QueseroRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectTo = 'admin.login';
        $this->middleware('auth:admins');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        return view('home');
    }*/

    public function createQuesero()
    {
        return view('administrators/createQuesero');
    }

    public function storequesero(QueseroRequest $request)
    {
        $queso = new Quesero();

        $queso->name = $request->name;
        $queso->lastname = $request->lastname;
        $queso->email = $request->email;
        $queso->password = bcrypt($request->password);
        $queso->birth = $request->birth;
        $queso->curp = $request->curp;

        $queso->save();

        return redirect('productos')->with('info','Nuevo producto: "'.$queso->name.'" agregado');
    }

    public function queseros_list()
    {
        $queseros = Quesero::orderBy('id', 'ASC')->paginate();
        return view('administrators.queseros_list', compact('queseros'));
        //return view('usuarios');
    }

    public function quesero_show($id)
    {
        $quesero = Quesero::find($id);
        //return $producto;
        return view('administrators/quesero_show', compact('quesero'));
    }

    public function quesero_edit($id)
    {
        $quesero = Quesero::find($id);
        return view('administrators/quesero_edit', compact('quesero'));
    }

    public function quesero_update(QueseroRequest $request, $id)
    {
        $quesero = Quesero::find($id);

        $quesero->name = $request->name;
        $quesero->lastname = $request->lastname;
        $quesero->curp = $request->curp;
        $quesero->birth = $request->birth;
        $quesero->password = bcrypt($request->password);
        $quesero->email = $request->email;

        $quesero->save();

        return redirect('Queseros')->with('info',$quesero->name.' actualizado');
    }

    public function quesero_destroy($id)
    {
        $quesero = Quesero::find($id);
        $quesero->delete();
        
        //$productos = Prducto::orderBy('id', 'ASC')->paginate();
        return redirect('administrators.queseros_list')->with('info', 'Quesero "'.$producto->name.'" eliminado');//;//, compact('productos'))->with('info', 'Producto eliminado');
    }

    /*public function productos()
    {
        return view('productos');
    }

    public function storeProductos(Request $request)
    {
        $producto = new producto();
        $producto->nombre = $request->nombre;
        $producto->coste_in = $request->coste_in;
        $producto->coste_out = $request->coste_out;
        $producto->receta = $request->receta;
        $producto->descripcion = $request->descripcion;
        $producto->save();

        return $producto;
    }

    public function destroyProducto($id)
    {
        $producto = producto::find($id);
        $producto->delete();
    }

    public function lotes()
    {
        return view('lotes');
    }

    public function adduser()
    {
        return view('adduser');
    }
    public function ventas()
    {
        return view('ventas');
    }
    public function compras()
    {
        return view('compras');
    }*/
    /**
     * surtimiento
     * reportes ¿?
     * estadisticas ¿?
     */
}
