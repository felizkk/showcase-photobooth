random1=`shuf -i 1-50 -n 1`
random2=`shuf -i 1-50 -n 1`
firstname=`sed -n ${random1}p firstname.txt`
surname=`sed -n ${random2}p surname.txt`
echo "$firstname $surname"
