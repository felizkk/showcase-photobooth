timestamp=`date '+%d%m%H%M%S'`
shortname=`echo "$1 $2" | awk '{printf("%s%s\n",substr($1,1,2),substr($2,1,2))}'`
uniqueid=`echo $shortname-$timestamp`
echo "$uniqueid"
