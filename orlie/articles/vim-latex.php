<!DOCTYPE html>
<html  lang="en-US">
<head>
<link rel="stylesheet" href="../css/style.css">
<link rel="icon"
		      href="../favicon.ico"
		      type="image/x-icon">
<title>Vim + LaTeX &gt; Word</title>
</head>
<body  onload="showComments()">
	<?php
        require_once '../chunks/DatabaseAdaptor.php';
        session_start(); 
	    include '../chunks/sidebar.php';
	?>
	<header id="top">
		<h1>Vim + LaTeX &gt; Word</h1>
	</header>
	<article>
		<div id="page-metadata">
			<p>
						<span id="page-description">
				<p>Vim and LaTeX are probably the most useful word-processing tools I’ve ever used.</p>
			</span><br>
						<span id="page-authors">
							<span><em>Orlando Rodriguez</em></span>
						</span><br>
			<span id="page-metadata-block">
								<span id="page-date-range"><em>Jul 20, 2020</em></span>
												<span id="page-status"><em>Complete</em></span>
												<span id="page-importance"><em>10</em></span>
							</span><br>
			</p>	
		</div>
				<div id="TOC">
			<ul>
   <li><a href="#introduction">Introduction</a></li>
   <li><a href="#why-word-sucks">Why Word Sucks</a>
   <ul>
   <li><a href="#invasive-formatting">Invasive Formatting</a></li>
   <li><a href="#bloat">Bloat</a></li>
   <li><a href="#proprietary">Proprietary</a></li>
   </ul></li>
   <li><a href="#why-latex-and-vim-are-better">Why LaTeX and Vim are Better</a>
   <ul>
   <li><a href="#formatting">Formatting</a></li>
   <li><a href="#flexibility">Flexibility</a></li>
   </ul></li>
   <li><a href="#combining-with-vim">Combining With Vim</a></li>
   <li><a href="#conclusion">Conclusion</a></li>
   </ul>
		</div>
				<div id="main">
						<div class="abstract">
			<blockquote>
			<p>
				<p>In this article, I make an argument for using a Vim/LaTeX workflow to get stuff done. I prefer it over the tradition WYSIWYG workflow of Microsoft Office. I believe it’s important to emphasize a minimalist workflow so that you can have a no-bs experience.</p>	
			</p>
			</blockquote>
			</div>
						<p>Do you hate having to write out bibliographies each time you write an essay? Do you think the proprietary Microsoft Office Suite is frustrating and too expensive? Well you’re in luck. There’s something called LaTeX that scholars have been using for years to beautifully format their papers. And now you can be one of those elites who have complete control over every little aspect of their paper and don’t let bad formatting ruin their GPA.</p>
      <p>I’ll also introduce you to Vim and why the synthesis of Vim and LaTeX is totally superior to the Word workflow and GUI.</p>
      <h1 id="introduction">Introduction</h1>
      <p>Imagine you’re writing a term paper for some Gen Ed you don’t really care about and your teacher asks you to make a bibliography in some format you’ve never even used that you were “supposed to have learned in High School”. Well, you’re screwed. Oh wait, you can use EasyBib to get the citation in the right format and just copy and paste the citations into your essay’s final page.</p>
      <p>However, as soon as you paste your bibliography, you notice that the font is all messed up and you have to manually highlight the text, change the font, and then fix whatever you just inevitably screwed up. Oh, you want to move an image to the side and wrap text around it? Well behold as your essay gets literally decapitated and the body goes flying down two pages.</p>
      <p>Did you want to add another section or reference to your essay? Well get ready to completely change the formatting by hand, because you’ll inevitably forget something and look like a fool.</p>
      <p>Oh, and on top of that, you have to pay an expensive subscription to use buggy software that changes the GUI every two years for no discernible reason.</p>
      <h1 id="why-word-sucks">Why Word Sucks</h1>
      <h2 id="invasive-formatting">Invasive Formatting</h2>
      <p>If you can’t already tell, I loathe Microsoft Word and the rest of the Office Suite. OneNote is alright I guess because it’s unique and useful enough to be likeable. Word is just so unwieldy because of its bloated features and overwhelming GUI. I personally don’t like having a ton of buttons all over the place because it’s distracting. I just want to be able to sit down and write what I want to say, and THEN worry about how it’ll look in a clean non-invasive manner. What do I mean by non-invasive? I mean a way of formatting text that doesn’t intrude on the actual WRITING process. I think it’s important to clearly divide the informational and aesthetic worflow when writing an essay.</p>
      <p>But if I care so much about workflow division, why don’t I just write the text, and THEN click all the formatting buttons? Well, it’s impossible to do that effectively because by default Word sticks you with a format: Arial 12pt. Word doesn’t care if you’re writing a section, subsection, or making a title, because for all it knows, you’re writing a wall of text in Arial 12pt. Microsoft Word was made in a time when formatting in text editors was very limited and the typical 1983 computer user didn’t really need to make a specially formatted essay. Graphical text editors were hip and cool, nobody wanted to type on a terminal anymore, it was all about the GUI. That’s completely understandable. However, although it made word processing accessible for the average person, it also required a lot of buttons to do things for the user that they can’t be bothered to do manually. As cool as this is, it inherently takes away a level of control over the text.</p>
      <p>So basically, not only are you stuck with a format to begin with, but now part of your attention span is devoted to working against the default format. What you see is what you get, and you never 100% like what you see.</p>
      <h2 id="bloat">Bloat</h2>
      <p>Bloat is defined (according to <a href="https://en.wikipedia.org/wiki/Software_bloat">Wikipedia</a>) as “a process whereby successive versions of a computer program become perceptively slower, use more memory, disk, space, or processing power”. Basically, a program will require a beefier computer and give you less bang for your buck, while never really offering a notable improvement to justify the higher requirements.</p>
      <p>Word is notorious for this, it’s like the program never really changes except for the GUI, which I guess gives the illusion of a sleeker feel. I don’t know what the case is for everyone else, but for the most part, I don’t really notice anything new. It’s messed up too because people are paying a subscription for a modern-looking version of what basically boils down to Word 2003.</p>
      <h2 id="proprietary">Proprietary</h2>
      <p>Proprietary software is complicated. On one hand, competition between software designers can lead to really awesome products. But on the other hand, it can come with some pretty nasty vulnerabilities and closed-source code. It’s definitely not right to say that ALL proprietary software is bad, because some programs are honestly awesome (like video games). I think that in Word’s case it’s bad because you’re sticking a majority of the workforce and student population with a program that they can’t modify to their liking. And then it becomes the industry standard to use the Office Suite for literally everything. The only thing that keeps you tied to the Office Suite is the fear of not having it and looking poor or unprofessional.</p>
      <p>“What the hell is that weird-looking LaTeX thing? Looks hard dude, just use Word.”</p>
      <p>“LibreOffice? Probably not as reliable or good as Word. Word is safer, comfortable, and more mainstream. Just use it dude.”</p>
      <h1 id="why-latex-and-vim-are-better">Why LaTeX and Vim are Better</h1>
      <p>LaTeX is cool. Obviously. Use it.</p>
      <p>The whole LaTeX paradigm is: Content first, formatting second. You can define sections and subsections, and LaTeX will automatically number them and keep tabs on things that you define. You don’t have to highlight text at all to change it’s formatting. I usually just write whatever it is I want to say and then compile the file to see the raw text on paper. And then I add formatting in the preamble to see what it looks like all formatted.</p>
      <h2 id="formatting">Formatting</h2>
      <p>I can customize EVERYTHING about my paper. It’s all text-based editing. I define structures and write commands that take input in the form of text, and it outputs my info to a cleanly formatted template that I MADE. I guess you would have to see my work to believe it. So I promise to one day upload some nice examples of things I’ve made using LaTeX.</p>
      <p>UPDATE: my <a href="https://www.resume.orlandorodriguez.xyz/">resume</a> is one of my finest examples of LaTeX.</p>
      <p>The point is, I can change the structure of a piece of text with a simple command and configure it such that all sections or subsections (or whatever I define) follow that format. Not only that, but I can change the format whenever and it affects everything that I want it to.</p>
      <h2 id="flexibility">Flexibility</h2>
      <p>I can make external files that can hold citations and useful information to import into the file I’ll compile. I can have every section of the essay in its own file if I wanted to, and I can change each piece individually without having to cram everything into one nasty wall of text. LaTeX is as flexible as you are willing to stretch it.</p>
      <p>I know I already said this, but LaTeX can literally do your bibliographies for you! I have not had to write a bibliography in about a year since I started using LaTeX. I just have a file where I hold all my references, and then I call on them in my essay. Easiest stuff ever.</p>
      <h1 id="combining-with-vim">Combining With Vim</h1>
      <p>Vim is my favorite text editor for one reason: No clicking. Sure, sometimes I will use VSCode on my Windows laptop when working on something collaborative or when I have to show things to people who aren’t familiar with Linux in general. But for the most part, Vim is my favorite.</p>
      <p>The cool thing about Vim is that it’s all command-based, and modular. There are different modes for editing text and navigation. And it’s useful because you can also replace pieces of text and alter them using <a href="https://en.wikipedia.org/wiki/Regular_expression">regular expressions</a>. Let’s say I have to list a bunch of links to different sites, well I could just copy and paste an HTML link template over and over in VSCode, and then copy the links into the templates. Or, I could have a text file with the links just listed in front of me. And then I could open the text in Vim, write a command to surround each line with a link template, clear up any white space with a regex, and then just write the link text myself (has to be done manually anyways). Sure, maybe there’s only like five links that you have to write, that’s do-able in VSCode, but what if you have 10,000? Are you actually going to sit there and copy/paste that stuff 10,000 times? No.</p>
      <p>Are you in the middle of the line and want to delete it? Don’t double click it and delete. Just press <code>dd</code>. Are you in the middle of an HTML tag and want to change the text? Don’t even touch your mouse or arrow keys. Just press <code>cit</code>.</p>
      <p>The whole point is to NOT use your mouse at all. This way, the only limiting factor on your productivity is your typing speed and knowledge of shortcuts. Now, combine this with the power of LaTeX, and you have an essay-writing power couple. You’ll be spitting out A+ papers in a mere hour while your peers spend unnecessary time wrestling with the mechanics of Word and painfully rearranging text. And better yet, your essay will ALWAYS look better and with less effort.</p>
      <h1 id="conclusion">Conclusion</h1>
      <p>If your occupation or hobbies rely on writing beautiful-looking text (especially a resume), getting an OverLeaf account will make you regret ever using Word.</p>
		</div>
		<hr>
			<?php 
			   $_SESSION['article'] = 'vim-latex';
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