var listItems = document.getElementsByClassName('list-menu-item');
var characterContents  = document.getElementsByClassName('character-text-content');
var menu = document.querySelectorAll(".character-menu")[0];

var toggles = document.querySelectorAll(".c-hamburger");

for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
};

//add event listener click to all menu items
for(i = 0; i < listItems.length; i++) {
    listItems[i].addEventListener('click', function(){changeItem(this)}, false);
}

//set menu item to active on click and show its respective div on the rigth
function changeItem(el){    
    //$("#jquery_jplayer_menu_hover").jPlayer("play");
    setActiveItemMenuRight(el);
    setVisibleContentByElementID(el);    

    (toggles[0].classList.contains("is-active") === true) ? toggles[0].classList.remove("is-active") : toggles[0].classList.add("is-active");
    (menu.classList.contains("is-active") === true) ? menu.classList.remove("is-active") : menu.classList.add("is-active");
    
    //só vai direto pros items do textos no click se for mobile, pra facilitar a leitura
    if(window.outerWidth <= 700){
        setTimeout(function() {
            document.getElementsByClassName('character-text')[0].scrollIntoView();
        }, 100);
    }
}

//remove item active from all menu item then set the clicked menu item to active
function setActiveItemMenuRight(el){
    for(i = 0; i < listItems.length; i++) {
        listItems[i].classList.remove("active");
    }
    el.classList.add("active");
}

//remove visible class from all character text then set the clicked menu item to visible
function setVisibleContentByElementID(el){
    var characterContent = document.getElementById('character-'+ el.children[0].getAttribute('id'));  
    for(i = 0; i < characterContents.length; i++) {
        characterContents[i].classList.remove("visible");
    }
    characterContent.classList.add('visible');
}

function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
        e.preventDefault();
        (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
        (menu.classList.contains("is-active") === true) ? menu.classList.remove("is-active") : menu.classList.add("is-active");
    });
}

var msgError = document.getElementById('msg-error');
var msgSuccess = document.getElementById('msg-success');

if(msgSuccess != null || msgError != null) {         
    setActiveItemMenuRight(document.getElementById('contacts').parentElement);

    for(i = 0; i < characterContents.length; i++) {
        characterContents[i].classList.remove("visible");
    }
    document.getElementById('character-contacts').classList.add('visible');   

    setTimeout(function() {
        document.getElementsByClassName('alert')[0].scrollIntoView();
    }, 100);         

}

function scrollIntoView(eleID) {
   var e = document.getElementById(eleID);
   if (!!e && e.scrollIntoView) {
       e.scrollIntoView();
   }
}

if(document.getElementById('profile') != null){
    $(document).ready(function(){
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            title: "bg",
            mp3: "/audios/mp3/adventurers.mp3"            
          }).jPlayer("pause").jPlayer("volume", 0.15); // Attempts to Auto-Play the media;
        },
        cssSelectorAncestor: "#jp_container_1",
        swfPath: "/js",
        supplied: "mp3",
        useStateClassSkin: true,
        autoBlur: false,
        smoothPlayBar: true,
        keyEnabled: false,
        remainingDuration: false,
        toggleDuration: false,
        loop:true
      });

      $("#jquery_jplayer_menu_hover").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            title: "hover",
            mp3: "/audios/mp3/hover_sound.mp3"            
          }).jPlayer("volume", 0.15); // Attempts to Auto-Play the media;
        },        
        cssSelectorAncestor: "#jquery_jplayer_menu_hover_container",
        swfPath: "/js",
        supplied: "mp3",
        useStateClassSkin: false,
        autoBlur: false,
        smoothPlayBar: false,
        keyEnabled: false,
        remainingDuration: false,
        toggleDuration: false,
        loop: false,
        preload: "auto"
      });

      $('.list-menu li').mouseenter(function(){
          $("#jquery_jplayer_menu_hover").jPlayer("volume", 0.15).jPlayer("play");
      }).mouseout(function(){
          //$("#jquery_jplayer_menu_hover").jPlayer("stop");
      });
    });
}