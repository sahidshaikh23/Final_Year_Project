<html>

<head>


<style>

.header {
  overflow:hidden;
  background-color: #333;
  top: 0;
  width:100%;
  padding: 10px 5px;
  color:#FF0404  ;
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
  color: #FF0404;
  text-decoration: none;
  position: relative;
}

.header a.logo::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 2px;
  background-color: transparent;
  box-shadow: 0 2px 0 transparent; /* Initial box-shadow */
  transition: box-shadow 0.3s, background-color 0.3s; /* Transition for box-shadow and background-color */
}

.header a.logo:hover::after {
  background-color: red;
  box-shadow: 0 2px 0 red; /* Red box-shadow on hover */
}


.header-right a {
  font-size: 18px;
  color: white;
  text-decoration: none;
  transition: background-color 0.3s, color 0.3s; /* Add transition for smooth effect */
}

.header-right a:hover {
  background-color: #ddd;
  color: black;
}

.act {
  color: red; /* Color for active link */
}

.logo2 {
  color: blue; /* Color for alternate logo */
}

.logo2:hover {
  background-color: initial; /* Remove background color on hover for alternate logo */
}


/* Float the link section to the right */
.header-right {
  float: right;
}



/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
/* Style the active/current link*/
a.act{
background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
color: white;
border-radius:30px;
}
a.logo2{
  background-color: #333;
}
</style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo"<?php if($active=='home') echo "class='logo2'"; ?>>Blood Bank & Donation </a>
    <div class="header-right">
    <a href="about_us.php"  <?php if($active=='about') echo "class='act'"; ?> >About Us</a>
    <a href="why_donate_blood.php"  <?php if($active=='why') echo "class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php"  <?php if($active=='donate') echo "class='act'"; ?>>Become A Donor</a>
      <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a>
      <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contact Us</a>
      <a href="./admin/login.php" <?php if($active=='Admin') echo "class='act'"; ?>>Admin</a>
    </div>
  </div>

</body>
</html>
