
<div class="clearfix"></div>
	
<div class="content-wrapper">
  <div class="container-fluid">
   <div class="row pt-2 pb-2">
     <div class="col-sm-12">
  	    <h4 class="page-title">STUDENT INFORMATION</h4>
     </div>
   </div>

    <div class="row">
      <div class="col-lg-12">
        <form role="form" id="student-form" method="POST" autocomplete="nope">
          <div class="card">
            <div class="card-body">
                 <div class="row">
                      <div class="col-sm-10 form-group">
                          <label for="input-1">Student's Name</label>
                          <input type="text" class="form-control" id="tns-cname" placeholder="Enter Student Name" name="tns-cname" autocomplete="nope" required>
                      </div>

                      <div class="col-md-1 form-group">
                          <label>&nbsp;</label>
                          <div class="icheck-material-success">
                            <input type="checkbox" id="num-isactive" name="num-isactive" value="1" checked/>
                            <label for="num-isactive">Active</label>
                          </div>
                      </div>

                      <div class="col-sm-1 form-group">
                          <label for="input-2">Student ID</label>
                          <input type="text" class="form-control" id="tns-studentid" name="tns-studentid" value="">
                      </div>
                  </div>                 

                 <div class="form-group">
                    <label for="input-3">Address</label>
                    <input type="text" class="form-control" id="tns-address" placeholder="Enter Address" name="tns-address" autocomplete="nope">
                 </div>                                 

                 <div class="row">
                      <div class="col-sm-6 form-group">
                          <label for="input-4">Landline #</label>
                          <input type="text" class="form-control" id="num-phone" placeholder="Enter Landline #" name="num-phone" autocomplete="nope">
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="input-5">Mobile #</label>
                          <input type="text" class="form-control" id="num-mobile" placeholder="Enter Mobile #" name="num-mobile" autocomplete="nope">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-4 form-group">
                          <label for="input-6">E-Mail</label>
                          <input type="text" class="form-control" id="tns-email" placeholder="Enter E-mail Address" name="tns-email" autocomplete="nope">
                      </div>
                      <div class="col-sm-4 form-group">
                          <label for="input-7">Website</label>
                          <input type="text" class="form-control" id="tns-website" placeholder="Enter Website URL" name="tns-website" autocomplete="nope">
                      </div>                      
                      <div class="col-sm-4 form-group">
                          <label for="input-8">Contact Person</label>
                          <input type="text" class="form-control" id="tns-cperson" placeholder="Enter Contact Person" name="tns-cperson" autocomplete="nope">
                      </div>                     
                  </div> 
            </div>

            <div class="card-footer">
              <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                  <div class="float-sm-right">
                   <button type="button" class="btn btn-light btn-round px-5" id="btn-new"><i class="fa fa-file"></i>&nbsp;&nbsp;New</button>

                   <button type="submit" class="btn btn-light btn-round px-5"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>

                   <button type="button" class="btn btn-light btn-round px-5" onClick="location.href='students'"><i class="fa fa-list"></i>&nbsp;&nbsp;Listing</button>                           
                  </div>
                </div>
              </div>
            </div>  <!-- footer -->

          </div>    <!-- card -->
        </form>

        <?php
          $createStudent = new ControllerStudents();
          $createStudent -> ctrCreateStudent();
        ?>
      </div>
    </div><!--End Row-->

  <div class="overlay toggle-menu"></div>
  </div>    <!-- container-fluid -->
</div>      <!-- content-wrapper -->