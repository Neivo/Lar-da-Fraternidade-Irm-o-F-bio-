
const img = document.getElementById('img-banner');
const subunder = document.getElementById("sub-under");

window.addEventListener('scroll', e =>{
    let y = window.pageYOffset;
    img.style = `transform: translateY(${y/2}px)`
    
    if(y != 0){
        subunder.style.background = "var(--site-color)"
    } else {
        subunder.style.background = "#00000000"
    }
    
})
