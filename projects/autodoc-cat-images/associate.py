import pandas as pd
import json

df = pd.read_excel("KATEGORİLER 29 05 2024.xlsx")

with open("console_result.json") as f:
    categories = json.load(f)

associated_categories = []

for category in categories:
    title = category["title"]
    rows = df[df["NAME3"] == title]
    if len(rows) == 1:
        category["id"] = rows.iloc[0]["LOGICALREF"].item()
        associated_categories.append(category)
    else:
        print(f"Could not find {title}")

with open("associated.json", "w") as f:
    json.dump(associated_categories, f, indent=2)
