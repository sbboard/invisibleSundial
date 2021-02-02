<?php include "./header.php";?>
<?php
$url = './albums.json';
$JSON = file_get_contents($url);
$data = json_decode($JSON);

if($_GET["album"] != null && $_GET["album"]< count($data->albums)){
    $album = $_GET["album"];
}
else{
    $album = 0;
}
?>
<div id="albumPage">
    <?php
    echo $data->albums[$album]->title;
    ?>
</div>
<?php include "./footer.php"; ?>