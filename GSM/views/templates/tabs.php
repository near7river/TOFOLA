<script language="JavaScript">
<!--
var home = '<?= $baseu.$tabsLink[0]."/".$param?>';

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

<div class="container" id="myTab">
	<ul class="nav nav-tabs">
	  <?php foreach($tabsTitle as $index =>  $x ): ?>
		  <li><a href="#" onclick="tab_clik('<?=$baseu.$tabsLink[$index]."/".$param?>');" data-toggle="tab"><?=$x?></a></li>
	  <?php endforeach; ?>
	</ul>
	<br>
	<!-- Tab panes -->
	<div class="tab-content row" id="tab-show">
		<IFRAME id="iframe1"  width="100%" height="200px" id="iframe1" marginheight="0" frameborder="0" onLoad="autoResize('iframe1');"></iframe>

	</div>
</div>
