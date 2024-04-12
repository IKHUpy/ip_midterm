<div class="clearfix"></div>
  
<div class="content-wrapper">
   <div class="container-fluid">
     <div class="row pt-2 pb-2">
        <div class="col-sm-12">
          <h4 class="page-title">Customer List</h4>
        </div>
     </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header float-sm-right">
              <button type="button" class="btn btn-light btn-round waves-effect waves-light m-1" onClick="location.href='payroll'"><i class="fa fa-plus"></i> <span>&nbsp;ADD PAYROLL</span> </button>

<!--               <button type="button" class="btn btn-light btn-round px-5 btnPrintClients" name="btnPrintClients" id="btnPrintClients"> <i class="fa fa-print"></i> <span>&nbsp;Print</span></button> -->
            </div>            

            <div class="card-body">
              <!-- <table id="default-datatable" class="table table-bordered table-hover table-striped tables"> -->
              <table class="table table-bordered table-striped datatable-small-font profile-grid-header payrollTable">  
                <thead>
                    <tr>
                      <th>Emp ID</th>
                      <th>Emp Name</th>
                      <th>Emp Type</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>    <!-- row -->

    <div class="overlay toggle-menu"></div>
  </div>        <!-- container-fluid -->
</div>          <!-- content-wrapper -->