@extends('layouts.app')
@section('content')
<?php
foreach ($getData as $row) {}
?>
<h5>Category View</h5>

<div class="card mb-4">
    <div class="card-body avatar">
      <h2>Category Name : </h2>
      <p class="name"><strong>{{ $row -> category_name }}</strong></p>
      <br>
      <h2>Category Description : </h2>
      <p class="name"><strong>{{ $row -> category_description }}</strong></p>
    </div>
</div>

@endsection