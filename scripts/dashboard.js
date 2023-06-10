var dashboard_btn = document.querySelector("#dashboard-btn");
var appointments_btn = document.querySelector("#appointments-btn");
var dietplan_btn = document.querySelector("#dietplan-btn");



  var dashboard_con =document.querySelector(".dashboard-content");
  var appointment_con =document.querySelector(".appoinment-content");
  var dietplan_con =document.querySelector(".diet-plan-content");


dashboard_btn.addEventListener("click",()=>{
  
  if(dashboard_con.classList.contains("hidden")){
    dashboard_con.classList.remove("hidden");
  }
  if(!appointment_con.classList.contains("hidden")){
    appointment_con.classList.add("hidden")
  }
  if(!appointment_con.classList.contains("hidden")){
    appointment_con.classList.add("hidden")
  }
  if(!dietplan_con.classList.contains(".hidden")){
    dietplan_con.classList.add("hidden")
  }

})

appointments_btn.addEventListener("click",()=>{
  
  if(!dashboard_con.classList.contains("hidden")){
    dashboard_con.classList.add("hidden");
  }
  if(!appointment_con.classList.contains(".hidden")){
    appointment_con.classList.remove("hidden")
  }
  if(!dietplan_con.classList.contains(".hidden")){
    dietplan_con.classList.add("hidden")
  }
})


dietplan_btn.addEventListener("click",()=>{
  if(dietplan_con.classList.contains("hidden")){
    dietplan_con.classList.remove("hidden")
  }
  if(!dashboard_con.classList.contains("hidden")){
    dashboard_con.classList.add("hidden");
  }
  if(!appointment_con.classList.contains(".hidden")){
    appointment_con.classList.add("hidden")
  }
 

})