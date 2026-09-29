
<?php

include "db.php";
session_start();

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $pass = password_hash($_POST['password'],PASSWORD_BCRYPT);

    $sql = $conn->prepare('insert into users(first_name,last_name,username,email,gender,password) values(?,?,?,?,?,?)');

    $sql->bind_param('ssssss',$fname,$lname,$username,$email,$gender,$pass);

    if($sql->execute()){
        header("location:login.php");
    }else{
        echo " <script>alert('invalid crendientals!!')</script>";
    }


}



?>



<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>


            <h2 class="mt-4 text-center">Register with us</h2>

            <form action="" method="post">

                <div
                    class="container border rounded shadow p-5 mt-5"
                >
                    <div class="mb-3">
                        <label for="" class="form-label">First Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="first_name"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Last Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="last_name"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Gender</label>
                        <select
                            class="form-select form-select-md"
                            name="gender"
                            id=""
                        >
                            <option selected>Select one</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    

                    <div class="mb-3">
                        <label for="" class="form-label">username</label>
                        <input
                            type="text"
                            class="form-control"
                            name="username"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">password</label>
                        <input
                            type="text"
                            class="form-control"
                            name="password"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                    


                    
                </div>
                


            </form>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
