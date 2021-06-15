<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <script>
                const request = new XMLHttpRequest();
                const url = 'https://codeigniter301.herokuapp.com/index.php/newsapi/';
                request.open("GET", url);
                request.send();
                request.onload = (e) => {
                    alert(request.response);
                }
        </script>
    </body>
</html> 
