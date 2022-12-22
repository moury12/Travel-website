let searchbtn = document.querySelector('#search-btn');
let searchbar = document.querySelector('.search-bar-container');
let formbtn = document.querySelector('#login-btn');
let loginform = document.querySelector('.login-form-container');
let formclose = document.querySelector('#form-close');
const bar=document.getElementById('menu-bar');
const nav=document.getElementById('nav');
const close=document.getElementById('close');
let searchclose = document.querySelector('#closesearch');
if (bar) {
    bar.addEventListener('click',() => {
nav.classList.add('active');
    })
}
if (close) {
    close.addEventListener('click',() => {
nav.classList.remove('active');
    })
}

searchbtn.addEventListener('click',()=>{
  searchbar.classList.add('active');
})
closesearch.addEventListener('click',()=>{
    searchbar.classList.remove('active')
})
formbtn.addEventListener('click',()=>{
 loginform.classList.add('active');
 
});
formclose.addEventListener('click',()=>{
    loginform.classList.remove('active');
})

