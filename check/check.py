# checks whether there is streaming at the official website and outputs into a json file

import datetime
import json
import os
import re
import requests

url1 = "https://utils.ssl.cdn.cra.cz/live-streaming/clients/pspcr/player-new.php"
url2 = "http://www.psp.cz/sqw/hp.sqw?k=28"
try:
    path = os.path.dirname(os.path.abspath(__file__))
except Exception:
    path = os.getcwd()

r1 = requests.get(url1)
r2 = requests.get(url2)
t1 = 'oznam_neni_schuze'
t2 = 'Poslaneck&aacute; sněmovna nejedn&aacute;'
d = datetime.datetime.now().isoformat()
out = {
    "checked_date": d,
}
if r1.status_code == 200 and r2.status_code == 200:
    m1 = re.search(t1, r1.text)
    m2 = re.search(t2, r2.text)
    if m1 or m2:
        out['on'] = False
    else:
        out['on'] = True

    with open(path + "/status.json", "w") as fout:
        json.dump(out, fout)
