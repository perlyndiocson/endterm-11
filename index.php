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
  <a href="#css">Css</a>
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

<style>
	body {
  font-family: Rubik,Arial,sans-serif;
    font-weight: 400;
    font-size: 1rem;
    overflow-x: hidden;
    color: #607289;
}

h5 {
    font-size: 1rem;
    line-height: 1.375;
  font-family: Rubik,Arial,sans-serif;
    font-weight: 500;
    color: #030929;
}

a {
  color: #818494;
  font-weight: 500;
  text-decoration: none;
  background-color: transparent;
}

a:hover {
  color: #007bff;
  text-decoration: none;
}

footer {
  background: #ebf4fa;
}
</style>
</body>

<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
<footer>
  <div class="container pt-5 border-bottom">
    <div class="row">
      <div class="col-md-3 col-sm-12 mb-3 text-center">
        <svg class="img-fluid" width="200px" height="60px" viewBox="0 0 200 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                <desc>Created with Sketch.</desc>
                <defs>
                  <linearGradient x1="46.3528198%" y1="45.7301342%" x2="92.3528198%" y2="93.7383901%" id="linearGradient-1">
                    <stop stop-color="#0062A5" offset="0%"></stop>
                    <stop stop-color="#AB53F1" offset="100%"></stop>
                  </linearGradient>
                  <linearGradient x1="92.1981982%" y1="53.027027%" x2="-4.8018018%" y2="53.027027%" id="linearGradient-2">
                    <stop stop-color="#0062A5" offset="0%"></stop>
                    <stop stop-color="#B3D0E4" stop-opacity="0" offset="100%"></stop>
                  </linearGradient>
                  <linearGradient x1="7.90990991%" y1="48.7027027%" x2="105.90991%" y2="48.7027027%" id="linearGradient-3">
                    <stop stop-color="#0062A5" offset="0%"></stop>
                    <stop stop-color="#B3D0E4" stop-opacity="0" offset="100%"></stop>
                  </linearGradient>
                </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Artboard-1" fill-rule="nonzero">
                    <path d="M73.06,31.42 L73.06,38.37 L70,38.37 L70,21.63 L70.33,21.63 L78.45,29.49 C79.1310308,30.2054305 79.7656568,30.9636415 80.35,31.76 C80.35,31.76 80.13,29.88 80.13,28.76 L80.13,21.76 L83.2,21.76 L83.2,38.52 L82.86,38.52 L74.74,30.66 C74.0561755,29.9415168 73.4150749,29.1835489 72.82,28.39 C72.9516804,29.3952399 73.0317854,30.4065648 73.06,31.42 Z M87,38.37 L94.08,21.63 L94.36,21.63 L101.73,38.37 L98.24,38.37 L97.48,36.49 L90.94,36.49 L90.18,38.37 L87,38.37 Z M93.23,30.76 L90.95,36.49 L97.49,36.49 L95.14,30.76 C94.67,29.59 94.14,27.76 94.14,27.76 C93.8845892,28.7750055 93.5775228,29.7763088 93.22,30.76 L93.23,30.76 Z M111.89,38.59 C109.641395,38.6072415 107.482485,37.7091851 105.9095,36.1022502 C104.336514,34.4953154 103.484755,32.3177246 103.55,30.07 C103.55,25.4639452 107.283945,21.73 111.89,21.73 C116.496055,21.73 120.23,25.4639452 120.23,30.07 C120.295318,32.319474 119.442205,34.4986338 117.867032,36.1058764 C116.291859,37.713119 114.130333,38.6099734 111.88,38.59 L111.89,38.59 Z M111.89,35.54 C114.83,35.54 116.82,33.17 116.82,30.07 C116.82,26.97 114.82,24.61 111.89,24.61 C108.96,24.61 107,27 107,30.07 C107,33.14 108.94,35.54 111.88,35.54 L111.89,35.54 Z M125.18,38.37 L125.18,21.77 L126.89,21.77 L126.89,36.77 L134.49,36.77 L134.49,38.33 L125.18,38.37 Z M145.55,38.57 C143.31008,38.5936271 141.15847,37.6976444 139.597361,36.0911764 C138.036252,34.4847083 137.202245,32.3083252 137.29,30.07 C137.184827,27.0450225 138.738627,24.2037113 141.342209,22.660044 C143.945792,21.1163767 147.184208,21.1163767 149.787791,22.660044 C152.391373,24.2037113 153.945173,27.0450225 153.84,30.07 C153.925245,32.3145495 153.084893,34.4956017 151.515632,36.1026763 C149.946371,37.7097509 147.785943,38.6017865 145.54,38.57 L145.55,38.57 Z M145.55,36.98 C149.32,36.98 152.07,34.03 152.07,30.07 C152.07,26.11 149.32,23.16 145.55,23.16 C141.78,23.16 139.06,26.16 139.06,30.07 C139.06,33.98 141.8,37 145.54,37 L145.55,36.98 Z M166.44,38.57 C164.171739,38.6381644 161.976869,37.7621541 160.378891,36.1509061 C158.780912,34.5396582 157.923081,32.3376202 158.01,30.07 C157.912953,27.8248637 158.748385,25.6394916 160.318367,24.0316327 C161.888349,22.4237738 164.053188,21.5364926 166.3,21.58 C168.395314,21.4553592 170.44289,22.2386845 171.92,23.73 L170.76,24.92 C169.599759,23.713047 167.971797,23.0706225 166.3,23.16 C162.51,23.16 159.79,26.16 159.79,30.07 C159.687181,31.8869811 160.343786,33.6650218 161.602853,34.9790778 C162.861919,36.2931338 164.610285,37.0251006 166.43,37 C168.148117,37.0734092 169.837112,36.5387379 171.2,35.49 L171.2,32.05 L166.41,32.05 L166.41,30.49 L172.81,30.49 L172.81,36.27 C171.071381,37.8505549 168.777205,38.677609 166.43,38.57 L166.44,38.57 Z M178.22,38.37 L178.22,21.77 L179.95,21.77 L179.95,38.37 L178.22,38.37 Z M193.38,38.57 C191.139234,38.5934995 188.986704,37.6978207 187.424035,36.0916916 C185.861366,34.4855625 185.025057,32.309279 185.11,30.07 C185.02786,27.8324212 185.865415,25.658777 187.42777,24.0548595 C188.990125,22.450942 191.141036,21.5566214 193.38,21.58 C195.932508,21.4336668 198.368901,22.6613955 199.77,24.8 L198.47,25.8 C197.349811,24.0949083 195.418602,23.1008477 193.38,23.18 C189.61,23.18 186.89,26.18 186.89,30.09 C186.89,34 189.6,37 193.37,37 C195.499727,37.0573112 197.506469,36.004718 198.67,34.22 L200,35.17 C198.527231,37.3742386 196.019446,38.6602817 193.37,38.57 L193.38,38.57 Z" id="name" fill="#0062A5"></path>
                    <g id="Group">
                      <g id="Oval">
                        <ellipse id="path-2" fill="#000000" cx="29.08" cy="30" rx="29.08" ry="29.07"></ellipse>
                        <ellipse id="path-2-2" fill="url(#linearGradient-1)" cx="29.08" cy="30" rx="29.08" ry="29.07"></ellipse>
                      </g>
                      <g id="Mask-3" transform="translate(8.000000, 20.000000)" fill="#FFFFFF">
                        <path d="M38.48,3.42 C34.8861387,-0.160155812 29.0738613,-0.160155812 25.48,3.42 L23.37,5.53 L25.5,7.7 L27.6,5.6 C30.0035582,3.20339344 33.8942837,3.20714984 36.2932098,5.60839309 C38.6921358,8.00963633 38.6921358,11.9003637 36.2932098,14.3016069 C33.8942837,16.7028502 30.0035582,16.7066066 27.6,14.31 L23.25,10 L21.08,7.82 L16.73,3.47 C13.1230113,-0.127705123 7.2832237,-0.122688558 3.68242139,3.48120829 C0.0816190774,7.08510513 0.0816190774,12.9248949 3.68242139,16.5287917 C7.2832237,20.1326886 13.1230113,20.1377051 16.73,16.54 L18.83,14.43 L16.66,12.2 L14.55,14.31 C12.1464418,16.7066066 8.25571625,16.7028502 5.85679023,14.3016069 C3.45786421,11.9003637 3.45786421,8.00963633 5.85679023,5.60839309 C8.25571625,3.20714984 12.1464418,3.20339344 14.55,5.6 L18.9,10 L21.82,12.91 L25.42,16.52 C27.6900159,19.0898749 31.1975524,20.1895735 34.5284494,19.3757219 C37.8593464,18.5618704 40.4645689,15.9686168 41.2937497,12.6415026 C42.1229305,9.31438853 41.0393948,5.80182543 38.48,3.52 L38.48,3.42 Z" id="path-4-3"></path>
                      </g>
                      <rect id="Rectangle-2" fill="url(#linearGradient-2)" opacity="0.8" transform="translate(23.776666, 35.003738) rotate(-45.000000) translate(-23.776666, -35.003738) " x="21.0016655" y="32.2287381" width="5.55" height="5.55"></rect>
                      <rect id="Rectangle-2-2" fill="url(#linearGradient-3)" opacity="0.8" transform="translate(34.285158, 24.698846) rotate(-45.000000) translate(-34.285158, -24.698846) " x="31.510158" y="21.923846" width="5.55" height="5.55"></rect>
                    </g>
                  </g>
                </g>
              </svg>
      </div>
      <div class="col-md-9 col-sm-12">

        <div class="col-md-3 col-sm-6 col-6 p-0 float-left mb-3">
          <h5 class="mb-4 font-weight-bold text-uppercase">Solutions</h5>
        <ul class="list-group">
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="../sales/sales-performance-market-pipeline.html">Sales</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="href="../project-management/project-management.html"">Project Management</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="../workforce/workforce-organization-management-hr.html">Workforce</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="../e-commerce/e-commerce.html"> E-Commerce</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="../finance/finance-accounting-erp.html">Finance</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="../business-apps/business-apps.html">Business Apps</a></li>
        </ul>
        </div>

        <div class="col-md-3 col-sm-6 col-6 p-0 mb-3 float-left">
          <h5 class="mb-4 font-weight-bold text-uppercase">Developers</h5>
        <ul class="list-group">
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="https://github.com/naologic">Open Source</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="https://stackshare.io/naologic">Technology</a></li>
        </ul>
        </div>

        <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
          <h5 class="mb-4 font-weight-bold text-uppercase">Company</h5>
        <ul class="list-group">
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="../about-naologic.html"></i>About</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="https://blog.naologic.com"></i> Blog</a></li>
        </ul>
        </div>

        <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
          <h5 class="mb-4 font-weight-bold text-uppercase">Connect</h5>
        <ul class="list-group">
          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
            <a href="https://www.linkedin.com/company/naologic"><i class="fa fa-linkedin mr-1"></i> LinkedIn</a>
          </li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
            <a href="https://twitter.com/naologicerp"><i class="fa fa-twitter mr-1"></i> Twitter</a>       
          </li class="list-group-item bg-transparent border-0 p-0 mb-2">
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"> 
            <a href="https://www.reddit.com/r/naologic/"><i class="fa fa-reddit mr-1"></i> Reddit</a>
          </li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
            <a href="https://plus.google.com/109511516185666043480" target="_blank"><i class="fa fa-google-plus mr-1"></i> Google+</a>
            
          </li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
            <a href="https://github.com/naologic" target="_blank"><i class="fa fa-github mr-1"></i> Github</a>  
          </li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
            <a href="https://blog.naologic.com" target="_blank"><i class="fa fa-medium mr-1"></i> Medium</a>
          </li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
            <a href="https://www.facebook.com/naologic/" target="_blank"><i class="fa fa-facebook mr-1"></i> Facebook</a>
          </li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
            <a href="https://www.youtube.com/channel/UCtHmuf2oQLnksokfz8GIbKA" target="_blank"><i class="fa fa-youtube mr-1"></i> YouTube</a>
          </li>
        </ul>
        </div>

      </div>
        <div class="col-md-12">
          <div class="py-4 d-flex justify-content-center align-items-center">
            <a class="mr-4" href="../privacy.html">Privacy & terms</a>
            <a href="../sitemap.xml">Sitemap</a>
          </div>
        </div>
    </div>
  </div>
</footer>



