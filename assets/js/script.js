
function onEntry(entry) {
  entry.forEach((change) => {
      if (change.isIntersecting) {
          const elementsToShow =
              change.target.querySelectorAll(".show-animation");
          let delay = 0;
          elementsToShow.forEach((el) => {
              setTimeout(() => el.classList.add("element-show"), delay);
              delay += 200;
          });
      }
  });
}

let options = { threshold: [0.1] };
let observer = new IntersectionObserver(onEntry, options);
let rows = document.querySelectorAll(".animation-row");
for (let row of rows) {
    observer.observe(row);
}

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
  const block_to_open = document.querySelectorAll('#drop-down-block')

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

