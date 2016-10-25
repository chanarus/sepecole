<div class="container">

    <div class="row">

        <div class="col-md-3">
            <?php $this->view('sports/sport_admin_navbar'); ?>
        </div>

        <div class="col-md-9">
            <?php if (isset($succ_message)) { ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $succ_message; ?>
            </div>
        <?php } ?>
        <?php if (isset($err_message)) { ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $err_message; ?>
            </div>
        <?php } ?>

            <div class="panel panel-info">
                <div class="panel-heading">
                    <strong>ADD NEW SPORT</strong>
                </div>
                <div class="panel-body">
                    <?php
                    // Change the css classes to suit your needs

                    $attributes = array('class' => 'form-horizontal', 'id' => '');
                    echo form_open('sports/add_sport_category', $attributes);
                    ?>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Sport Name</label>
                        <div class="col-sm-5">
                            <input id="sport_name" type="text" name="sport_name"  value="<?php if(isset($succ_message)){ echo '';}else{echo set_value('sport_name');} ?>" type="text" class="form-control" id="sport_name" placeholder="Sport Name">
                            <?php echo form_error('sport_name'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-5">

                            <textarea id="description" type="text" name="description"  value=""  type="text" class="form-control" id="description" placeholder="Description"><?php if(isset($succ_message)){ echo '';}else{echo set_value('description');} ?></textarea>
                            <?php echo form_error('description'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Age Category</label>
                        <div class="col-sm-6">
                            <label class="radio-inline">
                                <input id="age1" type="radio" name="agecat"  value="1" <?php if (set_value('gender') == 'm') { echo "checked"; } ?>> Under 10,12,14,16,18,20
                            </label>
                            <br>
                            <label class="radio-inline">
                                <input id="age2" type="radio" name="agecat" value="2" <?php if (set_value('gender') == 'f') { echo "checked"; } ?>> Under 13,15,17,19
                            </label>
                            <br>
                            <?php echo form_error('agecat'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-raised btn-primary" value="Add">
                            <button type="reset" class="btn btn-raised btn-default">Reset</button>
                        </div>
                    </div>

                </div>
            </div>
            <a name="sports"></a>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <strong>Sports</strong>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Sport Name</th>
                                <th>Description</th>
                                <th>Age Category</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="fillgrid">
                            <?php foreach ($det as $row) { ?>
                            <tr>
                                <td><?php echo $row->id; ?></td>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->description; ?></td>
                                <td><?php
                                    $age = $row->age_category;
                                    if ($age == 1) {
                                        echo 'Under 10,12,14,16,18,20';
                                    } else if ($age == 2) {
                                        echo 'Under 13,15,17,19';
                                    } else{
                                        echo '';
                                    }
                                    ?>
                                </td>
                                <td><button type="button" data-id='<?php echo $row->id ?>' class="btn btn-raised btn-info" data-toggle="modal" data-target="#myModal">Update</button></td>
                                <td><button type="button" data-id='<?php echo $row->id ?>' class="btn btn-raised btn-danger" onclick="return confirm('Are you sure you want to delete this sport?');">Delete</button></td>
                                
                          <!--      <td><a href="<?php echo base_url("index.php/sports/delete_news")."/".$row->id; ?>" onclick="return confirm('Are you sure you want to delete this news?');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></i></a></td>  -->
                            </tr>

                            <?php echo form_open(); ?>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
                                <div class="modal-dialog" role="document"> 
                                    <div class="modal-content"> 
                                        <div class="modal-header"> 
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>  
                                        </div> 
                                          <div class="modal-body">
                                            <h4 class="modal-title" id="myModalLabel">Update Sport</h4>
                                             <!--       <input type="hidden" id="sportsid" name="sports_id" class="form-control" value="<?php echo $details->id; ?>">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail2">Sport Name</label>
                                                        <input type="text" id="sportsname" name="sport_name" class="form-control" value="<?php echo $details->name; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail2">Description</label>
                                                        <input class="form-control" id="sportsdescription" name="description" type="text" value="<?php echo $details->description; ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-raised btn-success" id="updateitem" value="update">
                                                        <input type="reset" class="btn btn-raised btn-default" value="Reset">
                                                    </div> -->
                                        </div>
                                    </div> 
                                </div> 
                            </div>
                            <?php echo form_close(); ?>
                        <?php } ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>

    </div>

</div>
<script>
    $(document).ready(function () {
        var btnedit = '';
        var btndelete = '';
        fillgrid();
        function fillgrid() {
            btnedit = $("#fillgrid .btnedit");
            btndelete = $("#fillgrid .btndelete");
            var deleteurl = btndelete.attr('href');
            var editurl = btnedit.attr('href');
            //delete record
            btndelete.on('click', function (e) {
                e.preventDefault();
                var deleteid = $(this).data('id');
                if (confirm("Do you want to delete this category?")) {
                    $.ajax({
                        url: deleteurl,
                        type: 'POST',
                        data: 'id=' + deleteid
                    }).done(function (data) {
                        $("#response").html(data);
                        $("#loader").hide();
                    });
                }
            });

            //edit record
            btnedit.on('click', function (e) {
                e.preventDefault();
                var editid = $(this).data('id');
                $.colorbox({
                    href: "<?php echo base_url() ?>index.php/sports/view_category/" + editid,
                    top: 50,
                    width: 500,
                    onClosed: function () {
                        fillgrid();
                    }
                });
            });
        }

    });
</script>
<script>
    $(document).ready(function () {
        $(document).on('click',"#updateitem",function (e) {
            e.preventDefault();
            formdata = new FormData();
            var n_id = document.getElementById('newsid').value;
            var n_name = document.getElementById('newsname').value;
            var n_description = document.getElementById('newsdescription').value;
            if (formdata) {
                formdata.append("id", n_id);
                formdata.append("name", n_name);
                formdata.append("desc", n_description);
            }

            $.ajax({
                url: '<?php echo base_url() ?>index.php/news/update_news',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            }).done(function (data) {
                $("#errorresponse").html(data);
            });
        });
    });

    //delete sport    
        $('#btnReject').click(function() {
        var sportid = $(this).attr("data-leave-id");
        reject(sportid);
    });

    function reject(sportid) {
        swal({
        title: "Are you sure?",
        text: "Are you sure that you want to Delete this sport?",
        type: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        confirmButtonText: "Yes, Delete it!",
        confirmButtonColor: "#ec6c62"
        }, function() {
            window.location.href = "<?php echo base_url("index.php/sports/reject_leave"); ?>" + "/" + leaveid;
        });
    }
</script>
