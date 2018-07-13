@extends('layout.app')
@section('title', 'Informações do aluno')
@section('main')


    
        
        
        <div class="container">
                <center><h1>Informações do aluno</h1></center><br>
                
            <div class="row">
                <div class="col-md-12 thumb_menu">
                    Matrícula: {{$aluno->matricula}}<br>
                    Nome: {{$aluno->nome}}<br>
                    Endereço: {{$aluno->endereco}}<br>
                    Bairro: {{$aluno->bairro}}<br>
                    CEP: {{$aluno->cep}}<br>
                    Cidade: {{$aluno->cidade}}<br>
                    UF: {{$aluno->uf}}<br>
                    E-mail: {{$aluno->email}}<br>
                    Data de entrada na escola: {{$aluno->data}}<br>
                    <h3>Notas</h3>

                   
                        @if($notas->count() != 0)
                            <table class="table">
                                <tr>
                                    <td>Disciplina</td>
                                    <td>Nota1</td>
                                    <td>Nota2</td>
                                    <td>Nota3</td>
                                    <td>Média</td>      
                                </tr>
                            @foreach($disciplinas as $key => $disciplina)
                                
                            
                                <tr>
                                <td>{{$disciplina->nome}}</td>
                                    
                            
                                
                                @foreach($notas as $nota)
                                    @if($disciplina->id == $nota->disciplina_id)
                                    <td>{{$nota->valor_nota}}</td>   
                                    @else                    
                                    @endif
                                
                                @endforeach
                                @if(isset($media[$key]) == true)
                                    <td>{{$media[$key]}}</td>  
                                @else
                                @endif 

                            
                                
                                
                                </tr>
                            @endforeach
                        </table>
                   
                        @else
                            <h5>----- Nenhuma nota cadastrada para esse aluno -----</h5>
                        @endif
                </div>         
            </div>
            <br>
            
            <a href="{{ route('aluno.index') }}"><h5>Voltar para alunos</h5></a>

            
        </div>
            
                  
                  
           
       
    
            
@endsection