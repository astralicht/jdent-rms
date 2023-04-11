function sendRequest(
    url = undefined,
    method = undefined,
    headers = undefined,
    callback = undefined)
{
    fetch(url, {
        "method": method,
        "headers": headers,
    }).then(response => response.text()).then(text => {
        try {
            obj = JSON.parse(text)
        } catch {
            console.error("JSON is invalid. Contact web admin for more details.")
            console.error(text)
            return
        }

        if (callback == null) {
            console.error("Callback missing from fetch request. Contact web admin for more details.")
            return
        }

        callback(obj)
    })
}