const sideNavBtn = document.querySelector("#menu");
const sideNav = document.querySelector("#sidenav");

sideNavBtn.addEventListener("click", function() {
    sideNav.style.display == "none"
        ? (sideNav.style.display = "grid")
        : (sideNav.style.display = "none");
});

// sideNavBtn.onclick = function() {
//     sideNav.style.display = "grid";
// };
