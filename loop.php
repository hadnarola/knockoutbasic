<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Checkboxs</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type='text/javascript' src='knockout-3.4.2.js'></script>
    </head>
    <body style="background-color: #f9f9f9;">
<table>
    <thead>
        <tr><th>First name</th><th>Last name</th></tr>
    </thead>
    <tbody data-bind="foreach: people">
        <tr>
            <td data-bind="text: firstName"></td>
            <td data-bind="text: lastName"></td>
        </tr>
    </tbody>
</table>
 
<script type="text/javascript">
    ko.applyBindings({
        people: [
            { firstName: 'Bert', lastName: 'Bertington' },
            { firstName: 'Charles', lastName: 'Charlesforth' },
            { firstName: 'Denise', lastName: 'Dentiste' },
            { firstName: 'Denise', lastName: 'Dentiste' },
            { firstName: 'Denise', lastName: 'Dentiste' },
            { firstName: 'Denise', lastName: 'Dentiste' },
            { firstName: 'Denise', lastName: 'Dentiste' },
            { firstName: 'Denise', lastName: 'Dentiste' },
        ]
    });

</script>
</body>
</html>