
    function searchProducts() {
        let query = document.getElementById("search-input").value;

        if (query.length > 2) { // Start searching after 3 characters
            fetch(`/search?query=${query}`, {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                },
            })
                .then(response => response.json())
                .then(data => {
                    let resultsDiv = document.getElementById("search-results");
                    resultsDiv.innerHTML = ""; // Clear previous results

                    if (data.length > 0) {
                        data.forEach(product => {
                            let productItem = `<a href="/products/${product.id}" class="dropdown-item">${product.name}</a>`;
                            resultsDiv.innerHTML += productItem;
                        });
                        resultsDiv.style.display = "block";
                    } else {
                        resultsDiv.innerHTML = `<p class="dropdown-item">No results found</p>`;
                    }
                })
                .catch(error => console.error("Error:", error));
        } else {
            document.getElementById("search-results").innerHTML = "";
            document.getElementById("search-results").style.display = "none";
        }
    }    


