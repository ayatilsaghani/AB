<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test View</title>
</head>
<body>
    <h1>Je suis la page  <?php echo  $numPage ?> </h1>
    <?php foreach($tab0fNames as $name){
        echo  $name .'<br>';
    }?>
</body>
</html>