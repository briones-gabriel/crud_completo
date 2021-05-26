let searchBar = document.getElementById("search-bar");
let tableRows = document.getElementsByClassName("student-row");

function handleKeyPress() {
    const searchBarText = searchBar.value;

    for (const row of tableRows) {
        let fullName = row.children[1].innerText + " " + row.children[2].innerText;

        if (!fullName.toLowerCase().includes(searchBarText.toLowerCase())) {
            row.style.display = "none";
        } else {
            row.style.display = "";
        }
    }
}

searchBar.addEventListener("keyup", handleKeyPress, false)