

        $(document).ready(function(){
            $('#verification').click(function(event){
                event.preventDefault(); // Prevents Website from moving to another page when clicking
                $.ajax({
                    url:"database_connection/updateDataIntoDatabase.php",
                    method: "post",
                    data: $('form').serialize(),
                })
            })   
        });   