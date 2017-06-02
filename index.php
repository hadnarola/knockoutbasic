<!doctype html>
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
        Available Books:
       <!--  <div data-bind="foreach: $root.availableItems">
            <input type="checkbox" data-bind="value: id(), click: $root.toggleAssociation" />
            <span data-bind="text: '&nbsp;' + Name() + '&nbsp;' + Price()"></span>
            <br/> -->
        </div>
        <?php $books = array('book1' => array('id' => '1', 'title' => 'Knockout.js For Dummies, Newbs or just Rob', 'price' => '$30.99'), 'book2' => array('id' => '2', 'title' => 'Application Security - Exploring Your Inner Rage', 'price' => '$30.99'), 'book3' => array('id' => '3', 'title' => 'iOS Development for All Three People Who Do It', 'price' => '$30.99'), 'book4' => array('id' => '4', 'title' => 'Knockout.js For Dummies', 'price' => '$30.99')); ?>
        <?php foreach ($books as $key => $book):?>
         <input type="checkbox" data-bind="value: <?= $book['id']; ?>, click: $root.toggleAssociation" />
        <?php endforeach; ?>
        <br/>
        Selected Books:

        <div data-bind="foreach: $root.selectedItems">
            <span data-bind="text: Name"></span>
            <br/>
        </div>
        <script type="text/javascript">
            function BookItem(id, name, price) {
                var self = this;

                self.id = ko.observable(id);
                self.Name = ko.observable(name);
    self.Price = ko.observable(price);
    self.Selected = ko.observable(false);
}

function ViewModel() {
    var self = this;

    self.availableItems = ko.observableArray();

    self.selectedItems = ko.computed(function() {
        return self.availableItems().filter(function(item) {
            return item.Selected();
        });
    });

    // self.init = function () {
    //     self.availableItems.push(new BookItem(1, 'Knockout.js For Dummies, Newbs or just Rob', '$30.99'));
    //     self.availableItems.push(new BookItem(2, 'Application Security - Exploring Your Inner Rage', '$40.99'));
    //     self.availableItems.push(new BookItem(3, 'iOS Development for All Three People Who Do It', '$41.99'));
    //     self.availableItems.push(new BookItem(4, 'Stand Up Meeting Timers You Can Build at Home', '$10.99'));
    //     self.availableItems.push(new BookItem(5, 'Coffee, Red Bull, and Other Ways to Speed Up Time', '$21.99'));
    // };

    self.toggleAssociation = function (item) {
        item.Selected(!(item.Selected()));
        return true;
    };
}

var viewModel = new ViewModel();
ko.applyBindings(viewModel);
viewModel.init();
        </script>
    </body>
</html>