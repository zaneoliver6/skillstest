@extends('app')
@section('content')
<div class="row">
   <div class="col">
      <form action="{{  route('products.store') }}" method="post">
         @csrf
      
         <div class="form-group">    
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name"/>
         </div>

         <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="quantity"/>
         </div>

         <div class="form-group">
            <label for="price">Email:</label>
            <input type="number" class="form-control" id="price" name="price"/>
         </div>

         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>
<div class="row">
   <div class="col">
      <table class="table table-striped">
         <thead>
            <tr>
               <th>Name</th>
               <th>Quantity</th>
               <th>Price</th>
               <th>Total value number</th>
            </tr>
         </thead>
         <tbody id="products">
         </tbody>
      </table>
   </div>
</div>
<script type="text/javascript">

</script>
@endsection