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
gsap.from(".c1",{
    delay:0.2,
    opacity:0,
    duration:1,
    x:60,
    scrollTrigger:{
        trigger:".c1",
        scroller:"body",
        start:"top 80%",
        end:"top 90%",
        scrub:2
    }
});
gsap.from(".c2",{
    delay:0.2,
    opacity:0,
    duration:1,
    x:-60,
    scrollTrigger:{
        trigger:".c2",
        scroller:"body",
        start:"top 80%",
        end:"top 90%",
        scrub:2
    }
});
gsap.from(".c3",{
    delay:0.2,
    opacity:0,
    duration:1,
    x:60,
    scrollTrigger:{
        trigger:".c3",
        scroller:"body",
        start:"top 80%",
        end:"top 90%",
        scrub:2
    }
});
gsap.from(".c4",{
    delay:0.2,
    opacity:0,
    duration:1,
    x:-60,
    scrollTrigger:{
        trigger:".c4",
        scroller:"body",
        start:"top 80%",
        end:"top 90%",
        scrub:2
    }
});
gsap.from(".c5",{
    delay:0.2,
    opacity:0,
    duration:1,
    x:60,
    scrollTrigger:{
        trigger:".c5",
        scroller:"body",
        start:"top 80%",
        end:"top 90%",
        scrub:2
    }
});
gsap.from(".c6",{
    delay:0.2,
    opacity:0,
    duration:1,
    x:-60,
    scrollTrigger:{
        trigger:".c6",
        scroller:"body",
        start:"top 80%",
        end:"top 90%",
        scrub:2
    }
});
gsap.from(".c7",{
    delay:0.2,
    opacity:0,
    duration:1,
    x:60,
    scrollTrigger:{
        trigger:".c7",
        scroller:"body",
        start:"top 80%",
        end:"top 90%",
        scrub:2
    }
});
let search=document.getElementById("search");
let as=document.getElementById("animatesearch");
search.addEventListener('click',()=>{
    as.remove();
});

const togglebtn=document.getElementById("toggle-btn");
const navlink=document.getElementById("navlinks");
togglebtn.addEventListener('click',()=>{
    navlink.classList.toggle('active');
});