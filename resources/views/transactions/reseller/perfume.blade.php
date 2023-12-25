@extends('layout.home')
@section('title', 'Transaction Perfume')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaksi Parfume {{ Auth()->user()->name }}</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Content Column -->
            <div class="col-lg-12 mb-4">
                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Transaksi</h6>
                    </div>
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Tambah Transaksi
                        </button>
                        <div class="mt-4 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Aroma</th>
                                        <th scope="col">Support Barang </th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Tgl Transaksi</th>
                                        <th scope="col">Harga Modal</th>
                                        <th scope="col">Harga Jual</th>
                                        <th scope="col">Biaya Operasional</th>
                                        <th scope="col">Nama Konsumen</th>
                                        <th scope="col">Nomor Kontak</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form> 
                        @csrf
                    <div class="modal-body">
                        <div class="col">
                            <label> Nama Aroma</label>
                            <input type="text" name="name" id="name" class="form-control" />
                        </div>
                        <div class="col mt-2">
                            <label> Nama Support Barang</label>
                            <input type="text" name="name_support" id="name_support" class="form-control" />
                        </div>
                        <div class="col mt-2">
                            <label> Qty </label>
                            <input type="number" name="qty" id="qty" min="1" class="form-control"  />
                        </div>
                        <div class="col mt-2">
                            <label> Tgl Transaksi </label>
                            <input type="text" name="date_transaction" id="date_transaction" class="form-control"  />
                        </div>
                        <div class="col mt-2">
                            <label> Harga Modal </label>
                            <input type="number" name="capital_price" id="capital_price" min="1" class="form-control"  />
                        </div>
                        <div class="col mt-2">
                            <label> Harga Jual </label>
                            <input type="number" name="selling_price" id="selling_price" min="1" class="form-control"  />
                        </div>
                        <div class="col mt-2">
                            <label> Biaya Operasional </label>
                            <input type="number" name="operating_cost" id="operating_cost" min="1" class="form-control"  />
                        </div>
                        <div class="col mt-2">
                            <label> Nama Konsumen </label>
                            <input type="text" name="consumer_name" id="consumer_name" class="form-control"  />
                        </div>
                        <div class="col mt-2">
                            <label> Nomor Kontak </label>
                            <input type="text" name="consumer_phone" id="consumer_phone" class="form-control"  />
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
@section('pagespecificscripts')
   
@stop