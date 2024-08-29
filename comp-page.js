let add_new_comp = document.getElementById("add-comp");
let add_comp_interface= document.querySelector(".add-comp-interface");
let brightness = document.querySelectorAll('.bri-ness');
let close_btn = document.querySelector(".close-btn");
let table_2 = document.getElementById("t2");

add_new_comp.addEventListener("click",()=>{
add_comp_interface.classList.toggle("disp-none");
for (let i = 0; i < brightness.length; i++) {
brightness[i].classList.toggle("focus-change");
}
});
close_btn.addEventListener("click",()=>{
    add_comp_interface.classList.toggle("disp-none");
    for (let i = 0; i < brightness.length; i++) {
        brightness[i].classList.toggle("focus-change");
        }
})


