DomReady.ready(() => {

  const html = document.getElementsByTagName('html')

  const boxRicardo = document.getElementById("js-square-ricardo")
  const characterRicardo = document.getElementById("js-character-ricardo")
  const tagRicardo = document.getElementById('js-tag-ricardo')

  const boxRoberto = document.getElementById("js-square-roberto")
  const characterRoberto = document.getElementById("js-character-roberto")
  const tagRoberto = document.getElementById('js-tag-roberto')

  if(boxRicardo !== null && boxRoberto !== null) {
  
    //add character animation classes
    setTimeout(() => {
      document.getElementById('js-title-character-select').classList.remove('invisible')
      //document.getElementById('js-title-character-select').classList.add('fade-in')
    },400)

    setTimeout(() => {
      document.querySelector(".selection-area").classList.remove('invisible')
    },800)

    setTimeout(() => {
      document.getElementById('js-character-ricardo').classList.add('fade-in-right')
      document.getElementById('js-character-roberto').classList.add('fade-in-left')
    },1200)

    setTimeout(() => {
      document.getElementById('js-character-ricardo').classList.add("is-animated");
      document.getElementById('js-character-roberto').classList.add("is-animated");

      document.getElementById('js-character-ricardo-name').classList.remove('invisible')
      document.getElementById('js-character-roberto-name').classList.remove('invisible')
    },1400)

    setTimeout(() => {
      document.querySelector('.about').classList.remove('invisible')

      html[0].addEventListener("keydown", function(event) {
        if (event.which == 37){ //left - ricardo
          boxRicardo.classList.remove("is-active");
          characterRicardo.classList.remove("is-active")
          tagRicardo.classList.add('invisible')

          boxRoberto.classList.add("is-active")
          characterRoberto.classList.add("is-active")
          tagRoberto.classList.remove('invisible')
          
        }else if (event.which == 39) { //rigth - roberto
          boxRoberto.classList.remove("is-active");
          characterRoberto.classList.remove("is-active")
          tagRoberto.classList.add('invisible')

          boxRicardo.classList.add("is-active");
          characterRicardo.classList.add("is-active") 
          tagRicardo.classList.remove('invisible')
        }
        
        if(event.which == 13){
          const activeRicardo = document.getElementById("js-square-ricardo").classList.contains("is-active")
          const activeRoberto = document.getElementById("js-square-roberto").classList.contains("is-active")

          if(activeRicardo || activeRoberto)
            //{{app('translator')->getLocale()}}/portfolio/ricardo-hofstetter-dias

            var lang = 'pt'
            if(window.location.href.indexOf('/pt') != -1){
              lang = 'pt'
            }else{
              lang = 'en'
            }

            window.location.href = lang + "/portfolio/" + (activeRicardo ? "ricardo" : "roberto") + "-hofstetter-dias"
        }
      })

      boxRicardo.addEventListener("mouseover", () => {
        document.getElementById('js-tag-ricardo').classList.remove('invisible')
        document.getElementById('js-character-ricardo').classList.add('is-active')
      })

      boxRicardo.addEventListener("mouseleave", () => { 
        document.getElementById('js-tag-ricardo').classList.add('invisible')
        document.getElementById('js-character-ricardo').classList.remove('is-active')
      })

      boxRoberto.addEventListener("mouseover", () => { 
        document.getElementById('js-tag-roberto').classList.remove('invisible')
        document.getElementById('js-character-roberto').classList.add('is-active')
      })

      boxRoberto.addEventListener("mouseleave", () => { 
        document.getElementById('js-tag-roberto').classList.add('invisible')
        document.getElementById('js-character-roberto').classList.remove('is-active')
      })

    },1550)        
  }
})

if(document.getElementById('home') != null){    
    $(document).ready(function(){
      $('#credits').html('"Cool Adventure Intro" by Eric Matyas www.soundimage.org');      
      $("#jquery_jplayer_1").jPlayer("destroy");
      $("#jquery_jplayer_1").jPlayer({    
          cssSelectorAncestor: "#jp_container_1",
          useStateClassSkin: true,
          autoBlur: false,
          smoothPlayBar: true,
          keyEnabled: false,
          remainingDuration: false,
          toggleDuration: false,
          loop:true,
          preload: "auto",
          ready: function (e) {
              mediaStatus = $(this).jPlayer("setMedia", {
                  title: "bg",
                  mp3: "/audios/mp3/Cool-Adventure-Intro.mp3"            
              }); // Attempts to Auto-Play the media;            
          },
          swfPath: "/js",
          supplied: "mp3",
          loadeddata: function(e){            
              
              setTimeout(function() {
                  $("#jquery_jplayer_1").jPlayer("pause").jPlayer("volume", 0.15);
                  $('#preloader').fadeOut(function(){
                    $('html,body').css('overflow',"auto");
                  });                  
              }, 500);              
          }        
      });
    });
  }