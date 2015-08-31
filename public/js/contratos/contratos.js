;(function($)
{
  'use strict';

  $(document).ready(function()
  {
         $('#reservation').daterangepicker();
         $('#data_inicio').datepicker();
         $('#data').datepicker();
         $('#data_fim').datepicker();
         $('#vencimento_p_parcela').datepicker();
         $("#locador").select2();
         $("#locatario").select2(); 

  });
})(window.jQuery);





