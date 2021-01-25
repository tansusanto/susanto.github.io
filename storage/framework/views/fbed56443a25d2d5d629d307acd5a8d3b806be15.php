<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="<?php echo e(asset('/css/styles1.css')); ?>">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Formulir Pengisian Data
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Nama Lengkap</label>
          <input type="text" class="input">
       </div>  
        <div class="inputfield">
          <label>NIK</label>
          <input type="text" class="input">
       </div>  
       <div class="inputfield">
          <label>Email</label>
          <input type="text" class="input">
       </div>  
      <div class="inputfield">
          <label>Tujuan Kunjungan</label>
          <textarea class="textarea"></textarea>
       </div> 
      <div class="inputfield">
          <label>Ingin Mengunjungi Siapa ?</label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield">
          <label>Di Divisi Apa ?</label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield1">
          <input type="file" class="input">
          <p>*Foto selfie sambil pegang ktp</p>
       </div> 
      <div class="inputfield2">
        <button>Submit</button>
      </div>
    </div>
</div>	
</body>
</html><?php /**PATH C:\xampp\php\htdocs\visitor\resources\views/form1.blade.php ENDPATH**/ ?>