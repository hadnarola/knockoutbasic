<?php
include 'template/header.php';
?>
<ul data-bind="foreach: new Array(pages())">
    <li data-bind='text: $index()+1'></li>
</ul>
<script type="text/javascript">
    function ViewModel(){
    this.pages = ko.observable(3);
}
ko.applyBindings(new ViewModel());
</script>
<?php
include 'template/footer.php';
?>