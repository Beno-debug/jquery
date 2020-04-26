<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo jquery plugin webgl ripples</title>
    <style>
        *{margin:0; padding: 0;}
        html{height: 100%;}
        body{
        background-image: url(img/1.jpg);
        background-size: cover;
        height: 100%
        }
    </style>
</head>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="js/jquery.ripples.js"></script>   
<script>
    $(document).ready(function(){
        $('body').ripples(
            {resolution:512,
            dropRadius:20,
            perturbance:0.4});
    });
</script>
</body>
</html>