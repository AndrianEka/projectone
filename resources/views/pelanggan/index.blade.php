@extends('layouts.master')
@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tabel Pelanggan</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Tabel Pelanggan</h6>
    </nav>
@endsection
@section('content')
    <div class="container-fluid py-0">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="text-center">Data pelanggan</h6>
                        <a href="/pelanggan/create" class="btn btn-primary">Add</a>
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
                                            Nama</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Alamat</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No HP</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Keteranganw</th>
                                        <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($pelanggan as $p)
                                <tbody>
                                    <tr>
                                        <th class="mb-0 text-md text-center" scope="row">{{ $i }}</th>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-md text-center">{{ $p->nama }}</h6>
                                            </div>
                                        </td>
                                        <td class="mb-0 text-md text-center">{{ $p->alamat }}</td>
                                        <td class="mb-0 text-md text-center">{{ $p->no_hp }}</td>
                                        <td class="mb-0 text-md text-center">{{ $p->keterangan }}</td>
                                        <td class="align-middle ">
                                            <a href="/pelanggan/{{ $p->id }}/edit"
                                                class="mb-0 text-sm  btn btn-warning">
                                                Edit
                                            </a>
                                            <form action="/pelanggan/{{ $p->id }}" method="POST">
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
