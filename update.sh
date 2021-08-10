#!/bin/bash
PATH=/usr/bin:/usr/sbin:/bin
#This script is just to support the http://ffuf.me infra and isn't required for any personal usage

ip=$(ifconfig eth1 | grep 'inet ' | cut -d' ' -f10)
current_git=$(git rev-parse HEAD)
git pull
now_git=$(git rev-parse HEAD)
if [[ "$current_git" != "$now_git" ]]; then
    docker build -t ffufme .
    sleep $(shuf -i 10-30 -n 1)
    docker kill $(docker ps --filter ancestor=ffufme -q)
    docker run -d --restart unless-stopped -p $ip:10000:80 ffufme
fi