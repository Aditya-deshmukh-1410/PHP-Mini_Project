<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST['id'];
    $pname = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $brand = $_POST['brand'];
    $description = $_POST['description'];

    $sql = $conn->prepare(
        "UPDATE products 
         SET product_name=?, category=?, price=?, quantity=?, brand=?, description=?
         WHERE product_id=?"
    );

    $sql->bind_param(
        'ssdissi',
        $pname,
        $category,
        $price,
        $quantity,
        $brand,
        $description,
        $id
    );

    if ($sql->execute()) {
        header("Location: home.php");
        exit();
    } else {
        echo "Update failed";
    }
}
?>

<!doctype html>

<html lang="en" data-bs-theme="light">

<head>
    <title>Update Product</title>

```
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
/>
```

</head>

<body>

<main>

```
<h3 class="text-center mt-4">Update Product</h3>

<div class="container border rounded shadow p-5 mt-4">

    <form action="" method="post">

        <div class="mb-3">
            <label class="form-label">Product ID</label>
            <input
                type="text"
                class="form-control"
                name="id"
                placeholder="Enter product ID"
                required
            />
        </div>

        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input
                type="text"
                class="form-control"
                name="name"
                placeholder="Enter product name"
                required
            />
        </div>

        <div class="mb-3">
            <label class="form-label">Category</label>
            <input
                type="text"
                class="form-control"
                name="category"
                placeholder="Enter category"
                required
            />
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input
                type="number"
                step="0.01"
                class="form-control"
                name="price"
                placeholder="Enter price"
                required
            />
        </div>

        <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input
                type="number"
                class="form-control"
                name="quantity"
                placeholder="Enter quantity"
                required
            />
        </div>

        <div class="mb-3">
            <label class="form-label">Brand</label>
            <input
                type="text"
                class="form-control"
                name="brand"
                placeholder="Enter brand"
                required
            />
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <input
                type="text"
                class="form-control"
                name="description"
                placeholder="Enter description"
                required
            />
        </div>

        <button
            type="submit"
            class="btn btn-primary"
        >
            Update
        </button>

        <a href="home.php" class="btn btn-secondary">
            Cancel
        </a>

    </form>

</div>
```

</main>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
