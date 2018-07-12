@extends('layout.app')
@section('title', 'Cadastro - Aluno')
@section('main')
<div class="container">



<form action="{{ route('aluno.store') }} " method="post">
        {{ csrf_field() }} 
        <div class="col-12 col-md-12 col-lg-8 div-form">
            <h2>Cadastro de Alunos</h2>
            <div class="form-group">
                <label for="matricula">Matrícula</label>
                <input class="form-control" type="text" name="matricula"></input>
            </div>

            <div class="form-group">                   
                <label for="nome">Nome aluno</label>
                <input class="form-control" type="text" name="nome"></input>
            </div>

            <div class="form-group">            
                <label for="endereco">Endereço</label>
                <input class="form-control" type="text" name="endereco"></input>
            </div>

            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input class="form-control" type="text" name="bairro"></input>
            </div>

            <div class="form-group">
                <label for="cep">CEP</label>
                <input class="form-control" type="text" name="cep"></input>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input class="form-control" type="text" name="cidade"></input>
            </div>

            <div class="form-group">
                <label for="uf">UF</label>
                <input class="form-control" type="text" name="uf"></input>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" type="text" name="email"></input>
            </div>

            <div class="form-group">
                <label for="data">Data de entrada na Escola</label>
                <input class="form-control" type="text" placeholder="dd/mm/YYYY" name="data"></input>
            </div>

            <button class="btn btn-primary" type="submit">Cadastrar Aluno</button>




        </div>
</form>
</div>
@endsection