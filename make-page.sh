#!/bin/bash
INPUTFILE="$1"
pandoc -s --toc --template=pandoc-files/page-template.html "pandoc-files/articles/${INPUTFILE}.md" -o "pandoc-files/${INPUTFILE}.html" || echo "Failed to make HTML file!"
mv "pandoc-files/${INPUTFILE}.html" "pandoc-files/${INPUTFILE}.php" || echo "Failed to convert to PHP!"
