from pathlib import Path, PurePath
import re


def normalize_fname(name: str):
    return re.sub(r"[^a-zA-Z0-9]+", "-", name).strip("-")


def mkpath(directory: str | PurePath):
    path = Path(directory)
    path.mkdir(parents=True, exist_ok=True)
    return path
