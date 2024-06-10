let catels = document.querySelectorAll(".catalog-items__tooltip-link")
let e = Array.from(catels)
function getImageUrlAndTitle(element) {
    // Find the img element within the given element
    const imgElement = element.querySelector('img');
    const spanElement = element.querySelector(':scope > span:nth-child(2)');
    
    // Extract the src and title attributes from the img element
    const imageUrl = imgElement ? imgElement.src : null;
    const title = spanElement ? spanElement.textContent : null;

    return { imageUrl, title };
}
let x =e.map(getImageUrlAndTitle)
let y = x.map(o => ({...o, imageUrl: o.imageUrl.replace("100x100", "300x300")}))
let j = JSON.stringify(y)
console.log(j)
