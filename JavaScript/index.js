import "./getStudents.js";
import "./addStudent.js";
import "./deleteStudent.js";
import "./editStudent.js";

let searchBar = document.getElementById("search-bar");
let tableRows = document.getElementsByClassName("student-row");

function handleKeyPress() {
    const searchBarText = searchBar.value;

    if (!tableRows.length) alert("Ocurrio un error inesperado al intentar cargar los alumnos, por favor recargue la pagina.")
    for (const row of tableRows) {
        let fullName = row.children[0].innerText + " " + row.children[1].innerText;

        if (!fullName.toLowerCase().includes(searchBarText.toLowerCase())) {
            row.style.display = "none";
        } else {
            row.style.display = "";
        }
    }
}

searchBar.addEventListener("keyup", handleKeyPress, false)
