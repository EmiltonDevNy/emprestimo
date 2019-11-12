{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Painel')

@section('content_header')
    <h1>Parcelas</h1>
@stop

@section('content')
    <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Suas Parcelas</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Valor</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($balaces as $balance)
                    <tr>
                      <td><a href="#">{{$balance->id}}</a></td>
                      <td>{{$balance->name}}</td>
                      <td>{{number_format($balance->ammount), 2, ',', '.'}}</td>
                      <td><span class="badge badge-success">Shipped</span></td>
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
    <script> console.log('Hi!'); </script>
@stop
