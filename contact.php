<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/register.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Form Validator</title>
  </head>
  <body>

    <?php include "includes/nav.php"; ?>  

    <div class="container">
      <form id="form" class="form">
        <h2>Contact us</h2>
        <div class="form-control">
          <label for="username">Username</label>
          <input type="text" id="username" placeholder="Enter username" />
        </div>
        <div class="form-control">
          <label for="email">Email</label>
          <input type="text" id="email" placeholder="Enter email" />
        </div>

        <div class="form-control">
            <label>Message</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>


        <button type="submit">Submit</button>
      </form>
    </div>

    <script src="script.js"></script>
  </body>
</html>
