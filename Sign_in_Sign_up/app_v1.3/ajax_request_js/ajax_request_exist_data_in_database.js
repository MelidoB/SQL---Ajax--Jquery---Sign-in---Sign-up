

        $(document).ready(function(){
            $('#submit_sign_in').click(function(event){
                event.preventDefault(); // Prevents Website from moving to another page when clicking
                $.ajax({
                    url:"database_connection/existDataInDatabase.php",
                    method: "post",
                    data: $('form').serialize(),
                    datatype: 'json',
                        success : function(htmlresponse, status){
                            
                            htmlresponse = jQuery.parseJSON(htmlresponse);
                            $("#sign_in_exist").html(htmlresponse.message); 
                            setTimeout(function() 
                            {
                                $("#sign_in_exist").html(""); 
                                 
                            }, 3000);
                            setTimeout(function() 
                            {
                                if (htmlresponse.result === "SUCCESS") {
                                    window.location.href="page2/index.php";
                                }  
                            }, 4000);
                               
                      },
            })   
        })
        });   

