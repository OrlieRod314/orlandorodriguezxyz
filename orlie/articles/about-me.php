<!DOCTYPE html>
<html  lang="en-US">
<head>
<link rel="stylesheet" href="../css/style.css">
<link rel="icon"
		      href="../favicon.ico"
		      type="image/x-icon">
<title>About Me</title>
</head>
<body  onload="showComments()">
	<?php
        require_once '../chunks/DatabaseAdaptor.php';
        session_start(); 
	    include '../chunks/sidebar.php';
	?>
	<header id="top">
		<h1>About Me</h1>
	</header>
	<article>
		<div id="page-metadata">
			<p>
						<span id="page-description">
				<p>Who am I and what do I do? A collection of contact information, personal details, and personal projects I’ve been pursuing. A couple of details about my interests and hobbies that I don’t really post about anywhere else.</p>
			</span><br>
						<span id="page-authors">
							<span><em>Orlando Rodriguez</em></span>
						</span><br>
			<span id="page-metadata-block">
								<span id="page-date-range"><em>Feb 24, 2021</em></span>
												<span id="page-status"><em>Complete</em></span>
												<span id="page-importance"><em>10/10</em></span>
							</span><br>
			</p>	
		</div>
				<div id="TOC">
			<ul>
   <li><a href="#school">School</a></li>
   <li><a href="#hobbies">Hobbies</a>
   <ul>
   <li><a href="#coding-and-cybersec">Coding and CyberSec</a></li>
   <li><a href="#fencing">Fencing</a></li>
   <li><a href="#other">Other</a></li>
   <li><a href="#personality">Personality</a></li>
   </ul></li>
   <li><a href="#contact">Contact</a>
   <ul>
   <li><a href="#pgp">PGP</a></li>
   </ul></li>
   <li><a href="#stack">Stack</a>
   <ul>
   <li><a href="#external-pc-specs">External PC Specs</a></li>
   <li><a href="#internal-pc-specs">Internal PC Specs</a></li>
   <li><a href="#software-stack">Software Stack</a></li>
   </ul></li>
   <li><a href="#books">Books</a></li>
   <li><a href="#music">Music</a></li>
   </ul>
		</div>
				<div id="main">
						<div class="abstract">
			<blockquote>
				<img src="../img/me/me.jpg" alt="Me" width=150>
			<p>
				<p>Starting and maintaining a website has helped me write about my hobbies and interests without falling into the social media trap. When making the website, I wanted to have a clear division between my personal life and other hobbies. Because of this, I have divided my site into three parts: A resume site for employers to quickly find my resume and links, a main site for articles about my thoughts and projects, and a personal blog for personal stuff.</p>	
			</p>
			</blockquote>
			</div>
						<p>Since the site’s inception, I’ve tried to maintain a clear separation between the personal and professional aspects of my life. I will keep all my personal details on this singular page. It’s easier to keep track of what people know about me if it’s all in one place that I control.</p>
      <h1 id="school">School</h1>
      <p>I am currently a student at the University of Arizona studying Computer Science, as well as Statistics &amp; Data Science with a minor in Spanish. How do I have time to study two fields? Well that’s because of the 52 credits I transferred from high school. So, although I am in my second year, I am a senior by credit definition.</p>
      <p>Out of the two fields however, I definitely care more about Computer Science and do better in it as a result. I may get a minor in SDS if it doesn’t go well. Currently I am in the Honors College.</p>
      <h1 id="hobbies">Hobbies</h1>
      <h2 id="coding-and-cybersec">Coding and CyberSec</h2>
      <p>Software and Web Development are my favorite creative hobbies. I enjoy making software and content for others to enjoy and implement. On the side I may dabble in hobbyist electronics. I also enjoy learning languages and am fluent in English and Spanish. Cybersecurity is also an interesting hobby of mine, as I am part of a cyber security club on campus.</p>
      <h2 id="fencing">Fencing</h2>
      <p>Aside from intellectual pursuits, I am also heavily involved in my school’s fencing club. I am the secretary and site designer of <a href="https://www.uawildcatfencing.com/">UA Wildcat Fencing</a>. Although I am currently a U rank, I think I’m well on my way to earning a rank as soon as tournaments open up again.</p>
      <p>We are an épée fencing team, though I would like it if we could introduce foil and saber fencing, but we just don’t have the people to do it.</p>
      <h2 id="other">Other</h2>
      <p>I play airsoft consistently. Not much as of late however, because of the pandemic.</p>
      <p>I am also an Osu! player and can consistently complete 4-stars. I use the S620 Gaomon tablet and Whitecat skin.</p>
      <h2 id="personality">Personality</h2>
      <p>According to the MBTI, I am an <a href="https://www.16personalities.com/intj-personality">INTJ</a>.</p>
      <p>Big Five Personality Inventory:</p>
      <ul>
      <li>Openness to Experience: 3.9/3.9</li>
      <li>Conscientiousness: 4.8/3.4</li>
      <li>Extraversion: 2.9/3.0</li>
      <li>Agreeableness: 2.6/3.6</li>
      <li>Neuroticism: 4.0/2.9</li>
      </ul>
      <h1 id="contact">Contact</h1>
      <p>You can always email me at <a href="mailto:orlandorodriguezosr@protonmail.ch" class="email">orlandorodriguezosr@protonmail.ch</a>.</p>
      <h2 id="pgp">PGP</h2>
      <p>Although I don’t expect to find myself having to send secure messages any time soon, I think it would be a good idea to put this here just in case.</p>
      <ul>
      <li>Fingerprint: <code>A50D D5EB 3857 42F9 19F5 04B6 937F C0CE 10C7 B41A</code></li>
      <li>Key ID: <code>10C7B41A</code></li>
      </ul>
<pre> 
-----BEGIN PUBLIC KEY BLOCK-----

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
Uo3cgl83nEqoDMckw+KY0yILpdbSqm61MAY1PJg=
=XH3g
-----END PGP PUBLIC KEY BLOCK-----
</pre>
      <h1 id="stack">Stack</h1>
      <h2 id="external-pc-specs">External PC Specs</h2>
      <p>As of January 2021, I use a PC I built by myself. I have a 1440p Pixio main monitor, and an 1080p portrait mode monitor to the right side. I use the second monitor for scrolling through Discord or reading. Most of my peripherals are <a href="https://www.razer.com/">Razer</a> brand, but my keyboard is a <a href="https://www.pcgamingrace.com/products/gmmk-full-brown-switch">GMMK</a> from <a href="https://www.pcgamingrace.com/">Glorious PC Gaming Race</a>. I use a <a href="https://www.tonormic.com/collections/usb-microphones/products/tonor-tc-777-usb-microphone">TONOR TC-777</a> microphone.</p>
      <h2 id="internal-pc-specs">Internal PC Specs</h2>
      <p>My PC has a <a href="https://www.nvidia.com/en-us/geforce/graphics-cards/30-series/rtx-3060-3060ti/">3060Ti Nvidia CPU</a>, and an <a href="https://www.amd.com/en/products/cpu/amd-ryzen-5-5600x">AMD Ryzen 5600X CPU</a>.</p>
      <h2 id="software-stack">Software Stack</h2>
      <p>My CS workflow involves heavy use of Eclipse, VSCode, and Vim. I will usually program in Java.</p>
      <p>My other courses and hobbies usually require me to use LaTeX to compile PDFs.</p>
      <h1 id="books">Books</h1>
      <p>I like to read a lot, but it’s inconvenient carrying around printed books all the time, which is why I bought myself a <a href="https://www.amazon.com/All-new-Kindle-Paperwhite-Waterproof-Storage/dp/B075MWNNJG/">Kindle</a>. I would recommend the Paperwhite version, it has a higher resolution, is waterproof, and has an anti-glare screen.</p>
      <p>My favorite author is <a href="https://www.calnewport.com/">Cal Newport</a>, I especially enjoyed his works <a href="https://www.calnewport.com/books/digital-minimalism/">Digital Minimalism</a> and <a href="https://www.calnewport.com/books/deep-work/">Deep Work</a>.</p>
      <h1 id="music">Music</h1>
      <p>I enjoy IDM and EDM music, especially the works of <a href="https://aphextwin.warp.net/">Aphex Twin</a>.</p>
      <div class="pic-container">
      	<img src="../img/about_me/aphex-twin.svg" alt="aphex twin">
      	<div class="pic-title">
      		<p>My favorite</p>
      	</div>
      </div>
		</div>
		<hr>
			<?php 
			   $_SESSION['article'] = 'about-me';
	           include '../chunks/comments.php';
	       ?>
	    <hr><br>	
		<div id="comments"></div>
		<br>
	</article>
	<script>
		var comments = document.getElementById("comments");
		function showComments() {
			var ajax = new XMLHttpRequest();
			ajax.open("GET", "../chunks/controller.php?todo=getComments", true);
			ajax.send();
			ajax.onreadystatechange = function () {
				if (ajax.readyState == 4 && ajax.status == 200) {
					comments.innerHTML = ajax.responseText;
				}
			};
		}
	</script>
</body>
</html>
<?php
?>
