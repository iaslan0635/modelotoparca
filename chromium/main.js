import playwright from "playwright"
import express from "express"

const app = express()

const browser = await playwright.chromium.launch({
    headless: true,
    timeout: 180000,
})

const context = await browser.newContext({
    userAgent: 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36',
})

app.get('/', async (req, res) => {
    const page = await context.newPage()
    const response = await page.goto(req.query.url, {waitUntil: 'commit'})

    const headers = response.headers()
    delete headers['content-encoding']

    const status = response.status()
    const body = await response.body()

    await page.close()

    res
        // .header(headers)
        .status(status)
        .end(body)
})

const port = 3000
app.listen(port, () => console.log(`listening on port ${port}`))
