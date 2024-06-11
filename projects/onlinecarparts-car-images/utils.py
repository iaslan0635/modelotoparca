from pathlib import Path, PurePath
import re
from typing import Iterable, TypeVar, cast
import bs4
import ocp_client

T = TypeVar("T")


def normalize_fname(name: str):
    return re.sub(r"[^a-zA-Z0-9]+", "-", name).strip("-")


def mkpath(directory: str | PurePath):
    path = Path(directory)
    path.mkdir(parents=True, exist_ok=True)
    return path


def soup(url: str):
    html = ocp_client.get(url)
    return bs4.BeautifulSoup(html, "html.parser")

async def async_soup(url: str):
    html = await ocp_client.get_async(url)
    return bs4.BeautifulSoup(html, "html.parser")

def get_link(el: bs4.Tag) -> str:
    if el.has_attr("href"):
        return cast(str, el["href"])

    return cast(str, el["data-link"])


def flatten(l: Iterable[Iterable[T]]) -> list[T]:
    return [item for sublist in l for item in sublist]
