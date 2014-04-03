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

<div class="container" id="myTab">
	
	<!-- Tab panes -->
	<div class="tab-content row" id="tab-show">
		<IFRAME src="<?=$link?>" id="iframe1"  width="100%" height="200px" id="iframe1" marginheight="0" frameborder="0" onLoad="autoResize('iframe1');"></iframe>

	</div>
</div>
