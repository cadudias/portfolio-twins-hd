var html = document.getElementsByTagName('html')

var boxRicardo = document.getElementById("js-square-ricardo")
var characterRicardo = document.getElementById("js-character-ricardo")

var boxRoberto = document.getElementById("js-square-roberto")
var characterRoberto = document.getElementById("js-character-roberto")

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
      var activeRicardo = document.getElementById("js-square-ricardo").classList.contains("is-active")
      var activeRoberto = document.getElementById("js-square-roberto").classList.contains("is-active")

      if(activeRicardo || activeRoberto)
        window.location.href = "/" + (activeRicardo ? "ricardo" : "roberto")
    }
  })