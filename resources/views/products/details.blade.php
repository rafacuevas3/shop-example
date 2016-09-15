@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3>{{ $product->name }}</h3>
                    <h4>$ {{ number_format($product->price, 2) }} <small class="text-muted">USD</small></h4>
                    <img src="http://lorempixel.com/250/250" alt="lorempixel" class="img-circle img-responsive center-block">
                </div>

                <div class="panel-body">
                    {{ $product->description }}
                </div>

                <div class="panel-footer">
                    <form action="#" class="form-inline">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-flat btn-default" @click="calculateQuantity(true)">
                                        <i class="fa fa-arrow-up"></i>
                                    </button>
                                </div>
                                
                                <input type="text" class="form-control text-center" v-model="quantity">
                                
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-flat btn-default" @click="calculateQuantity(false)">
                                        <i class="fa fa-arrow-down"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('product.add', ['code' => $product->code]) }}/@{{ quantity }}" class="btn btn-flat btn-success">
                                <i class="fa fa-cart-plus"></i>&nbsp; Agregar (@{{ quantity }})
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{!! asset('js/vue.js') !!}"></script>
    <script type="text/javascript">
        new Vue({
            el: 'body',
            data: {
                quantity: 1
            },
            methods: {
                calculateQuantity: function (flag) {
                    if (!flag && this.quantity > 0) {
                        this.quantity--;
                    } else if (flag) {
                        this.quantity++;
                    }
                }
            }
        });
    </script>
@endsection