<?php
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <!-- jquery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <?php print $scripts ?>
    <!--[if lt IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
  </head>

<body>

<div id="page">

   <div id="header">
     <?php if ($super_header): ?>
       <div id="block-super-header">
         <?php print $super_header; ?>
       </div>
     <?php endif; ?>

     <div id="hero">
       <?php if ($right_header): ?>
         <div id="block-right-header">
          <?php print $right_header; ?>
         </div>
       <?php endif; ?>
     </div>

     <?php if ($sub_header): ?>
       <div id="block-sub-header">
         <?php print $sub_header; ?>
       </div>
     <?php endif; ?>
   </div>

  <div id="content">

    <div id="main_explaination">
    </div>

    <?php if ($left): ?>
      <div id="block-left">
	 <?php print $left; ?>
      </div>
    <?php endif; ?>

    <div id="main_content_and_block_right_wrapper">
      <div id="main_content">
	<?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
        <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
        <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
        <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
        <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
        <?php if ($show_messages && $messages): print $messages; endif; ?>
        <?php print $help; ?>
        <div class="clear-block">
	  <?php print $content; ?>
	</div>
      </div>
      
      <?php if ($right): ?>
      <div id="block-right">
	<?php print $right; ?>
      </div>
      <?php endif; ?>
    </div>
    
    <div class="clear"> </div>

    <?php if ($footer): ?>
      <div id="block-footer">
	 <?php print $footer; ?>
      </div>
    <?php endif; ?>

  </div>

</div>

<?php print $closure ?>

</body>

</html>
