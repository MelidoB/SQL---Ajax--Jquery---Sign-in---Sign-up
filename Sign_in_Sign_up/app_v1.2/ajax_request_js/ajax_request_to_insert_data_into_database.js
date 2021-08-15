

        $(document).ready(function(){
            $('#submit_sign_up').click(function(event){
                event.preventDefault(); // Prevents Website from moving to another page when clicking
                $.ajax({
                    url:"database_connection/insertDataIntoDatabase.php",
                    method: "post",
                    data: $('form').serialize(),
                    success : function(htmlresponse, statut){
                        $("#sign_up_exist").html(htmlresponse); 
                        setTimeout(function() 
                            {
                                $("#sign_up_exist").html(""); 
                            }, 5000);
                    },
            })   
        })
        });   