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

let togglebtn=document.getElementById("toggle-btn");
let navlink=document.getElementById("navlinks");
togglebtn.addEventListener('click',()=>{
    navlink.classList.toggle('active');
});

let uname=document.getElementById("name");
let email=document.getElementById("email");
let username=document.getElementById("username");
let pass=document.getElementById("pass");
let cpass=document.getElementById("cpass");

let nerror=document.getElementById("nerror");
let mailerror=document.getElementById("mailerror");
let usererror=document.getElementById("usererror");
let passerror=document.getElementById("passerror");
let cpasserror=document.getElementById("cpasserror");

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

function validateUsername(){
    if(username.value.trim()==""){
        usererror.innerHTML="Username can't be empty";
        usererror.style.color="red";
        return false;
    }
    else if(username.value.trim().length<3){
        usererror.innerHTML="username must be atleast 3 characters";
        usererror.style.color="red";
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
    }
}