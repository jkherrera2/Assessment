<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstName = isset($_POST['firstName']) ? htmlspecialchars($_POST['firstName']) : 'N/A';
        $lastName = isset($_POST['lastName']) ? htmlspecialchars($_POST['lastName']) : 'N/A';
        $dob = isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : 'N/A';
        $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : 'N/A';
    }
    else {
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submitted</title>
</head>
<body>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            margin: auto;
            width: 60vw;
            justify-content: center;
            align-items: center;
            margin-top: 150px;
        }

        .wrapper {
            margin: auto;
            padding: 30px;
            background-color: white;
            width: 300px;
            height: 50vh;
            color: #0d3cba;
            border-radius: 20px;
            border: 2px solid #0d3cba;
            box-shadow: 6px 6px 11px rgba(0, 0, 0, 0.14);
        }

    </style>

    <div class="container">
        <div class="wrapper">
            <h1 style="color: #24d15e; text-align:center; margin-bottom: 70px;">Form Submitted Successfully</h1>
            <p>Thank you for submitting your information.</p>
            <p><b>First Name:</b> <?php echo $firstName?></p>
            <p><b>Last Name:</b> <?php echo $lastName?></p>
            <p><b>DOB:</b> <?php echo $dob?></p>
            <p><b>Gender:</b> <?php echo $gender?></p>
        </div>
    </div>
</body>
</html>
