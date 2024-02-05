import subprocess
import sys


def get(url):
    result = subprocess.run(["php", "../../artisan", "ocp:curl", url], capture_output=True, text=True, encoding="utf-8")
    result.check_returncode()
    return result.stdout

def get_raw(url):
    result = subprocess.run(["php", "../../artisan", "ocp:curl", url], capture_output=True, text=False)
    result.check_returncode()
    return result.stdout
