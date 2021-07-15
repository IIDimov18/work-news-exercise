<?php
include_once "db.php";
include_once "inc/raintpl/rain.tpl.class.php";
$install_path="";
$sm = new RainTPL();

//RAIN TPL ===============================================
raintpl::$tpl_dir = $install_path."templates/"; // template directory
raintpl::$cache_dir = $install_path."cache/"; // cache directory

$id = $_REQUEST['id'];


$stmt = $conn->prepare('SELECT Title, Thumbnail, Description, Date FROM news WHERE Id = ?');
$stmt->bind_param('i',$id);
$stmt->execute();
$result = $stmt->get_result();


$row = $result->fetch_assoc();
if(empty($row)){
    header("Location: http://localhost/newsBlog/index.php");
    die();
}
$sm->assign("row",$row);
$sm->display("viewPage.html");