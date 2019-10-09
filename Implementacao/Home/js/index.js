var intervalo;
var intervalo2;

function scrollDireita(){
  intervalo = setInterval(function(){ document.getElementById('scroller').scrollLeft += 1 }  , 5);
};
function scrollEsquerda(){
  intervalo = setInterval(function(){ document.getElementById('scroller').scrollLeft -= 1 }  , 5);
};
function clearScroll(){
  clearInterval(intervalo);
};

function scrollDireita2(){
  intervalo2 = setInterval(function(){ document.getElementById('scroller2').scrollLeft += 1 }  , 5);
};
function scrollEsquerda2(){
  intervalo2 = setInterval(function(){ document.getElementById('scroller2').scrollLeft -= 1 }  , 5);
};
function clearScroll2(){
  clearInterval(intervalo2);
};


