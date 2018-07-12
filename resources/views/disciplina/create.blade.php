@extends('layout.app')
@section('title', 'Cadastro - Disciplina')
@section('main')
<div class="container">



<form action="{{ route('disciplina.store') }} " method="post">
        {{ csrf_field() }} 
        <div class="col-12 col-md-12 col-lg-8 div-form">
            <h2>Cadastro de Disciplinas</h2>
            <div class="form-group">
                <label for="nome">Digite o nome da Disciplina</label>
                <input class="form-control" type="text" name="nome"></input>
            </div>

            <button class="btn btn-primary" type="submit">Cadastrar disciplina</button>




        </div>
</form>
</div>
@endsection