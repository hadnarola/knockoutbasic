<?php
include '../template/header.php';
?>

<h2> Welcome </h2>
<div class="row">
    <div class="col-md-6">
        <p>First name: <strong data-bind="text: firstName">todo</strong></p>
        <p>Last name: <strong data-bind="text: lastName ">todo</strong></p>
    </div>
    <div class="col-md-6" id="two-bind">
        <p>Last name: <strong data-bind="text: lastName ">todo</strong></p>
        <p>First name: <strong data-bind="text: firstName">todo</strong></p>
    </div>
</div>
<script type="text/javascript">
// This is a simple *viewmodel* - JavaScript that defines the data and behavior of your UI
function AppViewModel() {
    this.firstName = "Hareen";
    this.lastName = "Desai";
}
// Activates knockout.js
ko.applyBindings(new AppViewModel(),document.getElementsByID('two-bind'));
function AppViewModel2() {
    this.firstName = "Hareen";
    this.lastName = "Desai";
}
// Activates knockout.js
ko.applyBindings(new AppViewModel2());
</script>
<?php
include '../template/footer.php';
?>