<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="view/about.view.php">About Page</li>
            <li><a href="view/contact.view.php">Contact Page</li>
        </ul>
    </nav>
    
    <?php
           foreach($tasks as $task){
            if($task->completed){
                echo "<strike><li>";
                echo $task->description;
                echo "</strike></li>";
            }else{
                echo '<li>';
                echo $task->description;
                echo '</li>';
            }
        }
?>
</body>

</html>