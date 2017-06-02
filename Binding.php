<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Knockout JS Binding</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type='text/javascript' src='knockout-3.4.2.js'></script>
    </head>
    <body style="background-color: #f9f9f9;">
        <h1 style="color:#000; text-align:center;">Knockout JS Demo</h1>

        <!-- Basic Binding -->
        <p>First name: <input data-bind="value: firstName" /></p>
        <p>Last name: <input data-bind="value: lastName" /></p>
        <p>Full name: <strong data-bind="text: fullName"></strong></p>
        <script type="text/javascript">
            function AppViewModel() {
                this.firstName = ko.observable("Hareen");
                        this.lastName = ko.observable("Desai");
                          this.fullName = ko.computed(function(){
                     return this.firstName()+" "+this.lastName();
                 },this);
                }
                ko.applyBindings(new AppViewModel());
        </script>
    </body>
</html>