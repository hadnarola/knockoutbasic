<?php

include 'template/header.php';
?>
<table>
    <thead><tr>
            <th>Buyer Name</th><th>Car Name</th><th>Price</th><th></th>
        </tr></thead>
    <tbody data-bind="foreach: cars">
        <tr>
            <td data-bind="text: name"></td>
            <td data-bind="text: feature().carName"></td>
            <td data-bind="text: feature().price"></td>
        </tr>
    </tbody>
</table>
<script type="text/javascript">
            function x(car, features) {
                            var self = this;
                            self.name = car;
                            self.feature = ko.observable(features);
                                    }
            function y() {
                var self = this;
                self.carModel = [
                    { carName: "I20", price: 600000 },
                    { carName: "Verna", price: 1200000 },
                    { carName: "Duster", price: 800000 }
                ];
                self.cars = ko.observableArray([
                    new x("Anubhav", self.carModel[1]),
                    new x("Mohit", self.carModel[0]),
                    new x("Hareen", self.carModel[2])
                ]);
            }
            ko.applyBindings(new y());
</script>
<?php

include 'template/footer.php';
?>