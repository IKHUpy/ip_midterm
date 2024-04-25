
<div class="clearfix"></div>
	
<div class="content-wrapper">
  <div class="container-fluid">
   <div class="row pt-2 pb-2">
     <div class="col-sm-12">
  	    <h4 class="page-title">NEW PRODUCT INFORMATION</h4>
     </div>
   </div>

    <div class="row">
      <div class="col-lg-12">
        <form role="form" id="product-form" method="POST" autocomplete="nope">
          <div class="card">
            <div class="card-body">
                 <div class="row">
                      <div class="col-sm-7 form-group">
                          <label for="input-1">Product's Name</label>
                          <input type="text" class="form-control" id="tns-product-name" placeholder="Enter Product Name" name="product-name" autocomplete="nope" required>
                      </div>

                      <div class="col-sm-3 form-group">
                          <label for="input-2">Abbriviation</label>
                          <input type="text" class="form-control" id="tns-product-abbriviation" placeholder="Aa" name="product-abbriviation" value="" required>
                      </div>
                  </div>                 

                 <div class="row">
                      <div class="col-sm-3 form-group">
                          <label for="input-2">Quantity</label>
                          <input type="text" class="form-control" id="num-product-qty" placeholder="#" name="product-qty" autocomplete="nope" required>
                      </div>
                    <div class="col-sm-5 form-group">
                        <label for="input-3">Price</label>
                        <input type="text" class="form-control" id="num-product-price" placeholder="Enter Price" name="product-price" autocomplete="nope" required>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>&nbsp;</label>
                        <div class="icheck-material-success">
                          <input type="checkbox" id="num-isactive" name="num-isactive" value="1" checked/>
                          <label for="num-isactive">Allow Transactions</label>
                        </div>
                    </div>
                    <div class="col-sm-5 form-group">
                      <label for="tns-product-category">Category</label>
                      <select class="form-control" id="tns-product-category" name="product-category" required>
                        <option value="">Select Category</option>
                        <option value="Antibiotics">Antibiotics</option>
                        <option value="Analgesics">Analgesics</option>
                        <option value="Antipyretics">Antipyretics</option>
                        <option value="Antiseptics">Antiseptics</option>
                        <option value="Antacids">Antacids</option>
                        <option value="Antihistamines">Antihistamines</option>
                        <option value="Antiemetics">Antiemetics</option>
                        <option value="Antidiarrheals">Antidiarrheals</option>
                        <option value="Antifungals">Antifungals</option>
                        <option value="Antivirals">Antivirals</option>
                        <option value="Corticosteroids">Corticosteroids</option>
                        <option value="Hormones">Hormones</option>
                        <option value="Vitamins">Vitamins</option>
                        <option value="Minerals">Minerals</option>
                        <option value="Herbal Medicines">Herbal Medicines</option>
                        <option value="Homeopathic Remedies">Homeopathic Remedies</option>
                        <option value="Dietary Supplements">Dietary Supplements</option>
                        <option value="Topical Medications">Topical Medications</option>
                        <option value="Injectable Medications">Injectable Medications</option>
                    </select>
                  </div>
                 </div>                                 

                 <div class="row">
                  </div>

                  <div class="row">
                      <div class="col-sm-4 form-group">
                          <label for="input-6">Brand name</label>
                          <input type="text" class="form-control" id="tns-product-brand" placeholder="Enter Brand name" name="product-brand" autocomplete="nope" required>
                      </div>                   
                  </div> 
                  <div class="row">
                    <div class="col-sm-5 form-group">
                        <label for="datepicker">License due date</label>
                        <div class="input-group date" data-provide="datepicker">
                            <input type="text" class="form-control" id="date-product-licenseduedate" placeholder="Select Date" autocomplete="nope">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                      </div>
                    <div class="row-sm-4">
                      <button id="set-calendar-null" type="" class="btn btn-light btn-round px-5" id="">&nbsp;&nbsp;None</button>
                    </div>
                    </div>
            </div>

            <div class="card-footer">
              <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                  <div class="float-sm-right">
                   <button type="submit" class="btn btn-light btn-round px-5" id="btn-save-product"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>

                   <button type="button" class="btn btn-light btn-round px-5" onClick="location.href='products'"><i class="fa fa-list"></i>&nbsp;&nbsp;Listing</button>                           
                  </div>
                </div>
              </div>
            </div>  <!-- footer -->

          </div>    <!-- card -->
        </form>
      </div>
    </div><!--End Row-->

  <div class="overlay toggle-menu"></div>
  </div>    <!-- container-fluid -->
</div>      <!-- content-wrapper -->