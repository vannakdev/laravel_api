<!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="#"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
    <li><a href="#"><i class="fab fa-product-hunt"></i> <span>Products</span></a></li>
    <li><a href="#"><i class="fas fa-users-cog"></i> <span>Vendor</span></a></li>


    <li class="treeview">
        <a href="#"><i class="fab fa-elementor"></i> <span>Categories</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                        </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fas fa-plus-circle"></i>Add Categories</a></li>
            <li><a href="#"><i class="fas fa-list-ol"></i>List Categories</a></li>
        </ul>
    </li>


    <li class="treeview">
        <a href="#"><i class="fab fa-elementor"></i> <span>Users</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                        </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('system/user/create')}}"><i class="as fa-plus-circle"></i>Add Users </a></li>
            <li><a href="{{url('system/user')}}"><i class="fas fa-list-ol"></i>List Users </a></li>
        </ul>
    </li>




</ul>
<!-- /.sidebar-menu -->