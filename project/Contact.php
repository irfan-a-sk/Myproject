   
<?php include("./Component/Navbar.php") ;

    
if(isset($_GET['status'])){
    if($_GET['status'] == "login_error"){        
        echo '<div class ="alert alert-danger alert-dismissible" roll="alert">
        <div>Login Error, Please Login first</div> <button type ="button" class="btn-close" data-bs-dismiss="alert" arial-lable="close"></button> </div>'; 
    }
    else if($_GET['status'] == 'wrong'){
        echo '<div class ="alert alert-danger alert-dismissible" roll="alert">
        <div>Something went wrong, please try again</div> <button type ="button" class="btn-close" data-bs-dismiss="alert" arial-lable="close"></button> </div>';
    }
    else if($_GET['status'] == 'success'){
        echo '<div class ="alert alert-success alert-dismissible" roll="alert">
        <div>We have registered your message</div> <button type ="button" class="btn-close" data-bs-dismiss="alert" arial-lable="close"></button> </div>';
    }
}
?>




<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="./CSS/contact1.css">


    <div class="main01">
    <div class="grid">
    <div class="1card">
        <i id="svg" class='bx bx-map' style='color:#ee1c6f'></i><br>
        <h2>OUR MAIN OFFICE</h2><br>
        <p>So-Ho 94 Brodway St, <br>New York,NY 1001</p>
    </div>
    <div class="2card">
        <i id="svg" class='bx bx-phone' style='color:#ee1c6f'></i>
        <h2>PHONE NUMBER</h2><br>
        <p>234-9876-5400 <br>
            888-0123-4567 (Toll Free)</p>
    </div>
    <div class="3card">
        <i id="svg" class='bx bx-printer' style='color:#ee1c6f'></i>
        <h2>FAX</h2><br>
        <p>1-234-567-8900</p>
    </div>
    <div class="4card">
        <i id="svg" class='bx bx-envelope' style='color:#ee1c6f'></i>
        <h2>EMAIL</h2><br>
        <p>hello@theme.com</p>
    </div>
</div>


<div class="container1 " id="container">
    <div class="ms ">
        <div class="card1">
        <form action="./Component/handlecontact.php" method="post">
        <p>Email</p>
        <input type="email" name="email" id="" placeholder="Enter a valid email address">
        <p>Name</p>
        <input type="text" name="name" placeholder="Enter Your Name">
        <p>Messege</p>
        <textarea name="Complaint" id="" cols="30" rows="10" placeholder="Enter your messege"></textarea> <br>
        <button id="btn" type="submit">Submit</button>
    </form>
    </div>
    <div class="card2">
        <h1>Get in touch</h1>
        <p class="p1">We can ensure reliability, low cost fares and most important, with safety and comfort in mind.
        </p><br>
        <p class="p2">Etiam sit amet convallis erat – class aptent taciti sociosqu ad litora torquent per conubia!
            Maecenas gravida lacus. Lorem etiam sit amet convallis erat.</p><br>
        <div class="icon">
            <a href="" id="bx"><i class='bx bxl-facebook' ></i></a>
            <a href="" id="bx"><i class='bx bxl-twitter' ></i></a>
            <a href="" id="bx"> <i class='bx bxl-instagram' ></i></a>
            <a href="" id="bx"><i class='bx bxl-linkedin' ></i></a>
        </div>
    </div>
    </div>
    </div>
    </div>

   

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
   AOS.init({
      duration: 4000,
    });
</script>

<?php include "./Component/Footer.php";?>
