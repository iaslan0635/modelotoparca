import subprocess
import asyncio
from typing import cast


class OcpClientProcessError(subprocess.CalledProcessError):
    def __str__(self) -> str:
        return super().__str__() + f"\n\nSTDERR:\n{self.stderr}" + f"\n\nSTDOUT:\n{self.stdout}"


def _check_returncode(result: subprocess.CompletedProcess):
    try:
        result.check_returncode()
    except subprocess.CalledProcessError as e:
        raise OcpClientProcessError(e.returncode, e.cmd, e.output, e.stderr) from e


def _get_args(url: str):
    return ["php", "../../artisan", "ocp:curl", url]


def get_raw(url: str):
    result = subprocess.run(
        _get_args(url),
        capture_output=True,
        text=False,
    )
    _check_returncode(result)
    return result.stdout


def get(url: str):
    return get_raw(url).decode("utf-8")


async def get_raw_async(url: str):
    if not await _loop_supports_subprocess():
        return await asyncio.to_thread(get_raw, url)

    args = _get_args(url)
    proc = await asyncio.create_subprocess_exec(
        *args,
        stdout=asyncio.subprocess.PIPE,
        stderr=asyncio.subprocess.PIPE,
    )
    stdout, stderr = await proc.communicate()
    if proc.returncode != 0:
        raise OcpClientProcessError(cast(int, proc.returncode), args, stdout, stderr)
    return stdout


async def get_async(url: str):
    return (await get_raw_async(url)).decode("utf-8")


async def _loop_supports_subprocess():
    try:
        await asyncio.create_subprocess_exec("")
    except NotImplementedError:
        return False
    except:
        return True
    return True
