#!/usr/bin/env bash

if [ -f runtime/hyperf.pid ]
then
    cat runtime/hyperf.pid | xargs kill -15
fi
echo "server stop..."
echo "clear cache..."
sh bin/clear.sh
echo "start server..."

#nohup php bin/hyperf.php start > /dev/null 2>&1 &
