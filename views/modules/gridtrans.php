<div class="clearfix"></div>
  
<div class="content-wrapper">
  <div class="container-fluid">
    <form role="form" method="post" id="gridForm">
    <div class="row">
      <div class="col-lg-6">
           <div class="card">
             <div class="card-body">
               <div class="card-title">GRID-BASED TRANSACTION</div>
               <div class = "row">
<!--                   <div class="col-sm-6 form-group">
                      <label for="sdate">Date | Day</label>
                      <input type="text" id="sdate" class="form-control sdate" name="sdate" value="" readonly>
                  </div>  -->

                  <div class="col-sm-3 form-group">
                      <label for="sdate">Date</label>
                      <input type="text" id="autoclose-datepicker" class="form-control sdate" name="sdate" placeholder="Enter Sales Date" value="" required>
                  </div>                   

                  <div class="col-sm-3 form-group">
                      <label for="stime">Time</label>
                      <input type="text" id="stime" class="form-control" name="stime" value="" readonly>
                  </div>

                  <div class="col-sm-3 form-group">
                      <button type="submit" class="btn btn-light waves-effect waves-light" style="margin-top: 31px;" name="btnSave" id="btnSave"><i class="fa fa-save"></i> <span>&nbsp;Save Sale</span> </button>
                  </div>
               </div>
               <div class="row my_transaction_header">
                  <div class="col-sm-6 form-group">
                     <label>Description</label>
                  </div>

                  <div class="col-sm-2 form-group">
                     <label>Qty</label>
                  </div>                  

                  <div class="col-sm-2 form-group">
                     <label>Price</label>
                  </div>
                  <div class="col-sm-2 form-group">
                     <label>Total</label>
                  </div>
               </div>   

               <div class="row selected_products" style="min-height: 30px;">
               </div>
               <input type="hidden" name="productList" id="productList">
            </div>   <!-- card-body -->

            <div class="card-footer">
              <div class="row">
                <div class="col-xs-12 col-sm-9">
                  <div class="input-group">
                    <label style="font-size: 1.2em;padding-top: 5px;text-align: center;">AMOUNT DUE</label>
                  </div>
                </div> 

                <div class="col-xs-12 col-sm-3">
                  <div class="input-group">
                    <input type="text" class="form-control numberAlignment" name="numTotalsales" id="numTotalsales" value="0.00" style="text-align: right;" required readonly>
                  </div>
                </div>                                
              </div>              
            </div>   <!-- footer -->

        </div>       <!-- card -->
      </div>

      <div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Product List</div>
           <hr>
           <div>
              <table id="default-datatable" class="table table-bordered table-hover table-striped productsTable">
                <thead>
                    <tr>
                     <th>Description</th>
                     <th>Price</th>
                     <th style="width:20px;">Enl</th>
                    </tr>
                </thead>
              </table>
           </div>

         </div>
         </div>
      </div>
    </div>    <!--End Row-->
    </form> 
  </div>
</div>