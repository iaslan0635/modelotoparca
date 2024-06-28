import playwright from "playwright";

const browser = await playwright.chromium.launch({
    headless: true,
    timeout: 180000,
})

const context = await browser.newContext({
    userAgent: 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36',
})

export async function request(url) {
    const page = await context.newPage()
    const response = await page.goto(url, {waitUntil: 'commit'})

    const headers = response.headers()
    delete headers['content-encoding']

    const status = response.status()
    const body = await response.body()

    await page.close()

    return {
        headers,
        status,
        body,
    }
}
