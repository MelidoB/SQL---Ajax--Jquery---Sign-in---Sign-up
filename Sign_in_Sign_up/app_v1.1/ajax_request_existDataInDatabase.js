

        $(document).ready(function(){
            $('#submit_sign_in').click(function(event){
                event.preventDefault(); // Prevents Website from moving to another page when clicking
                $.ajax({
                    url:"database_index/existDataInDatabase.php",
                    method: "post",
                    data: $('form').serialize(),
                    success : function(htmlresponse, statut){
                        $("#sign_in_exist").html(htmlresponse); 
                        setTimeout(function() 
                            {
                                $("#sign_in_exist").html(""); 
                            }, 5000);
                    },
            })   
        })
        });   