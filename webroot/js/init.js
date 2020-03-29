(function($){
  $(function(){
    $('.sidenav').sidenav();
      $(".dropdown-trigger").dropdown();
      $('.fixed-action-btn').floatingActionButton({hoverEnabled: false});
      $('select').formSelect();

      var datepicker_pt_br = {
          cancel: 'Cancelar', today: 'Hoje', clear: 'Limpar', done: 'Ok', nextMonth: 'Próximo mês', previousMonth: 'Mês anterior', weekdaysAbbrev: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'], weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'], weekdays: ['Domingo', 'Segunda-Feira', 'Terça-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sábado'], monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'], months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']
      }
      var options = {
          container: 'body',
          showDaysInNextAndPreviousMonths: true,
          i18n: datepicker_pt_br,
          autoClose: true,
          format: 'dd mmm, yyyy'
          //outras configurações
      }

      $('.datepicker').datepicker(options);

      $('.timepicker').timepicker({
          i18n: {
              cancel: 'Cancelar',
              clear: 'Limpar',
              done: 'Ok'
          },
          twelveHour : false, // 12 horas, usa AM/PM
          autoclose: false  //Fecha o timepicker automaticamente apos selecionar a hora
      });

      $('.menu').click(function() {
          var elem = $('.sidenav');
          var instance = M.Sidenav.getInstance(elem);
          instance.open();
      });

      $('input#descricao, textarea#descricao, input#sigla, input#nome, input#usuario, input#codigo').characterCounter();
  }); // end of document ready
})(jQuery); // end of jQuery name space






