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





<footer class="new_footer_area bg_color">
            <div class="new_footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                                <p>Don’t miss any updates of our new templates and extensions.!</p>
                                <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                                    <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                                    <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                                    <p class="mchimp-errmessage" style="display: none;"></p>
                                    <p class="mchimp-sucmessage" style="display: none;"></p>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Download</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">Android App</a></li>
                                    <li><a href="#">ios App</a></li>
                                    <li><a href="#">Desktop</a></li>
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">My tasks</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Term &amp; conditions</a></li>
                                    <li><a href="#">Reporting</a></li>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Support Policy</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                                <div class="f_social_icon">
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-linkedin"></a>
                                    <a href="#" class="fab fa-pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-7">
                            <p class="mb-0 f_400">© kaicounter Inc.. 2020 All rights reserved.</p>
                        </div>
                        <div class="col-lg-6 col-sm-5 text-right">
                           
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<style>
	body {
    background: #fbfbfd;
}


.new_footer_area {
    background: #fbfbfd;
}

.new_footer_top {
    padding: 120px 0px 270px;
    position: relative;
      overflow-x: hidden;
}
.new_footer_area .footer_bottom {
    padding-top: 5px;
    padding-bottom: 50px;
}
.footer_bottom {
    font-size: 14px;
    font-weight: 300;
    line-height: 20px;
    color: #7f88a6;
    padding: 27px 0px;
}
.new_footer_top .company_widget p {
    font-size: 16px;
    font-weight: 300;
    line-height: 28px;
    color: #6a7695;
    margin-bottom: 20px;
}
.new_footer_top .company_widget .f_subscribe_two .btn_get {
    border-width: 1px;
    margin-top: 20px;
}
.btn_get_two:hover {
    background: transparent;
    color: #5e2ced;
}
.btn_get:hover {
    color: #fff;
    background: #6754e2;
    border-color: #6754e2;
    -webkit-box-shadow: none;
    box-shadow: none;
}
a:hover, a:focus, .btn:hover, .btn:focus, button:hover, button:focus {
    text-decoration: none;
    outline: none;
}



.new_footer_top .f_widget.about-widget .f_list li a:hover {
    color: #5e2ced;
}
.new_footer_top .f_widget.about-widget .f_list li {
    margin-bottom: 11px;
}
.f_widget.about-widget .f_list li:last-child {
    margin-bottom: 0px;
}
.f_widget.about-widget .f_list li {
    margin-bottom: 15px;
}
.f_widget.about-widget .f_list {
    margin-bottom: 0px;
}
.new_footer_top .f_social_icon a {
    width: 44px;
    height: 44px;
    line-height: 43px;
    background: transparent;
    border: 1px solid #e2e2eb;
    font-size: 24px;
}
.f_social_icon a {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    font-size: 14px;
    line-height: 30px;
    color: #858da8;
    display: inline-block;
    background: #ebeef5;
    text-align: center;
    -webkit-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
}
.ti-facebook:before {
    content: "\e741";
}
.ti-twitter-alt:before {
    content: "\e74b";
}
.ti-vimeo-alt:before {
    content: "\e74a";
}
.ti-pinterest:before {
    content: "\e731";
}

.btn_get_two {
    -webkit-box-shadow: none;
    box-shadow: none;
    background: #5e2ced;
    border-color: #5e2ced;
    color: #fff;
}

.btn_get_two:hover {
    background: transparent;
    color: #5e2ced;
}

.new_footer_top .f_social_icon a:hover {
    background: #5e2ced;
    border-color: #5e2ced;
  color:white;
}
.new_footer_top .f_social_icon a + a {
    margin-left: 4px;
}
.new_footer_top .f-title {
    margin-bottom: 30px;
    color: #263b5e;
}
.f_600 {
    font-weight: 600;
}
.f_size_18 {
    font-size: 18px;
}
h1, h2, h3, h4, h5, h6 {
    color: #4b505e;
}
.new_footer_top .f_widget.about-widget .f_list li a {
    color: #6a7695;
}


.new_footer_top .footer_bg {
    position: absolute;
    bottom: 0;
    background: url("http://droitthemes.com/html/saasland/img/seo/footer_bg.png") no-repeat scroll center 0;
    width: 100%;
    height: 266px;
}

.new_footer_top .footer_bg .footer_bg_one {
    background: url("https://1.bp.blogspot.com/-mvKUJFGEc-k/XclCOUSvCnI/AAAAAAAAUAE/jnBSf6Fe5_8tjjlKrunLBXwceSNvPcp3wCLcBGAsYHQ/s1600/volks.gif") no-repeat center center;
    width: 330px;
    height: 105px;
  background-size:100%;
    position: absolute;
    bottom: 0;
    left: 30%;
    -webkit-animation: myfirst 22s linear infinite;
    animation: myfirst 22s linear infinite;
}

.new_footer_top .footer_bg .footer_bg_two {
    background: url("https://1.bp.blogspot.com/-hjgfxUW1o1g/Xck--XOdlxI/AAAAAAAAT_4/JWYFJl83usgRFMvRfoKkSDGd--_Sv04UQCLcBGAsYHQ/s1600/cyclist.gif") no-repeat center center;
    width: 88px;
    height: 100px;
  background-size:100%;
    bottom: 40;
    left: 38%;
    position: absolute;
    -webkit-animation: myfirst 30s linear infinite;
    animation: myfirst 30s linear infinite;
}



@-moz-keyframes myfirst {
  0% {
    left: -25%;
  }
  100% {
    left: 100%;
  }
}

@-webkit-keyframes myfirst {
  0% {
    left: -25%;
  }
  100% {
    left: 100%;
  }
}

@keyframes myfirst {
  0% {
    left: -25%;
  }
  100% {
    left: 100%;
  }
}

/*************footer End*****************/


	
	

            
