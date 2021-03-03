<!DOCTYPE html>
<html  lang="en-US">
<head>
<link rel="stylesheet" href="../css/style.css">
<link rel="icon"
		      href="../favicon.ico"
		      type="image/x-icon">
<title>Single User Mode, zsh , and Other Misadventures in Web Design</title>
</head>
<body  onload="showComments()">
	<?php
        require_once '../chunks/DatabaseAdaptor.php';
        session_start(); 
	    include '../chunks/sidebar.php';
	?>
	<header id="top">
		<h1>Single User Mode, zsh , and Other Misadventures in Web Design</h1>
	</header>
	<article>
		<div id="page-metadata">
			<p>
						<span id="page-description">
				<p>Getting started in Web Development is tough.</p>
			</span><br>
						<span id="page-authors">
							<span><em>Orlando Rodriguez</em></span>
						</span><br>
			<span id="page-metadata-block">
								<span id="page-date-range"><em>Jul 10, 2020</em></span>
												<span id="page-status"><em>Complete</em></span>
												<span id="page-importance"><em>4</em></span>
							</span><br>
			</p>	
		</div>
				<div id="TOC">
			<ul>
   <li><a href="#the-problem">The Problem</a></li>
   <li><a href="#the-lesson">The Lesson</a></li>
   </ul>
		</div>
				<div id="main">
						<div class="abstract">
			<blockquote>
			<p>
				<p>It’s very easy to get discouraged when encountering an obstacle in your learning. It can breed feelings of inadequacy. Often times people will take these obstacles as a sign to give up and just stop trying to get good at something.</p>	
			</p>
			</blockquote>
			</div>
						<p>A post about the struggles of beginner web development. And a cautionary tale about setting sudo permissions.</p>
      <h1 id="the-problem">The Problem</h1>
      <p>A while back, I was configuring SSH keys so that I could edit my website from my local machine without having to enter a password. I was having trouble with some commands I was trying to run while logged in as root. I figured I could change the shell to zsh to see what would happen. It didn’t go so well as zshell was not configured on the server. This unexpectedly bricked my server and my root account was locked out. Logging in through other machines didn’t help either. I was panicking as entering the password on the Vultr terminal wasn’t helping either, so I knew at that point that my SSH configuration wasn’t the root of the issue (no pun intended). I was horrified, because I had never encountered an issue like this before.</p>
      <p>I had to enter single user mode and it turns out that the root account couldn’t even use the terminal because the shell was set to zsh (which again doesn’t exist on that server). Since the file system was set to read-only, I had to remount it all with <code>$ mount -o remount,rw /</code>. This allowed me to <code>vim</code> into <code>/etc/passwd</code> to change the default shell back to bash. The worst was seemingly over as I comfortably logged back into my server without any issues at all. I finally got the SSH keys conigured and disabled password logins. However, I noticed that the site was down.</p>
      <p>I was very frustrated as I <code>ssh</code>’d back into the server and tried to see what was going on. I restarted nginx to no avail as I got error messages. After some searching, I found out that Apache was blocking port 80. I cleared the connections and eventually purged my server of all Apache-related things.</p>
      <h1 id="the-lesson">The Lesson</h1>
      <p>The moral of the story is to know what you’re working with before making any drastic changes. And, it’s always a good idea to have backup sudoers on your machine so that you can repair things just in case you mess up like me. Although I think you would have to have SSH keys for them as well if you disable passwords. Another lesson I learned is to clear up any conflicting software. Overall, this was a very interesting learning experience, as it’s the first time I’ve genuinely been afraid of a programming mistake I made.</p>
		</div>
		<hr>
			<?php 
			   $_SESSION['article'] = 'good-practices';
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