<?php
session_start(); // Start the session

// Check if session variables exist and display form data
if (isset($_SESSION["nome"]) && isset($_SESSION["email"])) {
    $nome = $_SESSION["nome"];
    $email = $_SESSION["email"];
    // Retrieve other form fields similarly
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Data</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <form>
    <!-- Your form fields -->
    <!-- ... -->
    <button type="submit" class="btn btn-primary">Editar</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<?php
} else {
    // Handle the case where session variables are not set
    echo "Form data not found.";
}
?>
