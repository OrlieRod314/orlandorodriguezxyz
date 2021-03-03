---
title: Why Linux?
article: why-linux
lang: en-US
author:
	- Orlando Rodriguez
date: Jul 25, 2020
status: Complete
importance: 6
meta: |
	Linux is pretty cool.
abstract: |
	Here I explain the advantages of GNU/Linux over proprietary Operating Systems such as MacOS and Microsoft Windows. I discuss a variety of scenarios and contexts in which the true strengths of Linux shine.	
---

I like to think that Linux is objectively better than Windows and Mac. But after all, it's totally subjective. By no means am I trying to say that you should switch to Linux no matter what. Some people should just stick to whatever they use best. Not everyone has the time or ambition to learn how to use an entirely new operating system. I base my argument on the merit of utility. 

# Why Do You Use Windows or Mac? (The Normie)

Within the context of this article, the word normie means a typical person who uses a computer for typical things. Typical things may include but are not limited to: Using Microsoft Office programs, browsing the web, and as of late using Zoom. The normie does not actually need to know how a computer works to do their job, and does not need to make use of the majority of their computer’s hardware and software resources.

The normie enjoys using Windows and MacOS because that’s simply what they’ve used their whole lives. There’s something comforting and predictable about the Windows and Mac design. It looks pretty, and it’s very intuitive for the average user. You don’t need to know anything about how computers work, and you can just click away at whatever you want.

There is nothing inherently wrong with using technology that makes you comfortable. But normies are often overpaying for what they really want. If you think about it, normies just use their PC to launch a browser and a handful of programs.

Little do most of them know that Linux can offer them a comparable, if not better, user experience.

# What is Linux?

## Foundation

[Linux](https://en.wikipedia.org/wiki/Linux) can actually mean a variety of things, but more commonly it means a family of [Unix](https://en.wikipedia.org/wiki/Unix)-like operating systems that are based on the [Linux kernel](https://en.wikipedia.org/wiki/Linux_kernel). A kernel isn’t an OS. In fact, the kernel is basically the lowest-level software on a computer. It is part of the OS software that is always in memory. The kernel interacts with physical resources like the CPU, memory (RAM), and devices. Then, it interacts with the application demanding said resources.

Linux actually became popular through [GNU](https://en.wikipedia.org/wiki/GNU). GNU stands for **GNU is Not Unix**. This is because GNU is an OS that resembles Unix, yet has no actual Unix code. It is made of entirely open-source software, which means that anyone can see the code and know what it does (important later in the article). GNU had its own kernel called GNU Hurd, but some guy named [Linus Torvalds](https://en.wikipedia.org/wiki/Linus_Torvalds) made his own kernel. A powerful combination then emerged: The GNU OS coupled with the non-GNU Linux kernel. Now referred to as GNU/Linux.

So, GNU is actually the OS, and Linux is just the kernel. But for the purpose of this article, we’ll refer to GNU/Linux (the more technical name) as Linux.

## The Distro

So, this is cool and all, but where can you get Linux?

Well, there isn’t a widely used “Linux” OS, the whole point of Linux is that people are supposed to modify the base operating system to suit their own needs. This is where the concept of a distro comes up. Linux distros are based on the original GNU/Linux combination, often with considerable alterations to default packages to make them more suited to a specific task.

Debian is a good example because so many distros have been based on it. Ubuntu is probably an OS you’ve heard of, and it’s based on Debian. It’s commonly used as a replacement for Windows and MacOS because it looks similar and is beginner-friendly. Kali Linux is also based on Debian, and I use it a lot for **ethical** hacking. So, you should pick a distro that’s right for your purposes and customize it to your own liking.

# Key Features of Linux

## Reliable

Most Linux distributions (especially server versions such as those for Debian) can be left running for a literal decade and never be rebooted. Try running Windows for more than a week and prepare to have an unwanted update.

## Free and Open Source

So not only does it cost you literally nothing in terms of money, but it also doesn’t cost you any privacy or peace of mind. Windows is riddled with NSA backdoors, allowing them to have complete access to your files. Microsoft does not show anyone its code for the sake of being competitive and making sure “hackers can’t find vulnerabilities”.

## Compatible With Older Hardware

Linux distros have their own package managers. A package manager is basically a program management system that makes sure that dependencies are installed, and that programs aren’t duplicated. For the most part, you don’t have to go to a site and download some installer that demands administrator privilege to run. You can just type out (for Debian systems) `sudo apt install package-name`. Program management can be done in the terminal without bloated GUIs.

# Why You Are Reluctant to Use Linux

## “Too Hard” and “Don’t Have Time”

Anyone I mention Linux to will inevitably mention the steep learning curve and how inconvenient it is to “learn a whole new Operating System”. Well, if that’s really your argument, just get Ubuntu. One of its strong points is that a normie can replace their OS with it and have the exact same user experience. The only difference is that you would have to install the open-source equivalents to their programs.

Also, this other point applies to not normies, but people who plan on having a career in Comp Sci or anything that seriously involves programming and computers. Saying that you don’t have time to learn Linux is like saying that you’re a race car driver who doesn’t have time to learn stick shift. Sure, it’s possible to drift in AT, but MT is better. I expand on this in a later section.

## “Can’t” Play Video Games or Use Adobe Software

Some cool advancements have been made lately in Linux gaming. But in short, major titles such as GTAV can be run on Linux. This argument doesn’t really work because not only are many games supported on Linux, but many more will be especially as demand goes up.

Honestly, I don’t know much about Linux gaming or gaming in general. So here’s a Linus Tech Tips [video](https://www.youtube.com/watch?v=6T_-HMkgxt0) that explains some of it.

However, I will admit that Linux is known for being incompatible with Adobe Software. However, there are free alternatives like GIMP.

## “Crashes All the Time”

This doesn’t happen at all unless you’re utterly incompetent with computer usage or purposely exceed your computer’s capabilities.

# Instructions for Getting Linux

Ok, so now that you’ve decided that you want to at least try out Linux, I would recommend starting out with either Ubuntu or Manjaro.

1. You want to download an ISO of the latest release
2. Flash it using BalenaEtcher or an alternative to a small USB stick
3. Plug it in and reboot your computer while pressing the boot key (usually `F12`)
4. Choose either an install or dual-boot option. **WARNING**: If you choose to install Linux on your computer without a dual-boot option, you **WILL** end up formatting your disk. In other words, you will lose everything. So, make sure to boot from a live CD or dual-boot if you want.
5. Follow the installation instructions
6. Enjoy!

# Now What?

Well, now that you have a nice distro installed, you can do whatever the hell you want! Want to completely uninstall your desktop and have a tiling window manager? With enough hacking around, you can do that. You can change literally anything about your system.

One thing I would recommend doing though, is learning how to use the terminal. The true strength of Linux is in the terminal. Look up some tutorials.

# For Computer Scientists

One of the main components of the Unix philosophy is “Do One Thing And Do It Well”. The basic programs in all Linux distributions share this philosophy, and they were made by developers for developers like you. There are some cool things you should know how to do:

- navigate the filesystem and alter files

Basic commands like cd, ls, cp, mv, rm.

- link programs together with pipes

You can filter out really cool information and stuff by linking together a `grep` command with some regular expressions. This is so much better than having to write a Python script for renaming files or something.

- edit files without an IDE

For most small script writing, an IDE is considered bloat. Learn how to use `vim` and `emacs`.

When you first launch Vim, it will look super primitive, but rest assured that it will at least triple your workflow efficiency.

- remote editing

Knowing how to `ssh` into a server and do work on another computer is a completely underrated skill.

Need to submit an assignment but it’s on another computer? SSH has you covered.

- write shell scripts

You can combine everything I mentioned earlier into a shell script that can greatly increase your workflow efficiency.

For example, you can write a script that updates your website code with a local version. You can also make it save a backup on both the remote server and your local machine.

I think these are cool things to know because Linux is very good for software development. And it seems like the right thing to do as a software developer since you’ll be spending most of your time typing away at code. It would be a waste of time not to increase your efficiency with Linux.