<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $nid = $_POST['nid'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $dbconnect = mysqli_connect('localhost', 'root', 'password', 'miles_builders');

    if($dbconnect) {
        // echo "DB connected successfully";

        $sql = "INSERT INTO `login`(`name`, `email`, `mobile`, `nid`, `dob`, `gender`, `address`, `message`)
                            VALUES ('$name', '$email', '$mobile', '$nid', '$dob', '$gender', '$address', '$message')";
        
        $dataInsert = mysqli_query($dbconnect, $sql);

        if ($dataInsert) {
            echo "Data inserted to DB Successfully";
        } else {
            die("Data insertion failed: " . mysqli_error($dbconnect));
        }

    } else {
        die("Database connection failed: " . mysqli_error($dbconnect));
    }

}


    // // Set up email parameters
    // $to = "test@gmail.com"; // Replace with your email address
    // $subject = "Contact Form Submission";
    // $body = "Name: $name\nEmail: $email\nMobile: $mobile\nNID: $nid\nDOB: $dob\nGender: $gender\nAddress: $address\nMessage: $message";
    // $headers = "From: $name <$email>";

    // // Send email
    // if (mail($to, $subject, $body, $headers)) {
    //     echo "Thank you for contacting us! We will get back to you shortly.";
    // } else {
    //     echo "Oops! Something went wrong and we couldn't send your message.";
    // }
// } else {
//     // If not a POST request, redirect back to the contact form
//     header("Location: contact-form.html")
// }


?>

