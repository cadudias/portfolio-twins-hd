const html = document.getElementsByTagName('html')

const boxRicardo = document.getElementById("js-square-ricardo")
const characterRicardo = document.getElementById("js-character-ricardo")

const boxRoberto = document.getElementById("js-square-roberto")
const characterRoberto = document.getElementById("js-character-roberto")

if(boxRicardo !== null && boxRoberto !== null) {

  html[0].addEventListener("keydown", function(event) {
      if (event.which == 37){ //left
        boxRoberto.classList.remove("is-active");
        characterRoberto.classList.remove("is-active");

        boxRicardo.classList.add("is-active");
        characterRicardo.classList.add("is-active")
      }else if (event.which == 39) { //rigth
        boxRicardo.classList.remove("is-active");
        characterRicardo.classList.remove("is-active");

        boxRoberto.classList.add("is-active");
        characterRoberto.classList.add("is-active")
      }
      
      if(event.which == 13){
        const activeRicardo = document.getElementById("js-square-ricardo").classList.contains("is-active")
        const activeRoberto = document.getElementById("js-square-roberto").classList.contains("is-active")

        if(activeRicardo || activeRoberto)
          window.location.href = "/" + (activeRicardo ? "ricardo" : "roberto")
      }
    })

  boxRicardo.addEventListener("mouseover", () => { 
    document.getElementById('js-character-ricardo').classList.add('is-active')
  })

    boxRicardo.addEventListener("mouseleave", () => { 
    document.getElementById('js-character-ricardo').classList.remove('is-active')
  })

    boxRoberto.addEventListener("mouseover", () => { 
    document.getElementById('js-character-roberto').classList.add('is-active')
  })

    boxRoberto.addEventListener("mouseleave", () => { 
    document.getElementById('js-character-roberto').classList.remove('is-active')
  })

  DomReady.ready(() => {
    //add character animation classes
    setTimeout(() => {
      document.getElementById('js-title-character-select').classList.remove('invisible')
      //document.getElementById('js-title-character-select').classList.add('fade-in')
    },400)

    setTimeout(() => {
      document.querySelector(".selection-area").classList.remove('invisible')
    },1000)

    setTimeout(() => {
      document.getElementById('js-character-ricardo').classList.add('fade-in-left')
      document.getElementById('js-character-roberto').classList.add('fade-in-right')
    },1600)

    setTimeout(() => {
      document.getElementById('js-character-ricardo').classList.add("is-animated");
      document.getElementById('js-character-roberto').classList.add("is-animated");

      document.getElementById('js-character-ricardo-name').classList.remove('invisible')
      document.getElementById('js-character-roberto-name').classList.remove('invisible')

      
      //document.getElementById('js-character-ricardo-name').classList.add('fade-in-left')
      //document.getElementById('js-character-roberto-name').classList.add('fade-in-right')
    },1900)

    setTimeout(() => {
      document.querySelector('.about').classList.remove('invisible')
    },2100)
  })
}