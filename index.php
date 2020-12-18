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
  <a href="#svg">Svg</a>
  <a href="#canvas">Canvas</a>
  <a href="#contact">Contact</a>
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



<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
<!-- Footer -->
		<footer class="pt-5 pb-4" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">ABOUT US</h5>
						<p class="mb-4">Etiam laoreet in ex quis efficitur.</p>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-map-marker"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Address:</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="far fa-envelope"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Have any questions?</h6>
										<p><a href="#">Support@userthemes.com</a></p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-phone-volume"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Address:</h6>
										<p><a href="#">+XX (0) XX XX-XXXX-XXXX</a></p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">FRESH TWEETS</h5>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">LATEST UPDATES</h5>
						<ul class="recent-post">
							<li>
								<label class="mr-3">28 <br><span>APR</span></label>
								<span>Rendomised words which dont look eveable.</span>
							</li>
							<li>
								<label class="mr-3">29 <br><span>APR</span></label>
								<span>Rendomised words which dont look eveable.</span>
							</li>
							<li>
								<label class="mr-3">30 <br><span>APR</span></label>
								<span>Rendomised words which dont look eveable.</span>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">CONNECT WITH US</h5>
						<div class="input-group">
						  	<input type="text" class="form-control" placeholder="Your Email Address">
						  	<span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
						</div>
						<ul class="social-pet mt-4">
							<li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- Copyright -->
		<section class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<div class="text-center text-white">
							&copy; 2018 Your Company. All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
		</section>
<style>
		/*=-footer-=*/
			footer {
				color: #fff;
				background-attachment: fixed;
				background-color:#222;
        background-image: url(https://s7.postimg.org/uyf0oioaz/footer-bg.png);
				background-size: cover;
				background-position: bottom;
			}
			footer p {
				color: #ccc;				
			}
	   footer a {
				color: #ccc;				
			}
			.social-pet li {
				display: inline-block;
				margin-right: 10px;
			}
			.social-pet li a {
				height: 35px;
				width: 35px;
				border-radius: 50%;
				text-align: center;
				display: block;
				line-height: 35px;
				background-color: #3a5a95;
				color: #fff;
			}
			.social-pet li:nth-child(2) a {
				background-color: #57aced;
			}
			.social-pet li:nth-child(3) a {
				background-color: #dd4f43;
			}
			.social-pet li:nth-child(4) a {
				background-color: #6b27b2;
			}
			.social-pet li a:hover {
				background-color: #0141a2;
			}
			.social-pet li a:hover i {
				transform: rotate(360deg);
				-moz-transform: rotate(360deg);
				-webkit-transform: rotate(360deg);
			}
			.recent-post li {
				display: block;
				color: #ccc;
				margin-bottom: 25px;
			}
			.recent-post li label {
				float: left;
				border: 2px solid #ccc;
				padding: 1px 7px;
				text-align: center;
			}
			.recent-post li label span {
				color: #fff;
			}
			footer .input-group-addon {
				background-color: #0141a2;
				padding: 10px;
			}
			.f-address li {
				display: inline-block;
			}
			.f-address li i {
				color: #2995de;
				font-size: 18px;
			}
			.f-address li a {
				color: #ccc;
			}
			/*=-Copyright-=*/
			.copyright {
				background-color: #111;
				padding: 12px 0;
        font-size:14px;
			}
</style>

