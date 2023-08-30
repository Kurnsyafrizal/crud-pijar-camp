@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-5">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
           Detail Produk : {{ $product->nama_produk }} <a class="btn btn-success float-end" href="{{ route('products.index') }}"> Back</a>
        </div>
        <div class="card-body">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name :</strong>
                    {{ $product->nama_produk }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan :</strong>
                    {{ $product->keterangan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga :</strong>
                    {{ $product->harga }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah :</strong>
                    {{ $product->jumlah }}
                </div>
            </div>
        </div>
    </div>

@endsection