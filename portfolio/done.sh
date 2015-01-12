#!/bin/bash

# for f in public/scss/*.scss 
# do

# 	filename=$(basename "$f")
# 	filename="${filename%.*}"

# 	if [[ $filename =~ ^_ ]]; then
# 		continue
# 	else
# 		sass public/scss/$filename.scss public/css/$filename.css
# 		
# 		#java -jar yuicompressor-2.4.8.jar ../$filename.css -o ../css/$filename.css
# 	fi

# 	echo $filename.css converted

# done

sass public/scss/challenge.scss public/css/challenge.css
sass public/scss/challenge.scss app/views/css/challenge.css


echo "Conversion done!"

git add --all *
git commit -m "winter"
git push origin master