

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from joblly-admin-template-dashboard.multipurposethemes.com/bs5/main/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 20:33:55 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://joblly-admin-template-dashboard.multipurposethemes.com/bs5/images/favicon.ico">

    <title>Remotephase - Registration </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('seeker/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('seeker/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('seeker/css/skin_color.css')}}">	

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-2.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-8 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">General Information</h2>
								</div>
							<div class="p-40">
							<form name="defineForm" action="https://remotephase.com/jobseeker_resume1.php" method="post" onsubmit="return ValidateForm(this)"><input type="hidden" name="action" value="add">
        

                                <!--<div class="alert alert-warning alert-warning-custom" role="alert">
                                <a name="resume_name">Resume name * Required information</a>
                                </div>-->
                                
                                
                                <div class="form-group row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Resume name :</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="TR_resume_name" value="Resume:Althea Kent" size="46" class="form-control required">
                                    </div>
                                </div>
                                
                                <!-- <div class="form-groupd row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 font-weight-bold col-form-label col-form-label-custom text-danger">Objective</label>
                                    <div class="col-sm-9"></div>
                                </div> -->
                                
                                
                                <div class="form-group row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Objective :</label>
                                    <div class="col-sm-9">
                                    <textarea name="objective" wrap="soft" cols="60" rows="5" class="form-control h-100"></textarea>
                                    </div>
                                </div>
                                
                                
                                <div class="form-groupd row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 text-success fw-bold mb-2 text-end m-text-start">Target Job</label>
                                    <div class="col-sm-9"></div>
                                </div>
                                
                                
                                <div class="form-group row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Job Type :<br><small>[ check all that apply ]</small></label>
                                    <div class="col-sm-9 d-flex">
                                    
                                <table border="0">
                                <tbody><tr>
                                <td><input type="checkbox" name="job_type[]" value="3" class="form-check-input" id="job_type_checkbox3"></td>
                                <td class="form-check2 small"><label class="form-check-label" for="job_type_checkbox3">Contract</label></td>
                                <td><input type="checkbox" name="job_type[]" value="1" class="form-check-input" id="job_type_checkbox1"></td>
                                <td class="form-check2 small"><label class="form-check-label" for="job_type_checkbox1">Full-time</label></td>
                                <td><input type="checkbox" name="job_type[]" value="6" class="form-check-input" id="job_type_checkbox6"></td>
                                <td class="form-check2 small"><label class="form-check-label" for="job_type_checkbox6">Internship</label></td>
                                </tr>
                                <tr>
                                <td><input type="checkbox" name="job_type[]" value="2" class="form-check-input" id="job_type_checkbox2"></td>
                                <td class="form-check2 small"><label class="form-check-label" for="job_type_checkbox2">Part-time</label></td>
                                <td><input type="checkbox" name="job_type[]" value="4" class="form-check-input" id="job_type_checkbox4"></td>
                                <td class="form-check2 small"><label class="form-check-label" for="job_type_checkbox4">Permanant</label></td>
                                <td><input type="checkbox" name="job_type[]" value="5" class="form-check-input" id="job_type_checkbox5"></td>
                                <td class="form-check2 small"><label class="form-check-label" for="job_type_checkbox5">Temporary</label></td>
                                </tr>
                                <tr>
                                </tr></tbody></table>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Desired Salary :</label>
                                    <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-4"><select class="form-select" name="currency"><option value="" selected="">Select</option><option value="5">CAD</option><option value="2">EUR</option><option value="3">GBP</option><option value="6">INR</option><option value="1">USD</option><option value="4">ZAR</option></select></div><div class="col-8"><input type="text" name="expected_salary" class="form-control" size="10"></div>
                                
                                <div class="1form-check mt-2 1d-flex"><span class="me-3"><input type="radio" name="expected_salary_per" value="Year" id="expected_salary_per1" class="form-check-input me-2"><label class="form-check-label" for="expected_salary_per1">Year</label></span><span class="me-3"><input type="radio" name="expected_salary_per" value="Month" id="expected_salary_per2" class="form-check-input me-2"><label class="form-check-label" for="expected_salary_per2">Month</label></span><span class="me-3"><input type="radio" name="expected_salary_per" value="Hour" checked="" id="expected_salary_per3" class="form-check-input me-2"><label class="form-check-label" for="expected_salary_per3">Hour</label></span>
                                </div>
                                    </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Target Job Titles :</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="TR_target_job_titles" class="form-control required" size="46">
                                    </div>
                                </div>
                                
                                <div class="form-group row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Job Category :<br>(select up to 5) </label>
                                    <div class="col-sm-9">
                                    <select name="TR_industry_sector[]" class="form-control required h-100" size="5" multiple=""><option value="21">Accounting/Finance/Banking</option><option value="1">Administration/HR/Legal</option><option value="22">Advertising/Marketing/PR</option><option value="3">Arts &amp; Design</option><option value="2">Automotive</option><option value="14">Aviation/Airlines</option><option value="15">Call Centre/BPO</option><option value="13">Construction/Architecture</option><option value="23">Consulting Services</option><option value="4">Courier/Distribution/Logistics</option><option value="24">CustomerSupport/Telemarketing</option><option value="25">Education/Training</option><option value="26">Engineering/Manufacturing</option><option value="27">Entertainment/Media</option><option value="5">Environmental</option><option value="16">Export/Import</option><option value="28">Fashion/Garments</option><option value="12">Food Industry</option><option value="29">Government Services</option><option value="30">HealthCare/Pharma</option><option value="31">Hospitality/Travel/Tourism</option><option value="7">Insurance</option><option value="8">Internet/E-Commerce</option><option value="32">IT/Hardware</option><option value="33">IT/Software</option><option value="9">Legal/Company Secretarial</option><option value="34">Maintenance/Repair</option><option value="10">Media/Publishing</option><option value="42">oil,gas &amp; power</option><option value="35">Oil/Gas/Utilities</option><option value="17">Others</option><option value="36">Production/Operations</option><option value="18">Purchase/ Supply Chain</option><option value="6">Recruitment/HR</option><option value="37">Retail/Wholesale</option><option value="38">Sales/Business Development</option><option value="39">Science/Research/Development</option><option value="11">Sports and Recreation</option><option value="40">Supply Chain/Logistics</option><option value="19">Telecom/ ISP</option><option value="41">Transportation/Warehousing</option><option value="20">Travel/ Airlines</option></select>
                                    </div>
                                </div>
                                
                                <div class="form-group row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Nationality</label>
                                    <div class="col-sm-9">
                                    <select name="TR_nationality" class="form-select"><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua and Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegowina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei Darussalam</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="49">Congo</option><option value="50">Cook Islands</option><option value="51">Costa Rica</option><option value="52">Cote D'Ivoire</option><option value="53">Croatia</option><option value="54">Cuba</option><option value="55">Cyprus</option><option value="56">Czech Republic</option><option value="57">Denmark</option><option value="58">Djibouti</option><option value="59">Dominica</option><option value="60">Dominican Republic</option><option value="61">East Timor</option><option value="62">Ecuador</option><option value="63">Egypt</option><option value="64">El Salvador</option><option value="65">Equatorial Guinea</option><option value="66">Eritrea</option><option value="67">Estonia</option><option value="68">Ethiopia</option><option value="69">Falkland Islands (Malvinas)</option><option value="70">Faroe Islands</option><option value="71">Fiji</option><option value="72">Finland</option><option value="73">France</option><option value="74">France, Metropolitan</option><option value="75">French Guiana</option><option value="76">French Polynesia (Tahiti)</option><option value="77">French Southern Territories</option><option value="78">Gabon</option><option value="79">Gambia</option><option value="80">Georgia</option><option value="81">Germany</option><option value="82">Ghana</option><option value="83">Gibraltar</option><option value="84">Greece</option><option value="85">Greenland</option><option value="86">Grenada</option><option value="87">Guadeloupe</option><option value="88">Guam</option><option value="89">Guatemala</option><option value="90">Guinea</option><option value="91">Guinea-bissau</option><option value="92">Guyana</option><option value="93">Haiti</option><option value="94">Heard and Mc Donald Islands</option><option value="95">Honduras</option><option value="96">Hong Kong</option><option value="97">Hungary</option><option value="98">Iceland</option><option value="99">India</option><option value="100">Indonesia</option><option value="243">Iran</option><option value="101">Iran (Islamic Republic of)</option><option value="102">Iraq</option><option value="103">Ireland</option><option value="104">Israel</option><option value="105">Italy</option><option value="106">Jamaica</option><option value="107">Japan</option><option value="108">Jordan</option><option value="109">Kazakhstan</option><option value="110">Kenya</option><option value="111">Kiribati</option><option value="112">Korea, Democratic People's Republic of</option><option value="113">Korea, Republic of</option><option value="246">Kosovo</option><option value="114">Kuwait</option><option value="115">Kyrgyzstan</option><option value="116">Lao People's Democratic Republic</option><option value="240">Laos</option><option value="117">Latvia</option><option value="118">Lebanon</option><option value="119">Lesotho</option><option value="120">Liberia</option><option value="121">Libyan Arab Jamahiriya</option><option value="122">Liechtenstein</option><option value="123">Lithuania</option><option value="124">Luxembourg</option><option value="125">Macau</option><option value="247">Macedonia</option><option value="126">Macedonia, The Former Yugoslav Republic of</option><option value="127">Madagascar</option><option value="128">Malawi</option><option value="129">Malaysia</option><option value="130">Maldives</option><option value="131">Mali</option><option value="132">Malta</option><option value="133">Marshall Islands</option><option value="134">Martinique</option><option value="135">Mauritania</option><option value="136">Mauritius</option><option value="137">Mayotte</option><option value="138">Mexico</option><option value="139">Micronesia(Federated States of)</option><option value="140">Moldova, Republic of</option><option value="141">Monaco</option><option value="142">Mongolia</option><option value="248">Montenegro</option><option value="143">Montserrat</option><option value="144">Morocco</option><option value="145">Mozambique</option><option value="146">Myanmar</option><option value="147">Namibia</option><option value="148">Nauru</option><option value="149">Nepal</option><option value="150">Netherlands</option><option value="151">Netherlands Antilles</option><option value="152">New Caledonia</option><option value="153">New Zealand</option><option value="154">Nicaragua</option><option value="155">Niger</option><option value="156">Nigeria</option><option value="157">Niue</option><option value="158">Norfolk Island</option><option value="159">Northern Mariana Islands</option><option value="160">Norway</option><option value="161">Oman</option><option value="162">Pakistan</option><option value="163">Palau</option><option value="245">Palestine</option><option value="164">Panama</option><option value="165">Papua New Guinea</option><option value="166">Paraguay</option><option value="167">Peru</option><option value="168">Philippines</option><option value="169">Pitcairn</option><option value="170">Poland</option><option value="171">Portugal</option><option value="172">Puerto Rico</option><option value="173">Qatar</option><option value="174">Reunion</option><option value="175">Romania</option><option value="176">Russian Federation</option><option value="177">Rwanda</option><option value="178">Saint Kitts and Nevis</option><option value="179">Saint Lucia</option><option value="180">Saint Vincent and the Grenadines</option><option value="181">Samoa</option><option value="182">San Marino</option><option value="183">Sao Tome and Principe</option><option value="184">Saudi Arabia</option><option value="185">Senegal</option><option value="249">Serbia</option><option value="186">Seychelles</option><option value="187">Sierra Leone</option><option value="188">Singapore</option><option value="189">Slovakia (Slovak Republic)</option><option value="190">Slovenia</option><option value="250">Slovenia</option><option value="191">Solomon Islands</option><option value="192">Somalia</option><option value="193">South Africa</option><option value="194">South Georgia and the South Sandwich Islands</option><option value="195">Spain</option><option value="196">Sri Lanka</option><option value="197">St. Helena</option><option value="198">St. Pierre and Miquelon</option><option value="199">Sudan</option><option value="200">Suriname</option><option value="201">Svalbard and Jan Mayen Islands</option><option value="202">Swaziland</option><option value="203">Sweden</option><option value="204">Switzerland</option><option value="244">Syria</option><option value="205">Syrian Arab Republic</option><option value="206">Taiwan</option><option value="207">Tajikistan</option><option value="208">Tanzania, United Republic of</option><option value="209">Thailand</option><option value="242">Timor-Leste</option><option value="210">Togo</option><option value="211">Tokelau</option><option value="212">Tonga</option><option value="213">Trinidad and Tobago</option><option value="214">Tunisia</option><option value="215">Turkey</option><option value="216">Turkmenistan</option><option value="217">Turks and Caicos Islands</option><option value="218">Tuvalu</option><option value="221">uae</option><option value="219">Uganda</option><option value="220">Ukraine</option><option value="222">United Kingdom</option><option value="223" selected="">United States</option><option value="224">United States Minor Outlying Islands</option><option value="225">Uruguay</option><option value="226">Uzbekistan</option><option value="227">Vanuatu</option><option value="228">Vatican City State (Holy See)</option><option value="229">Venezuela</option><option value="230">Viet Nam</option><option value="241">Viet Nam</option><option value="231">Virgin Islands (British)</option><option value="232">Virgin Islands (U.S.)</option><option value="233">Wallis and Futuna Islands</option><option value="234">Western Sahara</option><option value="235">Yemen</option><option value="237">Zaire</option><option value="238">Zambia</option><option value="239">Zimbabwe</option></select>
                                    </div>
                                </div>
                                
                                <div class="form-group row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Willing to relocate :</label>
                                    <div class="col-sm-9 d-flex">
                                    <input type="radio" name="relocate" value="Yes" checked="" id="radio_relocate1" class="form-check-input me-1"><label class="form-check-label me-3" for="radio_relocate1">Yes</label><input type="radio" name="relocate" value="No" id="radio_relocate2" class="form-check-input me-1"><label class="form-check-label me-3" for="radio_relocate2">No</label>
                                    </div>
                                </div>
                                
                                
                                <div class="form-groups row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 text-success fw-bold mb-2 text-end m-text-start">Social Account </label>
                                    <div class="col-sm-9"></div>
                                </div>
                                
                                
                                <div class="form-group row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Facebook URL :</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="facebook_url" size="60" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Instagram URL :</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="google_url" size="60" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">LinkedIn URL :</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="linkedin_url" size="60" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Twitter URL :</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="twitter_url" size="60" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group row align-items-center">
                                    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom"></label>
                                    <div class="col-sm-9 m-text-center">
                                    <button class="btn btn-primary" type="submit">Next</button> 
                                    </div>
                                </div>
                                
                                
                                </form>

							</div>
						</div>								

						<!-- <div class="text-center">
						  <p class="mt-20 text-white">- Register With -</p>
						  <p class="gap-items-2 mb-20">
							  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
							</p>	
						</div> -->
					</div>
				</div>
			</div>			
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{asset('seeker/js/vendors.min.js')}}"></script>
	<script src="{{asset('seeker/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('seeker/assets/icons/feather-icons/feather.min.js')}}"></script>	
	
	
</body>

<!-- Mirrored from joblly-admin-template-dashboard.multipurposethemes.com/bs5/main/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 20:33:56 GMT -->
</html>

	
