<?php
include_once '../header.php';

?>

  <main id="main">
    <section class="signup-fom">
      <div div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  
  <form class="p-5 rounded shadow" action="includes/signup.inc.php" method="post" style="width: 30rem">
  
  <h1 class="text-center">Signup Here</h1>
  
    <div class="mb-3"> 
             <label for="full_name">Full Name</label> 
        <input type="text" class="form-control" id="full_name"
            name="name" required="">    
        </div>
        <div class="mb-3"> 
            <label for="email">E-Mail</label> 
        <input type="email" class="form-control" id="email"
            name="email" aria-describedby="emailHelp" required="">    
        </div>

        <div class="mb-3"> 
             <label for="Username">Username</label> 
        <input type="text" class="form-control" id="Username"
            name="uid" required="">    
        </div>
  
    <div class="mb-3">
      <label for="password">Password</label>
      <input type="password" class="form-control"
      id="password" name="pwd">
    </div>

    <div class="mb-3">
      <label for="password">Repeat Password</label>
      <input type="password" class="form-control"
      id="password" name="pwdrepeat">
    </div>
  <div>
      <small id="emailHelp" class="form-text text-muted">
      <p>Already have an account? <a href="login.inc.php">Login here</a></p>
      </small>
    </div>  
    <div>
          <button type="submit" name="submit" class="btn btn-primary">
    SignUp
        </button>
  </form>
</div>

      

  <?php

  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Fill in all fields</P>";
    }
    else if ($_GET["error"] == "invaliduid") {
      echo "<p>Choose a proper Username</P>";
    }
    else if ($_GET["error"] == "invalidemaild") {
      echo "<p>Choose a proper email</P>";
    }
    else if ($_GET["error"] == "passwordsdontmatch") {
      echo "<p>password doesn't match</P>";
    }
    else if ($_GET["error"] == "stmtfaild") {
      echo "<p>something went wrong, try again</P>";
    }
    else if ($_GET["error"] == "usernametaken") {
      echo "<p>Username Already taken!</P>";
    }
    else if ($_GET["error"] == "none") {
      echo "<p>You have signed up!</P>";
    }
  }

  ?>


    </section>
  </main><!-- End #main -->

    <?php
include_once '../footer.php';
?>