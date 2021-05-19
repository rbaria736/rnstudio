<?php
include_once '../header.php';

?>
  <main id="main">
    <section class="signup-fom">
      <div div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  
  <form class="p-5 rounded shadow" action="includes/login.inc.php" method="post" style="width: 30rem">
  
  <h1 class="text-center">log In</h1>
  
    <div class="mb-3"> 
             <label for="full_name">Username/Email</label> 
        <input type="text" class="form-control" id="full_name"
            name="uid" required="">    
        </div>
        <div class="mb-3">
      <label for="password">Password</label>
      <input type="password" class="form-control"
      id="password" name="pwd">
    </div>
  <div>
      <small id="emailHelp" class="form-text text-muted">
      <p>Already have an account? <a href="signup.inc.php">Signup here</a></p>
      </small>
    </div>  
    <div>
          <button type="submit" name="submit" class="btn btn-primary">
    Login
        </button>
  </form>
</div>

      <?php

  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Fill in all fields</P>";
    }
    else if ($_GET["error"] == "wronglogin") {
      echo "<p>Incorrect login information</P>";
    }
    
  }

  ?>


    </section>
  </main><!-- End #main -->

    <?php
include_once '../footer.php';
?>