<html>

    <head>
        <title>
            My Web Page
        </title>
    </head>

    <body>

        <h1>Sign Up</h1>
        <h2>Using GET parameter</h2>
        <hr>
            <form action="index_get.php" method="get">
                <label>Name: </label>
                <input type="text" name="name">
                <br>
                <label>Country: </label>
                <input type="text" name="country">
                <br>
                <label>Username: </label>
                <input type="text" name="username">
                <br>
                <label>Password: </label>
                <input type="password" name="password">
                <br>
                <input type="submit" value="Sign Up">
            </form>

            <hr>
            <?php
            
                $p_name = $_GET["name"];
                $p_country = $_GET["country"];
                $p_username = $_GET["username"];
                $p_password = $_GET["password"];


                echo("Name: $p_name");
                echo("<br>");
                echo("Country: $p_country");
                echo("<br>");
                echo("Username: $p_username");
                echo("<br>");
                echo("Password: $p_password");
                echo("<br>");
                
            ?>



            <hr>
            
    </body>
</html>