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
                <input class="form-control" type="text" name="matricula" required></input>
            </div>

            <div class="form-group">                   
                <label for="nome">Nome aluno</label>
                <input class="form-control" type="text" name="nome" required></input>
            </div>

            <div class="form-group">            
                <label for="endereco">Endereço</label>
                <input class="form-control" type="text" name="endereco" required></input>
            </div>

            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input class="form-control" type="text" name="bairro" required></input>
            </div>

            <div class="form-group">
                <label for="cep">CEP</label>
                <input class="form-control" type="text" name="cep" required></input>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input class="form-control" type="text" name="cidade" required></input>
            </div>

            <div class="form-group">
                <label for="uf">UF</label>
                <select class="form-control" name="uf" required>
                    <option value="" disabled>Selecione UF</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" type="text" name="email" required></input>
            </div>

            <div class="form-group">
                <label for="data">Data de entrada na Escola</label>
                <input class="form-control" type="text" placeholder="dd/mm/YYYY" name="data" required></input>
            </div>

            <button class="btn btn-primary" type="submit">Cadastrar Aluno</button>
            <br><br>
            <a href="{{ route('aluno.index') }}"><h5>Voltar para alunos</h5></a>
            


        </div>
</form>
</div>
@endsection