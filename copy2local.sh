#/bin/bash

ret=0
while [ $ret == 0 ]; do
  rsync -arv --delete-after --progress --quiet web/* /var/www/html/freresdulevain.club/
  ret=$?
  echo "ret=$ret"
  sleep 1
done
