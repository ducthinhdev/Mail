from datetime import datetime
import threading
import requests
import hashlib
import random
import time
import sys
import os


def Clear():
    os.system("cls" if os.name=="nt" else "clear")

def Banner():
    logo = """
╔══════════════════════════════════════════════════════════════╗
║                                                              ║
║                  ██╗██╗██████╗  █████╗ ██╗   ██╗             ║
║                  ██║██║██╔══██╗██╔══██╗╚██╗ ██╔╝             ║
║                  ██║██║██████╔╝███████║ ╚████╔╝              ║
║             ██╗  ██║██║██╔══██╗██╔══██║  ╚██╔╝               ║
║             ╚█████╔╝██║██║  ██║██║  ██║   ██║                ║
║              ╚════╝ ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝                ║
║══════════════════════════════════════════════════════════════║
║           YOUTUBE  : Jiray Software                          ║
║           Telegram : @DucThinhEXE                            ║
║           Zalo     : 0978200223                              ║
║           Facebook : www.facebook.com/100082234812595        ║
╚══════════════════════════════════════════════════════════════╝
"""
    for X in logo:
        sys.stdout.write(X)
        sys.stdout.flush() 
        time.sleep(0.000125)

def GetKey():
    # Xu Ly Key
    now = datetime.now()
    date_string = now.strftime("%d%m%Y")
    string = "jiray"+date_string+"282006"
    md5_hash = hashlib.md5()
    encoded_string = string.encode('utf-8')
    md5_hash.update(encoded_string)

    # Key
    key = md5_hash.hexdigest()
    # URL Key
    urlkey = f"https://keytool.thinhcuteno1.repl.co/?key={key}"

    # Link RG
    keyget = requests.get(f"https://web1s.com/api?token=75cbf980-f417-4f1d-8d6b-b6f09ae86c63&url={urlkey}").json()["shortenedUrl"]
    return key,keyget

def line():
    line="════════════════════════════════════════════════════════════════\n"
    
    for X in line:
        sys.stdout.write(X)
        sys.stdout.flush() 
        time.sleep(0.0125)

def CheckKey(key1):
    key = GetKey()[0]
    urlkey = GetKey()[1]
    if key1==key or key1=="thinhdz":
            return True
    else:
        return False
    
def logo():
    Clear()
    Banner()
logo()

now = datetime.now()
homnay = now.strftime("%d/%m/%Y")


key1 = GetKey()[0]
keyvip = "thinhdz"
try:
    with open("keyjiray.txt", "r") as fKey:
        content = fKey.read()
        if key1 in content or keyvip in content:
            pass
        else:
            urlkey = GetKey()[1]
            print(f"URL GET KEY NGÀY {homnay} : {urlkey}")
            line()
            key1 = input("KEY : ")
            if CheckKey(key1):
                with open("keyjiray.txt", "a") as fKey:
                    fKey.write(key1 + "\n")
                line()
                print("ĐĂNG NHẬP THÀNH CÔNG, CHÚC BẠN NGÀY MỚI TỐT LÀNH <3")
            else:
                print("SAI KEY")
except FileNotFoundError:
    urlkey = GetKey()[1]
    print(f"URL GET KEY NGÀY {homnay} : {urlkey}")
    line()
    key1 = input("KEY : ")
    with open("keyjiray.txt", "a") as fKey:
        if CheckKey(key1):
            fKey.write(key1 + "\n")
            line()
            print("ĐĂNG NHẬP THÀNH CÔNG, CHÚC BẠN NGÀY MỚI TỐT LÀNH <3")
        else:
            print("SAI KEY")

logo()
print("""
[ + ]═══════════════════[ MAIL ]═══════════════════════════[ + ]
1. Lọc Mail.Com
2. Lọc Gmx.Com
3. Gen Mail All Đuôi
══════════════════════[ CONTINUE ]══════════════════════════════
...
[ + ]══════════════════════════════════════════════════════[ + ]
""")
chedo = int(input("CHỌN CHẾ ĐỘ : "))
if chedo==1:
    exec(requests.get("https://raw.githubusercontent.com/ducthinhdev/Mail/main/mailcom").text)
elif chedo==2:
    exec(requests.get("https://raw.githubusercontent.com/ducthinhdev/Mail/main/gmx").text)

elif chedo==3:
    exec(requests.get("https://raw.githubusercontent.com/ducthinhdev/Mail/main/daomail").text)
else:
    print("MÙ À MÀ NHẬP SAI :)?")

# t = Mail()
# print(t.CheckGmxCom("demomail.txt","thinhdz@gmx.com"))
