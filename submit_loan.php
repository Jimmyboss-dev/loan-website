<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $term = $_POST['term'];

    $sql = "INSERT INTO loans (name, email, amount, term) VALUES ('$name', '$email', '$amount', '$term')";

    if ($conn->query($sql) === TRUE) {
        echo "Loan application submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
