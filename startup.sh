#!/bin/bash

service nginx start
service php7.4-fpm start

while true; do sleep 1; done;

