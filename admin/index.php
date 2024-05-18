<?php include ('partials/menu.php') ?>


<head>
    <style>
        /* Reset some basic styles */
body, h1, a, button, table, th, td, ul, li, p, strong {
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

.main-content-container strong {
    font-size: 1.5em;
    color: #333;
    display: block;
    margin-bottom: 20px;
}

/* Column styles */
.main-content-container .col-1,
.main-content-container .col-2,
.main-content-container .col-3,
.main-content-container .col-4,
.main-content-container .col-5 {
    background-color: #f8f9fa;
    padding: 20px;
    margin: 10px;
    border-radius: 8px;
    display: inline-block;
    width: calc(33.33% - 40px); /* Adjust width and margin to fit three columns in a row */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.main-content-container .col-1 h1,
.main-content-container .col-2 h1,
.main-content-container .col-3 h1,
.main-content-container .col-4 h1,
.main-content-container .col-5 h1 {
    font-size: 2.5em;
    color: #007BFF;
    margin-bottom: 10px;
}

.main-content-container .col-1 p,
.main-content-container .col-2 p,
.main-content-container .col-3 p,
.main-content-container .col-4 p,
.main-content-container .col-5 p {
    font-size: 1.2em;
    color: #555;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .main-content-container .col-1,
    .main-content-container .col-2,
    .main-content-container .col-3,
    .main-content-container .col-4,
    .main-content-container .col-5 {
        width: calc(50% - 40px); /* Adjust width for two columns in a row on smaller screens */
    }
}

@media (max-width: 480px) {
    .main-content-container .col-1,
    .main-content-container .col-2,
    .main-content-container .col-3,
    .main-content-container .col-4,
    .main-content-container .col-5 {
        width: calc(100% - 40px); /* Adjust width for single column on very small screens */
    }
}

    </style>
</head>
<!-- Menu Section  Ends -->

<!-- Main Content Section  Starts -->
<section class="main-content">
    <div class="main-content-container">
        <strong>Dashboard</strong>
        <div class="col-1">
            <h1>1</h1>
            <p>Drink</p>
        </div>
        <div class="col-2">
            <h1>2</h1>
            <p>Pizza</p>
        </div>
        <div class="col-3">
            <h1>3</h1>
            <p>Burger</p>
        </div>
        <div class="col-4">
            <h1>5</h1>
            <p>Chineese</p>
        </div>
        <div class="col-5">
            <h1>6</h1>
            <p>Italian</p>
        </div>
    </div>
</section>

<!-- Main Content Section  Ends -->

<!-- Footer Section  Starts -->

<?php include ('partials/footer.php') ?>