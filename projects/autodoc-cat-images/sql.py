import json


with open("associated.json") as f:
    categories = json.load(f)

ids = [category["id"] for category in categories]

base_dir = "images/categories/subs"

for id in ids:
    path = f"{base_dir}/{id}.png"
    print(fr"INSERT INTO modelotoparca.images (imageable_type, imageable_id, path) VALUES ('App\\Models\\Category', {id}, '{path}');")
