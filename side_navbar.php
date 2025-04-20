<!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"><?php echo $name; ?></h1>
              <p>Web Designer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main Menu</span>
          <ul class="list-unstyled">
          
            <li><a href="home.php"> <i class="icon-home"></i>Home </a></li>
            <li><a href="list_tickets.php?prefSeat_id="> <i class="icon-form"></i>Sold Tickets </a></li>
            
           
          </ul><span class="heading">Preferences</span>
          
          <ul class="list-unstyled">
  <a href="#eventSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
    <i class="icon-list"></i> Event
  </a>
  <ul class="collapse list-unstyled" id="eventSubmenu">
    <li><a href="tienich.php">Tiện Ích </a></li>
  </ul>
</li>

            <li> <a href="seats_list.php"> <i class="icon-list"></i>Seats </a></li>
           
          </ul>
          <!-- Check-in Online -->
    <span class="heading">Check-in</span>
    <ul class="list-unstyled">      <li><a href="checkin.php"> <i class="icon-check"></i>Check-in Online</a></li>
    </ul>
          <!-- top_navbar.php -->
<ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="contact.php">Liên hệ</a>
    </li>
    <!-- Các item khác -->
</ul>
        </nav>
        