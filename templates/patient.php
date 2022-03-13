<!-- Modal -->
<div class="modal fade" id="form_patient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Patient</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="category_name">STUDENT ID </label>
          <input type="text" name="student_id" class="form-control" id="student_id" placeholder="Enter Student ID">
          <small id="brand_error" class="form-text text-muted"></small>
          <label>COURSE</label>
          <input type="text" name="course" class="form-control" id="course" placeholder="Enter Course">
          <!-- <small id="brand_error" class="form-text text-muted"></small> -->
          <label>SCHOOL YEAR</label>
          <input type="text" name="school_year" class="form-control" id="school_year" placeholder="Enter Year">
          <label>FIRST NAME</label>
          <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter Full Name">
          <label>MIDDLE NAME</label>
          <input type="text" name="middle_name" class="form-control" id="middle_name" placeholder="Enter Full Name">
          <label>LAST NAME</label>
          <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter Full Name">
          <label>BIRTHDAY</label>
          <input type="date" name="birth_date" class="form-control" id="birth_date" placeholder="Enter Birthday">
          <label>ADDRESS</label>
          <input type="text" name="addRess" class="form-control" id="addRess" placeholder="Enter Address">
          <label>MOBILE NO.</label>
          <input type="number" name="mobile_no" class="form-control" id="mobile_no" placeholder="Enter Mobile No.">
          <label>AGE</label>
          <input type="number" name="year_old" class="form-control" id="year_old" placeholder="Enter Age">
         
          <input type="radio" id="gender" name="gender" value="male">
            <label for="html">Male</label>
            <input type="radio" id="gender" name="gender" value="female">
            <label for="css">Female</label>
            <br><br>

            &nbsp;<label>STATUS:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select  id="marital_status" name="marital_status" required="">
                        <option value="SINGLE">Single</option>
                        <option value="MARRIED">Married</option>
                    </select>

                <label>NATIONALITY:</label>
                <select id="nationality" name="nationality" required="">
                      <option selected="selected">-- select one --</option>
                      <option value="afghan">Afghan</option>
                      <option value="albanian">Albanian</option>
                      <option value="algerian">Algerian</option>
                      <option value="american">American</option>
                      <option value="andorran">Andorran</option>
                      <option value="angolan">Angolan</option>
                      <option value="antiguans">Antiguans</option>
                      <option value="argentinean">Argentinean</option>
                      <option value="armenian">Armenian</option>
                      <option value="australian">Australian</option>
                      <option value="austrian">Austrian</option>
                      <option value="azerbaijani">Azerbaijani</option>
                      <option value="bahamian">Bahamian</option>
                      <option value="bahraini">Bahraini</option>
                      <option value="bangladeshi">Bangladeshi</option>
                      <option value="barbadian">Barbadian</option>
                      <option value="barbudans">Barbudans</option>
                      <option value="batswana">Batswana</option>
                      <option value="belarusian">Belarusian</option>
                      <option value="belgian">Belgian</option>
                      <option value="belizean">Belizean</option>
                      <option value="beninese">Beninese</option>
                      <option value="bhutanese">Bhutanese</option>
                      <option value="bolivian">Bolivian</option>
                      <option value="bosnian">Bosnian</option>
                      <option value="brazilian">Brazilian</option>
                      <option value="british">British</option>
                      <option value="bruneian">Bruneian</option>
                      <option value="bulgarian">Bulgarian</option>
                      <option value="burkinabe">Burkinabe</option>
                      <option value="burmese">Burmese</option>
                      <option value="burundian">Burundian</option>
                      <option value="cambodian">Cambodian</option>
                      <option value="cameroonian">Cameroonian</option>
                      <option value="canadian">Canadian</option>
                      <option value="cape verdean">Cape Verdean</option>
                      <option value="central african">Central African</option>
                      <option value="chadian">Chadian</option>
                      <option value="chilean">Chilean</option>
                      <option value="chinese">Chinese</option>
                      <option value="colombian">Colombian</option>
                      <option value="comoran">Comoran</option>
                      <option value="congolese">Congolese</option>
                      <option value="costa rican">Costa Rican</option>
                      <option value="croatian">Croatian</option>
                      <option value="cuban">Cuban</option>
                      <option value="cypriot">Cypriot</option>
                      <option value="czech">Czech</option>
                      <option value="danish">Danish</option>
                      <option value="djibouti">Djibouti</option>
                      <option value="dominican">Dominican</option>
                      <option value="dutch">Dutch</option>
                      <option value="east timorese">East Timorese</option>
                      <option value="ecuadorean">Ecuadorean</option>
                      <option value="egyptian">Egyptian</option>
                      <option value="emirian">Emirian</option>
                      <option value="equatorial guinean">Equatorial Guinean</option>
                      <option value="eritrean">Eritrean</option>
                      <option value="estonian">Estonian</option>
                      <option value="ethiopian">Ethiopian</option>
                      <option value="fijian">Fijian</option>
                      <option value="filipino">Filipino</option>
                      <option value="finnish">Finnish</option>
                      <option value="french">French</option>
                      <option value="gabonese">Gabonese</option>
                      <option value="gambian">Gambian</option>
                      <option value="georgian">Georgian</option>
                      <option value="german">German</option>
                      <option value="ghanaian">Ghanaian</option>
                      <option value="greek">Greek</option>
                      <option value="grenadian">Grenadian</option>
                      <option value="guatemalan">Guatemalan</option>
                      <option value="guinea-bissauan">Guinea-Bissauan</option>
                      <option value="guinean">Guinean</option>
                      <option value="guyanese">Guyanese</option>
                      <option value="haitian">Haitian</option>
                      <option value="herzegovinian">Herzegovinian</option>
                      <option value="honduran">Honduran</option>
                      <option value="hungarian">Hungarian</option>
                      <option value="icelander">Icelander</option>
                      <option value="indian">Indian</option>
                      <option value="indonesian">Indonesian</option>
                      <option value="iranian">Iranian</option>
                      <option value="iraqi">Iraqi</option>
                      <option value="irish">Irish</option>
                      <option value="israeli">Israeli</option>
                      <option value="italian">Italian</option>
                      <option value="ivorian">Ivorian</option>
                      <option value="jamaican">Jamaican</option>
                      <option value="japanese">Japanese</option>
                      <option value="jordanian">Jordanian</option>
                      <option value="kazakhstani">Kazakhstani</option>
                      <option value="kenyan">Kenyan</option>
                      <option value="kittian and nevisian">Kittian and Nevisian</option>
                      <option value="kuwaiti">Kuwaiti</option>
                      <option value="kyrgyz">Kyrgyz</option>
                      <option value="laotian">Laotian</option>
                      <option value="latvian">Latvian</option>
                      <option value="lebanese">Lebanese</option>
                      <option value="liberian">Liberian</option>
                      <option value="libyan">Libyan</option>
                      <option value="liechtensteiner">Liechtensteiner</option>
                      <option value="lithuanian">Lithuanian</option>
                      <option value="luxembourger">Luxembourger</option>
                      <option value="macedonian">Macedonian</option>
                      <option value="malagasy">Malagasy</option>
                      <option value="malawian">Malawian</option>
                      <option value="malaysian">Malaysian</option>
                      <option value="maldivan">Maldivan</option>
                      <option value="malian">Malian</option>
                      <option value="maltese">Maltese</option>
                      <option value="marshallese">Marshallese</option>
                      <option value="mauritanian">Mauritanian</option>
                      <option value="mauritian">Mauritian</option>
                      <option value="mexican">Mexican</option>
                      <option value="micronesian">Micronesian</option>
                      <option value="moldovan">Moldovan</option>
                      <option value="monacan">Monacan</option>
                      <option value="mongolian">Mongolian</option>
                      <option value="moroccan">Moroccan</option>
                      <option value="mosotho">Mosotho</option>
                      <option value="motswana">Motswana</option>
                      <option value="mozambican">Mozambican</option>
                      <option value="namibian">Namibian</option>
                      <option value="nauruan">Nauruan</option>
                      <option value="nepalese">Nepalese</option>
                      <option value="new zealander">New Zealander</option>
                      <option value="ni-vanuatu">Ni-Vanuatu</option>
                      <option value="nicaraguan">Nicaraguan</option>
                      <option value="nigerien">Nigerien</option>
                      <option value="north korean">North Korean</option>
                      <option value="northern irish">Northern Irish</option>
                      <option value="norwegian">Norwegian</option>
                      <option value="omani">Omani</option>
                      <option value="pakistani">Pakistani</option>
                      <option value="palauan">Palauan</option>
                      <option value="panamanian">Panamanian</option>
                      <option value="papua new guinean">Papua New Guinean</option>
                      <option value="paraguayan">Paraguayan</option>
                      <option value="peruvian">Peruvian</option>
                      <option value="polish">Polish</option>
                      <option value="portuguese">Portuguese</option>
                      <option value="qatari">Qatari</option>
                      <option value="romanian">Romanian</option>
                      <option value="russian">Russian</option>
                      <option value="rwandan">Rwandan</option>
                      <option value="saint lucian">Saint Lucian</option>
                      <option value="salvadoran">Salvadoran</option>
                      <option value="samoan">Samoan</option>
                      <option value="san marinese">San Marinese</option>
                      <option value="sao tomean">Sao Tomean</option>
                      <option value="saudi">Saudi</option>
                      <option value="scottish">Scottish</option>
                      <option value="senegalese">Senegalese</option>
                      <option value="serbian">Serbian</option>
                      <option value="seychellois">Seychellois</option>
                      <option value="sierra leonean">Sierra Leonean</option>
                      <option value="singaporean">Singaporean</option>
                      <option value="slovakian">Slovakian</option>
                      <option value="slovenian">Slovenian</option>
                      <option value="solomon islander">Solomon Islander</option>
                      <option value="somali">Somali</option>
                      <option value="south african">South African</option>
                      <option value="south korean">South Korean</option>
                      <option value="spanish">Spanish</option>
                      <option value="sri lankan">Sri Lankan</option>
                      <option value="sudanese">Sudanese</option>
                      <option value="surinamer">Surinamer</option>
                      <option value="swazi">Swazi</option>
                      <option value="swedish">Swedish</option>
                      <option value="swiss">Swiss</option>
                      <option value="syrian">Syrian</option>
                      <option value="taiwanese">Taiwanese</option>
                      <option value="tajik">Tajik</option>
                      <option value="tanzanian">Tanzanian</option>
                      <option value="thai">Thai</option>
                      <option value="togolese">Togolese</option>
                      <option value="tongan">Tongan</option>
                      <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                      <option value="tunisian">Tunisian</option>
                      <option value="turkish">Turkish</option>
                      <option value="tuvaluan">Tuvaluan</option>
                      <option value="ugandan">Ugandan</option>
                      <option value="ukrainian">Ukrainian</option>
                      <option value="uruguayan">Uruguayan</option>
                      <option value="uzbekistani">Uzbekistani</option>
                      <option value="venezuelan">Venezuelan</option>
                      <option value="vietnamese">Vietnamese</option>
                      <option value="welsh">Welsh</option>
                      <option value="yemenite">Yemenite</option>
                      <option value="zambian">Zambian</option>
                      <option value="zimbabwean">Zimbabwean</option>
                </select>

          <label>RELIGION</label>
          <input type="text" name="relihiyon" class="form-control" id="relihiyon" placeholder="Enter Religion">
          <label>PERSON TO BE NOTIFY IN CASE OF EMERGENCY</label>
          <input type="text" name="emergency_guardian" class="form-control" id="emergency_guardian" placeholder="Enter Guardian">
          <label>RELATIONSHIP</label>
          <input type="text" name="relation_ship" class="form-control" id="relation_ship" placeholder="Enter Relationship">
          <label>GUARDIAN CONTACT.</label>
          <input type="number" name="emergency_contact" class="form-control" id="emergency_contact" placeholder="Enter Guardian No.">
            

          </div>
          <!--
          <div class="form-group">
          <label>Category</label>
          <select class="form-control" id="select_cat" name="select_cat" required="">
          </select>
          </div> -->
          <br>
          <button id="addStudent" type="submit" class="btn btn-primary">Add</button>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  $("#addStudent").click(function() {
      var student_id = $("input[name=student_id]").val();
      var course = $("input[name=course]").val();
      var school_year = $("input[name=school_year]").val();
      var first_name = $("input[name=first_name]").val();
      var middle_name = $("input[name=middle_name]").val();
      var last_name = $("input[name=last_name]").val();
      var birth_date = $("input[name=birth_date]").val();
      var addRess = $("input[name=addRess]").val();
      var mobile_no = $("input[name=mobile_no]").val();
      var year_old = $("input[name=year_old]").val();
      var gender = $("input[name=gender]").val();
      var marital_status = $("select[name=marital_status]").val();
      var nationality = $("select[name=nationality]").val();
      var relihiyon = $("input[name=relihiyon]").val();
      var emergency_guardian = $("input[name=emergency_guardian]").val();
      var relation_ship = $("input[name=relation_ship]").val();
      var emergency_contact = $("input[name=emergency_contact]").val();

      
      $.ajax({
          url: "../webpage/api/patient/addPatient.php",
          method: "POST",
          data: {
            student_id: student_id,
            course: course,
            school_year: school_year,
            first_name: first_name,
            middle_name: middle_name,
            last_name: last_name,
            birth_date: birth_date,
            addRess: addRess,
            mobile_no: mobile_no,
            year_old: year_old,
            gender: gender,
            marital_status: marital_status,
            nationality: nationality,
            relihiyon: relihiyon,
            emergency_guardian: emergency_guardian,
            relation_ship: relation_ship,
            emergency_contact: emergency_contact,
            


          },
          success: function(data) {
                            getPatients();
          },
          error: function(data) {
            alert('shit hudas at byernes ulit');
          }
      });
  });
</script>