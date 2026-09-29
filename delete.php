<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST['id'];

    $sql = $conn->prepare(
        "DELETE FROM products WHERE product_id=?"
    );

    $sql->bind_param('i', $id);

    if ($sql->execute()) {
        echo "Data deleted";
        header("Location: home.php");
        exit();
    } else {
        echo "Delete failed";
    }
}
?>

<!doctype html>

<html lang="en" data-bs-theme="light">

<head>
    <title>Delete Product</title>

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
<h3 class="text-center mt-4">Delete Product</h3>

<div class="container border rounded shadow p-5 mt-4">

    <form action="" method="post">

        <div class="mb-3">
            <label class="form-label">Product ID</label>

            <input
                type="number"
                class="form-control"
                name="id"
                placeholder="Enter Product ID"
                required
            />
        </div>

        <button
            type="submit"
            class="btn btn-danger"
        >
            Delete
        </button>

        <a
            href="home.php"
            class="btn btn-secondary"
        >
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
