@extends('layouts/master')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="block block-rounded block-transparent bg-gd-sea">
                <div class="block-content">
                    <div class="py-20 text-center">
                        <h1 class="font-w700 text-white mb-10">Get Order Catering</h1>
                        <h2 class="h4 font-w400 text-white-op"></h2>
                    </div>
                </div>
            </div>
            <!-- Default Elements -->
            <div class="block block-rounded">
                <div class="block-content bg-body-light">
        
                </div>
                <div class="block-content">
                  @foreach ($pemesanan as $d)
                  <br>
                    <div id="accordion">
                    
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                            
                              <button class="btn btn-link bg-body-light" data-toggle="collapse" data-target="#collapse-{{ $d->id }}" aria-expanded="true" aria-controls="collapseOne">
                                {{Carbon\Carbon::parse($d->created_at)->translatedFormat('d F Y h:i:s')}}
                              </button>
                             
                            </h5>
                          </div>

                          <div id="collapse-{{ $d->id }}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                              <br>
                              <table class=" table table-hover table-bordered">
                                <thead class="text-center">
                                <tr>
                                    <th rowspan="3">No</th>
                                    <th rowspan="3">DEPARTEMEN</th>
                                    <th rowspan="3">PERSONIL</th>
                                    <th colspan="8" >JADWAL MAKAN</th>
                                </tr>
                               
                                <tr>
                                  
                                  <th>GS</th>
                                  <th colspan="4">Shift 1</th>
                                  <th colspan="4">Shift 2</th>
                                </tr>
                               
                                <tr>
                                  <th>12.00</th>
                                  <th>11.00</th>
                                  <th>10.30</th>
                                  <th>14.30</th>
                                  <th>15.00</th>
                                  <th>18.00</th>
                                  <th>22.00</th>
                                  <th>22.30</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @for ($i = 0; $i < count($data['dep']); $i++)
                                      
                                 
                                  <tr class=" text-center">
                                    <td>{{$i + 1}}</td>
                                    <td>{{$dep[$i]->nama}}</td>
                                    <td>{{$personil[$i]}}</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                @endfor
                                </tbody>
                            </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
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
