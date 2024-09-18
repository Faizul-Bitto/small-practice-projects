<?php include 'header_and_footer_file/header.php'; ?>


<?php

$name = $email = $body = '';
$nameError = $emailError = $bodyError = '';



// Form submit :

if (isset($_POST['submit'])) {



    //Validate Name
    if (empty($_POST['name'])) {
        $nameError = 'Name is required.';
    } else {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }


    //Validate Email
    if (empty($_POST['email'])) {
        $emailError = 'email is required.';
    } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }


    //Validate body
    if (empty($_POST['body'])) {
        $bodyError = 'Feedback is required.';
    } else {
        $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }




    if (empty($nameError) && empty($nameError) && empty($nameError)) {

        //Add to database:
        $sql = "INSERT INTO my_feedbacks (name, email, body) VALUES ('$name', '$email', '$body')";

        if (mysqli_query($connection, $sql)) {

            //Success

            header('Location:feedback.php');
        } else {

            //If shows Error : 
            echo 'Error: ' . mysqli_error($connection);
        }
    }
}

?>


<img src="/practice_form-making/image/Bitto_.jpg" class="w-25 mb-3" alt="">
<h2>Feedback</h2>
<p class="lead text-center my-4">Leave feedback for Faizul</p>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">


    <div class="mb-3">

        <label for="name" class="form-label">Name</label>
        <input type="name" class="form-control <?php echo $nameError ? 'is-invalid' : NULL; ?>" id="name" name="name" placeholder="Enter your Name">

        <div class="invalid-feedback"><?php echo $nameError; ?></div>

        <div id="name" class="form-text">We never share your identities with anyone else. You are protected.</div>

    </div>

    <div class="mb-3">

        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $emailError ? 'is-invalid' : NULL; ?>" id="email" name="email" placeholder="Enter your Email Address">

        <div class="invalid-feedback"><?php echo $emailError; ?></div>

        <div id="email" class="form-text">We never share your identities with anyone else. You are protected.</div>

    </div>

    <div class="mb-3">

        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo $bodyError ? 'is-invalid' : NULL; ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>

        <div class="invalid-feedback"><?php echo $bodyError; ?></div>

    </div>

    <div class="mb-3">

        <input type="submit" name="submit" value="Send" class="btn btn-dark">

    </div>


</form>


<?php include 'header_and_footer_file/footer.php'; ?>