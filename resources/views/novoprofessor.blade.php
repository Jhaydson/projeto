@extends('layout.app', ["current" => "professor"])

@section('body')

<div class="card border">
  <div class="card-body">
    <form action="/turma" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Novo Professor</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Turma">
      </div>
      <div class="form-group">
        <label for="name">Disciplina</label>
        <input type="text" class="form-control" name="disciplina" id="nome" placeholder="Turma">
      </div>
      <div class="form-group">
        <label for="name">Turma</label>
        <select>
          <option name="turma">Selecione um turma</option>
          
        </select>
      </div>

      <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
      <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
    </form>
  </div>
</div>

@endsection