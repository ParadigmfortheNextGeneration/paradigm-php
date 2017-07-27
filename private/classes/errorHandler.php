<?php 

class eH{

  private $errCache;


  public function __construct(){

    $this->errCache = array();

  }

  public function errorHandle($errno, $errstr, $errfile, $errline){

    $err = array(
        'type' => $errno,
        'file' => $errfile,
        'line' => $errline,
        'msg' => $errstr,

      );

    array_push($this->errCache, $err);

    return true;
  }

  public function exceptionHandle(Throwable $ex ){

    ob_clean();

    require('partials/exception.php');

    exit;
  }

  public function errorConsole(){

    if(empty($this->errCache)){
      return;
    }

    $errJSON = json_encode($this->errCache);

    $line = "console.error('Error (%s) File: %s, Line: %s %s');";

    print '<script type="text/javascript">console.groupCollapsed("PHP Errors");';

    foreach($this->errCache as $key => $err){

      printf($line, $err['type'], $err['file'], $err['line'], $err['msg']);
    }

    print '</script>';

    
  }

}

 ?>