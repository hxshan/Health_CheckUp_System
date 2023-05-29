const faqs = document.querySelectorAll(".faq");
console.log(document.querySelector(".dropdown-container"));
if(document.querySelector(".prof-img")!==null){
    var prof_btn=document.querySelector(".prof-img");
}

console.log(document.querySelector(".dropdown-container"));
if(document.querySelector(".dropdown-container")!==null){
    var dropdown=document.querySelector(".dropdown-container");
    prof_btn.addEventListener("click",()=>{
        if (dropdown.classList.contains("closed")){
            dropdown.classList.remove("closed");
        }else{
            dropdown.classList.add("closed");
        }
    })
}





faqs.forEach((faq) => {
    faq.addEventListener("click", () =>{
        faq.classList.toggle("active");
    });
});
