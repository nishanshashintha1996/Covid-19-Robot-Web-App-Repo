<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        //alert("loaded");
        show_covid19_update();
    });
</script>
</head>
<body>
    <div id="content">
        <div class="container-fluid">
            <div id="covid_update"> </div>
        </div>
    </div>
    <script>
        function show_covid19_update()
        {
            //$('.loader').css("visibility", "visible");
            $.ajax(
            {
                url : 'show_covid_update.php',
                method : 'post',
                success : function(data)
                {
                    //alert(data);
                        $('#covid_update').html(data);
                    
                    
                },
                
                complete: function(data) {
                    //$('.loader').css("visibility", "hidden");
                }
            })
        }
    </script>
</body>
</html>