window.addEventListener("load", function(){
    let body = document.querySelector("body");
    
    const loader = document.querySelector('.loader');
    if(loader){
        body.classList.add("lock");
        setTimeout(() => {
            loader.classList.remove('active');
            body.classList.remove("lock");
        }, 300);

        const allHdtl = document.querySelectorAll(".hero-detail .spaced");
        const hstar = document.querySelector("header .star");
        allHdtl.forEach(dtl => {
            this.setTimeout(function(){
                dtl.classList.add("aos-animate");
            },1000)
            this.setTimeout(function(){
                dtl.removeAttribute("data-aos");
            },4000)
        })
        this.setTimeout(function(){
            hstar.removeAttribute("data-aos");
        },4000)
    }

    
    //Init AOS
    AOS.init({
        duration: 2000
    });
})