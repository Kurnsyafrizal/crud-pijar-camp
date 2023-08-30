@extends('products.layout')

@section('content')

<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Add New Product</h2>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card mt-3">
    <div class="card-header">
       Tambah Produk
    </div>
    <div class="card-body">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Produk :</strong>
                        <input type="text" name="nama_produk" class="form-control" placeholder="nama produk">
                    </div>
                </div>
        
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan :</strong>
                        <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Keterangan"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Harga :</strong>
                        <input type="text" name="harga" class="form-control" placeholder="Harga">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jumlah :</strong>
                        <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3 text-center">
                    <a class="btn btn-success" href="{{ route('products.index') }}"> Back</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection