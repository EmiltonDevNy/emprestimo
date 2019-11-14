{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Painel')

@section('content_header')
<h1><i class="fas fa-calendar-alt"> Parcelas</i></h1>
@stop

@section('content')
<a type="button" onclick="history.go(-1);" class="voltar"><i class="fas fa-arrow-circle-left fa-lg">Voltar</i></a>
<div class="card">
    <!-- /.card-header -->
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Status</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($parcels as $parcel)
                    <tr>
                        <td><a href="#">{{$parcel->id}}</a></td>
                        <td>{{$parcel->name}}</td>
                        <td>{{$parcel->description}}</td>
                        <td>{{number_format($parcel->ammount), 2, ',', '.'}}</td>
                        <td>
                            <span class="{{($parcel->status == 1 ? 'badge badge-success' : ($parcel->status == 2 ? 'badge badge-danger' : ($parcel->status == 3 ? 'badge badge-warning' : 'badge badge-info')))}}">
                                {{($parcel->status == 1 ? 'PAGO' : ($parcel->status == 2 ? 'À VENCER' : ($parcel->status == 3 ? 'VENCIDA' : 'PARCIALMENTE PAGA')))}}
                            </span>
                        </td>
                        <td>
                            {{$parcel->status}}
                        </td>
                    </tr>

                    @empty
                    <tr>
                        <td colspan="3"></td>
                        <h2>Nada encontrado!</h2>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        {{-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a> --}}
        <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Ver todas as parcelas</a>
    </div>
    <!-- /.card-footer -->
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
