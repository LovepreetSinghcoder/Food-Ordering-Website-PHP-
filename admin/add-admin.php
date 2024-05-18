<?php include ('partials/menu.php') ?>

<head>
    <style>
        /* Reset some basic styles */
body, h1, a, button, table, th, td, ul, li, p, strong, input {
    margin: 0;
    padding: 0;
    border: 0;
    font-family: Arial, sans-serif;
    box-sizing: border-box;
}

/* Overall body style */
body {
    background-color: #f4f4f9;
    color: #333;
    line-height: 1.6;
    padding: 20px;
}

/* Main content section */
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

.main-content-container h1 {
    font-size: 2em;
    margin-bottom: 20px;
    color: #333;
}

/* Table styling */
.table {
    width: 100%;
    margin-top: 20px;
}

.table .table-data-cont td {
    padding: 12px;
    text-align: left;
    vertical-align: middle;
}

.table .table-data-cont td:first-child {
    font-weight: bold;
    color: #333;
    width: 30%;
    text-align: right;
    padding-right: 10px;
}

.table .table-data-cont td:last-child {
    width: 70%;
    text-align: left;
}

.table .table-data-cont input[type="text"],
.table .table-data-cont input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1em;
    color: #333;
}

.table .table-data-cont input[type="text"]::placeholder,
.table .table-data-cont input[type="password"]::placeholder {
    color: #999;
}

/* Submit button styling */
.table .table-data-cont-btn td {
    text-align: center;
    padding-top: 20px;
}

.table .table-data-cont-btn input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.table .table-data-cont-btn input[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
</head>

<section class="main-content">
    <div class="main-content-container">
        <h1>Add Admin</h1>

        <table class="table">
            <tr class="table-data-cont">
                <td>Full Name:</td>
                <td>
                    <input type="text" name="full_name" placeholder="Enter your name">
                </td>
            </tr>

            <tr class="table-data-cont">
                <td>Username:</td>
                <td>
                    <input type="text" name="username" placeholder="Enter your username">
                </td>
            </tr>

            <tr class="table-data-cont">
                <td>Password:</td>
                <td>
                    <input type="password" name="password" placeholder="Enter your password">
                </td>
            </tr>

            
            <tr class="table-data-cont-btn">
            <td></td>
                <td>
                    <input type="submit" name="submit" value="+ Add Admin">
                </td>
            </tr>


        </table>
    </div>
</section>


<?php include ('partials/footer.php') ?>