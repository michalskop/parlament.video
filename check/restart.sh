#!/bin/bash

# Check if ffmpeeg is running
# -x flag only match processes whose name (or command line if -f is
# specified) exactly match the pattern. 

if ! pgrep -x "ffmpeg" > /dev/null
then
    /usr/bin/ffmpeg -loglevel quiet -i http://pspcr-live.ssl.cdn.cra.cz/live.pscr/smil:snemovna2/index.m3u8 -t 01:00:00 -c copy -bsf:a aac_adtstoasc -c:v libx264 -b:v 0.5M /home/michal/dev/psp_video/$(date +\%Y-\%m-\%dT\%H\%M\%S.\%3N).mp4 > /dev/null 2>&1
fi
