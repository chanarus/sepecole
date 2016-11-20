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
                    <strong>ASSIGN SPORT CAPTAINS</strong>
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
                        <label for="inputEmail3" class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-6">
                            <div class="col-md-6">
                                <label class="radio-inline">
                                    <input id="age1" type="radio" name="agecat"  value="m" <?php if (set_value('gender') == 'm') { echo "checked"; } ?>> Under 10
                                </label>
                                <br>
                                <label class="radio-inline">
                                    <input id="age2" type="radio" name="agecat" value="f" <?php if (set_value('gender') == 'f') { echo "checked"; } ?>> Under 12
                                </label>
                                <br>
                                <label class="radio-inline">
                                    <input id="age3" type="radio" name="agecat"  value="m" <?php if (set_value('gender') == 'm') { echo "checked"; } ?>> Under 14
                                </label>
                                <br>
                                <label class="radio-inline">
                                    <input id="age4" type="radio" name="agecat" value="f" <?php if (set_value('gender') == 'f') { echo "checked"; } ?>> Under 16
                                </label>
                                <br>
                                <label class="radio-inline">
                                    <input id="age3" type="radio" name="agecat"  value="m" <?php if (set_value('gender') == 'm') { echo "checked"; } ?>> Under 18
                                </label>
                                <br>
                                <label class="radio-inline">
                                    <input id="age4" type="radio" name="agecat" value="f" <?php if (set_value('gender') == 'f') { echo "checked"; } ?>> Under 20
                                </label>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <label class="radio-inline">
                                    <input id="age1" type="radio" name="agecat"  value="m" <?php if (set_value('gender') == 'm') { echo "checked"; } ?>> Under 13
                                </label>
                                <br>
                                <label class="radio-inline">
                                    <input id="age2" type="radio" name="agecat" value="f" <?php if (set_value('gender') == 'f') { echo "checked"; } ?>> Under 15
                                </label>
                                <br>
                                <label class="radio-inline">
                                    <input id="age3" type="radio" name="agecat"  value="m" <?php if (set_value('gender') == 'm') { echo "checked"; } ?>> Under 17
                                </label>
                                <br>
                                <label class="radio-inline">
                                    <input id="age4" type="radio" name="agecat" value="f" <?php if (set_value('gender') == 'f') { echo "checked"; } ?>> Under 19
                                </label>
                                <br>
                            </div>
                            <?php echo form_error('gender'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Devision</label>
                        <div class="col-sm-5">
                            <select id="division" name="division" class="form-control">
                                <option value="0" <?php if (set_value('division') == '0') { echo "selected"; } ?>>Select Division</option>
                                <option value="1" <?php if (set_value('division') == '1') { echo "selected"; } ?>>Division1</option>
                                <option value="2" <?php if (set_value('division') == '2') { echo "selected"; } ?>>Division2</option>
                                <option value="3" <?php if (set_value('division') == '3') { echo "selected"; } ?>>Division3</option>
                            </select>
                            <?php echo form_error('teachername'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cap_name" class="col-sm-2 control-label">Captain Name</label>
                        <div class="col-sm-5">
                            <div class="col-sm-10">
                            <input id="cap_name" type="text" name="cap_name" id="cap_name"  value="<?php if(isset($succ_message)){ echo '';}else{echo set_value('cap_reg');} ?>" type="text" class="form-control" id="cap_reg" placeholder="Captain Name:">
                            <?php echo form_error('cap_name'); ?>
                        </div>
                            <?php echo form_error('teachername'); ?>
                        </div>
                        <div class="col-sm-3">
                            <input id="cap_reg" type="text" name="cap_reg" id="cap_reg"  value="<?php if(isset($succ_message)){ echo '';}else{echo set_value('cap_reg');} ?>" type="text" class="form-control" id="cap_reg" placeholder="Register No:">
                            <?php echo form_error('cap_reg'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Vice Captain Name</label>
                        <div class="col-sm-5">
                            <div class="col-sm-10">
                            <input id="vice_reg" type="text" name="vice_reg"  value="<?php if(isset($succ_message)){ echo '';}else{echo set_value('vice_reg');} ?>" type="text" class="form-control" id="vice_reg" placeholder="Vice Captain Name:">
                            <?php echo form_error('vice_reg'); ?>
                        </div>
                            <?php echo form_error('teachername'); ?>
                        </div>
                        <div class="col-sm-3">
                            <input id="vice_reg" type="text" name="vice_reg"  value="<?php if(isset($succ_message)){ echo '';}else{echo set_value('vice_reg');} ?>" type="text" class="form-control" id="vice_reg" placeholder="Register No:">
                            <?php echo form_error('vice_reg'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-raised btn-primary" value="Add">
                            <button type="reset" class="btn btn-raised btn-default">Reset</button>
                        </div>
                    </div>
                <a name="sports"></a>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                    <strong>Team Captains</strong>
                    </div>
                    <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Sport Name</th>
                                <th>Age Category</th>
                                <th>Devision</th>
                                <th>Captain</th>
                                <th>Vice Captain</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="fillgrid">
                            <tr>
                                <td>Cricket</td>
                                <td>Under 19</td>
                                <td>Devision 1</td>
                                <td>Lasith Perera</td>
                                <td>Amal Kumara</td>
                                <td><button type="button" data-id='<?php echo $row->id ?>' class="btn btn-raised btn-info" data-toggle="modal" data-target="#myModal">Update</button></td>
                                <td><button type="button" data-id='<?php echo $row->id ?>' class="btn btn-raised btn-danger" onclick="return confirm('Are you sure you want to delete this sport?');">Delete</button></td>
                            
                            </tr>
                            <tr>
                                <td>Foot Ball</td>
                                <td>Under 19</td>
                                <td>Devision 1</td>
                                <td>Kamal De Sliva</td>
                                <td>Amila Perera</td>
                                <td><button type="button" data-id='<?php echo $row->id ?>' class="btn btn-raised btn-info" data-toggle="modal" data-target="#myModal">Update</button></td>
                                <td><button type="button" data-id='<?php echo $row->id ?>' class="btn btn-raised btn-danger" onclick="return confirm('Are you sure you want to delete this sport?');">Delete</button></td>
                            
                            </tr>
                            <tr>
                                <td>Rugby</td>
                                <td>Under 19</td>
                                <td>Devision 1</td>
                                <td>Rasika De Silva</td>
                                <td>Namal Sameera</td>
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

<!--<script>
var no = parseInt($("#cap_reg"));

$(document).ready(function(){
    $("#cap_name").change(function(){

      get_captain_name(no);

    });
}
</script> -->