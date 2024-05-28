<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Page</title>
</head>
<body>
    <style> 
        *{
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: white;
        }

        .container {
            margin: auto;
            margin-top: 70px;
            padding: 0;
            width: 60%;
            height: 70vh;
            padding: 30px;
            display: flex;
            align-content: center;
            align-items: center;
            justify-content: space-around;
        }

        .formContainer {
            background-color: white;
            border-radius: 20px;
            width: 300px;
            height: 60vh;
            color: #0d3cba;
            border: 2px solid #0d3cba;
            box-shadow: 6px 6px 11px rgba(0, 0, 0, 0.14);
        }

        form {
            margin: auto;
            padding: auto;
            width: 70%;
        }

        label {
            font-size: 13px;
        }

        input, select {
            width: 95%;
            height: 30px;
            font-size: 15px;
            margin: auto;
            border-top: 0px;
            border-right: 0px;
            border-left: 0px;
            margin-bottom: 9px;
        }

        .submit {
            width: 99%;
            height: 40px;
            margin-top: 30px;
            border-radius: 50px;
            background-color: #24d15e;
            border: 0px;
            color: white;
        }

        .submit:hover{
            cursor: pointer;
            background-color: #1dad4e;
        }

        h1, h4 {
            color: #0d3cba;
        }

        h4 {
            font-weight: 300;
        }

        .texts {
            width: 400px;
        }

        p {
            margin-top: 40px;
            margin-bottom: 30px;
            font-size: 20px;
            text-align: center;
            font-weight: bold;
        }

        select {
            border-bottom: 2px solid gray;
        }

    </style>

    <div class="container">
        <div class="texts">
            <h1>Web Developer Intern Assessment</h1>
            <h4>Instruction: Write a code with the following data: First Name, Last Name, DOB, Gender & Submit button. Then submit it to the success.php page. Also, write the code of the Php page.</h4>
        </div>

        <div class="formContainer">
            <p>SUBMIT FORM</p>
            
            <form action="success.php" method="post">
                <label for="firstName">First Name:</label><br>
                <input type="text" name = "firstName" required><br>

                <label for="firstName">Last Name:</label><br>
                <input type="text" name = "lastName" required><br>

                <label for="firstName">DOB:</label><br>
                <input type="date" name = "dob" required><br>

                <label for="gender">Gender</label><br>
                <select name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Prefer not to say">Prefer not to say</option>
                </select>

                <input type="submit" class="submit">
            </form>
        </div>
    </div>
</body>
</html>
