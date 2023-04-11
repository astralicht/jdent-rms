let activeParam = location.pathname

let navItems = document.querySelector("#nav").children
navItems = Array.from(navItems)

navItems.forEach((item) => {
    let itemName = item.href.split("/")
    itemName = itemName[itemName.length - 1];

    if (activeParam.includes(itemName)) {
        item.removeAttribute("overlight")
        item.setAttribute("warning", "")
        return
    }
})