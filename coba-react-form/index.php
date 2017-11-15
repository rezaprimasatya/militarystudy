<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
?>


<html lang="en"><head>
    <!-- KIC 30/10/2017 18:53 -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karma Club</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/loaders.css" rel="stylesheet" type="text/css">
    
	<link href="inboxscript/jquery-ui.css" rel="stylesheet" type="text/css">
	<style>
	.loader{ display: none;}
	.ball-pulse > div {
	    background-color: #FF6B6B;
	}
	span.required { margin:0px 5px 0px 5px; font-size:9px; }
	div.message-validator{
	    background: transparent url('inboxscript/msg_arrow.gif') no-repeat scroll left center;
	    padding-left: 7px;
	}
	div.error-validator{
	    background-color:#F3E6E6;
	    border-color: #924949;
	    border-style: solid solid solid solid;
	    border-width: 2px;
	    padding: 5px;
	}
	#austate{
		display: none;
	}
	</style>
  </head>
  <body>
  	<div class="xy" id="top">
  	<div class="confirmprocess">
		<h2 class="text-center">Thank you for joining Karma Club!</h2>
		<h3 class="text-center">Please wait while your submission is being processed... </h3>
	</div>
	</div>
	<div class="col-lg-12">
		<div class="container">
		<div class="row">
    		<div class="wrapform">
				<img src="images/logo.png" class="imglogo">
				<h1 class="text-center">Karma Club Sign-up Form</h1><br><p>last update:30/10/2017 18:53
				<?php if($_GET['page']=='success') { echo 'data has been inserted.'; } ?>
				</p>


				 <form id="form-257" action="https://mx9.inboxgateway.com/form-process.php" method="post" novalidate="novalidate">
	

				
					<input type="hidden" name="key" value="257">
					<input type="hidden" name="uid" value="0">
					<input type="hidden" name="sid" value="0">
					<input type="hidden" name="hosted" value="0">
					<div class="col-lg-12">
						<div class="form-group">
							<label>Location</label>
					    	<select id="field-1450845772-choices" name="field-1450845772" class="form-control" required="">
					    	<option value="">-Select-</option>
					    		<!-- <option value="AIRPORT SURVEYS">AIRPORT SURVEYS</option>-->
					    		<!-- <option value="ADULTSHOP">ADULTSHOP</option>-->
								<option value="Bangalore Marketing Campaigns">Bangalore Marketing Campaigns</option>
								<option value="Athens Marketing Campaigns">Athens Marketing Campaigns</option>
								<option value="BHARAT JAIN">BHARAT JAIN</option>
								<!-- <option value="BOOBALICIOUS2016">BOOBALICIOUS2016 </option>-->
								<option value="Collection Bali">Collection Bali</option>
								<option value="CHECKIN">CHECKIN</option>
								<option value="Event Chairman Invite">Event Chairman Invite</option>
								<option value="Event Rugby">Event Rugby</option>
								<option value="Facebook Campaign">Facebook Campaign</option>
								<option value="HAPPY">HAPPY</option>
								<option value="Inbound Call">Inbound Call</option>
								<option value="Karma Bavaria">Karma Bavaria</option>
								<option value="Karma BeachClub">Karma BeachClub</option>
								<option value="Karma Chakra">Karma Chakra</option>
								<option value="Karma Haveli">Karma Haveli</option>
								<option value="Karma Grove">Karma Grove</option>
								<option value="Karma Jimbaran">Karma Jimbaran</option>
								<option value="Karma Kandara">Karma Kandara</option>
								<option value="Karma Mayura">Karma Mayura</option>
								<option value="Karma Reef">Karma Reef</option>
								<option value="Karma Rottnest">Karma Rottnest</option>
								<option value="Karma Royal Benaulim Goa">Karma Royal Benaulim Goa</option>
								<option value="Karma Royal Chiang Mai Thailand">Karma Royal Chiang Mai Thailand</option>
								<option value="Karma Royal Candidasa Bali">Karma Royal Candidasa Bali</option>
								<option value="Karma Royal Phuket Thailand">Karma Royal Phuket Thailand</option>
								<option value="Karma Royal Haathi Mahal Goa">Karma Royal Haathi Mahal Goa</option>
								<option value="Karma Royal Jimbaran Bali">Karma Royal Jimbaran Bali</option>
								<option value="Karma Royal MonteRio Goa">Karma Royal MonteRio Goa</option>
								<option value="Karma Royal Palms Goa">Karma Royal Palms Goa</option>
								<option value="Karma Royal Sanur Bali">Karma Royal Sanur Bali</option>
								<!-- <option value="Karma Royal Shimla India">Karma Royal Shimla India</option>-->
								<option value="Karma Royal Villea Crete">Karma Royal Villea Crete</option>
								<option value="Karma St Martins">Karma St Martins</option>
								<!-- <option value="LYNN">LYNN</option>-->
								<option value="MEGA">MEGA</option>
								<option value="MAGIC-FC">MAGIC-FC</option>
								<option value="NETBALLWA">NETBALLWA</option>
								<option value="Owner">Owner</option>
								<option value="PINKTANK">PINKTANK </option>
								<option value="RUGBY">RUGBY </option>
								<option value="Sales Deck Bavaria">Sales Deck Bavaria</option>
								<option value="Sales Deck Bali">Sales Deck Bali</option>
								<option value="Sales Deck Cold Line Reception Haathi Mahal">Sales Deck Cold Line Reception Haathi Mahal</option>
								<option value="Sales Deck Cold Line Reception MonteRio">Sales Deck Cold Line Reception MonteRio</option>
								<!-- <option value="Sales Deck St Martins">Sales Deck St Martins</option>-->
								<option value="SWIM16">SWIM16 </option>
								<option value="SWIM17">SWIM17 </option>
								<!-- <option value="SHAWSEY">SHAWSEY</option>-->
								<option value="STOKES and MONTCREIFF">STOKES and MONTCREIFF</option>
								<option value="THE BALI BIBLE">THE BALI BIBLE </option>
								<option value="VIP">VIP</option>
								<option value="Website form">Website form</option>
								<!-- <option value="ZERO2HERO">ZERO2HERO</option>-->
								<option value="Other">Other</option>
					    	</select>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
							<label>Karma Staff Name</label>
					    	<input type="text" class="form-control" id="field-1450846040-text" name="field-1450846040" placeholder="">
						</div>
					</div>

<!-- 					<div class="col-lg-12">
						<div class="form-group">
						<label>Title / Salutation</label>
							<select class="form-control" id="field-1456121973-choices" name="field-1456121973" required="" tabindex="-1" aria-hidden="true" aria-required="true">
								<option value="Mr">Mr.</option>
								<option value="Mrs">Mrs.</option>
								<option value="Ms">Ms.</option>
								<option value="Miss">Miss.</option>								
								<option value="Dr">Dr.</option>
							</select>
						</div>
					</div> -->

					<div class="col-lg-6">
						<div class="form-group">
						<label>First Name</label>
					    	<input type="text" name="field-1427865019-1" id="fname" class="form-control" placeholder="" style="text-transform:uppercase;" required="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
						<label>Last Name</label>
					    	<input type="text" name="field-1427865019-2" id="lname" class="form-control" placeholder="" style="text-transform:uppercase;" required="">
						</div>
						<input id="field-1457403494-text" type="text" name="field-1457403494" style="display:none;">
					    <input id="field-1457403528-text" type="text" name="field-1457403528" style="display:none;">
					</div>
					<!--<div class="col-lg-12">
						<div class="form-group">
						<label>Marital Status</label>
					    	<select class="form-control" id="field-1450769860-choices" name="field-1450769860" required>
								<option value="">-Select-</option>
								<option value="Married">Married</option>
								<option value="Single">Single</option>
								<option value="Defacto">Defacto</option>
							</select>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
						<label>Partner's First Name</label>
					    	<input type="text" id="field-1450772060-text" name="field-1450772060" class="form-control" placeholder="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
						<label>Partner's Last Name</label>
					    	<input type="text" id="field-1450772121-text" name="field-1450772121" class="form-control" placeholder="">
						</div>
					</div>
					
					<div class="col-lg-12">
						<div class="form-group">
						<label>Number of dependents under 18</label>
					    	<input type="text" class="form-control" id="field-1450770908-text" name="field-1450770908" placeholder="" required>
						</div>
					</div>-->
					<div class="col-lg-12">
						<div class="form-group">
						<label>Street Address</label>
					    	<textarea class="form-control" placeholder="" cols="20" rows="5" id="field-1450771166-contents" name="field-1450771166" required=""></textarea>
						</div>
					</div>


					<div class="col-lg-12">
						<div class="form-group">
						<label>City</label>
					    	<input type="text" class="form-control" id="field-1450846616-text" name="field-1450846616" placeholder="" required="">
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
						<label>Post Code</label>
					    	<input type="text" class="form-control" id="field-1450771328-text" name="field-1450771328" placeholder="" required="">
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
						<label>Select a Country</label>
					    	<select class="form-control valid controlcountry" name="field-1450770516" id="field-1450770516-country" required=""><option value="">- Select -</option><option value="UNITED STATES">United States</option><option value="AFGHANISTAN">Afghanistan</option><option value="ALBANIA">Albania</option><option value="ALGERIA">Algeria</option><option value="AMERICAN SAMOA">American Samoa</option><option value="ANDORRA">Andorra</option><option value="ANGOLA">Angola</option><option value="ANGUILLA">Anguilla</option><option value="ANTIGUA AND BARBUDA">Antigua and Barbuda</option><option value="ARGENTINA">Argentina</option><option value="ARMENIA">Armenia</option><option value="ARUBA">Aruba</option><option value="AUSTRALIA">Australia</option><option value="AUSTRIA">Austria</option><option value="AZERBAIJAN">Azerbaijan</option><option value="BAHAMAS">Bahamas</option><option value="BAHRAIN">Bahrain</option><option value="BANGLADESH">Bangladesh</option><option value="BARBADOS">Barbados</option><option value="BELARUS">Belarus</option><option value="BELGIUM">Belgium</option><option value="BELIZE">Belize</option><option value="BENIN">Benin</option><option value="BERMUDA">Bermuda</option><option value="BHUTAN">Bhutan</option><option value="BOLIVIA">Bolivia</option><option value="BOSNIA AND HERZEGOVINA">Bosnia and Herzegovina</option><option value="BOTSWANA">Botswana</option><option value="BRAZIL">Brazil</option><option value="BRITISH INDIAN OCEAN TERRITORY">British Indian Ocean Territory</option><option value="BRUNEI DARUSSALAM">Brunei Darussalam</option><option value="BULGARIA">Bulgaria</option><option value="BURKINA FASO">Burkina Faso</option><option value="BURUNDI">Burundi</option><option value="CAMBODIA">Cambodia</option><option value="CAMEROON">Cameroon</option><option value="CANADA">Canada</option><option value="CAPE VERDE">Cape Verde</option><option value="CAYMAN ISLANDS">Cayman Islands</option><option value="CENTRAL AFRICAN REPUBLIC">Central African Republic</option><option value="CHAD">Chad</option><option value="CHILE">Chile</option><option value="CHINA">China</option><option value="CHRISTMAS ISLAND">Christmas Island</option><option value="COCOS (KEELING) ISLANDS">Cocos (Keeling) Islands</option><option value="COLOMBIA">Colombia</option><option value="COMOROS">Comoros</option><option value="CONGO">Congo</option><option value="CONGO, THE DEMOCRATIC REPUBLIC OF THE">Congo, the Democratic Republic of the</option><option value="COOK ISLANDS">Cook Islands</option><option value="COSTA RICA">Costa Rica</option><option value="COTE D'IVOIRE">Cote D'Ivoire</option><option value="CROATIA">Croatia</option><option value="CUBA">Cuba</option><option value="CYPRUS">Cyprus</option><option value="CZECH REPUBLIC">Czech Republic</option><option value="DENMARK">Denmark</option><option value="DJIBOUTI">Djibouti</option><option value="DOMINICA">Dominica</option><option value="DOMINICAN REPUBLIC">Dominican Republic</option><option value="ECUADOR">Ecuador</option><option value="EGYPT">Egypt</option><option value="EL SALVADOR">El Salvador</option><option value="EQUATORIAL GUINEA">Equatorial Guinea</option><option value="ERITREA">Eritrea</option><option value="ESTONIA">Estonia</option><option value="ETHIOPIA">Ethiopia</option><option value="FALKLAND ISLANDS (MALVINAS)">Falkland Islands (Malvinas)</option><option value="FAROE ISLANDS">Faroe Islands</option><option value="FIJI">Fiji</option><option value="FINLAND">Finland</option><option value="FRANCE">France</option><option value="FRENCH GUIANA">French Guiana</option><option value="FRENCH POLYNESIA">French Polynesia</option><option value="FRENCH SOUTHERN TERRITORIES">French Southern Territories</option><option value="GABON">Gabon</option><option value="GAMBIA">Gambia</option><option value="GEORGIA">Georgia</option><option value="GERMANY">Germany</option><option value="GHANA">Ghana</option><option value="GIBRALTAR">Gibraltar</option><option value="GREECE">Greece</option><option value="GREENLAND">Greenland</option><option value="GRENADA">Grenada</option><option value="GUADELOUPE">Guadeloupe</option><option value="GUAM">Guam</option><option value="GUATEMALA">Guatemala</option><option value="GUINEA">Guinea</option><option value="GUINEA-BISSAU">Guinea-Bissau</option><option value="GUYANA">Guyana</option><option value="HAITI">Haiti</option><option value="HOLY SEE (VATICAN CITY STATE)">Holy See (Vatican City State)</option><option value="HONDURAS">Honduras</option><option value="HONG KONG">Hong Kong</option><option value="HUNGARY">Hungary</option><option value="ICELAND">Iceland</option><option value="INDIA">India</option><option value="INDONESIA">Indonesia</option><option value="IRAN, ISLAMIC REPUBLIC OF">Iran, Islamic Republic of</option><option value="IRAQ">Iraq</option><option value="IRELAND">Ireland</option><option value="ISRAEL">Israel</option><option value="ITALY">Italy</option><option value="JAMAICA">Jamaica</option><option value="JAPAN">Japan</option><option value="JORDAN">Jordan</option><option value="KAZAKHSTAN">Kazakhstan</option><option value="KENYA">Kenya</option><option value="KIRIBATI">Kiribati</option><option value="KUWAIT">Kuwait</option><option value="KYRGYZSTAN">Kyrgyzstan</option><option value="LAO PEOPLE'S DEMOCRATIC REPUBLIC">Lao People's Democratic Republic</option><option value="LATVIA">Latvia</option><option value="LEBANON">Lebanon</option><option value="LESOTHO">Lesotho</option><option value="LIBERIA">Liberia</option><option value="LIBYAN ARAB JAMAHIRIYA">Libyan Arab Jamahiriya</option><option value="LIECHTENSTEIN">Liechtenstein</option><option value="LITHUANIA">Lithuania</option><option value="LUXEMBOURG">Luxembourg</option><option value="MACAO">Macao</option><option value="MACEDONIA">Macedonia</option><option value="MADAGASCAR">Madagascar</option><option value="MALAWI">Malawi</option><option value="MALAYSIA">Malaysia</option><option value="MALDIVES">Maldives</option><option value="MALI">Mali</option><option value="MALTA">Malta</option><option value="MARSHALL ISLANDS">Marshall Islands</option><option value="MARTINIQUE">Martinique</option><option value="MAURITANIA">Mauritania</option><option value="MAURITIUS">Mauritius</option><option value="MAYOTTE">Mayotte</option><option value="MEXICO">Mexico</option><option value="MICRONESIA, FEDERATED STATES OF">Micronesia, Federated States of</option><option value="MOLDOVA, REPUBLIC OF">Moldova, Republic of</option><option value="MONACO">Monaco</option><option value="MONGOLIA">Mongolia</option><option value="MONTENEGRO">Montenegro</option><option value="MONTSERRAT">Montserrat</option><option value="MOROCCO">Morocco</option><option value="MOZAMBIQUE">Mozambique</option><option value="MYANMAR">Myanmar</option><option value="NAMIBIA">Namibia</option><option value="NAURU">Nauru</option><option value="NEPAL">Nepal</option><option value="NETHERLANDS">Netherlands</option><option value="NETHERLANDS ANTILLES">Netherlands Antilles</option><option value="NEW CALEDONIA">New Caledonia</option><option value="NEW ZEALAND">New Zealand</option><option value="NICARAGUA">Nicaragua</option><option value="NIGER">Niger</option><option value="NIGERIA">Nigeria</option><option value="NIUE">Niue</option><option value="NORFOLK ISLAND">Norfolk Island</option><option value="NORTH KOREA">North Korea</option><option value="NORTHERN MARIANA ISLANDS">Northern Mariana Islands</option><option value="NORWAY">Norway</option><option value="OMAN">Oman</option><option value="PAKISTAN">Pakistan</option><option value="PALAU">Palau</option><option value="PANAMA">Panama</option><option value="PAPUA NEW GUINEA">Papua New Guinea</option><option value="PARAGUAY">Paraguay</option><option value="PERU">Peru</option><option value="PHILIPPINES">Philippines</option><option value="PITCAIRN">Pitcairn</option><option value="POLAND">Poland</option><option value="PORTUGAL">Portugal</option><option value="PUERTO RICO">Puerto Rico</option><option value="QATAR">Qatar</option><option value="REUNION">Reunion</option><option value="ROMANIA">Romania</option><option value="RUSSIAN FEDERATION">Russian Federation</option><option value="RWANDA">Rwanda</option><option value="SAINT HELENA">Saint Helena</option><option value="SAINT KITTS AND NEVIS">Saint Kitts and Nevis</option><option value="SAINT LUCIA">Saint Lucia</option><option value="SAINT PIERRE AND MIQUELON">Saint Pierre and Miquelon</option><option value="SAINT VINCENT AND THE GRENADINES">Saint Vincent and the Grenadines</option><option value="SAMOA">Samoa</option><option value="SAN MARINO">San Marino</option><option value="SAO TOME AND PRINCIPE">Sao Tome and Principe</option><option value="SAUDI ARABIA">Saudi Arabia</option><option value="SENEGAL">Senegal</option><option value="SERBIA">Serbia</option><option value="SEYCHELLES">Seychelles</option><option value="SIERRA LEONE">Sierra Leone</option><option value="SINGAPORE">Singapore</option><option value="SLOVAKIA">Slovakia</option><option value="SLOVENIA">Slovenia</option><option value="SOLOMON ISLANDS">Solomon Islands</option><option value="SOMALIA">Somalia</option><option value="SOUTH AFRICA">South Africa</option><option value="SOUTH KOREA">South Korea</option><option value="SPAIN">Spain</option><option value="SRI LANKA">Sri Lanka</option><option value="SUDAN">Sudan</option><option value="SURINAME">Suriname</option><option value="SWAZILAND">Swaziland</option><option value="SWEDEN">Sweden</option><option value="SWITZERLAND">Switzerland</option><option value="SYRIAN ARAB REPUBLIC">Syrian Arab Republic</option><option value="TAIWAN, PROVINCE OF CHINA">Taiwan, Province of China</option><option value="TAJIKISTAN">Tajikistan</option><option value="TANZANIA, UNITED REPUBLIC OF">Tanzania, United Republic of</option><option value="THAILAND">Thailand</option><option value="TOGO">Togo</option><option value="TOKELAU">Tokelau</option><option value="TONGA">Tonga</option><option value="TRINIDAD AND TOBAGO">Trinidad and Tobago</option><option value="TUNISIA">Tunisia</option><option value="TURKEY">Turkey</option><option value="TURKMENISTAN">Turkmenistan</option><option value="TURKS AND CAICOS ISLANDS">Turks and Caicos Islands</option><option value="TUVALU">Tuvalu</option><option value="UGANDA">Uganda</option><option value="UKRAINE">Ukraine</option><option value="UNITED ARAB EMIRATES">United Arab Emirates</option><option value="UNITED KINGDOM">United Kingdom</option><option value="URUGUAY">Uruguay</option><option value="UZBEKISTAN">Uzbekistan</option><option value="VANUATU">Vanuatu</option><option value="VENEZUELA">Venezuela</option><option value="VIET NAM">Viet Nam</option><option value="VIRGIN ISLANDS, BRITISH">Virgin Islands, British</option><option value="VIRGIN ISLANDS, U.S.">Virgin Islands, U.s.</option><option value="WALLIS AND FUTUNA">Wallis and Futuna</option><option value="WESTERN SAHARA">Western Sahara</option><option value="YEMEN">Yemen</option><option value="ZAMBIA">Zambia</option><option value="ZIMBABWE">Zimbabwe</option></select>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="form-group">
						<label>State</label>
							<select id="austate" name="austate" class="form-control">
								<option value="WESTERN AUSTRALIA">WESTERN AUSTRALIA</option>
								<option value="NEW SOUTH WALES">NEW SOUTH WALES</option>
								<option value="QUEENSLAND">QUEENSLAND</option>
								<option value="VICTORIA">VICTORIA</option>
								<option value="SOUTH AUSTRALIA">SOUTH AUSTRALIA</option>
								<option value="TASMANIA">TASMANIA</option>
								<option value="NORTHERN TERRITORY">NORTHERN TERRITORY</option>
								<option value="ACT">ACT</option>
							</select>
					    	<input type="text" class="form-control controlstate" id="field-1450846691-text" name="field-1450846691" placeholder="" required="">
						</div>
					</div>
					
					<style type="text/css">
					label[for="mobilenumber"] span,
					label[for="homenumber"] span{
					color: red;
					font-size: 11px;
					margin-left: 10px;
					}
					</style>

					<div class="col-lg-12">
						<div class="col-lg-3">
							<div class="form-group">
							<label>Mobile Country Code</label>
					    	<select class="form-control  chosen-select" id="codemobile" data-placeholder="Choose a country...">
							<option value="61">+61 Australia</option>
							<option value="44">+44 United Kingdom</option>
							<option value="62">+62 Indonesia</option>
							<option value="91">+91 India</option>
							<option value="46">+46 Sweden</option>
							<option value="49">+49 Germany</option>
							<option value="1">+1 United States</option>
							<option value="93">+93 Afghanistan</option>
							<option value="355">+355 Albania</option>
							<option value="213">+213 Algeria</option>
							<option value="1-684">+1-684 American Samoa</option>
							<option value="376">+376 Andorra</option>
							<option value="244">+244 Angola</option>
							<option value="1-264">+1-264 Anguilla</option>
							<option value="672">+672 Antarctica</option>
							<option value="1-268">+1-268 Antigua and Barbuda</option>
							<option value="54">+54 Argentina</option>
							<option value="374">+374 Armenia</option>
							<option value="297">+297 Aruba</option>

							<option value="43">+43 Austria</option>
							<option value="994">+994 Azerbaijan</option>
							<option value="1-242">+1-242 Bahamas</option>
							<option value="973">+973 Bahrain</option>
							<option value="880">+880 Bangladesh</option>
							<option value="1-246">+1-246 Barbados</option>
							<option value="375">+375 Belarus</option>
							<option value="32">+32 Belgium</option>
							<option value="501">+501 Belize</option>
							<option value="229">+229 Benin</option>
							<option value="1-441">+1-441 Bermuda</option>
							<option value="975">+975 Bhutan</option>
							<option value="591">+591 Bolivia</option>
							<option value="387">+387 Bosnia and Herzegovina</option>
							<option value="267">+267 Botswana</option>
							<option value="55">+55 Brazil</option>
							<option value="246">+246 British Indian Ocean Territory</option>
							<option value="1-284">+1-284 British Virgin Islands</option>
							<option value="673">+673 Brunei</option>
							<option value="359">+359 Bulgaria</option>
							<option value="226">+226 Burkina Faso</option>
							<option value="257">+257 Burundi</option>
							<option value="855">+855 Cambodia</option>
							<option value="237">+237 Cameroon</option>
							<option value="1">+1 Canada</option>
							<option value="238">+238 Cape Verde</option>
							<option value="1-345">+1-345 Cayman Islands</option>
							<option value="236">+236 Central African Republic</option>
							<option value="235">+235 Chad</option>
							<option value="56">+56 Chile</option>
							<option value="86">+86 China</option>
							<option value="61">+61 Christmas Island</option>
							<option value="61">+61 Cocos Islands</option>
							<option value="57">+57 Colombia</option>
							<option value="269">+269 Comoros</option>
							<option value="682">+682 Cook Islands</option>
							<option value="506">+506 Costa Rica</option>
							<option value="385">+385 Croatia</option>
							<option value="53">+53 Cuba</option>
							<option value="599">+599 Curacao</option>
							<option value="357">+357 Cyprus</option>
							<option value="420">+420 Czech Republic</option>
							<option value="243">+243 Democratic Republic of the Congo</option>
							<option value="45">+45 Denmark</option>
							<option value="253">+253 Djibouti</option>
							<option value="1-767">+1-767 Dominica</option>
							<option value="1-809, 1-829, 1-849">+1-809, 1-829, 1-849 Dominican Republic</option>
							<option value="670">+670 East Timor</option>
							<option value="593">+593 Ecuador</option>
							<option value="20">+20 Egypt</option>
							<option value="503">+503 El Salvador</option>
							<option value="240">+240 Equatorial Guinea</option>
							<option value="291">+291 Eritrea</option>
							<option value="372">+372 Estonia</option>
							<option value="251">+251 Ethiopia</option>
							<option value="500">+500 Falkland Islands</option>
							<option value="298">+298 Faroe Islands</option>
							<option value="679">+679 Fiji</option>
							<option value="358">+358 Finland</option>
							<option value="33">+33 France</option>
							<option value="689">+689 French Polynesia</option>
							<option value="241">+241 Gabon</option>
							<option value="220">+220 Gambia</option>
							<option value="995">+995 Georgia</option>

							<option value="233">+233 Ghana</option>
							<option value="350">+350 Gibraltar</option>
							<option value="30">+30 Greece</option>
							<option value="299">+299 Greenland</option>
							<option value="1-473">+1-473 Grenada</option>
							<option value="1-671">+1-671 Guam</option>
							<option value="502">+502 Guatemala</option>
							<option value="44-1481">+44-1481 Guernsey</option>
							<option value="224">+224 Guinea</option>
							<option value="245">+245 Guinea-Bissau</option>
							<option value="592">+592 Guyana</option>
							<option value="509">+509 Haiti</option>
							<option value="504">+504 Honduras</option>
							<option value="852">+852 Hong Kong</option>
							<option value="36">+36 Hungary</option>
							<option value="354">+354 Iceland</option>

							<option value="98">+98 Iran</option>
							<option value="964">+964 Iraq</option>
							<option value="353">+353 Ireland</option>
							<option value="44-1624">+44-1624 Isle of Man</option>
							<option value="972">+972 Israel</option>
							<option value="39">+39 Italy</option>
							<option value="225">+225 Ivory Coast</option>
							<option value="1-876">+1-876 Jamaica</option>
							<option value="81">+81 Japan</option>
							<option value="44-1534">+44-1534 Jersey</option>
							<option value="962">+962 Jordan</option>
							<option value="7">+7 Kazakhstan</option>
							<option value="254">+254 Kenya</option>
							<option value="686">+686 Kiribati</option>
							<option value="383">+383 Kosovo</option>
							<option value="965">+965 Kuwait</option>
							<option value="996">+996 Kyrgyzstan</option>
							<option value="856">+856 Laos</option>
							<option value="371">+371 Latvia</option>
							<option value="961">+961 Lebanon</option>
							<option value="266">+266 Lesotho</option>
							<option value="231">+231 Liberia</option>
							<option value="218">+218 Libya</option>
							<option value="423">+423 Liechtenstein</option>
							<option value="370">+370 Lithuania</option>
							<option value="352">+352 Luxembourg</option>
							<option value="853">+853 Macao</option>
							<option value="389">+389 Macedonia</option>
							<option value="261">+261 Madagascar</option>
							<option value="265">+265 Malawi</option>
							<option value="60">+60 Malaysia</option>
							<option value="960">+960 Maldives</option>
							<option value="223">+223 Mali</option>
							<option value="356">+356 Malta</option>
							<option value="692">+692 Marshall Islands</option>
							<option value="222">+222 Mauritania</option>
							<option value="230">+230 Mauritius</option>
							<option value="262">+262 Mayotte</option>
							<option value="52">+52 Mexico</option>
							<option value="691">+691 Micronesia</option>
							<option value="373">+373 Moldova</option>
							<option value="377">+377 Monaco</option>
							<option value="976">+976 Mongolia</option>
							<option value="382">+382 Montenegro</option>
							<option value="1-664">+1-664 Montserrat</option>
							<option value="212">+212 Morocco</option>
							<option value="258">+258 Mozambique</option>
							<option value="95">+95 Myanmar</option>
							<option value="264">+264 Namibia</option>
							<option value="674">+674 Nauru</option>
							<option value="977">+977 Nepal</option>
							<option value="31">+31 Netherlands</option>
							<option value="599">+599 Netherlands Antilles</option>
							<option value="687">+687 New Caledonia</option>
							<option value="64">+64 New Zealand</option>
							<option value="505">+505 Nicaragua</option>
							<option value="227">+227 Niger</option>
							<option value="234">+234 Nigeria</option>
							<option value="683">+683 Niue</option>
							<option value="850">+850 North Korea</option>
							<option value="1-670">+1-670 Northern Mariana Islands</option>
							<option value="47">+47 Norway</option>
							<option value="968">+968 Oman</option>
							<option value="92">+92 Pakistan</option>
							<option value="680">+680 Palau</option>
							<option value="970">+970 Palestine</option>
							<option value="507">+507 Panama</option>
							<option value="675">+675 Papua New Guinea</option>
							<option value="595">+595 Paraguay</option>
							<option value="51">+51 Peru</option>
							<option value="63">+63 Philippines</option>
							<option value="64">+64 Pitcairn</option>
							<option value="48">+48 Poland</option>
							<option value="351">+351 Portugal</option>
							<option value="1-787, 1-939">+1-787, 1-939 Puerto Rico</option>
							<option value="974">+974 Qatar</option>
							<option value="242">+242 Republic of the Congo</option>
							<option value="262">+262 Reunion</option>
							<option value="40">+40 Romania</option>
							<option value="7">+7 Russia</option>
							<option value="250">+250 Rwanda</option>
							<option value="590">+590 Saint Barthelemy</option>
							<option value="290">+290 Saint Helena</option>
							<option value="1-869">+1-869 Saint Kitts and Nevis</option>
							<option value="1-758">+1-758 Saint Lucia</option>
							<option value="590">+590 Saint Martin</option>
							<option value="508">+508 Saint Pierre and Miquelon</option>
							<option value="1-784">+1-784 Saint Vincent and the Grenadines</option>
							<option value="685">+685 Samoa</option>
							<option value="378">+378 San Marino</option>
							<option value="239">+239 Sao Tome and Principe</option>
							<option value="966">+966 Saudi Arabia</option>
							<option value="221">+221 Senegal</option>
							<option value="381">+381 Serbia</option>
							<option value="248">+248 Seychelles</option>
							<option value="232">+232 Sierra Leone</option>
							<option value="65">+65 Singapore</option>
							<option value="1-721">+1-721 Sint Maarten</option>
							<option value="421">+421 Slovakia</option>
							<option value="386">+386 Slovenia</option>
							<option value="677">+677 Solomon Islands</option>
							<option value="252">+252 Somalia</option>
							<option value="27">+27 South Africa</option>
							<option value="82">+82 South Korea</option>
							<option value="211">+211 South Sudan</option>
							<option value="34">+34 Spain</option>
							<option value="94">+94 Sri Lanka</option>
							<option value="249">+249 Sudan</option>
							<option value="597">+597 Suriname</option>
							<option value="47">+47 Svalbard and Jan Mayen</option>
							<option value="268">+268 Swaziland</option>

							<option value="41">+41 Switzerland</option>
							<option value="963">+963 Syria</option>
							<option value="886">+886 Taiwan</option>
							<option value="992">+992 Tajikistan</option>
							<option value="255">+255 Tanzania</option>
							<option value="66">+66 Thailand</option>
							<option value="228">+228 Togo</option>
							<option value="690">+690 Tokelau</option>
							<option value="676">+676 Tonga</option>
							<option value="1-868">+1-868 Trinidad and Tobago</option>
							<option value="216">+216 Tunisia</option>
							<option value="90">+90 Turkey</option>
							<option value="993">+993 Turkmenistan</option>
							<option value="1-649">+1-649 Turks and Caicos Islands</option>
							<option value="688">+688 Tuvalu</option>
							<option value="1-340">+1-340 U.S. Virgin Islands</option>
							<option value="256">+256 Uganda</option>
							<option value="380">+380 Ukraine</option>
							<option value="971">+971 United Arab Emirates</option>

							<option value="598">+598 Uruguay</option>
							<option value="998">+998 Uzbekistan</option>
							<option value="678">+678 Vanuatu</option>
							<option value="379">+379 Vatican</option>
							<option value="58">+58 Venezuela</option>
							<option value="84">+84 Vietnam</option>
							<option value="681">+681 Wallis and Futuna</option>
							<option value="212">+212 Western Sahara</option>
							<option value="967">+967 Yemen</option>
							<option value="260">+260 Zambia</option>
							<option value="263">+263 Zimbabwe</option>

							</select>
							</div>	
						</div>
						<div class="col-lg-9">
							<div class="form-group">
							<label for="mobilenumber">Mobile Number <span></span></label>
							<input type="text" class="form-control phonenumber" id="mobilenumber" required="">
					    	<!--<input type="text" class="form-control" id="field-1450771290-text" name="field-1450771290" placeholder="" required>-->
					    		    <input type="hidden" class="form-control" id="field-1450771290-text" name="field-1450771290">
							</div>
						</div>
						
					</div>
					<div class="col-lg-12">
						<div class="col-lg-3">
							<label>Phone Country Code</label>
							<select class="form-control  chosen-select" id="codehome" data-placeholder="Choose a country...">
							<option value="61">+61 Australia</option>
							<option value="44">+44 United Kingdom</option>
							<option value="62">+62 Indonesia</option>
							<option value="91">+91 India</option>
							<option value="46">+46 Sweden</option>
							<option value="49">+49 Germany</option>
							<option value="1">+1 United States</option>
							<option value="93">+93 Afghanistan</option>
							<option value="355">+355 Albania</option>
							<option value="213">+213 Algeria</option>
							<option value="1-684">+1-684 American Samoa</option>
							<option value="376">+376 Andorra</option>
							<option value="244">+244 Angola</option>
							<option value="1-264">+1-264 Anguilla</option>
							<option value="672">+672 Antarctica</option>
							<option value="1-268">+1-268 Antigua and Barbuda</option>
							<option value="54">+54 Argentina</option>
							<option value="374">+374 Armenia</option>
							<option value="297">+297 Aruba</option>

							<option value="43">+43 Austria</option>
							<option value="994">+994 Azerbaijan</option>
							<option value="1-242">+1-242 Bahamas</option>
							<option value="973">+973 Bahrain</option>
							<option value="880">+880 Bangladesh</option>
							<option value="1-246">+1-246 Barbados</option>
							<option value="375">+375 Belarus</option>
							<option value="32">+32 Belgium</option>
							<option value="501">+501 Belize</option>
							<option value="229">+229 Benin</option>
							<option value="1-441">+1-441 Bermuda</option>
							<option value="975">+975 Bhutan</option>
							<option value="591">+591 Bolivia</option>
							<option value="387">+387 Bosnia and Herzegovina</option>
							<option value="267">+267 Botswana</option>
							<option value="55">+55 Brazil</option>
							<option value="246">+246 British Indian Ocean Territory</option>
							<option value="1-284">+1-284 British Virgin Islands</option>
							<option value="673">+673 Brunei</option>
							<option value="359">+359 Bulgaria</option>
							<option value="226">+226 Burkina Faso</option>
							<option value="257">+257 Burundi</option>
							<option value="855">+855 Cambodia</option>
							<option value="237">+237 Cameroon</option>
							<option value="1">+1 Canada</option>
							<option value="238">+238 Cape Verde</option>
							<option value="1-345">+1-345 Cayman Islands</option>
							<option value="236">+236 Central African Republic</option>
							<option value="235">+235 Chad</option>
							<option value="56">+56 Chile</option>
							<option value="86">+86 China</option>
							<option value="61">+61 Christmas Island</option>
							<option value="61">+61 Cocos Islands</option>
							<option value="57">+57 Colombia</option>
							<option value="269">+269 Comoros</option>
							<option value="682">+682 Cook Islands</option>
							<option value="506">+506 Costa Rica</option>
							<option value="385">+385 Croatia</option>
							<option value="53">+53 Cuba</option>
							<option value="599">+599 Curacao</option>
							<option value="357">+357 Cyprus</option>
							<option value="420">+420 Czech Republic</option>
							<option value="243">+243 Democratic Republic of the Congo</option>
							<option value="45">+45 Denmark</option>
							<option value="253">+253 Djibouti</option>
							<option value="1-767">+1-767 Dominica</option>
							<option value="1-809, 1-829, 1-849">+1-809, 1-829, 1-849 Dominican Republic</option>
							<option value="670">+670 East Timor</option>
							<option value="593">+593 Ecuador</option>
							<option value="20">+20 Egypt</option>
							<option value="503">+503 El Salvador</option>
							<option value="240">+240 Equatorial Guinea</option>
							<option value="291">+291 Eritrea</option>
							<option value="372">+372 Estonia</option>
							<option value="251">+251 Ethiopia</option>
							<option value="500">+500 Falkland Islands</option>
							<option value="298">+298 Faroe Islands</option>
							<option value="679">+679 Fiji</option>
							<option value="358">+358 Finland</option>
							<option value="33">+33 France</option>
							<option value="689">+689 French Polynesia</option>
							<option value="241">+241 Gabon</option>
							<option value="220">+220 Gambia</option>
							<option value="995">+995 Georgia</option>

							<option value="233">+233 Ghana</option>
							<option value="350">+350 Gibraltar</option>
							<option value="30">+30 Greece</option>
							<option value="299">+299 Greenland</option>
							<option value="1-473">+1-473 Grenada</option>
							<option value="1-671">+1-671 Guam</option>
							<option value="502">+502 Guatemala</option>
							<option value="44-1481">+44-1481 Guernsey</option>
							<option value="224">+224 Guinea</option>
							<option value="245">+245 Guinea-Bissau</option>
							<option value="592">+592 Guyana</option>
							<option value="509">+509 Haiti</option>
							<option value="504">+504 Honduras</option>
							<option value="852">+852 Hong Kong</option>
							<option value="36">+36 Hungary</option>
							<option value="354">+354 Iceland</option>

							<option value="98">+98 Iran</option>
							<option value="964">+964 Iraq</option>
							<option value="353">+353 Ireland</option>
							<option value="44-1624">+44-1624 Isle of Man</option>
							<option value="972">+972 Israel</option>
							<option value="39">+39 Italy</option>
							<option value="225">+225 Ivory Coast</option>
							<option value="1-876">+1-876 Jamaica</option>
							<option value="81">+81 Japan</option>
							<option value="44-1534">+44-1534 Jersey</option>
							<option value="962">+962 Jordan</option>
							<option value="7">+7 Kazakhstan</option>
							<option value="254">+254 Kenya</option>
							<option value="686">+686 Kiribati</option>
							<option value="383">+383 Kosovo</option>
							<option value="965">+965 Kuwait</option>
							<option value="996">+996 Kyrgyzstan</option>
							<option value="856">+856 Laos</option>
							<option value="371">+371 Latvia</option>
							<option value="961">+961 Lebanon</option>
							<option value="266">+266 Lesotho</option>
							<option value="231">+231 Liberia</option>
							<option value="218">+218 Libya</option>
							<option value="423">+423 Liechtenstein</option>
							<option value="370">+370 Lithuania</option>
							<option value="352">+352 Luxembourg</option>
							<option value="853">+853 Macao</option>
							<option value="389">+389 Macedonia</option>
							<option value="261">+261 Madagascar</option>
							<option value="265">+265 Malawi</option>
							<option value="60">+60 Malaysia</option>
							<option value="960">+960 Maldives</option>
							<option value="223">+223 Mali</option>
							<option value="356">+356 Malta</option>
							<option value="692">+692 Marshall Islands</option>
							<option value="222">+222 Mauritania</option>
							<option value="230">+230 Mauritius</option>
							<option value="262">+262 Mayotte</option>
							<option value="52">+52 Mexico</option>
							<option value="691">+691 Micronesia</option>
							<option value="373">+373 Moldova</option>
							<option value="377">+377 Monaco</option>
							<option value="976">+976 Mongolia</option>
							<option value="382">+382 Montenegro</option>
							<option value="1-664">+1-664 Montserrat</option>
							<option value="212">+212 Morocco</option>
							<option value="258">+258 Mozambique</option>
							<option value="95">+95 Myanmar</option>
							<option value="264">+264 Namibia</option>
							<option value="674">+674 Nauru</option>
							<option value="977">+977 Nepal</option>
							<option value="31">+31 Netherlands</option>
							<option value="599">+599 Netherlands Antilles</option>
							<option value="687">+687 New Caledonia</option>
							<option value="64">+64 New Zealand</option>
							<option value="505">+505 Nicaragua</option>
							<option value="227">+227 Niger</option>
							<option value="234">+234 Nigeria</option>
							<option value="683">+683 Niue</option>
							<option value="850">+850 North Korea</option>
							<option value="1-670">+1-670 Northern Mariana Islands</option>
							<option value="47">+47 Norway</option>
							<option value="968">+968 Oman</option>
							<option value="92">+92 Pakistan</option>
							<option value="680">+680 Palau</option>
							<option value="970">+970 Palestine</option>
							<option value="507">+507 Panama</option>
							<option value="675">+675 Papua New Guinea</option>
							<option value="595">+595 Paraguay</option>
							<option value="51">+51 Peru</option>
							<option value="63">+63 Philippines</option>
							<option value="64">+64 Pitcairn</option>
							<option value="48">+48 Poland</option>
							<option value="351">+351 Portugal</option>
							<option value="1-787, 1-939">+1-787, 1-939 Puerto Rico</option>
							<option value="974">+974 Qatar</option>
							<option value="242">+242 Republic of the Congo</option>
							<option value="262">+262 Reunion</option>
							<option value="40">+40 Romania</option>
							<option value="7">+7 Russia</option>
							<option value="250">+250 Rwanda</option>
							<option value="590">+590 Saint Barthelemy</option>
							<option value="290">+290 Saint Helena</option>
							<option value="1-869">+1-869 Saint Kitts and Nevis</option>
							<option value="1-758">+1-758 Saint Lucia</option>
							<option value="590">+590 Saint Martin</option>
							<option value="508">+508 Saint Pierre and Miquelon</option>
							<option value="1-784">+1-784 Saint Vincent and the Grenadines</option>
							<option value="685">+685 Samoa</option>
							<option value="378">+378 San Marino</option>
							<option value="239">+239 Sao Tome and Principe</option>
							<option value="966">+966 Saudi Arabia</option>
							<option value="221">+221 Senegal</option>
							<option value="381">+381 Serbia</option>
							<option value="248">+248 Seychelles</option>
							<option value="232">+232 Sierra Leone</option>
							<option value="65">+65 Singapore</option>
							<option value="1-721">+1-721 Sint Maarten</option>
							<option value="421">+421 Slovakia</option>
							<option value="386">+386 Slovenia</option>
							<option value="677">+677 Solomon Islands</option>
							<option value="252">+252 Somalia</option>
							<option value="27">+27 South Africa</option>
							<option value="82">+82 South Korea</option>
							<option value="211">+211 South Sudan</option>
							<option value="34">+34 Spain</option>
							<option value="94">+94 Sri Lanka</option>
							<option value="249">+249 Sudan</option>
							<option value="597">+597 Suriname</option>
							<option value="47">+47 Svalbard and Jan Mayen</option>
							<option value="268">+268 Swaziland</option>

							<option value="41">+41 Switzerland</option>
							<option value="963">+963 Syria</option>
							<option value="886">+886 Taiwan</option>
							<option value="992">+992 Tajikistan</option>
							<option value="255">+255 Tanzania</option>
							<option value="66">+66 Thailand</option>
							<option value="228">+228 Togo</option>
							<option value="690">+690 Tokelau</option>
							<option value="676">+676 Tonga</option>
							<option value="1-868">+1-868 Trinidad and Tobago</option>
							<option value="216">+216 Tunisia</option>
							<option value="90">+90 Turkey</option>
							<option value="993">+993 Turkmenistan</option>
							<option value="1-649">+1-649 Turks and Caicos Islands</option>
							<option value="688">+688 Tuvalu</option>
							<option value="1-340">+1-340 U.S. Virgin Islands</option>
							<option value="256">+256 Uganda</option>
							<option value="380">+380 Ukraine</option>
							<option value="971">+971 United Arab Emirates</option>

							<option value="598">+598 Uruguay</option>
							<option value="998">+998 Uzbekistan</option>
							<option value="678">+678 Vanuatu</option>
							<option value="379">+379 Vatican</option>
							<option value="58">+58 Venezuela</option>
							<option value="84">+84 Vietnam</option>
							<option value="681">+681 Wallis and Futuna</option>
							<option value="212">+212 Western Sahara</option>
							<option value="967">+967 Yemen</option>
							<option value="260">+260 Zambia</option>
							<option value="263">+263 Zimbabwe</option>

							</select>
						</div>
						<div class="col-lg-9">
							<div class="form-group">
								<label for="homenumber">Home Phone Number <span></span></label>
								<input type="text" class="form-control phonenumber" id="homenumber">
					    			    <input type="hidden" class="form-control" id="field-1450846557-text" name="field-1450846557">
							</div>
						</div>
						
					</div>
					<div class="col-lg-12">
						<div class="form-group">
						<label id="email_lbl">Email</label>
					    	<input type="email" class="form-control" id="field-1427865032-text" name="field-1427865032" placeholder="" required="">
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
						<label>Date of birth</label>
					    	<input type="text" class="form-control datepicker" placeholder="" id="field-1450771524-text" name="field-1450771524" required="">
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
						<label id="msgpromocode">Promo code</label>
					    	<input type="text" class="form-control" placeholder="" id="field-1452846611-text" name="field-1452846611">
						</div>
					</div>

					<div class="col-lg-12">
						<div class="form-group">
						<label>Are you a Karma Group Member ?</label>

							<select class="selectpicker form-control" id="isodysseymember" name="isodysseymember" required="">
								<option value="">-Select-</option>
								<option value="Yes">YES</option>
								<option value="No">NO</option>
							</select>
							<div style="display:none;">
							<input name="field-1461230828[]" type="checkbox" id="yesmember" value="Yes I am a member"><label for="yesmember">Yes I am a member</label>
							</div>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="form-group">
						<label>Odyssey Membership Number ?</label>
							<input id="field-1461230871-text" class="form-control" type="text" name="field-1461230871">
						</div>
					</div>

					<div class="col-lg-12">
						<div class="form-group">
					    	<div class="checkbox">
							    <label for="checkreceive">
							      <input type="checkbox" name="field-1449560763[]" id="checkreceive" value="I agree to receive email communications &amp; information from the Karma Club team" required="" checked=""> I agree to receive email communications &amp; information from the Karma Club team
							    </label>
							</div>
						</div>
					</div>
					<div id="field-1463389070"><input id="field-1463389070-text" type="hidden" name="field-1463389070" value=""></div>
					<div id="field-1427866079"><input id="field-1427866079-text" type="hidden" name="field-1427866079" value="Karma Club"></div>
					<div id="field-1427866111"><input id="field-1427866111-text" type="hidden" name="field-1427866111" value="Digital"></div>
					<div id="field-1427866217"><input id="field-1427866217-text" type="hidden" name="field-1427866217" value="Web"></div>
					<div id="field-1427866260"><input id="field-1427866260-text" type="hidden" name="field-1427866260" value="All Countries"></div>
					<div id="field-1428569141"><input id="field-1428569141-text" type="hidden" name="field-1428569141" value="Internal Form"></div>
					<div id="field-1450837999"><input id="field-1450837999-text" type="hidden" name="field-1450837999" value="cfb005bf-ac11-698b-7475-55f90545dadf"></div>
					<div id="field-1471322549"><input id="field-1471322549-text" type="hidden" name="field-1471322549" value="Karma Club Trial Member"></div>
						
					<div class="col-lg-12">
					<p><strong>* Karma Club Membership Fee = $499.</strong></p>
					</div>
					<button id="btn-submit">SUBMIT</button>
					<div class="loader">
				        <div class="loader-inner ball-pulse">
				          <div></div>
				          <div></div>
				          <div></div>
				        </div>
				    </div>
				</form>

				<form id="joinForm" action="" method="post" name="joinForm" class="form-response">

							<input type="hidden" class="code" id="title" name="title">
							<input type="hidden" class="form-control" id="firstName" placeholder="First Name" name="firstName" required="">
							<input type="hidden" class="form-control" id="surName" placeholder="Last Name" name="surName" required="">

							<input type="hidden" class="form-control" id="emailID" placeholder="Email" name="emailID" required="">

							<input type="hidden" class="code" id="mobileCode" name="mobileCode">
						    <input type="hidden" class="complete" id="mobileNumber" name="mobileNumber" value="">


						    <input type="hidden" class="code" id="homePhoneCode" name="homePhoneCode">
						    <input type="hidden" class="complete" id="homePhoneNumber" name="homePhoneNumber" value="">

						    <input type="hidden" class="form-control" id="streetLine1" name="streetLine1">
						    <input type="hidden" class="form-control" id="streetLine2" name="streetLine2">

						    <input type="hidden" class="form-control" id="city" name="city" >

						    <input type="hidden" class="form-control" id="state" name="state" >

						    <input type="hidden" class="code" id="country" name="country">

						    <input type="hidden" id="promoCode" name="promoCode">

						    <input type="hidden" class="form-control" id="postCode" name="postCode">

						    <input type="hidden" class="form-control" id="birthOfDate" name="birthOfDate" >

						    <input type="hidden" class="form-control" id="birthOfMonth" name="birthOfMonth" >

						    <input type="hidden" class="form-control" id="birthOfYear" name="birthOfYear" >

						    <input type="hidden" name="dateOfBirth" id="dateOfBirth" />

				</form>

    		</div>
		</div>
		</div>
	</div>
   
    <!--<script src="js/jquery.min.js"></script>-->
    
    <!-- <script type="text/javascript" src="inboxscript/jquery.min.js"></script> -->
    <script  src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="  crossorigin="anonymous"></script>
<!--     <script src="js/bootstrap.min.js"></script>

	<script type="text/javascript" src="inboxscript/jquery-ui-1.10.0.custom.min.js"></script>
	<script type="text/javascript" src="inboxscript/jquery.validate.min.js"></script>
	<script type="text/javascript" src="inboxscript/additional-methods.min.js"></script> -->
	
    <script>
    

// 	    $('#mobilenumber').bind('input keyup', function(){
// 	    validatephonenumber($(this), $('#codemobile'));
// 	    });
// 	    $('#codemobile').change(function(){
// 	    validatephonenumber($('#mobilenumber'), $(this));
// 	    });
	    
// 	    $('#homenumber').bind('input keyup', function(){
// 	    validatephonenumber($(this), $('#codemobile'));
// 	    });
// 	    $('#codehome').change(function(){
// 	    validatephonenumber($('#homenumber'), $(this));
// 	    });        
	    
// 	    function validatephonenumber(e, e_code){
	    
// 	    var str = $.trim(e.val());
	    
// 	    var newstring = '';
// 	    fz = false;                 
// 	    for(var i = 0; i < str.length; i++) { 
// 	    if(str[i] == '0' && fz == false){
// 	    }else{
// 	    newstring = newstring + str[i];
// 	    fz = true;
// 	    }
// 	    }
	    
// 	    e.val(newstring.replace(/[^\/\d]/g,''));
	    
// 	    ////////CEK W/ GOOGLE LIB///////////
// 	    var completePhoneNumber = $.trim( e_code.val() + e.val() );
// 	    validatephoneComplete(e, completePhoneNumber);
// 	    }
	    
	    
// 	    function msgPhoneValidation(e, tf){
// 	    if(tf == true){
// 	    e.closest('div').find('label span').html('valid');
// 	    e.closest('div').find('label span').css('color', 'green');
// 	    }else{
// 	    e.closest('div').find('label span').html('Invalid Format');                       
// 	    e.closest('div').find('label span').css('color', 'red');
// 	    }
// 	    }
	    
// 	    function validatephoneComplete(e, v){
	    
// 	    if(e.val() == ''){
// 	    e.closest('div').find('label span').html('');
// 	    return false;
// 	    }
// 	    if((e.val()).length < 2){
// 	    msgPhoneValidation(e, false);
// 	    return false;
// 	    }
	    
// 	    $.ajax({
// 	    // url: "http://localhost:3002/phone-api?number="+ v,
// 	    url: "https://phone.karmagroup.com:3000/?number="+ v,
	    
// 	    statusCode: {
// 	    500: function() {
// 	    msgPhoneValidation(e, false);
// 	    }
// 	    },
	    
// 	    success: function(result){
	    
// 	    // console.log(result);
// 	    if(result == true){
// 	    msgPhoneValidation(e, true);
// 		e.closest('div').find('input[type="hidden"]').val(v);
	    
// 	    }else{
// 	    msgPhoneValidation(e, false);
// 		e.closest('div').find('input[type="hidden"]').val('');                              
// 	    }
// 	    }});                   
// 	    }
	    
	    
//     // first here
// ///CEK EMAIL
// $('#field-1427865032-text').change(function(){
// $.ajax({
// type:"post",
// url: 'https://karmagroup.com/karmaclubmerge/api/checkemail.php',
// data: "email="+ $(this).val(),
// success:function(data){

// console.clear();
// console.log(data);

// if(data == 1){
// $('#email_lbl').html('Email: <span style="color: red;">' + $('#field-1427865032-text').val() + ' already registered.</span>');
// $('#btn-submit').prop('disabled', true);
// }else{
// $('#email_lbl').html('Email');
// $('#btn-submit').prop('disabled', false);     
// }
// }
// }); 
// });    
    

$('#field-1452846611-text').bind('input keyup', function(){
    var $this = $(this);
    var delay = 1000; // 1 seconds delay
    var pcode = '';
    var msg = '';
    clearTimeout($this.data('timer'));
    console.log('asdasdasd:'+$('#form-257').serialize())
//     $this.data('timer', setTimeout(function(){
//         $this.removeData('timer');

//         // action
// 		pcode = $('#field-1452846611-text').val().toUpperCase(); 
// 		if (pcode.length !== 0) { 
// //ajax
// var requestcheck = $.ajax({
// type: "POST",
// url: 'https://karmagroup.com/karmaclubmerge/public.php',
// data:  $('#form-257').serialize(),
// });

// requestcheck.done(function(msghtml) {

// if (msghtml == '1') { // code not exsist in DB, you can add this code to database
// $("#msgpromocode").text('Promo Code: '+ pcode +' Accepted.');
// $('#field-1452846611-text').css('background-color', '#bfefba');
// //$('#idbuttonprimary').removeAttr('disabled');
// //$('#idbuttonprimary').val('Add code:'+ pcode +' to Database');
// }
// else if (msghtml == '0') { // code already exsist in DB, you cannot add this code to database
// $("#msgpromocode").text('Promo Code: '+ pcode +' is not accepted.');
// $('#field-1452846611-text').css('background-color', '#f7d0cd');
// $('#field-1452846611-text').val("");
// //$('#idbuttonprimary').attr('disabled', 'disabled');
// }

// });

// requestcheck.fail(function(jqXHR, textStatus) {
// alert( "Connection Failed, unable to load database: " + textStatus );
// });
// //eof ajax
// 		}      

//         // eof action

//     }, delay));
// });


 //    jQuery('#field-1452846611-text').on('input propertychange paste', function() {
 //    	pcode = $('#field-1452846611-text').val().toUpperCase();

 //    	if (pcode == "BOAT") { msg = "Promo Code: BOAT Accepted"; }
 //    	else if (pcode == "BRESTCANCER") { msg = "Promo Code: BrestCancer Accepted"; } 
	// 	else if (pcode == "CONCEPT MARKETING") { msg = "Promo Code: Concept Marketing Accepted"; }
	// 	else if (pcode == "ENDURIA") { msg = "Promo Code: Enduria Accepted"; }
	// 	else if (pcode == "IP2016") { msg = "Promo Code: IP2016 Accepted"; }
	// 	else if (pcode == "KC ROSSENDROF") { msg = "Promo Code: KC Rossendrof Accepted"; }
	// 	else if (pcode == "MAGIC") { msg = "Promo Code: MAGIC Accepted"; }
	// 	else if (pcode == "NEWSCORP") { msg = "Promo Code: NewsCorp Accepted"; }
	// 	else if (pcode == "NEXTGENKP") { msg = "Promo Code: NEXTGENKP Accepted"; }
	// 	else if (pcode == "OWNERS") { msg = "Promo Code: OWNERS Accepted"; }
	// 	else if (pcode == "PERTH") { msg = "Promo Code: PERTH Accepted"; }
	// 	else if (pcode == "PERTH UPMARKET") { msg = "Promo Code: PERTH UPMARKET Accepted"; }
	// 	else if (pcode == "PINKTANK") { msg = "Promo Code: PINKTANK Accepted"; }
	// 	else if (pcode == "PINK TANK") { msg = "Promo Code: PINK TANK Accepted"; }
	// 	else if (pcode == "POLO") { msg = "Promo Code: POLO Accepted"; }
	// 	else if (pcode == "PROGRAMMED") { msg = "Promo Code: PROGRAMMED Accepted"; }
	// 	else if (pcode == "ROSSLYNPARK") { msg = "Promo Code: ROSSLYNPARK Accepted"; }
	// 	else if (pcode == "ROSSLYN PARK") { msg = "Promo Code: ROSSLYN PARK Accepted"; }
	// 	else if (pcode == "ROYALPERTHSHOW") { msg = "Promo Code: ROYALPERTHSHOW Accepted"; }
	// 	else if (pcode == "ROYAL PERTH SHOW") { msg = "Promo Code: ROYAL PERTH SHOW Accepted"; }
	// 	else if (pcode == "RSHOW16") { msg = "Promo Code: RSHOW16 Accepted"; }
	// 	else if (pcode == "RUGBYWA17") { msg = "Promo Code: RUGBYWA17 Accepted"; }
	// 	else if (pcode == "SHAWSEY") { msg = "Promo Code: SHAWSEY Accepted"; }
	// 	else if (pcode == "SKY") { msg = "Promo Code: SKY Accepted"; }
	// 	else if (pcode == "STOKES and MONTCREIFF") { msg = "Promo Code: STOKES and MONTCREIFF Accepted"; }
	// 	else if (pcode == "STOKES") { msg = "Promo Code: STOKES Accepted"; }
	// 	else if (pcode == "SWIM17") { msg = "Promo Code: SWIM17 Accepted"; }
	// 	else if (pcode == "TEAMARCHIE") { msg = "Promo Code: TEAMARCHIE Accepted"; }
	// 	else if (pcode == "TEAM ARCHIE") { msg = "Promo Code: TEAM ARCHIE Accepted"; }

	// 	if (pcode != null) {
	// 	    alert(pcode);
	// 	} else {
	// 	    alert("Valid number");
	// 	}
	// });

	$(document).ready(function() {
		$('#form-257').on('change', function (e) {

			var fname = $('#fname').val();
	        var lname = $('#lname').val();
	        //Fill first name for print
	        $('#field-1457403494-text').val(fname);

	        //Fill last name for print
	        $('#field-1457403528-text').val(lname);

			$('input[type=text]').val(function () {
				return this.value.toUpperCase();
			});

			$('#field-1450770516-country option').val(function () {
				return this.value.toUpperCase();
			});

			$('#field-1450771166-contents').val(function () {
				return this.value.toUpperCase();
			});

			var austateval = $('#austate').val();
			var coc = $('.controlcountry').val();
			if (coc == 'AUSTRALIA'){
				$('#austate').css('display','block');
				$('.controlstate').css('opacity','0');
				$('.controlstate').val(austateval);
			}

			var omember = $("#isodysseymember").val();
			if (omember == 'Yes'){
				$('#yesmember').prop('checked', true);
				$('#field-1460429713-text').prop('required', true);
			}else{
				$('#yesmember').prop('checked', false);
			}


			return true;
		});


	 	$('.datepicker').datepicker({
		 	changeYear: true,
		 	yearRange: '-80:+10',
		 	dateFormat: 'mm/dd/yy'
		});
		
	    $('#form-257').validate({
	     	onsubmit: true,
			errorClass: "error-validator",
	        errorElement: "div",
	        wrapper: "div",
	        errorPlacement: function(error, element) {
            offset = element.offset();
            error.insertBefore(element);
            error.addClass('message-validator');
            error.css('position', 'absolute');
            error.css('right', '15px');
            error.css('opacity', '0.8');
			error.css('top', $(element).position().top);
        }
		});
		
		$.support.cors = true;
		
		// $('#btn-submit').on('click', function(e) { 
	 //        e.preventDefault();
	        
	 //        var btn = $('#form-257').children('button');
	 //        var isvalidate = $('#form-257').valid();
	 //        var emailval = $('#field-1427865032-text').val();
	 //        if (isvalidate) {


		// 	var strcountry = $('#field-1450770516-country').val();
		// 	strcountry = strcountry.toLowerCase().replace(/\b[a-z]/g, function(letter) {
		// 	    return letter.toUpperCase();
		// 	});



	 //        //samakan data form
	       	
	 //       	 // $('#title').val($('#field-1456121973-choices').val()); //ok
			 
		// 	 $('#firstName').val($('input[name="field-1427865019-1"]').val());//ok
		// 	 $('#surName').val($('input[name="field-1427865019-2"]').val());//ok
		// 	 $('#emailID').val($('input[name="field-1427865032"]').val());//ok

		// 	 $('#mobileCode').val('+' + $('#codemobile').val());//ok
		// 	 $('#mobileNumber').val($('#mobilenumber').val());//ok

		// 	 $('#homePhoneCode').val('+' + $('#codehome').val());//ok
		// 	 $('#homePhoneNumber').val($('#homenumber').val());//ok


		// 	 $('#streetLine1').val($('#field-1450771166-contents').val());//ok
		// 	 // $('#streetLine2').val($('#field-1456135584-contents').val());//ok

		// 	 $('#city').val($('input[name="field-1450846616"]').val());//ok
		// 	 $('#state').val($('input[name="field-1450846691"]').val());//ok

		// 	 //$('#country').val($('#field-1450770516-country').val());//ok
		// 	 $('#country').val(strcountry);

		// 	 $('#promoCode').val($('input[name="field-1452846611"]').val());//ok

		// 	 $('#postCode').val($('input[name="field-1450771328"]').val());//ok
			 
		// 	 $('#dateOfBirth').val($('input[name="field-1450771524"]').val());//ok
		// 	//INSERT INTO DATABASE TABLE EMAILREG
			
		// 		$.ajax({
		// 			type:"post",
		// 			url: 'https://karmagroup.com/karmaclubmerge/api/addemailtodb.php', 
		// 			//IF U CHANGE THIS API PLEASE CHANGE IN 
		// 			//url: 'http://localhost/karmaclubcom/api/addemailtodb.php',

		// 			data: "email="+ $('#field-1427865032-text').val(),
		// 			success:function(data){

		// 			console.log(data);
		// 			}
		// 		});
		// 	/////////////////////////////////
	        
	 //        	$.ajax({
		// 			type:"post",
		// 			url:"https://karmawarehouse.izenoondemand.com/apicollections/emailcheckSugarOpportunity.php?email="+emailval,
		// 			//url:"https://"+ window.location.hostname +"/karmaclubmerge/internal/css/emailapi.php?email="+emailval,
		// 			//url:"css/emailapi.php?email="+emailval,
		// 			data:"email="+emailval,
		// 			success:function(data){
		// 				if (data == 1){
		// 					alert("Your email "+ emailval +" is already in use. Please use another email address.");
		// 					$("#field-1427865032-text").focus();
		// 					//$('#form-257').removeClass('processing');
		// 					btn.prop('disabled', false);
		// 				}else{
							
		// 					btn.prop('disabled', true);
		// 		        	$('.loader').css('display','block');
		// 		        	$('.xy').addClass('wrapconfirm');
		// 		        	$('html, body').animate({scrollTop:$('#top').position().top}, 'slow');
		// 		        	$('body').css('height','100%');
		// 		        	$('body').css('overflow','hidden');

		// 		        	var data = $('#joinForm').serializeArray().reduce((obj, field) => {
		// 			              obj[field.name] = field.value;
		// 			              return obj;
		// 			        }, {}); 

		// 			        console.log(data);


		// 			        $.ajax({
		// 			              type: "POST",
		// 			              url: "https://karmamobileapps.herokuapp.com/join",
		// 			              data: data,
		// 			              dataType: "json",

		// 			            }).done(function(data) {

		// 			              if (data.status == '1') {

					                

		// 						        $.ajax({
		// 						            type: "POST",
		// 						            url: $('#form-257').attr('action'),
		// 						            data:  $('#form-257').serialize(),
		// 						            success: function(data, textStatus, jqXHR) {
		// 										//parent.location='thanks.php';
		// 						                //btn.prop('disabled', false);
		// 						                console.log(data);
		// 						                console.log('masuk inbox25');


		// 						                 $.ajax({
		// 	                                          type: "POST",
		// 	                                          url: 'https://karmawarehouse.izenoondemand.com/production/api/karmaclub/group/karmacluboffer.php?first_name='+ $('#fname').val() +'&last_name='+ $('#lname').val() +'&phone='+ $('#field-1450771290-text').val() +'&email='+ $('#field-1427865032-text').val() +'&dob='+ $('#field-1450771524-text').val() +'&address='+ $('#field-1450771166-contents').val() +'&city='+ $('#field-1450846616-text').val() +'&country='+ $('#field-1450770516-country').val() +'&postalcode='+ $('#field-1450771328-text').val() +'&promocode='+ $('#field-1452846611-text').val() +'&data_source='+ $('#field-1428569141-text').val() +'&collection_entry_point='+ $('#field-1427866079-text').val(),

			                                         
		// 	                                              success: function(data, textStatus, jqXHR) {
			                                              
		// 	                                              console.log("Submit success to db karmawarehouse...");

		// 	                                              window.location.href = "thanks.php";
		// 	                                              //alert('success');
		// 	                                              btn.prop('disabled', false);

		// 	                                          }
		// 	                                    });
								                 

		// 						            }
		// 						        });

		// 			              } 

		// 			            }).fail(function() {
					              
		// 			              console.log('Cannot connect to the API.');
		// 		            }); 


				     
		// 				}
		// 			}
		// 		});
	 //        }
	 //        return false;
	 //    });

	});
	</script>
  
</body></html>
