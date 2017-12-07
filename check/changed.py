# checks whether there is change (start, end) of streaming

import csv
import datetime
import io
import json
import os
import requests


def tail(f, lines=1, _buffer=4098):
    """Tail a file and get X lines from the end"""
    # place holder for the lines found
    lines_found = []

    # block counter will be multiplied by buffer
    # to get the block size from the end
    block_counter = -1

    # loop until we find X lines
    while len(lines_found) < lines:
        try:
            f.seek(block_counter * _buffer, os.SEEK_END)
        except IOError:  # either file is too small, or too many lines requested
            f.seek(0)
            lines_found = f.readlines()
            break

        lines_found = f.readlines()

        # we found enough lines, get out
        # Removed this line because it was redundant the while will catch
        # it, I left it for history
        # if len(lines_found) > lines:
        #    break

        # decrement the block counter to get the
        # next X bytes
        block_counter -= 1

    return lines_found[-lines:]


try:
    path = os.path.dirname(os.path.abspath(__file__))
except Exception:
    path = os.getcwd()
url = "http://localhost/michal/dev/psp_video/status.json"
r = requests.get(url)
if r.status_code == 200:
    current_status = r.json()['on']
    with open(path + "/changes.csv") as fc:
        t = tail(fc)
        for row in csv.reader(io.StringIO(t[0])):
            print(row)
            if row[2] == 'True':
                last_status = True
            else:
                last_status = False
    print(last_status, current_status)
    if last_status != current_status:
        with open(path + "/changes.csv", "a") as fout:
            csvw = csv.writer(fout)
            csvw.writerow([datetime.datetime.now().isoformat(), r.json()['checked_date'], current_status])
