<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}

</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
	</div>
	<div class="topnav">
	<li><a href="https://css-1.herokuapp.com/">Css</a></li>
	</div>
	<div class="topnav">
	<li><a href="https://svg-1.herokuapp.com/">Svg</a></li>
	</div>
	<div class="topnav">
	<li><a href="https://codepen.io/kai-diocson/pen/gOwRBYw">Canvas</a></li>
	</div>
	<div class="topnav">
		<li><a href="<h1>HI IM PERLYN DIOCSON NICE MEETING YOU</h1>">About The Author</a></li>
	</div>
  <div class="topnav-right">
  <a href="#search">Search</a>
  <a href="#about">About</a>
  </div>
</div>

<div style="padding-left:16px">
  <h2>HELLO! WELCOME TO KAI'S WEBSITE</h2>
  <p>Peace and joy to you and yours this Christmas season.</p>
</div>

</body>
</html>


<div class="window">
		<div class="santa">
			<div class="head">
				<div class="face">
					<div class="redhat">
						<div class="whitepart"></div>
						<div class="redpart"></div>
						<div class="hatball"></div>
					</div>
					<div class="eyes"></div>
					<div class="beard">
						<div class="nouse"></div>
						<div class="mouth"></div>
					</div>
				</div>
				<div class="ears"></div>
			</div>
			<div class="body"></div>
		</div>
	</div>
	<div class="message">
		<h1>Merry Christmas!</h1>
		
	</div>
<style>
::selection {
  background: rgba(255,255,0,0.5);
}

body {
  background: #de2f32; }

.window {
  width: 340px;
  height: 340px;
  background: #a0d5d3;
  position: absolute;
  top: 50%;
  left: 50%;
  border-radius: 50%;
  margin-top: -60px;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  border: 10px solid #f8e7dc;
  overflow: hidden; }

.santa {
  position: absolute;
  left: 50%;
  bottom: 0;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%); }
  .santa .body {
    width: 190px;
    height: 210px;
    background: #de2f32;
    position: relative;
    border-radius: 50%;
    top: 0;
    -webkit-animation: bodyLaugh 4s linear infinite;
    -moz-animation: bodyLaugh 4s linear infinite;
    -ms-animation: bodyLaugh 4s linear infinite;
    -o-animation: bodyLaugh 4s linear infinite;
    animation: bodyLaugh 4s linear infinite;
    -webkit-transform: translateY(50%);
    -moz-transform: translateY(50%);
    -ms-transform: translateY(50%);
    -o-transform: translateY(50%);
    transform: translateY(50%); }
    .santa .body:before {
      content: " ";
      width: 7px;
      height: 7px;
      background: #f7be10;
      border-radius: 50%;
      position: absolute;
      top: 35%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      -o-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      box-shadow: 0px -18px 0px #f7be10, 0px 18px 0px #f7be10; }
  .santa .head {
    z-index: 2;
    position: absolute;
    bottom: 90px;
    left: 50%;
    -webkit-animation: headLaugh 4s linear infinite;
    -moz-animation: headLaugh 4s linear infinite;
    -ms-animation: headLaugh 4s linear infinite;
    -o-animation: headLaugh 4s linear infinite;
    animation: headLaugh 4s linear infinite;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%); }
    .santa .head .face {
      width: 120px;
      height: 130px;
      background: #edcab0;
      background: radial-gradient(#edcab0, #e9a982);
      border-radius: 50%;
      border: 3px solid #f8e7dc; }
      .santa .head .face .redhat .whitepart {
        position: absolute;
        left: 50%;
        top: 0;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
        width: 90%;
        height: 32px;
        background: #f8e7dc;
        border-radius: 50px;
        z-index: 4;
        box-shadow: 0px 6px 0px -4px rgba(0, 0, 0, 0.1); }
      .santa .head .face .redhat .redpart {
        width: 120px;
        height: 120px;
        background: #de2f32;
        position: absolute;
        top: -50px;
        left: 15px;
        border-radius: 50%;
        z-index: -1; }
        .santa .head .face .redhat .redpart:before {
          content: " ";
          width: 95px;
          height: 95px;
          position: absolute;
          left: 0;
          top: 12px;
          border-radius: 50%;
          box-shadow: inset -8px -1px 0px -5px rgba(0, 0, 0, 0.05); }
        .santa .head .face .redhat .redpart:after {
          content: " ";
          position: absolute;
          right: 0;
          top: 60px;
          background: #de2f32;
          width: 20px;
          height: 50px; }
      .santa .head .face .redhat .hatball {
        width: 38px;
        height: 38px;
        background: #f8e7dc;
        border-radius: 50%;
        z-index: 5;
        position: absolute;
        right: -20px;
        top: 40px;
        box-shadow: 0px 6px 0px -4px rgba(0, 0, 0, 0.1); }
      .santa .head .face .eyes {
        position: absolute;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
        top: 57px; }
        .santa .head .face .eyes:before, .santa .head .face .eyes:after {
          content: " ";
          position: absolute;
          width: 15px;
          height: 9px;
          top: 0;
          border: 5px solid #a8744f;
          border-width: 0;
          border-top-width: 5px;
          border-radius: 50%; }
        .santa .head .face .eyes:before {
          left: -28px; }
        .santa .head .face .eyes:after {
          right: -28px; }
      .santa .head .face .beard {
        width: 55px;
        height: 55px;
        background: #f8e7dc;
        border-radius: 50%;
        position: absolute;
        bottom: -30px;
        left: 50%;
        -webkit-animation: beardLaugh 4s linear infinite;
        -moz-animation: beardLaugh 4s linear infinite;
        -ms-animation: beardLaugh 4s linear infinite;
        -o-animation: beardLaugh 4s linear infinite;
        animation: beardLaugh 4s linear infinite;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%); }
        .santa .head .face .beard:before, .santa .head .face .beard:after {
          content: " ";
          width: 80px;
          height: 80px;
          background: #f8e7dc;
          border-radius: 50%;
          position: absolute;
          bottom: 15px; }
        .santa .head .face .beard:before {
          left: -40px; }
        .santa .head .face .beard:after {
          right: -40px; }
        .santa .head .face .beard .nouse {
          width: 25px;
          height: 20px;
          border-radius: 50%;
          background: #edcab0;
          position: absolute;
          z-index: 3;
          box-shadow: inset -3px -3px 0px #e9a982;
          left: 50%;
          -webkit-transform: translateX(-50%);
          -moz-transform: translateX(-50%);
          -ms-transform: translateX(-50%);
          -o-transform: translateX(-50%);
          transform: translateX(-50%);
          top: -42px; }
        .santa .head .face .beard .mouth {
          background: #a8744f;
          z-index: 3;
          position: absolute;
          width: 15px;
          height: 5px;
          border-bottom-right-radius: 80px 50px;
          border-bottom-left-radius: 80px 50px;
          left: 50%;
          top: 0;
          -webkit-animation: mouthLaugh 4s linear infinite;
          -moz-animation: mouthLaugh 4s linear infinite;
          -ms-animation: mouthLaugh 4s linear infinite;
          -o-animation: mouthLaugh 4s linear infinite;
          animation: mouthLaugh 4s linear infinite;
          -webkit-transform: translateX(-50%);
          -moz-transform: translateX(-50%);
          -ms-transform: translateX(-50%);
          -o-transform: translateX(-50%);
          transform: translateX(-50%); }
    .santa .head .ears:before, .santa .head .ears:after {
      content: " ";
      width: 20px;
      height: 30px;
      border-radius: 50%;
      background: radial-gradient(#e9a982, #edcab0);
      position: absolute;
      top: 50%;
      z-index: -1; }
    .santa .head .ears:before {
      left: -8px;
      -webkit-transform: rotate(-10deg);
      -moz-transform: rotate(-10deg);
      -ms-transform: rotate(-10deg);
      -o-transform: rotate(-10deg);
      transform: rotate(-10deg); }
    .santa .head .ears:after {
      right: -8px;
      -webkit-transform: rotate(10deg);
      -moz-transform: rotate(10deg);
      -ms-transform: rotate(10deg);
      -o-transform: rotate(10deg);
      transform: rotate(10deg); }

@font-face {
  font-family: 'Mountains of Christmas';
  font-style: normal;
  src: local("Mountains of Christmas"), local("MountainsofChristmas-Regular"), url(https://fonts.gstatic.com/s/mountainsofchristmas/v8/dVGBFPwd6G44IWDbQtPewylJhLDHyIrT3I5b5eGTHmw.woff2) format("woff2"); }
.message {
  position: absolute;
  left: 50%;
  top: 50%;
  margin-top: 80px;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  color: #f8e7dc;
  font-family: 'Mountains of Christmas'; }
  .message h1 {
    font-style: normal;
    font-size: 75px;
    margin-bottom: 0;
    white-space: nowrap; }
  .message h2 {
    margin: 0;
    font-size: 20px;
    text-align: center;
    white-space: nowrap; }
    .message h2 a {
      color: #f7be10;
      opacity: 0.8; }
      .message h2 a:hover {
        opacity: 1; }

@-webkit-keyframes bodyLaugh {
  0% {
    top: 0px; }

  2% {
    top: -3px; }

  4% {
    top: 0px; }

  8% {
    top: -3px; }

  10% {
    top: 0px; }

  12% {
    top: -3px; }

  14% {
    top: 0px; }

  18% {
    top: -3px; }

  20% {
    top: 0px; }

  22% {
    top: -3px; }

  24% {
    top: 0px; }

  28% {
    top: -3px; }

  30% {
    top: 0px; }

  100% {
    top: 0px; } }
@-moz-keyframes bodyLaugh {
  0% {
    top: 0px; }

  2% {
    top: -3px; }

  4% {
    top: 0px; }

  8% {
    top: -3px; }

  10% {
    top: 0px; }

  12% {
    top: -3px; }

  14% {
    top: 0px; }

  18% {
    top: -3px; }

  20% {
    top: 0px; }

  22% {
    top: -3px; }

  24% {
    top: 0px; }

  28% {
    top: -3px; }

  30% {
    top: 0px; }

  100% {
    top: 0px; } }
@-ms-keyframes bodyLaugh {
  0% {
    top: 0px; }

  2% {
    top: -3px; }

  4% {
    top: 0px; }

  8% {
    top: -3px; }

  10% {
    top: 0px; }

  12% {
    top: -3px; }

  14% {
    top: 0px; }

  18% {
    top: -3px; }

  20% {
    top: 0px; }

  22% {
    top: -3px; }

  24% {
    top: 0px; }

  28% {
    top: -3px; }

  30% {
    top: 0px; }

  100% {
    top: 0px; } }
@keyframes bodyLaugh {
  0% {
    top: 0px; }

  2% {
    top: -3px; }

  4% {
    top: 0px; }

  8% {
    top: -3px; }

  10% {
    top: 0px; }

  12% {
    top: -3px; }

  14% {
    top: 0px; }

  18% {
    top: -3px; }

  20% {
    top: 0px; }

  22% {
    top: -3px; }

  24% {
    top: 0px; }

  28% {
    top: -3px; }

  30% {
    top: 0px; }

  100% {
    top: 0px; } }
@-webkit-keyframes beardLaugh {
  0% {
    bottom: -28px; }

  2% {
    bottom: -30px; }

  4% {
    bottom: -28px; }

  8% {
    bottom: -30px; }

  10% {
    bottom: -28px; }

  12% {
    bottom: -30px; }

  14% {
    bottom: -28px; }

  18% {
    bottom: -30px; }

  20% {
    bottom: -28px; }

  22% {
    bottom: -30px; }

  24% {
    bottom: -28px; }

  28% {
    bottom: -30px; }

  30% {
    bottom: -28px; }

  100% {
    bottom: -28px; } }
@-moz-keyframes beardLaugh {
  0% {
    bottom: -28px; }

  2% {
    bottom: -30px; }

  4% {
    bottom: -28px; }

  8% {
    bottom: -30px; }

  10% {
    bottom: -28px; }

  12% {
    bottom: -30px; }

  14% {
    bottom: -28px; }

  18% {
    bottom: -30px; }

  20% {
    bottom: -28px; }

  22% {
    bottom: -30px; }

  24% {
    bottom: -28px; }

  28% {
    bottom: -30px; }

  30% {
    bottom: -28px; }

  100% {
    bottom: -28px; } }
@-ms-keyframes beardLaugh {
  0% {
    bottom: -28px; }

  2% {
    bottom: -30px; }

  4% {
    bottom: -28px; }

  8% {
    bottom: -30px; }

  10% {
    bottom: -28px; }

  12% {
    bottom: -30px; }

  14% {
    bottom: -28px; }

  18% {
    bottom: -30px; }

  20% {
    bottom: -28px; }

  22% {
    bottom: -30px; }

  24% {
    bottom: -28px; }

  28% {
    bottom: -30px; }

  30% {
    bottom: -28px; }

  100% {
    bottom: -28px; } }
@keyframes beardLaugh {
  0% {
    bottom: -28px; }

  2% {
    bottom: -30px; }

  4% {
    bottom: -28px; }

  8% {
    bottom: -30px; }

  10% {
    bottom: -28px; }

  12% {
    bottom: -30px; }

  14% {
    bottom: -28px; }

  18% {
    bottom: -30px; }

  20% {
    bottom: -28px; }

  22% {
    bottom: -30px; }

  24% {
    bottom: -28px; }

  28% {
    bottom: -30px; }

  30% {
    bottom: -28px; }

  100% {
    bottom: -28px; } }
@-webkit-keyframes headLaugh {
  0% {
    bottom: 83px; }

  45% {
    bottom: 83px; }

  50% {
    bottom: 90px; }

  92% {
    bottom: 90px; }

  98% {
    bottom: 83px; }

  100% {
    bottom: 83px; } }
@-moz-keyframes headLaugh {
  0% {
    bottom: 83px; }

  45% {
    bottom: 83px; }

  50% {
    bottom: 90px; }

  92% {
    bottom: 90px; }

  98% {
    bottom: 83px; }

  100% {
    bottom: 83px; } }
@-ms-keyframes headLaugh {
  0% {
    bottom: 83px; }

  45% {
    bottom: 83px; }

  50% {
    bottom: 90px; }

  92% {
    bottom: 90px; }

  98% {
    bottom: 83px; }

  100% {
    bottom: 83px; } }
@keyframes headLaugh {
  0% {
    bottom: 83px; }

  45% {
    bottom: 83px; }

  50% {
    bottom: 90px; }

  92% {
    bottom: 90px; }

  98% {
    bottom: 83px; }

  100% {
    bottom: 83px; } }
@-webkit-keyframes mouthLaugh {
  0% {
    width: 20px; }

  45% {
    width: 20px; }

  50% {
    width: 15px; }

  92% {
    width: 15px; }

  98% {
    width: 20px; }

  100% {
    width: 20px; } }
@-moz-keyframes mouthLaugh {
  0% {
    width: 20px; }

  45% {
    width: 20px; }

  50% {
    width: 15px; }

  92% {
    width: 15px; }

  98% {
    width: 20px; }

  100% {
    width: 20px; } }
@-ms-keyframes mouthLaugh {
  0% {
    width: 20px; }

  45% {
    width: 20px; }

  50% {
    width: 15px; }

  92% {
    width: 15px; }

  98% {
    width: 20px; }

  100% {
    width: 20px; } }
@keyframes mouthLaugh {
  0% {
    width: 20px; }

  45% {
    width: 20px; }

  50% {
    width: 15px; }

  92% {
    width: 15px; }

  98% {
    width: 20px; }

  100% {
    width: 20px; } }
</style>
link(href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css')
footer.footer(id='footer')
    div.container.footer-wrapper
        div.row
            div.col-xs-4
                ul.list-unstyled
                    li.title Social
                    li: a(href='#' title='Twitter')
                        i.twitter-logo.fa.fa-twitter.fa-2x.social-icon.text-center
                    li: a(href='#' title='Facebook')
                        i.facebook-logo.fa.fa-facebook.fa-2x.social-icon.text-center
                    li: a(href='#' title='Google+')
                        i.gplus-logo.fa.fa-google-plus.fa-2x.social-icon.text-center
                    li: a(href='#' title='Github')
                        i.github-logo.fa.fa-github.fa-2x.social-icon.text-center
            div.col-xs-4
                ul.list-unstyled
                    li.title Platforms
                    li: a(href='#') Windows
                    li: a(href='#') Mac
                    li: a(href='#') PlayStation
                    li: a(href='#') Xbox
                    li: a(href='#') WiiU
            div.col-xs-4
                ul.list-unstyled
                    li.title Contact
                    li: a(href='http://localhost:3000/example') email
    div.row
        div.col-xs-4.text-center
            a(href='#') Terms of Service
        div.col-xs-4.text-center
            a(href='#') Privacy
        div.col-xs-4.text-center
            a(href='#') Security
    div.row
        p.copyright.muted.pull-right &copy;2015 nfactorial - All rights reserved
<style>
	$footer-background-color: #222

$footer-muted-color: #555

$footer-font: "Roboto", "Helvetica Neue", Helvetica, Arial, sans-serif
//$footer-font: 'Raleway', sans-serif

// Colors for each Social icon
$twitter-logo-color: rgb( 0, 172, 237 )
$facebook-logo-color: #3b5998
$googleplus-logo-color: #dd4b39
$github-logo-color: #171515

// How fast will the social icons rotate
$social-rotation-speed: 0.5s

// Variables for the column titles
$column-title-color: #fff
$column-title-font-size: 26px
$column-title-font-weight: 200

// Theme for main links within the footer
$footer-link-color: #9AADA7
$footer-link-hover-color: #DAEDE7
$footer-link-visited-color: #5A7D77

.twitter-logo
  color: $twitter-logo-color

.facebook-logo
  color: $facebook-logo-color

.gplus-logo
  color: $googleplus-logo-color

// Github color is too dark for our grey background, lighten it up a little so it's visible.
.github-logo
  color: lighten( $github-logo-color, 40% )
  
.social-icon
  padding: 8px
  transform: rotate(0deg)
  text-align: center

.social-icon:hover
  transform: rotate(360deg)
  transition: all $social-rotation-speed ease-in-out

.footer
  font-family: $footer-font
  margin-top: 24px
  padding-top: 12px
  padding-bottom: 12px
  padding-left: 18px
  padding-right: 18px
  background: $footer-background-color

.footer-wrapper
  font-family: $footer-font
  margin-left: auto
  margin-right: auto

.footer .title
  font-size: $column-title-font-size
  font-weight: $column-title-font-weight
  color: $column-title-color

.footer li > a:link
  color: $footer-link-color

.footer li > a:visited
  //color: #99E
  //color: #94CC99
  color: $footer-link-visited-color

.footer li > a:hover
  color: $footer-link-hover-color

.muted
  color: $footer-muted-color
  
.copyright
  margin: 8px 8px 12px 0px
</style>




