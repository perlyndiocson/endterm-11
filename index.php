<html>
<head>
	<title>nav bar</title>
</head>
<body>
<nav class="a">
	
	<body>
<header>
  <a href="#" class="logo">KAI'S WEBSITE</a>
  <nav class="site-nav">
    <ul>
      <li><a href="#">Home Page</a></li>
      <li><a href="#">SVG</a></li>
      <li><a href="#">CANVAS</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  </nav>
</header>
</body>
 		    	 
<style>
	body {
  background: #222;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2.5rem;
}

.logo {
  font-size: 34px;
  line-height: 50px;
  text-align: center;
  text-decoration: none;
  color: white;
}

.site-nav {
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

ul {
  display: flex;
  padding: 0;
  margin: 0;
  list-style-type: none;
}
ul:hover li:not(:hover) a {
  opacity: 0.2;
}
ul li {
  position: relative;
  padding: 30px 25px 30px 25px;
  cursor: pointer;
}
ul li::after {
  position: absolute;
  content: "";
  top: 100%;
  left: 0;
  width: 100%;
  height: 2px;
  background: #3498db;
  transform: scaleX(0);
  transition: 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
}
ul li:hover::after, ul li.active::after {
  transform: scaleX(1);
}
ul li a {
  position: relative;
  display: flex;
  color: white;
  font-family: Lato, sans-serif;
  text-decoration: none;
  transition: 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
}

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

	
