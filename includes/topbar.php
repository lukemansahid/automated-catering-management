<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">
	<div class="conjtainer">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
		  <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
		  </button>
		  <!-- Site name for smallar screens -->
		</div>
		<!-- Navigation starts -->
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">  
	  <ul class="nav navbar-nav">  

          <li class="dropdown dropdown-big">
            <a href="#"><span class = "label label-info"><i class="fa fa-calendar"></i></span> <?php echo date("F d, Y");?></a>            
          </li>


<!--          <li class="open"><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>-->
<!--          <li><a href="combo.php"><i class="fa fa-bar-chart-o"></i> Combo</a></li>-->
<!--          <li><a href="order.php"><i class="fa fa-money bgreen"></i> Menu Orders</a></li>-->
<!--          <li><a href="messages.php"><i class="fa fa-envelope"></i> Messages</a></li>-->


<!--          <li class="dropdown pull-right">-->
<!--              <a href="#" data-toggle="dropdown"><i class="fa fa-file-o"></i> Maintenance  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>-->
<!--              <ul class="dropdown-menu">-->
<!--                  <li><a href="menu.php">Menu</a></li>-->
<!--                  <li><a href="category.php">Category</a></li>-->
<!--                  <li><a href="subcategory.php">Subcategory</a></li>-->
<!--                  <li><a href="event.php">Event</a></li>-->
<!--                  <li><a href="members.php">Staff</a></li>-->
<!--                  <li><a href="teams.php">Teams</a></li>-->
<!--                  <li><a href="team_members.php">Team Members</a></li>-->
<!--                  <li><a href="user.php">User</a></li>-->
<!--              </ul>-->
<!--          </li>-->

        </ul>

        <!-- Search form -->

        <!-- Links -->
       <ul class="nav navbar-nav pull-right">
       <li class="dropdown pull-right">            
           <a href="#login" data-toggle="dropdown">
              <i class="fa fa-user"></i> <?php
               if(!empty($_SESSION['id'])){
                   echo $_SESSION['username'];
               }
               ?>
            </a>		        
            <!-- Dropdown menu -->
           <ul class="dropdown-menu">            
              <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
          </li>
          
        </ul>
      </nav> 

    </div>
	</div>
	