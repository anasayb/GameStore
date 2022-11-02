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
      font-family:'verdana';
    }
    /* ------------------------------------------------------------------------------------- */
    .title {
      text-align: center;
    }
    a {
      color: white;
      text-decoration: none;
    }
    a:hover {
    }
    .header {
      background-color: rgb(45, 45, 45);
      height: 5cm;
    }
    .top_header{
      height: 70%;
      display: inline-flexbox;
      justify-content: start;
      align-items: flex-start;
      flex-wrap: wrap;
    }
    .header_top_logo {
      float: left;
      width: fit-content;
    }
    .header_top_logo_pic {
    }
    .header_top_login_register {
      float: right;
      margin: 0;
      height: 100%;
    }
    .header_top_login_register_links {
      display: inline-block;
      padding: 5px;
      margin: 5px;
      border-radius: 15%;
      transition-duration: 0.3s;
    }
    .header_top_login_register_links:hover {
      background-color:#EF3B2D;
    }
    .header_top_title {
      font-size: 30pt;
      text-align: center;
      height: 100%;
      flex-grow: 100%;
    }
    h1 {
      margin: 0 auto;
      margin-top: 15px;
      
    }
    .header_links {
      flex-grow: 100%;
      margin-top: 20px;
    
    }
    .search_container {
      float: right;
      font-size: 200%;
      border-radius: 15%;
      display: inline;
      margin-top: -35px;
    }
    .header_links_flex {
      width: fit-content;
      margin: 0 auto;
    }
    .header_links_text {
      display: inline;
      padding: 5px;
      padding-bottom: 0;
      border-bottom: 5px;
      border-radius: 15%;
      transition-duration: 0.3s;
    }
    .header_links_text:hover {
      background-color: #EF3B2D;
      border-color: #EF3B2D;
      border-bottom-style: solid;
    }
        /* Dropdown button */
    .dropdown .dropbtn {
      font-size: 23px;
      color: white;
      background-color: transparent;
      border-style: none;
      font-family:'verdana';
      display: inline;
      padding: 5px;
      border-bottom: 5px;
      border-radius: 15%;
      transition-duration: 0.3s;

      /* font-size: 150%;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit; /* Important for vertical align on mobile phones 
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
      text-align: center;
    }

    /* Add a grey background color to dropdown links on hover */
    .dropdown-content a:hover {
      background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    } 

    /* The dropdown container */
    .dropdown {
      overflow: hidden;
      display: inline;
      
    }
    .dropbtn:hover{
      cursor: pointer;
    }
    /* ------------------------------------------------------------------------------------- */
    .content {
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
      width: 45px;
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
      margin: 0;
      color:rgb(35, 35, 35);
      text-align: center;
    }
    .game_card_info_platforms_icons {
      display: inline;
      height: 20px;
      margin: 2px;
    }
    /* ------------------------------------------------------------------------------------- */
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
    /* ------------------------------------------------------------------------------------- */
  </style>
</head>
<body>
  <div class='header'>
    <div class='top_header'>
      <div class="header_top_login_register">
        <h3 class='header_top_login_register_links'>
          <a href=''> Login </a>
        </h3>
        <h3 class='header_top_login_register_links'>
          <a href=''> Register </a>
        </h3>
      </div>
      <div class='header_top_logo'>
        <img class='header_top_logo_pic' src={{asset('/images/logo.png')}}>
      </div>
      <div class='header_top_title'>
        <h1 class='header_title_text'> Game Show </h1>
      </div>
      <div class='header_links'>
        <div class='header_links_flex'>
          <h2 class='header_links_text' id="header_link_home">
            <a href='/'> Home </a>
          </h2>
          <div class="dropdown">
            <button class="dropbtn" onclick="location.href='/games/1'"><b>Games</b>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="/highestRatedGames">Highest score</a>
              <a href="/mostPopularGames">Most Popular</a>
              <a href="/longestGames">Time</a>
            </div>
          </div>
          <h2 class='header_links_text' id="header_link_charts">
            <a href=''> Charts </a>
          </h2>
          <h2 class='header_links_text' id="header_link_blog">
            <a href='http://abaubaid.info/blog/'> Blog </a>
          </h2>
          
        </div>
        <div class="search_container">
          <form action="/search">
            <input type="text" placeholder="Search.." name="search" style="font-size: 70%">
          </form>
        </div>
      </div>
    </div>
    
  </div>
  <div class='content'>
    @yield('content')
  </div>
</body>
</html>
