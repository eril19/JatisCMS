<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(URL::to('/assets/css/registerCSS.css')); ?>">
    <title>Register</title>
  </head>
  <body>
    <div class="float-register">
      <div class="registerLeft">
        <form class="registerForm" method="POST" action="/register">
          <h1>Register Page</h1>

          <?php echo csrf_field(); ?>
          
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">email</label>
              <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " value="<?php echo e(old('email')); ?>" aria-describedby="emailHelp" name="email">
            </div>
            <div class="invalid-feedback">Email format not right</div>
            
            <div class="mb-3">
              <label for="exampleInputFullname1" class="form-label">Full Name</label>
              <input type="text" class="form-control  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  value="<?php echo e(old('name')); ?>" aria-describedby="emailHelp" name="name">
            </div>
            <div class="invalid-feedback">Name format not right</div>


            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"   value="<?php echo e(old('password')); ?>" name="password">
            </div>
            <div class="invalid-feedback">Password format not right</div>


            <button type="submit" class="btn btn-primary">Sign up</button>
            <div class="haveAccount">
              <a href="login">Already have an account?</a>
            </div>
        </form>
      </div>
      <div class="registerRight">
          
      </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html><?php /**PATH D:\Projects\Jatis\CMS\resources\views/register.blade.php ENDPATH**/ ?>