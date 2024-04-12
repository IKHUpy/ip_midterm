<?php 
  $idClient = $_GET['idClient'];

  $client = (new Connection)->connect()->query("SELECT * FROM clients WHERE id = $idClient")->fetch(PDO::FETCH_ASSOC);

  $clientid = $client['clientid'];
  $isactive = $client['isactive'];
  $cname = $client['cname']; 
  $email = $client['email'];
  $phone = $client['phone'];
  $address = $client['address'];
  $website = $client['website'];
  $cperson = $client['cperson'];
  $mobile = $client['mobile'];
?>  

<div class="clearfix"></div>
	
<div class="content-wrapper">
  <div class="container-fluid">
   <div class="row pt-2 pb-2">
     <div class="col-sm-12">
  	    <h4 class="page-title">UPDATE CLIENT</h4>
     </div>
   </div>

    <div class="row">
      <div class="col-lg-12">
        <form role="form" method="POST" autocomplete="nope">
          <div class="card">
            <div class="card-body">
                 <div class="row">
                    <div class="col-sm-10 form-group">
                        <input type="hidden" id="idClient" name="idClient" value="<?php echo $idClient;?>">

                        <label for="input-1">Client's Name</label>
                        <input type="text" class="form-control" id="tns-cname" placeholder="Enter Client Name" name="tns-cname" autocomplete="nope" value="<?php echo $cname;?>" required>
                    </div>

                    <div class="col-md-1 form-group">
                        <label>&nbsp;</label>
                        <div class="icheck-material-success">
                          <input type="checkbox" id="num-isactive" name="num-isactive" value="1" <?php if ($isactive == "1") echo 'checked'; ?>>
                           <label for="num-isactive">Active</label>
                        </div>
                    </div>

                    <div class="col-sm-1 form-group">
                        <label for="input-2">Client ID</label>
                        <input type="text" class="form-control" id="tns-clientid" name="tns-clientid" value="<?php echo $clientid;?>" readonly style="font-size: 0.9em;">
                    </div>
                </div>                  

                 <div class="form-group">
                    <label for="input-3">Address</label>
                    <input type="text" class="form-control" id="tns-address" placeholder="Enter Address" name="tns-address" autocomplete="nope" value="<?php echo $address;?>">
                 </div>                                 

                 <div class="row">
                      <div class="col-sm-6 form-group">
                          <label for="input-4">Landline #</label>
                          <input type="text" class="form-control" id="num-phone" placeholder="Enter Landline #" name="num-phone" autocomplete="nope" value="<?php echo $phone;?>">
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="input-5">Mobile #</label>
                          <input type="text" class="form-control" id="num-mobile" placeholder="Enter Mobile #" name="num-mobile" autocomplete="nope" value="<?php echo $mobile;?>">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-4 form-group">
                          <label for="input-6">E-Mail</label>
                          <input type="text" class="form-control" id="tns-email" placeholder="Enter E-mail Address" name="tns-email" autocomplete="nope" value="<?php echo $email;?>">
                      </div>
                      <div class="col-sm-4 form-group">
                          <label for="input-7">Website</label>
                          <input type="text" class="form-control" id="tns-website" placeholder="Enter Website URL" name="tns-website" autocomplete="nope" value="<?php echo $website;?>">
                      </div>                      
                      <div class="col-sm-4 form-group">
                          <label for="input-8">Contact Person</label>
                          <input type="text" class="form-control" id="tns-cperson" placeholder="Enter Contact Person" name="tns-cperson" autocomplete="nope" value="<?php echo $cperson;?>">
                      </div>                     
                  </div> 
            </div>

            <div class="card-footer">
              <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                  <div class="float-sm-right">
                   <button type="submit" class="btn btn-light btn-round px-5"><i class="fa fa-save"></i>&nbsp;&nbsp;Update</button>
                   <button type="button" class="btn btn-light btn-round px-5" onClick="location.href='clients'"><i class="fa fa-list"></i>&nbsp;&nbsp;Listing</button>                           
                  </div>
                </div>
              </div>
            </div>  <!-- footer -->

          </div>    <!-- card -->
        </form>
        <?php
          $editClient = new ControllerClients();
          $editClient -> ctrEditClient();
        ?>
      </div>
    </div><!--End Row-->

  <div class="overlay toggle-menu"></div>
  </div>    <!-- container-fluid -->
</div>      <!-- content-wrapper -->