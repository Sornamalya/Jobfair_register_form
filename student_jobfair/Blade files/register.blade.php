<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register</title>
  
<style>
    .container
    {
        border-radius: 1em;
        width: 100%;
        height: auto;
    }
    #txtlabel
    {
        font-size: 1em;
        margin-bottom: .3em;
        font-weight: bold;
    }
    .invalid-feedback
    {
        color: red;
    }
    .card{
        outline: none;
        width: 100%;
        margin-top: 1em;
    }  

</style>
</head>
<body class="bg-body-secondary">  
  <!-- for register confirmation-->
@if(session()->has('message'))
<div class="alert alert-success">

 {{ session()->get('message')}}
</div>
@endif
<div class="container" >
<div class="card bg-body-tertiary" >
<div class="card-body ">
<form action="{{route('store')}}" method="POST"> 
@csrf
<div style="margin-left: .2em;" id="head">
<h2 style="margin-bottom: .3em;"><u>Jobfair Registration Form</u></h2>
<h4><u>Student Details :</u></h4>
</div>
<div class="row">
<div class="col-12 col-md-3">
    <div class="  p-3 form-group has-validation" id="div">
      <label id="txtlabel" for="firstname" class="required">First Name:</label>
      <input  type="text" class="form-control" id="firstname" name="firstname" value="{{old('firstname')}}" placeholder="Your First Name is ..">
      <span style="color: red;"> @error('firstname'){{$message}} @enderror</span>   
    </div>
</div>

<div class="col-12 col-md-3">   
    <div class="form-group p-3" id="div">
     <label id="txtlabel" for="lastname" class="required">Last Name:</label>
     <input  type="text" class="form-control" id="lastname" name="lastname" value="{{old('lastname')}}" placeholder="Your Last Name is ..">
     <span style="color: red;"> @error('lastname'){{$message}}@enderror</span>
    </div>        
</div>

<div class="col-12 col-md-3">
   <div class="p-3 ">
     <label id="txtlabel" class="required  pb-2l"> Gender</label><br>
     <input  type="radio"  id="male" name="gender" value="male" required  {{old('gender')=='male'?'checked':''}}>
     <label  for="male">Male</label>
     <input type="radio"  id="female" name="gender" value="female" required {{old('gender')=='female'?'checked':''}}>     
     <label  for="female">Female</label>
     <input  type="radio"  id="others" name="gender" value="others" required {{old('gender')=='others'?'checked':''}}>            
     <label  for="others">Others</label>
     <span style="color: red;"> @error('gender'){{$message}}@enderror </span>    
  </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div" class="required">
    <label id="txtlabel">Date Of Birth: </label>
    <input type="date" id="dob" name="dob" class="" id="myDateInput"  placeholder="dd-mm-yyyy" value="{{old('dob')}}">
    <span style="color: red;">@error('dob'){{$message}} @enderror</span>    
   </div>
</div>
</div>

<div class="row">
<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
     <label id="txtlabel" for="email" class="required">Email:</label>
     <input  type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Your Email is...(ex:myemail. gmail.com" >
     <span style="color: red;">@error('email'){{$message}}@enderror     </span>
  </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
   <label id="txtlabel" class="required">Password:</label>
   <input type="password" id="password" name="password" class="form-control" required value="" placeholder="Enter Your Password ..">
   <span style="color: red;"> @error('password'){{$message}}@enderror</span>             
  </div>
</div>

<div class="col-12 col-md-3">
      <div class="form-group p-3" id="div">
        <label id="txtlabel" class="required">Phone Number:</label>
        <input type="tele" id="phone" name="phone" class="form-control" required value="{{old('phone')}}" placeholder="Your Phone Number is ..">
        <span style="color: red;">  @error('phone'){{$message}} @enderror  </span>        
      </div>
</div>

<div class="col-12 col-md-3">
 <div class="p-3">
    <label id="txtlabel" class="required pb-2"> Course</label><br>
    <input  type="radio"  id="course" name="course" value="b-tech" required  {{old('course')=='b-tech'?'checked':''}}>
    <label  for="course">B-Tech</label>
    <input  type="radio"  id="course" name="course" value="others" required  {{old('course')=='others'?'checked':''}}>
    <label  for="course">Others</label>
    <span style="color: red;"> @error('course') {{$message}} @enderror  </span> 
  </div>              
</div>
</div>

<div class="row">
<div class="col-12 col-md-3">
   <div class="p-3">
       <label id="txtlabel" class="required pb-2"> Department</label><br>
        <input  type="radio"  id="department" name="department" value="cse" required {{old('department')=='cse'?'checked':''}}>
        <label  for="department" >Cse</label>
        <input  type="radio"  id="department" name="department" value="it" required  {{old('department')=='it'?'checked':''}}>
        <label  for="department">IT</label>
        <input  type="radio"  id="department" name="department" value="mechanical" required  {{old('department')=='mechanical'?'checked':''}}>
        <label  for="department">Mechanical</label>
        <input  type="radio"  id="department" name="department" value="electrical" required  {{old('department')=='electrical'?'checked':''}}>
        <label  for="department" >Electrical</label>
        <input  type="radio"  id="department" name="department" value="electronics" required  {{old('department')=='electronics'?'checked':''}}>
         <label  for="department">Electronics</label>
        <input  type="radio"  id="department" name="department" value="civil" required  {{old('department')=='civil'?'checked':''}}>
        <label  for="department">Civil</label>
        <span style="color: red;"> @error('department'){{$message}} @enderror</span>     
    </div>
</div>

<div class="col-12 col-md-3">
   <div class="form-group p-3" id="div">
     <label id="txtlabel" for="aadhar" class="required">Aadhar Number:</label>
     <input  type="text" class="form-control" id="aadhar" name="aadhar_no" value="{{old('aadhar_no')}}" placeholder="Enter Your Aadhar Number..">
     <span style="color: red;"> @error('aadhar_no'){{$message}}@enderror </span>  
   </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
     <label id="txtlabel" for="hsc" class="required">HSC Percentage:</label>
     <input  type="number" class="form-control" id="hsc" name="hsc_percentage" value="{{old('hsc_percentage')}}" placeholder="Enter your 12th Percentage ..">
     <span style="color: red;"> @error('hsc_percentage') {{$message}} @enderror</span>      
   </div>
</div>
</div>

<h4 style="margin-left: .2em;"><u>Other Details :</u></h4>

<div class="row">
<div class="col-12 col-md-3">
   <div class="form-group p-3" id="div">
       <label id="txtlabel" for="fathername" class="required">Father Name:</label>
       <input  type="text" class="form-control" id="fathername" name="fathername" value="{{old('fathername')}}" placeholder="Your Father Name is ..">
       <span style="color: red;">@error('fathername'){{$message}}@enderror </span>
    </div>
</div>

<div class="col-12 col-md-3">
   <div class="form-group p-3" id="div">
    <label id="txtlabel" for="mothername" class="required">Mother Name:</label>
    <input  type="text" class="form-control" id="mothername" name="mothername" value="{{old('mothername')}}" placeholder="Your Mother Name is ..">
    <span style="color: red;">@error('mothername'){{$message}} @enderror</span>   
   </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
   <label id="txtlabel" class="required">Father phone Number:</label>
   <input type="tele" id="fatherphone" name="fatherphone" class="form-control" required value="{{old('fatherphone')}}" placeholder="Your Father Phone Number is ..">
   <span style="color: red;"> @error('fatherphone'){{$message}} @enderror </span>
  </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
    <label id="txtlabel" class="required">Mother phone Number:</label>
    <input type="tele" id="motherphone" name="motherphone" class="form-control" required value="{{old('motherphone')}}" placeholder="Your Mother Phone Number is .."> 
    <span style="color: red;">@error('motherphone'){{$message}}  @enderror</span> 
  </div>
</div>
</div>

<div class="row">
<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
    <label id="txtlabel" for="address" class="required">Address:</label>
    <input  type="text" class="form-control" id="address" name="address" value="{{old('address')}}" placeholder="Enter Your Address..">
    <span style="color: red;"> @error('address'){{$message}} @enderror </span>
  </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
    <label id="txtlabel" for="account_no" class="required">Account Number:</label>
    <input  type="text" class="form-control" id="account_no" name="account_no" value="{{old('account_no')}}" placeholder=" Enter Your Account Number ..">
    <span style="color: red;"> @error('account_no') {{$message}} @enderror</span> 
  </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
    <label id="txtlabel" for="bankname" class="required">Bank name:</label>
    <input  type="text" class="form-control" id="bank_name" name="bankname" value="{{old('bankname')}}" placeholder="Enter Your Bank Name ..">
    <span style="color: red;">@error('bankname') {{$message}} @enderror  </span>
  </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
    <label id="txtlabel" for="ifsc_code" class="required">IFSC Code:</label>
    <input  type="text" class="form-control" id="ifsc_code" name="ifsc_code" value="{{old('ifsc_code')}}" placeholder="Enter Your IFSC Code ..">
    <span style="color: red;"> @error('ifsc_code'){{$message}}@enderror</span>
  </div>
</div>
</div>

 <div>
    <button type="submit" id="submit" class="btn btn-success m-3">Submit</button>
    <button type="reset" id="reset" class="btn btn-primary m-3">Reset</button>
    <!-- <a href="{{route('home')}}" type="button" class="btn btn-danger m-3">Cancel</a> -->
</div>
</form>
</div>
</div>
</div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>