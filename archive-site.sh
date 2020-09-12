#!/bin/bash
case "$1" in
	-c)
		rsync -zaPv root@orlandorodriguez.xyz:/var/www/orlie/ archives/orlie/ || echo "Archiving orlie code failed!"
		rsync -zaPv root@orlandorodriguez.xyz:/var/www/resume/ archives/resume/ || echo "Archiving resume code failed!"
		rsync -zaPv root@orlandorodriguez.xyz:/var/www/blog/ archives/blog/ || echo "Archiving blog code failed!"
	        # rsync -zaPv --dry-run root@orlandorodriguez.xyz:/var/www/test/ archives/test/ || echo "Archiving test code failed!"
		;;
	-s)
		rsync -zaPv root@orlandorodriguez.xyz:/etc/nginx/sites-enabled/ archives/server/enabled/ || echo "Archiving sites-enabled failed!"
		;;
esac
