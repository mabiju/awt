<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);

    // Validate name
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Check for errors
    if (empty($errors)) {
        echo "<p style='color:green;'>Form submitted successfully!</p>";
        echo "<script>setTimeout(\"location.href = 'index.php'; \",2000); </script>";
        // Process the data (e.g., save to database)
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        
        // Redisplay the form with previous inputs
        include 'index.php';  // Assuming your HTML form is in index.php
    }
} else {
    include 'index.php';  // Display the form initially
}
?>
