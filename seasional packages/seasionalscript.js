gsap.to(".main-nav",{
    backgroundColor:"#ffffff",
    top: "2%",
    boxShadow:"1px 1px 5px #22223b",
    duration:0.3,
    scrollTrigger:{
        trigger:".main-nav",
        scroller:"body",
        start:"top -5%",
        end:"top -6%",
        scrub:2
    }
});
gsap.to(".links",{
    color:"#ff9500",
    duration:0.1,
    scrollTrigger:{
        trigger:".links",
        scroller:"body",
        start:"top -5%",
        end:"top -6%",
        scrub:2
    }
});
gsap.to(".pbtn",{
    color:"#fff",
    backgroundColor:"#d62828",
    border:"none",
    duration:0.1,
    scrollTrigger:{
        trigger:".pbtn",
        scroller:"body",
        start:"top -5%",
        end:"top -6%",
        scrub:2
    }
});
gsap.to(".sbtn",{
    color:"#fff",
    backgroundColor:"#f48c06",
    border:"none",
    duration:0.1,
    scrollTrigger:{
        trigger:".sbtn",
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