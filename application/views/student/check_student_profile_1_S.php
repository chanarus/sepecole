
<div class="container">

<div class="row">

<div class="col-md-3">
      <?php $this->view('student/sidebar_nav_s'); ?>
</div>

<div class="col-md-9">


<div class="panel panel-info">
<!--                <div class="panel-body">-->
<?php
$attributes = array('class' => 'form-horizontal', 'id' => '');
echo form_open('teacher/create', $attributes);
?>

<div class="well">
<ul class="nav nav-tabs" style="border: 0px;">
    <li class="active"><a href="#student" data-toggle="tab">Student Details</a></li>
    <li><a href="#guardian" data-toggle="tab">Guardian Details</a></li>
    <div class="panel-footer">
        <!--                            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>-->

    </div>
</ul>
<div id="myTabContent" class="tab-content active" style="border: 0px; padding: 0px;">
<div class="tab-pane active in" id="student">
    <form id="tab">



        <div class="panel panel-info" >
            <div class="panel-heading panel-info" >
                <h3 class="panel-title" ><?php echo $user_id->full_name; ?></h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center"> <!--<img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> --></div>

                    <div class=" col-md-9 col-lg-9 ">
                        <table class="table table-user-information">
                            <tbody>
                            <tr>
                                <td>
                                    <label>Student ID</label>

                                </td>
                                <td>

                                    <label><?php echo $user_id->user_id; ?></label>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Admission No</label></td>
                                <td><label><?php echo $user_id->admission_no; ?></label></td>
                            </tr>
                            <tr>
                                <td><label>Admission Date</label></td>
                                <td><label><?php echo $user_id->admission_date; ?></label></td>
                            </tr>

                            <tr>
                            <tr>
                                <td><label>Name with Initials</label></td>
                                <td><label><?php echo $user_id->name_with_initials; ?></label></td>
                            </tr>
                            <tr>
                                <td><label>Birth Day</label></td>
                                <td><label><?php echo $user_id->dob; ?></label></td>
                            </tr>

                            <tr>
                                <td><label>Medium</label></td>
                                <td><label>
                                        <?php $medium = $user_id->language;
                                        if($medium == "s"){
                                            echo "Sinhala";
                                        }
                                        else if($medium == "e"){
                                            echo "English";
                                        }
                                        else if($medium == "t"){
                                            echo "Tamil";
                                        }

                                        else{
                                            echo "Other";
                                        }
                                        ?>
                                    </label></td>
                            </tr>
                            <tr>
                                <td><label>Religion</label></td>
                                <td><label>
                                        <?php $rel = $user_id->religion;
                                        if($rel == 1){
                                            echo "Buddhism";
                                        }
                                        else if($rel == 2){
                                            echo "Hindunism";
                                        }
                                        else if($rel == 3){
                                            echo "Islam";
                                        }
                                        else if($rel == 4){
                                            echo "Catholicism";
                                        }
                                        else if($rel == 5){
                                            echo "Christianity";
                                        }
                                        else{
                                            echo "Other";
                                        }
                                        ?>
                                    </label></td>
                            </tr>


                            <tr>
                                <td><label>House</label></td>
                                <td><label>
                                        <?php $house = $user_id->house_id;
                                        if($house == 1){
                                            echo "H1";
                                        }
                                        else if($house == 2){
                                            echo "H2";
                                        }
                                        else if($house == 3){
                                            echo "H3";
                                        }
                                        else{
                                            echo "H4";
                                        }
                                        ?>
                                    </label></td>
                            </tr>
                            <tr>
                                <td><label>Address</label></td>
                                <td><label><?php echo $user_id->permanent_addr; ?></label></td>
                            </tr>
                            <tr>
                                <td><label>Address</label></td>
                                <td><label><?php echo $user_id->permanent_addr; ?></label></td>
                            </tr>
                            <tr>
                                <td><label>Address</label></td>
                                <td><label><?php echo $user_id->permanent_addr1; ?></label></td>
                            </tr>

                            <tr>
                                <td><label>Contact Number</label></td>
                                <td><label><?php echo $user_id->contact_home; ?></label></td>
                            </tr>



                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!--                                        <div class="panel-footer">
                                                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                                                        <span class="pull-right">
                                                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                                        </span>
                                                    </div>-->

        </div>


    </form>
</div>
<div class="tab-pane fade" id="guardian">
<form id="tab2">
<div class="panel panel-info">
<div class="panel-heading panel-info" >
    <h3 class="panel-title"><?php echo $user_id->name_with_initials; ?></h3>
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-3 col-lg-3 " align="center"><!-- <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> --></div>
<div class=" col-md-9 col-lg-9 ">
<table class="table table-user-information">
    <tbody>
    <tr>
        <td>
            <label>Name</label>

        </td>
        <td>

            <label><?php echo $user_id_2->name_with_initials; ?></label>
        </td>
    </tr>
    <tr>
        <td><label>Relation</label></td>
        <td><label>
                 <?php $relation = $user_id_2->relation;
                                        if($relation =='f'){
                                            echo "Father";
                                        }
                                        else if($relation == 'm'){
                                            echo "Mother";
                                        }
                                        else if($relation == "g"){
                                            echo "Guardian";
                                        }

                                        ?>
            </label></td>
    </tr>
    <tr>
        <td><label>Contact Home</label></td>
        <td><label><?php echo $user_id_2->contact_home; ?></label></td>
    </tr>
    <tr>
        <td><label>Contact Mobile</label></td>
        <td><label><?php echo $user_id_2->contact_mobile; ?></label></td>
    </tr>
    <tr>
        <td><label>Birthday</label></td>
        <td><label><?php echo $user_id_2->dob; ?></label></td>
    </tr>
    <tr>
        <td><label>Address</label></td>
        <td><label><?php echo $user_id_2->addr; ?></label></td>
    </tr>

    <tr>
        <td><label>Gender</label></td>
        <td><label>
                <?php $val = $user_id_2->gender;
                                        if($val == 'm'){
                                            echo "Male";
                                        }
                                        else{
                                            echo "Female";
                                        }
                                        ?>
            </label></td>
    </tr>
    <tr>
        <td><label>Past Pupil</label></td>
        <td><label>
                <?php $val = $user_id_2->is_pastpupil;
                                        if($val == 1){
                                            echo "Yes";
                                        }
                                        else{
                                            echo "No";
                                        }
                                        ?>
            </label></td>
    </tr>


    </tbody>
</table>
</div>
</div>
</div>

</div>




</form>

</div>
</div>



</div>

</div>

</div>

</div>
</div>
