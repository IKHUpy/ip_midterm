
<div class="clearfix"></div>
	
<div class="content-wrapper">
  <div class="container-fluid">
   <div class="row pt-2 pb-2">
     <div class="col-sm-12">
  	    <h4 class="page-title">PAYROLL SYSTEM</h4>
     </div>
   </div>

    <div class="row">
      <div class="col-lg-12">
        <form role="form" id="payroll-form" method="POST" autocomplete="nope">
          <div class="card">
            <div class="card-body">
                 <input type="text" name="trans_type" id="trans_type" value="New" style="visibility:hidden;" required>
                 <div class="row">
                      <div class="col-sm-1 form-group">
                          <label for="tns-empid">Emp ID</label>
                          <input type="text" class="form-control" id="tns-empid" name="tns-empid" value="" disabled>
                      </div>

                      <div class="col-sm-9 form-group">
                          <label for="tns-empname">Employee Name</label>
                          <input type="text" class="form-control" id="tns-empname" placeholder="Enter Client Name" name="tns-empname" autocomplete="nope" required>
                      </div>

                      <div class="col-sm-2 form-group">
                          <label for="txt-emptype">Emp Type</label>
                          <select class="form-control" id="txt-emptype" name="txt-emptype">
                            <option value="" selected hidden>&lt;Select Type&gt;</option>
                            <option value="Casual">Casual</option>
                            <option value="Temporary">Temporary</option>
                            <option value="Regular">Regular</option>
                          </select>
                      </div>
                 </div>                                      

                 <div class="row">
                      <div class="col-sm-3 form-group">
                          <label for="num-rateperday">Rate Per Day</label>
                          <input type="text" class="form-control numeric" id="num-rateperday" name="num-rateperday" value="0.00" autocomplete="nope">
                      </div>

                      <div class="col-sm-3 form-group">
                          <label for="num-numdayswork">No. of Days Worked</label>
                          <input type="text" class="form-control numeric" id="num-numdayswork" name="num-numdayswork" value="0.00" autocomplete="nope">
                      </div>

                      <div class="col-sm-3 form-group">
                          <label for="num-cola">Cost of Allowance</label>
                          <input type="text" class="form-control numeric" id="num-cola" name="num-cola" value="0.00" autocomplete="nope">
                      </div>

                      <div class="col-sm-3 form-group">
                          <label for="num-overtimehrs">Overtime Hours</label>
                          <input type="text" class="form-control numeric" id="num-overtimehrs" name="num-overtimehrs" value="0.00" autocomplete="nope">
                      </div>                                          
                  </div>

                  <div class="row">
                      <div class="col-sm-12 form-group">
                          <label for="num-gross">GROSS SALARY</label>
                          <input type="text" class="form-control numeric" id="num-gross" name="num-gross" value="0.00" readonly>
                      </div>  
                  </div>

                  <div class="row">
                      <div class="col-sm-3 form-group">
                          <label for="num-tax">Tax</label>
                          <input type="text" class="form-control numeric" id="num-tax" name="num-tax" value="0.00" autocomplete="nope">
                      </div>

                      <div class="col-sm-3 form-group">
                          <label for="num-philhealth">PhilHealth</label>
                          <input type="text" class="form-control numeric" id="num-philhealth" name="num-philhealth" value="0.00" readonly>
                      </div>

                      <div class="col-sm-3 form-group">
                          <label for="num-sss">SSS</label>
                          <input type="text" class="form-control numeric" id="num-sss" name="num-sss" value="0.00" autocomplete="nope">
                      </div>

                      <div class="col-sm-3 form-group">
                          <label for="num-cshadvance">Cash Advance</label>
                          <input type="text" class="form-control numeric" id="num-cshadvance" name="num-cshadvance" value="0.00" autocomplete="nope">
                      </div>                      
                  </div>

                  <div class="row">
                      <div class="col-sm-6 form-group">
                          <label for="num-totalded">TOTAL DEDUCTION</label>
                          <input type="text" class="form-control numeric" id="num-totalded" name="num-totalded" value="0.00" readonly>
                      </div>

                      <div class="col-sm-6 form-group">
                          <label for="num-netsalary">NET SALARY</label>
                          <input type="text" class="form-control numeric" id="num-netsalary" name="num-netsalary" value="0.00" readonly>
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

<!--                     <button type="button" class="btn btn-light btn-round px-5" onClick="location.href='payrollbrowse'"><i class="fa fa-list"></i>&nbsp;&nbsp;Search</button> -->

                    <button type="button" class="btn btn-light btn-round px-5" id="btn-search" data-toggle="modal" data-target="#modal-search-payroll"><i class="icon-search4 mr-2"></i> Search</button>                           
                  </div>
                </div>
              </div>
            </div>  <!-- footer -->

          </div>    <!-- card -->
        </form>
      </div>
    </div><!--End Row-->
  </div>    <!-- container-fluid -->
</div>      <!-- content-wrapper -->

<div id="modal-search-payroll" class="modal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" style="background-color: #343f53;">
      <div class="modal-header">
        <h5 class="modal-title profile-name"><i class="icon-menu7 mr-2"></i> &nbsp;PAYROLL LIST</h5>
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->

        <div class="col-sm-3 form-group">
            <select class="form-control" id="mdl-emptype" name="mdl-emptype">
              <option value="" selected hidden>&lt;Select Type&gt;</option>
              <option value="Casual">Casual</option>
              <option value="Temporary">Temporary</option>
              <option value="Regular">Regular</option>
            </select>
        </div>
      </div>

      <div class="h-divider">
      </div>

        <table class="table table-bordered table-striped datatable-small-font profile-grid-header payrollTable">

          <thead>
            <tr>
              <th style="min-width: 180px;">Emp ID</th>
              <th style="min-width: 300px;">Employee Name</th>
              <th style="min-width: 140px;">Type</th>
            </tr>
          </thead>
        </table>
    </div>
  </div>
</div>