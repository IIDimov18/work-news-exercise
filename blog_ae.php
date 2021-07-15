<?php
include_once "db.php";
include_once "inc/raintpl/rain.tpl.class.php";
$install_path="";
$sm = new RainTPL();

//RAIN TPL ===============================================
raintpl::$tpl_dir = $install_path."templates/"; // template directory
raintpl::$cache_dir = $install_path."cache/"; // cache directory

$act="";
if(isset($_REQUEST['act'])&&isset($_REQUEST['id'])){
    $act = $_REQUEST['act'];
    $id = intval($_REQUEST['id']);
  }
  

// Delete
if($act=="delete"){
    $res = $conn->query("DELETE FROM News WHERE Id = '{$id}'");
    if($res){
        header("Location: blog.php");
        die;
    }
}

if($act=="edit"){
    if(isset($_POST['submit'])){
        $title  = $_POST['title'];
        $desc  = $_POST['description'];
        $PICSQL="";

        if(isset($_FILES['img']['name'])){
            // $oldFile=pathinfo("img/".$id.".");
            // unlink("img/".$id.$oldFile['extension']);
            // $info = pathinfo($_FILES['img']['name']);
            // $ext = $info['extension'];
            // $newname = $id.".".$ext; 
            //TODO Remove old picture
            //TODO make $newname with getdate so it can't repate
            $newname = $_FILES['img']['name']; 

            $target = 'img/'.$newname;
            $res  = move_uploaded_file(  $_FILES['img']['tmp_name'], $target);
            if($res) {
                $PICSQL = ", Thumbnail = '$newname'";

            }
        }
    $res = $conn->query("UPDATE News SET Title = '$title', Description = '$desc' {$PICSQL} WHERE Id = '{$id}'");  
    if($res){
        header("Location: blog.php");
        die;
    }

    }
    else{
        $res = $conn->query("SELECT * FROM News WHERE Id = '{$id}'");
        $row = $res->fetch_assoc();

        $sm->assign("row",$row);
        $sm->display("edit.html");
        die;
    }
}

$sm->display("blog_ae.html");