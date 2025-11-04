const btnInscrire = document.getElementById("btnInscrire");
const form = document.getElementById("formInscription");

document.addEventListener("DOMContentLoaded",() =>{
    btnInscrire.addEventListener("click",()=>{
        if(form.classList.contains("active")){
            form.classList.remove("active");
        }else{
            form.classList.add("active");
        }
    })
})