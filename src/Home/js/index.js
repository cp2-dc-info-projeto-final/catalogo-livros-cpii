// função JavaScript usada para fazer a rolagem dos itens dos sliders;
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


 
