timestamp=`date '+%d%m%H%M%S'`
firstname=`echo "$1 $2" | awk '{print tolower($1)}'`
uniqueid=`echo $firstname-$timestamp`
echo "$uniqueid"
