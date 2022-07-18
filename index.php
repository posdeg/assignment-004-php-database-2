<?php
$server = "localhost";
$username="root";
$password="";
$database="web2";

$conn= mysqli_connect($server,$username,$password,$database);
if(isset($_POST["submitbutton"]))
{
   //1.fetch form data
   $firstname= $_POST['firstname'];
   $lastname= $_POST['lastname'];
   $phonenumber= $_POST['phonenumber'];
   $email= $_POST['email'];
   $message= $_POST['message'];
   

    //2. submit form data
    $insertData = mysqli_query($conn, "INSERT INTO
    contactus(firstname,lastname,phonenumber,email,message)
    VALUES('$firstname', '$lastname','$phonenumber','$email','$message')");

if($insertData)
{
   echo "Data submitted successfully";
}
else
{
   echo "Error occurred";
} 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <!--  navigation starts here -->
    <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top shadow ">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link active">Home</a>
                    <a href="aboutus.php" class="nav-link">About Us</a>
                    <a href="enroll.php" class="nav-link btn-btn primary">Register now</a>
                </div>
            </div>
        </div>
    </nav> -->
    <!-- end navigation bar -->
    <main class="p-5 bg-light mb-4 ">
        <h1>Welcome Cosmas Kung'u</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt impedit vel earum voluptates officiis maxime vero autem consequatur. Quae cum eos aspernatur accusantium, sit veritatis?
        </p>
        <button class="btn btn-primary">Learn more</button>
    </main>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h1>Header 1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto commodi laudantium unde blanditiis praesentium quis.</p>
                <button class="btn btn-primary">View details</button>
            </div>
            <div class="col-lg-3 col-md-6">
                <h1>Header 2</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto commodi laudantium unde blanditiis praesentium quis.</p>
                <button class="btn btn-primary">View details</button>
            </div>
            <div class="col-lg-3 col-md-6">
                <h1>Header 3</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto commodi laudantium unde blanditiis praesentium quis.</p>
                <button class="btn btn-primary">View details</button>
            </div>
            <div class="col-lg-3 col-md-6">
                <h1>Header 4</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto commodi laudantium unde blanditiis praesentium quis.</p>
                <button class="btn btn-primary">View details</button>
            
    
        </div>
        <!--contact us starts here  -->
        <div class="row pt-5">
            <h1>Contact Us</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum voluptas impedit mollitia tempore, explicabo natus ratione necessitatibus et vel nisi quisquam ad quasi blanditiis ab laboriosam delectus dicta consectetur. Dignissimos!</p>
            <form action ="index.php" method = "POST">
               <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" name = "firstname" class="form-control" placeholder="Enter your First Name">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name = "lastname" class="form-control" placeholder="Enter your Last Name">
                </div>
               </div>
               <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="Phone number" class="form-label">Phone Number</label>
                    <input type="tell" name = "phonenumber" class="form-control" placeholder="enter your Phone Number">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email"  name = "email" class="form-control" placeholder="Enter your Email">
                </div>
               </div>
               <div class="row">
                   <div class="mb-3 col-lg-12">
                    <label for="Message" class="form-label">Your Message</label>
                    <textarea cols="30" rows="5"class="form-control" name = "message" ></textarea>

                   </div>
               </div>
               <button type="submit"  name="submitbutton" class="btn btn-primary">Send a Message</button>

            </form>

        </div>
        <!-- end of contact us -->
        <hr>
        <footer>
            &copy; Zalego Academy 2022
        </footer>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<!--"bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"  -->
<script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>    
</body>
</html>