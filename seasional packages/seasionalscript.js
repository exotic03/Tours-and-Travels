gsap.to("nav",{
    backgroundColor:"#b6ccfe",
    boxShadow:"1px 1px 5px #011627",
    duration:0.5,
    scrollTrigger:{
        trigger:"nav",
        scroller:"body",
        start:"top -5%",
        end:"top -6%",
        scrub:2
    }
});

let search=document.getElementById("search");
let as=document.getElementById("animatesearch");
search.addEventListener('click',()=>{
    as.remove();
});

let togglebtn=document.getElementById("toggle-btn");
let navlink=document.getElementById("navlinks");
togglebtn.addEventListener('click',()=>{
    navlink.classList.toggle('active');
});