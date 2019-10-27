$(function(){
    var MAX_SELECT = 3; // Máximo de 'input' selecionados
    
    $('input.checkbox_genero').on('change', function(){
      if( $(this).siblings(':checked').length >= MAX_SELECT ){
         this.checked = false;
      }
    });
  });