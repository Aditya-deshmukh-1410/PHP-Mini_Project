<?php
include 'db.php';
session_start();
$result = $conn->query('select * from products');
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

            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>


                            
                        </ul>
                        <a
                            href="csv.php"
                            class="btn btn-outline-success my-2 my-sm-0"
                        >
                            Generate CSV
                        </a>
                    </div>




                    
                </div>
            </nav>
            
            <div
                class="container text-center"
            >
                <h4 class="text-center mt-4">Welcome <?php echo $_SESSION['username']?></h4>

                <a
                    name=""
                    id=""
                    class="btn btn-primary mt-4"
                    href="insert.php"
                    role="button"
                    >Add
                </a>

                <a
                    name=""
                    id=""
                    class="btn btn-primary mt-4"
                    href="update.php"
                    role="button"
                    >Update
                </a>

                <a
                    name=""
                    id=""
                    class="btn btn-primary mt-4"
                    href="delete.php"
                    role="button"
                    >delete
                </a>
            </div>
                
            <div
                class="container mt-3"
            >
                <div
                    class="table-responsive"
                >
                    <table
                        class="table table-primary"
                    >
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">P_Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <?php
                                    while($row = $result->fetch_assoc()){
                                ?>
                                <td scope="row"><?php echo $row['product_id'] ?></td>
                                <td scope="row"><?php echo $row['product_name'] ?></td>
                                <td scope="row"><?php echo $row['category'] ?></td>
                                <td scope="row"><?php echo $row['price'] ?></td>
                                <td scope="row"><?php echo $row['quantity'] ?></td>
                                <td scope="row"><?php echo $row['brand'] ?></td>
                                <td scope="row"><?php echo $row['description'] ?></td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                

            </div>
            
                


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
