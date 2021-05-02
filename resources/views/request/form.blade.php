@extends('layouts.master')

@section('content')
@php
    $formTitle = !empty($barang) ? 'Update' : 'New'
@endphp
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="block block-rounded block-transparent bg-gd-sea">
                <div class="block-content">
                    <div class="py-20 text-center">
                        <h1 class="font-w700 text-white mb-10">Order Catering</h1>
                        <h2 class="h4 font-w400 text-white-op">{{$formTitle}} Order Catering</h2>
                    </div>
                </div>
            </div>
            <!-- Default Elements -->
            <div class="block block-rounded">
                <div class="block-content">
                    <form action="{{ route('pemesanan.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-material form-material-primary ">
                                            <input type="text" value="{{Carbon\Carbon::parse($mytime)->translatedFormat('d F Y h:i:s')}}" disabled class="form-control" id="tanggal" name="tanggal" placeholder="Masukan Tanggal">
                                            <label for="no_indeks">Tanggal</label>
                                        </div>
                                    </div>
                                </div>                          
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-material form-material-primary ">
                                            <select class="form-control" name="shift" id="shift">
                                                <option value="">Pilih shift </option>
                                                <option value="shift 1">Shift 1</option>
                                                <option value="shift 2">Shift 2</option>
                                             
                                            </select>
                                            <label for="shift">Shift</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table  -->
                        <table class="table table-bordered">
                            <!-- Table head -->
                            <thead>
                            <tr>
                                <th>Select Karyawan</th>
                                <th>Nama</th>
                                <th>Role</th>
                            </tr>
                            </thead>
                            <!-- Table head -->
                        
                            <!-- Table body -->
                            <tbody>
                                @foreach ($user as $index => $d)   
                                <tr>
                                    <td >
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"  value="{{$d->id}}" name="checked[]" id="tableDefaultCheck1">
                                            <label  for="tableDefaultCheck1">{{$index + 1}}</label>
                                        </div>
                                    </td>
                                    <td>{{$d->name}}</td>
                                    <td>{{$d->getRoleNames()}}</td>
                                
                                </tr>
                                @endforeach
                            </tbody>
                            <!-- Table body -->
                        </table>
                        <!-- Table  -->
                        </div>
                        <div class="row justify-content-center my-15">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-alt-primary btn-block"> Save Order</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
    </div>
</div>
@endsection

