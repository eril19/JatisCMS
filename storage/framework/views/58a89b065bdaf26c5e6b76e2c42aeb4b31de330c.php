<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(URL::to('/assets/css/loginCSS.css')); ?>">
    <title>Login</title>
  </head>
  <body>

    <div class="float-login">
      <?php if(session()->has('success')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php endif; ?>
      <div class="loginLeft">
        <form class="loginForm" action="/auth" method="POST">
          <?php echo csrf_field(); ?>
          <h1>Login Page</h1>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="rememberme">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>
          <button type="submit" class="btn btn-primary">Sign In</button>
          <div class="dontHaveAccount">
            <a href="/register">Don't have an account?</a>
          </div>
        </form>
      </div>
      <div class="loginRight">
          
      </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html><?php /**PATH D:\Projects\Jatis\CMS\resources\views/login.blade.php ENDPATH**/ ?>