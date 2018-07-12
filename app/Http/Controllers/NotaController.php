<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Disciplina;

use App\Nota;

use App\Aluno;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nota.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disciplinas = Disciplina::get();
        $alunos = Aluno::orderBy('nome', 'asc')->get();

        return view('nota.create', compact('disciplinas', 'alunos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());

        $notas = $request->input('valor_nota');

        foreach($notas as $nota){

            $valor_nota[] = floatval(str_replace(',', '.', $nota));
        }
        //dd($valor_nota);

        /*$this->validate($request,[
            $valor_nota[0] => 'bail|required|', //regex:/^[0-9]?[0-9](,[0-9])?$/',
            $valor_nota[1] => 'bail|required|', //regex:/^[0-9]?[0-9](,[0-9])?$/',
            $valor_nota[2] => 'bail|required|' //regex:/^[0-9]?[0-9](,[0-9])?$/'
        ]);*/

        foreach($valor_nota as $nota){
            Nota::create([
                "valor_nota" => $nota,
                "aluno_id" => $request->input('aluno'),
                "disciplina_id" => $request->input('disciplina')
            ]);
        }

        return redirect()->route('nota.create');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
