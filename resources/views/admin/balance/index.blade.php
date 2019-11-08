{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>

    <ol class="breadcrumb">
        <li> <a href="">Dashboard</a></li>
        <li> <a href="">Saldo</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <a href="" class="btn btn-primary">Rec</a>
            <a href="" class="btn btn-primary"></a>
        </div>
        <div class="box-body">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>90,00<sup style="font-size: 20px">R$</sup></h3>

                <p>Seu Saldo</p>
              </div>
              <div class="icon">
                <i class="icon ion-md-cash"></i>
              </div>
              <a href="#" class="small-box-footer">Histórico<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@stop
