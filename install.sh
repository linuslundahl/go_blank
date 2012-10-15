#!/usr/bin/env bash
NAME=$1
mv go_blank.info $NAME.info
perl -pi -w -e 's/GO_BLANK/'$NAME'/g;' *.php
perl -pi -w -e 's/GO_BLANK/'$NAME'/g;' javascripts/*.js
rm install.sh
rm README.md
rm fonts/README.md
rm -rf .git
echo "New theme named $NAME created."