<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(URL::to('/assets/css/style.css')); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Poppins:wght@700&display=swap" rel="stylesheet" />
  </head>
  <body style="background-color: #f7f8f9">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="<?php echo e(URL::to('/assets/image/jamob.png')); ?>" style="width: 80px" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto fs-5">
            <li class="nav-item fs-5 ms-2">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item fs-5 ms-2">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item dropdown fs-5 ms-2">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Product </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item fs-5 mb-3" href="#">Whatsapp</a></li>
                <li><a class="dropdown-item fs-5 mb-3" href="#">CPRO</a></li>
                <li><a class="dropdown-item fs-5 mb-3" href="#">Coster</a></li>
                <li><a class="dropdown-item fs-5 mb-3" href="#">Chat Commerce</a></li>
                <li><a class="dropdown-item fs-5 mb-3" href="#">Messaging Re-Route</a></li>
              </ul>
            </li>
            <li class="nav-item fs-5 ms-2">
              <a class="nav-link" href="#">Partnership</a>
            </li>
            <li class="nav-item fs-5 ms-2">
              <a class="nav-link" href="#">Career</a>
            </li>
            <li class="nav-item fs-5 ms-2">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end -->

    <!-- jumbotron -->

    <div class="row-fluid" style="background-color: #ff6c20">
      <img src="<?php echo e(URL::to('/assets/image/Mask Group 25@3x.png')); ?>" alt="poto" class="img-fluid" style="height: auto" />
      <div class="front">
        <img src="<?php echo e(URL::to('/assets/image/Group 1007.png')); ?>" alt="" id="redcircle" class="position-relative img-fluid d-inline small" />
        <h1 class="mx-auto text-center" id="title">Ready to level up your customer interactions with us?</h1>

        <img src="<?php echo e(URL::to('/assets/image/Group 1008.png')); ?>" alt="" id="bluecircle" class="position-relative img-fluid d-inline" />
      </div>
    </div>

    <!-- end -->

    <!-- form -->

    <div class="container">
      <form style="margin-bottom: 20px">
        <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        <div class="mb-3">
          <label for="name1" class="form-label">Full Name <span style="color: red">*</span> </label>
          <input type="<?php echo e($form->name); ?>"   class="form-control" id="name1" />
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email <span style="color: red">*</span></label>
          <input type="<?php echo e($form->email); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
          <div id="emailHelp"     class="form-text">ATTENTION: Public domains like Gmail and Yahoo will be disregarded</div>
        </div>

        <div class="mb-3">
          <label for="job1" class="form-label">Job Industry <span style="color: red">*</span> </label>
          <input type="<?php echo e($form->job); ?>"    class="form-control" id="job1" />
        </div>
  
        <div class="row md-3">
          <div class="col-md-6">
            <label for="job1" class="form-label">Phone Number<span style="color: red">*</span> </label><br />
            <div class="input-group mb-3">
              <button class="btn btn-outline-secondary dropdown-toggle me-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">Indonesia</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Indonesia</a></li>
                <li><a class="dropdown-item" href="#">United States</a></li>
              </ul>
              <input type="<?php echo e($form->phone); ?>"    class="form-control" aria-label="Text input with dropdown button" />
            </div>
          </div>

          <div class="col-md-6">
            <label for="job1" class="form-label">Company Name <span style="color: red">*</span> </label>
            <input type="<?php echo e($form->company); ?>"      class="form-control" id="job1" />
          </div>

        </div>
  
        <div class="row md-3 mb-3">
          <div class="col-md-6">
            <label for="job1" class="form-label">Company Website <span style="color: red">*</span> </label>
            <input type="<?php echo e($form->company); ?>"        class="form-control" id="job1" />
          </div>
          <div class="col-md-6">
            <label for="job1" class="form-label">Industry Segment<span style="color: red">*</span> </label><br />
            <select class="form-select" aria-label="Default select example">
              <option selected>Select</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
  
        <div class="row md-3 mb-3">
          <div class="col-md-6">
            <label for="job1" class="form-label">Job Level<span style="color: red">*</span> </label><br />
            <select class="form-select" aria-label="Default select example">
              <option selected>Select</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="job1" class="form-label">Company Size<span style="color: red">*</span> </label><br />
            <select class="form-select" aria-label="Default select example">
              <option selected>Select</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
  
        <div class="row md-3 mb-3">
          <div class="col-md-6">
            <label for="job1" class="form-label">What solution do you want to use? <span style="color: red">*</span> </label><br />
            <select class="form-select" aria-label="Default select example">
              <option selected>Select</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="job1" class="form-label">What channel do you want to use?<span style="color: red">*</span> </label><br />
            <select class="form-select" aria-label="Default select example">
              <option selected>Select</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
  
        <div class="mb-3">
          <label for="job1" class="form-label">How did you hear about us? <span style="color: red">*</span> </label><br />
          <select class="form-select" aria-label="Default select example">
            <option selected>Select</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
  
        <div class="mb-3" style="margin-top: 10px">
          <img src="<?php echo e(URL::to('/assets/image/Mask Group 16.png')); ?>" class="captcha" alt="" />
        </div>
  
        <div class=" btndiv">
          <button class="btn btn-primary" id="submitun" type="button" style="padding: 10px 90px; background-color: #ff6c20; color: white; outline: #ff6c20">Submit</button>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </form>
    </div>

    <!-- endform -->

    <!-- upperfooter -->
    <div class="upperfooter" style="margin-bottom: 30px">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-6">
            <img src="<?php echo e(URL::to('/assets/image/jamob.png')); ?>" alt="" width="100px" />
            <br />
            <br />
            <p class="text-md-start" style="font-weight: bold">Graha Orange Tower B 2nd Floor</p>
            <p class="text-break">
              Jl. Mampang Prapatan Raya No. 3, Jakarta Selatan 12790 <br />
              Telp. (62-21) 794 0946 <br />
              Fax. (62-21) 794 1107
            </p>

            <div  class="icons" >
              <div><img src="<?php echo e(URL::to('/assets/image/icons8-facebook-100.png')); ?>" width="32px" alt="" style="margin-right: 30px" /></div>
              <div><img src="<?php echo e(URL::to('/assets/image/icons8-instagram-48.png')); ?>" width="32px" alt="" style="margin-right: 30px" /></div>
              <div><img src="<?php echo e(URL::to('/assets/image/icons8-linkedin-60.png')); ?>" width="32px" alt="" style="margin-right: 30px" /></div>
            </div>
          </div>
          <div class="col-sm-6">
            <p style="font-weight: bold">Sign up to our newsletter</p>
            <div class="row">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Your Email" aria-label="Text input with dropdown button" style="background-color: white" />
              </div>
              <div class="col-md-6">
                <button class="btn" id="submitun2" type="button" style="background-color: #ff6c20; color: white; padding: 5px 40px">Subscribe</button>
              </div>
            </div>

            <div class="row mt-4 justify-content-sm-start">
              <div class="col">
                <ul>
                  <li class="mb-3"><h6>Company</h6></li>
                  <li class="mb-3">About Us</li>
                  <li class="mb-3">Contact</li>
                  <li class="mb-3">Partnership</li>
                  <li class="mb-3">Career</li>
                  <li class="mb-3">Blog</li>
                </ul>
              </div>
              <div class="col">
                <ul>
                  <li class="mb-3"><h6>Product</h6></li>
                  <li class="mb-3">Whatsapp</li>
                  <li class="mb-3">CPRO</li>
                  <li class="mb-3">Coster</li>
                  <li class="mb-3">Chat Commerce</li>
                  <li class="mb-3">Messaging Re-Route</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end -->

    <!-- footer -->

    <footer  class="container-fluid mx-auto text-center" style="background-color: #ebebeb; padding: 30px;">
      <div>Copyright &copy; Jatis Mobile 2021</div>
    </footer>

    <!-- endfooter -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
<?php /**PATH D:\Projects\Jatis\CMS\resources\views/contact-us.blade.php ENDPATH**/ ?>