<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style1.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/responsive1.css')); ?>">
    
    <title>Visitor B'right PLN Batam</title>
</head>
<body>
    <div class="logo">
            <img src="<?php echo e(('img/logo.png')); ?>" alt="">
        </div>
    <div class="latar">
              <h1>Formulir Pengisian Data </h1>
            <img src="<?php echo e(('img/ilustrasi.jpg')); ?>" alt="">
        </div>
                <form action="">
                  <div class="form">
                    <label for="name">Nama Lengkap</label>
                    <input type="text">
                  </div>
                  <div class="form1">
                    <label for="nik">NIK</label>
                    <input type="text">
                  </div>
                  <div class="form2">
                    <label for="email">Email</label>
                    <input type="text">
                  </div>
                  <div class="form3">
                    <label for="tujuan">Tujuan Kunjungan</label>
                    <textarea name="tujuan" id="tujuan" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form4">
                    <label for="tujuan">Ingin mengunjungi siapa ?</label>
                    <input type="text">
                  </div>
                  <div class="form5">
                    <label for="divisi">Di divisi apa?</label>
                    <input type="text">
                  </div>
                  <div class="form6">
                    <input type="file" name="image">
                    <p>*Upload foto sambil pegang ktp</p>
                    <button>Submit</button>
                  </div>
                </form>
        <div class="lanjut">
            <a href="<?php echo e(url('/')); ?>">
                <img src="<?php echo e(('img/arrow.jpg')); ?>" alt="">
            </a>
            </div>
</body>
</html><?php /**PATH C:\xampp\php\htdocs\visitor\resources\views/form.blade.php ENDPATH**/ ?>