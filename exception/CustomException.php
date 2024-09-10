<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP POC</title>
</head>

<body>
    <div class="container">
        <div class="col-sm-4">
            <h5 class="text-right">sigi in</h5>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
<?php

// Creating a custom exception class that extends the built-in Exception class.
class FormValues extends Exception {
    // Function to return a custom error message.
    public function displayCustomError() {
        return "Email & password should not be empty";
    }
}

// Check if the form has been submitted via a POST request.
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // try Block: The block of code that you want to monitor for exceptions.
    try {
        // Retrieve the email and password from the POST request.
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if both the email and password fields are not empty.
        if (!empty($email) && !empty($password)) {
            // If both fields are filled, display a success message.
            echo "Successfully Submitted with email " . $email . " and password " . $password;

            // Set a cookie with the email as the key and the password as the value, valid for 1 hour.
            setcookie($email, $password, time() + 3600, '/', '', false, false);
        }
        else {
            // If either field is empty, throw a custom exception.
            // throw Keyword: Used to throw an exception if a condition is met or an error is detected.
            throw new FormValues();
        }
    }
    // Catch the custom exception and display the custom error message.
    // catch Block: A block of code that handles the exception. It takes an Exception object as a parameter,
    // which provides methods to get information about the exception.
    catch (FormValues $e) {
        echo "Error: " . $e->displayCustomError();
    }
}
