<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">PadiApp <sup>Comparison</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Pages Collapse Menu -->

<!-- Nav Item - Charts -->
<li class="nav-item <?php echo $getactive['name']?>">
    <a class="nav-link" href="/main/index">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>DB vs Impor (Nama)</span></a>
</li>

<li class="nav-item <?php echo $getactive['alias']?>">
    <a class="nav-link" href="/main/alias">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>DB vs Impor (Alias)</span></a>
</li>
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
