import {request} from "./chromium.js";

request("https://www.onlinecarparts.co.uk/ajax/search/autocomplete?keyword=GUA+40700").then(console.log)
