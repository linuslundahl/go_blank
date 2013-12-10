#!/usr/bin/env bash

NAME=$1

if [ $NAME ]
then

  # Change filenames
  mv go_blank.info $NAME.info
  mv javascripts/custom/go_blank.js javascripts/custom/$NAME.js

  # Renaming in files
  for i in "*.php" "*.info" "*.json" "javascripts/*.js" "javascripts/custom/*.js"
  do :
    perl -pi -w -e 's/GO_BLANK/'$NAME'/g;' $i
  done

  # Remove files
  for i in "install.sh" "README.md" "fonts/README.md" "images/dist/sprite/README.md" "images/src/sprite/README.md" "javascripts/vendor/README.md"
  do :
    rm $i
  done

  # Remove Git
  rm -rf .git*
  # git init
  # git add .
  # git commit -m "Initial commit."


  # Completed
  echo -e "\n\nNew theme named $NAME created.\n"
  echo -e "Don't forget to rename the theme folder to $NAME.\n"

fi
