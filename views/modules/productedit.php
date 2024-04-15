
<div class="clearfix"></div>
	
<div class="content-wrapper">
  <div class="container-fluid">
   <div class="row pt-2 pb-2">
     <div class="col-sm-12">
  	    <h4 class="page-title">EDIT PRODUCT INFORMATION</h4>
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
                    <div class="col-sm-5 form-group">
                      <label for="tns-product-category">Category</label>
                      <select class="form-control" id="tns-product-category" name="product-category" required>
                          <option value="">Select Category</option>
                          <option value="Bakery">Bakery</option>
                          <option value="Beverages">Beverages</option>
                          <option value="Canned Goods">Canned Goods</option>
                          <option value="Dairy">Dairy</option>
                          <option value="Frozen Foods">Frozen Foods</option>
                          <option value="Grains & Pasta">Grains & Pasta</option>
                          <option value="Meat & Poultry">Meat & Poultry</option>
                          <option value="Produce">Produce</option>
                          <option value="Seafood">Seafood</option>
                          <option value="Snacks">Snacks</option>
                          <option value="Breads & Rolls">Breads & Rolls</option>
                          <option value="Cereal & Breakfast Foods">Cereal & Breakfast Foods</option>
                          <option value="Condiments & Sauces">Condiments & Sauces</option>
                          <option value="Deli">Deli</option>
                          <option value="Ethnic Foods">Ethnic Foods</option>
                          <option value="Nut butters, Jams & Spreads">Nut butters, Jams & Spreads</option>
                          <option value="Packaged Meals & Sides">Packaged Meals & Sides</option>
                          <option value="Paper & Plastic">Paper & Plastic</option>
                          <option value="Sweets & Treats">Sweets & Treats</option>
                          <option value="Vegetarian & Vegan">Vegetarian & Vegan</option>
                          <!-- Add more options as needed -->
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
            </div>

            <div class="card-footer">
              <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                  <div class="float-sm-right">
                   <button type="button" class="btn btn-light btn-round px-5" onClick="location.href='productadd'"><i class="fa fa-file"></i>&nbsp;&nbsp;New</button>

                   <button type="button" class="btn btn-light btn-round px-5" id="btn-edit-product"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>

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