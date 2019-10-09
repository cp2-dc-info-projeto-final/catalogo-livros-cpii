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

<<<<<<< HEAD
=======
var intervalo2;

>>>>>>> b7ebc88f4e9a92040d4dcac31ccf7c0603e85f5f
function scrollDireita2(){
  intervalo2 = setInterval(function(){ document.getElementById('scroller2').scrollLeft += 1 }  , 5);
};
function scrollEsquerda2(){
  intervalo2 = setInterval(function(){ document.getElementById('scroller2').scrollLeft -= 1 }  , 5);
};
function clearScroll2(){
  clearInterval(intervalo2);
};

<<<<<<< HEAD
=======
var intervalo3;

function scrollDireita3(){
  intervalo3 = setInterval(function(){ document.getElementById('scroller3').scrollLeft += 1 }  , 5);
};
function scrollEsquerda3(){
  intervalo3 = setInterval(function(){ document.getElementById('scroller3').scrollLeft -= 1 }  , 5);
};
function clearScroll3(){
  clearInterval(intervalo3);
};



>>>>>>> b7ebc88f4e9a92040d4dcac31ccf7c0603e85f5f

