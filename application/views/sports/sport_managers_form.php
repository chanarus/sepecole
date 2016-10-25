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
                    <strong>ASSIGN SPORT HEADS</strong>
                </div>
                <div class="panel-body">
                    <?php
                    // Change the css classes to suit your needs

                    $attributes = array('class' => 'form-horizontal', 'id' => '');
                    echo form_open('', $attributes);
                    ?>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Sport Name</label>
                        <div class="col-sm-5">
                            <select id="sportname" name="sportname" class="form-control">
                                <option value="0" <?php if (set_value('sportname') == '0') { echo "selected"; } ?>>Select a Sport</option>
                                <option value="1" <?php if (set_value('sportname') == '1') { echo "selected"; } ?>>Cricket</option>
                                <option value="2" <?php if (set_value('sportname') == '2') { echo "selected"; } ?>>Foot Ball</option>
                                <option value="3" <?php if (set_value('sportname') == '3') { echo "selected"; } ?>>Rugby</option>
                                <option value="4" <?php if (set_value('sportname') == '4') { echo "selected"; } ?>>Vally Ball</option>
                                <option value="5" <?php if (set_value('sportname') == '5') { echo "selected"; } ?>>Base Ball</option>
                            </select>
                            <?php echo form_error('sportname'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Teacher Name</label>
                        <div class="col-sm-5">
                            <select id="teachername" name="teachername" class="form-control">
                                <option value="0" <?php if (set_value('teachername') == '0') { echo "selected"; } ?>>Select a Teacher</option>
                                <option value="1" <?php if (set_value('teachername') == '1') { echo "selected"; } ?>>Sinhala</option>
                                <option value="2" <?php if (set_value('teachername') == '2') { echo "selected"; } ?>>Sri Lankan Tamil</option>
                                <option value="3" <?php if (set_value('teachername') == '3') { echo "selected"; } ?>>Indian Tamil</option>
                                <option value="4" <?php if (set_value('teachername') == '4') { echo "selected"; } ?>>Muslim</option>
                                <option value="5" <?php if (set_value('teachername') == '5') { echo "selected"; } ?>>Other</option>
                            </select>
                            <?php echo form_error('teachername'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-raised btn-primary" value="Add">
                            <button type="reset" class="btn btn-raised btn-default">Reset</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>

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
                                <td><a href="<?php echo base_url("index.php/sports/view_category"); ?>" data-id='<?php echo $row->id ?>' class='btnedit' title='edit'><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                                <td><a href="<?php echo base_url("index.php/sports/delete_news")."/".$row->id; ?>" onclick="return confirm('Are you sure you want to delete this news?');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></i></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    </div>

            </div>


        </div>

    </div>

</div>
