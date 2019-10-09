var intervalo;

function scrollDireita(genero){
  intervalo = setInterval(function(){ document.getElementById("scroller-" + genero).scrollLeft += 3 }  , 5);
};
function scrollEsquerda(genero){
  intervalo = setInterval(function(){ document.getElementById('scroller-'+ genero).scrollLeft -= 3 }  , 5);
};
function clearScroll(){
  clearInterval(intervalo);
};

