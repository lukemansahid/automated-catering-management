
<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">

    <div class="conjtainer">
        <!-- Menu button for smallar screens -->
        <div class="navbar-header">
            <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span>Menu</span>
            </button>
        </div>

        <!-- Navigation starts -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">

                <li class="dropdown dropdown-big">
                    <a href="#"><span class = "label label-info"><i class="fa fa-calendar"></i></span> <?php echo date("F d, Y");?></a>
                </li>
            </ul>

            <!-- Search form -->

            <!-- Links -->
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown pull-right">
                    <a href="#login" data-toggle="dropdown">
                        <i class="fa fa-user"></i> <?php
                        if(!empty($_SESSION['id'])){
                            echo $_SESSION['username'];
                        } ?>
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                        <li><a href="admin/logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>

            </ul>
        </nav>


    </div>
</div>


<!-- Header starts -->
  <header>
    <div class="container">
      <div class="row">
          <div class="col-md-3 pull-left">
              <h2><i class="fa fa-home"></i> Dashboard</h2>
          </div>
        <!-- Button section -->
        <div class="col-md-7 pull-right">
          <!-- Buttons -->
          <ul class="nav nav-tabs">

			<li class="dropdown dropdown-big">
              <a  href="userdashboard.php"><i class="fa fa-home"></i> Home</a>
            </li>
			
			
            <li class="dropdown dropdown-big">
              <a href="menu.php"><i class="fa fa-cutlery"></i> Menu</a>
            </li>
			
			<li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="schedule.php"><i class="fa fa-calendar"></i> Schedule of Events</a>
            </li>

            <li class="dropdown dropdown-big">
                <a href="#"><i class="fa fa-pencil"></i> Schedule a Reservation</a>
            </li> 

            <li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="contact.php"><i class="fa fa-phone"></i> Contact Us</a>
            </li>

          </ul>

        </div>
        <!-- Data section -->
      </div>
    </div>
  </header>
  