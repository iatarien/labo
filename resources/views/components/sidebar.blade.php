<!-- Sidebar -->
<ul dir="rtl" style="padding-right : 15px;" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a style="justify-content : right !important" class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
    <div style="margin : 0 !important;"  class="sidebar-brand-text mx-3"> الجناح البيداغوجي {{$bloc}} <sup></sup></div>
</a>





@if($user->service =="Admin")
<hr class="sidebar-divider">

<!-- Nav Item - Tables -->
<li class="nav-item active">
    <a class="nav-link" href="/users">
        <i class="fas fa-fw fa-users"></i>
        <span>الحسابات</span></a>
</li>
@else
<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/">
        <i class="fas fa-fw fa-calendar"></i>
        <span>المتابعة البيداغوجية</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Tables -->
<li class="nav-item active">
    <a class="nav-link" href="/rapports">
        <i class="fas fa-fw fa-copy"></i>
        <span>التقارير</span></a>
</li>
<hr class="sidebar-divider">
<!-- Nav Item - Tables -->
<li class="nav-item active">
    <a class="nav-link" href="/add_rapport">
        <i class="fas fa-fw fa-tag"></i>
        <span>إضافة تقرير</span></a>
</li>
<hr class="sidebar-divider">

<!-- Nav Item - Tables -->
<li class="nav-item active">
    <a class="nav-link" href="/">
        <i class="fas fa-fw fa-table"></i>
        <span>حصيلة شهرية/سنوية</span></a>
</li>
@if($user->service =="Chef des Labos")
<hr class="sidebar-divider">
<!-- Nav Item - Tables -->
<li class="nav-item active">
    <a class="nav-link" href="/labos">
        <i class="fas fa-fw fa-flask"></i>
        <span>المخابر</span></a>
</li>
<hr class="sidebar-divider">
<!-- Nav Item - Tables -->
<li class="nav-item active">
    <a class="nav-link" href="/tools/devices">
        <i class="fas fa-fw fa-desktop"></i>
        <span>الأجهزة</span></a>
</li>
<hr class="sidebar-divider">
<!-- Nav Item - Tables -->
<li class="nav-item active">
    <a class="nav-link" href="/tools/tools">
        <i class="fas fa-fw fa-wrench"></i>
        <span> الأدوات</span></a>
</li>
<hr class="sidebar-divider">
<!-- Nav Item - Tables -->
<li class="nav-item active">
    <a class="nav-link" href="/chemicals">
        <i class="fas fa-fw fa-vial"></i>
        <span>المواد الكيميائية</span></a>
</li>
<hr class="sidebar-divider">
<!-- Nav Item - Tables -->
<li class="nav-item active">
    <a class="nav-link" href="/niveaux">
        <i class="fas fa-fw fa-graduation-cap"></i>
        <span>المستويات</span></a>
</li>
<hr class="sidebar-divider">
<!-- Nav Item - Tables -->
<li class="nav-item active">
    <a class="nav-link" href="/modules">
        <i class="fas fa-fw fa-book"></i>
        <span>المقاييس</span></a>
</li>
<hr class="sidebar-divider">
<!-- Nav Item - Tables -->
<li class="nav-item active">
    <a class="nav-link" href="/teachers">
        <i class="fas fa-fw fa-chalkboard-teacher"></i>
        <span>الأساتذة</span></a>
</li>
@endif
@endif

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->