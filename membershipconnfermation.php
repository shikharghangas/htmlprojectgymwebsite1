<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesConfermation.css">
</head>
<body>
<body>
    
    <h1>Your appointment has been confiremd.<img src="green-tick.png" alt="Green Tick"></h1>

    <main>
    <?php
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect form data
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $email = $_POST["email"];
            $dob = $_POST["dob"];
            $phone = $_POST["phone"];
            $houseNumber = $_POST["houseNumber"];
            $street = $_POST["street"];
            $city = $_POST["city"];
            $province = $_POST["province"];
            $postalCode = $_POST["postalCode"];
            $preferredDate = $_POST["preferredDate"];
            $preferredTime = $_POST["preferredTime"];
        
            // Process the data as needed (you can save it to a database, send an email, etc.)
            // For demonstration purposes, we will just print the data here
            echo "First Name: $firstName <br>";
            echo "Last Name: $lastName <br>";
            echo "Email: $email <br>";
            echo "Date of Birth: $dob <br>";
            echo "Phone Number: $phone <br>";
            echo "House Number: $houseNumber <br>";
            echo "Street Name: $street <br>";
            echo "City: $city <br>";
            echo "Province: $province <br>";
            echo "Postal Code: $postalCode <br>";
            echo "Preferred Date: $preferredDate <br>";
            echo "Preferred Time: $preferredTime <br>";
        } else {
            // Redirect to the form page if the form is not submitted
            header("Location: classes.html");
            exit();
        }
        ?>

    </main>
    
</body>
</html>