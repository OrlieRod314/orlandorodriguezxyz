<!DOCTYPE html>
<html  lang="en-US">
<head>
<link rel="stylesheet" href="../css/style.css">
<link rel="icon"
		      href="../favicon.ico"
		      type="image/x-icon">
<title>Hacking Resources for NCL</title>
</head>
<body onload="showComments()">
	<?php
        require_once '../chunks/DatabaseAdaptor.php';
        session_start(); 
	    include '../chunks/sidebar.php';
	?>
	<header id="top">
		<h1>Hacking Resources for NCL</h1>
	</header>
	<article>
		<div id="page-metadata">
			<p>
						<span id="page-description">
				<p>Bryan Bielawa and I are good friends and are involved in the <a href="https://cybercats.io/">U of A Cybercats</a>. We wrote this article to compile all the resources we found useful.</p>
			</span><br>
						<span id="page-authors">
							<span><em>Orlando Rodriguez</em></span>
							<span><em>Bryan Bielawa</em></span>
						</span><br>
			<span id="page-metadata-block">
								<span id="page-date-range"><em>Dec 22, 2020</em></span>
												<span id="page-status"><em>WIP</em></span>
												<span id="page-importance"><em>5/10</em></span>
							</span><br>
			</p>	
		</div>
				<div id="TOC">
			<ul>
   <li><a href="#geographic-location-tools">Geographic Location Tools</a></li>
   <li><a href="#password-cracking">Password Cracking</a>
   <ul>
   <li><a href="#ciphers">Ciphers</a></li>
   <li><a href="#online-hashing">Online Hashing</a></li>
   <li><a href="#offline-hashing">Offline Hashing</a></li>
   </ul></li>
   <li><a href="#steganography">Steganography</a>
   <ul>
   <li><a href="#online-steg-tools">Online Steg Tools</a></li>
   </ul></li>
   <li><a href="#qr-code-tools">QR Code Tools</a></li>
   </ul>
		</div>
				<div id="main">
						<div class="abstract">
			<blockquote>
			<p>
				<p>You’ll find plenty of resources for cryptography and steganography. These were compiled during the 2020 <a href="https://nationalcyberleague.org/">NCL</a> season and will continue to be updated as we participate more in the program. We’ve also included some usage guides, although you should reference the original materials for further reading.</p>	
			</p>
			</blockquote>
			</div>
						<p>The categories are broken down by problem type, and then there are different groups for online and offline tools. We only added tools that helped us solve the problems, so we probably went through several dozens and kept only the useful ones.</p>
      <p>If you would like to contribute resources to the list, please feel free to do so by contacting me at <a href="mailto:orlandorodriguezosr@protonmail.ch" class="email">orlandorodriguezosr@protonmail.ch</a>.</p>
      <h1 id="geographic-location-tools">Geographic Location Tools</h1>
      <ul>
      <li><a href="http://geo.javawa.nl/coordcalc/index_en.html">Geo Javawa</a></li>
      </ul>
      <h1 id="password-cracking">Password Cracking</h1>
      <h2 id="ciphers">Ciphers</h2>
      <ul>
      <li><a href="https://www.dcode.fr/en">dcode.fr</a></li>
      <li><a href="https://www.dcode.fr/tools-list#cryptography">dcode.fr Cryptography Tools</a></li>
      <li><a href="https://www.dcode.fr/frequency-analysis">Frequency Analysis</a></li>
      <li><a href="https://www.dcode.fr/enigma-machine-cipher">Enigma Machine</a></li>
      <li><a href="https://www.dcode.fr/caesar-cipher">Caesar Cipher</a></li>
      <li><a href="https://www.dcode.fr/vigenere-cipher">Vigenere Cipher</a></li>
      <li><a href="https://www.dcode.fr/rail-fence-cipher">Rail Fence Cipher</a></li>
      </ul>
      <h2 id="online-hashing">Online Hashing</h2>
      <ul>
      <li><a href="https://hashes.com/en/decrypt/hash">MD5, SHA1, MySQL, NTLM, SHA256, SHA512</a></li>
      </ul>
      <h2 id="offline-hashing">Offline Hashing</h2>
      <ul>
      <li><a href="https://hashcat.net/hashcat/">hashcat</a></li>
      <li><a href="https://hashcat.net/wiki/">hashcat Wiki</a></li>
      <li><a href="https://ophcrack.sourceforge.io/">ophcrack</a></li>
      </ul>
      <p>Some of the commands may look like this:</p>
      
      <pre>
hashcat.exe -m 0 -a 3 hashes.txt "SKY-HQNT-?d?d?d?d"
hashcat.exe -m 0 -a 0 hashes.txt pokemon-list-en.txt -O
hashcat.exe -a 6 Passwords.txt "?d?d" hashes.txt
Use flag --show to display passwords at end of command</pre>
      <h1 id="steganography">Steganography</h1>
      <h2 id="online-steg-tools">Online Steg Tools</h2>
      <ul>
      <li><a href="https://stylesuxx.github.io/steganography/">Steganography Online</a></li>
      <li><a href="http://fotoforensics.com/">FotoForensics</a></li>
      </ul>
      <h1 id="qr-code-tools">QR Code Tools</h1>
      <ul>
      <li><a href="https://zxing.org/w/decode.jspx">ZXing Decoder Online</a></li>
      </ul>
		</div>
		<hr>
			<?php 
			   $_SESSION['article'] = 'hacking-resources-ncl';
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