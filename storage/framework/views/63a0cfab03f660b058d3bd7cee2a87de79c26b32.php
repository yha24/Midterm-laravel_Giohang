	
	<?php $__env->startSection('content'); ?>	
	<div class="inner-header">	
	 <div class="container">	
	  <div class="pull-left">	
	   <h6 class="inner-title">Đăng nhập</h6>	
	  </div>	
	  <div class="pull-right">	
	   <div class="beta-breadcrumb">	
	    <a href="index.html">Home</a> / <span>Đăng nhập</span>	
	   </div>	
	  </div>	
	  <div class="clearfix"></div>	
	 </div>	
	</div>	
		
	<div class="container">	
	 <div id="content">	
		
	  <form action="login" method="post" class="beta-form-checkout">	
	   <div class="row">	
	    <?php echo csrf_field(); ?>	
	    <div class="col-sm-3"></div>	
	    <div class="col-sm-6">	
	     <h4>Đăng nhập</h4>	
	     <div class="space20">&nbsp;</div>	
		
	     <div class="form-block">	
	      <label for="email">Email address*</label>	
	      <input type="email" id="email" name="email" required>	
	     </div>	
	     <div class="form-block">	
	      <label for="pw">Password*</label>	
	      <input type="password" id="pw" name="pw" required>	
	     </div>	
	     <div class="form-block">	
	      <button type="submit" class="btn btn-primary">Login</button>	
	     </div>	
	    </div>	
	    <div class="col-sm-3"></div>	
	   </div>	
	  </form>	
	  <p class="text-center">Nếu chưa có tài khoản vui lòng <a href="/register">Đăng ký</a>!</p>	
	 </div> <!-- #content -->	
	</div>	
	<?php $__env->stopSection(); ?>	

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShoppingCart\WebsiteLaravel\resources\views/users/login.blade.php ENDPATH**/ ?>