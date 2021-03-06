<!-- Header Content -->
<div class="content-header">
    <!-- Left Section -->
    <div class="content-header-section">
        <!-- Toggle Sidebar -->
        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
            <i class="fa fa-navicon"></i>
        </button>
        <!-- END Toggle Sidebar -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div class="content-header-section">
        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
            <i class="si si-bell"></i>
        </button>
        <!-- User Dropdown -->
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo e(Auth::user()->name); ?><i class="fa fa-angle-down ml-5"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="si si-logout mr-5"></i> Keluar
                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>
        </div>
        <!-- END User Dropdown -->

        <!-- Notifications -->
        
        
        <!-- END Notifications -->

    </div>
    <!-- END Right Section -->
</div>
<!-- END Header Content -->

<!-- Header Loader -->
<!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
<div id="page-header-loader" class="overlay-header bg-primary">
    <div class="content-header content-header-fullrow text-center">
        <div class="content-header-item">
            <i class="fa fa-sun-o fa-spin text-white"></i>
        </div>
    </div>
</div>
<!-- END Header Loader -->
<?php /**PATH C:\xampp\htdocs\Catering\resources\views/layouts/header.blade.php ENDPATH**/ ?>