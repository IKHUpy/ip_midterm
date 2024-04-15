<div class="clearfix"></div>
  
<div class="content-wrapper">
   <div class="container-fluid">
     <div class="row pt-2 pb-2">
        <div class="col-sm-12">
          <h4 class="page-title">Product List</h4>
        </div>
     </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header float-sm-right">
              <button type="button" class="btn btn-light btn-round waves-effect waves-light m-1" onClick="location.href='productadd'"><i class="fa fa-plus"></i> <span>&nbsp;ADD PRODUCT</span> </button>
            </div>            

            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered table-hover table-striped productlist">
                <thead>
                    <tr>
                      <th>Product</th>
                      <th>Abbrivation</th>
                      <th>Price</th>
                      <th>Category</th>
                      <th>Brand</th>
                      <th>Qty</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $products = (new ControllerProduct)->ctrShowProducts();
                    foreach ($products as $key => $value) {
                      echo '<tr>
                              <td>'.$value["productname"].'</td>
                              <td>'.$value["abbriviation"].'</td>
                              <td>'.$value["productprice"].'</td>  
                              <td>'.$value["productcategory"].'</td>
                              <td>'.$value["productbrand"].'</td>      
                              <td>'.$value["productqty"].'</td>      
                              <td>
                                <div class="btn-group group-round m-1">
                                  <button class="btn btn-sm btn-light waves-effect waves-light btnEditProduct" idProduct="'.$value["productid"].'"><i class="fa fa-pencil"></i></button>
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