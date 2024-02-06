from os import PathLike
from typing import Callable, Collection
from ocp_client import get_raw_async
import asyncio
from rich.progress import Progress


async def download_concurrent(
    urls: Collection[str], max_concurrency: int, name_resolver: Callable[[str], str | PathLike]
):
    semaphore = asyncio.Semaphore(max_concurrency)

    with Progress() as progress:
        task = progress.add_task("Downloading...", total=len(urls))

        async def download(url: str):
            fname = name_resolver(url)
            async with semaphore:
                content = await get_raw_async(url)
            with open(fname, "wb") as f:
                f.write(content)
            progress.advance(task)

        await asyncio.gather(*(download(url) for url in urls))
