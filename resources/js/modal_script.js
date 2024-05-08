// search
function performSearch() {
    let input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toLowerCase();
    table = document.getElementById("foodListTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        const nameColumn = tr[i].getElementsByTagName("td")[1]; // Column for Recipe Name

        if (nameColumn) {
            const nameText = nameColumn.textContent || nameColumn.innerText;

            if (nameText.toLowerCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

// Attach an event listener to the search input field
document.getElementById("searchInput").addEventListener("keyup", performSearch);






