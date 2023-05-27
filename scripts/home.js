const faqs = document.querySelectorAll(".faq");
const prof_btn=document.querySelector(".prof-img");
const dropdown=document.querySelector(".dropdown-container");



prof_btn.addEventListener("click",()=>{
    if (dropdown.classList.contains("closed")){
        dropdown.classList.remove("closed");
    }else{
        dropdown.classList.add("closed");
    }

})

faqs.forEach((faq) => {
    faq.addEventListener("click", () =>{
        faq.classList.toggle("active");
    });
});
