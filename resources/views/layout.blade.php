<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>
    Laravel Demo
  </title>
  <style>
    body {
      background-color: rgb(35, 35, 35);
      color: white;
    }
    .header_title_text{
      font-size: 300%;
      color: red;
      -webkit-text-stroke: 0.1rem black;
      font-family:'verdana'
    }
    .game_card_container{
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      align-items: flex-start;
      padding-left: 20px;
      padding-right: 20px;
    }
    .game_card {
      background-color: rgb(45, 45, 45);
      border-radius: 20px;
      padding: 3px;
      padding-left: 0;
      padding-right: 0;
      margin: 20px;
      width: 300px;
      height: fit-content;
      vertical-align: top;
    }
    .title {
      text-align: center;
    }
    a {
      color: white;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    .header {
      background-color: rgb(45, 45, 45);
      height: 40%;
      align-content: center;
    }
    .top_header{
      height: 70%;
    }
    .header_top_logo {
      float: left;
    }
    .header_top_logo_pic {
    }
    .header_top_title {
      display: inline-block;
      font-size: 30pt;
      width: 75%;
      text-align: center;
      margin: 0;
    }
    .header_top_title_text {
      margin: 0;
    }
      /* Navbar container */
    .navbar {
      overflow: hidden;
      font-family: Arial;
    }

    /* Links inside the navbar */
    .navbar a {
      font-size: 150%;
      float: left;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    /* The dropdown container */
    .dropdown {
      float: left;
      overflow: hidden;
    }
    .dropbtn:hover{
      cursor: pointer;
    }

    /* Dropdown button */
    .dropdown .dropbtn {
      font-size: 150%;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit; /* Important for vertical align on mobile phones */
      margin: 0; /* Important for vertical align on mobile phones */
    }

    /* Add a red background color to navbar links on hover */
    .navbar a:hover, .dropdown:hover .dropbtn {
      background-color: red;
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    /* Add a grey background color to dropdown links on hover */
    .dropdown-content a:hover {
      background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    } 
    .content {
    }
    .game_card_pic {
      width: 100%;
      float: inline-start;
      border-radius: 20px;
    }
    .game_card_info_title_text {
      margin-left: 10px;
      margin-right: 10px;
    }
    .game_card_info {
      height: fit-content;
    }
    .game_card_info_platforms {
      display: inline-block;
      width: fit-content;
      height: fit-content;
      padding: 5px;
      padding-left: 10px;
      padding-bottom: 0;
    }
    .game_card_info_rating {
      background-color: rgb(255, 255, 255);
      border-radius: 5px;
      height: 25px;
      width: 33px;
      float: right;
      padding: 3px;
      margin: 5px;
      margin-right: 10px;
      margin-bottom: 0;
    }
    .game_card_info_title {
      display: block;
      height: fit-content;

    }
    .game_card_info_rating_text{
      margin: auto;
      color:rgb(35, 35, 35);
      text-align: center;
    }
    .game_card_info_platforms_icons {
      display: inline;
      height: 20px;
      margin: 2px;
    }
    .game_galary{
      background-color: rgba(0, 0, 0, 0.3);
      border-radius: 3%;
    }
    .game_galary_top {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      height: 10cm;
    }
    .game_galary_top_left {
      height: 90%;
      width: 20%;
      display: inline-block;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .game_galary_top_middle {
      height: 90%;
      width: 60%;
      display: inline-block;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .game_galary_top_middle_pic{
      height: 100%;
    }
    .game_galary_top_right {
      height: 90%;
      width: 20%;
      display: inline-block;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .game_galary_top_arrows {
      height: 25%;
      opacity: 0.5;
    }
    .game_galary_bottom {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 3cm;
      width: 100%;
    }
    .game_galary_bottom_pics {
      height: 80%;
      border-radius: 5px;
      margin: 5px;
    }
    .game_galary_bottom_pics:hover {
      border-style: solid;
    }
    .round{
      font-size: 200%;
      padding: 0.5% 1%;
    }
    .round:hover{
      background-color: #ddd;
      color: black;
    }
    .footer{
      background-color: rgb(45, 45, 45);
    }
    .search-container {
      float: right;
      font-size: 300%;
    }

</style>
    
</head>
<body>
  <div class='header'>
      <div class='header_top_logo'>
        <img class='header_top_logo_pic' src={{asset('/images/logo.png')}}>
      </div>
      <div class="navbar" style="float: right;">
        <a href="/">Login</a>
        <a href="/">Register</a>
      </div>
      <div class='header_top_title'>
        <h1 class='header_title_text'> Game Show </h1>
      </div>
      <div class="search-container">
        <form action="/search">
          <input type="text" placeholder="Search.." name="search" style="font-size: 70%">
        </form>
      </div>
      <div class="navbar" style="margin-left: 40%;">
        <a href="/">Home</a>
        <div class="dropdown">
          <button class="dropbtn" onclick="location.href='/games/1'">Games
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="/highestRatedGames">Highest score</a>
            <a href="/mostPopularGames">most Popular</a>
            <a href="/longestGames">time</a>
          </div>
        </div>
        <a href="/">Charts</a>
        <a href="http://abaubaid.info/blog/">Blog</a>
      </div> 
  </div>
  <div class='content'>
    @yield('content')
  </div>
  <div class="footer">
    <p>footer stuff</p>
    <p>footer stuff</p>
    <p>footer stuff</p>
  </div>
</body>
</html>
