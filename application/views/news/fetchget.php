!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <script>
                const url = 'https://codeigniter01.herokuapp.com/index.php/newsapi/';
                fetch(url)
                .then(data => data.json())
                .then((json) => {
                    alert(JSON.stringify(json));
                })
        </script>
    </body>
</html> 
