# _*hayu ngopi wey*_

import os.path, sys
import subprocess

__done__ = ["\n[!] Done!", "[!] run Type 'DarkFly'\n", "installing..."]
__not__ = ["Sorry. tools DarkFly not support your oprating system :(", "bayy..."]

__ubuntu__ = {

    "folder": "/usr/bin",
    "derlib": "lib",
    "dermod": ".module/.files",
    "fildon": ".JM.xn",

    "file": {
        "p": ".MN",
        "e": ".DF",
        "l": ".SPM",
        "3": ".MNBS",
        "r": ".INF",
        "s": ".FN",
        "i": ".BR",
        "a": ".STDOWN",
    }
}

__ubuntu2__ = [

    ".module/.remove $cd /usr/bin",
    "lib $cd /usr/bin"

]

__termux__ = {

    "file": {

        "k": ".MN",
        "o": ".DF",
        "n": ".SPM",
        "t": ".MNBS",
        "0": ".INF",
        "l": ".FN",
        "s": ".BR",
        "x": ".STDOWN"
    }
}

__termux2__ = [

    ".module/.remove $cd /data/data/com.termux/files/usr/bin",
    "lib $cd /data/data/com.termux/files/usr/bin"

]

def __main__():
    _i_ = raw_input("[*] install DarkFly now? [y/n]")
    for ms in _i_:
        if (ms == "y" or ms == "Y"):
            if os.path.isdir("/usr/bin"):
                if not os.path.isdir("/usr/bin"):
                    sys.exit(__not__[0])
                if os.getuid() != 0:
                    print "[x] Failed: no root access. please enter as root on your Linux"

                else:
                        os.system("chmod +x .module/files/%s" % __ubuntu__["file"]["p"])
                        os.system("chmod +x .module/files/%s" % __ubuntu__["file"]["e"])
                        os.system("chmod +x .module/files/%s" % __ubuntu__["file"]["l"])
                        os.system("chmod +x .module/files/%s" % __ubuntu__["file"]["3"])
                        os.system("chmod +x .module/files/%s" % __ubuntu__["file"]["r"])
                        os.system("chmod +x .module/files/%s" % __ubuntu__["file"]["s"])
                        os.system("chmod +x .module/files/%s" % __ubuntu__["file"]["i"])
                        os.system("chmod +x .module/files/%s" % __ubuntu__["file"]["a"])
                        #===============================================================#
                        print __done__[2]
                        os.system("python .module/files/%s" % __ubuntu__["file"]["p"])
                        os.system("python .module/files/%s" % __ubuntu__["file"]["e"])
                        os.system("python .module/files/%s" % __ubuntu__["file"]["l"])
                        os.system("python .module/files/%s" % __ubuntu__["file"]["3"])
                        os.system("python .module/files/%s" % __ubuntu__["file"]["r"])
                        os.system("python .module/files/%s" % __ubuntu__["file"]["s"])
                        os.system("python .module/files/%s" % __ubuntu__["file"]["i"])
                        os.system("python .module/files/%s" % __ubuntu__["file"]["a"])
                        os.system("mv %s" % __ubuntu2__[0])
                        os.system("mv %s" % __ubuntu2__[1])
                        print __done__[0]
                        print __done__[1]
                        os.system("python %s" % __ubuntu__["fildon"])

            if os.path.isdir("/data/data/com.termux/files/usr/bin"):
                if not os.path.isdir("/data/data/com.termux/files/usr/bin"):
                    sys.exit(__not__[0])
                
                else:
                    print __done__[2]
                    os.system("python2 .module/%s" % __termux__["file"]["k"])
                    os.system("python2 .module/%s" % __termux__["file"]["o"])
                    os.system("python2 .module/%s" % __termux__["file"]["n"])
                    os.system("python2 .module/%s" % __termux__["file"]["t"])
                    os.system("python2 .module/%s" % __termux__["file"]["0"])
                    os.system("python2 .module/%s" % __termux__["file"]["l"])
                    os.system("python2 .module/%s" % __termux__["file"]["s"])
                    os.system("python2 .module/%s" % __termux__["file"]["x"])
                    os.system("mv %s" % __termux2__[0])
                    os.system("mv %s" % __termux2__[1])
                    print __done__[0]
                    print __done__[1]
                    os.system("python2 %s" % __ubuntu__["fildon"])
        
        elif (ms == "n" or ms == "N"):
                sys.exit(__not__[1])

if __name__ == '__main__':
    __main__()
