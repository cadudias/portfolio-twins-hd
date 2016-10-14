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
    setActiveItemMenuRight(el);
    setVisibleContentByElementID(el);    

    (toggles[0].classList.contains("is-active") === true) ? toggles[0].classList.remove("is-active") : toggles[0].classList.add("is-active");
    (menu.classList.contains("is-active") === true) ? menu.classList.remove("is-active") : menu.classList.add("is-active");
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

