<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/jquery-confirm-master/dist/jquery-confirm.min.css">
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <link type="text/css" rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>

    </head>
    <body>
        <?php include("header.php")?>
        <br><br>
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Add Plan</h4>
        </div>
        <div class="modal-body">
        <form role="form" id="frmPlan">
        <div class="row">
        <div class="form-group col-md-6">
        <label>Plan Name</label>
        <input type="text" class="form-control" id="mno" name="planname" placeholder="Plan Name">
        </div>
        <div class="form-group col-md-6">
        <label>Validity</label>
        <input type="text" class="form-control" id="validity" name="validity" placeholder="Validity">
        </div>
        </div>
        <div class="row">
        <div class="form-group col-md-6">
        <label>Amount</label>
        <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
        </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <button type="button" class="btn btn-info" onclick="validate()">Save</button>
        <button type="submit" class="btn btn-default" onclick="cancel()">Cancel</button>
        </div>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        <div class="col-sm-12">
        <div class="col 512 ms offset-m4">
        <div class="panel-body">
            <table id="tbl-projects" class="table table-striped table-bordered" cellspacing="0"
            width="100%">
            <thead>
            <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <tr>
            </table>
        </div>
        <script src="bower components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        </html><script src="bower_components/jquery.validate.min.js"></script>

        <script src="bower_components/jquery.validate.min.js"></script>
        <script src="bower_components/jquery-confirm-master/dist/jquery-confirm.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script>

      var IsNew-true;
      var version id-null;
      plan();
      function plan() {
        $("#tbl-projects").dataTable().fnDestroy();
        $.ajax({
            url: "all_plan.php",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                $('#tbl-projects').dataTable({
                    "aaData": data
                    "scrollx": true,
                    "aoColumns": [
                        {"sTitle": "Plan Name", "mData": "planname"}, 
                            {"stitle": "Validity", "mData": "validity"},
                            {"sTitle": "Amount", "Data": "amount"},
                            {
                            "sTitle": "Edit",
                            "mbata": "pid",
                            "render": function (Data, type, row, meta) {
                                return '<button class="btn btn-xs btn-success" onclick="get_project_details(" + mData+")">Edit
                            }
                        }
                    ]

                    });
                },
                error: function (xhr) {
                    console.log(xhr.responseText);
                    var text $($.parseHTML(xhr.responseText)).filter(.trace-message).text();
                }
            });
        }
        function validate()
        {
            if ($("#frmPlan").valid())
        {
            var _url='';
            var _data='';
            var _method;

            if (isNew== true) {
                _url='add_plan.php';
                _data $('#frmPlan').serialize();
                method='POST';
            }
            else {
                _url = 'update_vendor.php',
                _data = $('#frmProject').serialize() + "&project_id"= + project_id;
                _method POST;

        
        }
        $.ajax({
            type: method,
            url: _url,
            dataType: 'JSON',
            data: data,
            beforeSend: function ()
            {
                $("#save").prop('disabled', true);
                $('#save').html('');
                $('#save').append('<i class="fa fa-spioner fa spin fa-ix fa-fw"></i>Saving</i>');


            }
            success: function (data){
                $('#save').prop('disabled', false);
                $('#save').html('');
                $('#save').append('Save');

                var msg;
                If (isNew)
                {
                    msg="Registation Successfully Created";
                }
                else{
                    msg-"Registation Successfully Updated";
                }
                $.alert({
                    title: 'Success!',
                    content: m5g,
                    type: 'green'.
                    boxWidth: '400px',
                    theme: "light",
                    useBootstrap: false,
                    autoClose: 'ok| 2000'




            });
            isNew = true;
$('#frmCustomer')[0].reset();
I
},
error: function (xhr, status, error) {
alert(xhr);
console.log(xhr.responseText);
$.alert({
title: 'Fail!',

autoClose: 'ok|2000'
});
$('#save').prop('disabled', false);
}
        });
    }
}





    </body>