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

function dropdown(){
  const open_btn = document.querySelectorAll('#btn-open-service')
  const block_to_open = document.querySelectorAll('.services-dropdown-block')

  let i = 0;
  for (let i = 0; i < open_btn.length;i++) {
    open_btn[i].addEventListener('click', ()=>{
      if(block_to_open[i].style.display == 'none'){
        block_to_open[i].style.display = 'grid'
        open_btn[i].style.transform = "rotate(0deg)"
      }
      else{
        block_to_open[i].style.display = 'none'
        open_btn[i].style.transform = "rotate(180deg)"
      }
    })
  }

}

dropdown()