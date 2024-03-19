@extends('layouts.master')
@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Produk</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Produk</h6>
    </nav>
@endsection
@section('content')
    <div class="container-fluid py-0">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="text-center">Data Produk</h6>
                        <a href="/produk/create" class="btn btn-primary">Add</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            NO</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            NO ID</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Produk</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Jumlah Barang</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Harga Pokok</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Harga Jual</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Total Harga</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Keuntungan</th>
                                        <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($produk as $p)
                                <tbody>
                                    <tr>
                                        <th class="mb-0 text-md text-center" scope="row">{{ $i }}</th>
                                        <th class="mb-0 text-md text-center" scope="row">{{ $p->id }}</th>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-md text-center">{{ $p->nama_produk }}</h6>
                                            </div>
                                        </td>
                                        <td class="mb-0 text-md text-center">{{ $p->jumlah_barang }}</td>
                                        <td class="mb-0 text-md text-center">{{ $p->harga_pokok }}</td>
                                        <td class="mb-0 text-md text-center">{{ $p->harga_jual }}</td>
                                        <td class="mb-0 text-md text-center">{{ $p->total_harga }}</td>
                                        <td class="mb-0 text-md text-center">{{ $p->keuntungan }}</td>
                                        <td class="align-middle ">
                                            <a href="/produk/{{ $p->id }}/edit"
                                                class="mb-0 text-sm  btn btn-warning">
                                                Edit
                                            </a>
                                            <form action="/produk/{{ $p->id }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="submit" class="mb-0 text-sm  btn btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php $i++; ?>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
