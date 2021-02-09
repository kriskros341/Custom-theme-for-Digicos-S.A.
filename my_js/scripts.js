const mobile_hbgr = document.getElementById("mobile_hbgr")
const mobile_menu = document.getElementById("mobile_menu")
const blackbox = document.getElementById("blackbox")
const loading_placeholder = document.getElementById("loading_placeholder")
const test = "fd"
const mobile_menu_click_handler = () => {
  console.log(mobile_hbgr.closest("header").classList)
  if(mobile_hbgr.closest("header").classList.contains('animate_hbgr')){
    mobile_hbgr.closest("header").classList.toggle('animate_hbgr')
    mobile_hbgr.closest("header").classList.toggle('unanimate_hbgr')
  } else if(mobile_hbgr.closest("header").classList.contains('unanimate_hbgr')) {
    mobile_hbgr.closest("header").classList.toggle('unanimate_hbgr')
    mobile_hbgr.closest("header").classList.toggle('animate_hbgr')
  } else {
    mobile_hbgr.closest("header").classList.toggle('animate_hbgr')

  }
  blackbox.classList.toggle('invisible')
  console.dir(mobile_menu)
}


const hide_placeholder = () => {
  loading_placeholder.classList.toggle("invisible")
  console.log("done!")
}
function hide_placeholder_handler() {
  loading_placeholder.style['opacity'] = 0
  setTimeout(hide_placeholder, 1000)
}
document.addEventListener("DOMContentLoaded", () => {
  setTimeout(hide_placeholder_handler, 100)
});
blackbox.addEventListener('click', mobile_menu_click_handler)
mobile_menu.addEventListener('click', mobile_menu_click_handler)
mobile_hbgr.addEventListener('click', mobile_menu_click_handler)
