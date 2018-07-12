@extends('layout.app')
@section('title', 'Menu')
@section('main')


    
        
        
        <div class="container">
                <center><h1>Selecione uma das opções</h1></center><br>
                
            <div class="row">
            
                <div class="col-md-4 thumb_menu">
                    <a href="{{ route('aluno.index') }}"><h2>Alunos</h2></a>
                </div> 
            
                
                <div class="col-md-4 thumb_menu">
                    <a href="{{ route('disciplina.index') }}"><h2>Disciplinas</h2></a>
                </div>  

                <div class="col-md-4 thumb_menu">
                    <a href="{{ route('nota.create') }}"><h2>Notas</h2></a>
                </div>  
            
                        
            </div>
                  
                  
           
        </div>
    
            
@endsection