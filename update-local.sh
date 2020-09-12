#!/bin/bash
for SITE in "$@"
do
	rsync -zaPv root@orlandorodriguez.xyz:/var/www/$SITE/ $SITE/ || echo "Download from $SITE failed !"
done
