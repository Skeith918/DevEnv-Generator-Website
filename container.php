<?php  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Python Flask Docker</title>

    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="header">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation" class="active"><a href="http://localhost:4000/">Accueil</a>
                    </li>
                    <li role="presentation"><a href="http://localhost:4000/add-container">Ajouter</a>
                    </li>
                </ul>
            </nav>
            <h3 class="text-muted">Python Flask Docker</h3>
        </div>

        <div class="container">
        {%- block content %}
            {{ content|safe }}
        {%- endblock %}
        </div>

        <footer class="footer">
            <p>&copy; VSM2T 2017</p>
        </footer>

    </div>
</body>
</html>