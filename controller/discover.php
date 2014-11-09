<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

/****** Page Configuration ******/
$config['canonical'] = "/discover";
$config['pageTitle'] = "UniFaction";		// Up to 70 characters. Use keywords.
Metadata::$index = false;
Metadata::$follow = false;
// Metadata::openGraph($title, $image, $url, $desc, $type);		// Title = up to 95 chars.

// Run Global Script
require(CONF_PATH . "/includes/global.php");

// Display the Header
require(SYS_PATH . "/controller/includes/metaheader.php");
require(SYS_PATH . "/controller/includes/header.php");

// Display Side Panel
require(SYS_PATH . "/controller/includes/side-panel.php");

echo '
<div id="panel-right"></div>
<div id="content">' . Alert::display();

echo '
<style>
	.entry-row { padding:2px;  }
	.entry-left { display:table-cell; vertical-align:top; }
	.entry-right { display:table-cell; vertical-align:top; padding-left:8px; }
</style>

<h3>List of UniFaction Communities</h3>';

$community = array(
	"art"		=> array("Art Community", "Join up with artists and designers to discuss arts and crafts.", "http://widget.sync.unifaction.com/assets/featured/1/1.jpg")
,	"books"		=> array("Book Club", "A community of book enthusiasts, discussing books of all kinds.", "http://widget.sync.unifaction.com/assets/featured/1/2.jpg")
,	"fashion"	=> array("Fashion Community", "Discuss the latest trends, products, and fashion advice.", "http://widget.sync.unifaction.com/assets/featured/1/3.jpg")
,	"fitness"	=> array("Fitness Community", "Discuss nutrition, workouts, strategies for fitness, and more!", "http://widget.sync.unifaction.com/assets/featured/1/4.jpg")
,	"food"	=> array("Food Community", "Find new recipes and diets, and advance your cooking skills.", "http://widget.sync.unifaction.com/assets/featured/1/5.jpg")
,	"gaming"	=> array("Gaming Community", "Find new games, reviews, guilds, strategies, and gaming news.", "http://widget.sync.unifaction.com/assets/featured/1/6.jpg")
,	"music"		=> array("Music Community", "Love music? Find great music, reviews, and discuss albums.", "http://widget.sync.unifaction.com/assets/featured/1/7.jpg")
,	"pets"	=> array("Pet Community", "Your pets deserve the best! Get pet advice, pet health, etc.", "http://widget.sync.unifaction.com/assets/featured/1/8.jpg")
,	"programming"	=> array("Programming Community", "Share tips, get help, and advance your development skills.", "http://widget.sync.unifaction.com/assets/featured/1/9.jpg")
,	"relationships"	=> array("Relationships", "Get relationship advice, improve your social skills, etc.", "http://widget.sync.unifaction.com/assets/featured/1/10.jpg")
,	"tech"		=> array("Tech", "Gadgets, phones, software help, career advice, and more tech.", "http://widget.sync.unifaction.com/assets/featured/1/11.jpg")
,	"travel"	=> array("Travel", "Planning a trip? Come here to get advice and find great spots.", "http://widget.sync.unifaction.com/assets/featured/1/12.jpg")
,	"webdev"	=> array("Web Development", "Discuss tips, advice, and strategies with other web developers.", "http://widget.sync.unifaction.com/assets/featured/1/13.jpg")
,	"writers"	=> array("Writing Community", "Share your writing with other writers, get feedback, and more!", "http://widget.sync.unifaction.com/assets/featured/1/14.jpg")
,	"movies"	=> array("Movie Fans", "Like movies? So does everyone here. Talk about your favorites.", "http://widget.sync.unifaction.com/assets/featured/1/15.jpg")
,	"shows"		=> array("TV and Web Shows", "Find and discuss new shows, reviews, trivia, and best lists.", "http://widget.sync.unifaction.com/assets/featured/1/16.jpg")
,	"avatar"	=> array("Avatar Community", "Equip your virtual avatar with new gear and clothing.", "http://widget.sync.unifaction.com/assets/featured/1/17.jpg")
);

foreach($community as $key => $val)
{
	echo '
	<div class="entry-row"><div class="entry-left"><a href="http://' . $key . '.unifaction.community"><img src="' . $val[2] . '"></a></div><div class="entry-right"><strong><a href="http://' . $key . '.unifaction.community">' . $val[0] . '</a></strong><br />' . $val[1] . '</div></div>';
}

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");