const cardBtn1 = document.querySelector(".front-btn-1");
const backBtn1 = document.querySelector(".back-btn-1");

const cardBtn2 = document.querySelector(".front-btn-2");

const backBtn2 = document.querySelector(".back-btn-2");

const card1 = document.querySelector(".card-1");
const card2 = document.querySelector(".card-2");

cardBtn1.addEventListener("click", function() {
    card1.classList.add("flip");
});

backBtn1.addEventListener("click", function() {
    card1.classList.remove("flip");
});

cardBtn2.addEventListener("click", function() {
    card2.classList.add("flip");
});

backBtn2.addEventListener("click", function() {
    card2.classList.remove("flip");
});
