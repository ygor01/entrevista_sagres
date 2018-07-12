<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Aluno;

use App\Nota;

use DB;

use App\Disciplina;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::orderBy('nome', 'asc')->get();

        //dd($alunos);
        return view('aluno.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aluno.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->except('data'));
        $data = date("Y-m-d", strtotime($request->input('data')));
        $t = Aluno::create(
            array_merge($request->except('data'), ['data' => $data])
        );

        return view('aluno.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        //dd($aluno->id);
        $disciplinas = Disciplina::get();

        $notas = Nota::select('disciplinas.nome as disciplina', 'disciplinas.id as disciplina_id', 'notas.valor_nota')->where('aluno_id', $aluno->id)
        ->leftJoin('disciplinas', 'disciplinas.id', '=',  'notas.disciplina_id')
        ->leftJoin('alunos', 'alunos.id', '=',  'notas.aluno_id')
        ->get();

        //select aluno_id,disciplina_id ,sum(valor_nota) / 3 as media   from notas  group by aluno_id,disciplina_id 

        

        $soma_nota = DB::table('notas')
        ->select('aluno_id', 'disciplina_id', DB::raw('sum(valor_nota) / 3 as media'))->where('aluno_id', $aluno->id)->groupBy('aluno_id', 'disciplina_id')->get();
        //$notas = Nota::with('alunos')->get();
        //dd($soma_nota);
        foreach($soma_nota as $nota){
            $media[] = round($nota->media, 2);
        }
        //dd($t);
        return view('aluno.show', compact('aluno','disciplinas', 'notas', 'media'));
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
