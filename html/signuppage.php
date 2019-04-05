<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop2</title>
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">


</head>

<body>
    <!-- navigation bar-->
    <header>
        <nav class="menu">
            <ul class="menu">
                <li>
                    <a href="../index.php">Xventurers</a>
                </li>
                <li>
                    <a href="../html/shop.php">Shop</a>
                </li>
                <li>
                    <a href="../html/about.php">About</a>
                </li>
                <li>
                    <a href="../html/signuppage.php">SignUp</a>
                </li>
                <li>
                    <a href="../html/contact.php">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

     <!-- signup page -->
    

        <form action="formHandler.php" method="POST" class="form">

        <h1>Sign Up Here!</h1>

        <legend>Please fill in your personal info</legend>
        <label for="name">FirstName:</label>
        <input type="text" id="name" name="user_firstname" autofocus>

        <label for="name">LastName:</label>
        <input type="text" name="user_lastname">

        <label for="mail">Email:</label>
        <input type="email" id="mail" name="user_email">

        <label for="password">Password:</label>
        <input type="password" id="password" name="user_password">

        <button type="submit">Sign Up</button>

    </form>



    <!-- footer -->
    <footer>
        <span>
            Ferran Jay &copy; 2019
        </span>
    </footer>

    <script src="main.js"></script>
</body>

</html>