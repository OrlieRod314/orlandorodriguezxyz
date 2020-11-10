<!DOCTYPE html>
<html lang="en-US">
   <head>
      <link rel="stylesheet" href="/css/styles.css">
      <link rel="icon"
         href="/favicon.ico"
         type="image/x-icon">
      <meta name="author" content="Orlando Rodriguez" />
      <meta name="dcterms.date" content="2020-07-25" />
      <title>Why Linux?</title>
   </head>
   <body>
      <header>
         <h1 class="title">Why Linux?</h1>
      </header>
      <?php
         include "../src/navbar.php";
         ?>
      <div class="container info">
         <div class="container toc">
            <ul>
               <li><a href="#why-do-you-use-windows-or-mac-the-normie">Why Do You Use Windows or Mac? (The Normie)</a></li>
               <li>
                  <a href="#what-is-linux">What is Linux?</a>
                  <ul>
                     <li><a href="#foundation">Foundation</a></li>
                     <li><a href="#the-distro">The Distro</a></li>
                  </ul>
               </li>
               <li>
                  <a href="#key-features-of-linux">Key Features of Linux</a>
                  <ul>
                     <li><a href="#reliable">Reliable</a></li>
                     <li><a href="#free-and-open-source">Free and Open Source</a></li>
                     <li><a href="#commpatible-with-older-hardware">Commpatible With Older Hardware</a></li>
                     <li><a href="#good-software-management">Good Software Management</a></li>
                  </ul>
               </li>
               <li>
                  <a href="#why-you-are-reluctant-to-use-linux">Why You Are Reluctant to Use Linux</a>
                  <ul>
                     <li><a href="#too-hard-and-dont-have-time">“Too Hard” and “Don’t Have Time”</a></li>
                     <li><a href="#cant-play-video-games-or-use-adobe-software">“Can’t” Play Video Games or Use Adobe Software</a></li>
                     <li><a href="#crashes-all-the-time">“Crashes All the Time”</a></li>
                  </ul>
               </li>
               <li><a href="#instructions-for-getting-linux">Instructions for Getting Linux</a></li>
               <li><a href="#now-what">Now What?</a></li>
               <li><a href="#for-computer-scientists">For Computer Scientists</a></li>
            </ul>
         </div>
         <div class="container meta">
            <div class="post-date">
               July 25, 2020
            </div>
            <p>Here I explain the advantages of GNU/Linux over proprietary Operating Systems such as MacOS and Microsoft Windows. I discuss a variety of scenarios and contexts in which the true strengths of Linux shine.</p>
         </div>
      </div>
      </div>
      <div class="container main">
         <h2 id="why-do-you-use-windows-or-mac-the-normie">Why Do You Use Windows or Mac? (The Normie)</h2>
         <p>Within the context of this article, the word <em>normie</em> means a typical person who uses a computer for typical things. Typical things may include but are not limited to: Using Microsoft Office programs, browsing the web, and as of late using Zoom. The normie does not actually need to know how a computer works to do their job, and does not need to make use of the majority of their computer’s hardware and software resources.</p>
         <p>The normie enjoys using Windows and MacOS because that’s simply what they’ve used their whole lives. There’s something comforting and predictable about the Windows and Mac design. It looks pretty, and it’s very intuitive for the average user. You don’t need to know anything about how computers work, and you can just click away at whatever you want.</p>
         <p>There is nothing inherently wrong with using technology that makes you comfortable. But normies are often overpaying for what they really want. If you think about it, normies just use their PC to launch a browser and a handful of programs.</p>
         <p>Little do most of them know that Linux can offer them a comparable, if not better, user experience.</p>
         <h2 id="what-is-linux">What is Linux?</h2>
         <h3 id="foundation">Foundation</h3>
         <p><a href="https://en.wikipedia.org/wiki/Linux"><em>Linux</em></a> can actually mean a variety of things, but more commonly it means a family of <a href="https://en.wikipedia.org/wiki/Unix"><em>Unix</em></a>-like operating systems that are based on the <a href="https://en.wikipedia.org/wiki/Linux_kernel"><em>Linux kernel</em></a>. A kernel isn’t an OS. In fact, the kernel is basically the lowest-level software on a computer. It is part of the OS software that is always in memory. The kernel interacts with physical resources like the CPU, memory (RAM), and devices. Then, it interacts with the application demanding said resources.</p>
         <p>Linux actually became popular through <a href="https://en.wikipedia.org/wiki/GNU"><em>GNU</em></a>. GNU stands for <strong>GNU is Not Unix</strong>. This is because GNU is an OS that resembles Unix, yet has no actual Unix code. It is made of entirely open-source software, which means that anyone can see the code and know what it does (important later in the article). GNU had its own kernel called GNU Hurd, but some guy named <a href="https://en.wikipedia.org/wiki/Linus_Torvalds"><em>Linus Torvalds</em></a> made his own kernel. A powerful combination then emerged: The GNU OS coupled with the non-GNU Linux kernel. Now referred to as GNU/Linux.</p>
         <p>So, GNU is actually the OS, and Linux is just the kernel. But for the purpose of this article, we’ll refer to GNU/Linux (the more technical name) as Linux.</p>
         <h3 id="the-distro">The Distro</h3>
         <p>So, this is cool and all, but where can you get Linux?</p>
         <p>Well, there isn’t a widely used “Linux” OS, the whole point of Linux is that people are supposed to modify the base operating system to suit their own needs. This is where the concept of a distro comes up. Linux distros are based on the original GNU/Linux combination, often with considerable alterations to default packages to make them more suited to a specific task.</p>
         <p>Debian is a good example because so many distros have been based on it. Ubuntu is probably an OS you’ve heard of, and it’s based on Debian. It’s commonly used as a replacement for Windows and MacOS because it looks similar and is beginner-friendly. Kali Linux is also based on Debian, and I use it a lot for <strong>ethical</strong> hacking. So, you should pick a distro that’s right for your purposes and customize it to your own liking.</p>
         <h2 id="key-features-of-linux">Key Features of Linux</h2>
         <h3 id="reliable">Reliable</h3>
         <p>Most Linux distributions (especially server versions such as those for Debian) can be left running for a literal decade and never be rebooted. Try running Windows for more than a week and prepare to have an unwanted update.</p>
         <h3 id="free-and-open-source">Free and Open Source</h3>
         <p>So not only does it cost you literally nothing in terms of money, but it also doesn’t cost you any privacy or peace of mind. Windows is riddled with NSA backdoors, allowing them to have complete access to your files. Microsoft does not show anyone its code for the sake of being competitive and making sure “hackers can’t find vulnerabilities”.</p>
         <h3 id="commpatible-with-older-hardware">Commpatible With Older Hardware</h3>
         <p>Did you find an old Thinkpad T420 or X200 running Windows 7 in your garage? Well good luck trying to get Windows 10 to run smoothly on that. Most Linux distros can run smoothly on even 10-year-old hardware. It doesn’t take much to get them working.</p>
         <h3 id="good-software-management">Good Software Management</h3>
         <p>Linux distros have their own package managers. A package manager is basically a program management system that makes sure that dependencies are installed, and that programs aren’t duplicated. For the most part, you don’t have to go to a site and download some installer that demands administrator privilege to run. You can just type out (for Debian systems) <code>sudo apt install package-name</code>. Program management can be done in the terminal without bloated GUIs.</p>
         <h2 id="why-you-are-reluctant-to-use-linux">Why You Are Reluctant to Use Linux</h2>
         <h3 id="too-hard-and-dont-have-time">“Too Hard” and “Don’t Have Time”</h3>
         <p>Anyone I mention Linux to will inevitably mention the steep learning curve and how inconvenient it is to “learn a whole new Operating System”. Well, if that’s really your argument, just get Ubuntu. One of its strong points is that a normie can replace their OS with it and have the exact same user experience. The only difference is that you would have to install the open-source equivalents to their programs.</p>
         <p>Also, this other point applies to not normies, but people who plan on having a career in Comp Sci or anything that seriously involves programming and computers. Saying that you don’t have time to learn Linux is like saying that you’re a race car driver who doesn’t have time to learn stick shift. Sure, it’s possible to drift in AT, but MT is better. I expand on this in a later section.</p>
         <h3 id="cant-play-video-games-or-use-adobe-software">“Can’t” Play Video Games or Use Adobe Software</h3>
         <p>Some cool advancements have been made lately in Linux gaming. But in short, major titles such as GTAV can be run on Linux. This argument doesn’t really work because not only are many games supported on Linux, but many more will be especially as demand goes up.</p>
         <p>Honestly, I don’t know much about Linux gaming or gaming in general. So here’s a Linus Tech Tips <a href="https://www.youtube.com/watch?v=6T_-HMkgxt0">video</a> that explains some of it.</p>
         <p>However, I will admit that Linux is known for being incompatible with Adobe Software. However, there are free alternatives like GIMP.</p>
         <h3 id="crashes-all-the-time">“Crashes All the Time”</h3>
         <p>This doesn’t happen at all unless you’re utterly incompetent with computer usage or purposely exceed your computer’s capabilities.</p>
         <h2 id="instructions-for-getting-linux">Instructions for Getting Linux</h2>
         <p>Ok, so now that you’ve decided that you want to at least try out Linux, I would recommend starting out with either Ubuntu or Manjaro.</p>
         <ol type="1">
            <li>
               <p>You want to download an ISO of the latest release</p>
            </li>
            <li>
               <p>Flash it using BalenaEtcher or an alternative to a small USB stick</p>
            </li>
            <li>
               <p>Plug it in and reboot your computer while pressing the boot key (usually <code>F12</code>)</p>
            </li>
            <li>
               <p>Choose either an install or dual-boot option</p>
               <p><strong>WARNING</strong>: If you choose to install Linux on your computer without a dual-boot option, you <strong>WILL</strong> end up formatting your disk. In other words, you will lose <strong>everything</strong>. So, make sure to boot from a live CD or dual-boot if you want.</p>
            </li>
            <li>
               <p>Follow the installation instructions</p>
            </li>
            <li>
               <p>Enjoy</p>
            </li>
         </ol>
         <h2 id="now-what">Now What?</h2>
         <p>Well, now that you have a nice distro installed, you can do whatever the hell you want! Want to completely uninstall your desktop and have a tiling window manager? With enough hacking around, you can do that. You can change literally anything about your system.</p>
         <p>One thing I would recommend doing though, is learning how to use the terminal. The true strength of Linux is in the terminal. Look up some tutorials.</p>
         <h2 id="for-computer-scientists">For Computer Scientists</h2>
         <p>One of the main components of the Unix philosophy is “Do One Thing And Do It Well”. The basic programs in all Linux distributions share this philosophy, and they were made by developers for developers like you. There are some cool things you should know how to do:</p>
         <ul>
            <li>
               <p>navigate the filesystem and alter files</p>
               <p>Basic commands like <code>cd</code>, <code>ls</code>, <code>cp</code>, <code>mv</code>, <code>rm</code>.</p>
            </li>
            <li>
               <p>link programs together with pipes</p>
               <p>You can filter out really cool information and stuff by linking together a <code>grep</code> command with some regular expressions. This is so much better than having to write a Python script for renaming files or something.</p>
            </li>
            <li>
               <p>edit files without an IDE</p>
               <p>For most small script writing, an IDE is considered bloat. Learn how to use <code>vim</code> and <code>emacs</code>.</p>
               <p>When you first launch Vim, it will look super primitive, but rest assured that it will at least triple your workflow efficiency.</p>
            </li>
            <li>
               <p>remote editing</p>
               <p>Knowing how to <code>ssh</code> into a server and do work on another computer is a completely underrated skill.</p>
               <p>Need to submit an assignment but it’s on another computer? SSH has you covered.</p>
            </li>
            <li>
               <p>write shell scripts</p>
               <p>You can combine everything I mentioned earlier into a shell script that can greatly increase your workflow efficiency.</p>
               <p>For example, you can write a script that updates your website code with a local version. You can also make it save a backup on both the remote server and your local machine.</p>
            </li>
         </ul>
         <p>I think these are cool things to know because Linux is very good for software development. And it seems like the right thing to do as a software developer since you’ll be spending most of your time typing away at code. It would be a waste of time <em>not</em> to increase your efficiency with Linux.</p>
         <hr>
         <div class="post-notes">
            <p>Seriously consider giving Linux a try.</p>
         </div>
      </div>
<div class="container" id="comments">

    <?php 
    $name = "why-linux";
    include "../src/comments.php"; 
    ?>

    </div>
    <script type="text/javascript">
    var n = 'why-linux';
    document.write('<script type="text/javascript" src="../src/comments.js"><\/script>');
    </script>
   </body>
</html>
