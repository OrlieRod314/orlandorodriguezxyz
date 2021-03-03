<!DOCTYPE html>
<html  lang="en-US">
<head>
<link rel="stylesheet" href="../css/style.css">
<link rel="icon"
		      href="../favicon.ico"
		      type="image/x-icon">
<title>Cicada 3301 - The Holy Grail</title>
</head>
<body  onload="showComments()">
	<?php
        require_once '../chunks/DatabaseAdaptor.php';
        session_start(); 
	    include '../chunks/sidebar.php';
	?>
	<header id="top">
		<h1>Cicada 3301 - The Holy Grail</h1>
	</header>
	<article>
		<div id="page-metadata">
			<p>
						<span id="page-description">
				<p>Part of a series on Cicada 3301.</p>
			</span><br>
						<span id="page-authors">
							<span><em>Orlando Rodriguez</em></span>
						</span><br>
			<span id="page-metadata-block">
								<span id="page-date-range"><em>Aug 29, 2020</em></span>
												<span id="page-status"><em>Complete</em></span>
												<span id="page-importance"><em>5</em></span>
							</span><br>
			</p>	
		</div>
				<div id="TOC">
			<ul>
   <li><a href="#chan">4chan</a></li>
   <li><a href="#initial-image">Initial Image</a>
   <ul>
   <li><a href="#aside-jpeg-and-steganography">Aside: JPEG and Steganography</a></li>
   <li><a href="#outguessing-the-duck">Outguessing the Duck</a></li>
   </ul></li>
   <li><a href="#the-subreddit">The Subreddit</a>
   <ul>
   <li><a href="#aside-pgp-explained">Aside: PGP Explained</a></li>
   </ul></li>
   <li><a href="#the-numbers">The Numbers</a></li>
   <li><a href="#the-site">The Site</a>
   <ul>
   <li><a href="#aside-tor">Aside: TOR</a></li>
   </ul></li>
   <li><a href="#conclusion">Conclusion</a></li>
   </ul>
		</div>
				<div id="main">
						<div class="abstract">
			<blockquote>
			<p>
				<p>In this article, I describe the process of solving the first part of the 2012 Cicada puzzle.</p>	
			</p>
			</blockquote>
			</div>
						<p>Regarded as “the most elaborate and mysterious puzzle of the internet age”, CICADA 3301 is a mysterious organization that attempted to recruit codebreakers starting in 2012. I have included the puzzle-solving process, and provided my own speculation on the purpose/meaning behind the organization.</p>
      <h1 id="chan">4chan</h1>
      <p><a href="https://www.4chan.org/">4chan</a> is an anonymous imageboard site originally created as an english equivalent to the <a href="https://www.2chan.net/">Futaba Channel</a>. Users can post images with captions in a specific topic board. There is no registration on the site and users can post anonymously, often referring to each other as anon. Since its inception in 2003, 4chan has gained notoriety and fame for the audience it has attracted as well as the actions of said audience.</p>
      <p>Regardless of what you think of 4chan, from the perspective of 3301 the site can be seen as a good compromise between the obscure and mainstream poles of the internet.</p>
      <h1 id="initial-image">Initial Image</h1>
      <p>The first puzzle was posted January 4, 2012 on 4chan’s /x/ (Paranormal) board.</p>
      <div class="pic-container">
      	<img src="../img/cicada/cicada-3301-invitation-original.jpg" alt="Original Cicada version">
      	<div class="pic-title">
      		<p>The beginning</p>
      	</div>
      </div>
      <p>Upon running the image through a text-editor such as notepad, a message is revealed. Anyone with basic cryptology knowledge would know to run the message through a Caesar Cypher. Doing so will yield an <a href="https://imgur.com/m9sYK">imgur link</a>.</p>
      <p>The link leads to a .jpeg image of a decoy duck. Now, there’s a bit of wordplay going on in the image. And the next step relies on some knowledge about image color and steganography.</p>
      <div class="pic-container">
      	<img src="../img/cicada/cicada-outguess-hint.jpg" alt="duck">
      	<div class="pic-title">
      		<p>Cool Decoy Duck</p>
      	</div>
      </div>
      <h2 id="aside-jpeg-and-steganography">Aside: JPEG and Steganography</h2>
      <p>JPEG files are quite interesting. JPEG is in fact a lossy compression method for images. As in, you are not guaranteed to get the same image out as you put in. This may sound disadvantageous for now, but keep in mind that people notice changes in lumosity better than in color.</p>
      <p>Most people stick to the JFIF subset of the JPEG standard which converts color spaces (organizations of colors such as RGB or CMYK) to the YCbCr color space. The Y component is the luminance or grayscale of the image, and CbCr are the chrominance components which denote the blue and red of the image respectively. In the compression process, the YCbCr conversion is lossless at first, and holds the same data as an input RGB file. However, now the luminance and chrominance are conveniently separated and we can capitalize on our eye’s ineptitude for color. The average person won’t really notice if you were to downsample the color of an image by a factor of 2 in each direction. So, you could potentially have 4 Y pixels for every CbCr pixel.</p>
      <div class="pic-container">
      	<img src="../img/cicada/YCbCr.gif" alt="Visualization of YCbCr color space">
      	<div class="pic-title">
      		<p>Visualization of YCbCr color space</p>
      	</div>
      </div>
      <p>So at this point you’ve converted from RGB to YCbCr, and done whatever downsampling you want. The data is then passed to the Discrete <a href="https://en.wikipedia.org/wiki/Discrete_cosine_transform">Cosine Transform</a> which basically interprets the data as cosine waves and then averages them out to conserve the main gist of the image. I wish I could go into more detail, but I’m already off on a tangent.</p>
      <p>So at this point, we have a compressed an image. The cool thing about compression is that we can now hide cool useful information among the bits. This now ties into the concept of steganography, which in basic terms is the practice of hiding secret data in plain data. You could hide a pdf in an image or something like that. You can change the color values a bit when converting to JPEG and hide information in there.</p>
      <h2 id="outguessing-the-duck">Outguessing the Duck</h2>
      <p>So with that short aside over with, we can now plug in the image to outguess, a steganographic tool for Linux. Outguess looks through the blocks of data of the file and changes pixel values slightly to find patterns. The output file will contain a link to a subreddit.</p>
<pre>
Here is a book code.  To find the book, and more information, go to http://www.reddit.com/r/a2e7j6ic78h0j/

1:20, 2:3, 3:5, 4:20, 5:5, 6:53, 7:1, 8:8, 9:2, 10:4, 11:8, 12:4, 13:13, 14:4, 15:8, 16:4, 17:5, 18:14, 19:7, 20:31, 21:12, 22:36, 23:2, 24:3, 25:5, 26:65, 27:5, 28:1, 29:2, 30:18, 31:32, 32:10, 33:3, 34:25, 35:10, 36:7, 37:20, 38:10, 39:32, 40:4, 41:40, 42:11, 43:9, 44:13, 45:6, 46:3, 47:5, 48:43, 49:17, 50:13, 51:4, 52:2, 53:18, 54:4, 55:6, 56:4, 57:24, 58:64, 59:5, 60:37, 61:60, 62:12, 63:6, 64:8, 65:5, 66:18, 67:45, 68:10, 69:2, 70:17, 71:9, 72:20, 73:2, 74:34, 75:13, 76:21

Good luck.

3301
</pre>
      <h1 id="the-subreddit">The Subreddit</h1>
      <p>The subreddit is full of a bunch of posts containing scrambled titles and some weird symbols on top.</p>
      <p>The first important post is a picture of a Welcome mat. Nothing too special, but when we outguess it, we find a PGP signed message. This is important because it establishes a means of verifying the authenticity of the puzzles.</p>
<pre>
-----BEGIN PGP SIGNED MESSAGE-----
Hash: SHA1

- From here on out, we will cryptographically sign all messages with this key.

It is available on the mit keyservers.  Key ID 7A35090F, as posted in a2e7j6ic78h0j.

Patience is a virtue.

Good luck.

3301
-----BEGIN PGP SIGNATURE-----
Version: GnuPG v1.4.11 (GNU/Linux)

iQIcBAEBAgAGBQJPBRz7AAoJEBgfAeV6NQkP1UIQALFcO8DyZkecTK5pAIcGez7k
ewjGBoCfjfO2NlRROuQm5CteXiH3Te5G+5ebsdRmGWVcah8QzN4UjxpKcTQRPB9e
/ehVI5BiBJq8GlOnaSRZpzsYobwKH6Jy6haAr3kPFK1lOXXyHSiNnQbydGw9BFRI
fSr//DY86BUILE8sGJR6FA8Vzjiifcv6mmXkk3ICrT8z0qY7m/wFOYjgiSohvYpg
x5biG6TBwxfmXQOaITdO5rO8+4mtLnP//qN7E9zjTYj4Z4gBhdf6hPSuOqjh1s+6
/C6IehRChpx8gwpdhIlNf1coz/ZiggPiqdj75Tyqg88lEr66fVVB2d7PGObSyYSp
HJl8llrt8Gnk1UaZUS6/eCjnBniV/BLfZPVD2VFKH2Vvvty8sL+S8hCxsuLCjydh
skpshcjMVV9xPIEYzwSEaqBq0ZMdNFEPxJzC0XISlWSfxROm85r3NYvbrx9lwVbP
mUpLKFn8ZcMbf7UX18frgOtujmqqUvDQ2dQhmCUywPdtsKHFLc1xIqdrnRWUS3CD
eejUzGYDB5lSflujTjLPgGvtlCBW5ap00cfIHUZPOzmJWoEzgFgdNc9iIkcUUlke
e2WbYwCCuwSlLsdQRMA//PJN+a1h2ZMSzzMbZsr/YXQDUWvEaYI8MckmXEkZmDoA
RL0xkbHEFVGBmoMPVzeC
=fRcg
-----END PGP SIGNATURE-----
</pre>
      <p>There was also another picture which was of King Arthur. And it came with another message.</p>
<pre>
-----BEGIN PGP SIGNED MESSAGE-----
Hash: SHA1

The key has always been right in front of your eyes.

This isn't the quest for the Holy Grail.  Stop making 
it more difficult than it is. 

Good luck.

3301
-----BEGIN PGP SIGNATURE-----
Version: GnuPG v1.4.11 (GNU/Linux)

iQIcBAEBAgAGBQJPCBl3AAoJEBgfAeV6NQkPo6EQAKghp7ZKYxmsYM96iNQu5GZV
fbjUHsEL164ZLctGkgZx2H1HyYFEc6FGvcfzqs43vV/IzN4mK0SMy2qFPfjuG2JJ
tv3x2QfHMM3M2+dwX30bUD12UorMZNrLo8HjTpanYD9hL8WglbSIBJhnLE5CPlUS
BZRSx0yh1U+wbnlTQBxQI0xLkPIz+xCMBwSKl5BaCb006z43/HJt7NwynqWXJmVV
KScmkpFC3ISEBcYKhHHWv1IPQnFqMdW4dExXdRqWuwCshXpGXwDoOXfKVp5NW7Ix
9kCyfC7XC4iWXymGgd+/h4ccFFVm+WWOczOq/zeME+0vJhJqvj+fN2MZtvckpZbc
CMfLjn1z4w4d7mkbEpVjgVIU8/+KClNFPSf4asqjBKdrcCEMAl80vZorElG6OVIH
aLV4XwqiSu0LEF1ESCqbxkEmqp7U7CHl2VW6qv0h0Gxy+/UT0W1NoLJTzLBFiOzy
QIqqpgVg0dAFs74SlIf3oUTxt6IUpQX5+uo8kszMHTJQRP7K22/A3cc/VS/2Ydg4
o6OfN54Wcq+8IMZxEx+vxtmRJCUROVpHTTQ5unmyG9zQATxn8byD9Us070FAg6/v
jGjo1VVUxn6HX9HKxdx4wYGMP5grmD8k4jQdF1Z7GtbcqzDsxP65XCaOYmray1Jy
FG5OlgFyOflmjBXHsNad
=SqLP
-----END PGP SIGNATURE-----
</pre>
      <h2 id="aside-pgp-explained">Aside: PGP Explained</h2>
      <p>PGP encryption is pretty cool. It stands for Pretty Good Privacy, don’t let the name discourage you however, as it’s more than enough to keep your information secure.</p>
      <p>In order to use PGP, you must first generate a Public Key and Secret Key pair. You encrypt the message using the recipient’s public key and they decrypt it using their private key. This way, you can make sure that the message will only be read by its intended recipient. Although this lacks <a href="https://en.wikipedia.org/wiki/Forward_secrecy">Forward Secrecy</a>, it doesn’t really matter because the point of the message is to be read by the public and verified.</p>
      <p>The catch here is that Cicada signed their messages with their private key. Only the holder of the private key can write a message with that signature. The signature can be verified with the public key of the sender to make sure that their private and public key match, proving that they are who they claim to be.</p>
      <p>Cicada stated that from that step onwards, every message would be signed with their key and that it was up to the puzzle solvers to verify each message to make sure they weren’t being trolled. If you’re currently trying to solve Cicada and aren’t using PGP, you’re most likely being trolled.</p>
      <h1 id="the-numbers">The Numbers</h1>
      <p>The weird symbols at the top of the Reddit page are in fact Mayan numerals, and they can be translated. The resulting string of integers can be applied to the post titles on the same page by shifting the letters in reverse order. The titles combine to form a part of The <a href="https://en.wikipedia.org/wiki/Mabinogion">Mabinogian</a>, specifically <a href="https://sacred-texts.com/neu/celt/mab/mab05.htm">The Lady of the Fountain</a>. Looking back at the file obtained after outguessing the duck, you’ll see a series of numbers separated by colons. This is a book cipher.</p>
      <p>Mayan Numerals:</p>
<pre>
10, 2, 14, 7, 19, 6, 18, 12, 7, 8, 17, 0, 19, 7, 14, 18, 14, 19, 13, 0, 1, 2, 0
</pre>
      <p>If you look at the corresponding lines and letters (1:20 being the 20th character of the 1st line), you will see a message.</p>
<pre>
Call us at us tele phone numBer two one four three nine oh nine six oh eight
</pre>
      <p>Calling it would give you an automated voice message. The number is now deactivated.</p>
<pre>
Very good. You have done well. There are three prime numbers associated with the original final.jpg image. 
3301 is one of them. You will have to find the other two. 
Multiply all three of these numbers together and add a .com to find the next step. 
Good luck. Goodbye.
</pre>
      <p>The first Cicada image was <code>509x503</code> which are prime numbers. Multiplying it by <code>3301</code> would yield <code>845145127</code>, so <code>http://845145127.com</code> (which does not exist anymore).</p>
      <h1 id="the-site">The Site</h1>
      <p>The site had an image of a cicada. Using outguess on it would produce a message.</p>
<pre>
-----BEGIN PGP SIGNED MESSAGE-----
Hash: SHA1
 
You have done well to come this far.
 
Patience is a virtue.
 
Check back at 17:00 on Monday, 9 January 2012 UTC.
 
3301
-----BEGIN PGP SIGNATURE-----
Version: GnuPG v1.4.11 (GNU/Linux)
 
iQIcBAEBAgAGBQJPCKDUAAoJEBgfAeV6NQkPf9kP/19tbTFEy+ol/vaSJ97A549+
E713DyFAuxJMh2AY2y5ksiqDRJdACBdvVNJqlaKHKTfihiYW75VHb+RuAbMhM2nN
C78eh+xd6c4UCwpQ9vSU4i1Jzn6+T74pMKkhyssaHhQWfPs8K7eKQxOJzSjpDFCS
FG7oHx6doPEk/xgLaJRCt/IJjNCZ9l2kYinmOm7c0QdRqJ+VbV7Px41tP1dITQIH
/+JnETExUzWbE9fMf/eJl/zACF+gYii7d9ZdU8RHGi14jA2pRjc7SQArwqJOIyKQ
IFrW7zuicCYYT/GDmVSyILM03VXkNyAMBhG90edm17sxliyS0pA06MeOCjhDGUIw
QzBwsSZQJUsMJcXEUOpHPWrduP/zN5qHp/uUNNGj3vxLrnB+wcjhF8ZOiDF6zk7+
ZVkdjk8dAYQr62EsEpfxMT2dv5bJ0YBaQGZHyjTEYnkiukZiDfExQZM2/uqhYOj3
yK0J+kJNt7QvZQM2enMV7jbaLTfU3VZGqJ6TSPqsfeiuGyxtlGLgJvd6kmiZkBB8
Jj0Rgx/h9Tc4m9xnVQanaPqbGQN4vZF3kOp/jAN5YjsRfCDb7iGvuEcFh4oRgpaB
3D2/+Qo9i3+CdAq1LMeM4WgCcYj2K5mtL0QhpNoeJ/s0KzwnXA+mxBKoZ0S8dUX/
ZXCkbOLoMWCUfqBn8QkQ
=zn1y
-----END PGP SIGNATURE-----
</pre>
      <p>After waiting, using outguess on the image again turned yielded coordinates. There were Cicada posters all around the world. This is kind of alarming because this meant that Cicada was more than just some lone nerd in their basement. This was a coordinated effort by an organization with a global presence. They also must be at least minimally devoted to be willing to carry out the operation. So, they must have something to gain out of suddenly recruiting people.</p>
<pre>
52.216802, 21.018334
48.85057059876962, 2.406892329454422
48.85030144151387,2.407538741827011
47.664196,  -122.313301
47.637520, -122.346277
47.622993, -122.312576
37.5196666666667, 126.995
33.966808, -117.650488
29.909098706850486 -89.99312818050384
25.684702, -80.441289
21.584069, -158.104211
-33.90281, 151.18421
36.0665472222222, -94.1726416666667
37.577070, 126.813122
</pre>
      <p>Scanning the QR codes on the posters would bring two messages.</p>
<pre>
-----BEGIN PGP SIGNED MESSAGE-----
Hash: SHA1
 
In twenty-nine volumes, knowledge was once contained.
How many lines of the code remained when the Mabinogion paused?
Go that far in from the beginning and find my first name.
 
1:29
6:46
the product of the first two primes
2:37
14:41
17:3
27:40
the first prime
2:33
1:1
7:45
17:29
21:31
12:17
the product of the first two primes
22:42
15:18
24:33
27:46
12:29
25:66
7:47
 
You've shared too much to this point.  We want the best,  
not the followers.  Thus, the first few there will receive
the prize.
 
Good luck.
 
3301
-----BEGIN PGP SIGNATURE-----
Version: GnuPG v1.4.11 (GNU/Linux)
 
iQIcBAEBAgAGBQJPB1luAAoJEBgfAeV6NQkP9oAP+gLu+FsRDf3aRcJtBkCOU2MX
r/dagOTvCKWtuV+fedy0enWUZ+CbUjXOr98m9eq2z4iEGqKd3/MBXa+DM9f6YGUE
jPum4wHtQDSJlZMazuYqJOVZGw5XmF25+9mRM6fe3H9RCiNDZpuXl3MzwdivYhcG
B5hW14PcdHHteQf3eAUz+p+s06RDs+q1sNGa/rMQIx9QRe71EJwLMMkMfs81kfJC
tCt21+8ud0Xup4tjUBwul7QCcH9bqKG7cnR1XWsDgdFP6a4x9Jl2/IUvp1cfeT7B
YLS9W3lCM8thMemJr+ztQPZrpDlaLIitAT2L0B3f/k4co89v5X2I/toY8Z3Cdvoi
hk0AdWzMy/XLDgkPnpEef/aFmnls53mqqe9xKAUQPMrI73hiJ+5UZWuJdzCpvt+F
BjfQk15EJoUUW16K2+mBA1cSd+HJlnkslUTsjkq0E36XKChP+Cvbu/p6DLUMM2Xl
+n3iospCkkHR9QDcHzE4Rxg9A435yHqqJ/sL2MXG/CY8X4ec6U0/+UCIF9spuv8Y
7w66D05pI2u9M/081L7Br0i0Mpdf9fDblO/6GksskccaPkMQ3MRtsL+p9o6Dnbir
6Z2wH2Kw1Bf0Gfx4VcpHBikoWJ5blCc6tfvT+qXjVOZjWAL7DvReavSEmW1/fubN
C3RWcjeI4QET2oKmV2NK
=LWeJ
-----END PGP SIGNATURE-----
</pre>
      <p>and</p>
<pre>
-----BEGIN PGP SIGNED MESSAGE-----
Hash: SHA1
 
A poem of fading death, named for a king
Meant to be read only once and vanish
Alas, it could not remain unseen.
 
1:5
152:24
the product of the first two primes
14:13
7:36
12:10
7:16
24:3
271:22
10:7
13:28
12:7
86:17
93:14
the product of the first two primes
16:7
96:4
19:13
47:2
71:22
75:9
77:4
 
You've shared too much to this point.  We want the best,  
not the followers.  Thus, the first few there will receive
the prize.
 
Good luck.
 
3301
-----BEGIN PGP SIGNATURE-----
Version: GnuPG v1.4.11 (GNU/Linux)
 
iQIcBAEBAgAGBQJPB/nmAAoJEBgfAeV6NQkPEnEQAKl5qtb3ZE5vs+c08KuzAi4a
tQEE71fvb65KQcX+PP5nHKGoLd0sQrZJw1c4VpMEgg9V27LSFQQ+3jSSyan7aIIg
SDqhmuAcliKwf5ELvHM3TQdyNb/OnL3R6UvavhfqdQwBXCDC9F0lwrPBu52MJqkA
ns93Q3zxec7kTrwKE6Gs3TDzjlu39YklwqzYcUSEusVzD07OVzhIEimsOVY+mW/C
X87vgXSlkQ69uN1XAZYp2ps8zl4LxoaBl5aVtIOA+T8ap439tTBToov19nOerusB
6VHS192m5NotfQLnuVT4EITfloTWYD6X7RfqspGt1ftb1q6Ub8Wt6qCIo6eqb9xm
q2uVzbRWu05b0izAXkHuqkHWV3vwuSfK7cZQryYA7pUnakhlpCHo3sjIkh1FPfDc
xRjWfnou7TevkmDqkfSxwHwP5IKo3r5KB87c7i0/tOPuQTqWRwCwcWOWMNOS7ivY
KQkoEYNmqD2Yz3Esymjt46M3rAuazxk/gGYUmgHImgcu1zzK7Aq/IozXI7EFdNdu
3EoRJ/UL9Y0l0/PJOG5urdeeTyE0b8bwgfC2Nk/c8ebaTkFbOnzXdAvKHB03KEeU
PtM6d6DngL/LnUPFhmSW7K0REMKv62h9KyP/sw5QHTNh7Pz+C63OO3BsFw+ZBdXL
hGqP6XptyZBsKvz2TLoX
=aXFt
-----END PGP SIGNATURE-----
</pre>
      <p>These were book descriptions with book codes. They also warned about collaboration, which is reasonable. After all, would you want a bunch of freeloaders joining your group? If it were up to me, I would have narrowed it down a lot more in the beginning, but at the same time, it would not have received as much notoriety as it did. Any attention is good attention.</p>
      <p>The first code leads to <a href="https://www.gutenberg.org/files/31447/31447.txt">Encyclopedia Britannica, 11th Edition, Volume 6, Slice 3 “Chitral” to “Cincinnati”</a>. It revealed that the name of the organization was Cicada.</p>
      <p>The second code led to <a href="https://en.wikipedia.org/wiki/Agrippa_(A_Book_of_the_Dead)">Agrippa (A Book of the Dead)</a>. Applying the book code resulted in the following onion link:</p>
<pre>
sq6wmgv2zcsrix6t.onion
</pre>
      <p>The following message was displayed:</p>
<pre>
Congratulations!

Please create a new email address with a public, free web-based service. Once you've never used before, and enter it below. We recommend you do this while still using tor, for anonymity.

We will email you a number within the next few days (in the order in which you arrived at this page). Once you've recieved it, come back to this page and append a slash and then the number you recieved to this url. (For example, if you recieved "3894894230934209", then you would go to "[http:// http://sq6wmgv2zcsrix6t.onion/3894894230934209]")

3301
</pre>
      <h2 id="aside-tor">Aside: TOR</h2>
      <p>Tor is a common way of accessing the dark web, which is the part of the internet that is not included in search results. You can only access .onion links with Tor and so you have to get it. Don’t worry, you’re not going to get arrested or added to some watchlist unless you actually do shady things. Journalists and people in the Middle East use it all the time so you should have no problem with your local authorities unless you live in some backwards country.</p>
      <h1 id="conclusion">Conclusion</h1>
      <p>This is the end of the publicly available part of the 2012 puzzle. At this point, the chronicle diverges down two paths. First, there are the people that received an email as promised in the message, and it follows their own private accounts of what happened. The other path is a result of an email leak.</p>
      <p>I will continue this series down the first path, which is the most interesting and documented one.</p>
		</div>
		<hr>
			<?php 
			   $_SESSION['article'] = 'cicada';
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