
  function handleResize() {
  var searchInput = document.querySelector('.search-input');
  var iconContainer = document.querySelector('.right');
  
  if (window.innerWidth < 450) {
    searchInput.style.display = 'block';
    iconContainer.style.display = 'flex';
    iconContainer.style.flexWrap = 'wrap';
  } else {
    searchInput.style.display = 'inline-block';
    iconContainer.style.display = 'flex';
    iconContainer.style.flexWrap = 'nowrap';
  }
}

window.addEventListener('resize', handleResize);
handleResize(); // Thực hiện kiểm tra ban đầu khi tải trang
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "5rem";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main2").style.marginLeft= "0";
}
function showSubmenu() {
  document.getElementById("sub-menu").style.display = "block";
}

function hideSubmenu() {
  document.getElementById("sub-menu").style.display = "none";
}
document.addEventListener("DOMContentLoaded", function(){
    // console.log("đã load");
    var doituongmenutrai=document.querySelector(".trai");
    var doituongmenuphai=document.querySelector(".phai");
      var trangthai="duoi110";
    window.addEventListener("scroll", function(){
        console.log(window.pageYOffset);
        if(window.pageYOffset>110){
            if(trangthai=="duoi110"){
                console.log("ok ");
                trangthai="tren110";
                 doituongmenutrai.classList.add("nholaitrai");
                doituongmenuphai.classList.add("nholaiphai");

            }
          }
            else if(window.pageYOffset<=110){
                if(trangthai="tren110"){
                doituongmenutrai.classList.remove("nholaitrai");
                doituongmenuphai.classList.remove("nholaiphai");
                trangthai="duoi110";
                }
            
        }

    })
})