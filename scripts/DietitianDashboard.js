var dashboard_btn = document.querySelector("#dashboard-btn");
var appointments_btn = document.querySelector("#appointments-btn");
var patient_btn = document.querySelector("#patient-btn");
var dashboard_con =document.querySelector(".dashboard-content");
var appointment_con =document.querySelector(".appoinment-content");
var patient_con =document.querySelector(".patient-content");


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
  if(!patient_con.classList.contains("hidden")){
    patient_con.classList.add("hidden")
  }

})

appointments_btn.addEventListener("click",()=>{
  
  if(!dashboard_con.classList.contains("hidden")){
    dashboard_con.classList.add("hidden");
  }
  if(!appointment_con.classList.contains(".hidden")){
    appointment_con.classList.remove("hidden")
  }
  if(!patient_con.classList.contains("hidden")){
    patient_con.classList.add("hidden")
  }
})


patient_btn.addEventListener("click",()=>{
  if(patient_con.classList.contains("hidden")){
    patient_con.classList.remove("hidden")
  }
  if(!dashboard_con.classList.contains("hidden")){
    dashboard_con.classList.add("hidden");
  }
  if(!appointment_con.classList.contains("hidden")){
    appointment_con.classList.add("hidden")
  }
 

})