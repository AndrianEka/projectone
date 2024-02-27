@extends('layouts.master')
@section('content')
<div class="container-fluid py-4">
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
                                        NO ID</th>
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
                                @foreach($pelanggan as $p)
                            <tbody>
                                <tr>
                                    <th class="mb-0 text-md text-center" scope="row">{{ $p->id }}</th>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-md text-center">{{ $p->nama }}</h6>
                                        </div>
                                    </td>
                                    <td class="mb-0 text-md text-center">{{ $p->alamat }}</td>
                                    <td class="mb-0 text-md text-center">{{ $p->no_hp }}</td>
                                    <td class="mb-0 text-md text-center">{{ $p->keterangan }}</td>
                                    <td class="align-middle ">
                                        <a href="" class="mb-0 text-sm  btn btn-warning">
                                            Edit
                                        </a>
                                        <a href="" class="mb-0 text-sm  btn btn-danger">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
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
