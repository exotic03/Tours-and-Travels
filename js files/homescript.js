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
gsap.from(".featured-section h3",{
    delay:0.9,
    opacity:0,
    y:80,
    duration:0.5,
    scrollTrigger:{
        trigger:".featured-section h3",
        scroller:"body",
        start:"top 80%",
        end:"top 90%",
        scrub:2
    }
});
gsap.from(".featured-section h2",{
    delay:1.2,
    opacity:0,
    y:90,
    duration:0.5,
    scrollTrigger:{
        trigger:".featured-section h2",
        scroller:"body",
        start:"top 80%",
        end:"top 90%",
        scrub:2
    }
});
gsap.from(".photo-grid",{
    delay:1.5,
    opacity:0,
    y:100,
    duration:0.5,
    scrollTrigger:{
        trigger:".photo-grid",
        scroller:"body",
        start:"top 80%",
        end:"top 90%",
        scrub:2
    }
});
gsap.from(".big-section",{
    opacity:0,
    scale:0,
    scrollTrigger:{
        trigger:".big-section",
        scroller:"body",
        start:"top 80%",
        end:"top 85%",
        scrub:2,
    }
});
gsap.from(".small-section",{
    opacity:0,
    scale:0,
    delay:1,
    scrollTrigger:{
        trigger:".small-section",
        scroller:"body",
        start:"top 80%",
        end:"top 85%",
        scrub:2,
    }
});
gsap.from(".package-heads",{
    opacity:0,
    y:90,
    duration:0.5,
    scrollTrigger:{
        trigger:".package-heads",
        scroller:"body",
        start:"top 80%",
        end:"top 85%",
        scrub:2,
    }
});
gsap.from(".cards",{
    opacity:0,
    scale:0,
    duration:0.5,
    scrollTrigger:{
        trigger:".cards",
        scroller:"body",
        start:"top 80%",
        end:"top 85%",
        scrub:2,
    }
});

let togglebtn=document.getElementById("toggle-btn");
let navlink=document.getElementById("navlinks");
togglebtn.addEventListener('click',()=>{
    navlink.classList.toggle('active');
});