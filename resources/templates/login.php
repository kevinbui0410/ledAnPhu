<div class="row">
  <form method="POST">
    <?php 
      if ($error != "") : 
        echo "
          <div class='alert alert-danger mb-3' role='alert'>
            $error
          </div> 
          ";
      endif ?>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
