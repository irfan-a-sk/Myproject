<nav class="navbar navbar-expand-lg navbar bg-dark navbar-dark">
    <div class=" container-fluid">
        <img src="./Asset/RS.png" alt="#" width="90px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./About.php">AboutUS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Contact.php">Contact</a>
                </li>


        </div>
        
        <?php
                    session_start();

                    if(isset($_SESSION['logIn']) && $_SESSION['logIn'] == true){

                        echo '<div class="d-flex  gap-4">
                        <h1 class="text-white fs-4">'.$_SESSION['user_name'].'</h1><a class="btn btn-danger" href="./Component/logout.php?id="'.$_SESSION['user_name'].'">Logout</a> 
                        </div>';

                    }
                    else{
                        echo '<div class="d-flex align-items-center gap-2">
                                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#Login">Login</button>
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Signup">SignUp</button>
                            </div>';
                    }

                ?>
</nav>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<!-- SignUP Modal-->
<div class="modal" id="Signup" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./Component/SignUp_handle.php" method="post">
                    <div class=" mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="Name" id="exampleInputEmail"
                            aria-describedby="emailHelp">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id=" exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="cpass" id="exampleInputPassword1">
                    </div>


                    <button type="submit" class="btn btn-primary">Signup</button>
                    <div class="modal-footer">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- LogIN -->

<div class="modal" id="Login" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./Component/login_handle.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="uname"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
                    </div>


                    <button type="submit" class="btn btn-primary">Login</button>
                    <div class="modal-footer">

                    </div>
            </div>
            </form>
        </div>
    </div>
</div>