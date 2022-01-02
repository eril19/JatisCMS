<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD</title>
  </head>
  <body class="text-center">
    
    <div class="container" style="margin-top: 100px">

      <form action="<?php echo e(route('crud.update',1)); ?>" method="post">
        <h2>Form Update</h2>
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email<span style="color: red"> (text | file | email | date | password)</span></label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Name<span style="color: red"> (text | file | email | date | password)</span></label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="name">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Password<span style="color: red"> (text | file | email | date | password)</span></label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="password" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Job<span style="color: red"> (text | file | email | date | password)</span></label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="job">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Phone<span style="color: red"> (text | file | email | date | password)</span></label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Company<span style="color: red"> (text | file | email | date | password)</span></label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="company">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Website<span style="color: red"> (text | file | email | date | password)</span></label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="website">
        </div>
        
        <button type="submit" class="btn btn-primary">Update form</button>
  
      </form>
    </div>
    
<div>
  <h4><a href="/">Lihat Hasil</a></h4>
  <h4><a href="/logout">Log Out</a></h4>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html><?php /**PATH D:\Projects\Jatis\CMS\resources\views/crud.blade.php ENDPATH**/ ?>