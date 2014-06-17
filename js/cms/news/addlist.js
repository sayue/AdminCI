     $(document).ready(function(){
            
           $("input[name='optionsRadiosInline']").change(function(event){
                //alert($(this).val());
                //var flag = true;
                var i = 0;
                $(".form-group").each(function(){
                    i++;
                });
                
                var option = $(this).val();
                if(option == 'prize' && i == 2){
                    
                    var div = "<div class=\"form-group\"><label>Description/具体描述</label><textarea class=\"form-control\" name=\"add-news-desc\" rows=\"3\"></textarea></div>";
                    $("button[name='addcomfirm']").before(div);
                    flag = false;
                    
                }else if((option == 'meeting' || option == 'visit') && i == 3){
                    $(".form-group:last").remove();
                }

                var kind = $("input[name='optionsRadiosInline']:checked").val();
                $("input[name='kind']").attr("value",kind);
           });
          
        });
