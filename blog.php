<?php
include_once "db.php";
include_once "inc/raintpl/rain.tpl.class.php";
$install_path="";
$sm = new RainTPL();

//RAIN TPL ===============================================
raintpl::$tpl_dir = $install_path."templates/"; // template directory
raintpl::$cache_dir = $install_path."cache/"; // cache directory



$stmt = $conn->prepare('SELECT * FROM news');
$stmt->execute();
$result = $stmt->get_result();

$news = [];
while($row = $result->fetch_assoc()) {
    $news[]=$row;
    // array_push($news,["Title" => ["Title"], "Description" => $row["Description"],"Date" => $row["Date"], "Id" =>$row["Id"]]);
  }

$sm->assign("news",$news);
$sm->display("blog.html");