@role('Admin')
    <div class="sidebar-heading text-center">
        USER MANAGMENT
    </div>
    <li class="nav-item {{ request()->is('users*') ? 'active' : '' }} ">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fa fa-users"></i>
            <span>User Management</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item {{ request()->is('roles*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index') }}">
            <i class="fa fa-user-check"></i>
            <span>Role Management</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item {{ request()->is('assign*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('users.assignRole') }}">
            <i class="fa fa-user-plus"></i>
            <span>Assign Role</span></a>
    </li>
    <!-- Divider -->

    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading text-center">
        CONTENT
    </div>
    <li class="nav-item {{ request()->is('admincategory*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admincategory.index') }}">
            <i class="fa fa-tag"></i>
            <span>Category</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item {{ request()->is('adminMedia*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('adminmedia.index') }}">
            <i class="fa fa-film"></i>
            <span>Media</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item {{ request()->is('adminMedia/downloads*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admindownload.index') }}">
            <i class="fa fa-download"></i>
            <span>Downloads</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item {{ request()->is('adminslogan*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('adminslogan.adminslogan') }}">
            <i class="fa fa-comment"></i>
            <span>Slogan</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item {{ request()->is('admindesign*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admindesign.admindesign') }}">
            <i class="fa fa-image"></i>
            <span>Design</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading text-center">
        MASTER
    </div>

    <li class="nav-item {{ request()->is('admintemplatemaster*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admintemplatemaster.index') }}">
            <i class="fa fa-file-image"></i>
            <span>Templete</span></a>
    </li>
    <hr class="sidebar-divider">
    {{--  <li class="nav-item {{ request()->is('product*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('product.index') }}">
            <i class="fa fa-cart-shopping"></i>
            <span>Product</span></a>
    </li>
    <hr class="sidebar-divider">  --}}
    <li class="nav-item {{ request()->is('admin/brand/package/activity*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.brand.activity.index') }}">
            <i class="fa fa-boxes"></i>
            <span>Package Activity</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading text-center">
        CREATOR
    </div>
    <li class="nav-item {{ request()->is('designs*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.brand.package.index') }}">
            <i class="fa fa-box"></i>
            <span>Packages</span></a>
    </li>
    {{--  <hr class="sidebar-divider">  --}}
    {{--  <div class="sidebar-heading text-center">
        EXTRA
    </div>
    <li class="nav-item {{ request()->is('designs*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fs fa-tachometer-alt"></i>
            <span>Banner</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item {{ request()->is('offer*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('offer.index') }}">
            <i class="fas fa-fs fa-tachometer-alt"></i>
            <span>Offers</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item {{ request()->is('coupon*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('coupon.index') }}">
            <i class="fas fa-fs fa-tachometer-alt"></i>
            <span>Coupon</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item {{ request()->is('type*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('type.index') }}">
            <i class="fas fa-fs fa-tachometer-alt"></i>
            <span>Notification Type</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item {{ request()->is('typedetail*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('typedetail.index') }}">
            <i class="fas fa-fs fa-tachometer-alt"></i>
            <span>Notification Type Detail</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item {{ request()->is('offerSlider*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('offerSlider.index') }}">
            <i class="fas fa-fs fa-tachometer-alt"></i>
            <span>Offer Slider</span></a>
    </li>  --}}
    <hr class="sidebar-divider">
    <div class="sidebar-heading text-center">
        REPORT
    </div>
    <li class="nav-item {{ request()->is('user/report*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('adminsubscription.index') }}">
            <i class="fa fa-users"></i>
            <span>Our Users</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item {{ request()->is('writer/designer/report*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('writer.designer.report') }}">
            <i class="fa fa-edit"></i><i class="fa fa-image"></i>
            <span>Writer/Designer</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item {{ request()->is('paymentReport*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('paymentReport.index') }}">
            <i class="fa fa-coins"></i>
            <span>Payments</span></a>
    </li>
@endrole
