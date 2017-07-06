<?php

include 'template/header.php';
?>
<span data-bind="text: clock"></span>

<script type="text/javascript">
    function viewModel() {
        var self = this;

        this.clock = ko.observable(new Date());

    this.tick = function() {
        self.clock(new Date());
    };

    setInterval(self.tick, 1000);
};
ko.applyBindings(new viewModel());
</script>
<?php

include 'template/footer.php';
?>