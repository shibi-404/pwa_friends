<?php


define('ROOT_DIR_HEAD', '');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Friends</title>
    <link rel="icon" href="<?php echo ROOT_DIR_HEAD."src/img/icons/honey-bee-128x128.png";?>">
    <link rel="stylesheet" href=<?php echo ROOT_DIR_HEAD."src/css/styles.css";?>>  
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.indigo-pink.min.css">
    <link rel="manifest" href="manifest.json">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="MiFrnd">
    <link rel="apple-touch-icon" href="<?php echo ROOT_DIR_HEAD."src/img/icons/honey-bee-16x16.png";?>" sizes="16x16">
    <link rel="apple-touch-icon" href="<?php echo ROOT_DIR_HEAD."src/img/icons/honey-bee-20x20.png";?>" sizes="20x20">
    <link rel="apple-touch-icon" href="<?php echo ROOT_DIR_HEAD."src/img/icons/honey-bee-24x24.png";?>" sizes="24x24">
    <link rel="apple-touch-icon" href="<?php echo ROOT_DIR_HEAD."src/img/icons/honey-bee-32x32.png";?>" sizes="32x32">
    <link rel="apple-touch-icon" href="<?php echo ROOT_DIR_HEAD."src/img/icons/honey-bee-48x48.png";?>" sizes="48x48">
    <link rel="apple-touch-icon" href="<?php echo ROOT_DIR_HEAD."src/img/icons/honey-bee-64x64.png";?>" sizes="64x64">
    <link rel="apple-touch-icon" href="<?php echo ROOT_DIR_HEAD."src/img/icons/honey-bee-128x128.png";?>" sizes="128x128">
    <link rel="apple-touch-icon" href="<?php echo ROOT_DIR_HEAD."src/img/icons/honey-bee-256x256.png";?>" sizes="256x256">
    <link rel="apple-touch-icon" href="<?php echo ROOT_DIR_HEAD."src/img/icons/honey-bee-512x512.png";?>" sizes="512x512">
    <link rel="apple-touch-icon" href="<?php echo ROOT_DIR_HEAD."src/img/icons/honey-bee-1024x1024.png";?>" sizes="1024x1024">
    <link rel="apple-touch-icon" href="<?php echo ROOT_DIR_HEAD."src/img/icons/honey-bee-2048x2048.png";?>" sizes="2048x2048">
    <link rel="apple-touch-icon" href="<?php echo ROOT_DIR_HEAD."src/img/icons/honey-bee-4096x4096.png";?>" sizes="4096x4096">
</head>
<body>
    <div class="wrapper">
    <nav>
        <div class="logo">My Friends</div>
        <label for="btn" class="icon">
            <span class="fa fa-bars">III</span>
        </label>
        <input type="checkbox" name="" id="btn">
        <ul>
            <li><a href="<?php echo ROOT_DIR_HEAD."index.php";?>">&nbsp;Home</a></li>
            <li>
                <label for="btn-1" class="show">Features +</label>
                <a href="#">Features</a>
                <input type="checkbox" name="" id="btn-1">
                <ul>
                    <li><a href="#">Use as app</a></li>
                    <li><a href="#">Offline</a></li>
                    <li><a href="#">Notifications</a></li>
                    <li><a href="#">Location</a></li>
                    <li><a href="#">Camera</a></li>
                    <li><a href="#">Background</a></li>
                </ul>
            </li>
            
            <li><a href="<?php echo ROOT_DIR_HEAD."add_frnd.php";?>">&nbsp;Add Friend</a></li>
            <li>
                <label for="btn-2" class="show">View Friends +</label>
                <a href="<?php echo ROOT_DIR_HEAD."view_frnd.php";?>">View Friends</a>
                <input type="checkbox" name="" id="btn-2">
                <ul>
                    <li><a href="<?php echo ROOT_DIR_HEAD."view_frnd.php";?>">Office</a></li>
                    <li>
                        <label for="btn-3" class="show">&nbsp; &nbsp; College +</label>
                        <a href="<?php echo ROOT_DIR_HEAD."view_frnd.php";?>">College</a>    
                        <input type="checkbox" name="" id="btn-3">
                        <ul>
                            <li><a href="<?php echo ROOT_DIR_HEAD."view_frnd.php";?>">Sadak</a></li>
                            <li><a href="<?php echo ROOT_DIR_HEAD."view_frnd.php";?>">Xavier's</a></li>
                        </ul>
                  </li>
                    <li>
                        <label for="btn-4" class="show">&nbsp; &nbsp; School +</label>
                        <a href="<?php echo ROOT_DIR_HEAD."view_frnd.php";?>">School</a>    
                        <input type="checkbox" name="" id="btn-4">
                        <ul>
                            <li><a href="<?php echo ROOT_DIR_HEAD."view_frnd.php";?>">John's</a></li>
                            <li><a href="<?php echo ROOT_DIR_HEAD."view_frnd.php";?>">Xavier's</a></li>
                        </ul>
                  </li>
                </ul>
            </li>
            <li><a href="<?php echo ROOT_DIR_HEAD."portfolio.php";?>">&nbsp;Portfolio</a></li>
            <li><a href="<?php echo ROOT_DIR_HEAD."contact.php";?>">&nbsp;Contact</a></li>
        </ul>
    </nav>
    
    </div>
  <script src="<?php echo ROOT_DIR_HEAD."src/js/app.js";?>"></script>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PWA | MyFriends</title>
  <link rel="stylesheet" href="/pwa_friends/src/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">My Friends</a></div>
        <ul class="links">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#" class="desktop-link">Add Friends</a></li>
          <li>
            <a href="#" class="desktop-link">View Friends</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Services</label>
            <ul>
              <li><a href="#">Office</a></li>
              <li><a href="#">College</a>
              <input type="checkbox" id="show-college">
                <label for="show-college">College</label>
                    <ul>
                        <li><a href="#">Sadak</a></li>
                        <li><a href="#">Xavier's</a></li>
                    </ul>
                </li>
              <li><a href="#">School</a>
              <input type="checkbox" id="show-school">
                <label for="show-school">School</label>
                    <ul>
                        <li><a href="#">John's</a></li>
                        <li><a href="#">Xavier's</a></li>
                    </ul>
                </li>
            </li>
            </ul>
          </li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>

  <div class="dummy-text">
    <h2>Responsive Dropdown Menu Bar with Searchbox</h2>
    <h2>using only HTML & CSS - Flexbox</h2>
  </div>

</body>
</html> -->