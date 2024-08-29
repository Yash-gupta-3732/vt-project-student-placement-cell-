//javascript for the ui to add profile photo
let cam = document.querySelector(".camera");
let chooose_photo_ui = document.querySelector(".choose-photo-ui");
cam.addEventListener("click", () => {
    chooose_photo_ui.classList.toggle("disp-none");
});
//javascript to show or hide ui of skills, education , work and achievements.

let add_btn = Array.from(document.querySelectorAll(".add-btn"));
let skill_ui = document.querySelector(".add-skill-ui")
let education_ui = document.querySelector(".add-education-ui")
let achievement_ui = document.querySelector(".add-achievement-ui")
let work_showcase_ui = document.querySelector(".add-work-showcase-ui");
let close_btn=Array.from(document.querySelectorAll(".close-btn"));
let brightness = document.querySelectorAll('.bri-ness');
function focus_change() {
    for (let i = 0; i < brightness.length; i++) {
        brightness[i].classList.toggle("focus-change");
        }
}
add_btn.forEach((element) => {
    element.addEventListener("click", (e) => {
    if(e.target.id=='add-skill'){
skill_ui.classList.toggle("disp-none")
focus_change();
    }
    else if(e.target.id=='add-education'){
education_ui.classList.toggle("disp-none")
focus_change();
    }
    else if(e.target.id=='add-achievement'){
achievement_ui.classList.toggle("disp-none")
focus_change();
    }
    else if(e.target.id=='add-work-showcase'){
work_showcase_ui.classList.toggle("disp-none")
focus_change();
    }
    })
});
close_btn.forEach((element)=>{ 
    element.addEventListener("click",(e)=>{
        if(e.target.id=='close-skill' || e.target.id=='cls-skl-img'){
            skill_ui.classList.toggle("disp-none");
            focus_change();
                }
       else if(e.target.id=='close-education' || e.target.id=='cls-edu-img'){
            education_ui.classList.toggle("disp-none");
            focus_change();
                }
       else if(e.target.id=='close-work' || e.target.id=='cls-work-img'){
            work_showcase_ui.classList.toggle("disp-none");
            focus_change();
                }
       else if(e.target.id=='close-edit' || e.target.id=='cls-edit-img'){
            edit_profile_ui.classList.toggle("disp-none");
            focus_change();
                        }
})}
)

// show more functionality for the desciption. 
let more_text = document.querySelector(".more-text");
let more = document.querySelector(".more");
let show_all_skills=document.querySelector(".show-all-skills");
let skill_cont = document.querySelector(".skill-cont");
let show_all_education = document.querySelector(".show-all-education");
let edu_cont = document.querySelector(".edu-cont");

function show_more_show_less(a,b,c,d,e) {
    a.classList.toggle(`${b}`);
    if (e.innerHTML==`${c}`) {
       e.innerHTML=`${d}`;
    } 
    else{
       e.innerHTML=`${c}`;
    }
}
//where a-> a container or element in which we have to add show more functionality which is a variable.
//where b-> css class that contains the code more show more functionality.
//where c-> current inner html of the show-more btn which it is on condition check.
//where d-> it will containe the text or code to change the inner html of the show-more btn.
//where e-> var name of the show more btn.


more.addEventListener("click",()=>{
//   more_text.classList.toggle("desc-para");
//  if (more.innerHTML=='...show more') {
//     more.innerHTML='...show less'
//  } 
//  else{
//     more.innerHTML='...show more'
//  }
        show_more_show_less(more_text,'desc-para','...show more','...show less',more) //where more_text->variable and others are string.
        //all above multi line code is shortly done with the help of function
})


show_all_skills.addEventListener("click",()=>{
// skill_cont.classList.toggle("skill-cont-show-more");
// if (show_all_skills.innerHTML=='<p>Show all skills </p><img src="arrow-right.svg" alt="">') {
//     show_all_skills.innerHTML='<p>Show less skills </p><img src="arrow-right.svg" alt="">'
//  } 
//  else{
//     show_all_skills.innerHTML='<p>Show all skills </p><img src="arrow-right.svg" alt="">'
//  }
show_more_show_less(skill_cont,'skill-cont-show-more','<p>Show all skills </p><img src="arrow-right.svg" alt="">','<p>Show less skills </p><img src="arrow-right.svg" alt="">',show_all_skills);
})
//Quote->All smart worker once a hard worker
show_all_education.addEventListener("click",()=>{
    show_more_show_less(edu_cont,'edu-cont-show-more','<p>Show all educations</p><img src="arrow-right.svg" alt="">','<p>Show less educations </p><img src="arrow-right.svg" alt="">',show_all_education);
})

// edit/update profile.
 let edit_info = document.getElementById("edit-info");
 let edit_profile_ui= document.querySelector(".edit-profile-ui");
edit_info.addEventListener("click",(e)=>{
edit_profile_ui.classList.toggle("disp-none")
focus_change();
})

