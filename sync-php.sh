#1/bin/bash
echo "Syncing the dirs..."
sleep 1
rsync -av $1 $2
echo "Operation finished"
