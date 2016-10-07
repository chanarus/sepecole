<div class="container">
  <div class="row">
    <div class="col-md-3">
      <?php $this->view('certificate/sidebar_nav'); ?>
    </div>
    <div class="col-md-9">

    <div class="panel panel-info">
              <h3>Certificates</h3>

        <?php
        $error_prefix = "<p class=\"help-block error\">";
        $error_suffix = "</p>";
        $attributes = array('class' => 'form-horizontal');
        ?>

        <?php echo form_open('certificate/genarate_leaving_certificate', $attributes); ?>

            <div class="row" style="margin-left: 1em; margin-bottom: 2em;">
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="<?php echo base_url("assets/img/info_ico.png"); ?>" width="64px" height="64px">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Leaving Certificate</h4>
                        There are two report types. "Section" report and "Teacher" report. In Section report, you can
                        print section wise reports. In Teacher report, you can print individual teacher report.
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <label for="student_id">Student ID</label>
              </div>
              <div class="col-md-3">
                <input type="text" name="student_id" placeholder="Student ID" class="form-control">
              </div>
              <div class="col-md-3">
                <input type="button" name="src_btn" value="Search" class="btn btn-primary">
              </div>
            </div>

            <div class="forn-group">
              <label for="std_name">Name of the Student</label>
              <input type="text" name="std_name" placeholder="Name of the Student" class="form-control">
            </div><br>

            <div class="container form-group">
              <input type="submit" class="btn btn-danger" value="Genarate Report">
            </div>

              <div class="col-md-12 col-md-offset-* text-center">
                  <div class="well well-lg" id="teacher_rep">
                      <i class="fa fa-exclamation-triangle fa-5x"></i>
                      <div class="page-header">
                        <h1>No Data Found</h1>
                      </div>
                 </div>
              </div>

        <?php echo form_close(); ?>
    </div>

    </div>
  </div>
</div>
