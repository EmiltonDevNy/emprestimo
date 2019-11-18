@extends('adminlte::master')

@section('adminlte_css')
    @yield('css')
@stop

@section('classes_body', 'register-page')

@section('body')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
            <p class="login-box-msg">{{ __('adminlte::adminlte.register_message') }}</p>
            <form action="{{ url(config('adminlte.register_url', 'register')) }}" method="post">
                {{ csrf_field() }}

                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}"
                           placeholder="{{ __('adminlte::adminlte.full_name') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>

                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-group mb-3">
                    <input  type="text" name="data_nascimento" class="form-control date {{ $errors->has('dtnasc') ? 'is-invalid' : '' }}" value="{{ old('dtnasc') }}"
                           placeholder="Data de nascimento">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="far fa-calendar-alt"></span>
                        </div>
                    </div>

                    @if ($errors->has('dtnasc'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('dtnasc') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="cpf" class="form-control cpf {{ $errors->has('cpf') ? 'is-invalid' : '' }}" value="{{ old('cpf') }}"
                           placeholder="Insira seu cpf">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-id-card"></span>
                        </div>
                    </div>

                    @if ($errors->has('cpf'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('cpf') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="pais_nascimento" class="form-control {{ $errors->has('country_nasc') ? 'is-invalid' : '' }}" value="Brasil"
                           placeholder="País onde nasceu">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>

                    @if ($errors->has('country_nasc'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('country_nasc') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <select id="estados" name="estado_nascimento" class="form-control {{ $errors->has('state_nasc') ? 'is-invalid' : '' }}" value="{{ old('state_nasc') }}"></select>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>

                    @if ($errors->has('state_nasc'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('state_nasc') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="cidade_nascimento" class="form-control {{ $errors->has('city_nasc') ? 'is-invalid' : '' }}" value="{{ old('city_nasc') }}"
                           placeholder="Cidade onde nasceu">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>

                    @if ($errors->has('city_nasc'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('city_nasc') }}</strong>
                        </span>
                    @endif
                </div>







                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}"
                           placeholder="{{ __('adminlte::adminlte.email') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                           placeholder="{{ __('adminlte::adminlte.password') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                           placeholder="{{ __('adminlte::adminlte.retype_password') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-flat">
                    {{ __('adminlte::adminlte.register') }}
                </button>
            </form>
            <p class="mt-2 mb-1">
                <a href="{{ url(config('adminlte.login_url', 'login')) }}">
                    {{ __('adminlte::adminlte.i_already_have_a_membership') }}
                </a>
            </p>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    @stack('js')
    @yield('js')
    <script>
        var $selectEstados = $('#estados');

        $.getJSON('../resources/views/layouts/JSON/Estados.JSON', function (data) {
            console.log(data);
            $selectEstados.html('');

            for (var i = 0; i < data['estados'].length; i++) {
                $selectEstados.append('<option id="' + data['estados'][i]['ID'] + '">' + data['estados'][i]['Nome'] +'</option>')

            }
        })
    </script>
    <script>
        $(document).ready(function($){
            $('.date').mask('00/00/0000');
            $('.cep').mask('00000-000');
            $('.phone_with_ddd').mask('(00) 00000-0000');
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.cnpj').mask('00.000./0000-00', {reverse: true});
            $('.percent').mask('##0,00%', {reverse: true});
        });
    </script>
@stop
