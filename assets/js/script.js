function burger_menu(){
    const menu = document.querySelector("#mobile_menu")
    const burger = document.querySelector("#burger_btn")
    menu.style.display = 'none'
    burger.addEventListener('click', ()=>{
        if(menu.style.display == 'flex'){
          menu.style.display = 'none'
        }
        else{
          menu.style.display = 'flex'
        }
    })
}

burger_menu()