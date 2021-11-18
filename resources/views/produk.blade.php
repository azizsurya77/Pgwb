@extends('adminapp.master')

@section('content')



<div class="row container">
    
    <div class="col-12">
      <div class="bagiantambah mb-3">
        <button href="" class="btn btn-flat btn-primary" class="">
          Tambah
        </button>
      </div>
      
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Responsive Hover Table</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>jumlah</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($getProduk as $item)
              <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $item->name}}</td>
                <td>{{ $item->description}}</td>
                <td>{{ $item->stock}}</td>
                <td>{{ $item->price}}</td>
                <td><a href="{{route('produk.delete', $item->id)}}" class="btn btn-flat btn-danger" onclick="return confirm('Delete data?')">Hapus</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
    
@endsection