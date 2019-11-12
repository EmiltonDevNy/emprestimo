{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Painel')

@section('content_header')
<h1>Contratos</h1>
@stop

@section('content')
@forelse ($balances as $balance)
<div class="box">
    <div class="box-header">
            <h2>{{$balance->name}}</h2>
    </div>
    @php $loans = $balance->loans @endphp
    @foreach ($loans as $loan)
    <div class="box-body">
        <div class="small-box bg-info">
            <div class="inner">
                <h3><sup style="font-size: 20px">%</sup>{{ number_format($loan->interest*100, 5, ',', '.')}}</h3>
                <p class="text-uppercase">{{$loan->name}}</p>
                {{-- <p class="text-uppercase">{{$date_payment}}</p> --}}
            </div>
            <div class="icon">
                <i class="icon ion-md-cash"></i>
            </div>
            <a type="button" data-value="{{$loan->id}}" data-route="{{ route('admin.parcel')}}" class="small-box-footer btn-item-create">Consultar Parcela(s) nesta conta<i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endforeach
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

{{-- @php
foreach ($balances as $balance) {
    echo "<hr>{$balance->name}";
        $loans = $balance->loans;
    foreach ($loans as $loan) {
        echo "<p>{$loan->interest} <-> {$loan->date_payment} <-> {$loan->name}";
        echo "<hr>";
    }
}
@endphp --}}

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
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
@stop
