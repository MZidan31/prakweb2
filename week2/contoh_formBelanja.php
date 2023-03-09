<?php
function process_form_data(){
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];


    if($produk=='Xiaomi 11 Ultra'){
        $total=12300000*$jumlah;
    }
    elseif($produk=='Xiaomi 12 Ultra'){
        $total=15899000*$jumlah;
    }
    elseif($produk=='Google Pixel 6'){
        $total=8999000*$jumlah;
    }

    echo "Nama Customer: $customer";
    echo "<br/>Nama Produk: $produk";
    echo "<br/>Jumlah Produk: $jumlah";
    echo "<br/>Total Harga: $total";
}

if(isset($_POST['submit'])){
    process_form_data();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <h3 style="text-align: center;">Jidan Phone Store</h3>
    <hr/>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
        <form method="POST" action="tugas.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Input Your Name" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">choose product</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Xiaomi 11 Ultra"> 
        <label for="produk_0" class="custom-control-label">Xiaomi 11 Ultra</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Xiaomi 12 Ultra"> 
        <label for="produk_1" class="custom-control-label">Xiaomi 12 Ultra</label>
      </div>
      <div class="custom-control custom-radio custom-control
