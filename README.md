# FFUF Me - Target Practice For FFUF

#### Intro

This is a simple website to get you used to using ffuf against a live target

You can either run this repo locally using docker or on our live system at http://ffuf.me

#### Requirements
You must have docker installed, this can simply be installed using `sudo apt install docker.io` for debian based operating systems or see https://docs.docker.com/get-docker/ for other distros and operating systems




##### Installation Instructions
`
sudo docker build -t ffufme .
`

`sudo docker run -d -p 80:80 ffufme`

Created by [Adam Langley](https://twitter.com/adamtlangley)
