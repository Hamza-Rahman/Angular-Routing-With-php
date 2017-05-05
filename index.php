
    <!DOCTYPE html>
    <html ng-app="myApp">
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" />

      <!-- SPELLS -->
      <!-- load angular and angular route via CDN -->
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
      <script src="script.js"></script>
    </head>
    <body >

        <!-- HEADER AND NAVBAR -->
        <header ng-controller="mainController" >
            <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">Angular Routing Example</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#about"><i class="fa fa-shield"></i> About</a></li>
                    <li><a href="#contact"><i class="fa fa-comment"></i> Contact</a></li>
                    <li><a href="#teacher"><i class="fa fa-comment"></i> Teacher</a></li>
                    <li><a href="#student"><i class="fa fa-comment"></i> Student</a></li>
                </ul>
            </div>
            </nav>
        </header>

        <div id="main">

            <!-- angular templating -->
            <!-- this is where content will be injected -->
             <div ng-view></div>

        </div>

    </body>
    </html>