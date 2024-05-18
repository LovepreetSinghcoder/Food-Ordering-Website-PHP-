<?php include ('partials/menu.php') ?>


<head>
    <style>
        /* Reset some basic styles */
body, h1, a, button, table, th, td {
    margin: 0;
    padding: 0;
    border: 0;
    font-family: Arial, sans-serif;
}

/* Overall body style */
body {
    background-color: #f4f4f9;
    color: #333;
    line-height: 1.6;
    padding: 20px;
}

/* Section styling */
.main-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 0 auto;
}

/* Container inside the main section */
.main-content-container {
    text-align: center;
}

/* Heading styling */
.main-content h1 {
    font-size: 2em;
    margin-bottom: 20px;
    color: #333;
}

/* Button and link styling */
.btn {
    display: inline-block;
    margin-bottom: 20px;
}

.btn a {
    text-decoration: none;
    color: #fff;
    background-color: #007BFF;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn a:hover {
    background-color: #0056b3;
}

/* Table styling */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table th, .table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.table th {
    background-color: #007BFF;
    color: #fff;
    font-weight: bold;
}

.table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table-row-heading th {
    border: none;
}

.table-row-data td {
    border: none;
}

/* Action links styling */
.table-row-data a {
    text-decoration: none;
    color: #007BFF;
    margin-right: 10px;
    transition: color 0.3s ease;
}

.table-row-data a:hover {
    color: #0056b3;
}

    </style>
</head>


<!-- Main Content Section  Starts -->
<section class="main-content">
    <div class="main-content-container">
        <h1>Manging Food Page</h1>

        <button class="btn">

            <a href="add-food.php">Add Food</a>
        </button>
        <table class="table">
            <tr class="table-row-heading">
                <th>Sr. No.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>

            <tr class="table-row-data">
                <td>1.</td>
                <td>Lovpreet Singh</td>
                <td>Singh456</td>
                <td>
                    <a href="">Update Admin</a>
                    <a href="">Delete Admin</a>
                </td>
            </tr>
        </table>

    </div>
</section>

<!-- Main Content Section  Ends -->

<?php include ('partials/footer.php') ?>