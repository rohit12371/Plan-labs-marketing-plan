<div class="content-wrapper" style="min-height: 549px;">
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Marketing Ebooks <small>(Plan Labs)</small></h3>
      </div>
      <div class="box-body"> 
	    <?php foreach($ebooks as $ebook){ ?> 
	      <?php echo $ebook->content; ?>
		<?php } ?>
	  </div>
      <div class="box-footer"> </div>
    </div>
  </section>
</div>
