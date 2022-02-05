<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="styles/style.css">

     <title>Document</title>
</head>
<style>
    
</style>
<body>
     <div class="menu" >
          <div class="menu_">

               <form action="" method="POST">
                   
                    <hr>
                    
                    <h2>Добавление </h2>
                    <hr>
                    <div>
                    <p>выберите цвет шара: </p>
                         <input name="color_ball" type="text">
                    </div> 
                    <br>
                    <div>
                    <p>выберите позицию шара: </p>
                         <input name= "x" type="text"> <input name="y" type="text">
                    </div> 
                    <br>
                    <div>
                    <p>выберите размер шара: </p>
                         <input name="size_dall" type="text">
                    </div> 
                    <br>

                    <button name="add_button"> + Добавить + </button>
                    <hr>
                    <h2>Удаление</h2>

                    <div>
                         <h3>удалить шар шар: </h3>
                         <p>выберите id шара которого вы хотите удалить</p>
                         <input type="text">
                         <button name="delete_dutton"> - Удалить - </button>
                    </div> 
               </form> 
          </div>
     </div>
     
     <?php
     $db = mysqli_connect( "localhost", "root", "", "balls_" );
    
     $table= mysqli_query($db,"SELECT * FROM `balls`");
     $color_ball = $_POST['color_ball'];
     $size_ball = $_POST['size_dall'];
     $x = $_POST['x'];
     $y = $_POST['y'];

     if(isset($_POST['add_button'])){
          if($color_ball!="" && $x!=0&& $y!=0&&$size_ball!=0){
               mysqli_query($db,"INSERT INTO `balls`(`radius`, `background-color`,`border-color`,`x`,`y`)
               VALUES ('$size_ball', '$color_ball','yellow' , $x , $y)");
          }
          var_dump($x);
          var_dump($_POST);
     }

     while($row = $table->fetch_assoc()){
     
     

          $x = $row["x"];
          $y = $row["y"];
          $borderColor = $row["border-color"];
          $backgroundColor = $row["background-color"];
          $radius = $row["radius"];
     
          
          

     
          require "baller.php";
     }


     mysqli_close( $db );
     ?>   
</body>
</html>