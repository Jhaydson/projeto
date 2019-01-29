<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Turma;

class ControladorTurmas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
      $tr = Turma::all(); 
        return view('turma', compact('tr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novaturma');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Turma();
        $cat->discplina = $request->input('nomeTurma');
        $cat->save();
        
        return redirect('/turma');
        
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
        $tr = Turma::find($id);
        if(isset($tr)) {
            return view('editarturma', compact('tr'));
        }
        return redirect('/turma');
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
        $tr = Turma::find($id);
        if(isset($tr)) {
            $tr->discplina = $request->input('nomeTurma');
            $tr->save();
        }
        return redirect('/turma');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tr = Turma::find($id);
        if (isset($tr)) {
            $tr->delete();
        }
        return redirect('/turma');
    }
    
    public function indexJson()
    {
      
      $tr = Turma::all(); 
        return json_encode($tr);
    }
}
