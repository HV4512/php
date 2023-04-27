<html>
<head>
    <title>
        form handling
    </title>
</head>
<body>
    <?php
        if(empty($_POST['firstname'] && $_POST['lastname']))
        {
            echo "</br> enter data in all the fields";
        }
        else{
            $f_name = $_POST['firstname'];
            $l_name = $_POST['lastname'];

            echo "your name is : ",$f_name;
            echo "  your last name is : ",$l_name;
        }

    ?>
    <form action="" method="POST">
        <p>First name : <input type="text" name="firstname" value=""></p>
        <p>Last name : <input type="text" name="lastname" value = ""></p>
        <br><br>
        <input type = "submit" value = "submit">
    </form>
</body>
</html>