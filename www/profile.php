<?php
include('loginHandler.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Street Aide</title>
  <img src="img/logo4.jpg" alt="logo" height="170px" width="100%" />
  <link href="style.css" rel="stylesheet" type="text/css">
  <style type="text/css">

body { 
  background: #f0f0f0; 
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: #313131;
  font-size: 20px; 
  line-height: 1; 
  font-weight: 300;
    color: #1d3c41;
    overflow-y: scroll;
    height: 90%;
}
h1 {
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 2.5em;
  line-height: 1.5em;
  letter-spacing: -0.05em;
  margin-bottom: 20px;
  padding: .1em 0;
  color: black;
	position: relative;
	overflow: hidden;
	white-space: nowrap;
	text-align: center;
}
h1:before,
h1:after {
  content: "";
  position: relative;
  display: inline-block;
  width: 50%;
  height: 1px;
  vertical-align: middle;
  background: #5399db;
}
h1:before {    
  left: -.5em;
  margin: 0 0 0 -50%;
}
h1:after {    
  left: .5em;
  margin: 0 -50% 0 0;
}
h1 > span {
  display: inline-block;
  vertical-align: middle;
  white-space: normal;
}

p {
  display: block;
  font-size: 1.7em;
  line-height: 1.55em;
  margin-bottom: 22px;
  color: #5399db;
}

a { color: #5a9352; text-decoration: none; }
a:hover { text-decoration: underline; }

.center { display: block; text-align: center; }

/** page structure **/
#w {
	margin-top: 150px;
  display: block;
  width: 750px;
  margin: 0 auto;
  padding-top: 80px;
  padding-bottom: 45px;
}

#content {
  display: block;
  width: 100%;
  background: #fff;
  padding: 25px 20px;
  padding-bottom: 35px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
  -moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
}

#userphoto {
  display: block;
  float: right;
  margin-left: 10px;
  margin-bottom: 8px;
}
#userphoto img {
  display: block;
  padding: 2px;
  background: #fff;
  -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.4);
  -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.4);
  box-shadow: 0 1px 3px rgba(0,0,0,0.4);
}


/** profile nav links **/
#profiletabs {
  display: block;
  margin-top: 150px;
  margin-bottom: 4px;
  height: 50%;
}

#profiletabs ul { list-style: none; display: block; width: 70%; height: 50px; }
#profiletabls ul li { float: left; }
#profiletabs ul li a { 
  display: block;
  float: left;
  padding: 8px 11px;
  font-size: 1.2em;
  font-weight: bold;
  background: #eae8db;
  color: #666;
  margin-right: 7px;
  border: 1px solid #fff;
  -webkit-border-radius: 5px;
  -webkit-border-bottom-left-radius: 0;
  -moz-border-radius: 5px;
  -moz-border-radius-bottomleft: 0;
  border-radius: 5px;
  border-bottom-left-radius: 0;
}
#profiletabs ul li a:hover {
  text-decoration: none;
  background: #dad7c2;
  color: #565656;
}

#profiletabs ul li a.sel {
  background: #fff;
  border-color: #d1cdb5;
}


/** profile content sections **/
.hidden {
  display: none;
}

/** clearfix **/
.clearfix:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0; }
.clearfix { display: inline-block; }
 
html[xmlns] .clearfix { display: block; }
* html .clearfix { height: 1%; }

  </style>
</head>
<body>
<div id="w">
    <div id="content" class="clearfix">
      <div id="userphoto"><img src="images/avatar.png" alt="default avatar"></div>
      <h1>Profile</h1>

      <nav id="profiletabs">
        <ul class="clearfix">
          <p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
          <li><a href= "chat@.html" class="sel">Chat Room</a></li>
          <li><a href= "about.html" class="sel">About</a></li>
          <li><a href= "logout.php">Log Out</a></li>
        </ul>
      </nav>
 </div><!-- @end #content -->
  </div><!-- @end #w -->


</body>
</html>
