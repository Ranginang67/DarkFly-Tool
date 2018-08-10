import os, time

def done():
    print '\n[*] how to run in the new terminal just type "DarkFly"\n'
    os.system('cd && rm -rf DarkFly-Tool')

bin = '/data/data/com.termux/files/usr/bin'
luc = 'clear >$(tty)'
file = '.module'
dua = '.MN'
dfile = '.DF'

print 'start...'
time.sleep(0.7)
os.system('%s && apt-get install php -y' % (luc))
os.system('apt-get install hydra -y && %s' % (luc))
os.system('python2 %s/.SPM' % (file))
os.system('python2 %s/.MNBS' % (file))
os.system('python2 %s/%s' % (file, dua,))
os.system('python2 %s/.INF' % (file))
os.system('python2 %s/.FN' % (file))
os.system('python2 %s/.BR' % (file))
os.system('python2 %s/%s' % (file, dfile,))
done()