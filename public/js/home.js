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

 boxRicardo.addEventListener("mouseover", function(event) { 
   document.getElementById('js-character-ricardo').classList.add('is-active')
 })

  boxRicardo.addEventListener("mouseleave", function(event) { 
   document.getElementById('js-character-ricardo').classList.remove('is-active')
 })

  boxRoberto.addEventListener("mouseover", function(event) { 
   document.getElementById('js-character-roberto').classList.add('is-active')
 })

  boxRoberto.addEventListener("mouseleave", function(event) { 
   document.getElementById('js-character-roberto').classList.remove('is-active')
 })

DomReady.ready(function() {
  //TODO rodar no carregamento das imagens
  //add character animation classes
  setTimeout(function(){
    document.getElementById('js-title-character-select').classList.add('fade-in')
  },500)

  setTimeout(function(){
    

    document.getElementById('js-character-ricardo').classList.add('fade-in-left')
    document.getElementById('js-character-roberto').classList.add('fade-in-right')
  },1000)

  setTimeout(function(){
    document.getElementById('js-character-ricardo').classList.add("is-animated");
    document.getElementById('js-character-roberto').classList.add("is-animated");

    document.getElementById('js-character-ricardo-name').classList.add('fade-in-left')
    document.getElementById('js-character-roberto-name').classList.add('fade-in-right')
  },1400)
})