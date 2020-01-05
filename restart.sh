#!/usr/bin/env bash

echo "stop server ..."

# 修改 hyperf-project 为 config.config.app_name 的值
ps aux | grep hyperf-project | awk '{print $2}' | xargs kill -15

echo "stopped ..."

echo "start server ..."
sh bin/clear.sh
php bin/hyperf.php start
echo "started ..."
