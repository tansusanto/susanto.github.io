<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/styles1.css')); ?>">
</head>
<body>
    <form action="/add" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
         <div class="wrapper">
            <div class="title">
            Formulir Pengisian Data
            </div>
            <div class="form">
            <div class="inputfield">
                <label>Nama Lengkap</label>
                <input type="text" class="input" name="nama" value="<?php echo e(old('nama')); ?>">
                <span style="color: red; font-size: 10px;"><?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>  
                <div class="inputfield">
                <label>NIK</label>
                <input type="text" class="input" name="NIK" value="<?php echo e(old('NIK')); ?>">
                <span style="color: red; font-size: 10px;"><?php $__errorArgs = ['NIK'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>  
            <div class="inputfield">
                <label>Email</label>
                <input type="text" class="input" name="email" value="<?php echo e(old('email')); ?>">
                <span style="color: red; font-size: 10px;;"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>  
            <div class="inputfield">
                <label>Tujuan Kunjungan</label>
                <textarea class="textarea" name="tujuan" value="<?php echo e(old('tujuan')); ?>"></textarea>
                <span style="color: red; font-size: 10px;"><?php $__errorArgs = ['tujuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div> 
            <div class="inputfield">
                <label>Ingin Mengunjungi Siapa ?</label>
                <input type="text" class="input" name="orang" value="<?php echo e(old('orang')); ?>">
                <span style="color: red; font-size: 10px;"><?php $__errorArgs = ['orang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div> 
            <div class="inputfield">
                <label>Di Divisi Apa ?</label>
                <input type="text" class="input" name="divisi" value="<?php echo e(old('divisi')); ?>">
                <span style="color: red; font-size: 10px;"><?php $__errorArgs = ['divisi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div> 
            <div class="inputfield1">
                <input type="file" name="image" class="input">
                <p>*Foto selfie sambil pegang ktp</p>
                <span style="color: red; font-size: 10px;"><?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div> 
            <div class="inputfield2">
                <button>Submit</button>
            </div>
            <?php if(session('success')): ?>
                         <div class="alert alert-success" style="font-size: 12px; margin-left:30px; margin-top: 10px;">
                             <?php echo e(session('success')); ?>

                         </div>
                    <?php endif; ?>
            <?php if(session('fail')): ?>
                         <div class="alert alert-danger" style="font-size: 12px; margin-left:30px; margin-top: 10px;">
                             <?php echo e(session('fail')); ?>

                         </div>
                    <?php endif; ?>
            </div>
        </div>
    </form>	

</body>
</html>

   
        

<?php /**PATH C:\xampp\php\htdocs\visitor\resources\views/visitors/create.blade.php ENDPATH**/ ?>