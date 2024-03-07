<?php include("header.php"); ?>

<?php
if (isset($_GET["page"])) {
    // echo "tere";
    $page = $_GET["page"];
    if ($page=="services") {
        include("services.php");
    }else if($page=="contact"){
        include("contact.php");
    }
}else{
?>
<h1>Avalehe asjad</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sed consequuntur delectus sunt rerum ratione eos natus, inventore error illo, doloribus quod! Alias nisi laboriosam recusandae nulla beatae modi delectus!</p>
<?php
}
?>
<?php include("footer.php"); ?>