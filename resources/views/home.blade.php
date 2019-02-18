@extends('layouts.shared.app')
@section('content')
@section('title','Pagos')

<div class="container">
    <div class="row">
        <div class="col-md-7 pt-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto aspernatur consectetur corporis dolorum eaque, eveniet hic inventore minus nemo nisi nostrum possimus quaerat quia sapiente, sint suscipit temporibus veritatis.

        </div>
        <div class="col-md-5 pt-4" id="medios_pago">
            <div class="col-md-6">
                <img src="{{ url('img/logos_pago/Almacenes_exito_logo.svg.png')  }}" alt="" class="logo_pagos" width="100px">
            </div>
            <div class="col-md-6">
                <img src="{{ url('img/logos_pago/Baloto1.jpg')  }}" alt="" class="logo_pagos" width="100px">
            </div>
        </div>
    </div>
</div>

@endsection
