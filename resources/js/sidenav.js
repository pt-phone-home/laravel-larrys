const sideNavBtn = document.querySelector("#menu");
const sideNav = document.querySelector("#sidenav");

sideNavBtn.addEventListener("click", function() {
    window.getComputedStyle(sideNav).display === "none"
        ? (sideNav.style.display = "block")
        : (sideNav.style.display = "none");
});

// sideNavBtn.onclick = function() {
//     sideNav.style.display = "grid";
// };
