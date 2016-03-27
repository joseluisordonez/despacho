<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/*mandamos llamar al modelo caso*/
use App\caso;

// Para los mensajes de validacion 
use Laracasts\Flash\Flash;

//Para manipular las fechas
use Carbon\Carbon;


class CasosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $x='Casos Activos'; 
        $casos = Caso::orderBy('fecha','ASC')->where('status', 'activo')->paginate(50);
        return view ('admin')
            ->with('casos',$casos)
            ->with('x',$x);
    }
    public function casosinactivos()
    {    
        $x='Casos Terminados';
        $casos = Caso::orderBy('fecha','ASC')->where('status', 'inactivo')->paginate(100);
        return view ('admin')
            ->with('casos',$casos)
            ->with('x',$x);
    }
    public function casostodos()
    {    
        $x='Todos los Casos';
        $casos = Caso::orderBy('fecha','ASC')->paginate(100);
        return view ('admin')
            ->with('casos',$casos)
            ->with('x',$x);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caso = new Caso ($request ->all());
        $this->validate ($request,[
            'codigo'    =>  'required|unique:casos',
            'nombre'    =>  'required',
            'fecha'     =>  'required']);

        $caso->save();

        Flash::success('Caso a nombre de '. $caso->nombre .' registrada exitosamente!!');
        return redirect()->route('admin.casos.index');
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
        $caso = caso::find($id);
        return view('edit')->with('caso',$caso);
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
        $caso = caso::find($id);
        $this->validate ($request,[
            'codigo'    =>  'required|unique:casos,codigo,'.$id,
            'nombre'    =>  'required',
            'fecha'     =>  'required']);
        
        $caso->fill($request->all());

        $caso->save();

        Flash::success('Caso '. $caso->nombre .' actualizado exitosamente!!');
        return redirect()->route('admin.casos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caso = Caso::find($id);
        $caso->delete();
        Flash:: success('Caso '. $caso->codigo .' fue eliminado exitosamente!!');
        return redirect()->route('admin.casos.index');
    }
}
