---
title: Cicada 3301- The Holy Grail
lang: en-US
author:
	- Orlando Rodriguez
date: 08/29/2020
meta: |
    Regarded as "the most elaborate and mysterious puzzle of the internet age", *CICADA 3301* is a mysterious organization that attempted to recruit codebreakers starting in 2012. I have included the puzzle-solving process, and provided my own speculation on the purpose/meaning behind the organization.

    Part of a series on Cicada 3301. 
notes: |
    If you haven't been able to tell, the central theme of this whole mystery is [The Matter of Britain](https://en.wikipedia.org/wiki/Matter_of_Britain) with all the references to Arthurian legend and the Mabigonian.	
---

## 4chan

[4chan](www.4chan.org) is an anonymous imageboard site originally created as an english equivalent to the [Futaba Channel](www.2chan.net). Users can post images with captions in a specific topic board. There is no registration on the site and users can post anonymously, often referring to each other as *anon*. Since its inception in 2003, 4chan has gained notoriety and fame for the audience it has attracted as well as the actions of said audience. 

Regardless of what you think of 4chan, from the perspective of 3301 the site can be seen as a good compromise between the obscure and mainstream poles of the internet.

## Initial Image

The first puzzle was posted January 4, 2012 on 4chan's /x/ (Paranormal) board. 

Upon running the image through a text-editor such as notepad, a message is revealed. Anyone with basic cryptology knowledge would know to run the message through a Caesar Cypher. Doing so will yield an [imgur link](https://i.imgur.com/m9sYK.jpg). 

The link leads to a .jpeg image of a decoy duck. Now, there's a bit of wordplay going on in the image. And the next step relies on some knowledge about image color and steganography.

### Aside: JPEG and Steganography

JPEG files are quite interesting. JPEG is in fact a lossy compression method for images. As in, you are not guaranteed to get the same image out as you put in. This may sound disadvantageous for now, but keep in mind that people notice changes in lumosity better than in color.

Most people stick to the JFIF subset of the JPEG standard which converts color spaces (organizations of colors such as RGB or CMYK) to the YCbCr color space. The Y component is the luminance or grayscale of the image, and CbCr are the chrominance components which denote the blue and red of the image respectively. In the compression process, the YCbCr conversion is lossless at first, and holds the same data as an input RGB file. However, now the luminance and chrominance are conveniently separated and we can capitalize on our eye's ineptitude for color. The average person won't really notice if you were to downsample the color of an image by a factor of 2 in each direction. So, you could potentially have 4 Y pixels for every CbCr pixel.

So at this point you've converted from RGB to YCbCr, and done whatever downsampling you want. The data is then passed to the [Discrete Cosine Transform](https://en.wikipedia.org/wiki/Discrete_cosine_transform) which basically interprets the data as cosine waves and then averages them out to conserve the main gist of the image. I wish I could go into more detail, but I'm already off on a tangent. 

So at this point, we have a compressed an image. The cool thing about compression is that we can now hide cool useful information among the bits. This now ties into the concept of steganography, which in basic terms is the practice of hiding secret data in plain data. You could hide a pdf in an image or something like that. You can change the color values a bit when converting to JPEG and hide information in there. 

### Outguessing the Duck

So with that short aside over with, we can now plug in the image to outguess, a steganographic tool for Linux. Outguess looks through the blocks of data of the file and changes pixel values slightly to find patterns. The output file will contain a link to a subreddit. 


## The Subreddit

The subreddit is full of a bunch of posts containing scrambled titles and some weird symbols on top. 

The first important post is a picture of a Welcome mat. Nothing too special, but when we outguess it, we find a PGP signed message. This is important because it establishes a means of verifying the authenticity of the puzzles. 

There was also another picture which was of King Arthur. And it came with another message. 

### Aside: PGP Explained

PGP encryption is pretty cool. It stands for Pretty Good Privacy, don't let the name discourage you however, as it's more than enough to keep your information secure. 

In order to use PGP, you must first generate a Public Key and Secret Key pair. You encrypt the message using the recipient's public key and they decrypt it using their private key. This way, you can make sure that the message will only be read by its intended recipient. Although this lacks [Forward Secrecy](https://en.wikipedia.org/wiki/Forward_secrecy), it doesn't really matter because the point of the message is to be read by the public and verified.

The catch here is that Cicada signed their messages with their private key. Only the holder of the private key can write a message with that signature. The signature can be verified with the public key of the sender to make sure that their private and public key match, proving that they are who they claim to be. 

Cicada stated that from that step onwards, every message would be signed with their key and that it was up to the puzzle solvers to verify each message to make sure they weren't being trolled. If you're currently trying to solve Cicada and aren't using PGP, you're most likely being trolled. 

## The Numbers

The weird symbols at the top of the Reddit page are in fact Mayan numerals, and they can be translated. The resulting string of integers can be applied to the post titles on the same page by shifting the letters in reverse order. The titles combine to form a part of [The Mabinogian](https://en.wikipedia.org/wiki/Mabinogion), specifically [The Lady of the Fountain](https://sacred-texts.com/neu/celt/mab/mab05.htm). Looking back at the file obtained after outguessing the duck, you'll see a series of numbers separated by colons. This is a book cipher. 

If you look at the corresponding lines and letters (1:20 being the 20th character of the 1st line), you will see a message.

Calling it would give you an automated voice message. The number is now deactivated.

The first Cicada image was 509x503 which are prime numbers. Multiplying it by 3301 would yield 845145127, so http://845145127.com (which does not exist anymore). 

## The Site

The site had an image of a cicada. Using outguess on it would produce a message. 

After waiting, using outguess on the image again turned yielded coordinates. There were Cicada posters all around the world. This is kind of alarming because this meant that Cicada was more than just some lone nerd in their basement. This was a coordinated effort by an organization with a global presence. They also must be at least minimally devoted to be willing to carry out the operation. So, they must have something to gain out of suddenly recruiting people.  

Scanning the QR codes on the posters would bring two messages.

These were book descriptions with book codes. They also warned about collaboration, which is reasonable. After all, would you want a bunch of freeloaders joining your supposed group? if it were up to me, I would have narrowed it down a lot more in the beginning, but at the same time, it would not have received as much notoriety as it did. Any attention is good attention. 

The first code leads to [Encyclopedia Britannica, 11th Edition, Volume 6, Slice 3 "Chitral" to "Cincinnati"](https://www.gutenberg.org/files/31447/31447.txt). It revealed that the name of the organization was Cicada. 

The second code led to [Agrippa (A Book of the Dead)](https://en.wikipedia.org/wiki/Agrippa_(A_Book_of_the_Dead)). Applying the book code resulted in the following onion link. The following message was displayed:


### Aside: Tor

Tor is a common way of accessing the dark web, which is the part of the internet that is not included in search results. You can only access .onion links with Tor and so you have to get it. Don't worry, you're not going to get arrested or added to some watchlist unless you actually do shady things. Journalists and people in the Middle East use it all the time so you should have no problem with your local authorities unless you live in some backwards country. 

## Conclusion

This is the end of the publicly available part of the 2012 puzzle. At this point, the chronicle diverges down two paths. First, there are the people that received an email as promised in the message, and it follows their own private accounts of what happened. The other path is a result of an email leak.  

I will continue this series down the first path, which is the most interesting and documented one. 
