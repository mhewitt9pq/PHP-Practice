<?php
include_once 'header.php';

?>

<body class="bginfo">
<div class="container-fluid col-md-10 offset-md-1">
    <div class="row">
        <div class="card mt-3 px-2 py-2">
            <h1>Stationary Application</h1>
            <p>Greetings <?php echo $_POST["name"]; ?>,</p>
            <p>Your contact information is:</p
            <p>House number:  <?php echo $_POST["hnum"]; ?></p>
            <p>Postcode:  <?php echo $_POST["postcode"]; ?></p>
            <p>Email:  <?php echo $_POST["email"]; ?></p>


        </div>
    </div>
</div>
</body>

<?php include_once 'footer.php'; ?>

