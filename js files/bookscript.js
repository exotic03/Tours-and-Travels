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
var btn=document.getElementById("btn");

function addTraveller(){
    var nameBox=document.createElement("input");
    var ageBox=document.createElement("input");
    nameBox.type="text";
    nameBox.name="tname";
    nameBox.placeholder="Add Traveller";
    nameBox.className="inputBox";
    nameBox.id="tname";
    ageBox.type="text";
    ageBox.name="tage";
    ageBox.placeholder="Add Traveller Age";
    ageBox.className="inputBox";
    ageBox.id="tage";
    btn.parentNode.insertBefore(nameBox,btn);
    btn.parentNode.insertBefore(ageBox,btn);
}

function sendDetails(){
    var quantity=$('#quantity').val();
    var date=$('#date').val();
    var tnumber=$('#tnum').val();
    
    var inputsname=document.getElementsByName("tname");
    var tnameArray=[];

    for(var i=0;i<inputsname.length;i++){
        tnameArray.push(inputsname[i].value);
    }

    var inputsage=document.getElementsByName("tage");
    var tageArray=[];

    for(var j=0;j<inputsage.length;j++){
        tageArray.push(inputsage[j].value);
    }

    var tname=tnameArray.join(", ");
    var tage=tageArray.join(", ");
    
    var formData=new FormData();
    formData.append('tname',tname);
    formData.append('tage',tage);
    formData.append('quantity',quantity);
    formData.append('date',date);
    formData.append('tnumber',tnumber);

    var request=new XMLHttpRequest();
    request.onreadystatechange=()=>{
        if(request.readyState===XMLHttpRequest.DONE){
            if(request.status==200){
                console.log(request.responseText);
            }
        }
    };
    request.open("POST","travellerdetails.php",true);
    request.send(formData);
}
