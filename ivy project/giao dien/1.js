// .......menu item......
const toP = document.querySelector(".top")
window.addEventListener("scroll",function(){
    const x = this.pageYOffset + window.pageYOffset;
    if(x>1){this.toP.classList.add("active")}
    else{
        this.toP.classList.remove("active")
    }
})

// ........menu aliderbar cartegory....... 
const itemsliderbar = document.querySelectorAll(".cartegory-left-li")
itemsliderbar.forEach(function(menu,index){
    menu.addEventListener("click", function(){
        menu.classList.toggle("block")
    })
})
// ......product.............
const baoquan = document.querySelector(".baoquan")
const chitiet = document.querySelector(".chitiet")
if(baoquan){
    baoquan.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block"
    })
}
if(chitiet){
    baoquan.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none"
    })
}
