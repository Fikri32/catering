@role('Dept Head')
<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a class="" href="{{route('home')}}" class=""><i class="si si-compass"></i><span class="sidebar-mini-hide">Beranda</span></a>
        </li>
        @php
            $today = (Carbon\Carbon::now())
            
        @endphp
       
        {{-- @if ($today->hour >= 16 )
        <li class="">
            <a class="popup"><i class="si si-social-dropbox mr-5"></i>Catering Request</a>
         
        </li>
        @else --}}
        <li class="">
            <a class="" href="{{route('pemesanan.create')}}"><i class="si si-social-dropbox mr-5"></i>Catering Request</a>
        </li>
        {{-- @endif --}}
      
       
        
    </ul>
</div>

@push('scripts')
<script>
    document.querySelector(".popup").addEventListener('click',function(){
        swal({title: "Tidak Bisa Order Catering", text: "Silahkan Hubungi Pihak HRD", type: 
        "error"}).then(function(){ 
        location.reload();
        }
        );
    });

</script>


@endrole

@role('Staff')
<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a class="" href="{{route('home')}}" class=""><i class="si si-compass"></i><span class="sidebar-mini-hide">Beranda</span></a>
        </li>
       
        <li class="">
            <a class="" href="{{route('terima.index')}}"><i class="si si-social-dropbox mr-5"></i>List Catering Request</a>
        </li>
        
    </ul>
</div>
@endrole
