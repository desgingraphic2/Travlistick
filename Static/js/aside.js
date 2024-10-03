var aside = document.querySelector("#aside");
var bar = document.querySelector("#asidebar");
var cross = document.querySelector("#cross");   

window.addEventListener("scroll", (e) => {
    let scrolltop = window.scrollY
    // console.log(scrolltop);
    if (scrolltop > 3800) {
        aside.classList.toggle("close");
    }
})

bar.addEventListener("click" , (e)=>{
    // console.log("open");
    aside.classList.toggle("close");
    
})

cross.addEventListener("click" , (e)=>{
    // console.log("cross");
    aside.classList.remove("close");
    
})






