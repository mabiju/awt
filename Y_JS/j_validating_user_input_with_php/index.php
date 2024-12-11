<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validating user input with PHP</title>
    <script>
        function validateForm() {
            let name = document.forms["userForm"]["name"].value;
            let email = document.forms["userForm"]["email"].value;

            if (name == "") {
                alert("Name must be filled out");
                return false;
            }
            
            if (email == "") {
                alert("email must be filled out");
                return false;
            }

            // Basic email validation
            let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!regex.test(email)) {
                alert("Invalid email format");
                return false;
            }

            return true; // If everything is valid
        }
    </script>
</head>

<body>
    <form name="userForm" action="process.php" method="post" onsubmit="return validateForm()">
        <table>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Submit"></td>
            </tr>

        </table>
    </form>
</body>

</html>