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

let uname=document.getElementById("name");
let email=document.getElementById("email");
let phone=document.getElementById("phone");
let pass=document.getElementById("pass");
let cpass=document.getElementById("cpass");

let nerror=document.getElementById("nerror");
let mailerror=document.getElementById("mailerror");
let phoneerror=document.getElementById("phoneerror");
let passerror=document.getElementById("passerror");
let cpasserror=document.getElementById("cpasserror");
let submiterror=document.getElementById("submiterror");

const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};

function validateName(){
    if(uname.value.trim()==""){
        nerror.innerHTML="Name can't be empty";
        nerror.style.color="red";
        return false;
    }
    else if(!uname.value.trim().match(/^[a-zA-Z]+ [a-zA-Z]+$/)){
        nerror.innerHTML="Please write full name";
        nerror.style.color="red";
        return false;
    }else{
        nerror.innerHTML=`<i class="fa-regular fa-circle-check"></i>`;
        nerror.style.color="green";
        return true;
    }
}

function validateEmail(){
    if(email.value.trim()==""){
        mailerror.innerHTML="Email can't be empty";
        mailerror.style.color="red";
        return false;
    }
    else if(!email.value.trim().match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        mailerror.innerHTML="Email is invalid";
        mailerror.style.color="red";
        return false;
    }else{
        mailerror.innerHTML=`<i class="fa-regular fa-circle-check"></i>`;
        mailerror.style.color="green";
        return true;
    }
}

function validatePhone(){
    if(phone.value.trim()==""){
        phoneerror.innerHTML="Phone Number can't be empty";
        phoneerror.style.color="red";
        return false;
    }
    else if(phone.value.trim().length<10 || phone.value.trim().length>10){
        phoneerror.innerHTML="Enter Valid Phone Number";
        phoneerror.style.color="red";
        return false;
    }else{
        usererror.innerHTML=`<i class="fa-regular fa-circle-check"></i>`;
        usererror.style.color="green";
        return true;
    }
}

function validatePassword(){
    if(pass.value.trim()==""){
        passerror.innerHTML="Password can't be empty";
        passerror.style.color="red";
        return false;
    }
    else if(!isPasswordSecure(pass.value.trim())){
        passerror.innerHTML="Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*)";
        passerror.style.color="red";
        return false;
    }else{
        passerror.innerHTML=`<i class="fa-regular fa-circle-check"></i>`;
        passerror.style.color="green";
        return true;
    }
}

function validateForm(){
    if(!validateName() || !validateEmail() || !validatePhone() || !validatePassword()){
        if(pass.value.trim()===cpass.value.trim()){
            cpasserror.innerHTML="Password not match";
            cpasserror.style.color="red";
            return false;
        }
        submiterror.innerHTML="Please fill all the fields";
        submiterror.style.color="red";
        setTimeout(()=>{
            submiterror.style.display="none";
        },3000);
        return false;
    }
    else{
        return true;
    }
}
