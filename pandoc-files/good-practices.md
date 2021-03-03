---
title: Single User Mode, zsh , and Other Misadventures in Web Design 
article: good-practices
lang: en-US
author:
	- Orlando Rodriguez
date: Jul 10, 2020
status: Complete
importance: 4
meta: |
	Getting started in Web Development is tough.
abstract: |
	It's very easy to get discouraged when encountering an obstacle in your learning. It can breed feelings of inadequacy. Often times people will take these obstacles as a sign to give up and just stop trying to get good at something. 
---

A post about the struggles of beginner web development. And a cautionary tale about setting sudo permissions.

# The Problem

A while back, I was configuring SSH keys so that I could edit my website from my local machine without having to enter a password. I was having trouble with some commands I was trying to run while logged in as root. I figured I could change the shell to zsh to see what would happen. It didn’t go so well as zshell was not configured on the server. This unexpectedly bricked my server and my root account was locked out. Logging in through other machines didn’t help either. I was panicking as entering the password on the Vultr terminal wasn’t helping either, so I knew at that point that my SSH configuration wasn’t the root of the issue (no pun intended). I was horrified, because I had never encountered an issue like this before.

I had to enter single user mode and it turns out that the root account couldn’t even use the terminal because the shell was set to zsh (which again doesn’t exist on that server). Since the file system was set to read-only, I had to remount it all with `$ mount -o remount,rw /`. This allowed me to `vim` into `/etc/passwd` to change the default shell back to bash. The worst was seemingly over as I comfortably logged back into my server without any issues at all. I finally got the SSH keys conigured and disabled password logins. However, I noticed that the site was down.

I was very frustrated as I `ssh`’d back into the server and tried to see what was going on. I restarted nginx to no avail as I got error messages. After some searching, I found out that Apache was blocking port 80. I cleared the connections and eventually purged my server of all Apache-related things.

# The Lesson

The moral of the story is to know what you’re working with before making any drastic changes. And, it’s always a good idea to have backup sudoers on your machine so that you can repair things just in case you mess up like me. Although I think you would have to have SSH keys for them as well if you disable passwords. Another lesson I learned is to clear up any conflicting software. Overall, this was a very interesting learning experience, as it’s the first time I’ve genuinely been afraid of a programming mistake I made. 