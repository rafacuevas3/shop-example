@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-widget widget-user-2">
                    <div class="widget-user-header bg-teal">
                        <h3 class="widget-user-username">Detalles de la compra</h3>
                    </div>
                    <div class="box-footer no-padding">
                        <ul class="nav nav-stacked">
                            @foreach(Cart::content() as $product)
                                <li>
                                    <a href="#">
                                        <button type="button" class="btn-link" onclick="window.location.href = '{{ route('cart.remove', ['id' => $product->rowId]) }}';">
                                            <i class="fa fa-remove" style="color: #333333;"></i>
                                        </button>
                                        ({{ $product->qty }}) {{ $product->name }}
                                        <span class="pull-right">$ {{ number_format($product->price, 2) }}</span>
                                    </a>
                                </li>
                            @endforeach

                            <li>
                                <a href="#">
                                    Total:
                                    <span class="pull-right">$ {{ Cart::subtotal() }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="{{ route('cart.trash') }}" class="btn btn-flat btn-danger">
                    <i class="fa fa-ban"></i>&nbsp; Vaciar carro
                </a>
                <a href="#" class="btn btn-flat btn-success pull-right">
                    <i class="fa fa-dollar"></i>&nbsp; Pagar
                </a>
            </div>
        </div>
    </div>
@endsection