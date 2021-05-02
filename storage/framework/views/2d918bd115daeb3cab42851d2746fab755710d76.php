<?php if(auth()->check() && auth()->user()->hasRole('Dept Head')): ?>
<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a class="" href="<?php echo e(route('home')); ?>" class=""><i class="si si-compass"></i><span class="sidebar-mini-hide">Beranda</span></a>
        </li>
        <?php
            $today = (Carbon\Carbon::now())
            
        ?>
       
        
        <li class="">
            <a class="" href="<?php echo e(route('pemesanan.create')); ?>"><i class="si si-social-dropbox mr-5"></i>Catering Request</a>
        </li>
        
      
       
        
    </ul>
</div>

<?php $__env->startPush('scripts'); ?>
<script>
    document.querySelector(".popup").addEventListener('click',function(){
        swal({title: "Tidak Bisa Order Catering", text: "Silahkan Hubungi Pihak HRD", type: 
        "error"}).then(function(){ 
        location.reload();
        }
        );
    });

</script>


<?php endif; ?>

<?php if(auth()->check() && auth()->user()->hasRole('Staff')): ?>
<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a class="" href="<?php echo e(route('home')); ?>" class=""><i class="si si-compass"></i><span class="sidebar-mini-hide">Beranda</span></a>
        </li>
       
        <li class="">
            <a class="" href="<?php echo e(route('terima.index')); ?>"><i class="si si-social-dropbox mr-5"></i>List Catering Request</a>
        </li>
        
    </ul>
</div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Catering\resources\views/layouts/menu/users.blade.php ENDPATH**/ ?>