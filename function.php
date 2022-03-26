<?php
require 'viewconn.php';
function get_all_data(){
    global $con;
    $result=mysqli_query($con,"SELECT * FROM story");

    if(mysqli_num_rows($result)>0){
     while($row = mysqli_fetch_assoc($result)){
         echo'
         <div class="col-md-4">
         <div class="card-header">
         Story
       </div>
         <div class="card-body">
         <h4><a class="text-secondary" href="single.php?id='.$row['id'].'">'.$row['title'].'</a></h4>
         <p class="card-text">'. htmlspecialchars_decode(substr($row['content'],0,100)).'...</p>
         <div class="d-flex justify-content-between align-items-center">
         <div class="btn-group">
         <a href="single.php?id='.$row['id'].'" class="btn btn-sm btn-outline-primary" role="botton" araia-pressed="true">View</a>
         <a href="update.php?id='.$row['id'].'" class="btn btn-sm btn-outline-secondary" role="botton" araia-pressed="true">Edit</a>
         </div>
         </div>
         </div>
         </div>
         
         ';
     
     }
    }

    else{
       echo "<h3> No Story</h3>";
    }
}
if(isset($_POST['title']) && isset($_POST['content'])){

    // Check if empty
if(!empty($_POST['title']) && !empty($_POST['content'])){

    $title=mysqli_real_escape_string($con,htmlspecialchars($_POST['title']));
    
    $content=mysqli_real_escape_string($con,htmlspecialchars($_POST['content']));


    $check_content= mysqli_query($con,"SELECT 'title' FROM story WHERE content='$title'");

    if(mysqli_num_rows($check_content)>0){
        echo "<h3> This Title already exists</h3>";
    }else{
        $insert_query=mysqli_query($con,"INSERT INTO story (title,content) VALUES('$title','$content')");


        if($insert_query){
            echo"<script>alert('Data inserted');window.location.href ='storylist.php';</script>";
            exit;
        }else{
            echo "<h3>Data was not inserted</h3>";
        }
    }
 



}else{
    echo "<h4>Fill all the fields</h4>";
}

}