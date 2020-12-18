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

<!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

<style>
	.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
</style
