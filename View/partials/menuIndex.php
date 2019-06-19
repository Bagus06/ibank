<ul class="sidebar-menu" data-widget="tree">
    <li class="active">
        <a href="#"><i class="icon_drive"></i><span>Dashboard</span></a>
    </li>
    <li <?php if ($url == '/TABUNGAN/view/mutasi/createMutasi.php'){ ?>class="treeview active"<?php }elseif ($url == '/TABUNGAN/view/mutasi/viewMutasi.php'){ ?>class="treeview active"<?php }else{ ?>class="treeview"<?php } ?>>
       <a href="#"><i class="icon-notebook"></i><span>Mutasi</span><i class="fa fa-angle-right"></i></a>
       <ul class="treeview-menu">
        <li <?php if ($url == '/TABUNGAN/view/mutasi/viewMutasi.php'): ?>class="active"<?php endif ?>><a href="view/mutasi/viewMutasi.php">Show Mutasi</a></li>
    </ul>
</li>
<li <?php if ($url == '/TABUNGAN/view/user/showAllUser.php'){ ?>class="treeview active"<?php }elseif ($url == '/TABUNGAN/view/user/createProfil.php'){ ?>class="treeview active"<?php }else{ ?>class="treeview"<?php } ?>>
    <a href="#"><i class="icon-profile-male"></i><span>Siswa</span><i class="fa fa-angle-right"></i></a>
    <ul class="treeview-menu">
        <li <?php if ($url == '/TABUNGAN/view/user/showAllUser.php'): ?>class="active"<?php endif ?>><a href="view/user/showAllUser.php">Show Member</a></li>
        <li <?php if ($url == '/TABUNGAN/view/user/createUser.php'): ?>class="active"<?php endif ?>><a href="view/user/createUser.php">Create member</a></li>
    </ul>
</li>