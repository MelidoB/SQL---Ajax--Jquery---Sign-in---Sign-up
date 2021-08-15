
    console.log('js accepted');
        $(document).ready(function(){
            $('#verification').click(function(event){
                event.preventDefault(); // Prevents Website from moving to another page when clicking
                $.ajax({
                    url:"database_index/updateDataIntoDatabase.php",
                    method: "post",
                    data: $('form').serialize(),
                })
            })   
        });   