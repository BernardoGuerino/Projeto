@extends('layouts.app')

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Login efetuado!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
