@extends('layout.employer')
@section('title','Affilly')
@section('content')
 <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-9 mx-auto">
				<table border="0" width="100%" cellspacing="0" cellpadding="3">
		</table>
		
					<div class="card card-custom">
						<div class="card-body card-body-custom">
		@if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success') }}</p>
@endif				    
		@if(Auth::user()->email_verified==0)
		
		Kindly first verify the email
		<a href="{{url('resend-email')}}" class="btn btn-primary" >Send Email</a>
		@else
		<form name="defineForm" action="{{url('employe-job-posting')}}" method="post" enctype="multipart/form-data" >
		@csrf
		<input type="hidden" name="action" value="new"><script language="javascript">
		var twoLevelCountryState = new optionList("country1","state");twoLevelCountryState.forValue("").addOptionsTextValue("state","");twoLevelCountryState.forValue("1").addOptionsTextValue("state","");twoLevelCountryState.forValue("2").addOptionsTextValue("state","");twoLevelCountryState.forValue("3").addOptionsTextValue("state","");twoLevelCountryState.forValue("4").addOptionsTextValue("state","");twoLevelCountryState.forValue("5").addOptionsTextValue("state","");twoLevelCountryState.forValue("6").addOptionsTextValue("state","");twoLevelCountryState.forValue("7").addOptionsTextValue("state","");twoLevelCountryState.forValue("8").addOptionsTextValue("state","");twoLevelCountryState.forValue("9").addOptionsTextValue("state","");twoLevelCountryState.forValue("10").addOptionsTextValue("state","");twoLevelCountryState.forValue("11").addOptionsTextValue("state","");twoLevelCountryState.forValue("12").addOptionsTextValue("state","");twoLevelCountryState.forValue("13").addOptionsTextValue("state","","Ashmore and Cartier Islands","122","Australian Antarctic Territory","123","Australian Capital Territory","124","Christmas Island","125","Cocos (Keeling) Islands","126","Coral Sea Islands Territory","127","Heard Island and McDonald Islands","128","Jervis Bay Territory","129","New South Wales","130","Norfolk Island","131","Northern Territory","132","Queensland","133","South Australia","134","Tasmania","135","Victoria","136","Western Australia","137");twoLevelCountryState.forValue("13").setDefaultOptions("0");
		twoLevelCountryState.forValue("14").addOptionsTextValue("state","");twoLevelCountryState.forValue("15").addOptionsTextValue("state","");twoLevelCountryState.forValue("16").addOptionsTextValue("state","");twoLevelCountryState.forValue("17").addOptionsTextValue("state","");twoLevelCountryState.forValue("18").addOptionsTextValue("state","");twoLevelCountryState.forValue("19").addOptionsTextValue("state","");twoLevelCountryState.forValue("20").addOptionsTextValue("state","");twoLevelCountryState.forValue("21").addOptionsTextValue("state","");twoLevelCountryState.forValue("22").addOptionsTextValue("state","");twoLevelCountryState.forValue("23").addOptionsTextValue("state","");twoLevelCountryState.forValue("24").addOptionsTextValue("state","");twoLevelCountryState.forValue("25").addOptionsTextValue("state","");twoLevelCountryState.forValue("26").addOptionsTextValue("state","");twoLevelCountryState.forValue("27").addOptionsTextValue("state","");twoLevelCountryState.forValue("28").addOptionsTextValue("state","");twoLevelCountryState.forValue("29").addOptionsTextValue("state","");twoLevelCountryState.forValue("30").addOptionsTextValue("state","");twoLevelCountryState.forValue("31").addOptionsTextValue("state","");twoLevelCountryState.forValue("32").addOptionsTextValue("state","");twoLevelCountryState.forValue("33").addOptionsTextValue("state","");twoLevelCountryState.forValue("34").addOptionsTextValue("state","");twoLevelCountryState.forValue("35").addOptionsTextValue("state","");twoLevelCountryState.forValue("36").addOptionsTextValue("state","");twoLevelCountryState.forValue("37").addOptionsTextValue("state","");twoLevelCountryState.forValue("38").addOptionsTextValue("state","","Alberta","1","British Columbia","2","Manitoba","3","New Brunswick","4","Newfoundland","5","Northwest Territories","6","Nova Scotia","7","Nunavut","8","Ontario","9","Prince Edward Island","10","Quebec","11","Saskatchewan & Yukon.","12");twoLevelCountryState.forValue("38").setDefaultOptions("0");
		twoLevelCountryState.forValue("39").addOptionsTextValue("state","");twoLevelCountryState.forValue("40").addOptionsTextValue("state","");twoLevelCountryState.forValue("41").addOptionsTextValue("state","");twoLevelCountryState.forValue("42").addOptionsTextValue("state","");twoLevelCountryState.forValue("43").addOptionsTextValue("state","");twoLevelCountryState.forValue("44").addOptionsTextValue("state","");twoLevelCountryState.forValue("45").addOptionsTextValue("state","");twoLevelCountryState.forValue("46").addOptionsTextValue("state","");twoLevelCountryState.forValue("47").addOptionsTextValue("state","");twoLevelCountryState.forValue("48").addOptionsTextValue("state","");twoLevelCountryState.forValue("49").addOptionsTextValue("state","");twoLevelCountryState.forValue("50").addOptionsTextValue("state","");twoLevelCountryState.forValue("51").addOptionsTextValue("state","");twoLevelCountryState.forValue("52").addOptionsTextValue("state","");twoLevelCountryState.forValue("53").addOptionsTextValue("state","");twoLevelCountryState.forValue("54").addOptionsTextValue("state","");twoLevelCountryState.forValue("55").addOptionsTextValue("state","");twoLevelCountryState.forValue("56").addOptionsTextValue("state","");twoLevelCountryState.forValue("57").addOptionsTextValue("state","");twoLevelCountryState.forValue("58").addOptionsTextValue("state","");twoLevelCountryState.forValue("59").addOptionsTextValue("state","");twoLevelCountryState.forValue("60").addOptionsTextValue("state","");twoLevelCountryState.forValue("61").addOptionsTextValue("state","");twoLevelCountryState.forValue("62").addOptionsTextValue("state","");twoLevelCountryState.forValue("63").addOptionsTextValue("state","");twoLevelCountryState.forValue("64").addOptionsTextValue("state","");twoLevelCountryState.forValue("65").addOptionsTextValue("state","");twoLevelCountryState.forValue("66").addOptionsTextValue("state","");twoLevelCountryState.forValue("67").addOptionsTextValue("state","");twoLevelCountryState.forValue("68").addOptionsTextValue("state","");twoLevelCountryState.forValue("69").addOptionsTextValue("state","");twoLevelCountryState.forValue("70").addOptionsTextValue("state","");twoLevelCountryState.forValue("71").addOptionsTextValue("state","");twoLevelCountryState.forValue("72").addOptionsTextValue("state","");twoLevelCountryState.forValue("73").addOptionsTextValue("state","");twoLevelCountryState.forValue("74").addOptionsTextValue("state","");twoLevelCountryState.forValue("75").addOptionsTextValue("state","");twoLevelCountryState.forValue("76").addOptionsTextValue("state","");twoLevelCountryState.forValue("77").addOptionsTextValue("state","");twoLevelCountryState.forValue("78").addOptionsTextValue("state","");twoLevelCountryState.forValue("79").addOptionsTextValue("state","");twoLevelCountryState.forValue("80").addOptionsTextValue("state","");twoLevelCountryState.forValue("81").addOptionsTextValue("state","");twoLevelCountryState.forValue("82").addOptionsTextValue("state","");twoLevelCountryState.forValue("83").addOptionsTextValue("state","");twoLevelCountryState.forValue("84").addOptionsTextValue("state","");twoLevelCountryState.forValue("85").addOptionsTextValue("state","");twoLevelCountryState.forValue("86").addOptionsTextValue("state","");twoLevelCountryState.forValue("87").addOptionsTextValue("state","");twoLevelCountryState.forValue("88").addOptionsTextValue("state","");twoLevelCountryState.forValue("89").addOptionsTextValue("state","");twoLevelCountryState.forValue("90").addOptionsTextValue("state","");twoLevelCountryState.forValue("91").addOptionsTextValue("state","");twoLevelCountryState.forValue("92").addOptionsTextValue("state","");twoLevelCountryState.forValue("93").addOptionsTextValue("state","");twoLevelCountryState.forValue("94").addOptionsTextValue("state","");twoLevelCountryState.forValue("95").addOptionsTextValue("state","");twoLevelCountryState.forValue("96").addOptionsTextValue("state","");twoLevelCountryState.forValue("97").addOptionsTextValue("state","");twoLevelCountryState.forValue("98").addOptionsTextValue("state","");twoLevelCountryState.forValue("99").addOptionsTextValue("state","","Andaman & Nicobar","121","Andhra Pradesh","117","Arunachal Pradesh","116","Assam","115","Bihar","120","Chandigarh","114","Chhattisgarh","113","Dadra & Nagar Haveli (U.T.)","103","Daman & Diu (U.T.)","102","Delhi","112","Goa","111","Gujarat","110","Hariyana","118","Himachal Pradesh","109","Jammu & Kashmir","108","Jharkhand","107","Karnataka","106","Kerala","105","Lakshadweep (U.T.)","104","Madhya Pradesh","100","Maharashtra","99","Manipur","98","Meghalaya","97","Mizoram","96","Nagaland","95","Orissa","94","Pondicherry (U.T.)","101","Punjab","93","Rajasthan","92","Sikkim","91","Tamil Nadu","90","Tripura","89","Uttar Pradesh","119","Uttaranchal","88","West Bengal","87");twoLevelCountryState.forValue("99").setDefaultOptions("0");
		twoLevelCountryState.forValue("100").addOptionsTextValue("state","");twoLevelCountryState.forValue("101").addOptionsTextValue("state","");twoLevelCountryState.forValue("102").addOptionsTextValue("state","");twoLevelCountryState.forValue("103").addOptionsTextValue("state","");twoLevelCountryState.forValue("104").addOptionsTextValue("state","");twoLevelCountryState.forValue("105").addOptionsTextValue("state","");twoLevelCountryState.forValue("106").addOptionsTextValue("state","");twoLevelCountryState.forValue("107").addOptionsTextValue("state","");twoLevelCountryState.forValue("108").addOptionsTextValue("state","");twoLevelCountryState.forValue("109").addOptionsTextValue("state","");twoLevelCountryState.forValue("110").addOptionsTextValue("state","");twoLevelCountryState.forValue("111").addOptionsTextValue("state","");twoLevelCountryState.forValue("112").addOptionsTextValue("state","");twoLevelCountryState.forValue("113").addOptionsTextValue("state","");twoLevelCountryState.forValue("114").addOptionsTextValue("state","");twoLevelCountryState.forValue("115").addOptionsTextValue("state","");twoLevelCountryState.forValue("116").addOptionsTextValue("state","");twoLevelCountryState.forValue("117").addOptionsTextValue("state","");twoLevelCountryState.forValue("118").addOptionsTextValue("state","");twoLevelCountryState.forValue("119").addOptionsTextValue("state","");twoLevelCountryState.forValue("120").addOptionsTextValue("state","");twoLevelCountryState.forValue("121").addOptionsTextValue("state","");twoLevelCountryState.forValue("122").addOptionsTextValue("state","");twoLevelCountryState.forValue("123").addOptionsTextValue("state","");twoLevelCountryState.forValue("124").addOptionsTextValue("state","");twoLevelCountryState.forValue("125").addOptionsTextValue("state","");twoLevelCountryState.forValue("126").addOptionsTextValue("state","");twoLevelCountryState.forValue("127").addOptionsTextValue("state","");twoLevelCountryState.forValue("128").addOptionsTextValue("state","");twoLevelCountryState.forValue("129").addOptionsTextValue("state","");twoLevelCountryState.forValue("130").addOptionsTextValue("state","");twoLevelCountryState.forValue("131").addOptionsTextValue("state","");twoLevelCountryState.forValue("132").addOptionsTextValue("state","");twoLevelCountryState.forValue("133").addOptionsTextValue("state","");twoLevelCountryState.forValue("134").addOptionsTextValue("state","");twoLevelCountryState.forValue("135").addOptionsTextValue("state","");twoLevelCountryState.forValue("136").addOptionsTextValue("state","");twoLevelCountryState.forValue("137").addOptionsTextValue("state","");twoLevelCountryState.forValue("138").addOptionsTextValue("state","");twoLevelCountryState.forValue("139").addOptionsTextValue("state","");twoLevelCountryState.forValue("140").addOptionsTextValue("state","");twoLevelCountryState.forValue("141").addOptionsTextValue("state","");twoLevelCountryState.forValue("142").addOptionsTextValue("state","");twoLevelCountryState.forValue("143").addOptionsTextValue("state","");twoLevelCountryState.forValue("144").addOptionsTextValue("state","");twoLevelCountryState.forValue("145").addOptionsTextValue("state","");twoLevelCountryState.forValue("146").addOptionsTextValue("state","");twoLevelCountryState.forValue("147").addOptionsTextValue("state","");twoLevelCountryState.forValue("148").addOptionsTextValue("state","");twoLevelCountryState.forValue("149").addOptionsTextValue("state","");twoLevelCountryState.forValue("150").addOptionsTextValue("state","");twoLevelCountryState.forValue("151").addOptionsTextValue("state","");twoLevelCountryState.forValue("152").addOptionsTextValue("state","");twoLevelCountryState.forValue("153").addOptionsTextValue("state","");twoLevelCountryState.forValue("154").addOptionsTextValue("state","");twoLevelCountryState.forValue("155").addOptionsTextValue("state","");twoLevelCountryState.forValue("156").addOptionsTextValue("state","");twoLevelCountryState.forValue("157").addOptionsTextValue("state","");twoLevelCountryState.forValue("158").addOptionsTextValue("state","");twoLevelCountryState.forValue("159").addOptionsTextValue("state","");twoLevelCountryState.forValue("160").addOptionsTextValue("state","");twoLevelCountryState.forValue("161").addOptionsTextValue("state","");twoLevelCountryState.forValue("162").addOptionsTextValue("state","");twoLevelCountryState.forValue("163").addOptionsTextValue("state","");twoLevelCountryState.forValue("164").addOptionsTextValue("state","");twoLevelCountryState.forValue("165").addOptionsTextValue("state","");twoLevelCountryState.forValue("166").addOptionsTextValue("state","");twoLevelCountryState.forValue("167").addOptionsTextValue("state","");twoLevelCountryState.forValue("168").addOptionsTextValue("state","");twoLevelCountryState.forValue("169").addOptionsTextValue("state","");twoLevelCountryState.forValue("170").addOptionsTextValue("state","");twoLevelCountryState.forValue("171").addOptionsTextValue("state","");twoLevelCountryState.forValue("172").addOptionsTextValue("state","");twoLevelCountryState.forValue("173").addOptionsTextValue("state","");twoLevelCountryState.forValue("174").addOptionsTextValue("state","");twoLevelCountryState.forValue("175").addOptionsTextValue("state","");twoLevelCountryState.forValue("176").addOptionsTextValue("state","");twoLevelCountryState.forValue("177").addOptionsTextValue("state","");twoLevelCountryState.forValue("178").addOptionsTextValue("state","");twoLevelCountryState.forValue("179").addOptionsTextValue("state","");twoLevelCountryState.forValue("180").addOptionsTextValue("state","");twoLevelCountryState.forValue("181").addOptionsTextValue("state","");twoLevelCountryState.forValue("182").addOptionsTextValue("state","");twoLevelCountryState.forValue("183").addOptionsTextValue("state","");twoLevelCountryState.forValue("184").addOptionsTextValue("state","");twoLevelCountryState.forValue("185").addOptionsTextValue("state","");twoLevelCountryState.forValue("186").addOptionsTextValue("state","");twoLevelCountryState.forValue("187").addOptionsTextValue("state","");twoLevelCountryState.forValue("188").addOptionsTextValue("state","");twoLevelCountryState.forValue("189").addOptionsTextValue("state","");twoLevelCountryState.forValue("190").addOptionsTextValue("state","");twoLevelCountryState.forValue("191").addOptionsTextValue("state","");twoLevelCountryState.forValue("192").addOptionsTextValue("state","");twoLevelCountryState.forValue("193").addOptionsTextValue("state","");twoLevelCountryState.forValue("194").addOptionsTextValue("state","");twoLevelCountryState.forValue("195").addOptionsTextValue("state","");twoLevelCountryState.forValue("196").addOptionsTextValue("state","");twoLevelCountryState.forValue("197").addOptionsTextValue("state","");twoLevelCountryState.forValue("198").addOptionsTextValue("state","");twoLevelCountryState.forValue("199").addOptionsTextValue("state","");twoLevelCountryState.forValue("200").addOptionsTextValue("state","");twoLevelCountryState.forValue("201").addOptionsTextValue("state","");twoLevelCountryState.forValue("202").addOptionsTextValue("state","");twoLevelCountryState.forValue("203").addOptionsTextValue("state","");twoLevelCountryState.forValue("204").addOptionsTextValue("state","");twoLevelCountryState.forValue("205").addOptionsTextValue("state","");twoLevelCountryState.forValue("206").addOptionsTextValue("state","");twoLevelCountryState.forValue("207").addOptionsTextValue("state","");twoLevelCountryState.forValue("208").addOptionsTextValue("state","");twoLevelCountryState.forValue("209").addOptionsTextValue("state","");twoLevelCountryState.forValue("210").addOptionsTextValue("state","");twoLevelCountryState.forValue("211").addOptionsTextValue("state","");twoLevelCountryState.forValue("212").addOptionsTextValue("state","");twoLevelCountryState.forValue("213").addOptionsTextValue("state","");twoLevelCountryState.forValue("214").addOptionsTextValue("state","","Bardo","68","BÃ©ja Nord","80","Choutrana","70","Choutrana","72","El Agba","69","El Agba","71","El Fajja","74","Enfidha","76","GabÃ¨s","79","Hajeb El Ayoun","85","Hammam Zriba 2","81","Jemmel","77","Kairouan 2","84","M'ghira 3","73","Makthar","82","Menzel Bourguiba","75","Monastir","78","New Tunisia","66","Siliana 2","83","Souassi","86","Tunisia 1","67");twoLevelCountryState.forValue("214").setDefaultOptions("0");
		twoLevelCountryState.forValue("215").addOptionsTextValue("state","");twoLevelCountryState.forValue("216").addOptionsTextValue("state","");twoLevelCountryState.forValue("217").addOptionsTextValue("state","");twoLevelCountryState.forValue("218").addOptionsTextValue("state","");twoLevelCountryState.forValue("219").addOptionsTextValue("state","");twoLevelCountryState.forValue("220").addOptionsTextValue("state","");twoLevelCountryState.forValue("221").addOptionsTextValue("state","");twoLevelCountryState.forValue("222").addOptionsTextValue("state","");twoLevelCountryState.forValue("223").addOptionsTextValue("state","","Alabama","13","Alaska","14","Arizona","15","Arkansas","16","California","17","Colorado","18","Connecticut","19","Delaware","20","District of Columbia","45","Florida","46","Georgia","47","Hawaii","48","Idaho","49","Illinois","50","Indiana","21","Iowa","22","Kansas","23","Kentucky","24","Louisiana","25","Maine","26","Maryland","27","Massachusetts","28","Michigan","51","Minnesota","52","Mississippi","53","Missouri","54","Montana","55","Nebraska","56","Nevada","57","New Hampshire","58","New Jersey","59","New Mexico","60","New York","61","North Carolina","62","North Dakota","63","Ohio","64","Oklahoma","29","Oregon","30","Pennsylvania","31","Puerto Rico","32","Rhode Island","33","South Carolina","34","South Dakota","35","Tennessee","36","Texas","37","Utah","38","Vermont","39","Virginia","40","Washington","41","West Virginia","42","Wisconsin","43","Wyoming","44");twoLevelCountryState.forValue("223").setDefaultOptions("0");
		twoLevelCountryState.forValue("224").addOptionsTextValue("state","");twoLevelCountryState.forValue("225").addOptionsTextValue("state","");twoLevelCountryState.forValue("226").addOptionsTextValue("state","");twoLevelCountryState.forValue("227").addOptionsTextValue("state","");twoLevelCountryState.forValue("228").addOptionsTextValue("state","");twoLevelCountryState.forValue("229").addOptionsTextValue("state","");twoLevelCountryState.forValue("230").addOptionsTextValue("state","");twoLevelCountryState.forValue("231").addOptionsTextValue("state","");twoLevelCountryState.forValue("232").addOptionsTextValue("state","");twoLevelCountryState.forValue("233").addOptionsTextValue("state","");twoLevelCountryState.forValue("234").addOptionsTextValue("state","");twoLevelCountryState.forValue("235").addOptionsTextValue("state","");twoLevelCountryState.forValue("237").addOptionsTextValue("state","");twoLevelCountryState.forValue("238").addOptionsTextValue("state","");twoLevelCountryState.forValue("239").addOptionsTextValue("state","");twoLevelCountryState.forValue("240").addOptionsTextValue("state","");twoLevelCountryState.forValue("241").addOptionsTextValue("state","");twoLevelCountryState.forValue("242").addOptionsTextValue("state","");twoLevelCountryState.forValue("243").addOptionsTextValue("state","");twoLevelCountryState.forValue("244").addOptionsTextValue("state","");twoLevelCountryState.forValue("245").addOptionsTextValue("state","");twoLevelCountryState.forValue("246").addOptionsTextValue("state","");twoLevelCountryState.forValue("247").addOptionsTextValue("state","");twoLevelCountryState.forValue("248").addOptionsTextValue("state","");twoLevelCountryState.forValue("249").addOptionsTextValue("state","");twoLevelCountryState.forValue("250").addOptionsTextValue("state","");</script>
		
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job title :</label>
			<div class="col-sm-9">
			  <input type="text" name="title" class="form-control required">
			  @error('title')
			  <small id="emailHelpId"
			  class="form-text text-muted text-danger " style="!important">{{ $message }}</small>
			  @enderror
			</div>
			
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Company Name :</label>
			<div class="col-sm-9">
			  <input type="text" name="company_name" class="form-control required">
			</div>

		  </div>

 <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">No of employess :</label>
			<div class="col-sm-9">
			  <input type="number" name="no_emp" class="form-control required">
			</div>

		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job reference :</label>
			<div class="col-sm-9">
			  <input type="text" name="job_reference" class="form-control">
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Country :</label>
			<div class="col-sm-9">
			  <select name="country" class="form-select" id="country-dropdown" >
			      <option value="">Please select a country...</option>
                    @foreach ($countries as $country) 
                        <option value="{{$country->id}}">
                        {{$country->name}}
                        </option>
                    @endforeach
			 </select>
			 @error('country')
			<small id="emailHelpId"
			class="form-text text-muted text-danger">{{ $message }}</small>
			@enderror
			</div>
			
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">State</label>
			<div class="col-sm-9">
			 <select name="state" id="state-dropdown" class="form-select mb-2">
			 </select>	
			 
		  </div>
		  	@error('state')
			<small id="emailHelpId"
			class="form-text text-muted text-danger">{{ $message }}</small>
			@enderror

		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Location :</label>
			<div class="col-sm-9">
			  <input type="text" name="location" class="form-control">
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Min Salary :</label>
			<div class="col-sm-9">
			  <div class="input-group mb-2 mr-sm-2">
				<div class="input-group-prepend d-inline-block mr-1">
			<!--<span class="input-group-text" id="basic-addon1">$</span>-->
		  </div> <input type="number" name="salary" class="form-control">
			  </div>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Max Salary :</label>
			<div class="col-sm-9">
			  <div class="input-group mb-2 mr-sm-2">
				<div class="input-group-prepend d-inline-block mr-1">
			<!--<span class="input-group-text" id="basic-addon1">$</span>-->
		  </div> <input type="number" name="maxsalary" class="form-control">
			  </div>
			</div>
		  </div>
		
		   <div class="form-groupd row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job Skills:</label>
			<div class="col-sm-9">
			  <input type="text" name="job_skill" class="form-control" >
			</div>
		  </div>
		
		   <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right"></label>
			<div class="col-sm-9">
			  <small class="text-muted font-14"> Separated  by commas</small>
			</div>
		  </div>
		
		
		
		
		 <!-- <div class="form-group row align-items-center">-->
			<!--<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job Category :</label>-->
			<!--<div class="col-sm-9">-->
			<!--  <select name="job_category" class="form-control required " >-->
			<!--        @if($cat)-->
			<!--       @foreach($cat as $c)-->
			<!--       <option value="{{$c->id}}">{{$c->name}}</option>-->
			<!--       @endforeach-->
			<!--       @endif-->
			<!--  </select>-->
			<!--  @error('job_category')-->
			<!--  <small id="emailHelpId"-->
			<!--  class="form-text text-muted text-danger">{{ $message }}</small>-->
			<!--  @enderror-->
			<!--</div>-->
		 <!-- </div>-->
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Category :</label>
			<div class="col-sm-9">
			  <select name="job_category" class="form-select" id="category_drop" onchange="category_dropdown()" >
			      <option value="">Please select a Category...</option>
                    @if($cat)
			       @foreach($cat as $c)
			       <option value="{{$c->id}}">{{$c->name}}</option>
			       @endforeach
			       @endif
			 </select>
			 @error('job_category')
			<small id="emailHelpId"
			class="form-text text-muted text-danger">{{ $message }}</small>
			@enderror
			</div>
			
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Sub Category</label>
			<div class="col-sm-9">
			 <select name="sub_category" id="sub_category_dropdown" class="form-select mb-2">
			 </select>	
			 
		  </div>
		  	@error('sub_category')
			<small id="emailHelpId"
			class="form-text text-muted text-danger">{{ $message }}</small>
			@enderror

		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job Summary :</label>
			<div class="col-sm-9">
			  <textarea name="job_summary"  wrap="soft" cols="68" rows="4" class="form-control required h-100"></textarea>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job Description :</label>
			<div class="col-sm-9">

			  {{-- <textarea name="job_description" wrap="soft" cols="190" rows="10" id="description" class="form-control7" style="display: none;" aria-hidden="true"></textarea><div role="application" class="tox tox-tinymce" aria-disabled="false" style="visibility: hidden; height: 400px;"><div class="tox-editor-container"><div data-alloy-vertical-dir="toptobottom" class="tox-editor-header"><div role="menubar" data-alloy-tabstop="true" class="tox-menubar"><button aria-haspopup="true" role="menuitem" type="button" tabindex="-1" data-alloy-tabstop="true" unselectable="on" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">File</span><div class="tox-mbtn__select-chevron"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></div></button><button aria-haspopup="true" role="menuitem" type="button" tabindex="-1" data-alloy-tabstop="true" unselectable="on" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">Edit</span><div class="tox-mbtn__select-chevron"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></div></button><button aria-haspopup="true" role="menuitem" type="button" tabindex="-1" data-alloy-tabstop="true" unselectable="on" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">View</span><div class="tox-mbtn__select-chevron"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></div></button><button aria-haspopup="true" role="menuitem" type="button" tabindex="-1" data-alloy-tabstop="true" unselectable="on" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">Insert</span><div class="tox-mbtn__select-chevron"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></div></button><button aria-haspopup="true" role="menuitem" type="button" tabindex="-1" data-alloy-tabstop="true" unselectable="on" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">Format</span><div class="tox-mbtn__select-chevron"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></div></button><button aria-haspopup="true" role="menuitem" type="button" tabindex="-1" data-alloy-tabstop="true" unselectable="on" class="tox-mbtn tox-mbtn--select" aria-expanded="false" style="user-select: none;"><span class="tox-mbtn__select-label">Tools</span><div class="tox-mbtn__select-chevron"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></div></button></div><div role="group" class="tox-toolbar-overlord" aria-disabled="false"><div role="group" class="tox-toolbar__primary"><div title="history" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Undo" title="Undo" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 0 1-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 1 1-1.4 1.4l-5-5a1 1 0 0 1 0-1.4l5-5a1 1 0 0 1 1.4 1.4L6.4 8Z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Redo" title="Redo" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 1 1-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 1 1 1.4-1.4l5 5a1 1 0 0 1 0 1.4l-5 5a1 1 0 0 1-1.4-1.4l3.3-3.3Z" fill-rule="nonzero"></path></svg></span></button></div><div title="styles" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button title="Formats" aria-label="Formats" aria-haspopup="true" type="button" tabindex="-1" unselectable="on" class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke" aria-expanded="false" style="user-select: none;"><span class="tox-tbtn__select-label">Paragraph</span><div class="tox-tbtn__select-chevron"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></div></button></div><div title="formatting" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Bold" title="Bold" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 0 1-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8Zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4Zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Italic" title="Italic" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="m16.7 4.7-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8Z" fill-rule="evenodd"></path></svg></span></button></div><div role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="More..." title="More..." aria-haspopup="true" type="button" tabindex="-1" data-alloy-tabstop="true" class="tox-tbtn" aria-expanded="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M6 10a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2Zm12 0a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2Zm-6 0a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2Z" fill-rule="nonzero"></path></svg></span></button></div></div></div><div class="tox-anchorbar"></div></div><div class="tox-sidebar-wrap"><div class="tox-edit-area"><iframe id="description_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area" class="tox-edit-area__iframe" srcdoc="<!DOCTYPE html><html><head><meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /></head><body id=&quot;tinymce&quot; class=&quot;mce-content-body &quot; data-id=&quot;description&quot; aria-label=&quot;Rich Text Area. Press ALT-0 for help.&quot;><br></body></html>"></iframe></div><div role="complementary" class="tox-sidebar"><div data-alloy-tabstop="true" tabindex="-1" class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;"><div class="tox-sidebar__pane-container"></div></div></div></div></div><div class="tox-statusbar"><div class="tox-statusbar__text-container"><div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path" aria-disabled="false"><div data-index="0" aria-level="1" role="button" tabindex="-1" class="tox-statusbar__path-item" aria-disabled="false">p</div></div></div><div title="Resize" data-alloy-tabstop="true" tabindex="-1" class="tox-statusbar__resize-handle"><svg width="10" height="10" focusable="false"><g fill-rule="nonzero"><path d="M8.1 1.1A.5.5 0 1 1 9 2l-7 7A.5.5 0 1 1 1 8l7-7ZM8.1 5.1A.5.5 0 1 1 9 6l-3 3A.5.5 0 1 1 5 8l3-3Z"></path></g></svg></div></div><div aria-hidden="true" class="tox-throbber" style="display: none;"></div></div> --}}
			<textarea class="form-control" id="body" name="job_description"id="" cols="30" rows="10"></textarea>
			@error('job_description')
		<small id="emailHelpId"
		class="form-text text-muted text-danger important">{{ $message }}</small>
		@enderror
		</div>
		
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Responsibilities :</label>
			<div class="col-sm-9">
			  <textarea name="responsibilities" wrap="soft" cols="50" rows="2" class="form-control h-50"></textarea>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Qualifications :</label>
			<div class="col-sm-9">
			  <textarea name="qualifications" wrap="soft" cols="50" rows="2" class="form-control required h-50"></textarea>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Benefits :</label>
			<div class="col-sm-9">
			  <textarea name="benefits" wrap="soft" cols="50" rows="2" class="form-control h-50"></textarea>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Schedule :</label>
			<div class="col-sm-9">
			  <input type="text" name="schedule" class="form-control" "=">
			</div>
		  </div>
		
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Apply Online :</label>
			<div class="col-sm-9">
			  <div class="row align-items-center">
				<div class="col-sm-1">
				  <div class="form-check">
									  <input type="checkbox" name="url_apply_online" value="Yes" onclick="show_hide()" class="form-check-input" id="checkbox_url">
									  <label class="form-check-label" for="checkbox_url"></label>
									</div>
				</div>
				<div class="col-sm-11" id="myrow" style="visibility:hidden">
				  <input type="text" name="url" class="form-control" placeholder="Enter URL">
				</div>
			  </div>
			</div>
		  </div>
		
		  <div class="form-groupd row align-items-center">
			<label for="resume_will_go" id="myrow2" class="col-sm-3 col-form-label text-right" style="display: block;">Resumes will go :</label>
			<div class="col-sm-9" id="myrow1" style="display: block;">
			 	<select id="emailInput"  value="{{$emp->email}}" name="TREF_email_address" class="form-select">

				<option value="{{$emp->email}}" selected="">{{$emp->email}}</option></select>
				
			</div>
			<div class="col-sm-9" id="myrowurl" style="display: none;">
			 <input id="urlInput" name="website_url" class="form-control" placeholder="Enter a URL" type="text">
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="resume_will_go" id="myrow2" class="col-sm-3 col-form-label text-right"></label>
			<div class="col-sm-9" id="myrow1">
			  <!--<div class="font-14">To add email address, Go to Manage Users in Control Panel</div>-->
			</div>
		  </div>
		
		
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job type :</label>
			<div class="col-sm-9">
			  <select name="job_type" class="form-select">
			       <option value="">Please select job Type...</option>
			       @if($type)
			       @foreach($type as $t)
			       <option value="{{$t->id}}">{{$t->type}}</option>
			       @endforeach
			       @endif
			      </select>
			</div>
		  </div>
		   <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Are employees required to reside in a specific location?* :</label>
			<div class="col-sm-9">
				<div class="d-flex">
					<div class="custom-control custom-radio">
						<input type="radio" name="specificlocaiton" value="0" id="reside_no" onclick="change_reside_status('no')" class="form-check-input" checked>&nbsp;
						<label class="custom-control-label small" for="reside_no" >No</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" name="specificlocaiton" value="1" id="reside_yes" onclick="change_reside_status('yes')" class="form-check-input">&nbsp;
						<label class="custom-control-label small" for="reside_yes" >Yes</label>
					</div>
				</div>
				<input type="text" class="form-control" value="" id="reside-location" name="residelocation" hidden>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Experience  :</label>
			<div class="col-sm-9">
			  <select name="experience" class="form-select">
			      
			         <option value="">Please select job country...</option>
			       @if($exp)
			       @foreach($exp as $e)
			       <option value="{{$e->id}}">{{$e->min_exp}} years - {{$e->max_exp}} years</option>
			       @endforeach
			       @endif
			      </select>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job Expiry Date :</label>
			<div class="col-sm-9">
				<div class="row">
					<div class="col-md-4 pr-0">
						<input type="date" name="expiry_Date" class="form-control " value="">
						</div>
			  </div>
			</div>
		  </div>
		   <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Posting Date :</label>
			<div class="col-sm-9">
			<div class="">
				<div class="row">
					<div class="col-md-4 pr-0">
						<input type="date" name="posting_Date" class="form-control" value="">
						</div>
			  </div>
			  <!--row end-->
			</div>
			<!--col-sm-9 end-->
		  </div>
		</div>
		

		
<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Job Location :</label>
    <div class="col-sm-9 d-flex">
      <input type="radio" name="relocate" value="remote" checked="" id="radio_relocate1" class="form-check-input me-1">
	  <label class="form-check-label me-3" for="radio_relocate1">Remote</label>
	  <input type="radio" name="relocate" value="hybrid_remote" id="radio_relocate2" class="form-check-input me-1">
	  <label class="form-check-label me-3" for="radio_relocate2">Hybrid Remote</label>
    </div>
</div>
	
		   <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job Auto Renew :</label>
			<div class="col-sm-9">
			  <select name="job_auto_renew" class="form-select"><option value="0" selected=""> None  </option><option value="3"> 3 Days  </option><option value="7"> 7 Days  </option><option value="14"> 14 Days  </option><option value="21"> 21 Days  </option><option value="28"> 28 Days  </option></select>
			</div>
		  </div>
		  
		
		  <div class="form-group row align-items-center">
		   <label for="inputPassword" class="col-sm-3 col-form-label text-right">&nbsp;</label>
			<div class="col-sm-9">
			  <input type="submit" name="Preview" value="Preview" class="btn btn-primary">
			</div>
		  </div>
		</form>
				@endif
		</div>
		
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
 
 <script>
        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
 
  @endsection
 <script>
    function handleCheckboxChange() {
      const yesCheckbox = document.getElementById('yesCheckbox');
      const noCheckbox = document.getElementById('noCheckbox');
      const textInputContainer = document.getElementById('textInputContainer');

      if (yesCheckbox.checked) {
        textInputContainer.style.display = 'block';
      } else {
        textInputContainer.style.display = 'none';
      }

      if (noCheckbox.checked) {
        textInputContainer.style.display = 'none';
      }
    }
  </script>
    <script>
    

    
function show_hide(){
	
	

	checkBox = document.getElementById('checkbox_url');
// Check if the element is selected/checked
	if(checkBox.checked) {
		
		var input = document.getElementById("myrow1").style.display = "none"; 
	var input2 = document.getElementById("myrowurl").style.display = "block"; 

	}else{
		var input = document.getElementById("myrow1").style.display = "block"; 
	var input2 = document.getElementById("myrowurl").style.display = "none"; 
	}

}

function change_reside_status(status){

	if(status == "no") {
		$("#reside-location").prop("hidden",true);
	} else if(status == "yes") {
		$("#reside-location").prop("hidden",false);
	}

}
  function category_dropdown(){
      var id = $('#category_drop').val(); 
      alert(id)
      
      $.ajax({
        url:"{{url('get_sub_category')}}",
        type: "POST",
        data: {
        id: id,
        _token: '{{csrf_token()}}'
        },

        success: function(result){
        // console.log(result)
            $('#sub_category_dropdown').append(result); 
            
        }
        
        });
  }

</script>