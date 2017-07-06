<?php
include 'template/header.php';
?>
<h2> </h2>
<!--<table class="table table-hover">
    <thead>
        <tr>
            <th>Log ID</th>
            <th>Log TIME</th>
            <th>Sender Number</th>
            <th>Receiver Number</th>
            <th>Direction</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>-->
<table class="table table-hover">
    <thead>
        <tr>
            <th>Log ID</th>
            <th>Log TIME</th>
            <th>Sender Number</th>
            <th>Receiver Number</th>
            <th>Direction</th>
        </tr>
    </thead>
    <script type="text/html" id="tbody-templet">
        <tr>
            <td data-bind="text: id"></td>
            <td data-bind="text: log_time"></td>
            <td data-bind="text: sender"></td>
            <td data-bind="text: receiver"></td>
            <td data-bind="text: direction"></td>
        </tr>
    </script>
    <tbody data-bind="template: {name:'tbody-templet',foreach:logs}" id="kotbody">

    </tbody>
</table>
<script type="text/javascript">
    function ajaxMethod(){
    // Remove
    jQuery.ajax({
        url: 'http://localhost/knockoutbasic/ajaxhandler.php',
        method: 'post',
        dataType:'json',
        data: {json_get: 'json_get'},
        success: function (result) {
            jQuery('#kotbody').html('');
           jQuery.map(result, function(value){
                    MyViewModel.logs.push(new getLog(value.id, value.log_time, value.sender, value.receiver, value.direction));
                });
                console.log(MyViewModel);
            }
        });
    }
    ajaxMethod();
    var MyViewModel = {
                logs : ko.observableArray([]),
                clear : function(){
                    this.logs = ko.observableArray([]);
                }
            };
            ko.options.deferUpdates = true;

            ko.applyBindings(MyViewModel);
    function getLog(id, log_time,sender,receiver,direction){
                return {
                    id : ko.observable(id),
                    log_time : ko.observable(log_time),
                    sender : ko.observable(sender),
                    receiver : ko.observable(receiver),
                    direction : ko.observable(direction)
                }
            }
</script>
<?php
include 'template/footer.php';
?>