<?php
include_once "db.php";
include_once "inc/raintpl/rain.tpl.class.php";
$install_path="";
$sm = new RainTPL();

//RAIN TPL ===============================================
raintpl::$tpl_dir = $install_path."templates/"; // template directory
raintpl::$cache_dir = $install_path."cache/"; // cache directory


$numberOfPages = 1;

$page = 1;
if(isset($_REQUEST['page'])){
    $page = $_REQUEST['page'];
}

$result = $conn -> query("SELECT COUNT(Id) FROM news");
$totalRows = mysqli_fetch_array($result)[0];
$totalPages = ceil($totalRows / $numberOfPages);
if($totalPages<$page||$page<=0){
    $page=1;
}
$pages = [];
for($i=1;$i<=$totalPages;$i++){
    $pages[]  = $i;
}



$search='';
if(isset($_REQUEST['query'])&&$_REQUEST['query']!=""){

  $search="WHERE Title Like '%".$_REQUEST['query']."%' OR Description LIKE '%".$_REQUEST['query']."%'";
}
//SEARCH
//PAGINATION

$stmt = $conn->prepare("SELECT * FROM news ".$search."LIMIT ?, ?");
$stmt->bind_param('ii', $offset,$numberOfPages);
$stmt->execute();
$result = $stmt->get_result();;

$news = [];
while($row = $result->fetch_assoc()) {
    $news[]=$row;
    // array_push($news,["Title" => ["Title"], "Description" => $row["Description"],"Date" => $row["Date"], "Id" =>$row["Id"]]);
  }

$sm->assign("news",$news);
$sm->assign("page",$page);
$sm->assign("pages",$pages);
$sm->assign("totalPages",$totalPages);
$sm->display("blog.html");
