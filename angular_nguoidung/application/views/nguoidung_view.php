<!DOCTYPE html>
<html lang="en"  >
<head>
	<title> Document  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/vendor/angular-material.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/1.css">
</head>
<style>
	.form-group {
		margin-bottom: 0px !important;
	}
</style>
<body ng-app="myApp" ng-controller="MyController">
	<!-- <div class="khoi1 cards" ng-show="hienthi">
		<b>{{ giatri }}</b>
		<button class="btn btn-info btn-sm" ng-click="toggle()"><i class="fa fa-pencil"></i></button>
	</div>
	<div class="khoi2 cards" ng-show="!hienthi">
		<input type="text" value="Đây là dòng text cần sửa" ng-model="giatri">
		<button class="btn btn-success btn-sm"><i class="fa fa-check" ng-click="toggle()"></i></button>
		<button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
	</div> -->

<!-- 	<div ng-repeat="nguoi in nhieunguoi">
		<p>{{ nguoi.ten }} - {{ nguoi.namsinh }}</p> 
	</div> -->
	<div class="container" 
			ng-repeat="nguoi in nhieunguoi"
			ng-init="nguoi.show='true'">
		<div class="card" ng-show="nguoi.show">
			<div class="card-header">
				Thông tin về: {{ nguoi.ten }}
				<button ng-click="hienra(nguoi)" class="btn btn-primary pull-right btn-sm"><i class="fa fa-pencil"></i></button>
			</div>
			<div class="card-block">
				<p class="card-text">Năm sinh: {{ nguoi.namsinh }}</p>
				<p class="card-text">Facebook: {{ nguoi.facebook }}</p>
				<p class="card-text">Số điện thoại: {{ nguoi.sdt }}</p>
			</div>
		</div>	

		<div class="card khoisua" ng-show="!nguoi.show">
			<div class="card-header">
				<div class="form-group row">
					<label class="col-sm-2 col-form-label"><b>Thông tin về</b></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" ng-model="nguoi.ten">
					</div>
				</div>
			</div>

			<div class="card-block">
				<div class="form-group row">
					<label class="col-sm-2 col-form-label"><b>Năm sinh</b></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" ng-model="nguoi.namsinh">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label"><b>Facebook</b></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" ng-model="nguoi.facebook">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label"><b>Số điện thoại</b></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" ng-model="nguoi.sdt">
					</div>
				</div>
				<button ng-click="luudulieu(nguoi)" class="btn btn-outline-danger btn-block">Done</button>
			</div>
		</div>		
	</div>
	
	


	<script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/bootstrap.js"></script>  
	<script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/angular-1.5.min.js"></script>  
	<script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/angular-animate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/angular-aria.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/angular-messages.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/angular-material.min.js"></script>  
	<script type="text/javascript" src="<?php echo base_url() ?>asset/1.js"></script>
</body>
</html>