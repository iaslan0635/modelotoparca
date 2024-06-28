import express from "express"
import {request} from "./chromium.js";

const app = express()

app.get('/', async (req, res) => {
    const {
        headers,
        status,
        body,
    } = await request(req.query.url)

    res
        // .header(headers)
        .status(status)
        .end(body)
})

const port = 3000
app.listen(port, () => console.log(`listening on port ${port}`))
