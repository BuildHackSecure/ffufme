#!/bin/sh

git pull
docker build -t ffufme .
docker kill $(docker ps -q)
docker run -d -p 80:80 ffufme
