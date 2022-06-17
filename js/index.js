
// javascript functionlity can be created here.
let d = new Date();
document.getElementById('c_date').innerHTML = d.getFullYear();
document.getElementById('time').innerHTML =  d.toLocaleTimeString() + " :: " + d.toDateString();
document.getElementById('time').style.color ="#ff9470";

const scrollBtn = document.querySelector('#scrolltop');
scrollBtn.addEventListener('click', function(){
          window.scrollTo({
            top:0,
            left:0,
            behavior:"smooth"
          });
});
















