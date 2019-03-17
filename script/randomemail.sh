random1=`shuf -i 1-7 -n 1`
echo "somebody@`sed -n ${random1}p email.txt`"
