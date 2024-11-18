
//javascript for day and night light

let day_night_light = document.getElementById("d-n-light");
let container = document.querySelector(".container");
let font_color_change = document.querySelectorAll(".z");
let bg_color_change = document.querySelectorAll(".bg-change");
let bg_gray = document.querySelectorAll(".bg-gray");
let select = document.querySelectorAll(".select");
let li_ni_mode = document.getElementById("li-ni-mode");


// function to toggle or remove classlist
function tog_rem(b, c) {
    container.classList.toggle(`${b}`)
    container.classList.remove(`${c}`) //for cont
}

day_night_light.addEventListener("click", (event) => {
    console.log(event.target.src)
    if (event.target.src === "http://localhost/vt%20project%20(student%20placement%20cell%20)/day-mode.png") {
        if (li_ni_mode.textContent == 'LIGHT MODE') {
            li_ni_mode.textContent = 'NIGHT MODE';
        }
        for (i = 0; i < font_color_change.length; i++) {
            font_color_change[i].style.color = "black";
        }
        for (i = 0; i < bg_color_change.length; i++) {
            bg_color_change[i].style.backgroundColor = "white";

        }
        for (let i = 0; i < bg_gray.length; i++) {
            bg_gray[i].style.backgroundColor = "#8080801f"

        }
        for (let i = 0; i < select.length; i++) {
            select[i].style.backgroundColor = "#8080801f"

        }
        day_night_light.src = "http://localhost/vt%20project%20(student%20placement%20cell%20)/moon.png";
        // container.classList.toggle("day-mode-cont")
        // container.classList.remove("night-mode-cont")
        tog_rem('day-mode-cont', 'night-mode-cont'); //work for both container and select.

    }
    else {

        day_night_light.src = "http://localhost/vt%20project%20(student%20placement%20cell%20)/day-mode.png";
        li_ni_mode.textContent = 'LIGHT MODE';
        for (i = 0; i < font_color_change.length; i++) {
            font_color_change[i].style.color = "white";
        }
        for (i = 0; i < bg_color_change.length; i++) {
            bg_color_change[i].style.backgroundColor = " rgb(36 38 39)"

        }
        for (let i = 0; i < bg_gray.length; i++) {
            bg_gray[i].style.backgroundColor = "white"
        }
        for (let i = 0; i < select.length; i++) {
            select[i].style.backgroundColor = " rgb(23 25 26)";
        }
        tog_rem('night-mode-cont', 'day-mode-cont');
    }
});

