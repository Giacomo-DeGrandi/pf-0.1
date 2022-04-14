
    // MY HEADER MEDIA QUERIES

    let winHei = window.innerHeight

    window.addEventListener('DOMContentLoaded',function(){
        // my MQ
        const matchMobile = matchMedia("(max-width: 480px)")
        const matchTablet = matchMedia("(max-width: 768px)")
        const matchLaptop = matchMedia("(max-width: 1024px)")

        // select last head element to link css
        let link = document.querySelector("head > link:nth-child(8)")

        // mon menu et mon burger
        let burg = document.querySelector("body > div:nth-child(1) > header > div > div:nth-child(1) > button")
        let menu = document.querySelector("body > div:nth-child(1) > header > div > div.d-flex.flex-row.w-50.display-6.head-menu")

        burg.addEventListener('click',function (e){
            if (menu.classList.contains("head-menu")) {
                menu.classList.remove("head-menu");
                menu.classList.add('head-mq')
            } else {
                menu.classList.add("head-menu");
                menu.classList.remove('head-mq')
            }

        })






        // match size and link
        if( matchMobile.matches ){
            link.removeAttribute('href')
            link.setAttribute('href','divers/css/mobile.css')
            console.log('mobile')
        } else if ( matchTablet.matches ) {
            link.removeAttribute('href')
            link.setAttribute('href','divers/css/tablet.css')
            console.log('tablet')
        } else if ( matchLaptop.matches ) {
            link.removeAttribute('href')
            link.setAttribute('href','divers/css/laptop.css')
            console.log('laptop')
        } else {
            link.removeAttribute('href')
            link.setAttribute('href','divers/css/desktop.css')
            console.log('desktop')

        }
    })


