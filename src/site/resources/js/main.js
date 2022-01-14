// Connect Animation
let links = document.querySelectorAll("nav a")
const connectLink = document.querySelector("[href='#connection']")
const connectPage = document.querySelector(".connect")
const pageContent = document.querySelector(".page-content")

links.forEach(element =>{
  element.addEventListener('click', function(){
    links.forEach(element => element.classList.remove("active"))
    this.classList.add("active")
    if(connectLink.getAttribute('class') === "active"){
      pageContent.classList.add('inactive')
      connectPage.classList.add('show')
    }
    else if(connectLink.getAttribute('class') !== "active"){
      pageContent.classList.remove('inactive')
      connectPage.classList.remove('show')
    }
  })
})