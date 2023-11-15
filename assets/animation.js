
gsap.from(".banner-png",{
    x:100,
    opacity:0,
    duration:2,
    delay:.5,
    overflow:'hidden'

})

gsap.from(".navbar",{
    y:100,
    opacity:0,
    duration:1,
    
})


gsap.from('.work  .workcontainer ,.bookingimg , .bookingheading',{

    opacity: 0,
    duration : 2,
    y :100,
    stagger : .2,
    scrollTrigger:{
        trigger : '.work',
        scroller : 'body'
    }
})

gsap.from(".washingheading, .wimg",{

    opacity: 0,
    duration : 1,
    y:-50,
    stagger : .2,
    scrollTrigger:{
        trigger : '.washing',
        scroller : 'body'
    }
})

gsap.from(".carpenterheadaer, .carpenterimg2,.carpenterimg3",{

    opacity: 0,
    duration : 2,
    y:-50,
    stagger : .2,
    scrollTrigger:{
        trigger : '.carpenter',
        scroller : 'body'
    }
})
gsap.from(".carpenteranim",{

    opacity: 0,
    duration : 2,
    x:-100,
    stagger : .2,
    scrollTrigger:{
        trigger : '.carpenter',
        scroller : 'body'
    }
})
gsap.from(".carpenteranim2",{

    opacity: 0,
    duration : 2,
    x:100,
    stagger : .2,
    scrollTrigger:{
        trigger : '.carpenter',
        scroller : 'body'
    }
})

gsap.from(".geyser",{

    opacity: 0,
    duration : 2,
    y:-50,
    stagger : .2,
    scrollTrigger:{
        trigger : '.geyser',
        scroller : 'body'
    }
})
gsap.from(".partneradvimg",{

    opacity: 0,
    duration : 1,
    delay:1,
    x:-100,
    stagger : .2,
    scrollTrigger:{
        trigger : '.partneradv',
        scroller : 'body'
    }
})
















$(document).ready(function(){
    $('.counter').counterUp({
      delay: 10,
      time: 1200
    });
  });


  