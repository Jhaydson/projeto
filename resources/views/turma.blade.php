@extends('layout.app', ["current" => "turma"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Turmas</h5>

@if(count($tr) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome da Turma</th>
                    
                </tr>
            </thead>
            <tbody>
    @foreach($tr as $t)
                <tr>
                    <td>{{$t->id}}</td>
                    <td>{{$t->discplina}}</td>
                    <td>
                        <a href="/turma/editar/{{$t->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/turma/apagar/{{$t->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/turma/novo" class="btn btn-sm btn-primary" role="button">Nova turma</a>
    </div>
</div>



@endsection