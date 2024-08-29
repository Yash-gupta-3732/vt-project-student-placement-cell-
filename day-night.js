
//javascript for day and night light

let day_night_light = document.getElementById("d-n-light");
let container = document.querySelector(".container");
let font_color_change = document.querySelectorAll(".z");
let bg_color_change = document.querySelectorAll(".bg-change");
let bg_gray = document.querySelectorAll(".bg-gray");
day_night_light.addEventListener("click", (event) => {
console.log(event.target.src )
    if (event.target.src === "http://127.0.0.1:5500/day-mode(1).png") {

        for (i = 0; i < font_color_change.length; i++) {
            font_color_change[i].style.color = "black";
        }
        for ( i = 0; i < bg_color_change.length; i++) {
            bg_color_change[i].style.backgroundColor = "white"
           
        }
        for (let i = 0; i < bg_gray.length; i++) {
            bg_gray[i].style.backgroundColor = "#8080801f"
            
        }
        day_night_light.src = "http://127.0.0.1:5500/mooon.png";
        container.classList.toggle("day-mode-cont")
        container.classList.remove("night-mode-cont")
        

    }
    else {

        day_night_light.src = "http://127.0.0.1:5500/day-mode(1).png";
    
        for (i = 0; i < font_color_change.length; i++) {
            font_color_change[i].style.color = "white";
        }
        for ( i = 0; i < bg_color_change.length; i++) {
            bg_color_change[i].style.backgroundColor = " rgb(36 38 39)"

        }
        container.classList.toggle("night-mode-cont")
        container.classList.remove("day-mode-cont")
        for (let i = 0; i < bg_gray.length; i++) {
            bg_gray[i].style.backgroundColor = "white"
            
        }
    }
});


