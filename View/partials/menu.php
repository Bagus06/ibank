<?php if (isset($_SESSION['admin'])): ?>
  <ul class="sidebar-menu" data-widget="tree">
    <li <?php if ($url == '/ibank/View/master/app'){ ?>class="active"<?php } ?>>
     <a href="../master/app"><i class="icon_drive"></i><span>Dashboard</span></a>
   </li>
   <li <?php if ($url == '/ibank/View/user/addadminUser'){ ?>class="treeview active"<?php }elseif ($url == '/ibank/View/user/showadminUser'){ ?>class="treeview active"<?php }else{ ?>class="treeview"<?php } ?>>
     <a href="#"><i class="fa fa-expeditedssl"></i><span>Admin</span><i class="fa fa-angle-right"></i></a>
     <ul class="treeview-menu">
      <li <?php if ($url == '/ibank/View/user/addadminUser'): ?>class="active"<?php endif ?>><a href="../user/addadminUser">Admin added</a></li>
      <li <?php if ($url == '/ibank/View/user/showadminUser'): ?>class="active"<?php endif ?>><a href="../user/showadminUser">Show admin</a></li>
    </ul>
  </li>
  <li <?php if ($url == '/ibank/View/siswa/createSiswa'){ ?>class="treeview active"<?php }elseif ($url == '/ibank/View/siswa/showAllSiswa'){ ?>class="treeview active"<?php }else{ ?>class="treeview"<?php } ?>>
    <a href="#"><i class="icon-profile-male"></i><span>Students</span><i class="fa fa-angle-right"></i></a>
    <ul class="treeview-menu">
      <li <?php if ($url == '/ibank/View/siswa/createSiswa'): ?>class="active"<?php endif ?>><a href="../siswa/createSiswa">Students added</a></li>
      <li <?php if ($url == '/ibank/View/siswa/showAllSiswa'): ?>class="active"<?php endif ?>><a href="../siswa/showAllSiswa">Show Students</a></li>
    </ul>
  </li>
  <li <?php if ($url == '/ibank/View/message/showAllMessage'){ ?>class="active"<?php  } elseif ($url == '/ibank/View/message/createMessage') { ?>class="active"<?php } elseif ($url == '/ibank/View/message/readMessage') { ?>class="active"<?php } ?>>
     <a href="../message/showAllMessage"><i class="fa fa-envelope-o"></i><span>Message</span></a>
   </li>
</ul>
<?php elseif (isset($_SESSION['member'])): ?>
<ul class="sidebar-menu" data-widget="tree">
    <li <?php if ($url == '/ibank/View/master/app'){ ?>class="active"<?php } ?>>
     <a href="../master/app"><i class="icon_drive"></i><span>Dashboard</span></a>
   </li>
   <li <?php if ($url == '/ibank/View/transaction/addTransaction'){ ?>class="treeview active"<?php }elseif ($url == '/ibank/View/transaction/showTransaction'){ ?>class="treeview active"<?php }else{ ?>class="treeview"<?php } ?>>
     <a href="#"><i class="fa fa-exchange"></i><span>Transaction</span><i class="fa fa-angle-right"></i></a>
     <ul class="treeview-menu">
      <li <?php if ($url == '/ibank/View/transaction/addTransaction'): ?>class="active"<?php endif ?>><a href="../transaction/addTransaction">Add transaction</a></li>
      <li <?php if ($url == '/ibank/View/transaction/showTransaction'): ?>class="active"<?php endif ?>><a href="../transaction/showTransaction">Transaction history</a></li>
    </ul>
  </li>
  <li <?php if ($url == '/ibank/View/message/showAllMessage'){ ?>class="active"<?php  } elseif ($url == '/ibank/View/message/createMessage') { ?>class="active"<?php } elseif ($url == '/ibank/View/message/readMessage') { ?>class="active"<?php } ?>>
     <a href="../message/showAllMessage"><i class="fa fa-envelope-o"></i><span>Message</span></a>
   </li>
</ul>
<?php else: ?>
<ul class="sidebar-menu" data-widget="tree">
    <li <?php if ($url == '/ibank/View/master/app'){ ?>class="active"<?php } ?>>
     <a href="../master/app"><i class="icon_drive"></i><span>Dashboard</span></a>
   </li>
   <li <?php if ($url == '/ibank/View/transaction/showTransaction'){ ?>class="active"<?php } ?>>
     <a href="../transaction/showTransaction"><i class="fa fa-exchange"></i><span>Transaction history</span></a>
   </li>
</ul>
<?php endif ?>