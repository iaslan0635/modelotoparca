const { chromium } = require('playwright')

const test = async (headless) => {
    const browser = await chromium.launch({
        headless,
        ignoreDefaultArgs: [
            "--enable-automation",
            "--hide-scrollbars",
            // "--mute-audio",
            "--blink-settings=primaryHoverType=2,availableHoverTypes=2,primaryPointerType=4,availablePointerTypes=4"
        ],
        args: ["--disable-blink-features=AutomationControlled", "--lang=en_US"],
        channel: "chrome",
    })


    const context = await browser.newContext({
        userAgent: "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36"
    })
    const page = await context.newPage()

    page.addInitScript(() => {
        window.chrome = {
            loadTimes: undefined,
            csi: undefined,
            app: {
                isInstalled: false,
                getDetails: undefined,
                getIsInstalled: undefined,
                installState: undefined,
                runningState: undefined,
                InstallState: {
                    DISABLED: 'disabled',
                    INSTALLED: 'installed',
                    NOT_INSTALLED: 'not_installed'
                },
                RunningState: {
                    CANNOT_RUN: 'cannot_run',
                    READY_TO_RUN: 'ready_to_run',
                    RUNNING: 'running'
                }
            }
        }
    })

    const navigation = await page.goto("https://www.onlinecarparts.co.uk")
    await page.reload()
    const isBlocked = await page.evaluate(() =>
        fetch("https://www.onlinecarparts.co.uk/ajax/selector/vehicle?model=10257&action=vehicles")
            .then(r => !r.ok)
    )

    const title = await page.title()
    const isCloudflarePage = title === "Bir dakika lütfen..." || title === "Just a moment..."

    console.log("blocked:", isBlocked || isCloudflarePage)
    console.log("navigator.webdriver:", await page.evaluate(() => navigator.webdriver))
    console.log("window.chrome:", await page.evaluate(() => window.chrome))
    console.log("navigator.languages:", await page.evaluate(() => navigator.languages))
    console.log("Request headers:", navigation.request().headers())

    // await page.pause()
    await browser.close()
};

(async () => {
    console.log("----[HEADLESS=TRUE]----")
    await test(true)
    console.log("----[HEADLESS=FALSE]----")
    await test(false)
})()
