@extends('layout.app')
@section('title', 'Disciplinas')
@section('main')


    
        
        
        <div class="container">
                <center><h1>Disciplinas</h1></center><br>
                <a href="{{ route('disciplina.create')}}"><h5>Cadastrar novo</h5></a><br>
            <div class="row">

                @if($disciplinas->count() != 0)
                    @foreach($disciplinas as $disciplina)
                    <div class="col-md-4 thumb_menu">
                    <a href="{{ route('disciplina.show', $disciplina) }}"><h5>{{$disciplina->nome}}</h5></a>
                    </div> 
                    @endforeach
                @else
                    <div class="col-md-12 thumb_menu">Nenhuma disciplina foi encontrada</div>
                @endif 
                
            
                        
            </div>
            <br>
            <a href="{{ route('menu') }}"><h5>Voltar para menu</h5></a>
        </div>
    
            
@endsection