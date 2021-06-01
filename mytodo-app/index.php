<?php
require 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <div class="main-section">
<div class="add-section">

<?php if(isset($_GET['mess']) && $_GET['mess'] =='error'){?>
error
<?php}?>


<form action="actions/add.php" method="POST" autocomplete="off">
  <input type="text" name="title" placeholder="this field is required"/>
<button type="submit">Add &nbsp; <span>&#43;</span></button>
</form>
</div>
<?php
$todos=$conn->query("SELECT * FROM todoss ORDER BY id DESC");


?>
<div class="show-todo-section">
<?php if($todos->rowCount()<=0){?>
<div class="todo-item">
<div class="empty">
<img src="image/todo.jpg" width="100%"/>
<img src="image/pill_loader.gif" width="250px"/>
</div>
</div>
<?php }?>


<?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="todo-item">
                    <span id="<?php echo $todo['id']; ?>"
                          class="remove-to-do">x</span>
                    <?php if($todo['checked']){ ?> 
                        <input type="checkbox"
                               class="check-box"
                               data-todo-id ="<?php echo $todo['id']; ?>"
                               checked />
                        <h2 class="checked"><?php echo $todo['title'] ?></h2>
                    <?php }else { ?>
                        <input type="checkbox"
                               data-todo-id ="<?php echo $todo['id']; ?>"
                               class="check-box" />
                        <h2><?php echo $todo['title'] ?></h2>
                    <?php } ?>
                    <br>
                    <small>created: <?php echo $todo['date-time'] ?></small> 
                </div>
            <?php } ?>
       </div>
    </div>

</body>
</html>