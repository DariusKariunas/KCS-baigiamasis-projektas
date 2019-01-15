<?php

namespace KCSG;


class HeaderFooter
{
    public $header;
    public $footer;

    public function __construct()
    {
        $this->header = [
            ['route'=> '/posts.php', 'name'=> 'Add Post'],
            ['route'=> '/about.php', 'name'=> 'About Us'],
            ['route'=> '/register.php', 'name'=> 'Register'],
            ['route'=> '/login.php', 'name'=> 'Log In'],
        ];
        $this->footer = [
            ['social'=>'https://www.facebook.com/', 'i'=>'fa fa-2x fa-fw fa-facebook text-white'],
            ['social'=>'https://twitter.com/', 'i'=>'fa fa-2x fa-fw fa-twitter text-white'],
            ['social'=>'https://www.linkedin.com/company/', 'i'=>'fa fa-2x fa-fw fa-linkedin text-white'],
            ['social'=>'https://www.google.com/', 'i'=>'fa fa-2x fa-fw fa-google text-white']];
    }


    function header(){
        echo "<nav class=\" navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light fixed-top\">
            <div class=\"container\" ><a class=\"navbar-brand\" href='/'>SNU</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse justify-content-end\" [ngClass]=\"{'show':navbarOpen}\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">";

        echo "<a class='nav-item nav-link' href='/'>Home<span class=\"sr-only\">(current)</span></a>";

        foreach ($this->header as $value){
            echo "<a class='nav-item nav-link' href='$value[route]'>$value[name]</a>";
        }
         echo "</div></div></div></nav>";
        echo "<div class=\"navbar\">
              <div class=\"container\" >
              <a class=\"navbar-brand\" href=\"#\">SNU</a>
              </div></div>";
    }

    function footer(){
        echo "<footer class=\"footer fixed-bottom\">
  <div class=\"container-fluid bg-primary py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-7\">
          <div class=\"row py-0\">
            <div class=\"col-sm-11 text-white\">
              <div><h4>Contacts</h4><p>SNU.com</p>
              </div></div></div></div>
        <div class=\"col-md-5 align-self-center d-flex justify-content-end\">";
        foreach ($this->footer as $value){
            echo "<div class=\"d-inline-block\">
                <a href='$value[social]'><i class='$value[i]'></i></a></div>";
        }
          echo "</div></div></div></div></footer>";
    }
}