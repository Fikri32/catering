@extends('layouts/master')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="block block-rounded block-transparent bg-gd-sea">
                <div class="block-content">
                    <div class="py-20 text-center">
                        <h1 class="font-w700 text-white mb-10">Order Catering</h1>
                        <h2 class="h4 font-w400 text-white-op">History</h2>
                    </div>
                </div>
            </div>
            <!-- Default Elements -->
            <div class="block block-rounded">
                <div class="block-content bg-body-light">
                    <!-- Search -->
                {{-- @if (Auth::user()->hasrole('admin')) --}}
                <a href="{{route('barang.create')}}" class="btn btn-primary mb-2">Create Order</a>
                <!-- END Search -->
                {{-- @endif --}}
                 
                </div>
                <div class="block-content">
                    <!-- Products Table -->
                    {{-- @if($surat_data <> '') --}}
                    <table class="js-table-checkable table table-hover js-table-checkable-enabled">
                        <thead>
                            <tr>
                                <th>No. Indeks</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $index => $d)
                            <tr>
                                <td>
                                    {{$index + 1}}
                                </td>
                                <td>{{$d->nama}}</td>
                                <td>
                                    <a href="{{route('barang.edit',$d->id)}}" class="btn btn-warning">edit</a>
                                    {!! Form::open(['url' => 'barang/'. $d->id,'class' => 'delete','style' => 'display:inline-table']) !!}
                                    {!! Form::hidden('_method','DELETE') !!}
                                    {!! Form::submit('delete',['class' => 'btn btn-danger'])!!}
                                    {!! Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- END Products Table -->
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
    </div>
</div>
@stop

@push('scripts')
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>
@endpush
