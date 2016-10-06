var html = document.getElementsByTagName('html')

var boxRicardo = document.getElementById("js-square-ricardo")
var characterRicardo = document.getElementById("js-character-ricardo")

var boxRoberto = document.getElementById("js-square-roberto")
var characterRoberto = document.getElementById("js-character-roberto")

 html[0].addEventListener("keydown", function(event) {
    if (event.which == 37){ //left
      boxRoberto.className = 'square three columns'
      boxRicardo.className = 'square three columns is-active'

      characterRoberto.className = 'character five columns'
      characterRicardo.className = 'character five columns is-active'
    }else if (event.which == 39) { //rigth
      boxRicardo.className = 'square three columns'
      boxRoberto.className = 'square three columns is-active'

      characterRicardo.className = 'character five columns'
      characterRoberto.className = 'character five columns is-active'
    }
    
    if(event.which == 13){
      var activeRicardo = document.getElementById("js-square-ricardo").classList.contains("is-active")
      var activeRoberto = document.getElementById("js-square-roberto").classList.contains("is-active")

      if(activeRicardo || activeRoberto)
        window.location.href = "/" + (activeRicardo ? "ricardo" : "roberto")
    }
  })