@extends('layout.app')
@section('title', 'Alunos')
@section('main')


    
        
        
        <div class="container">
                <center><h1>Alunos</h1></center><br>
                <a href="{{ route('aluno.create')}}"><h5>Cadastrar novo</h5></a><br>
            <div class="row">
                @if($alunos->count() != 0)
                @foreach($alunos as $aluno)
                    
                    <div class="col-md-4 thumb_menu">
                    <a href="{{ route('aluno.show', $aluno) }}"><h5>{{$aluno->nome}}</h5></a>
                    </div>                     
                @endforeach
                @else
                <div class="col-md-12 thumb_menu">Nenhum aluno foi encontrado</div>
                @endif 

                
            
                        
            </div>
            <br>
            <a href="{{ route('menu') }}"><h5>Voltar para menu</h5></a>
        </div>
    
            
@endsection