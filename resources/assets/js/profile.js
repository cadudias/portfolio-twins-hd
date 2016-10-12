var listItems = document.getElementsByClassName('list-menu-item');
var characterContents  = document.getElementsByClassName('character-text-content');

//add event listener click to all menu items
for(i = 0; i < listItems.length; i++) {
    listItems[i].addEventListener('click', function(){changeItem(this)}, false);
}

//set menu item to active on click and show its respective div on the rigth
function changeItem(el){    
    setActiveItemMenuRight(el);
    setVisibleContentByElementID(el);    
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

//contact

