gsap.to("nav",{
    backgroundColor:"#e2eafc",
    duration:0.5,
    scrollTrigger:{
        trigger:"nav",
        scroller:"body",
        markers:true,
        start:"top -5%",
        end:"top -6%",
        scrub:2
    }
});