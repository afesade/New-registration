<nav>
      <div class="nav-center">
        <!-- nav header -->
        <div class="nav-header">
          <img src="./logo.svg" class="logo" alt="logo" />
          <button class="nav-toggle">
            <i class="fas fa-bars"></i>
          </button>
        </div>
        <!-- links -->
<?php
        if(isset($_SESSION['user_id'])){
          echo"
          <ul class='links'>
            <li>
              <a href='index.php'>home</a>
            </li>
            <li>
              <a href='register.php'>Register</a>
            </li>
            <li>
              <a href='login.php'>Login</a>
            </li>
            <li>
              <a href='projects.php'>projects</a>
            </li>
            <li>
              <a href='logout.php'>Logout</a>
            </li>
            <li>
              <a href='contact.php'>contact</a>
            </li>
          </ul>
          ";
        }else {
          echo "<ul class='links'>
            <li>
              <a href='index.php'>home</a>
            </li>
            <li>
              <a href='register.php'>Register</a>
            </li>
            <li>
              <a href='login.php'>Login</a>
            </li>
            <li>
              <a href='contact.php'>contact</a>
            </li>
          </ul>
          ";
        }
?>

        <!-- social media -->
        <ul class="social-icons">
          <li>
            <a href="https://www.twitter.com">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com">
              <i class="fab fa-behance"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com">
              <i class="fab fa-sketch"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
