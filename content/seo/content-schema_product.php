<?php
$name = get_sub_field('name');
$image = get_sub_field('image');
$description = get_sub_field('description');
$offer_count = get_sub_field('offer_count');
$high_price = get_sub_field('high_price');
$low_price = get_sub_field('low_price');
$review_count = get_sub_field('review_count');
$rating_value = get_sub_field('rating_value');
?>

<div itemtype="https://schema.org/Product" itemscope>
	<meta itemprop="name" content="<?php echo $name; ?>" />
	<link itemprop="image" href="<?php echo $image; ?>" />
	<meta itemprop="description" content="<?php echo $description; ?>" />
	<link itemprop="url" href="<?php echo get_the_permalink(); ?>">
	<div itemprop="offers" itemtype="https://schema.org/AggregateOffer" itemscope>
		<meta itemprop="priceCurrency" content="BRL" />
		<meta itemprop="offerCount" content="<?php echo $offer_count; ?>" />
		<meta itemprop="highPrice" content="<?php echo $high_price; ?>" />
		<meta itemprop="lowPrice" content="<?php echo $low_price; ?>" />
	</div>
	<div itemprop="aggregateRating" itemtype="https://schema.org/AggregateRating" itemscope>
		<meta itemprop="reviewCount" content="<?php echo $review_count; ?>" />
		<meta itemprop="ratingValue" content="<?php echo $rating_value; ?>" />
	</div>
</div>