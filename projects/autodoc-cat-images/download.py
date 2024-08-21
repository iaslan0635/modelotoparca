import json
import os
from pathlib import Path
from rich.progress import track
from subprocess import check_call

artisan_path = os.environ["USERPROFILE"] + r"\PhpstormProjects\modelotoparca\artisan"

with open("associated.json") as f:
    categories = json.load(f)

images_dir = Path("images")
images_dir.mkdir(exist_ok=True)

for category in track(categories):
    image = category["imageUrl"]
    id = category["id"]
    image_path = images_dir / f"{id}.png"
    check_call(["php", artisan_path, "ocp:curl", image, "-o", str(image_path.absolute())])
