# orlandorodriguez.xyz

Source code for my official personal site as well as scripts to facilitate editing process. 

## Design
In the `pandoc-files` directory you'll find markdown templates for writing articles for the site.

I use [Pandoc](https://pandoc.org/) to convert my Markdown files into a clean HTML format. This is all done by the `make-page.sh` script that converts to HTML,
and then it converts to PHP so that the navbar code can work. I intend to keep the site code openly available for people to look at. I use rsync to update the
site, and I am using this repo as a backup mostly.

My `update-site.sh` and `archive-site.sh` scripts are used to update the site. I have SSH keys configured for the server so that I can only log in from one computer. So I don't really mind sharing the code for these scripts. 

## Similarities to Gwern
Aspects of the site's design are based on [Gwern](https://www.gwern.net/). The similarities are mostly cosmetic, as I like the usage of Initialen fonts and 
minimalism.
