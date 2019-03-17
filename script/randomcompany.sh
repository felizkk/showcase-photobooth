random1=`shuf -i 1-6 -n 1`
echo `sed -n ${random1}p company.txt`
