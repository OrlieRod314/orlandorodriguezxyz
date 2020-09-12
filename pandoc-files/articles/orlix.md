---
title: "Orlix: An Arch Linux Configuration Made for the Average CS Student"
lang: en-US
author:
	- Orlando Rodriguez
date: August 3, 2020
meta: |
	In early July I started learning about Linux and what it had to offer for CS students. Over time I guess you could say I became a bit of a Linux elitist. I decided to create a minimalist Arch Linux install and modify it to suit my needs. My programming efficiency basically doubled. Here I go into detail about the packages I installed. I believe that a motivated CS student can significantly benefit from this minimalist setup and have a fluid workflow.
notes: |
	- [Arch Linux Wiki](https://wiki.archlinux.org/): Useful for fixing any installation issues you may come across with Arch
	- [DWM from Suckless](https://dwm.suckless.org/): Suckless page for dwm
	- I am serious when I say you should start with Ubuntu. Don't make things hard for yourself.
warning: |
	I would highly suggest *against* completely replacing your OS with Linux at first, especially with a minimalist distro like Arch, Gentoo, or Void. Starting with something simple like Ubuntu on a virtual machine is the best choice for a beginner. It's a low-stakes way to begin and won't make you lose all your stuff. Starting with Arch is a very good way to lose your confidence and convince yourself that you're not good at CS.
---

## Why I Made Orlix

### Annoying Windows Workflow

Some people ask me why I went through the trouble of setting this up. I think the main reason was for efficiency. I used to do all my programming on Windows, which wasn't really that bad to begin with. However, I quickly found that the whole Windows workflow was annoying and got in the way of my creative process. Having to tab through different windows with `Alt` + `Tab`, and then clicking through the GUI of whatever editor I was using was very cumbersome.

The constant transition between mouse and keyboard wasn't really *the* reason I switched however. The other -more important reason- was that I preferred the Linux layout of the file system. I liked having forward slashes in directory names and not having to adjust for that in my scripts. I also liked having a Vim editor. I know that Windows is Vim-compatible, but I liked being able to interface with just the terminal and not have to install any bloated GUI programs. 

### Necessities and Convenience

It was also not necessary to have programs like Microsoft Office on my laptop if I write all my essays with LaTeX. I also don't need complicated IDEs if most of my scripting could be accomplished faster wth Vim. Sure, Eclipse would be nice. But I could always install it if I *absolutely* had to. I strived for a minimalist install so I could get things done with no BS. No annoying notifications about needed updates. 

## My Setup

My current machine is a Lenovo Thinkpad T420. I have two SSD's inside the laptop. One of them has Windows 10 with all the GUI IDE's I don't like to use. It also has Zoom on it, which I may need for online classes. I **DO NOT** want that anywhere near my Orlix. The other SSD has Orlix on it. 

### Why a Thinkpad T420

My gaming laptop was not a suitable choice for this. It had a Safe Boot mode that didn't easily allow me to boot from a second drive. So, as much as I would prefer to have an HD display with all 16GB RAM and an i7 processor, I didn't want to risk anything. 

I was able to buy the T420 for less than $200 including shipping and tax. It came with 8GB RAM and an i5. However, I was promised a 250GB SSD but it instead came with a 320GB 7200rpm HDD. After some negotiation with the vendor, I was able to get money to mostly cover the SSD I didn't get.

> **$191.30** (T420) + **$45** (SSD I bought for Orlix) - **$35** (Vendor recompensation) + **$45** (SSD I bought for Windows) + **$10** (Caddy for second drive) = **$256.30** net cost

So, overall not a *horrible* price to pay. Just be wary of vendors that try to scam you. If I could go back in time, I would have insisted on a higher price because of his false advertising, even if it was a mistake.

### Windows SSD

I figured it would be a good idea to get Windows 10 on another SSD just in case I were to find myself needing to download something sketchy or needing to use Windows for something school-related (Zoom). I don't really care what happens to my Windows system because I didn't put any sensitive information on there. 

## Orlix Setup

### Packages

One important distinction should be made here. Orlix is not actually a completely independent Linux distribution that I made... yet! This Arch Linux setup is a prototype to prove to myself that the workflow I want is actually possible. This is merely a proof of concept. Although I do plan on keeping this around.

Here is a list of all the important packages that I can think of:

Aesthetic:

- dwm

	Installed from source. Tiling window manager

- dwm_bar 

	Installed from source. A status bar for showing stats

- dmenu

	Installed from source. Search bar for pulling up programs such as a browser

- st	

	Installed from source. Suckless terminal

- nitrogen

	Wallpaper program

Programming:

- Python
- Java
- R

Browsers:

- Firefox

Utility:

- scrot

	For taking screenshots

- ranger

	For  A E S T H E T I C  file navigation

- neofetch

	For flexing my OS to people

- gpg

	For file encryption

- open-ssh

	For connecting to my site and running my auto-update scripts

Text Editor:

- Vim

### Workflow

When I boot up Orlix, I am greeted with the login shell. I log into my account and start dwm. I do not want to have dwm start up automatically in case I just want to run a quick script or check something.

When I start dwm with `startx`, I see my wallpaper and a clean status bar. I can easily check my available storage, battery, audio, outside temperature, wifi-connection, keyboard layout, and date/time. 

I also have tags on my tabs to the upper left. I have two tabs meant for terminal-based work, two for firefox, one for python, two for java, one for R, and one for music. The terminal tabs are on opposite ends of the tab list just so that I don't confuse my work in case I'm SSH'd into a server or something.

With the exception of internet browsing, my workflow never involves the mouse. This way, only two major factors limit my productivity: typing speed and internet connection. I love using the terminal to do everything, but I also think that some things can't be done through just text. Some of the worst systems admin disasters have been caused by a *loss of situational awareness* as a result of using a terminal. [My worst sys admin disaster](https://orlandorodriguez.xyz/posts/good-practices.php) was caused by that as well. 

## How Orlix Helped Me

As I said before, Windows was just excessive for what I needed and wanted. The packages listed above are really all I need for all I do. My workflow was e

I timed myself working on some Python scripts and trying to run them in both Windows and Orlix. For this experiment, I decided not to use both at the same time and limit myself to whatever technology was on each machine. I decided not to count boot time, but I can safely say that Orlix is significantly faster. 

With Orlix, I could safely switch tabs and make a new terminal with a handful of keystrokes. With Windows, it took about twice the amount of keystrokes to accomplish the same thing. Since I used Vim on Orlix, I literally never touched the mouse. Vim shortcuts also helped me write text faster. On Windows, I constantly had to move the mouse to click on whatever text I wanted to edit. I was using Sublime. 

In the end, I accomplished my task in about 10 minutes with Orlix, and in about 23 minutes with Windows. Not that long overall, but significantly faster with Orlix.

It is worth stating however, that I did distract myself with Spotify and Discord on Windows. Now, this didn't take up too much time, so the real gain in productivity was probably a bit less than double. Just an aside, I consider this an example of the damaging effects of even the smallest distractions. Windows is just distracting by design with all its updates. 

## How Orlix Can Help You

So now you're probably wondering, "Okay, I'm glad that Orlix helped you. But why should I care if I can do everything on Windows?". 

Well, you're not wrong. But that's not the point. Often times I see Comp Sci students complaining about how time-consuming the assignments are (even though they really aren't if you just start on time). My OS here presents a faster, unbloated method for completing homework. I do not think that it's necessary to have a GUI to do CS homework. 

Also, learning how to use Linux is just something you should know as a CS student. You can become very intimate with the inner workings of your computer and shape your own workflow to however you want it. This is less of an argument for Orlix, and more of an argument for [using Linux in general](https://orlandorodriguez.xyz/posts/why-linux.php).
