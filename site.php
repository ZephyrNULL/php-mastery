<!DOCTYPE html>

<html>

    <head>
        <title>
            My Server
        </title>
        
    </head>

    <body>
        <h1>
            Learning PHP as a Language
        </h1>
        <hr>

        <h2> Strings and Variables in php</h2>
        <hr>
        <?php
        
            $characterName = "Mike";
            $characterAge = 20;
            $characterRole = "System Engineer";
            $characterLoc = "US";

            $phrase = "System Engineering is DEAD";

            echo("<h3>There is a man called $characterName, and he is $characterAge years old. He is a $characterRole in $characterLoc </h3>");
        
            echo strtolower($phrase);
            echo("<br>");
            
            echo strtoupper($phrase);
            echo("<br>");
    
            $lenghtofstr = strlen($phrase);
            echo("String lenght is $lenghtofstr.");
            echo("<br>");
            echo("$phrase[0]");
            $phrase[0] = "B";
            echo("<br>");
            echo($phrase);
            echo("<br>");
            
            $replaced = str_replace("Bystem", "Biscuit", $phrase);
            echo($replaced);
            echo("<br>");

            echo substr($replaced, 8);
            echo("<br>");
            echo substr($replaced, 8, 11);
            
            
        ?>
        <hr>

        <h2>Arithmetic Operations</h2>
        <?php
                echo("<hr>");
                echo 40;
                echo("<br>");
                echo -80;
                 echo("<br>");
                echo 45.98;
                 echo("<br>");
                echo -896.4343;
                echo("<br>");

                echo("<br>");
                echo 5 + 10;
                echo("<br>");
                $result = 4 + 5 *4 - 2;
                echo("Result is $result");
                echo("<br>");
                $module_result_odd = 10 % 3;
                $module_result_even = 10 % 2;
                echo("10 % 3 is equal to: $module_result_odd");
                echo("<br>");
                echo("10 % 2 is equal to: $module_result_even");



        ?>
        <hr>
        <h2>Math Operations</h2>
        
        <?php 
            
            echo("<hr>");
            $absolute = abs(-100);
            echo("Absolute Value of -100: $absolute");
            echo("<br>");
            $power = pow(2,4);
            echo("2 to the 4th power is: $power");
            echo("<br>");
            $squareRoot = sqrt(16);
            echo("Square root of 16 is: $squareRoot");
            echo("<br>");
            echo("Max value 4, 7 is ");
            echo max(4,7);
            echo("<br>");
            echo("Min value 4, 7 is ");
            echo min(4,7);
            echo("<br>");
            $toRound = round(5.6764);
            echo("Round down 5.6764 is $toRound");
            echo("<br>");
            $toCeil = ceil(5.6764);
            echo("Round up 5.6764 is $toCeil");
            echo("<br>");
            $toFloor = floor(5.6764);
            echo("Round floor 5.6764 is $toFloor");
            echo("<br>");
        
        
        
        ?>
        <hr>
        <h2>Getting User Input</h2>
        <hr>
       
        <form action="site.php" method="get">
            Name: <input type="text" name="name">
            <br>
            Username: <input type="text" name="username">
            <br>
            Password: <input type="password" name="password">
            <br>
            <input type="submit">

        </form>
        <br>

        Name : <?php echo($_GET["name"])?>
        <br>        
        Username : <?php echo($_GET["username"])?>
        <br>
        Password : <?php echo($_GET["password"])?>
        <br>
               
        <hr>
        <h2>Basic Calculator</h2>
        <hr>

        <form action="site.php" method="get">

            Enter the first number: <input type="number" name="num1">
            <br>
            Enter the second number: <input type="number" name="num2"> 
            <br>
            <input type="submit">
        </form>

        Addition : <?php echo $_GET["num1"] + $_GET["num2"]?>
        <br>
        Subtration : <?php echo $_GET["num1"] - $_GET["num2"]?>
        <br>
        Multiplication : <?php echo $_GET["num1"] * $_GET["num2"]?>
        <br>
                
        


        
    </body>
</html>