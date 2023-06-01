
var prof_btn=document.querySelector(".fulln");

var dropdown=document.querySelector(".dropdown-container");
prof_btn.addEventListener("click",()=>{
    if (dropdown.classList.contains("closed")){
        dropdown.classList.remove("closed");
    }else{
        dropdown.classList.add("closed");
    }
})  