#!/bin/bash
current_git=$(git rev-parse HEAD)
git pull
now_git=$(git rev-parse HEAD)
if [[ "$current_git" != "$now_git" ]]; then
    docker build -t ffufme .
    docker kill $(docker ps -q)
    docker run -d -p 80:80 ffufme
fi
