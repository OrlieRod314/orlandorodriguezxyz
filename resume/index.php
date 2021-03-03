<!DOCTYPE html>
<html  lang="en-US">
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="icon"
		      href="favicon.ico"
		      type="image/x-icon">
<title>Orlando's Resume</title>
</head>
<body>
	<?php
	    include 'chunks/sidebar.php';
	?>
	<header id="top">
		<h1>My Resume</h1>
	</header>
	<article>
		<div id="page-metadata">
			<p>
						<span id="page-description">
				<p>Here is a resume I made using LaTeX, which I use in job applications all the time.</p>
			</span><br>
						<span id="page-authors">
							<span><em>Orlando Rodriguez</em></span>
						</span><br>
			<span id="page-metadata-block">
								<span id="page-date-range"><em>Feb 26, 2021</em></span>
												<span id="page-status"><em>Complete</em></span>
												<span id="page-importance"><em>10/10</em></span>
							</span><br>
			</p>	
		</div>
				<div id="TOC">
			<ul>
   <li><a href="#my-resume">My Resume</a>
   <ul>
   <li><a href="#source-code">Source Code</a></li>
   </ul></li>
   <li><a href="#successful-resumes">Successful Resumes</a>
   <ul>
   <li><a href="#content">Content</a></li>
   <li><a href="#design">Design</a></li>
   <li><a href="#ordering">Ordering</a></li>
   </ul></li>
   </ul>
		</div>
				<div id="main">
						<div class="abstract">
			<blockquote>
			<p>
				<p>Making a resume is tough. On one hand, you want to market yourself to a potential employer. On the other hand, you can’t exaggerate too much without getting caught and rejected. You want to include details that interest the reader without confusing or overwhelming them to the point where they throw your application away. And God forbid you leak a few grammatical errors and come off as uneducated or lazy. And that’s just the content aspect of your resume. It’s equally - if not more - important to present the information in a format that is well-organized and has a logical flow.</p>	
			</p>
			</blockquote>
			</div>
						<p>I made my first serious resume when taking some Blue Chip class in freshman year of college. At first, I was told to stray away from templates, because they were overly generic. I was also told to be original with my design. So, naturally I spent an entire afternoon in Microsoft Word painstakingly making tables to sort my information, and then making them invisible so it wouldn’t look like a 9x11in checkerboard. In the end, I was left with a mediocre-looking resume that fortunately “made excellent use of whitespace”, yet vaguely “needed some work”.</p>
      <p>I decided to distance myself from the academic revisions of my resume, and focus on examples of successful resumes. What resulted was a resume made in LaTeX, using boxes and fancy typesetting.</p>
      <h1 id="my-resume">My Resume</h1>
      <p>For those who are just here for my resume and not my ramblings about design:</p>
      <iframe src="docs/resume.pdf" width="100%" height="1200"></iframe>
      <h2 id="source-code">Source Code</h2>
      <p>The <a href="docs/resume.tex">source code</a> will be updated regularly.</p>
      <h1 id="successful-resumes">Successful Resumes</h1>
      <p>The two broad factors that you are responsible for when making a resume are <em>content</em> and <em>design</em>.</p>
      <h2 id="content">Content</h2>
      <p>You obviously want to put your name, email, phone, and personal site. That should be a no-brainer. But what about other equally relevant information like school, majors, and certifications? You don’t want to waste your time (or the recruitor’s) writing out sentences upon sentences about where you studied and what you did.</p>
      <p>I noticed that successful resumes made a clear distinction between <em>facts</em> and <em>descriptions</em>. In other words, little generic facts like where you went to college, or little accomplishments should go in neatly organized sections. For example, my resume just has a section labelled <strong>Education</strong> with my school, majors, and GPA. They’re not written out like full sentences, they are just labelled pieces of information. Things that aren’t meant to be overanalyzed should be written in a clear and non-verbose manner.</p>
      <p>But a resume is more than just facts about yourself presented in neat lists. You also need to talk about <em>why</em> you’re a good match. Although your entire resume is an argument for why you should work there, this is especially true for the experience section. The section actually requires analysis on behalf of the reader. So you want to make sure that you give them a light cognitive workload. You also want to make sure that there’s as much meaning packed into every single word as possible.</p>
      <p>For the experience section, you’ll want to chunk relevant entries so that they’re apart from each other, list face-value details like title and timeframe, and write short sentences about what you did. In my resume, the entire left side was dedicated to experience. And each entry was clearly marked and separate from every other. This goes a long way in providing the reader with easily digestible pieces of information instead of just dumping everything on them.</p>
      <h2 id="design">Design</h2>
      <p>There were two common design patterns that people followed when formatting their content. The first approach was to follow a top-down structure, in which everything is just listed from top to bottom. It’s a linear structure allowing for one simple reading experience. This is the traditional approach. There’s nothing wrong with it provided that there is proper variation in text weight and style for labelling, and proper usage of vertical whitespace and tables if applicable.</p>
      <iframe src="docs/resume-old.pdf" width="100%" height="1200"></iframe>
      <p>This is my example of a linear style resume.</p>
      <p>The other method is to make a resume using boxes or some sort of graphics. I think it helps things look a bit more appealing. It's also good for chunking information. That's what I did with my current one.</p>
      <h2 id="ordering">Ordering</h2>
      <p>Another thing I noticed was that people prefer to have large bodies of text on the left, and images on the right. When making my current resume, I initially had the blocks of reference information on the left, and the large experience section on the right. It was <em>instinctually right</em> for me, it felt totally natural. But my friends complained that there was something <em>disruptive</em> about the layout. I was frustrated, and just tried shifting the information around, and then the feedback immediately changed.</p>
      <p>My theory is that since Western countries prefer to read left to right, we instinctually want to start at the upper left, but seeing a bunch of blocks on the left immediately disrupts our reading flow. </p>
		</div>
	</article>
</body>
</html>
<?php
?>