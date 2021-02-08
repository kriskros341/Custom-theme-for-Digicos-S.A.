const mobile_hbgr = document.getElementById("mobile_hbgr")
const mobile_menu = document.getElementById("mobile_menu")
const blackbox = document.getElementById("blackbox")
const test = "fd"
const mobile_menu_click_handler = () => {
  blackbox.classList.toggle('invisible')
  mobile_menu.classList.toggle('invisible')
  console.dir(mobile_menu)
}

blackbox.addEventListener('click', mobile_menu_click_handler)
mobile_hbgr.addEventListener('click', mobile_menu_click_handler)
