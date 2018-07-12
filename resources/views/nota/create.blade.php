@extends('layout.app')
@section('title', 'Cadastro - Nota')
@section('main')
<div class="container">



<form action="{{ route('nota.store') }} " method="post">
        {{ csrf_field() }} 
        <div class="col-12 col-md-12 col-lg-8 div-form">
            <h2>Cadastro de Notas</h2>

            <div class="form-group">
                <label for="disciplina">Selecione a disciplina</label>
                <select class="form-control" name="disciplina">
                    @if($disciplinas->count() == 0)
                        <option value="">Nenhuma disciplina foi encontrada</option>
                    @else    
                        @foreach($disciplinas as $disciplina)
                            <option value="{{$disciplina->id}}">{{$disciplina->nome}}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="form-group">
                <label for="aluno">Selecione o aluno</label>
                <select class="form-control" name="aluno">
                    @if($alunos->count() == 0)
                        <option value="">Nenhum aluno foi encontrado</option>
                    @else                            
                        @foreach($alunos as $aluno)
                            <option value="{{$aluno->id}}">{{$aluno->nome}}</option>
                        @endforeach                            
                    @endif
                            
                        
                    </select>
                </div>

            <div class="form-group">
                <label for="valor_nota">Digite a Nota 1</label>
                <input class="form-control" type="text" name="valor_nota[]"></input>
            </div>

            <div class="form-group">
                <label for="valor_nota">Digite a Nota 2</label>
                <input class="form-control" type="text" name="valor_nota[]"></input>
            </div>

            <div class="form-group">
                <label for="valor_nota">Digite a Nota 3</label>
                <input class="form-control" type="text" name="valor_nota[]"></input>
            </div>

            <button class="btn btn-primary" type="submit">Cadastrar disciplina</button>
            <br><br>
            <a href="{{ route('menu') }}"><h5>Voltar para menu</h5></a>




        </div>
</form>
</div>
@endsection