<!DOCTYPE html>
<html  lang="en-US">
<head>
<link rel="stylesheet" href="../css/style.css">
<link rel="icon"
		      href="../favicon.ico"
		      type="image/x-icon">
<title>About the Site</title>
</head>
<body  onload="showComments()">
	<?php
        require_once '../chunks/DatabaseAdaptor.php';
        session_start(); 
	    include '../chunks/sidebar.php';
	?>
	<header id="top">
		<h1>About the Site</h1>
	</header>
	<article>
		<div id="page-metadata">
			<p>
						<span id="page-description">
				<p>Details about the site’s inception. As well as an explanation of my workflow.</p>
			</span><br>
						<span id="page-authors">
							<span><em>Orlando Rodriguez</em></span>
						</span><br>
			<span id="page-metadata-block">
								<span id="page-date-range"><em>Feb 25, 2021</em></span>
												<span id="page-status"><em>Important</em></span>
												<span id="page-importance"><em>Complete</em></span>
							</span><br>
			</p>	
		</div>
				<div id="TOC">
			<ul>
   <li><a href="#problems-with-other-hosts">Problems with other Hosts</a></li>
   <li><a href="#current-state">Current State</a></li>
   <li><a href="#design-process">Design Process</a>
   <ul>
   <li><a href="#brainstorming">Brainstorming</a></li>
   <li><a href="#compilation">Compilation</a></li>
   <li><a href="#adding-to-site">Adding to Site</a></li>
   </ul></li>
   <li><a href="#going-forwards">Going Forwards</a></li>
   </ul>
		</div>
				<div id="main">
						<div class="abstract">
			<blockquote>
			<p>
				<p>What started out as an attempt to showcase my projects slowly turned out to be an ambitious project itself. Between all the options for web hosting such as Wix, Wordpress, and GitHub Sites, I opted for a more traditional from-scratch approach. I made my website completely from scratch and currently use a <a href="https://www.vultr.com/">Vultr</a> server running Debian, and code my site in basic HTML, CSS, JS, and PHP. Currently, the site serves as a portfolio of projects and random articles about topics I care about.</p>	
			</p>
			</blockquote>
			</div>
						<h1 id="problems-with-other-hosts">Problems with other Hosts</h1>
      <p>So, it all started when I decided to make a site to host my projects. I thought it would be a good idea to use Wordpress. And it actually worked pretty well, I was able to get a ton of articles posted over a month. Just stuff about my electronics and little side projects. However, the wordpress logo really bothered me and I hated the idea of paying money to take it off.</p>
      <p>In my search for independence, I bought my own domain name on Google Domains, and started working with that. I got a Github Pages site set up and I really enjoyed having more control over the content and formatting of my site. One issue however, was the URL. I was still bothered and somewhat embarrassed by the idea of having to give people a Github URL to look at my stuff. So, call it arrogance or self-pride, but whatever it was, it motivated me to rent a Virtual Private Server using Vultr to host my site.</p>
      <p>With my own server, I of course had to learn a lot of useful things like setting up SSL with Certbot, scheduling with crontabs, and installing a full LEMP stack on the server. I ended up expanding my skillset a lot so that was a plus. Having to SSH into my server to edit the files was a pain though because of the lag. So, I set up SSH keys on my Orlix machine so I could work on a local repository of the site and then push the changes when I felt like updating. Now I have update/archive scripts that do most of the heavy lifting and version control for me.</p>
      <h1 id="current-state">Current State</h1>
      <p>As mentioned before, I use a Vultr server for hosting, and manage my domain via <a href="https://www.epik.com/">Epik</a>. I recently added PHP support so I can have a universal navbar on the left. I really like this as I don’t have to go through all the trouble of remaking the menu each time I want to make a change.</p>
      <p>I also adopted Pandoc so I could write my articles in Markdown and then have them converted to a neat HTML format. The only problem is that Pandoc PHP support is quite limited. So, I have to convert it to HTML first and then change the extension to PHP eventually. I can probably automate this later.</p>
      <h1 id="design-process">Design Process</h1>
      <h2 id="brainstorming">Brainstorming</h2>
      <p>When I get an idea for an article, I first write out a draft of it in Markdown. As a side note, I do all of my text editing in Vim unless I need to use an IDE for a class or something. The cool thing about <code>.md</code> files is that I can edit them easily without having to worry about HTML tags. I will usually do high-speed research on the topic using my convenient Orlix configuration and shortcut keys. The tiling window manager allows me to get work done without any BS.</p>
      <h2 id="compilation">Compilation</h2>
      <p>I convert my Markdown file to HTML using <a href="https://pandoc.org/">Pandoc</a>. I have a default HTML template that I use for all articles, and my helper script makes the content fit the format perfectly. After the HTML file is created, my helper script converts it to PHP so that the navbar code can work.</p>
      <h2 id="adding-to-site">Adding to Site</h2>
      <p>Then I move the file to its respective place in the local site repository. I will usually run an archiving script to save the site to an archive folder, just in case I screw it up somehow. If everything is backed up, I then run the updating script to update the server.</p>
      <h1 id="going-forwards">Going Forwards</h1>
      <p>I plan on keeping this site rather simple and not having too much functionality on it. I just want it to be informative and useful for anyone trying to find out more about me. I will probably configure a Git Server and Email Server later on so that I can communicate and host projects on here without having to depend on too many outside services.</p>
		</div>
		<hr>
			<?php 
			   $_SESSION['article'] = 'about-site';
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