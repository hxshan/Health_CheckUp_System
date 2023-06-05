const firstname=document.querySelector("#firstname");
const lastname=document.querySelector("#lastname");
const address=document.querySelector("#address");
const DOB=document.querySelector("#date");
const gender=document.querySelector("#gender");
const next_btn=document.querySelector(".next");
const section1=document.querySelector(".section1");
const section2=document.querySelector(".section2");
const error_msg = document.querySelector(".error-msg");

function Emptyinputs(){
    if(firstname.value ==="" || lastname.value ===""){
        return true;
    }else{
        return false;
    }
}
//needs fixxing
function ValidateName(){
    if((/^[a-zA-Z]+$/).test(firstname.value) || (/^[a-zA-Z]+$/).test(lastname.value)){
        return true;
    }else{
        return false;
    }
}

next_btn.addEventListener("click",(e)=>{
    e.preventDefault()
    error_msg.innerText="ALL FIELDS SHOUD BE FILLED!!"
    if(!Emptyinputs()){
        if(!error_msg.classList.contains("hidden"))
        {
            error_msg.classList.add("hidden")
        }
       if(!ValidateName()){
        error_msg.innerText="Name can only contain letters."
        error_msg.classList.remove("hidden")
       }
       else{
        section1.classList.add("hidden")
        section2.classList.remove("hidden")
       }
    }
    else{
        error_msg.classList.remove("hidden")
    }
})
