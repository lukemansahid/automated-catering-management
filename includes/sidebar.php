<div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li class="open"><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>
          <li><a href="combo.php"><i class="fa fa-bar-chart-o"></i> Combo</a></li> 
          <li><a href="order.php"><i class="fa fa-money bgreen"></i> Menu Orders</a></li> 
          <li><a href="messages.php"><i class="fa fa-envelope"></i> Messages</a></li> 
          <li class="has_sub">
			<a href="#"><i class="fa fa-file-o"></i> Maintenance  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>			
              <li><a href="menu.php">Menu</a></li>
              <li><a href="category.php">Category</a></li>
              <li><a href="subcategory.php">Subcategory</a></li>
              <li><a href="event.php">Event</a></li>
              <li><a href="members.php">Staff</a></li>
              <li><a href="teams.php">Teams</a></li>
              <li><a href="team_members.php">Team Members</a></li>
              <li><a href="user.php">User</a></li>
            </ul>
          </li>
          <!---<li><a href="backup.php"><i class="fa fa-bar-chart-o"></i> Backup/Restore</a></li>--->
        </ul>
    </div>
    <?php include 'report_modal.php'; ?>
    <?php include 'report_sales.php'; ?>