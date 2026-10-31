#!/bin/bash

service nginx start
service php8.3-fpm start

while true; do sleep 1; done;

