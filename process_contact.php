<?php
include 'connection.php';

// Retrieve form data
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];

// Insert data into the database
$sql = "INSERT INTO kontak (nama, email, no_hp) VALUES ('$nama', '$email', '$no_hp')";
if ($conn->query($sql) === TRUE) {
    // Display a success message using JavaScript
    echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>