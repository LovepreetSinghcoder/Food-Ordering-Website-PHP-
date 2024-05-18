<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Admin Page</title>

    <link rel="stylesheet" href="../css/admin.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <style>
        /* Reset some basic styles */
body, h1, a, button, table, th, td, ul, li {
    margin: 0;
    padding: 0;
    border: 0;
    list-style: none;
    text-decoration: none;
    font-family: Arial, sans-serif;
}

/* Overall body style */
body {
    background-color: #f4f4f9;
    color: #333;
    line-height: 1.6;
    padding: 20px;
}

/* Navbar container */
.divCont {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 10px 20px;
    border-radius: 8px;
    margin-bottom: 20px;
}

/* Left side nav (could be used for a logo or additional elements) */
.left-side-nav {
    flex: 1;
}

/* Right side nav */
.right-side-nav {
    flex: 3;
}

.right-side-nav ul {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.right-side-nav li {
    margin-left: 20px;
}

.right-side-nav a {
    color: #fff;
    font-size: 1em;
    padding: 8px 16px;
    border-radius: 4px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.right-side-nav a:hover {
    background-color: #007BFF;
    color: #fff;
}

    </style>
</head>

<body>


    <!-- Menu Section  Starts -->
    <section class="divCont">
        <div class="left-side-nav"></div>
        <div class="right-side-nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="manage-admin.php">Admin</a></li>
                <li><a href="manage-category.php">Category</a></li>
                <li><a href="manage-food.php">Food</a></li>
                <li><a href="manage-order.php">Order</a></li>

            </ul>
        </div>
    </section>
