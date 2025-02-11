@extends('layouts.default')

@section('content')

<form>
<div class="row">
    <div class="col-6">
        <div class="mb-3">
            <label for="category" class="form-label" >Catagory Name</label>
            <input type="text" class = "form-control" id="category">
        </div>
    </div>
</div>
<button type="button" id= "btn-add-product" class = "btn btn-primary">+ product</button>
<div class = "row" id = "add-product">
    <div class = "mt-3 col-6">
        <label for="category" class = "form-lable"> 1.Product Name</label>


    </div>
</div>
</form>

@endsection
@section('script')
<script>

</script>
@endsection
