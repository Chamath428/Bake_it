const toggleButton  = document.getElementsByClassName('toggle-btn')[0];
const navbarLinks   = document.getElementsByClassName('navbar')[0];
const bars          = document.getElementsByClassName('bar');

toggleButton.addEventListener('click',()=>{
    navbarLinks.classList.toggle('active');
})

toggleButton.addEventListener('click',()=>{
    for (var i =0; i<bars.length;  i++) {
       bars[i].classList.toggle('active');
    }
    
})
toggleButton.addEventListener('click',()=>{
    toggleButton.classList.toggle('active');
})