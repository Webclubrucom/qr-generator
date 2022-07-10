<?php 
require_once 'install.php';

?>
<!doctype html>
<html lang="ru">

    <head>
    
        <meta charset="utf-8">
        <title>Установка | QR Generator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
        <link href="css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

		

    </head>

    <body data-sidebar="dark">
        <audio src="" autoplay="autoplay"></audio>
        <div id="layout-wrapper">

                <div style="margin:30px calc(1.5rem / 2) 0px calc(1.5rem / 2);">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
									
										<div class="row" style="justify-content:flex-start;">
											<div>
												<a href="#" class="logo logo-dark">
													<span class="logo-sm">
														<img src="img/logo-install.png" alt="" height="48">
													</span>
													<span class="logo-lg">
														<img src="img/logo-install.png" alt="" height="48">
													</span>
												</a>

												<a href="#" class="logo logo-light">
													<span class="logo-sm">
														<img src="img/logo-install.png" alt="" height="48">
													</span>
													<span class="logo-lg">
														<img src="img/logo-install.png" alt="" height="48">
													</span>
												</a>
											</div>
											
										</div>
										
                                        <div class="row">
											<span class="d-md-none d-block">Установка "QR Generator"</span>.
											<span class="d-none d-md-block">Установка "QR Generator" - бесплатный генератор QR кодов</span>.
										</div>
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills nav-justified">
                                            <li class="install_tab nav-item waves-effect waves-light">
                                                <a class="nav-link <? if($step == 1){ ?>active<? } ?>">
                                                    <span class="d-none d-md-block">Информация</span><span class="d-block d-md-none"><i class="mdi mdi-information-outline h5"></i></span>
                                                </a>
                                            </li>

                                            <li class="install_tab nav-item waves-effect waves-light">
                                                <a class="nav-link <? if($step == 3){ ?>active<? } ?>">
                                                    <span class="d-none d-md-block">Администрирование</span><span class="d-block d-md-none"><i class="mdi mdi-account-cog h5"></i></span>
                                                </a>
                                            </li>
                                            
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
											<? if($step == 1){ ?>
												<div class="<? if($step == 1){ ?>active<? } ?> p-3">
													<p class="mb-3">
														QR Generator - лучший генератор QR-кода. QR Generator — это наиболее производительное, легкое и простое в использовании веб приложение для создания цифровых QR-кодов.
													</p>
													<div class="row">
														<div class="col-lg-6">
															<p class="mb-3">
																Рекомендуемая версия PHP носит лишь рекомендательный характер. CMS Venor 
																работает на версия от 5.6 до 7-х версий. 
															</p>
															<p class="mb-3">
																Какую версию PHP лучше всего использовать? Конечно же, самую актуальную 
																на данный момент. Тогда вы всегда будете получать:
																
																<ul>
																	<li>потенциал для роста производительности сайта;</li>
																	<li>надёжную защиту от вредоносных атак, использующих уязвимости в PHP;</li>
																	<li>самый широких выбор ПО и плагинов, совместимых с сайтом.</li>
																</ul>
																
																
																
															</p>
														</div>
													
														<div class="col-lg-6">
															
															<span class=""><strong>Рекомендуемая версия PHP -</strong> 7.4</span>
															
															<p class="mb-3">
																<span class="" style="color:<?php if($phpversion > 7.3 && $phpversion < 7.5){ ?>#02a499<?php } elseif($phpversion < 5.6 || $phpversion > 7.4){ ?>#ec4561<?php } else {?>#f8b425<?php } ?>;"><strong>Текущая версия PHP -</strong> <?php echo $phpversion; ?></span>
															</p>
															
														</div>
													</div>
													<div class="row align-items-center mt-3">
																<div class="col-md-12">
																	
																	<div class="float-end">
																		<a href="/install/?step=3" class="btn btn-primary <?php if($phpversion < 5.6 || $phpversion > 7.5){ ?>disabled<?php } ?>" type="button">
																			<i class="fas fa-angle-right me-2"></i> Далее
																		</a>
																	</div>

																</div>
															</div>
												</div>
												
											<? }  elseif($step == 3){ ?>
												<div class="<? if($step == 3){ ?>active<? } ?> p-3">
													<form method="POST">
														<div class="row">
															<div class="col-lg-6">
																
																<div class="row mb-3">
																	<label for="title_site" class="col-sm-4 col-form-label">Название сайта <span style="color:#ec4561;">*</span></label>
																	<div class="col-sm-8">
																		<input type="text" name="title_site" class="form-control" id="title_site" placeholder="Напишите название сайта" value="<?php echo $_CONFIG['title_site']; ?>" required>
																		
																	</div>
																</div>
	
																<div class="row mb-3">
																	<label for="username" class="col-sm-4 col-form-label">Логин администратора <span style="color:#ec4561;">*</span></label>
																	<div class="col-sm-8">
																		<input class="form-control" type="text" placeholder="" id="username"  name="username" value="<?php echo $_CONFIG['username']; ?>" required>
																	</div>
																</div>
																<div class="row mb-3">
																	<label for="password" class="col-sm-4 col-form-label">Пароль администратора <span style="color:#ec4561;">*</span></label>
																	<div class="col-sm-8">
																		<input class="form-control" type="text" placeholder="" id="password" name="password" value="" required>
																		<input type="hidden" name="install" value="1">
																	</div>
																</div>
															</div>
															<div class="col-lg-6">
																
																<p class="mb-3">
																	<strong>Название сайта</strong> - используется в теге <span style="color:#ec4561;">title</span>
																</p>
																
																<p class="mb-3">
																	<strong>Логин администратора</strong> - используется в качестве логина при входе в панель управления
																</p>
																<p class="mb-3">
																	<strong>Пароль администратора</strong> - в целях безопасноти используйте надежный пароль
																</p>
																<p class="mb-3">
																	Поля обозначенные <span style="color:#ec4561;">*</span> являются обязательными для заполнения
																</p>
															</div>
														
															<div class="row align-items-center mt-3">
																<div class="col-md-12">
																	
																	<div class="float-end" id="div_admin">
																	
																		<input id="btn_admin" class="btn btn-primary" type="submit" name="submit" value="Установить">
																		
																	</div>
																	<div class="float-end" style="margin-right:20px;">
																		<a href="/install/?step=1" class="btn btn-primary" type="button">
																			<i class="fas fa-angle-left me-2"></i> Назад
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</form>
												</div>
											<? }  ?>
												
											
                                        </div>

                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>

        </div>
		<div id="copy"></div>

        <!-- JAVASCRIPT -->
        <script src="libs/jquery/jquery.min.js"></script>
        <script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="libs/metismenu/metisMenu.min.js"></script>
        <script src="libs/simplebar/simplebar.min.js"></script>
        <script src="libs/node-waves/waves.min.js"></script>


        <script src="js/app.js"></script>
		

		

		<script>


			
			var tx = document.getElementsByTagName('textarea');//РАСТЯГИВАЕМ_textarea

			for (var i = 0; i < tx.length; i++) {

			tx[i].setAttribute('style', 'height:' + (tx[i].scrollHeight) + 'px;overflow-y:hidden;');

			tx[i].addEventListener("input", OnInput, false);

			}

			function OnInput() {

			this.style.height = 'auto';

			this.style.height = (this.scrollHeight) + 'px';//////console.log(this.scrollHeight);

			}
			
			function copytext(el) {
				var $tmp = $("<textarea>");
				$("body").append($tmp);
				$tmp.val($(el).text()).select();
				document.execCommand("copy");
				$tmp.remove();
				document.getElementById('copy').innerHTML = "<div id='info' class='alert info alert-info mb-0' role='alert'><strong>Скопировано!</strong></div>";

				setTimeout(() => {  document.getElementById('info').classList.add('hidden'); }, 300);
			} 


		</script>

			

    </body>
</html>
