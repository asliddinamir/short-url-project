// Function to shorten URL
function shortenUrl() {
    const url = document.getElementById("urlInput").value;

    if (!url) {
        alert("Please enter a URL");
        return;
    }

    // Send POST request to PHP API
    fetch("../backend/create.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ url: url })
    })
    .then(res => res.json())
    .then(data => {
        const resultDiv = document.getElementById("result");
        if (data.error) {
            resultDiv.innerHTML = data.error;
        } else {
            resultDiv.innerHTML = `Short URL: <a href="${data.short_url}" target="_blank">${data.short_url}</a>`;
        }
    })
    .catch(err => {
        console.error(err);
        document.getElementById("result").innerHTML = "Something went wrong!";
    });
}

// Add event listener to the button
document.getElementById("shortenBtn").addEventListener("click", shortenUrl);