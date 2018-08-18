# _*hayu ngopi wey*_

import os.path, sys, os

_fildn_ = [".module/.remove $cd /data/data/com.termux/files/usr/bin", "lib $cd /data/data/com.termux/files/usr/bin"]
_beres_ = ["\n[!] Done!", "[!] run Type 'DarkFly'\n", "bayy"]

_imajinasi_ = {

    "bin": "/data/data/com.termux/files/usr/bin",
    "mod": ".module",
    "fil": "lib",
    "jmx": ".JM.xn",

    "file": {
        "k": ".MN",
        "o": ".DF",
        "n": ".SPM",
        "t": ".MNBS",
        "0": ".INF",
        "l": ".FN",
        "s": ".BR",
        "x": ".STDOWN",
    }
}

def _main_():
    _z_ = raw_input("[+] install darkfly now? [y/n]")
    for w in _z_:
        if (w == "y" or w == "Y"):
            if not os.path.isdir("/data/data/com.termux/files/usr/bin"):
                print ("sory, tools darkfly only for termux")
                sys.exit()
            
            else:
                print "[*] installing..."
                os.system("python2 .module/%s" % _imajinasi_["file"]["k"])
                os.system("python2 .module/%s" % _imajinasi_["file"]["o"])
                os.system("python2 .module/%s" % _imajinasi_["file"]["n"])
                os.system("python2 .module/%s" % _imajinasi_["file"]["t"])
                os.system("python2 .module/%s" % _imajinasi_["file"]["0"])
                os.system("python2 .module/%s" % _imajinasi_["file"]["l"])
                os.system("python2 .module/%s" % _imajinasi_["file"]["s"])
                os.system("python2 .module/%s" % _imajinasi_["file"]["x"])
                os.system("mv %s" % _fildn_[0])
                os.system("mv %s" % _fildn_[1])
                print _beres_[0]
                print _beres_[1]

                os.system("python2 .JM.xn")
                

        elif (w == "n" or w == "N"):
            print _beres_[2]
            sys.exit()

if __name__ == '__main__':
    _main_()
