
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
            &nbsp;<label for="StudentID"><i class="fa fa-user"></i> STUDENT ID:</label>
            <input type="text" id="StudentID" name="StudentID" placeholder="Student ID">
            
          
                    <label>COURSE:</label>
                        <select  id="select_cat" name="select_cat" required="">
                        <option value="BSIT">BSIT</option>
                        <option value="BSEDUC">BSEDUC</option>
                    </select>
                    <label>YEAR:</label>
                    <select id="year" name="year"></select>
                    <br><br>
                    &nbsp;<label for="fname"><i class="fa fa-user"></i> Full Name</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">

                    <label for="start">BIRTHDAY:</label>
                        <input type="date" id="start" name="trip-start" value="1990-07-22" min="1990-01-01" max="2023-12-31">
                    <br><br>
                    &nbsp;<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">

           
            <label for="tel"><i class="fa fa-institution"></i> Tel. no.</label>
            <input type="text" id="tel" name="tel" placeholder="Tel. no.">
            <br><br>    

            &nbsp;<label for="age"><i class="fa fa-envelope"></i> AGE:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="age" name="age" placeholder="age">
            <label>SEX:</label>
            <input type="radio" id="male" name="male" value="male">
            <label for="html">Male</label>
            <input type="radio" id="female" name="female" value="female">
            <label for="css">Female</label>
            <br><br>

            &nbsp;<label>STATUS:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select  id="select_cat" name="select_cat" required="">
                        <option value="SINGLE">SINGLE</option>
                        <option value="MARRIED">MARRIED</option>
                    </select>

                <label>NATIONALITY:</label>
                        <select  id="select_cat" name="select_cat" required="">
                        <option value="TAGALOG">TAGALOG</option>
                        <option value="ENGLISH">ENGLISH</option>
                    </select>
            
            
            <label for="religion"><i class="fa fa-institution"></i> RELIGION:</label>
            <input type="text" id="religion" name="religion" placeholder="religion">
            <br><br>
         
            &nbsp; <label for="guardian">PERSON TO BE NOTIFIED IN CASE OF EMERGENCY:</label>
                <input type="text" id="guardian" name="guardian" placeholder="guardian">
                <br><br>
                
            
                <label for="relation">RELATION</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="relation" name="relation" placeholder="relation">
                <label for="tele">TEL NO.</label>
                <input type="number" id="tele" name="tele" placeholder="tele">
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
    <script>
(function () {
    let year_satart = 1998;
    let year_end = (new Date).getFullYear(); // current year
    let year_selected = 1998;

    let option = '';
    option = '<option>Year</option>'; // first option

    for (let i = year_satart; i <= year_end; i++) {
        let selected = (i === year_selected ? ' selected' : '');
        option += '<option value="' + i + '"' + selected + '>' + i + '</option>';
    }

    document.getElementById("year").innerHTML = option;
})();
</script>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>