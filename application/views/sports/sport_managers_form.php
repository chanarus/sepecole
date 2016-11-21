<div class="container">

    <div class="row">

        <div class="col-md-3">
            <?php $this->view('sports/sport_admin_navbar'); ?>
        </div>

        <div class="col-md-9">

            <?php if (isset($succ_message)) { ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Success </strong>
                    <?php echo $succ_message; ?>
                </div>
            <?php } ?>
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo validation_errors(); ?>
                </div>
            <?php } ?>
            <?php if (isset($error_message)) { ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Error </strong>
                    <?php echo $error_message; ?>
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
                            <select id="name" name="name" class="form-control">
                                <option value="0" <?php if (set_value('name') == '0') { echo "selected"; } ?>>Select a Sport</option>
                            <?php foreach($sports as $sport)  { ?>
                                 <option value="<?php echo $sport->name; ?>"><?php echo $sport->name; ?> </option>
                            <?php } ?>
                            </select>
                            <?php echo form_error('teachername'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Teacher Name</label>
                        <div class="col-sm-5">
                            <select id="name" name="tname" class="form-control">
                                <option value="0" <?php if (set_value('name') == '0') { echo "selected"; } ?>>Select a Teacher</option>
                            <?php foreach($teachers as $teacher)  { ?>
                                 <option value="<?php echo $teacher->full_name; ?>"><?php echo $teacher->full_name; ?> </option>
                            <?php } ?>
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
                                <th>Sport Name</th>
                                <th>Teacher Name</th>
                                <th></th>
                                <th><th/>
                            </tr>
                        </thead>
                        <tbody id="fillgrid">
                            <tr>
                                <td>Cricket</td>
                                <td>Lalith Perera</td>
                                <td><button type="button" data-id='<?php echo $row->id ?>' class="btn btn-raised btn-info" data-toggle="modal" data-target="#myModal">Update</button></td>
                                <td><button type="button" data-id='<?php echo $row->id ?>' class="btn btn-raised btn-danger" onclick="return confirm('Are you sure you want to delete this sport?');">Delete</button></td>
                            
                            </tr> 
                            <tr>
                                <td>Rugby</td>
                                <td>Jayantha De Silva</td>
                                <td><button type="button" data-id='<?php echo $row->id ?>' class="btn btn-raised btn-info" data-toggle="modal" data-target="#myModal">Update</button></td>
                                <td><button type="button" data-id='<?php echo $row->id ?>' class="btn btn-raised btn-danger" onclick="return confirm('Are you sure you want to delete this sport?');">Delete</button></td>
                            
                            </tr>  
                            <tr>
                                <td>Foot Ball</td>
                                <td>Amal Ranasinge</td>
                                <td><button type="button" data-id='<?php echo $row->id ?>' class="btn btn-raised btn-info" data-toggle="modal" data-target="#myModal">Update</button></td>
                                <td><button type="button" data-id='<?php echo $row->id ?>' class="btn btn-raised btn-danger" onclick="return confirm('Are you sure you want to delete this sport?');">Delete</button></td>
                            
                            </tr>                         
                        </tbody>
                    </table>
                    </div>

            </div>


        </div>

    </div>

</div>
