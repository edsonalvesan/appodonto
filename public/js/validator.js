

function validaUsuario(){  
            var bugs = 0;
            
            if(!$('#nome').val()) {
                $('#nome').parent().parent().addClass('has-error');
                bugs = 1;
            } 
                 
            if( bugs == 1) {
                return false;
            }
      
}

function validaProprietario(){  
            
            var bugs = 0;
            

            if(!$('#nome').val()) {
                $('#nome').parent().parent().addClass('has-error');
                bugs = 1;
            } 

            if(!$('#rg').val()) {
                $('#rg').parent().parent().addClass('has-error');
                bugs = 1;
            }

            if(!$('#cpf').val()) {
                $('#cpf').parent().parent().addClass('has-error');
                bugs = 1;
            }

            if(!$('#phone').val()) {
                $('#phone').parent().parent().addClass('has-error');
                bugs = 1;
            }

            if(!$('#cepo').val()) {
                $('#cep').parent().parent().addClass('has-error');
                bugs = 1;
            }
            
            if(!$('#endereco').val()) {
                $('#endereco').parent().parent().addClass('has-error');
                bugs = 1;
            }
            
            if(!$('#numero').val()) {
                $('#numero').parent().parent().addClass('has-error');
                bugs = 1;
            }
            
            if(!$('#bairro').val()) {
                $('#bairro').parent().parent().addClass('has-error');
                bugs = 1;
            }
            
            if(!$('#cidade').val()) {
                $('#cidade').parent().parent().addClass('has-error');
                bugs = 1;
            }

             if(!$('#estado').val()) {
                $('#estado').parent().parent().addClass('has-error');
                bugs = 1;
                 
            if( bugs == 1) {
                return false;
            }
   

};

function validaContrato(){  
            
            var bugs = 0;
            

            if(!$('#locador').val()) {
                $('#locador').parent().parent().addClass('has-error');
                bugs = 1;
            } 

            if(!$('#locatario').val()) {
                $('#locatario').parent().parent().addClass('has-error');
                bugs = 1;
            }

            if(!$('#prazo_contrato').val()) {
                $('#prazo_contrato').parent().parent().addClass('has-error');
                bugs = 1;
            }

            if(!$('#data_inicio').val()) {
                $('#data_inicio').parent().parent().addClass('has-error');
                bugs = 1;
            }

            if(!$('#data_fim').val()) {
                $('#data_fim').parent().parent().addClass('has-error');
                bugs = 1;
            }

            if(!$('#qtd_parcelas_servico').val()) {
                $('#qtd_parcelas_servico').parent().parent().addClass('has-error');
                bugs = 1;
            }

            if(!$('#vencimento_p_parcela').val()) {
                $('#vencimento_p_parcela').parent().parent().addClass('has-error');
                bugs = 1;
            }

            if(!$('#valor_contrato').val()) {
                $('#valor_contrato').parent().parent().addClass('has-error');
                bugs = 1;
            }

            if(!$('#valor_pago_servico').val()) {
                $('#valor_pago_servico').parent().parent().addClass('has-error');
                bugs = 1;
            }

            if(!$('#valor_caucao').val()) {
                $('#valor_caucao').parent().parent().addClass('has-error');
                bugs = 1;
            }
 
            if(!$('#cepo').val()) {
                $('#cep').parent().parent().addClass('has-error');
                bugs = 1;
            }
            
            if(!$('#endereco').val()) {
                $('#endereco').parent().parent().addClass('has-error');
                bugs = 1;
            }
            
            if(!$('#numero').val()) {
                $('#numero').parent().parent().addClass('has-error');
                bugs = 1;
            }
            
            if(!$('#bairro').val()) {
                $('#bairro').parent().parent().addClass('has-error');
                bugs = 1;
            }
            
            if(!$('#cidade').val()) {
                $('#cidade').parent().parent().addClass('has-error');
                bugs = 1;
            }

             if(!$('#estado').val()) {
                $('#estado').parent().parent().addClass('has-error');
                bugs = 1;
            }
                 
            if( bugs == 1) {
                return false;
            }
   

};


$(document).ready(function(){

    var $projectForm = $('#project-form'),
         url = window.location;

    $projectForm.on('submit', function()
    {
      $(this).find('.dave-btn-salvar').button('loading');
    });


    $('#ccnumber-w1').mask("9999 9999 9999 9999");
    
    
    /* ---------- Wizard ---------- */
    $('#email-w1').keyup(function(){
        
    if(isEmail($(this).val())) {
            $(this).parent().parent().removeClass('has-error');
        }
        
    });
    
    $('#nome').keyup(function(){
        
        if($(this).val()) {
            $(this).parent().parent().removeClass('has-error');
        }
        
    });
    
    $('#rg').keyup(function(){
        
        if($(this).val()) {
            $(this).parent().parent().removeClass('has-error');
        }
        
    });

    $('#cpf').keyup(function(){
        
        if($(this).val()) {
            $(this).parent().parent().removeClass('has-error');
        }
        
    });

    $('#phone').keyup(function(){
        
        if($(this).val()) {
            $(this).parent().parent().removeClass('has-error');
        }
        
    });

   /* ---------- Enderecos ---------- */
    $('#cep').keyup(function(){
        
        if($(this).val()) {
            $(this).parent().parent().removeClass('has-error');
        }
        
    });

    $('#endereco').keyup(function(){
        
        if($(this).val()) {
            $(this).parent().parent().removeClass('has-error');
        }
        
    });

    $('#numero').keyup(function(){
        
        if($(this).val()) {
            $(this).parent().parent().removeClass('has-error');
        }
        
    });

    $('#bairro').keyup(function(){
        
        if($(this).val()) {
            $(this).parent().parent().removeClass('has-error');
        }
        
    });

    $('#cidade').keyup(function(){
        
        if($(this).val()) {
            $(this).parent().parent().removeClass('has-error');
        }
        
    });

    $('#estado').keyup(function(){
        
        if($(this).val()) {
            $(this).parent().parent().removeClass('has-error');
        }
        
    });

    $('#ccnumber-w1').keyup(function(){
        
        var getCCNumber = $(this).val();
        getCCNumber = getCCNumber.replace(/ /g,'').replace(/_/g,'');
        
        if(getCCNumber.length == 16) {
            $(this).parent().parent().removeClass('has-error');
        }
        
    });
    
    $('#cvv-w1').keyup(function(){
        
        if($(this).val().length == 3) {
            $(this).parent().parent().removeClass('has-error');
        } else {
            $(this).parent().parent().addClass('has-error');
        }
        
    });     

});