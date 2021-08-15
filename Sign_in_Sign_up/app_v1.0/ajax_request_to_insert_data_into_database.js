

        $(document).ready(function(){
            $('#submit').click(function(event){
                event.preventDefault(); // Prevents Website from moving to another page when clicking
                $.ajax({
                    url:"database_index/insertDataIntoDatabase.php",
                    method: "post",
                    data: $('form').serialize(),
                    success : function(htmlresponse, statut){
                        $("#exist").html(htmlresponse); 
                        setTimeout(function() 
                            {
                                $("#exist").html(""); 
                            }, 5000);
                    },
            })   
        })
        });   