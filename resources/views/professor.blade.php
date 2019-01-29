@extends('layout.app', ["current" => "professor" ])

@section('body')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Professores</h5>

        <table class="table table-ordered table-hover" id="tabelaProdutos">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Disciplina</th>
                    <th>Turma</th>
                    
                </tr>
            </thead>
            <tbody>
               
            </tbody>
        </table>
       
    </div>
    <div class="card-footer">
        <button class="btn btn-sm btn-primary" role="button" onClick="novoProfessor()">Novo Professor</a>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="dlgProfessor">
    <div class="modal-dialog" role="document"> 
        <div class="modal-content">
            <form class="form-horizontal" id="formProduto">
                <div class="modal-header">
                    <h5 class="modal-title">Novo Professor</h5>
                </div>
                <div class="modal-body">

                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome do professor</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nome" placeholder="Nome do professor">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="disciplina" class="control-label">Disciplina</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="disciplina" placeholder="Disciplina">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="turma" class="control-label">Turma</label>
                        <div class="input-group">
                            <select class="form-control" id="turma" >
                            </select>    
                        </div>
                    </div>                

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
     
     
     
@section('javascript')
<script type="text/javascript">
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });
    
    function novoProfessor() {
        $('#id').val('');
        $('#nome').val('');
        $('#disciplina').val('');
        $('#turma').val('');
        $('#dlgProfessor').modal('show');
    }
    
     function carregarTurma() {
        $.getJSON('/api/turma', function(data) { 
          console.log(data);
            for(i=0;i<data.length;i++) {
                opcao = '<option value ="' + data[i].id + '">' + 
                    data[i].disciplina + '</option>';
                $('#turma').append(opcao);
            }
        });
    }
    $(function(){
        carregarTurma();

    })
</script>
@endsection
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     