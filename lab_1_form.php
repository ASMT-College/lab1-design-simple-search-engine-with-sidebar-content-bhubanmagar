<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php
        echo "<h1 style='color:blue'> My Form </h1>"; 
        if(isset($_POST['submit'])){
            echo 'Username is :'.$_POST['Username']; 
            echo 'Password is :'.$_POST['pwd'];
            echo 'Date is :'.$_POST['date'];
        }
    ?>
    <form action="" method="post">
        <fieldset>
            <legend>login form</legend>
        <div>
            <label for="">Username : </label>
            <input type="text" name="Username" id="">
        </div>
        <br>
        <div>
            <label for="">Password : </label>
            <input type="password" name="pwd" id="">
        </div>
        <br>
        <input type="date" name="date" id=""></br><br>
        <input type="submit" value="submit" name="submit">
    </fieldset>
    </form>
</body>
</html>