@extends('layout.app')
@section('title', 'Informações disciplina')
@section('main')


    
        
        
        <div class="container">
                <center><h1>Informações disciplina</h1></center><br>
                
            <div class="row">
                <div class="col-md-12 thumb_menu">
                    Nome da disciplina:  {{$disciplina->nome}}
                </div>         
            </div>
            <br>
            <a href="{{ route('disciplina.index') }}"><h5>Voltar para disciplinas</h5></a>
        </div>
            
                  
                  
           
       
    
            
@endsection