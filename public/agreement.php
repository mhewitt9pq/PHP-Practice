<?php
include_once 'header.php';

?>

<body class="bginfo">
<div class="container-fluid col-md-10 offset-md-1">
    <div class="row">
        <div class="card mt-3 px-2 py-2">
            <h1>Stationary Application</h1><br>
            <p1>Welcome. You have selected <?php echo $_GET["agreement"]; ?> for the agreement.</p1><br>
            <p1>Please press the button to proceed with the next stage:</p1><br>
            <input name="regPage" type="button" value="Registration Page" onclick="window.open('registrationPanel.php')"/>
        </div>
    </div>
</div>
</body>













<?php include_once 'footer.php'; ?>

