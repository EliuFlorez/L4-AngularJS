<!DOCTYPE html>
<html ng-app="app">
<head>
    <title>LunarMonkey - Laravel 4 + AngularJS</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <style>
        .navbar { border-radius:0; }
    </style>

</head>

<body>

<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" ui-sref="#">LunarMonkey</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a ui-sref="home">Home</a></li>
        <li><a ui-sref="monkeys">Monkeys</a></li>
    </ul>
</nav>

<div class="container">

    <div ui-view></div>

</div>

    <script src="http://code.angularjs.org/1.2.13/angular.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.8/angular-ui-router.min.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.11.0.js"></script>


    <script src="/app/js/app.js"></script>
</body>
</html>