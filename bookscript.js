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

let togglebtn=document.getElementById("toggle-btn");
let navlink=document.getElementById("navlinks");
togglebtn.addEventListener('click',()=>{
    navlink.classList.toggle('active');
});

window.onload=()=>{
    var today = new Date();
    var year = today.getFullYear();
    var month = today.getMonth() + 1;
    var day = today.getDate();
    if(month<10){
        month='0'+month;
    }
    if(day<10){
        day='0'+day;
    }
    
    var maxDate = year + '-' + month + '-' + day;

    var inputDate = document.getElementById('date');
    inputDate.setAttribute('min', maxDate);
}

var detailsForm=document.getElementById("detailsform");

function addTraveller(){
    var nameBox=document.createElement("input");
    var ageBox=document.createElement("input");
    nameBox.type="text";
    nameBox.name="tname[]";
    nameBox.placeholder="Add Traveller";
    nameBox.className="inputBox";
    ageBox.type="text";
    ageBox.name="tage[]";
    ageBox.placeholder="Add Traveller Age";
    ageBox.className="inputBox";
    detailsForm.appendChild(nameBox);
    detailsForm.appendChild(ageBox);
}
