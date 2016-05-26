<?php get_header(); ?>

<style>
#specialNav li a.active { background:#111;color:white;}
</style>

<?php 

$title1 = "Take loyalty seriously";
$title2 = "Build a simple, elegant website";
$title3 = "Grow your customer review bank";
$title4 = "Become a social media medium";
$title5 = "Gather data on your customers";
$title6 = "title 6";

?>


<div class="wrap" style="background:url(<?php echo get_template_directory_uri(); ?>/r/about/about-1.jpg);background-size:cover;">
	<div class="row align-middle half-cover">
		<div class="column">
			<h1>About</h1>
		</div>
	</div>
</div>


<div class="row" style="margin-top:10rem;margin-bottom:10rem;">

     <div class="large-2 column hide-for-small-only" data-sticky-container>
    <div class="sticky" data-sticky data-top-anchor="stickyContent:top" data-btm-anchor="stickyContent:bottom">
	<h3 style="">Table of Contents</h3>
       <ul class="vertical menu" id="specialNav" data-magellan>
       <li><a href="#first"><i class="fi-compass"></i><?php echo $title1; ?></a></li>
         <li><a href="#second"><?php echo $title2; ?></a></li>
	 <li><a href="#third"><?php echo $title3; ?></a></li>
 <li><a href="#fourth"><?php echo $title4; ?></a></li>
	 <li><a href="#fifth"><?php echo $title5; ?></a></li>

	
       </ul>
    </div>
  </div>


<div class="large-6 large-offset-2 column" id="stickyContent">
<img src="<?php echo get_template_directory_uri(); ?>/r/about/about-1.jpg" style="margin-bottom:2rem;">
<h2 id="first" data-magellan-target="first"><?php echo $title1; ?></h2>
<p>Gourmet Marketing gives restaurants, bars and hotels the power to succeed online. Our award-winning marketing team is dedicated to putting our clients ahead of the competition and anticipating the next new online marketing breakthrough. We only use proven strategies that enable businesses to utilize the internet as a tool (or source) for growth and expansion. As an industry-leading online marketing firm headquartered in NYC, we always adapt to the market and find real value for our clients.</p>
<p> Almost 50 percent of restaurant website traffic takes place on mobile devices, according to a Gourmet Marketing.com article. Restaurants that offer responsive mobile websites convert up to 64 percent of searchers. There are many high quality DIY websites that enable restaurants to build their own mobile friendly websites like Squarespace and Wix. Website content about you, your restaurant and your multitude of seasonal menus should be limited to only a few, clearly defined options (e.g. menu, order, contact, locations). Mixed Greens, a local business in Chicago, gets an A+ for website functionality and design.</p>
<h2 id="second" data-magellan-target="second"><?php echo $title2; ?></h2>
<p>Gourmet Marketing has served over 100 clients across all segments of the hospitality industry, from fast-casual to fine dining restaurants to hotels. Our team has years of experience in responding to client’s specific needs and the changing online marketing landscape. Although we have principally marketed for the hospitality industry, we have assisted clients across a great variety of industries, including financial services, retail, human resources, education and medicine.</p>

<h2 id="third" data-magellan-target="third"><?php echo $title3; ?></h2>
<p>From website design to email marketing, search engine optimization to online advertising and all the online marketing in between, Gourmet Marketing offers a complete line-up of premium online marketing services. With consistent collaboration, we treat our clients as part of the Gourmet Marketing family, committed to your future business success.</p>
<p> Your reputation can make or break your business. The sheer volume of reviews doesn't really matter. Instead, the number of positive reviews becomes your restaurant's lifeblood. Sites such as Yelp, Urbanspoon and Zagat provide a medium for customers to express their likes and dislikes about your food, ambience and customer service. According to a survey conducted by Dimensional Research, people who had a poor interaction were 50 percent more likely to share it on social media than those who had a good experience, and 52 percent were more likely to share it on an online review site such as Yelp. Be sure to stay on top of your business's reputation by responding publicly to all reviews. You should also give your most loyal customers the ability to review your business on Yelp — increasing the likelihood that they'll leave a positive review!</p>
<h2 id="fourth" data-magellan-target="fourth"><?php echo $title4; ?></h2>
<p>Did you know it costs a business 5-7 times more to acquire a new customer than it does to sell to an existing one? Not only that, but on average loyal customers spend 10 times more over their lifetime. By taking customer loyalty seriously and offering customers the ability to earn rewards for visiting your business, you'll be able to retain your most profitable customers and allocate resources you might have wasted on customer acquisition, to more value-add activities.</p>
<p>The number of social media outlets customers' have available rivals the number of Crest toothpaste options found at your local grocery store (last count was 38 at my local store). It's important not to get lost in the myriad of options but instead, remain focused on nurturing the ones that matter the most. Once you've created a Facebook page and Twitter handle for your restaurant, focus on gathering more "Likes” and "Tweets" by driving customers to talk about their visit online. There are also quite a few social media management tools available to help you manage your social media presence, including Sprout Social, Hootsuite and Buffer.</p>
<h2 id="fifth" data-magellan-target="fifth"><?php echo $title5; ?></h2>
<p>Almost 50 percent of restaurant website traffic takes place on mobile devices, according to a Gourmet Marketing.com article. Restaurants that offer responsive mobile websites convert up to 64 percent of searchers. There are many high quality DIY websites that enable restaurants to build their own mobile friendly websites like Squarespace and Wix. Website content about you, your restaurant and your multitude of seasonal menus should be limited to only a few, clearly defined options (e.g. menu, order, contact, locations). Mixed Greens, a local business in Chicago, gets an A+ for website functionality and design.</p>
<p> It is not 1995, yet some restaurants continue to have customers drop their business cards in a fishbowl or hand write their email addresses on a piece of paper at the register. Or better yet, some restaurants collect absolutely no information about their customers. Gathering data about your customers is no longer optional in today's highly competitive, online world. Offering a digital loyalty program brings traditional offline data-gathering methods online by allowing your restaurant to collect actionable data on your customers and make decisions that positively impact your business.</p>
</div>












</div>





<?php get_footer(); ?>
