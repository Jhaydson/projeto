@extends('layout.app', ["current" => "home"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Turmas</h5>
                    <p class="card=text">
                        Aqui você vai poder cadastrar todas as suas turmas
                    </p>
                    <a href="/turmas" class="btn btn-primary">Cadastro de Turmas</a>
                </div>
            </div>
           <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Professores</h5>
                    <p class="card=text">
                        Aqui você vai poder cadastrar todos os seus professores
                    </p>
                    <a href="/professores" class="btn btn-primary">Cadastro de Professores</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Alunos</h5>
                    <p class="card=text">
                        Aqui você vai poder cadastrar todos os seus alunos
                    </p>
                    <a href="/alunos" class="btn btn-primary">Cadastro de Alunos</a>
                </div>
            </div>
                      
        </div>
    </div>
</div>

@endsection