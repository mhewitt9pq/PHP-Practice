<?php
include_once 'header.php';

?>

<body class="bginfo">
<div class="container-fluid col-md-10 offset-md-1">
    <div class="row">
        <div class="card mt-3 px-2 py-2">
            <h1>Stationary Application</h1>
            <p1>Welcome to this fictional stationary application page created for COMP2001 example. To continue, please accept our terms and conditions.</p1><br>

            <form action="welcome.php" method="post">
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" required><br>

                <label for="hnum">House number: </label>
                <input type="text" id="hnum" name="hnum" required><br>

                <label for="postcode">Postcode: </label>
                <input type="text" id="postcode" name="postcode" required><br>

                <label for="email">Email: </label>
                <input type="text" id="email" name="email"><br>

                <input type="submit" value="Submit">

            </form>
        </div>
    </div>
</div>
</body>

<?php include_once 'footer.php'; ?>

