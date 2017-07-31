<?php

require("base/functions.php");

$Parsedown = new Parsedown();
$md=isset($_GET['md'])?$_GET['md']:'index';
$yaml=yaml_parse_file("../private/yaml/".$md.".yaml");
$page=new page($yaml['title']);
$page->setDescription($yaml['description']);

$file=file_get_contents("../private/markdown/".$md.".md");
$content=$Parsedown->text($file);


// END OF MAIN CONTENT

    $content=sprintf($content,$page->title);
    $page->setContent($content);
    $page->render();

// show php errors in JS console 
$errorHandler->errorConsole();

?>
