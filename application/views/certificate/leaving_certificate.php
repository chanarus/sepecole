<div class="container">
  <div class="row">
    
    <div class="col-md-3">
      <?php $this->view('certificate/sidebar_nav'); ?>
    </div>

    <div class="col-md-9">
<<<<<<< HEAD
      <div class="panel panel-info">
        <div class="panel-heading">Leaving Certificates</div>
=======

    <div class="panel panel-info">
              <h3>Certificates</h3>
>>>>>>> 31690fd72a71cfa60ab10bbace8fbf8a4d5009b9

        <?php
        $error_prefix = "<p class=\"help-block error\">";
        $error_suffix = "</p>";
        $attributes = array('class' => 'form-horizontal');
        ?>

        <?php echo form_open('certificate/genarate_leaving_certificate', $attributes); ?>

        <div class="panel-body">
          <div class="media">
              <div class="media-left">
                  <a href="#">
                      <i class="fa fa-certificate fa-4x" aria-hidden="true"></i>
                  </a>
              </div>
              <div class="media-body">
                  <h4 class="media-heading">Leaving Certificate</h4>
                        There are two report types. "Section" report and "Teacher" report. In Section report, you can
                        print section wise reports. In Teacher report, you can print individual teacher report.
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-md-3 col-md-offset-1">
                <input type="text" name="student_id" placeholder="Student ID" class="form-control">
              </div>
              <div class="col-md-3 col-md-offset-1">
                <input type="text" name="std_name" placeholder="Name of the Student" class="form-control">
              </div>
              <div class="col-md-3">
                <input type="button" name="src_btn" value="Search" class="btn btn-raised btn-primary">
              </div>
            </div>

            <div class="container form-group">
              <input type="submit" class="btn btn-raised btn-danger" value="Genarate Report">
            </div>

            <hr>
                        
            <div class="row">
                <div class="col-md-12 col-md-offset-* text-center">
                    <div class="well well-lg" id="teacher_rep">
                        <i class="fa fa-exclamation-triangle fa-5x"></i>
                            <div class="page-header">
                                <h1>No Data Found</h1>
                            </div>
                      </div>
                 </div>
            </div>

<<<<<<< HEAD
        </div>
=======
        <?php echo form_close(); ?>
    </div>
>>>>>>> 31690fd72a71cfa60ab10bbace8fbf8a4d5009b9

      </div>
    </div>
  </div>
</div>