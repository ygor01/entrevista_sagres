@extends('layout.app')
@section('title', 'Disciplinas')
@section('main')


    
        
        
        <div class="container">
                <center><h1>Disciplinas</h1></center><br>
                
            <div class="row">
                @foreach($disciplinas as $disciplina)
                <div class="col-md-4 thumb_menu">
                <a href="{{ route('disciplina.show', $disciplina) }}"><h5>{{$disciplina->nome}}</h5></a>
                </div> 
                @endforeach
            
                        
            </div>
            <br>
            <a href="{{ route('menu') }}"><h5>Voltar para menu</h5></a>
        </div>
    
            
@endsection