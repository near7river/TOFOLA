<script language="JavaScript">
<!--

function autoResize(id){
	
    var newheight;
    var newwidth;

    if(document.getElementById){
    	document.getElementById(id).height="0px";
        newheight=document.getElementById(id).contentWindow.document .body.scrollHeight;
        newwidth=document.getElementById(id).contentWindow.document .body.scrollWidth;
    }

    document.getElementById(id).height= (newheight+250) + "px";
    document.getElementById(id).width= (newwidth) + "px";
}

//-->
</script>
<div class="clearfix"></div>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-3 column">
			<ul class="nav nav-pills nav-stacked">
			<?php foreach($T_Ref as $x):?>
				 <li id="<?=$x->nomRef?>">
				    <a href="<?=base_url()?>mineur/lstRef/<?=$x->nomRef?>" target="iframe1">
				      <span class="badge pull-right"><?=($x->nbr-1)?></span>
				      <?=$x->nomRef?>
				    </a>
				  </li>
			<?php endforeach; ?>
			</ul>
		</div>
		<div class="col-md-9 column">
			<IFRAME id="iframe1"  width="100%" height="200px" id="iframe1" marginheight="0" frameborder="0" onLoad="autoResize('iframe1');"></iframe>
		</div>
	</div>
</div>