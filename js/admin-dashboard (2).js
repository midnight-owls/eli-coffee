const toggleBtn = document.getElementById("toggle-btn");
const sidebar = document.getElementById("sidebar");
const dropdowns = document.querySelectorAll(".sidebar-dropdown");
const sidebarLinks = document.querySelectorAll(".sidebar-link");

// Toggle the sidebar open/close when the toggle button is clicked
toggleBtn.addEventListener("click", () => {
    const isExpanded = sidebar.classList.contains("expand");

    // If the sidebar is expanding, make sure the dropdown is visible
    if (!isExpanded) {
        sidebar.classList.add("expand");
    } else {
        sidebar.classList.remove("expand");

        // Ensure that all dropdowns close when collapsing the sidebar
        dropdowns.forEach((dropdown) => {
            dropdown.classList.remove("show");
            const parentLink = dropdown.previousElementSibling;
            if (parentLink) {
                parentLink.classList.add("collapsed");
                parentLink.setAttribute("aria-expanded", "false");
            }
        });
    }
});

// Handle dropdown click (expand/collapse)
sidebarLinks.forEach(link => {
    link.addEventListener("click", (event) => {
        const dropdown = event.target.nextElementSibling;

        if (dropdown && dropdown.classList.contains("sidebar-dropdown")) {
            event.preventDefault(); // Prevent default link behavior

            // Make sure the sidebar expands when dropdown is clicked
            sidebar.classList.add("expand");

            // Toggle the dropdown visibility (horizontally)
            dropdown.classList.toggle("show");

            // Toggle the aria-expanded attribute and collapsed class
            const parentLink = event.target;
            const isExpanded = dropdown.classList.contains("show");
            parentLink.classList.toggle("collapsed", !isExpanded);
            parentLink.setAttribute("aria-expanded", isExpanded);
        }
    });
});
