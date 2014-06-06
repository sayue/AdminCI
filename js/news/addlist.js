     $(document).ready(function(){
            
           $("input[name='optionsRadiosInline']").change(function(event){
                //alert($(this).val());
                //var flag = true;
                var i = 0;
                $(".form-group").each(function(){
                    i++;
                });
                
                var option = $(this).val();
                if(option == 'option3' && i == 2){
                    
                    var div = "<div class=\"form-group\"><label>Description</label><textarea class=\"form-control\" rows=\"3\"></textarea></div>";
                    $("button[name='addcomfirm']").before(div);
                    flag = false;
                    
                }else if((option == 'option1' || option == 'option2') && i == 3){
                    $(".form-group:last").remove();
                }

           });
          
        });
