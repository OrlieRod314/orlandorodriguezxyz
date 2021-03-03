<!DOCTYPE html>
<html  lang="en-US">
<head>
<link rel="stylesheet" href="../css/style.css">
<link rel="icon"
		      href="../favicon.ico"
		      type="image/x-icon">
<title>Orlix, An Arch Linux Configuration Made for the Average CS Student</title>
</head>
<body  onload="showComments()">
	<?php
        require_once '../chunks/DatabaseAdaptor.php';
        session_start(); 
	    include '../chunks/sidebar.php';
	?>
	<header id="top">
		<h1>Orlix, An Arch Linux Configuration Made for the Average CS Student</h1>
	</header>
	<article>
		<div id="page-metadata">
			<p>
						<span id="page-description">
				<p>I would highly suggest against completely replacing your OS with Linux at first, especially with a minimalist distro like Arch, Gentoo, or Void. Starting with something simple like Ubuntu on a virtual machine is the best choice for a beginner. It’s a low-stakes way to begin and won’t make you lose all your stuff. Starting with Arch is a very good way to lose your confidence and convince yourself that you’re not good at CS.</p>
			</span><br>
						<span id="page-authors">
							<span><em>Orlando Rodriguez</em></span>
						</span><br>
			<span id="page-metadata-block">
								<span id="page-date-range"><em>Aug, 3, 2020</em></span>
												<span id="page-status"><em>WIP</em></span>
												<span id="page-importance"><em>10</em></span>
							</span><br>
			</p>	
		</div>
				<div id="TOC">
			<ul>
   <li><a href="#why-i-made-orlix">Why I Made Orlix</a>
   <ul>
   <li><a href="#annoying-windows-workflow">Annoying Windows Workflow</a></li>
   <li><a href="#necessities-and-convenient">Necessities and Convenient</a></li>
   </ul></li>
   <li><a href="#my-setup">My Setup</a>
   <ul>
   <li><a href="#why-a-thinkpad-t420">Why a Thinkpad T420</a></li>
   <li><a href="#windows-ssd">Windows SSD</a></li>
   </ul></li>
   <li><a href="#orlix-setup">Orlix Setup</a>
   <ul>
   <li><a href="#packages">Packages</a></li>
   <li><a href="#workflow">Workflow</a></li>
   </ul></li>
   <li><a href="#how-orlix-helped-me">How Orlix Helped Me</a></li>
   <li><a href="#how-orlix-can-help-you">How Orlix Can Help You</a></li>
   </ul>
		</div>
				<div id="main">
						<div class="abstract">
			<blockquote>
			<p>
				<p>In early July I started learning about Linux and what it had to offer for CS students. Over time I guess you could say I became a bit of a Linux elitist. I decided to create a minimalist Arch Linux install and modify it to suit my needs. My programming efficiency basically doubled. Here I go into detail about the packages I installed. I believe that a motivated CS student can significantly benefit from this minimalist setup and have a fluid workflow.</p>	
			</p>
			</blockquote>
			</div>
						<p>I just want to point out that it’s totally fine to use Windows or Mac for development, I just think Linux is better. But after all, a computer is a computer. I personally prefer CLI tools and their efficiency, although it may come at a steep learning curve for most. I think that the eventual time payoff is well worth it, and becoming fluent in a CLI tool enables you to do more things than you normally could with its GUI counterpart.</p>
      <h1 id="why-i-made-orlix">Why I Made Orlix</h1>
      <h2 id="annoying-windows-workflow">Annoying Windows Workflow</h2>
      <p>Some people ask me why I went through the trouble of setting this up. I think the main reason was for efficiency. I used to do all my programming on Windows, which wasn’t really that bad to begin with. However, I quickly found that the whole Windows workflow was annoying and got in the way of my creative process. Having to tab through different windows with <code>Alt</code> + <code>Tab</code>, and then clicking through the GUI of whatever editor I was using was very cumbersome.</p>
      <h2 id="necessities-and-convenient">Necessities and Convenient</h2>
      <p>It was also not necessary to have programs like Microsoft Office on my laptop if I write all my essays with LaTeX. I also don’t need complicated IDEs if most of my scripting could be accomplished faster wth Vim. Sure, Eclipse would be nice. But I could always install it if I absolutely had to. I strived for a minimalist install so I could get things done with no BS. No annoying notifications about needed updates.</p>
      <h1 id="my-setup">My Setup</h1>
      <p>My current machine is a Lenovo Thinkpad T420. I have two SSD’s inside the laptop. One of them has Windows 10 with all the GUI IDE’s I don’t like to use. It also has Zoom on it, which I may need for online classes. I DO NOT want that anywhere near my Orlix. The other SSD has Orlix on it.</p>
      <h2 id="why-a-thinkpad-t420">Why a Thinkpad T420</h2>
      <p>My gaming laptop was not a suitable choice for this. It had a Safe Boot mode that didn’t easily allow me to boot from a second drive. So, as much as I would prefer to have an HD display with all 16GB RAM and an i7 processor, I didn’t want to risk anything.</p>
      <p>I was able to buy the T420 for less than $200 including shipping and tax. It came with 8GB RAM and an i5. However, I was promised a 250GB SSD but it instead came with a 320GB 7200rpm HDD. After some negotiation with the vendor, I was able to get money to mostly cover the SSD I didn’t get.</p>
      <p><strong>$191.30</strong> (T420) + <strong>$45</strong> (SSD I bought for Orlix) - <strong>$35</strong> (Vendor recompensation) + <strong>$45</strong> (SSD I bought for Windows) + <strong>$10</strong> (Caddy for second drive) = <strong>$256.30</strong> net cost</p>
      <p>So, overall not a horrible price to pay. Just be wary of vendors that try to scam you. If I could go back in time, I would have insisted on a greater recompensation because of his false advertising, even if it was a mistake.</p>
      <h2 id="windows-ssd">Windows SSD</h2>
      <p>I figured it would be a good idea to get Windows 10 on another SSD just in case I were to find myself needing to download something sketchy or needing to use Windows for something school-related (Zoom). I don’t really care what happens to my Windows system because I didn’t put any sensitive information on there.</p>
      <h1 id="orlix-setup">Orlix Setup</h1>
      <div class="pic-container">
      	<img src="../img/orlix/orlix_screenshot.png" alt="orlix">
      	<div class="pic-title">
      		<p>Orlix running on T420 with cool space aesthetics</p>
      	</div>
      </div>
      <h2 id="packages">Packages</h2>
      <p>One important distinction should be made here. Orlix is not actually a completely independent Linux distribution that I made… yet! This Arch Linux setup is a prototype to prove to myself that the workflow I want is actually possible. This is merely a proof of concept. Although I do plan on keeping this around.</p>
      <p>Here is a list of all the important packages that I can think of:</p>
      <p>Aesthetic:</p>
      <ul>
      <li>dwm</li>
      </ul>
      <p>Installed from source. Tiling window manager</p>
      <ul>
      <li>dwm_bar</li>
      </ul>
      <p>Installed from source. A status bar for showing stats</p>
      <ul>
      <li>dmenu</li>
      </ul>
      <p>Installed from source. Search bar for pulling up programs such as a browser</p>
      <ul>
      <li>st</li>
      </ul>
      <p>Installed from source. Suckless terminal</p>
      <ul>
      <li>nitrogen</li>
      </ul>
      <p>Wallpaper program</p>
      <p>Programming:</p>
      <ul>
      <li>Python</li>
      <li>Java</li>
      <li>R</li>
      </ul>
      <p>Browsers:</p>
      <ul>
      <li>Firefox</li>
      </ul>
      <p>Utility:</p>
      <ul>
      <li>scrot</li>
      </ul>
      <p>For taking screenshots</p>
      <ul>
      <li>ranger</li>
      </ul>
      <p>For A E S T H E T I C file navigation</p>
      <ul>
      <li>neofetch</li>
      </ul>
      <p>For flexing my OS to people</p>
      <ul>
      <li>gpg</li>
      </ul>
      <p>For file encryption</p>
      <ul>
      <li>open-ssh</li>
      </ul>
      <p>For connecting to my site and running my auto-update scripts</p>
      <p>Text Editor:</p>
      <ul>
      <li>Vim</li>
      </ul>
      <h2 id="workflow">Workflow</h2>
      <p>When I boot up Orlix, I am greeted with the login shell. I log into my account and start dwm. I do not want to have dwm start up automatically in case I just want to run a quick script or check something.</p>
      <p>When I start dwm with <code>startx</code>, I see my wallpaper and a clean status bar. I can easily check my available storage, battery, audio, outside temperature, wifi-connection, keyboard layout, and date/time.</p>
      <p>I also have tags on my tabs to the upper left. I have two tabs meant for terminal-based work, two for firefox, one for python, two for java, one for R, and one for music. The terminal tabs are on opposite ends of the tab list just so that I don’t confuse my work in case I’m SSH’d into a server or something.</p>
      <p>With the exception of internet browsing, my workflow never involves the mouse. This way, only two major factors limit my productivity: typing speed and internet connection. I love using the terminal to do everything, but I also think that some things can’t be done through just text. Some of the worst systems admin disasters have been caused by a loss of situational awareness as a result of using a terminal. My worst <a href="good-practices.php">sys admin disaster</a> was caused by that as well.</p>
      <h1 id="how-orlix-helped-me">How Orlix Helped Me</h1>
      <p>As I said before, Windows was just excessive for what I needed and wanted. The packages listed above are really all I need for all I do.</p>
      <p>I timed myself working on some Python scripts and trying to run them in both Windows and Orlix. For this experiment, I decided not to use both at the same time and limit myself to whatever technology was on each machine. I decided not to count boot time, but I can safely say that Orlix is significantly faster.</p>
      <p>With Orlix, I could safely switch tabs and make a new terminal with a handful of keystrokes. With Windows, it took about twice the amount of keystrokes to accomplish the same thing. Since I used Vim on Orlix, I literally never touched the mouse. Vim shortcuts also helped me write text faster. On Windows, I constantly had to move the mouse to click on whatever text I wanted to edit. I was using Sublime.</p>
      <p>In the end, I accomplished my task in about 10 minutes with Orlix, and in about 23 minutes with Windows. Not that long overall, but significantly faster with Orlix.</p>
      <p>It is worth stating however, that I did distract myself with Spotify and Discord on Windows. Now, this didn’t take up too much time, so the real gain in productivity was probably a bit less than double. Just an aside, I consider this an example of the damaging effects of even the smallest distractions. Windows is just distracting by design with all its updates.</p>
      <h1 id="how-orlix-can-help-you">How Orlix Can Help You</h1>
      <p>So now you’re probably wondering, “Okay, I’m glad that Orlix helped you. But why should I care if I can do everything on Windows?”.</p>
      <p>Well, you’re not wrong. But that’s not the point. Often times I see Comp Sci students complaining about how time-consuming the assignments are (even though they really aren’t if you just start on time). My OS here presents a faster, unbloated method for completing homework. I do not think that it’s necessary to have a GUI to do CS homework.</p>
      <p>Also, learning how to use Linux is just something you should know as a CS student. You can become very intimate with the inner workings of your computer and shape your own workflow to however you want it. This is less of an argument for Orlix, and more of an argument for <a href="why-linux.php">using Linux in general</a>.</p>
		</div>
		<hr>
			<?php 
			   $_SESSION['article'] = 'orlix';
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