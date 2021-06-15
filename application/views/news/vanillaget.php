<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <script>
                const request = new XMLHttpRequest();
                const url = 'http://localhost/codeigniter/index.php/newsapi';
                request.open("GET", url);
                request.send();
                request.onload = (e) => {
                    alert(request.response);
                }
        </script>
    </body>
</html> 
