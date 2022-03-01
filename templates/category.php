
<!-- Modal -->
<div class="modal fade" id="form_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:150px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                

                    
                </button>
            </div>
            <div class="modal-body">
                <form id="cat_form" onsubmit="return false">
                    <div class="tab-bx">
        <div class="tab-btn-bx">
            <button class="tab-btn" onclick="showPan(0,'#1abc9c')">Basic Information</button>
            <button class="tab-btn" onclick="showPan(1,'#74b9ff')">Medical History</button>
            <button class="tab-btn" onclick="showPan(2,'#ff7675')">Physical Examination</button>
            <button class="tab-btn" onclick="showPan(3,'#a29bfe')">Diagnosis Treatment</button>
           
        </div>
        <div class="tab-ctn-bx">
            <div class="tab-ctn">
         
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com"><br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY"><br>
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
               
            </div>

            <div class="tab-ctn">
            <h3>Tab Content - 2</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com"><br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY"><br>
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
            

              </div>
            <div class="tab-ctn">
                <h3>Tab Content - 3</h3>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com"><br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY"><br>
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
            </div>
            <div class="tab-ctn">
                <h3>Tab Content - 4</h3>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com"><br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY"><br>
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">    
            </div>
         
        </div>
    </div>
    <script src="js/tab.js"></script>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>