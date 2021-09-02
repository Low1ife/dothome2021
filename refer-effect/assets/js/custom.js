{

    //code view
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('pre code').forEach((el) => {
            hljs.highlightElement(el);
        });
    });


    // Modal button animation
    document.querySelector(".info button").addEventListener("click" , function(){
        document.querySelector("#cont-wrap").classList.add("show");
        document.querySelector("#cont-wrap").classList.remove("hide");
    });
 
    document.querySelector(".cont-box button").addEventListener("click" , function(){
        document.querySelector("#cont-wrap").classList.add("hide");
    });



    // 소스보기 탭메뉴
    const tabView = document.querySelectorAll(".view-title ul li")
    const tabCovi = document.querySelectorAll(".view-cont > div")

    tabView.forEach((el , index) => {
        el.addEventListener("click" , function(){
            
            tabView.forEach(elem => {
                elem.classList.remove("active");
        });
        el.classList.add("active");

        tabCovi.forEach(element => {
            element.style.display = "none";
        })
        tabCovi[index].style.display = "block";
        });
    });    
}