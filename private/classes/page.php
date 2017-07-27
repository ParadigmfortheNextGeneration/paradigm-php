<?php
// 2017 by Ron van Etten

class page
{
    public $title;
    public $description;
    public $content;

    public function __construct($title){
        $this->title=$title;
    }

    public function header()
    {
        include "partials/header.php";
        include "partials/topnav.php";
    }


    public function footer()
    {
        include "partials/footer.php";
    }
    public function setTitle($title){
        $this->title=$title;
    }
    public function setDescription($description){
        $this->description=$description;
    }
    public function setContent($content){
        $this->content=$content;
    }

    public function render(){
      $this->header();
      echo $this->content;
      $this->footer();
    }
}
?>