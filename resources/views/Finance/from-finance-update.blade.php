@extends('layouts.main')
@section('style')
<style>
    * {
      box-sizing: border-box;
    }
    
    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
    input[type=date] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
    
    
    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }
    
    input[type=submit] {
      background-color: #00c1be;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      float: right;
      transition: 0.3s;
    }
    
    input[type=submit]:hover {
      background-color: #229eab;
    }
    
    .b{
      border-radius: 5px;
      background-color: #f2f2f2;
      margin-left: 14%;
      margin-top: 7%;
      padding: 20px;
    }
    
    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }
    
    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
    </style>
@endsection
@section('container1')
<div class="container b">
    <form action="{{ route('finances.store') }}" method="POST">
        @csrf
      <div class="row">
        <div class="col-25">
          <label for="country">Mutation</label>
        </div>
        <div class="col-75">
          <select id="select-debit" name="mutation" onchange="myFunction()" required>
            <option value="">-- Select Mutation ---</option>
            <option value="Debit">Debit</option>
            <option value="Credit">Credit</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="Amount">Amount</label>
        </div>
        <div class="col-75">
       <input type="text" id="amount" name="amount" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="fname">Date Mutation</label>
        </div>
        <div class="col-75">
          <input type="date" id="date" name="date" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Description</label>
        </div>
        <div class="col-75">
          <textarea id="description" name="description" placeholder="Write Description.." style="height:200px"></textarea>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
@endsection
@section('script')
    <script>
    function myFunction(){
       var mutation = document.getElementById("select-debit").value;
    if (mutation === 'Debit') {
       $.ajax({
         url: "/finance/getdatapayments",
         dataType: "json",
         success: function (data) {
            document.getElementById("amount").value = data;
            console.log(data);
         }
       });
    }
    if (mutation === 'Credit') {
        $.ajax({
            url: "/finance/getdatasalary",
            dataType: "json",
            success: function (data) {
                console.log(data);
                document.getElementById("amount").value = data;
            }
        });
    }
}
    </script>
@endsection