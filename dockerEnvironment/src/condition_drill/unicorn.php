<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7.0 PHP</title>
</head>
<body>
    <h1>7.0 mamène</h1>
    <form action="#" method="GET">
        <p>are you a human, a act or a unicorn</p>
        <label for="human">Human</label>
        <input type="radio" name="nature" id="human" value ="human">
        <label for="cat">cat</label>
        <input type="radio" name="nature" id="cat" value="cat">
        <label for="unicorn">unicorn</label>
        <input type="radio" name="nature" id="unicorn" value="unicorn">
        <input type="submit" value="envoyer">
    </form>
    <?php 
        $nature = $_GET['nature'];

        switch ($nature){
            case ($nature == 'human') :
                echo '<img src ="https://media0.giphy.com/media/vvBsAcNyjKk6iOkVx3/giphy.gif?cid=ecf05e47ju8bwuwtpa4awabq0snrto9cdijq1bubyqxczdq7&rid=giphy.gif&ct=g" alt="The Office mamène">';
                break;
            case ($nature == 'cat') :
                echo '<img src ="https://media4.giphy.com/media/gHh268rOCWbjLMHEw1/giphy.gif?cid=ecf05e47l0k26a7drt1etykjq96t5tvbv4iovg9w7k36rk9w&rid=giphy.gif&ct=g" alt="The cat mamène">';
                break;
            case ($nature == 'unicorn') :
                echo '<img src ="https://media4.giphy.com/media/122pLlowwMS5aM/giphy.gif?cid=ecf05e47b57yuoegzww6wma4tcggc36569zr31gj4z3iyiar&rid=giphy.gif&ct=g" alt="The cat mamène">';
                break;
        }
    ?>
</body>
</html>