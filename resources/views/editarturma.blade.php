@extends('layout.app', ["current" => "turma"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/turma/{{$tr->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nova Turma</label>
                <input type="text" class="form-control" name="nomeTurma" value="{{$tr->discplina}}"
                       id="nomeTurma" placeholder="Turma">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection