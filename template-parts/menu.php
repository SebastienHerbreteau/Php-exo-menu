

  <?php

$serv = $_SERVER["PHP_SELF"];

function menu ($location) {
  if($location ==="header"){
    function index (){if ($GLOBALS["serv"]=="/index.php") return "active"; else echo "";}
    function services (){if ($GLOBALS["serv"]=="/services.php") return "active";else echo "";}
    function blog (){if ($GLOBALS["serv"]=="/blog.php") return "active"; else echo "";}
    function contact (){if ($GLOBALS["serv"]=="/contact.php") return "active";else echo "";}
  };

    echo '<nav class="menu-'.$location.'">
      <ul>
        <li class="'.index().'">
          <a href="/index.php">Accueil</a>
        </li>
        <li class="'.services().'">
          <a href="/services.php">Services</a>
        </li>
        <li class="'.blog().'">
          <a href="/blog.php">Blog</a>
        </li>
        <li class="'.contact().'">
          <a href="/contact.php">Contact</a>
        </li>
      </ul>
    </nav>';
  
  }
 
?>
