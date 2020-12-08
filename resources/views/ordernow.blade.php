@extends('master')
@section("content")
<div class="container custom-product">
    <div class="col-sm-10">
    <table class="table">

  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Amount</td>
      <td>$ {{$total}}</td>
     
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tax</td>
      <td>$ 0</td>
    
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Delivery</td>
      <td>$ 10</td>
    
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Total Amount</td>
      <td>{{$total+10}}</td>
      
    </tr>
  </tbody>
</table>
<div>
<form action="/orderplace" method="POST">
  <div class="form-group">
  @csrf
   
    <textarea name="address" placeholder="enter your address" class="form-control" id="email"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label>
    <br><br>
    <input type="radio" value="cash" name="payment"><span> Online payment</span><br><br>
    <input type="radio" value="cash" name="payment"><span> EMI payment</span><br><br>
    <input type="radio" value="cash" name="payment"><span> COD(Cash On  Delivery)</span><br><br>
  </div>
  
  <button type="submit" class="btn btn-default">Place Order</button>
</form>
</div>
     
    </div>

</div>


@endsection