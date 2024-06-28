import {request} from "./chromium.js";

const {
    headers,
    status,
    body,
} = await request("https://www.onlinecarparts.co.uk/ajax/search/autocomplete?keyword=GUA+40700")

const text = body.toString()

console.log(`
Headers: ${JSON.stringify(headers)}
Status: ${status}
Body: ${text}
`)
