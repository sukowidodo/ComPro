<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

<title><?php echo $title_website;?> :: <?php if($module=="faq"){ echo strtoupper(str_replace("_"," ",$module)); }else{ echo ucwords(str_replace("_"," ",$module)); }?><?php if($querypr->title!=""){ echo ' - '.$querypr->title; }?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="-1" />
<?php
if($querypr->title!=""){
?>
<meta content="<?php echo $querypr->title;?>" name="title" />
<meta content="<?php echo strip_tags($querypr->deskripsi);?>" name="description" />
<link rel="image_src" href="http://<?php echo $website_address;?>/images/<?php echo $pathimgmod;?>/<?php echo $querypr->image;?>" />
<?php }else{ ?>
<meta content="<?=$meta_description;?>" name="description" />
<?php } ?>
<meta content="training,gathering,leadership,transformercenter,kampoeng kidz, human capital, pelatihan,improvement,value,valuable,transformasi,bertransformasi" name="keywords" />
<!--<meta content="<?=$meta_keywords;?>" name="keywords" />
<meta content="<?=$meta_keywords2;?>" name="keywords" />-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300%7cOswald' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo $dirroot; ?>css/style.css" type="text/css" media="all" />
<link rel="shortcut icon" href="<?php echo $dirroot; ?>favicon1.ico" media="all" />

<!-- font awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!---->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script language="javascript" src="<?php echo $dirroot; ?>js/base.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo $dirroot; ?>js/blocks.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo $dirroot; ?>js/loader.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://transformercenter.com/templates/transformer/include/engine1/style.css" />
<script type="text/javascript" src="http://transformercenter.com/templates/transformer/include/engine1/jquery.js"></script>
<link href="<?php echo $dirroot; ?>css/navstyles.css" media="screen" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $dirroot; ?>js/jquery_002.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        /* drop down nav */
        $('#nav li, #header li.drop').hover(function() {
            $(this).addClass('on');
            $(this).find('div.sub').show();
        }, function() {
            $(this).removeClass('on');
            $(this).find('div.sub').hide();
        })
        $.each($('#nav li>a').not('#nav li li a'), function(i, el) {
            var offset = (parseInt($(el).width() / 2) - 10) * -1
            /*if (i > 0) {
                offset += -30;
                $(el).parent().find('div.sub').css('margin-left', -30)
            }*/
            $(el).parent().find('div.carrot').css('center', offset)
        });   

        var f = document.getElementById('cse-search-box');
        if (f) {
            var q = document.getElementById('q');
            var n = navigator;
            var l = location;
            if (n.platform == 'Win32') {
                q.style.cssText = 'border: 1px solid #7e9db9; font-size:.95em;padding: 2px;border-radius:3px';
            }
            var b = function() {
                if (q.value == '') {
                    q.style.background = '#FFFFFF';
                }
            };
            var f = function() {
                q.style.background = '#ffffff';
            };
            q.onfocus = f;
            q.onblur = b;
            if (!/[&?]q=[^&]/.test(l.search)) {
                b();
            }
        }

		});
</script>
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="js/pngfix.js"></script>
<![endif]-->

<link rel="stylesheet" href="<?php echo $dirroot; ?>css/lightbox.css" type="text/css" media="screen" />
<script src="http://code.jquery.com/jquery-latest.pack.js" type="text/javascript"></script>
<script src="<?php echo $dirroot; ?>js/jquery.lightbox.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".lightbox").lightbox();
	});
</script>

<?php
$user_agent = $_SERVER['HTTP_USER_AGENT']; 
?>

<style type="text/css">

body {top: 0px !important; position: static !important; }
.goog-te-banner-frame {display:none !important}
div#google_translate_element div.goog-te-gadget-simple{background-color:#FFF; border-radius:3px; padding:0px; }
div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span{color:#999; font-size:11px; }
div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:hover{color:#999}

#sosial a {
              color:#FFFFFF;
                }
#sosial a:hover {
              color:#0000CC;
              text-decoration:none;
                }

a {
text-decoration:none;
}

a:hover {
   
	text-decoration:none;
}


#nav li a {
  display: block;
  padding: 22px 14px 14px 14px;
  text-decoration: none;
  color: #FFF;
  line-height: 100%;
  font-family:'Open Sans', sans-serif;
  font-weight:600;
  font-size:14px;
  /*text-shadow: 1px 1px 1px #616161;*/
  filter: eq('dropshadow(color=#616161, offx=1, offy=1)');
  /*border-left: 1px solid #afafaf;*/
  background-image:url(<?php echo $dirroot; ?>images/bg_menu.png); background-position:bottom; background-repeat:repeat-x;
  
}
	
#nav li div.padding, #nav li div.sub {
  /*padding: 20px 20px 20px 20px;*/
  padding-left: 20px;
  padding-top: 20px;
  padding-right: <?php if ((preg_match('/Chrome/i', $user_agent))||(preg_match('/Safari/i', $user_agent))) { echo "0"; }else{ ?>20<?php } ?>px;
  padding-bottom: 20px;
}

#nav li div.sub div.carrot {
  background: transparent url(<?php echo $dirroot; ?>images/icon_arrow_up_megamenu<?php if ((preg_match('/Chrome/i', $user_agent))||(preg_match('/Safari/i', $user_agent))) { echo "2"; } ?>.png) no-repeat top left;
  float: left;
  width: <?php if ((preg_match('/Chrome/i', $user_agent))||(preg_match('/Safari/i', $user_agent))) { echo "20"; }else{ ?>100<?php } ?>px;
  height: 10px;
  margin-top: -30px; margin-left: 0px;
  position: relative;
}
</style>
</head>
<body style="background-image:url(<?php echo $dirroot; ?>images/bg_2.jpg); ">
<div style="display:none;">
<!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15_gif.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="web log free" ><script  type="text/javascript" >
try {Histats.startgif(1,3434457,4,8006,"");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" alt="web log free" target="_blank" ><div id="histatsC"><img border="0" src="http://s4is.histats.com/8006.gif?3434457&103"></div></a>
</noscript>
<!-- Histats.com  END  -->
</div>
<?php include_once("analyticstracking.php") ?>
<div align="center">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  	<td height="30" style="background-color:#313131; " valign="top">
    
    <table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td>
        
        <table width="325" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td width="145" valign="top"><div style="position:relative; "><div style="position:absolute; top:5px; left:0px; "><table width="135" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="background-color:#FFF; border-radius:3px; " height="20"><form method="get" name="search" action="index.php"><table width="135" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="110" style="padding-left:5px;"><input type="hidden" name="module" value="search" /><input onfocus="if(this.value=='keyword')this.value='';" value="<?php if(empty($_GET['searchtxt'])){ ?>keyword<?php }else{ echo $_GET['searchtxt']; }?>" name="searchtxt" type="text" style="width:90px; height:14px; font-size:11px; background-color:#FFF; border-color:#CCC; border-style:solid; border-width:0px; color:#999; " /></td>
    <td width="25" valign="bottom"><div align="right"><input name="submit" type="image" src="<?php echo $dirroot; ?>images/icon_search.png" /></div></td>
  </tr>
</table></form></td>
  </tr>
</table></div></div>

</td>
        <td width="180" valign="top"><div style="position:relative; "><div style="position:absolute; top:4px; left:0px; "><div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></div></div></td>
      </tr>
      </table>
      
      </td>
      </tr>
    </table>
    
    </td>
  </tr>
  <tr>
    <td height="92" style="background-color:#f77b01; background-image:url(<?php echo $dirroot; ?>images/bg-top.png); background-position:center; background-repeat:no-repeat;" valign="top">
        
    <table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td valign="top"><div style="position:relative; "><div style="position:absolute; top:10px; left:0px; z-index:999; "><a href=""><img src="<?php echo $dirimage;?><?php echo $rsc->image;?>" alt="" border="0" /></a></div></div>
            
            <!---->
      
            </td>
          </tr>
          <tr>
            <td>
<div style="position:relative; "><div style="position:absolute; top:<?php if ((preg_match('/IE/i', $user_agent))) { echo "41"; }else{ ?>42<?php }?>px; left:320px; "><div id="nav">
	<div class="container clearfix">


<ul>
<li<?php if($module=="index"){ ?> class="active"<?php } ?>><a href="http://transformercenter.com/index.php?module=index" style="text-transform:uppercase; ">Beranda</a></li>
 <li <?php if($module=="about"){ ?> class="active"<?php } ?>><a href="http://transformercenter.com/index.php?module=about" style="text-transform:uppercase; ">Our Story</a></li>
<li<?php if($module=="programs"){ ?> class="active"<?php } ?>><a href="" style="text-transform:uppercase; ">Programs</a>
				   <div class="sub" style="margin-left: -295px !important;">
                    <div class="carrot" style="right: -<?php if ((preg_match('/Chrome/i', $user_agent))||(preg_match('/Safari/i', $user_agent))) { echo "320"; }else{ ?>282<?php } ?>px;"></div>
                    <table border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <!--6<td width="185" valign="top"><img src="<?php echo $dirroot; ?>images/img_megamenu_thumb.jpg" alt="" /><img src="<?php echo $dirimage; ?>spacer.gif" alt="" width="185" height="1" /></td>-395 -->
                        <td width="615" valign="top"><table border="0" cellspacing="0" cellpadding="0">
						<?php
                        $sqlcat = command("select * from $table_category_programs where publish = '' and parent_id = '0' order by position asc");
						$numrowscat = mrows($sqlcat);
                        while($rscat = mres($sqlcat)) {
                        $nmcat++;
	$lincat++;
	if ($lincat==1) echo "<tr>";
	if($lincat=="3"){ $widthtab = "200"; }else{ $widthtab = "215"; }
	echo "<td width=\"$widthtab\" valign=\"top\">";
	?>

    <table width="200" border="0" cellspacing="0" cellpadding="0">
        <tr >
        	<td style="padding-bottom:0px; padding-top:0px; border-bottom:#7fb3ef 2px solid; padding-left:5px; cursor:pointer; text-transform:uppercase; " onclick="document.location.href='?module=programs&amp;action=category&amp;cID=<?php echo $rscat->id; ?>';"><!--<a href="?module=programs&amp;action=category&amp;cID=<?php echo $rscat->id; ?>" style="color:#999; font-size:16px; font-weight:400;"><?php echo $rscat->title;?></a>--></td>
        </tr>
    </table>
    <style>
iki:hover{
text-decoration:none;
color:#fff;
}
    </style>
    <table width="200" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:15px; ">
    <?php
    $sqlprog = command("select * from $table_include_programs as ip inner join $table_programs as p on ip.programs_id = p.id where p.publish = '' and p.parent_id = '0' and ip.category_id = '$rscat->id' order by p.position asc");
	while($rsprog = mres($sqlprog)) {
?>
        <tr>
        	<td class="mainmenu iki" onclick="document.location.href='?module=programs&amp;action=detail&amp;cID=<?php echo $rscat->id; ?>&amp;ID=<?php echo $rsprog->id; ?>';"><a href="?module=programs&amp;action=detail&amp;cID=<?php echo $rscat->id; ?>&amp;ID=<?php echo $rsprog->id; ?>" ><?php echo $rsprog->title;?></a></td>

<!--<td style="padding-bottom:8px; padding-top:8px; padding-left:5px; background-image:url(<?php echo $dirroot; ?>images/doth.jpg); background-position:bottom; background-repeat:repeat-x; font-size:8px; cursor:pointer; text-transform:none; " onclick="document.location.href='?module=programs&amp;action=detail&amp;cID=<?php echo $rscat->id; ?>&amp;ID=<?php echo $rsprog->id; ?>';"><a href="?module=programs&amp;action=detail&amp;cID=<?php echo $rscat->id; ?>&amp;ID=<?php echo $rsprog->id; ?>" "><?php echo $rsprog->title;?></a></td>
        </tr>-->

        </tr>
    <?php } ?>    
    </table>
    
    <img src="<?php echo $dirimage; ?>spacer.gif" alt="" width="<?php echo $widthtab; ?>" height="1" />
	<?php
	echo "</td>";
	//if (($nmcat!=1) && ($nmcat%3==0)){ echo "</tr><tr>"; $lincat=0;}
	if (($lincat==3)||($nmcat==$numrowscat)){ echo "</tr>"; $lincat=0;}
	//if ($nmcat==$numrowscat) echo "</tr>";
	} ?>
                    </table><img src="<?php echo $dirimage; ?>spacer.gif" alt="" width="615" height="1" /></td>
                      </tr>
                    </table>
				</div>
			</li>
<li<?php if(($module=="news")||($module=="articles")||($module=="event")||($module=="testimonial")){ ?> class="active"<?php } ?>><a href="#" style="text-transform:uppercase; ">Updates</a>
				<div style="margin-left: -30px;" class="sub">
					<div class="carrot" style="right: <?php if ((preg_match('/Chrome/i', $user_agent))||(preg_match('/Safari/i', $user_agent))) { echo "-38"; }else{ ?>2<?php } ?>px;"></div>
					<table border="0" cellspacing="0" cellpadding="0" width="150">
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=news';">News</td>
                      </tr>
                      
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=testimonial';">Acknowledgement</td>
                      </tr>
                        <td class="mainmenu" onclick="document.location.href='?module=event';">Event</td>
                      </tr>
                      </tr>
                    </table>
				</div>				
			</li>
<li <?php if($module=="venue"){ ?> class="active"<?php } ?>><a href="http://transformercenter.com/index.php?module=venue" style="text-transform:uppercase; ">Venue</a></li>
<li <?php if($module=="mentors"){ ?> class="active"<?php } ?>><a href="http://transformercenter.com/index.php?module=mentors" style="text-transform:uppercase; ">Mentors</a></li>

<li<?php if(($module=="gallery")||($module=="video")){ ?> class="active"<?php } ?>><a href="#" style="text-transform:uppercase; ">Galery</a>
				<div style="margin-left: -30px;" class="sub">
					<div style="right: -<?php if ((preg_match('/Chrome/i', $user_agent))||(preg_match('/Safari/i', $user_agent))) { echo "48"; }else{ ?>8<?php } ?>px;" class="carrot"></div>
                	<table border="0" cellspacing="0" cellpadding="0" width="150">
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=video';">Video</td>
                      </tr>
                       <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=gallery';">Gallery</td>
                       
                      </tr>
                    </table>
				</div>				
			</li>

<!--<li<?php if(($module=="faq")||($module=="brochure")||($module=="promotion")){ ?> class="active"<?php } ?>><a href="#" style="text-transform:uppercase; ">Support</a>
				<div style="margin-left: -30px;" class="sub">
					<div style="right: -<?php if ((preg_match('/Chrome/i', $user_agent))||(preg_match('/Safari/i', $user_agent))) { echo "48"; }else{ ?>8<?php } ?>px;" class="carrot"></div>
                	<table border="0" cellspacing="0" cellpadding="0" width="150">
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=brochure';">Brochure</td>
                      </tr>
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=promotion';">Promotion</td>
                      </tr>
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=faq';">FAQ</td>
                      </tr>
                    </table>
				</div>				
			</li>-->
<li<?php if($module=="contact"){ ?> class="active"<?php } ?>><a href="" style="text-transform:uppercase; ">Contact</a></li>

</li>
</ul>






		
		<ul>
			<!--<li<?php if($module=="index"){ ?> class="active"<?php } ?>><a href="?module=index" style="text-transform:uppercase; ">Beranda</a></li>
            <li<?php if($module=="page"){  ?> class="active"<?php } ?>><a href="?module=page" style="text-transform:uppercase; ">Tentang Kami</a></li>
			<li<?php if($module=="programs"){ ?> class="active"<?php } ?>><a href="?module=programs" style="text-transform:uppercase; ">Programs</a>
				<div class="sub" style="margin-left: -30px;">
					<div class="carrot" style="right: <?php if ((preg_match('/Chrome/i', $user_agent))||(preg_match('/Safari/i', $user_agent))) { echo "-54"; }else{ ?>-14<?php } ?>px;"></div>
                    <table border="0" cellspacing="0" cellpadding="0" width="190">
                      <tr>
                        <td valign="top"><div style="position:relative; "><div style="position:absolute; top:-5px; left:-35px; "><img src="<?php echo $dirroot; ?>images/img_menu_program.png" alt="" /></div></div><img src="<?php echo $dirroot; ?>images/spacer.gif" alt="" width="1" height="155" /></td>
                      </tr>
					  <?php
						$sqlprograms = command("select * from $table_programs where publish = '' order by position asc");
						while($rsprograms = mres($sqlprograms)) {
						?>
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=programs&amp;ID=<?php echo $rsprograms->id; ?>';"><?php echo $rsprograms->title; ?></td>
                      </tr>
                      <?php } ?>
                    </table> 
					
				</div>
			</li>
			<li<?php if(($module=="news")||($module=="articles")||($module=="event")||($module=="testimonial")||($module=="gallery")||($module=="video")){ ?> class="active"<?php } ?>><a href="#" style="text-transform:uppercase; ">Updates</a>
				<div style="margin-left: -30px;" class="sub">
					<div class="carrot" style="right: <?php if ((preg_match('/Chrome/i', $user_agent))||(preg_match('/Safari/i', $user_agent))) { echo "-38"; }else{ ?>2<?php } ?>px;"></div>
					<table border="0" cellspacing="0" cellpadding="0" width="150">
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=news';">News</td>
                      </tr>
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=articles';">Articles</td>
                      </tr>
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=testimonial';">Acknowledgement</td>
                      </tr>
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=gallery';">Gallery</td>
                      </tr>
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=video';">Video</td>
                      </tr>
                        
                    </table>
				</div>				
			</li>
            <li<?php if(($module=="faq")||($module=="brochure")||($module=="promotion")){ ?> class="active"<?php } ?>><a href="#" style="text-transform:uppercase; ">Support</a>
				<div style="margin-left: -30px;" class="sub">
					<div style="right: -<?php if ((preg_match('/Chrome/i', $user_agent))||(preg_match('/Safari/i', $user_agent))) { echo "48"; }else{ ?>8<?php } ?>px;" class="carrot"></div>
                	<table border="0" cellspacing="0" cellpadding="0" width="150">
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=brochure';">Brochure</td>
                      </tr>
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=promotion';">Promotion</td>
                      </tr>
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=faq';">FAQ</td>
                      </tr>
                    </table>
				</div>				
			</li>
			

			<li<?php if($module=="contact"){ ?> class="active"<?php } ?>><a href="?module=contact" style="text-transform:uppercase; ">Contact</a></li>-->
      <!--      <?php
    $mh=1;
	$sqlheader = command("SELECT * FROM $table_menu where publish = '' and parent_id = '' and menu = '1' order by position asc");
    while($rsheader = mres($sqlheader)){
		$submenu = mrows(command("SELECT * FROM $table_menu where publish = '' and parent_id = '$rsheader->id' order by position asc"));
		$submenu2 = mres(command("SELECT parent_id FROM $table_menu where publish = '' and title = '$module' limit 1"));
		$mh++;
    ?>
    <li<?php if(($module==$rsheader->module)||($submenu2->parent_id==$rsheader->id)){ ?> class="active"<?php } ?>><a href="<?php if(!empty($submenu)){ echo "#"; }else{ if($rsheader->url!=""){ echo $rsheader->url; }else{ echo "?module=".$rsheader->module; if($rsheader->module_id!=""){ echo "&amp;ID=".$rsheader->module_id; } } }?>" style="text-transform:uppercase; "><?php echo $rsheader->title; ?></a>
    
	<?php if($rsheader->id=="2"){ ?>
    <div class="sub" style="margin-left: -30px;">
    <div class="carrot" style="right: <?php if ((preg_match('/Chrome/i', $user_agent))||(preg_match('/Safari/i', $user_agent))) { echo "-38"; }else{ ?>2<?php } ?>px;"></div>
                    <table border="0" cellspacing="0" cellpadding="0" width="150">
                      <?php if($rsheader->image2!=""){ ?>
                      <tr>
                      	<td style="padding-bottom:10px; "><img src="<?php echo $dirimage; ?>page/thumbnail/<?php echo $rsheader->image2; ?>" alt="" border="0" /></td>
                      </tr>
                      <?php } ?>
					  <?php
						$sqlabout = command("select * from $table_about where publish = '' order by position asc");
						while($rsabout = mres($sqlabout)) {
						?>
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=about&amp;ID=<?php echo $rsabout->id; ?>';"><?php echo $rsabout->title; ?></td>
                      </tr>

                      <?php } ?>

                    </table>
				</div>
	<?php }elseif($rsheader->id=="3"){ ?>
    <div class="sub" style="margin-left: -30px;">
                    <div class="carrot" style="right: <?php if ((preg_match('/Chrome/i', $user_agent))||(preg_match('/Safari/i', $user_agent))) { echo "-54"; }else{ ?>-14<?php } ?>px;"></div>
                    <table border="0" cellspacing="0" cellpadding="0" width="190">
                      <?php if($rsheader->image2!=""){ ?>
                      <tr>
                      	<td style="padding-bottom:10px; "><img src="<?php echo $dirimage; ?>page/thumbnail/<?php echo $rsheader->image2; ?>" alt="" border="0" /></td>
                      </tr>
                      <?php } ?>
                      <tr>
                        <td valign="top"><div style="position:relative; "><div style="position:absolute; top:-5px; left:-35px; "><img src="<?php echo $dirroot; ?>images/img_menu_program.png" alt="" /></div></div><img src="<?php echo $dirroot; ?>images/spacer.gif" alt="" width="1" height="155" /></td>
                      </tr>
					  <?php
						$sqlprograms = command("select * from $table_programs where publish = '' order by position asc");
						while($rsprograms = mres($sqlprograms)) {
						?>
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='?module=programs&amp;ID=<?php echo $rsprograms->id; ?>';"><?php echo $rsprograms->title; ?></td>
                      </tr>
                      <?php } ?>
                    </table>
				</div>
                
                 <?php } ?>        
   <?php if(!empty($submenu)){ ?>
    <div style="margin-left: -30px;" class="sub">
    <div class="carrot" style="right: <?php if ((preg_match('/Chrome/i', $user_agent))||(preg_match('/Safari/i', $user_agent))) { echo "-38"; }else{ ?>2<?php } ?>px;"></div>
                	<table border="0" cellspacing="0" cellpadding="0" width="150">
                      <?php if($rsheader->image2!=""){ ?>
                      <tr>
                      	<td style="padding-bottom:10px; "><img src="<?php echo $dirimage; ?>page/thumbnail/<?php echo $rsheader->image2; ?>" alt="" border="0" /></td>
                      </tr>
                      <?php } ?>
					  <?php
					  $sqlheader2 = command("SELECT * FROM $table_menu where publish = '' and parent_id = '$rsheader->id' order by position asc");
					  while($rsheader2 = mres($sqlheader2)){
					  $s++;
					  ?>
                      <tr>
                        <td class="mainmenu" onclick="document.location.href='<?php if($rsheader2->url!=""){ echo $rsheader2->url; }else{ echo "?module=".$rsheader2->module; if($rsheader2->module_id!=""){ echo "&amp;ID=".$rsheader2->module_id; } }?>';"><?php echo $rsheader2->title; ?></td>
                      </tr>
                      <?php } ?>
                    </table>
				</div><?php } ?>
    </li>
    <?php } ?>
    
		</ul>
	</div>-->
</div>

</div></div></td>
          </tr>
        </table>
    
    </td>
  </tr>
</table>

<?php if($module=="index"){ ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  	<td><?php include $dirplugin."banner_slide/index.php"; ?></td>
  </tr>
</table>
<?php }else{ ?>
<?php
if($module=="page"){
	$data_header = mres(command("select * from $table_page where publish = '' and id = '".$_GET['ID']."'"));
}elseif($module=="programs"){
	$data_header = mres(command("select * from $table_programs where publish = '' and id = '".$_GET['ID']."'"));
}else{
	$data_header = mres(command("select * from $table_menu where publish = '' and module = '".$module."'"));
}
if($data_header->image!=""){
	$bgimg = $dirimage."sub/".$data_header->image;
}else{
	if (isset ($_GET['module'])){
		if($_GET['module']=='about')
		{
					$bgimg = $dirroot."images/Slide12.jpg";
		}
		 if($_GET['module']=='news')
		{
					$bgimg = $dirroot."images/baru_valuableseris.jpg";
		}
                  if($_GET['module']=='testimonial')
		{
					$bgimg = $dirroot."images/Slide92.jpg";
		}
                 if($_GET['module']=='gallery')
		{
					$bgimg = $dirroot."images/Slide91.jpg";
		}
                  if($_GET['module']=='video')
		{
					$bgimg = $dirroot."images/Slide85.jpg";
		}
                  if($_GET['module']=='event')
		{
					$bgimg = $dirroot."images/Slide86.jpg";
		}
                if($_GET['module']=='venue')
		{
					$bgimg = $dirroot."images/Slide88.jpg";
		}
                 if($_GET['module']=='mentors')
		{
					$bgimg = $dirroot."images/Slide87.jpg";
		}
                if($_GET['module']=='brochure')
		{
					$bgimg = $dirroot."images/Slide95.jpg";
		}
                if($_GET['module']=='promotion')
		{
					$bgimg = $dirroot."images/Slide96.jpg";
		}
                if($_GET['module']=='faq')
		{
					$bgimg = $dirroot."images/Slide97.jpg";
		}
               if($_GET['module']=='programs')
		{
					$bgimg = $dirroot."images/Slide14.jpg";
		}
               
		if($_GET['module']=='contact')
		{
					$bgimg = $dirroot."images/Slide98.jpg";
		}
                 
		if($_GET['module']=='programs' and $_GET['ID']==10)
		{ 
					$bgimg = $dirroot."images/Slide59.jpg";
		}
               if($_GET['module']=='programs' and $_GET['ID']==12)
		{
					$bgimg = $dirroot."images/slide36.jpg";
		}
               if($_GET['module']=='programs' and $_GET['ID']==13)
		{
					$bgimg = $dirroot."images/Slide58.jpg";
		}
               if($_GET['module']=='programs' and $_GET['ID']==15)
		{
					$bgimg = $dirroot."images/Slide60.jpg";
		}
               if($_GET['module']=='programs' and $_GET['ID']==16)
		{
					$bgimg = $dirroot."images/Slide61.jpg";
		}
                 if($_GET['module']=='programs' and $_GET['ID']==17)
		{
					$bgimg = $dirroot."images/Slide83.jpg";
		}
               if($_GET['module']=='programs' and $_GET['ID']==18)
		{
					$bgimg = $dirroot."images/Slide89.jpg";
		}
               if($_GET['module']=='programs' and $_GET['ID']==22)
		{
					$bgimg = "http://transformercenter.com/images/slideeee.jpg";
		}
            
	   }
            else {
	$bgimg = $dirroot."images/Slide12.jpg";
	}
         }
 
       ?>



<table width="1200px" height="445px" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td style="background-image:url(<?php echo $bgimg; ?>); background-position:top center; background-repeat:no-repeat; background-color:#f9c50f; " valign="top"><img src="<?php echo $dirroot; ?>images/spacer.gif" alt="" width="1" height="400" /></td>
  </tr>

</table>
<?php } ?>

<?php if($module=="index"){ ?>

 <div align="center" style="font-size:34px; color:#000000; padding-bottom:10px; "><strong>Welcome to Transformer Center</span></strong></div>
<div align="center" style="font-size:24px; color:#d64e34; padding-bottom:10px; ">What is <span style="text-transform:uppercase; ">Transformer Center?</span></div><div style="font-size:18px; color:#000000; line-height:24px; " align="center">TRANSFORMER CENTER <br />
  adalah suatu wadah yang membantu para individu <br>untuk ber "TRANSFORMASI" dalam kehidupannya menjadi <a href="#" data-toggle="tooltip" data-placement="top" title="Mari bertransformasi bersama kami" style="text-decoration: none;">VALUABLE PERSON</a>,<br>
  pribadi yang memberikan manfaat besar bagi lingkungan <br> dan menciptakan karya terbaik dalam kehidupannya.</div>
<br>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>


<a href="#" data-toggle="tooltip" data-placement="top" title="Mari bertransformasi bersama kami"><img src="images/banner/proses%20transformasi.jpg" alt="" width="1200" /></a>

<!--<table width="1006" border="0">
  <tr>
    <td width="249" rowspan="2"><img src="images/Slide4.jpg" width="220" height="170" /></td>
    <td width="203"><div align="center">
      <h2 class="style1" >Valuable Person</h2>
    </div></td>
    <td width="90">&nbsp;</td>
    <td width="247" rowspan="2"><img src="images/Slide5.jpg" width="220" height="170" /></td>
    <td width="195"><div align="center">
      <h2 class="style1">Valuable Team</h2>
    </div></td>
  </tr>
  <tr>
    <td height="162"><h4 align="left">Banyak orang berpikir predikat &quot;good&quot; adalah tujuan utama untuk mencapai kesuksesan. Tidak banyak yang menyadari bahwa kesuksesan justru terbentuk dari &quot;value&quot; sehingga membuat seseorang menjadi &quot;VALUEBLE PERSON&quot;</h4>
    <p align="center"><a href=""><img src="images/read more.gif" width="136" height="46" /></a></p></td>
    <td>&nbsp;</td>
    <td><h4 align="left">Tidak ada hal besar yang dapat diraih apabila kita bekerja sendirian, diperlukan tim. Setiap anggkota tim memiliki kelebihan. Valuable Team adalah tim yang dapat saling memahami dan melengkapi satu sama lain untuk meraih tujuan bersama</h4>
    <p align="center"><a href=""><img src="images/read more.gif" alt="" width="136" height="46" /></a></p></td>
  </tr>
  <tr>
    <td rowspan="2"><img src="images/Slide6.jpg" width="220" height="170" /></td>
    <td><div align="center">
      <h2 class="style1">Valuable Leader</h2>
    </div></td>
    <td>&nbsp;</td>
    <td rowspan="2"><img src="images/Slide8.jpg" width="220" height="170" /></td>
    <td><div align="center">
      <h2 class="style1">Valuable Service</h2>
    </div></td>
  </tr>
  <tr>
    <td><h4 align="left">Pemimpin adalah &quot;Pelayan kelas wahid&quot;: Bekerja paling keras, berkorban paling besar dan mendapat bagian paling sedikit. Tetapi penyertaan Tuhan paling besar dalam kehidupannya </h4>
    <p align="center"><a href=""><img src="images/read more.gif" width="136" height="46" /></a></p></td>
    <td>&nbsp;</td>
    
    <td><h4 align="justify">Service yang terbaik adalah Total Excellence Service</h4>
      <p align="center"><a href=""><img src="images/read more.gif" alt="" width="136" height="46" /></a></p>      <h4 align="left">&nbsp;</h4>
    </td>
  </tr>
  <tr>
    <td rowspan="2"><img src="images/Slide7.jpg" width="220" height="170" /></td>
    <td><div align="center">
      <h2 class="style1">Valuable Seller &amp; Marketer</h2>
    </div></td>
    <td>&nbsp;</td>
    <td rowspan="2"><img src="images/Slide9.jpg" width="220" height="170" /></td>
    <td><div align="center">
      <h2 class="style1">Valuable Retired</h2>
    </div></td>
  </tr>
  <tr>
    <td><h4 align="left">Kemajuan perusahaan ditunjang oleh strategi marketing yang kreatif</h4>
      <p align="center"><a href=""><img src="images/read more.gif" alt="" width="136" height="46" /></a></p>      <h4 align="justify">&nbsp;</h4>
    </td>
    <td>&nbsp;</td>
    <td><h4 align="left">Masa Purna Bhakti adalah masa keemasan seseorang untuk mengembangkan karya-karyanya</h4>
    <p align="center"><a href=""><img src="images/read more.gif" alt="" width="136" height="46" /></a></p></td>
  </tr>
</table>-->
<br>
<!--<iframe src="http://transformercenter.com/templates/transformer/Home.html" width="1200" height="1555" scrolling="no"></iframe>-->

<br>

 <!--<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  	<td>
    <table width="960" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td><div style="position:relative; "><div style="position:absolute; top:166px; left:-77px; "><img src="<?php echo $dirroot; ?>images/bg-extra-shadow.png" alt="" /></div></div><div style="position:relative; "><div style="position:absolute; top:-100px; left:0px; "><table width="960" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="269" style="background-image:url(<?php echo $dirroot; ?>images/bg_box_home.jpg); border-radius:15px; " valign="top">
    
  <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <?php 
        $sql_query = command("select * from $table_banner where publish = '' and section = 'Shortcut' order by position asc");
        while($rsbanner = mres($sql_query)){
            $sh++;?>
        <td width="320" height="269" valign="top"<?php if($sh!="1"){?> style="border-left:#464646 1px solid; "<?php } ?>>
<table width="280" border="0" cellspacing="0" cellpadding="0" style="margin:15px 0px 10px 20px; ">
  <tr>
    <td width="120" valign="top"><div style="color:#c2c617; font-size:24px; line-height:22px; "><?php echo $rsbanner->title;?></div><div style="color:#999; padding-top:8px; "><?php echo filter_text2($rsbanner->deskripsi);?></div></td>
    <td width="160" valign="top">
    <div style="position:relative; "><div style="position:absolute; top:190px; left:-120px; "><a href="<?php if($rsbanner->url!=""){ echo $rsbanner->url; }else{ echo "#"; } ?>"<?php if($rsbanner->target_url!=""){ ?> target="<?php echo $rsbanner->target_url;?>"<?php } ?>><img src="<?php echo $dirroot; ?>images/bg-btn.png" alt="" border="0" /></a></div></div>
    <div style="position:relative; "><div style="position:absolute; top:<?php if($sh!="1"){ echo "-35"; }else{ ?>-75<?php }?>px; left:<?php if($sh!="3"){ echo "20"; }else{ ?>-28<?php }?>px; "><a href="<?php if($rsbanner->url!=""){ echo $rsbanner->url; }else{ echo "#"; } ?>"<?php if($rsbanner->target_url!=""){ ?> target="<?php echo $rsbanner->target_url;?>"<?php } ?>><img src="<?php echo $dirimage; ?>banner/<?php echo $rsbanner->image;?>" alt="" border="0" /></a></div></div></td>
  </tr>
  
</table></td>
        <?php } ?>
      </tr>
    </table>
    
    </td>

  </tr>
</table></div></div></td>
      </tr>
    </table>-->
    </td>
  </tr>

<?php
$sql_querypage = command("select * from $table_page where publish = '' and id = '1' limit 1");
$resultpage = mres($sql_querypage);
$imagespage = $resultpage->image;
?>  
 <tr>
  	<!--<td height="700" style="background-image:url(<?php echo $dirroot; ?>images/bg-2-content.png); background-position:center bottom; background-repeat:no-repeat; padding-top:210px; " valign="top"><div align="center" style="font-size:24px; color:#d64e34; padding-bottom:10px; "><?php echo $resultpage->title;?></div><div style="font-size:18px; color:#999; line-height:24px; " align="center"><?php echo banned_words(filter_text2($resultpage->deskripsi));?></div><div align="center" style="font-size:24px; color:#d64e34; padding-bottom:10px; ">What is <span style="text-transform:uppercase; ">Transformer Center?</span></div><div style="font-size:18px; color:#999; line-height:24px; " align="center">Transformer Center adalah suatu wadah yang membantu individu-individu untuk<br />ber "TRANSFORMASI" dalam
kehidupannya dan menciptakan karya terbaik dalam kehidupannya dengan menjadi a VALUABLE PERSON.</div></td>-->
  </tr>
  
  <tr>
    <td style="background-image:url(<?php echo $dirroot; ?>images/bg_01.jpg); ">

<div align="center" style="font-size:24px; color:#d64e34; padding-bottom:10px; "><div style="font-size:18px; color:#000000; line-height:24px; " align="center">
  <p>Proses transformasi diri <br>layaknya seperti proses transformasi ulat menjadi kupu - kupu. <br>Demikian juga dengan kita manusia,</p>
  <p> saat ini mungkin kita belum bisa berperan banyak <br>untuk memberikan nilai lebih bagi lingkungan sekitar, </p>
  <p>namun kita bisa memutuskan untuk mulai mengambil peran itu<br> dan menjadi a <strong>VALUABLE PERSON.</strong></p>
  <p>Dengan membangun <strong>VALUABLE CONSTRUCTION</strong> dalam kehidupannya,<br> setiap individu tidak hanya bertransformasi menjadi <strong>VALUABLE PERSON</strong>, <br />
  namun juga menjadi <strong>THE MOST WANTED PERSON</strong>, <br>pribadi yang sangat dinantikan kehadirannya <br>karena <strong>VALUE</strong> yang dimilikinya.</p>
</div>
<!--<img src="images/Slide10.jpg" alt="" width="1200" height="445" />-->
<iframe src="http://transformercenter.com/templates/transformer/include/wowslider.html" style="width:1200px;height:870px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>

        <!--event-->
        <table width="1200" border="0" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td valign="top"><table width="600" border="0" cellspacing="0" cellpadding="0" style="margin-top:0px; margin-bottom:40px; ">
          <tr>
            <td colspan="2" style="padding-bottom:20px; "><span style="font-size:36px; font-weight:300; color:#232122; "><strong>Upcoming Events</strong></span></td>
          </tr>
        <?php
        $sqlevent = command("select * from $table_event where publish = '' order by date_event ASC limit 6");
        while($dataevent = mres($sqlevent)){
        $dateevent = date("F d, Y", strtotime ("$dataevent->date_event"));
        ?> 
          <tr>
            <td width="195" height="60" style="background-color:#000; text-transform:uppercase; font-family: 'Oswald', sans-serif; color:#FFF; font-size:20px; padding-left:20px; "><?php echo $dateevent; ?></td>
            <td width="405" height="60" style="background:url(http://transformercenter.com/templates/transformer/images/bgevent.png); background-repeat:no-repeat; background-position:right"><a href="" style="text-transform:uppercase; font-family: 'Oswald', sans-serif; color:#d44936; font-size:20px; "><?php echo $dataevent->title;?></a></td>
          </tr>
          <tr>
            <td><img src="<?php echo $dirimage; ?>spacer.gif" alt="" width="195" height="10" /></td>
            <td><img src="<?php echo $dirimage; ?>spacer.gif" alt="" width="405" height="10" /></td>
          </tr>
        <?php } ?>  
        </table></td>
          </tr>
        </table>


<style>
#gb1 {
height:400px;
cursor:pointer;
}
#gb2 {
height:400px;
cursor:pointer;
}

#gb1:hover {
       opacity:0.5;
}
#gb2:hover {
       opacity:0.5;
}
</style>



    </td>

  </tr>
  
  <tr>
    <td style="background-image:url(<?php echo $dirroot; ?>images/bg_3.jpg); ">

<table width="1200" border="0" cellspacing="0" cellpadding="0" align="center" >
<tr>

<td valign="top" style="text-align:left;"><p style="font-size:36px; color:#232122;text-align:left; "><strong>Testimonial</strong></p>
</td>
</tr>
<tr>
<td>


<a href="http://transformercenter.com/images/tetimoni/ok/ASTRA%20BATCH%201.jpg"><img id="gb1" src="http://transformercenter.com/images/tetimoni/ASTRA%20BATCH%201.jpg" /></a>
<a href="http://transformercenter.com/images/tetimoni/ok/ASTRA%20BATCH%202.jpg"><img id="gb2" src="http://transformercenter.com/images/tetimoni/ASTRA%20BATCH%202.jpg"/></a>
</td>
</tr>
</table>
<br>
<br>
<table width="1200" border="0" cellspacing="0" cellpadding="0" align="center" >
          <tr>
            <td valign="top"><p style="font-size:36px; color:#232122; "><strong>Video</strong></p>
              <table width="0" border="0">
                <tr>
                        <td style="padding-right:15px;">
				<iframe width="300" height="169" src="https://www.youtube.com/embed/NTo_1n4_c_s" frameborder="0" allowfullscreen></iframe></iframe></td>
			<td style="padding-right:15px;">
				<iframe width="300" height="169" src="https://www.youtube.com/embed/nUFv1Ck6NlA" frameborder="0" allowfullscreen></iframe></td>
			<td style="padding-right:15px;">
				<iframe width="300" height="169" src="https://www.youtube.com/embed/iXKqCKa8qZw" frameborder="0" allowfullscreen></iframe></td>
			
                <tr>
            <tr align="center">
                  <td style="padding-bottom:3px;"><strong>PROFESSIONAL CAMP</strong></td>
                  <td style="padding-bottom:3px;"><strong>VALUABLE PERSON</strong></td>
                  <td style="padding-bottom:3px;"><strong>VALUABLE LEADER</strong></td>
             </tr>
                  <td style="padding-right:15px"><iframe width="300" height="169" src="https://www.youtube.com/embed/9fTfoGJDWxs" frameborder="0" allowfullscreen></iframe><br>
                         </td> 
                   <td style="padding-right:15px"><iframe width="300" height="169" src="https://www.youtube.com/embed/aJQ1nXf3xOk" frameborder="0" allowfullscreen></iframe><br>
                         </td> 
                  <td style="padding-right:15px"><iframe width="300" height="169" src="https://www.youtube.com/embed/MLY9L0pg4gs" frameborder="0" allowfullscreen></iframe><br>
                         </td>
                  
                                 </tr>
            <tr align="center">
                  <td ><strong>INTERNATIONAL VILLAGE PEACE CORP USA</td>
                  <td ><strong>INTERNATIONAL VILLAGE LUCAS AND FRANS<br>(GERMANY)</strong></td>
                  <td ><strong>INTERNATIONAL VILLAGE SCOTT SPALDING<br>(USA)</strong></td>
             </tr>
          <!-- <tr>
                  <td ><iframe width="250" height="200" src="https://www.youtube.com/embed/FACSUzCrtqk" frameborder="0" allowfullscreen></iframe><br>
                         </td>
                  <td ><iframe width="250" height="200" src="https://www.youtube.com/embed/2abc-8tMr6U" frameborder="0" allowfullscreen></iframe><br>
                          </td>
                  <td ><iframe width="250" height="200" src="https://www.youtube.com/embed/8DubhWTFaEg" frameborder="0" allowfullscreen></iframe><br>
                         </td>
          </tr>
          <tr>
                  <td><strong>VALUABLE PERSON EXECUTIVE PROGRAM</strong></td>
                  <td><strong>VALUABLE LEADER EXECUTIVE PROGRAM</strong></td>
                  <td><strong>PROFESSIONAL CAMP</td>
          </tr>-->
</table>   
         <br>

   	<!--testimonial--></td>
  </tr>
</table>



<?php } ?>

<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
  $("area[rel^='prettyPhoto']").prettyPhoto();
});
</script>

<?php 
if($module!="index"){ 
	function filter_text5($pesan) {
		$trans=array("_" => "&nbsp;");
		$pesan=strtr($pesan, $trans);
		return $pesan;
	}
?>   
 



    <table width="990" border="0" cellspacing="0" cellpadding="0" align="center" style="margin-bottom:20px; ">
      <tr>
      	<td colspan="2" style="padding:18px 30px; "><table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="padding-left:5px; padding-right:10px; "><a href=""><img src="<?php echo $dirroot; ?>images/icon_home_breadcrumb.gif" alt="" border="0" /></a></td>
            <?php if($module!="page"){ ?>
            <td><img src="<?php echo $dirroot; ?>images/icon_arrow_right_breadcrumb.gif" alt="" /></td>
            <td style="padding-left:10px; padding-right:10px; <?php if($module=="faq"){ ?>text-transform:uppercase; <?php } ?>"><a href=""><?php echo filter_text5(ucfirst($module));?></a></td>
            <?php }if($_GET['cID']!=""){ if($module=="programs"){ $sqlprod = mres(command("SELECT * FROM $table_category_programs where publish = '' and id = '".$_GET['cID']."'")); ?>
            <td><img src="<?php echo $dirroot; ?>images/icon_arrow_right_breadcrumb.gif" alt="" /></td>
            <td style="padding-left:10px; padding-right:10px; "><a href=""><?php echo $sqlprod->title;?></a></td>
            <?php }} ?>
            <?php if($_GET['ID']!=""){ $table_titlebreadcrumb = $prefix.$module; $sqlprod = mres(command("SELECT * FROM $table_titlebreadcrumb where publish = '' and id = '".$_GET['ID']."'")); ?>
            <td><img src="<?php echo $dirroot; ?>images/icon_arrow_right_breadcrumb.gif" alt="" /></td>
            <td style="padding-left:10px; padding-right:10px; "><?php echo $sqlprod->title;?></td>
            <?php } ?>
            
            <?php if($module=="contact"){ ?>
            <td><img src="<?php echo $dirroot; ?>images/icon_arrow_right_breadcrumb.gif" alt="" /></td>
            <td style="padding-left:10px; padding-right:10px; "><?php if($_GET['action']=="location"){ echo "Lokasi Kami"; }else{ echo "Hubungi Kami"; }?></td>
            <?php } ?>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td width="170" valign="top">
       <table width="160" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="background-color:#000; padding:5px 5px 12px 5px; ">
            
            <table width="150" border="0" cellspacing="0" cellpadding="0">
              <?php
				if(($module=="about")||($module=="news")||($module=="articles")||($module=="promotion")||($module=="event")){
				$table_titleleft = $prefix.$module;
				$sqlpage = "select * from $table_titleleft where publish = ''";
				$sqlpage .= " order by position asc";
				$sqlpage = command($sqlpage);
				while($rspage = mres($sqlpage)) {
				?>
				<tr>
					<td class="mainmenuleft<?php if($rspage->id==$_GET['ID']){ ?> active<?php } ?>" onclick="document.location.href='?ID=<?php echo $rspage->id; ?>';"><?php echo $rspage->title;?></td>
				</tr>
				<?php }} ?>
                
                <?php
				if($module=="programs"){
				$sqlprograms = command("select * from $table_programs where publish = '' order by position asc");
				while($rsprograms = mres($sqlprograms)) {
				?>
				<tr>
					<td class="mainmenuleft<?php if($rsprograms->id==$_GET['ID']){ ?> active<?php } ?>" onclick="document.location.href='?ID=<?php echo $rsprograms->id; ?>';"><?php echo $rsprograms->title;?></td>
				</tr>
				<?php }} ?>
                
                <?php
				if(($module=="gallery")||($module=="video")){
				$table_titleleft = $prefix.$module;
				$sqlgallery = command("select * from $table_titleleft where publish = '' order by position asc");
				while($rsgallery = mres($sqlgallery)) {
				?>
				<tr>
					<td class="mainmenuleft<?php if($rsgallery->id==$_GET['ID']){ ?> active<?php } ?>" onclick="document.location.href='?&amp;ID=<?php echo $rsgallery->id; ?>&amp;action=detail';"><?php echo $rsgallery->title;?></td>
				</tr>
				<?php }} ?>
                
                <?php
				if($module=="contact"){
				?>
				<tr>
					<td class="mainmenuleft<?php if($_GET['action']==""){ ?> active<?php } ?>" onclick="document.location.href='?module=contact';">Hubungi Kami</td>
				</tr>
                <tr>
					<td class="mainmenuleft<?php if($_GET['action']=="location"){ ?> active<?php } ?>" onclick="document.location.href='?module=contact&amp;action=location';">Lokasi Kami</td>
				</tr>
				<?php } ?>
            </table>
            
            </td>
          </tr>
        </table>
       <img src="<?php echo $dirroot; ?>images/spacer.gif" alt="" width="100" height="1" /></td>
       <td width="150" style="background-color:#FFF; padding:20px 30px; border-radius: 4px; " height="200" valign="top">
 
<?php } ?>


<!--<?php //include "plugin/banner_middle.php";  style="background-image:url(images/bg_menu_top_overlay.png); "?>
<img src="<?php echo $dirimage; ?>spacer.gif" alt="" width="100" height="20" />-->
