@extends('products.layout')

@section('content')

    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Laravel 8 CRUD Product - Pijar Camp </h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-success float-end" href="{{ route('products.create') }}"> Create New Product</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th width="280px">Action</th>
                </tr>

                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->nama_produk }}</td>
                    <td>{{ $product->keterangan }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->jumlah }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                            <a class="btn btn-warning" href="{{ route('products.edit',$product->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection



