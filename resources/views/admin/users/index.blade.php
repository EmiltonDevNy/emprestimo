{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Painel')

@section('content_header')
<h1><i class="fas fa-users"> Usuários</i></h1>
<h5><a type="button" href="{{route('register')}}" class="float-right">Adicionar Usuário <i class="fas fa-plus-circle fa-lg"></i></a></h5><p>

@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Usuários Cadastrados</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Nome do Usuário
                    </th>
                    <th style="width: 15%">
                        Contato
                    </th>
                    <th style="width: 30%">
                        Progresso do(s) Pagamento(s)
                    </th>
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($user as $user)
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            {{$user->name}}
                            {{-- nome do usuario --}}
                        </a>
                        <br>
                         Criado em:
                        <small class="date_time">
                           &nbsp;&nbsp;{{$user->created_at}}
                            {{-- data de criação do usuário --}}
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                (92) 99349-8646
                                {{-- contato --}}
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 3%">
                            </div>
                        </div>
                        <small>
                            3% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-danger">Em atraso</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" data-route="{{route('users.create')}}">
                            <i class="fas fa-folder">
                            </i>
                            Ver
                        </a>
                        <a class="btn btn-info btn-sm" data-route="{{route('users.create')}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editar
                        </a>
                        <a class="btn btn-danger btn-sm" data-route="{{route('users.create')}}">
                            <i class="fas fa-trash">
                            </i>
                            Excluir
                        </a>
                    </td>
                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</div>
<form id="form-item-create" class="hidden" method="POST">
    @csrf
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script>
    $(document).ready(function(){
        //enviar id por tag a
        $(".btn-item-create").on("click", function() {
            id = $(this).data("value");
            $("#form-item-create").attr({
                "action": $(this).attr("data-route")
            }).append(`
                    <input type="hidden" name="id" value="${id}">`).submit();
        });

    });
</script>
<script>
    $(document).ready(function($){
        $('.date').mask('00/00/0000');
        $('.cep').mask('00000-000');
        $('.phone_with_ddd').mask('(00) 00000-0000');
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.cnpj').mask('00.000./0000-00', {reverse: true});
        $('.percent').mask('##0,00%', {reverse: true});
        $('.date_time').mask('0000/00/00 00:00:00');
    });
</script>
@stop
