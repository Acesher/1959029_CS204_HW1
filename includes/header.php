<?php
$nav_links = ['home', 'aboutme_gallery', 'resume'];
$current_page = basename($_SERVER['SCRIPT_NAME'], ".php");

function outputNav($nav_links, $current_page) {
  $output = "";
  foreach($nav_links as $link) {
    $href = $link;
    if($link == "home") {
      $href = 'index';
    }
    $class = "";
    if($href == $current_page) {
      $class = "active";
    }
    $output.= "<li><a href='{$href}.php' class='{$class}'>". ucfirst($link) ."</a></li>";
  }
  echo $output;
}
?>

    <header>
      <div class="logo">
        <img src="images/poor-old-logo.png" alt="logo-image">
      </div>
      <div class="main-nav">
        <nav>
          <ul>
            <?php outputNav($nav_links,$current_page); ?>
            <!-- <li><a href="index.php">Home</a></li>
            <li><a href="aboutme_gallery.php">About Me / Gallery</a></li>
            <li><a href="resume.php">Resume</a></li> -->
          </ul>
        </nav>
      </div>
    </header>