<?php include 'template/header.php'; ?> 

<!-- form login -->
  <section id="Login">

    <div class="card card-login mx-auto shadow">
      
      <div class="card-body">
  
        <div class="mb-3">
        
          <div class="row">
            <div class="col-md-4">
              <hr>  
            </div>
            
            <div class="col-md-4">
              <h3 class="text-center">Login</h3> 
            </div>
  
            <div class="col-md-4">
              <hr>
            </div>
          </div>
          <form action="login/login_validation.php" method="post">
  
            <div class="input-group mt-4 w-100 p-2 ">
              
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username">
              </div>
    
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-shield-lock-fill"></i></span>
                <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password">
              </div>
    
              <div class="ms-auto mt-3">
                
                <a href="registration/registration.php" class="btn btn-outline-danger">Daftar</a>
      
                <a href="content/" class="btn btn-primary" name="login">Login</a>
    
              </div>
            </div>
  
          </form>                    
  
        </div>
  
  
      </div>
  
    </div>

  </section>
<!-- form login -->

<?php include 'template/footer.php'; ?> 