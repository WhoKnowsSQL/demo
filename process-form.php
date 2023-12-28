<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $company = $_POST["company"];
    $message = $_POST["message"];
    
    // Set up email parameters
    $to = "sherlott.h@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    
    // Compose the email message
    $emailMessage = "Name: $name\nEmail: $company\nCompany: $email\nMessage: $message";
    
    // Send the email
    mail($to, $subject, $emailMessage, $headers)
    or die ("Error!");

    echo'<!DOCTYPE html>
    <!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <title>ByteHue - Contact</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="bannerContact">
      <div class="navbar">
        <a href="index.html">
            <img src="ByteHue.png" alt="Logo" class="logo">
        </a>
            <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="about.html">About me</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        </div>
        <section class="hidden">
            <div class="thanks">
                <h1>Thank you!</h1>
            </div>
            <div class="success">
                <p>I will get back to you as soon as possible</p>
            </div>
            <div class="Go-back">
              <p>Click here to <a href="index.html"> Go back</a></p>
          </div>
            <script>
                const observer = new IntersectionObserver((entries) => {
entries.forEach((entry) => {
  console.log(entry)
  if (entry.isIntersecting) {
    entry.target.classList.add("show");
  } else {
    entry.target.classList.remove("show");
  }
});
});
const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((el) => observer.observe(el));


            </script>
        </section>
</body>
</html>';
    
    // Redirect back to the contact form with a success message
    header("Location: contact.html?status=success");
    exit();
} else {
    // Redirect back to the contact form with an error message
    header("Location: contact.html?status=error");
    exit();
}
?>
