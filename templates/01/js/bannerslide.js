function setPosition(id, position) {

var store = {

ram : {

top : 0,

left : 0,

right : 0,

bottom : 0

},

rom : {

top : null,

left : null,

right : null,

bottom : null

}

};



for (var i in position) {store.rom[i] = position[i];}

var element = document.getElementById(id);

for (i in store) {element[i] = store[i];}

element.rom.move = function() {

if (window.innerHeight) {

var topPage = window.pageYOffset;

var leftPage = window.pageXOffset;

var rightPage = leftPage + window.innerWidth - element.offsetWidth;

var bottomPage = topPage + window.innerHeight - element.offsetHeight;

}



else {

var topPage = document.body.scrollTop;

var leftPage = document.body.scrollLeft;

var rightPage = leftPage + document.body.clientWidth - element.offsetWidth;

var bottomPage = topPage + document.body.clientHeight - element.offsetHeight;

}



element.style.position = "absolute";

if (element.rom.top != null) {

element.ram.top += Math.round((topPage + element.rom.top - element.ram.top)/20);

element.style.top = element.ram.top;

}



if (element.rom.left != null) {

element.ram.left += Math.round((leftPage + element.rom.left - element.ram.left)/20);

element.style.left = element.ram.left;

}



if (element.rom.right != null) {

element.ram.right += Math.round((rightPage - element.rom.right - element.ram.right)/20);

element.style.left = element.ram.right;

}



if (element.rom.bottom != null) {

element.ram.bottom += Math.round((bottomPage - element.rom.bottom - element.ram.bottom)/20);

element.style.top = element.ram.bottom;

}



setTimeout("document.getElementById('"+element.id+"').rom.move()",10);

};



element.rom.move();

}



setPosition("code1k-right", {top: 20, right: 30});

setPosition("code1k-left", {top: 20, left: 30});