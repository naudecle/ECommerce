//Carousel


const slider1 = document.getElementById("slide_1");
const slider2 = document.getElementById("slide_2");


if(slider1){
    new Glide(slider1, {
        type: "carousel",
        startAt: 0,
        autoplay: 3000,
        hoverpause: true,
        perView: 1,
        animationDuration: 800,
        animationTimingFunc: "linear",
    }).mount();
}
if(slider2){
    new Glide(slider2, {
        type: "carousel",
        startAt: 0,
        hoverpause: true,
        perView: 4,
        animationDuration: 800,
        animationTimingFunc: "ease-in-out",
        breakpoints:{
            1200:{
                perview: 3,
            },
            768:{
                perview:2,
            },
        },
    }).mount();
}
//Animation Scrolling
AOS.init();