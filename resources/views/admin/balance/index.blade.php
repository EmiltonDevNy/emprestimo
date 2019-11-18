{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
<h1 ><i class="fas fa-money-bill-wave"></i> Saldo</i></h1>
<h5><a type="button" data-route="{{route('users.create')}}" class="float-right">Adicionar Usuário <i class="fas fa-plus-circle fa-lg"></i></a></h5><p>


<ol class="breadcrumb">
    {{-- <li> <a href="">Dashboard</a></li>
        <li> <a href="">Saldo</a></li> --}}
</ol>
@stop

@section('content')
@forelse ($balances as $balance)
<div class="box">
    <div class="box-header">
        <a type="button" data-value="{{$balance->id}}" ><i class="fas fa-trash-alt fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a type="button" data-value="{{$balance->id}}" ><i class="fas fa-edit fa-2x"></i></a>
        </div>
    <div class="box-body">
        <div class="small-box bg-success">
            <div class="inner">
                <h3><sup style="font-size: 20px">R$</sup>{{ number_format($balance->amount, 2, ',', '.')}}</h3>
                <p class="text-uppercase">{{$balance->name}}</p>
            </div>
            <div class="icon">
                <i class="icon ion-md-cash"></i>
            </div>
            <a type="button" data-value="{{$balance->id}}" data-route="{{ route('admin.loan')}}" class="small-box-footer btn-item-create">Consultar Empréstimo(s) nesta conta<i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<form id="form-item-create" class="hidden" method="POST">
    @csrf
</form>
@empty
<tr>
    <td colspan="3"></td>
    <h2>Nada encontrado!</h2>
</tr>
@endforelse

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
@stop

@section('js')
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
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@stop
