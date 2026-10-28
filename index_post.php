<html>
    <head>
        <title>My Web Page</title>
    </head>

    <body>
        <h1>Sign Up</h1>
            <h2>Using POST parameter</h2>
            <hr>

            <form action="index_post.php" method="post">
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

                $p_name = $_POST["name"];
                $p_country = $_POST["country"];
                $p_username = $_POST["username"];
                $p_password = $_POST["password"];


                echo("Name: $p_name");
                echo("<br>");
                echo("Country: $p_country");
                echo("<br>");
                echo("Username: $p_username");
                echo("<br>");
                echo("Password: $p_password");
                echo("<br>");
            
            
            
            ?>
    </body>
</html>