<div class="clearfix"></div>
  
<div class="content-wrapper">
   <div class="container-fluid">
     <div class="row pt-2 pb-2">
        <div class="col-sm-12">
          <h4 class="page-title">Student List</h4>
        </div>
     </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header float-sm-right">
              <button type="button" class="btn btn-light btn-round waves-effect waves-light m-1" onClick="location.href='clientadd'"><i class="fa fa-plus"></i> <span>&nbsp;ADD CUSTOMER</span> </button>
            </div>            

            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered table-hover table-striped clientlist">
                <thead>
                    <tr>
                      <th>Student</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Mobile</th>
                      <th>Contact Person</th>
                      <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $clients = (new ControllerClients)->ctrShowClients();
                    foreach ($clients as $key => $value) {
                      echo '<tr>
                              <td>'.$value["cname"].'</td>
                              <td>'.$value["email"].'</td>
                              <td>'.$value["phone"].'</td>  
                              <td>'.$value["mobile"].'</td>
                              <td>'.$value["cperson"].'</td>            
                              <td>
                                <div class="btn-group group-round m-1">
                                  <button class="btn btn-sm btn-light waves-effect waves-light btnEditClient" idClient="'.$value["id"].'"><i class="fa fa-pencil"></i></button>
                                </div>  
                              </td>
                            </tr>';
                      }
                  ?>
                </tbody>

              </table>
            </div>
            </div>
          </div>
        </div>
      </div>    <!-- row -->

    <div class="overlay toggle-menu"></div>
  </div>        <!-- container-fluid -->
</div>          <!-- content-wrapper -->