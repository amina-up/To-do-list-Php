<?php

if (isset($_POST['id'])){
    require '../db_conn.php'; 

// $id=$_POST['id'];

// if(empty($id)){
//     echo "error";
// }else{
//  $todos=$conn->prepare('SELECT id,checked FROM todoss WHERE id=?')
// $todos->execute([$id]);

// $todo=$todos->fetch();
// $uId=$todo['id'];
// $checked=$todo["checked"];

// $uchecked=$checked?0:1;
// $res=$conn->query("UPDATE todoss SET checked=$uchecked WHERE id=$uId")
 
// if($res){
//     echo $checked
// }
// else{
//     echo 
// }

// $conn=null;
// exit();
// }
// }else{
//     header('location:.../index.php?mess=error');

// }

// ?>