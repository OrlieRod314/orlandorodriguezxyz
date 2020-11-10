<!DOCTYPE html>
<html lang="en-US">
    <head>
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <meta name="author" content="Orlando Rodriguez"/>
        <meta name="dcterms.date" content="2020-07-10"/>
        <title>
            Single User Mode, zsh, and Other Misadventures in Web Design
        </title>
    </head>
    <body>
        <header>
            <h1 class="title">
                Single User Mode, <code>zsh</code>
                , and Other Misadventures in Web Design
            </h1>
        </header>
        <?php
        include "../src/navbar.php";
        ?>
        <div class="container info">
            <div class="container toc">
                <ul>
                    <li>
                        <a href="#the-problem">The Problem</a>
                    </li>
                    <li>
                        <a href="#the-lesson">The Lesson</a>
                    </li>
                </ul>
            </div>
            <div class="container meta">
                <div class="post-date">July 10, 2020
                </div>
                <p>A post about the struggles of beginner web development. And a cautionary tale about setting sudo permissions.</p>
            </div>
        </div>
</div>
<div class="container main">
    <h2 id="the-problem">The Problem</h2>
    <p>A while back, I was configuring SSH keys so that I could edit my website from my local machine without having to enter a password. I was having trouble with some commands I was trying to run while logged in as root. I figured I could change the shell to zsh to see what would happen. It didn’t go so well as zshell was not configured on the server. This unexpectedly bricked my server and my root account was locked out. Logging in through other machines didn’t help either. I was panicking as entering the password on the Vultr terminal wasn’t helping either, so I knew at that point that my SSH configuration wasn’t the root of the issue (no pun intended). I was horrified, because I had never encountered an issue like this before.</p>
    <p>
        I had to enter single user mode and it turns out that the root account couldn’t even use the terminal because the shell was set to zsh (which again doesn’t exist on that server). Since the file system was set to read-only, I had to remount it all with <code>$ mount -o remount,rw /</code>
        . This allowed me to <code>vim</code>
        into /etc/passwd to change the default shell back to bash. The worst was seemingly over as I comfortably logged back into my server without any issues at all. I finally got the SSH keys conigured and disabled password logins. However, I noticed that the site was down.
    </p>
    <p>
        I was very frustrated as I <code>ssh</code>
        ’d back into the server and tried to see what was going on. I restarted nginx to no avail as I got error messages. After some searching, I found out that Apache was blocking port 80. I cleared the connections and eventually purged my server of all Apache-related things.
    </p>
    <h2 id="the-lesson">The Lesson</h2>
    <p>
        The moral of the story is to know what you’re working with before making any drastic changes. And, it’s always a good idea to have backup sudoers on your machine so that you can repair things just in case you mess up like me. Although I think you would have to have SSH keys for them as well if you disable passwords. Another lesson I learned is to clear up any conflicting software. Overall, this was a very interesting learning experience, as it’s the first time I’ve genuinely been afraid of a <em>programming</em>
        mistake I made.
    </p>
    <hr>
    <div class="post-notes">
        <p>Up next, I may start focusing on setting up a Git server and maybe dabble in some front-end development so I can make cooler-looking sites. I might also experiment with databases so you guys can start making comments and stuff. Will definitely take a while lol. Also, I could stand to learn some PHP for the sake of efficiency.</p>
    </div>
</div>
<div class="container" id="comments">

    <?php 
    $name = "good-practices";
    include "../src/comments.php"; 
    ?>

    </div>
    <script type="text/javascript">
    var n = 'good-practices';
    document.write('<script type="text/javascript" src="../src/comments.js"><\/script>');
    </script>
</body></html>
