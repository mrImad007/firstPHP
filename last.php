<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Rendu</title>
</head>
<body>
        <!-- Navigation -->
        <div class="nav">
        <div class="logo">
            <h3>TESTING</h3>
        </div>
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="form.php">Next</a>
        </div>
    </div>
    <!-- End navigation -->

    <h1>
        Compte rendu
    </h1>

    <div id="last">
    Bonjour, 
    <?php
        $name=$_POST['name'];
        echo $name
    ?>
    <br>
    Voici vos information :
        <br>
        Num de tel : <?php echo $_POST['phone'] ?><br>
        Email : <?php echo $_POST['mail'] ?><br>
        Adress : <?php echo $_POST['adress'] ?>
    </div>
</body>
</html>