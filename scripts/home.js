const faqs = document.querySelectorAll(".faq");
if(document.querySelector(".prof-img")!==null){
    const prof_btn=document.querySelector(".prof-img");
}
if(document.querySelector(".dropdown-container")!==null){
    const dropdown=document.querySelector(".dropdown-container");
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
