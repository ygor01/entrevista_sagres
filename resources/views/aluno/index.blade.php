@extends('layout.app')
@section('title', 'Alunos')
@section('main')


    
        
        
        <div class="container">
                <center><h1>Alunos</h1></center><br>
                
            <div class="row">
                @foreach($alunos as $aluno)
                <div class="col-md-4 thumb_menu">
                <a href="{{ route('aluno.show', $aluno) }}"><h5>{{$aluno->nome}}</h5></a>
                </div> 
                @endforeach
            
                        
            </div>
            <br>
            <a href="{{ route('menu') }}"><h5>Voltar para menu</h5></a>
        </div>
    
            
@endsection