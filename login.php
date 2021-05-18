<?php include "includes/header.php"; ?>
    <?php include "includes/nav.php"; ?>


    <div class="container">
      <form id="form" class="form mr-5" method="POST" action="login.php">
        <h2>Login</h2>

    <?php
    if(isset($_POST['login_btn'])){
      $username = mysqli_real_escape_string($db, $_POST['username']);
      $password = mysqli_real_escape_string($db, $_POST['password']);

      $hashed_pwd = md5($password);

      if(empty($username) || empty($password)){
        echo "<p> All fields are required</p>";
      }else {
        $query = "SELECT * FROM users WHERE username = '$username' AND
        password = '$hashed_pwd'";

        $query_run = mysqli_query($db, $query);

        if(mysqli_num_rows($query_run) == 1){
          while($row = mysqli_fetch_assoc($query_run)){
            $user_id = $row['user_id'];
            // $username = $row['username'];
            // $email = $row['email'];
            // echo $user_id;
            // echo $username;
            // echo $email;
            $_SESSION['user_id'] = $user_id;
            header("Location: projects.php");
            exit();
          }

        }else {
          echo "No user with this account was found";
        }
      }
    }

     ?>
        <div class="form-control">
          <label for="username">Username</label>
          <input type="text" name="username" placeholder="Enter username" />
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="password">Password</label>
          <input type="password" name="password" placeholder="Enter password" />
          <small>Error message</small>
        </div>
        <button type="submit" name="login_btn">Submit</button>
      </form>
    </div>

  <?php include "includes/footer.php"; ?>
