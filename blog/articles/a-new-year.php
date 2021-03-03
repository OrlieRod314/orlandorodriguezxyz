<!DOCTYPE html>
<html  lang="en-US">
<head>
<link rel="stylesheet" href="../css/style.css">
<link rel="icon"
		      href="../favicon.ico"
		      type="image/x-icon">
<title>A New School Year</title>
</head>
<body  onload="showComments()">
	<?php
        require_once '../chunks/DatabaseAdaptor.php';
        session_start(); 
	    include '../chunks/sidebar.php';
	?>
	<header id="top">
		<h1>A New School Year</h1>
	</header>
	<article>
		<div id="page-metadata">
			<p>
						<span id="page-description">
				<p>A new school year draws near in the midst of a pandemic.</p>
			</span><br>
						<span id="page-authors">
							<span><em>Orlando Rodriguez</em></span>
						</span><br>
			<span id="page-metadata-block">
								<span id="page-date-range"><em>Aug 10, 2020</em></span>
												<span id="page-status"><em>Complete</em></span>
												<span id="page-importance"><em>7</em></span>
							</span><br>
			</p>	
		</div>
				<div id="TOC">
			<ul>
   <li><a href="#the-projects-i-did-do">The Projects I Did Do</a></li>
   <li><a href="#fitness">Fitness</a></li>
   <li><a href="#fencing">Fencing</a></li>
   <li><a href="#university-response-to-covid-19">University Response to COVID-19</a></li>
   <li><a href="#anime-ive-watched">Anime I’ve Watched</a>
   <ul>
   <li><a href="#neon-genesis-evangelion">Neon Genesis Evangelion</a></li>
   <li><a href="#death-note">Death Note</a></li>
   </ul></li>
   </ul>
		</div>
				<div id="main">
						<div class="abstract">
			<blockquote>
			<p>
				<p>A new school year draws near in the midst of a pandemic. What interesting new experiences await me as the country prepares for a full semester of online college. Will there be a sharp increase in coronavirus cases as a result of campus opening? Only time can tell. But most importantly, is our tuition money being put to good use?</p>	
			</p>
			</blockquote>
			</div>
						<p>I’m looking forward to going to class because I may or may have not wasted a large chunk of my break messing around with video games and watching anime. I think that it’s important to have fun though. I spent a lot of time stressing over not being able to find a project to work on when I could have just played video games and then come up with something. Probably rushed myself to find something to work on too much.</p>
      <h1 id="the-projects-i-did-do">The Projects I Did Do</h1>
      <p>I did end up working on Orlix and establishing a nice workflow. So, I at least invested some time into inventing my own tools for productivity. Updating the site and working on projects has never been easier.</p>
      <p>I made an FTP app in Python with a friend from school. I also worked a little bit on some Java projects so that I could have an easier time in CS210. I did some ReactJS tutorials so that I could start working on better-looking apps.</p>
      <p>I was doing a research project related to Machine Learning, but I discovered that I really didn’t like the specific application of ML in that context, so I dropped it. On the bright side, I learned a lot about working with supercomputers and Linux. So, I can probably benefit more from what I learned than what I actually did. Overall, I wouldn’t say it was a bad experience, but it was definitely stressful. And I discovered that I didn’t like doing research in an academic setting.</p>
      <p>I also worked a little bit more on my hacking skills (Hack the Box stuff).</p>
      <h1 id="fitness">Fitness</h1>
      <p>I decided to start lifting weights seriously so that I could build up some decent upper body strength. I think I benefited overall as I have noticed some considerable gains in my biceps, shoulders, and back. I should start prioritizing my abs if I want to look leaner.</p>
      <h1 id="fencing">Fencing</h1>
      <p>Unfortunately, since I am at-risk for severe complications from COVID, I am unable to attend fencing practice. It’s not decided yet if we’re even going to be allowed to meet on campus, so it may turn out that no one can go. I think it’s very unfortunate because fencing is one of my strongest passions and I would be mad if I had to miss out on five more months.</p>
      <p>Here’s hoping I can eventually travel with the team and have fun.</p>
      <h1 id="university-response-to-covid-19">University Response to COVID-19</h1>
      <p>The University of Arizona, in my opinion, did a horrible job of preparing for a return back to school.</p>
      <p>Sure, it’s an unprecedented situation that scared the hell out of everyone, but I still think they did a bad job. They designed three class formats as a response to the pandemic: In-Person, Flex In-Person, and Live Online.</p>
      <p>Flex In-Person classes are a shitty way of saying “We have an administration that’s horribly inflexible”. They’re basically classes that are partially physical and online. This is obviously a bad idea because if the whole goal is to keep students safe, then they shouldn’t be on campus. It’s an inconvenient compromise between keeping students safe at home, and keeping them on campus to generate revenue at the food courts and bookstore.</p>
      <p>I don’t think any class should have a genuine reason to be in-person because literally every class went online last semester. People are literally going to die because some classes are going to be in-person.</p>
      <p>Anyways, I consider myself fortunate that all my classes are online. This way, I can skip out on having to pay rent this semester, and I can pocket a nice fat check from the Bursar’s Office.9</p>
      <h1 id="anime-ive-watched">Anime I’ve Watched</h1>
      <h2 id="neon-genesis-evangelion">Neon Genesis Evangelion</h2>
      <p>Honestly, I love this anime. The relationships between all the characters are pretty cool. I also liked the whole concept of the Evas and the setting of the plot. I would definitely be open to watch more robot/philosophical/symbolic anime.</p>
      <p>I watched NGE and EoE. I want to finish up the remakes soon before school starts.</p>
      <h2 id="death-note">Death Note</h2>
      <p>Death Note is one of the most iconic anime ever made, and I now understand why. Sure, the second half of the series was not the best, but the entire premise and conflict between L and Light was amazing. I will definitely be rewatching it for a long time.</p>
      <p>I found it interesting how some of my thought process aligned with Light at certain points. I did some analysis about MBTI types and turns out that L and Light are close to the INTJ area which is what I am. In fact, some people argue that Light is indeed an INTJ.</p>
		</div>
		<hr>
			<?php 
			   $_SESSION['article'] = 'a-new-year';
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