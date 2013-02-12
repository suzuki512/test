<?php echo $this->element('header'); ?>
<?php echo $html->css('board_index');?>

<?php foreach ($data as $val): ?>

	<div class="part">

		<div class="pic">
	
			<img src="/cake/img/pics/<?php echo $val['User']['pic']; ?>" alt="<?php echo $val['User']['username']; ?>" width="128" height="128"><!--画像-->
		</div>		

		<div class="title">
		<a href  =" ../../cake/boards/detail/<?php echo $val['Board']['id'];?>">
		<?php echo $val['Board']['title']; ?></a><br><!--タイトル-->
		</div>


		<div class="name">    
		<a href  = http://localhost/cake/profiles/index/<?php echo $val['User']['id'];?>><br>
		<?php echo $val['User']['username']?></a><br><!--名前-->
		</div>


		<div class ="date"><?php echo $val['Board']['date']; ?><br><!--日付--></div>
			
				
		<div class="body"><?php echo mb_strimwidth($val['Board']['body'],0,60,".....","utf-8");?><!--本文--></div>


	</div>
	<?php endforeach; ?>

	<div class="clear"><?php if(isset($error)&&$error==true){ echo"該当する投稿はありません";}?></br></div>

	<div class="text">
		<?php echo $this->Paginator->next('<<前の5件へ');?>
		<?php echo $this->Paginator->prev('次の5件へ>>');?>
	</div>



<?php echo $this->element('footer'); ?>