(function() {
    'use strict';
  
    angular
      .module('app', ['chart.js']);
  
    angular
      .module('app')
      .controller('GraficoController', GraficoController);
  
    GraficoController.$inject = [];
  
    function GraficoController() {
      var vm = this;
  
      vm.grafico = {};
      vm.grafico.descricoes = ['Carros', 'Motos', 'Lanchas'];
      vm.grafico.valores = [3, 1, 8];
      
    }
  })();