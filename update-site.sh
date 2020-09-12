#!/bin/bash
for SITE in "$@"
do
	rsync -zaPv $SITE/ root@orlandorodriguez.xyz:/var/www/$SITE/ || echo "Upload to $SITE failed!"
done

