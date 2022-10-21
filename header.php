<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#">Health Point</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
	       <li class="nav-item">
        <a class="nav-link" href="page.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact Us</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Dashboard</a>
      </li>
		
		 <?php

              if(isset($_SESSION['Name']))
              {
                  echo '<li class="nav-item dropdown bg-dark">';
                        echo '<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">'.$_SESSION['Name'].'</a>';
                          echo '<div class="dropdown-menu">';
                          echo '<a class="dropdown-item" href="editProfile.php">Edit Profile Doctors</a>';
						   echo '<a class="dropdown-item" href="editProfilePatient.php">Edit Profile Patients</a>';
                          echo '<a class="dropdown-item" href="logout.php">Logout</a>';
                          echo '</div>';
                  echo '</li>';
              }
              else
              {
					echo '<li class="nav-item dropdown bg-dark">
					  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Login
					  </a>
					  <div class="dropdown-menu">
						<a class="dropdown-item" href="logindoctor.php">Login As Doctors</a>
						<a class="dropdown-item" href="login.php">Login As Patients</a>
						
					  </div>
					</li';
              }

          ?>
            

    </ul>
  
  </div>
</nav>