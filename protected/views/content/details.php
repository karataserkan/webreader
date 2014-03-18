<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<script>
		jQuery(document).ready(function() {
/*
			var username=$('#LoginForm_username').val();
		var password=$('#LoginForm_password').val();
		console.log(password);																																		
		var kerbela=$(window).kerbelainit('http://kerbela.lindneo.com','http://kerbela.lindneo.com/api/authenticate/','http://kerbela.lindneo.com/api/ticketgrant/','<?php echo Yii::app()->request->baseUrl; ?>/kerberizedservice/authenticate',username,password,'kerbela','reader','6000');
		var response=kerbela.execute();
		
		if (response.status) {
			var ticket=kerbela.getTicket();
			var auth=kerbela.getAuthTicket();
			var HTTP_service_ticket=ticket.HTTP_service_ticket;
			var form='<form method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/site/library" style="display:none"><input type="hidden" name="auth" value="'+auth+'"><input type="hidden" name="http_service_ticket" value="'+HTTP_service_ticket+'"><input type="hidden" name="type" value="web"></form>';
			$('body').append(form);
			$(form).submit();
		};		
			App.setPage("gallery");  //Set current page
			App.init(); //Initialise plugins and elements
		});*/
	</script>
	<!-- /JAVASCRIPTS -->
    
<div class="book_info_page_container">

<div id="sidebar" class="sidebar sidebar-fixed">
	<div class="sidebar-menu nav-collapse">
		<!--=== Navigation ===-->
		<ul>
			<li>
				<a href="/site/dashboard">
					<i class="fa fa-book fa-fw"></i>
					<span class="menu-text">Kütüphanem</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-briefcase fa-fw"></i> 
                    <span class="menu-text">Mağaza</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-user fa-fw"></i> 
                    <span class="menu-text">Profilim</span>
				</a>
			</li>
		</ul>
		<!-- /Navigation -->
	</div>
</div>
		<!-- /Sidebar -->
<div id="main-content">
	<div class="container">
		<div class="row">
	
<div class="reader_book_info_container clearfix">

<div class="book_info_details_container clearfix">
<div class="book_info_book_cover_container">

<div class="book_info_book_cover"></div>
<div class="stars_rating_of_the_book">

<div id="readOnly-demo" title="poor">
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-on.png" alt="1" title="kötü" />&nbsp;
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-on.png" alt="2" title="zayıf" />&nbsp;
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-on.png" alt="3" title="orta" />&nbsp;
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-off.png" alt="4" title="iyi" />&nbsp;
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-off.png" alt="5" title="mükemmel" />
<input type="hidden" name="score" value="2" readonly="readonly">
</div>
</div>
<!-- /stars_rating_of_the_book -->


<div class="number_rating_of_the_book">(583)</div>

</div>
<!-- /book_info_book_cover_container -->


<div class="book_info_details_right_part">

<div class="book_info_details_row clearfix">
<h1 class="book_info_the_name_of_the_book">Beautiful Ruins</h1>
<div class="book_info_page">128 Sayfa</div>
<div class="book_info_date">15 Ekim 2013</div>
<div class="clearfix"></div>
<h3 class="book_info_the_name_of_the_writer">Jess Walter</h2>
<button class="btn btn-primary pull-right book_info_add_to_library_button brand_color_for_buttons">Kütüphaneme Ekle</button>
</div>
<!-- /book_info_details_row -->



<div class="book_info_details_row clearfix">
<div class="book_info_description">
<span class="book_info_titles brand_text_color">Açıklama:</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pretium bibendum sollicitudin. Fusce ligula sapien, blandit et nulla et, dictum facilisis mauris. Quisque vel venenatis ante, dignissim lacinia felis. Morbi nec libero et urna tristique molestie.Aenean at felis ante. Etiam eget eros in orci vestibulum porta.</p> 
</div>
<!-- /book_info_description -->


<div class="book_info_rate_the_book">

<span class="book_info_titles brand_text_color"><center>Kitabı Oyla</center></span>


<div id="size-demo" class="book_rater_stars">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-half-big.png" alt="1" title="kötü">&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-off-big.png" alt="2" title="zayıf">&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-off-big.png" alt="3" title="orta">&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-off-big.png" alt="4" title="iyi">&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-off-big.png" alt="5" title="mükemmel">
<input type="hidden" name="score">
</div>



</div>


</div>
<!-- /book_info_details_row -->

</div>
<!-- /book_info_details_right_part -->
</div>
<!-- /book_info_details_container -->


<div class="book_info_comment_box clearfix">
<span class="book_info_titles clearfix brand_text_color">Yorum Yap</span>
<textarea rows="3" cols="5" name="textarea" class="form-control"></textarea>
<button class="send_comment btn btn-primary brand_color_for_buttons">Gönder</button>
</div>



<div class="book_info_comments_container clearfix">
<span class="book_info_titles brand_text_color">Yorumlar</span>

<div class="user_comment_container clearfix">
<div class="user_comment_avatar"><img src="<?php echo Yii::app()->request->baseUrl; ?>/avatars/avatar.png"></div>
<div class="user_comment_details">
<div class="user_comment_username">Erkan Öğümsöğütlü</div>
<div class="user_comment_user_rating">
<div id="readOnly-demo" title="poor">
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-on.png" alt="1" title="kötü" />&nbsp;
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-on.png" alt="2" title="zayıf" />&nbsp;
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-on.png" alt="3" title="orta" />&nbsp;
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-off.png" alt="4" title="iyi" />&nbsp;
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-off.png" alt="5" title="mükemmel" />
<input type="hidden" name="score" value="2" readonly="readonly">
</div>
</div>
<!-- /user_comment_user_rating -->
<div class="user_comment_date">08/12/2013</div>
<div class="clearfix"></div>
<div class="user_comment_content">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pretium bibendum sollicitudin. 
</div>
<!-- /user_comment_content -->
</div>
<!-- /user_comment_details -->
</div>
<!-- /user_comment_container -->








<div class="user_comment_container clearfix">
<div class="user_comment_avatar"><img src="<?php echo Yii::app()->request->baseUrl; ?>/avatars/avatar2.png"></div>
<div class="user_comment_details">
<div class="user_comment_username">Can Deniz Güngörmüş</div>
<div class="user_comment_user_rating">
<div id="readOnly-demo" title="poor">
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-on.png" alt="1" title="kötü" />&nbsp;
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-on.png" alt="2" title="zayıf" />&nbsp;
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-on.png" alt="3" title="orta" />&nbsp;
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-off.png" alt="4" title="iyi" />&nbsp;
<img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ui/js/jquery-raty/img/star-off.png" alt="5" title="mükemmel" />
<input type="hidden" name="score" value="2" readonly="readonly">
</div>
</div>
<!-- /user_comment_user_rating -->
<div class="user_comment_date">07/10/2013</div>
<div class="clearfix"></div>
<div class="user_comment_content">
Nulla pretium bibendum sollicitudin. Fusce ligula sapien, blandit et nulla et, dictum facilisis mauris. Morbi nec libero et urna tristique molestie.Aenean at felis ante. Etiam eget eros in orci vestibulum porta.
</div>
<!-- /user_comment_content -->
</div>
<!-- /user_comment_details -->
</div>
<!-- /user_comment_container -->









</div>
<!-- /book_info_comments_container -->
</div>
<!-- /reader_book_info_container -->
	
		</div>
	</div>
</div>


</div>
<!-- /book_info_page_container -->


