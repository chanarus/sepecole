<div class="container">
  <div class="row">
    <div class="col-md-3">
      <?php $this->view('Marks/sidebar_nav'); ?>
    </div>
    <div class="col-md-9">
      <div class="container">
        <div class="col-md-9">
          <div class="panel panel-info">
            <div class="panel-heading">
              <strong>Enter Exam Details</strong>
            </div>
            <div class="panel-body">
              <div class="row" style="margin-left: 1em; margin-bottom: 2em;">
                  <div class="media">
                      <div class="media-left">
                          <a href="#">
                              <img class="media-object" src="<?php echo base_url("assets/img/info_ico.png"); ?>" width="64px" height="64px">
                          </a>
                      </div>
                      <div class="media-body">
                          <h4 class="media-heading">Exam Details</h4>
                          aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                      </div>
                  </div>
              </div>
              <div class="col-md-10">
                <?php echo form_open(); ?>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-3 col-md-offset-2">
                        <h4>Examination Name:</h4>
                      </div>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="examname" placeholder="Examination Name">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-3 col-md-offset-2">
                        <h4>Grade:</h4>
                      </div>
                      <div class="col-md-5">
                        <input type="text" class="form-control" name="examname" placeholder="Examination Name">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-3 col-md-offset-2">
                        <h4>Year:</h4>
                      </div>
                      <div class="col-md-4">
                        <select class="form-control">
                          <option value="0">Select a Grade</option>
                          <option value="1">Grade 1</option>
                          <option value="2">Grade 2</option>
                          <option value="3">Grade 3</option>
                          <option value="4">Grade 4</option>
                          <option value="5">Grade 5</option>
                          <option value="6">Grade 6</option>
                          <option value="7">Grade 7</option>
                          <option value="8">Grade 8</option>
                          <option value="9">Grade 9</option>
                          <option value="10">Grade 10</option>
                          <option value="11">Grade 11</option>
                          <option value="12">Grade 12</option>
                          <option value="13">Grade 13</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-3 col-md-offset-2">
                        <h4>Start Date:</h4>
                      </div>
                      <div class="col-md-4">
                        <input type="Date" class="form-control" name="start_date">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-3 col-md-offset-2">
                        <h4>End Date:</h4>
                      </div>
                      <div class="col-md-4">
                        <input type="Date" class="form-control" name="end_date">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-2 col-md-offset-2">
                        <input type="button" class="btn btn-primary btn-raised" value="Submit">
                      </div>
                      <div class="col-md-2">
                        <input type="reset" class="btn btn-danger btn-raised" value="Reset">
                      </div>
                    </div>
                  </div>
                <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
