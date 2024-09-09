<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/jquery-confirm-master/dist/jquery-confirm.min.css">
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Member Registration</title>
</head>
<body>
    <?php include("header.php")?>

    <br><br>
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Become our New Member</h2>
                </div>
                <div class="modal-body">
                    <form role="form" id="frmCustomer">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Member No</label>
                                <input type="number" class="form-control" id="mno" name="mno" placeholder="Member No">
                            </div>
                            <div class="form-group col-md-6">
                                <label>NIC No</label>
                                <input type="number" class="form-control" id="nic" name="nic" placeholder="NIC No">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Name of Participant</label>
                                <input type="text" class="form-control" id="pname" name="pname" placeholder="Name of Participant">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Date of Join</label>
                                <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Emergency Contact Person</label>
                                <input type="text" class="form-control" id="ecp" name="ecp" placeholder="Emergency Contact Person">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Relationship</label>
                                <input type="text" class="form-control" id="Relationship" name="Relationship" placeholder="Relationship">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label">Plan</label>
                                <select class="form-control" id="plan" name="plan" required>
                                    <option value="">Please Select</option>
                                    <option value="Weekly">Weekly trial</option>
                                    <option value="Monthly">Monthly Subscription</option>
                                    <option value="Yearly">Yearly Subscription</option>
                                    <option value="Yoga">Yoga Session</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Emergency Phone Number</label>
                                <input type="text" class="form-control" id="ephone" name="ephone" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label">Gender</label>
                                <select class="form-control" id="gender" name="gender" required>
                                    <option value="">Please Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <input type="submit" value="SUBMIT NOW" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="panel-body">
                <table id="tbl-projects" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>