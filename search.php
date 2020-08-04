<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Londrina Shadow' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="myscripts.js"></script>
</head>
<body onLoad="isMobile()">
    <script>
            if (isMobile()) {
                document.getElementById("navbar").innerHTML = '<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\
                    Dropdown link\
                </a>\
                \
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">\
                    <a class="dropdown-item" href="#menu">Menu</a>\
                    <a class="dropdown-item" href="#register">Register</a>\
                    <a class="dropdown-item" href="#contact">Contact</a>\
                    <a class="dropdown-item" href="#about">About</a>\
                </div>'
            } else {
                document.getElementById("navbar").innerHTML = '<li><a href="#home">Home</a></li>\
            <li><a href="#menu">Menu</a></li>\
            <li><a href="#register">Register</a></li>\
            <li><a href="#contact">Contact</a></li>\
            <li><a href="#about">About</a></li>'
            }
    </script>
    <h2 id="logo">Eden from the Rock <sub>LE</sub></h2><hr />
    
</body>
</html>