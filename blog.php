<?php
include_once "db.php";
include_once "inc/raintpl/rain.tpl.class.php";
$install_path="";
$sm = new RainTPL();

//RAIN TPL ===============================================
raintpl::$tpl_dir = $install_path."templates/"; // template directory
raintpl::$cache_dir = $install_path."cache/"; // cache directory


$search='';
if(isset($_REQUEST['query'])&&$_REQUEST['query']!=""){
  
  $search='WHERE MATCH (Title, Description, Thumbnail) AGAINST (% '.$_REQUEST['query'].' %)';
}
//SEARCH
//PAGINATION
$result = $conn->query("SELECT * FROM news '{$search}'");

$news = [];
while($row = $result->fetch_assoc()) {
    $news[]=$row;
    // array_push($news,["Title" => ["Title"], "Description" => $row["Description"],"Date" => $row["Date"], "Id" =>$row["Id"]]);
  }

$sm->assign("news",$news);
$sm->display("blog.html");