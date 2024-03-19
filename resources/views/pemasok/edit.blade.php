@extends('layouts.master')
@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Edit Pemasok</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Edit Pemasok</h6>
    </nav>
@endsection
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="text-center">Edit Data Pemasok</h6>
                    </div>
                    <div class="card-body px-3 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            @endif

                            <form action="/pemasok/{{ $pemasok->id }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input name="nama_pemasok" type="" value="{{ $pemasok->nama_pemasok }}"
                                        class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                    <input name="alamat" type="" value="{{ $pemasok->alamat }}" class="form-control"
                                        id="exampleFormControlInput1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">No HP</label>
                                    <input name="no_hp" type="" value="{{ $pemasok->no_hp }}" class="form-control"
                                        id="exampleFormControlInput1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                                    <input name="keterangan" type="" value="{{ $pemasok->keterangan }}"
                                        class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="text-center">
                                    <input class="btn btn-primary" type="submit">
                                    <input class="btn btn-primary" type="reset" value="reset">
                                    <a class="btn btn-primary" href='/pemasok' type="button">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
