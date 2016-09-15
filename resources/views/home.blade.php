@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h3>{{ $product->name }}</h3>
                        <h4>$ {{ number_format($product->price, 2) }} <small class="text-muted">USD</small></h4>
                        <img src="http://lorempixel.com/150/150" alt="lorempixel" class="img-circle img-responsive center-block">
                    </div>

                    <div class="panel-body" style="height: 80px; overflow-y: auto;">
                        {{ $product->description }}
                    </div>

                    <div class="panel-footer">
                        <a href="{{ route('product.add', ['code' => $product->code]) }}" class="btn btn-sm btn-flat btn-success">
                            <i class="fa fa-cart-plus"></i>&nbsp; Agregar
                        </a>
                        <a href="{{ route('product.details', ['code' => $product->code]) }}" class="btn btn-sm btn-flat btn-primary pull-right">
                            <i class="fa fa-list"></i>&nbsp; Detalles
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
