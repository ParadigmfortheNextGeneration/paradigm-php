<?php 

http_response_code(500);


print "Oops we do seem to have an error...";


if(isset($_GET['error'])){

  print "<pre>";

  var_dump($ex);
}
?>