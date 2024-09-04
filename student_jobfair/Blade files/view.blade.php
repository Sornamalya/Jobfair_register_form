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
<div class="container" >
<div class="card bg-body-tertiary" >
<div class="card-body ">
<form action="{{route('store')}}" method="POST"> 
@csrf
<div style="margin-left: .2em;" id="head">
<!-- <h2 style="margin-bottom: .3em;"><u>Student Registration Form</u></h2> -->
<h4><u>Student Details :</u></h4>
</div>
<div class="row">
<div class="col-12 col-md-3">
    <div class=" p-3 form-group has-validation" id="div">
      <label id="txtlabel" for="firstname" class="required">First Name:</label>
      <input  type="text" class="form-control" id="firstname" name="firstname" value="{{$stud_info[0]->firstname}}" readonly >
    </div>
</div>

<div class="col-12 col-md-3">   
    <div class="form-group p-3" id="div">
     <label id="txtlabel" for="lastname" class="required">Last Name:</label>
     <input  type="text" class="form-control" id="lastname" name="lastname"value="{{$stud_info[0]->lastname}}"readonly>
    </div>        
</div>

<div class="col-12 col-md-3">
   <div class="form-group p-3">
   <label id="txtlabel" class="required  "> Gender :</label>
   <input  type="text" class="form-control" id="gender" name="gender" value="{{$stud_info[0]->gender}}"readonly >
  </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div" class="required">
    <label id="txtlabel">Date Of Birth:</label>
    <input type="date" id="dob" name="dob" class="form-control" id="myDateInput"   value="{{$stud_info[0]->dob}}"readonly>
   </div>
</div>
</div>

<div class="row">
<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
     <label id="txtlabel" for="email" class="required">Email:</label>
     <input  type="email" class="form-control" id="email" name="email" value="{{$stud_info[0]->email}}" readonly>
  </div>
</div>


<div class="col-12 col-md-3">
      <div class="form-group p-3 " id="div">
        <label id="txtlabel" class="required">Phone Number:</label>
        <input type="tele" id="phone" name="phone" class="form-control" required value="{{$stud_info[0]->phone}}"readonly>
      </div>
</div>

<div class="col-12 col-md-3">
 <div class="form-group p-3">
 <label id="txtlabel" class="required pb-2"> Course :</label>
 <input  type="text" class="form-control" id="course" name="course" value="{{$stud_info[0]->course}}" readonly>
  </div>              
</div>

<div class="col-12 col-md-3">
   <div class="form-group p-3">
   <label id="txtlabel" class="required pb-2"> Department :</label>
   <input  type="text" class="form-control" id="department" name="department" value="{{$stud_info[0]->department}}" readonly>
    </div>
</div>
</div>

<div class="row">
<div class="col-12 col-md-3">
   <div class="form-group p-3" id="div">
     <label id="txtlabel" for="aadhar" class="required">Aadhar Number:</label>
     <input  type="text" class="form-control" id="aadhar" name="aadhar_no" value="{{$stud_info[0]->aadhar_no}}"readonly>
   </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
     <label id="txtlabel" for="hsc" class="required">HSC Percentage:</label>
     <input  type="number" class="form-control" id="hsc" name="hsc_percentage"  value="{{$stud_info[0]->hsc_percentage}}" readonly>
   </div>
</div>
</div>

<h4 style="margin-left: .2em;"><u>Other Details :</u></h4>

<div class="row">
<div class="col-12 col-md-3">
   <div class="form-group p-3" id="div">
       <label id="txtlabel" for="fathername" class="required">Father Name:</label>
       <input  type="text" class="form-control" id="fathername" name="fathername"  value="{{$stud_info[0]->hsc_percentage}}" readonly>
    </div>
</div>

<div class="col-12 col-md-3">
   <div class="form-group p-3" id="div">
    <label id="txtlabel" for="mothername" class="required">Mother Name:</label>
    <input  type="text" class="form-control" id="mothername" name="mothername" value="{{$stud_info[0]->mothername}}"readonly>
   </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
   <label id="txtlabel" class="required">Father phone Number:</label>
   <input type="tele" id="fatherphone" name="fatherphone" class="form-control" required value="{{$stud_info[0]->fatherphone}}"readonly>
  </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
    <label id="txtlabel" class="required">Mother phone Number:</label>
    <input type="tele" id="motherphone" name="motherphone" class="form-control" required value="{{$stud_info[0]->motherphone}}"readonly> 
  </div>
</div>
</div>

<div class="row">
<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
    <label id="txtlabel" for="address" class="required">Address:</label>
    <input  type="text" class="form-control" id="address" name="address"  value="{{$stud_info[0]->address}}"readonly>
  </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
    <label id="txtlabel" for="account_no" class="required">Account Number:</label>
    <input  type="text" class="form-control" id="account_no" name="account_no"  value="{{$stud_info[0]->account_no}}"readonly>
  </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
    <label id="txtlabel" for="bankname" class="required">Bank name:</label>
    <input  type="text" class="form-control" id="bank_name" name="bankname" value="{{$stud_info[0]->bankname}}"readonly>
  </div>
</div>

<div class="col-12 col-md-3">
  <div class="form-group p-3" id="div">
    <label id="txtlabel" for="ifsc_code" class="required">IFSC Code:</label>
    <input  type="text" class="form-control" id="ifsc_code" name="ifsc_code" value="{{$stud_info[0]->ifsc_code}}"readonly>
  </div>
</div>
</div>

 <div>
    <a href="{{route('index')}}" type="button" class="btn btn-danger m-3">Back</a>
</div>
</form>
</div>
</div>
</div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>