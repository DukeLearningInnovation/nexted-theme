<?php $theme_root = get_stylesheet_directory_uri(); ?>

<?php //variables

$theLink = get_permalink();

$theTitle = get_the_title();
$theURLTitle = urlencode($theTitle);

$thumbID = get_post_thumbnail_id();
$thumbURL = wp_get_attachment_image_src($thumbID,'large', true);

$share_fb = 'https://www.facebook.com/sharer/sharer.php?u=' . $theLink ;
$share_twitter = 'https://twitter.com/intent/tweet?url=' . $theLink . '&text=' . $theURLTitle . '&hashtags=DukeNextEd';
$share_gplus = 'https://plus.google.com/share?url=' . $theLink;
$share_pinterest = 'https://pinterest.com/pin/create/button/?url=' . $theLink . '&media=' . $thumbURL[0];
$share_linkedin = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $theLink . '&title=' . $theURLTitle . '&source=Duke&20CIT';
$share_email = 'mailto:?subject=CIT%20--%20' . rawurlencode($theTitle) . '&amp;body=I%20thought%20you%20might%20like%20this!%0D%0A%0D%0A' . rawurlencode($theTitle) . '%0D%0A' . rawurlencode($theLink);
$share_reddit = 'https://www.reddit.com/submit?url=' . rawurlencode($theLink) . '&title=' . rawurlencode($theTitle);

?>

<div class="social-sharing">

<?php
//facebook
echo '<a href="' . $share_fb . '" title="Share this on Facebook" class="share share_fb" target="_blank" onclick="ga(\'send\', \'event\', { eventCategory: \'Social Sharing\', eventAction: \'Share\', eventLabel: \'Facebook\'});">Facebook</a>';

//twitter
echo '<a href="' . $share_twitter . '" title="Share this on Twitter" class="share share_twitter" target="_blank" onclick="ga(\'send\', \'event\', { eventCategory: \'Social Sharing\', eventAction: \'Share\', eventLabel: \'Twitter\'});">Twitter</a>';

//google plus
// echo '<a href="' . $share_gplus . '" title="Share this on Google+" class="share share_gplus" target="_blank" onclick="ga(\'send\', \'event\', { eventCategory: \'Social Sharing\', eventAction: \'Share\', eventLabel: 'Google Plus'});">Google Plus</a>';

//reddit
echo '<a href="' . $share_reddit . '" title="Share this on Reddit" class="share share_reddit" target="_blank" onclick="ga(\'send\', \'event\', { eventCategory: \'Social Sharing\', eventAction: \'Share\', eventLabel: \'Reddit\'});">Reddit</a>';

//pinterest
echo '<a href="' . $share_pinterest . '" title="Share this on Pinterest" class="share share_pinterest" target="_blank" onclick="ga(\'send\', \'event\', { eventCategory: \'Social Sharing\', eventAction: \'Share\', eventLabel: \'Pinterest\'});">Pinterest</a>';

//linkedin
echo '<a href="' . $share_linkedin . '" title="Share this on LinkedIn" class="share share_linkedin" target="_blank" onclick="ga(\'send\', \'event\', { eventCategory: \'Social Sharing\', eventAction: \'Share\', eventLabel: \'LinkedIn\'});">LinkedIn</a>';

//email
echo '<a href="' . $share_email . '" title="Share this by Email" class="share share_email" target="_blank" onclick="ga(\'send\', \'event\', { eventCategory: \'Social Sharing\', eventAction: \'Share\', eventLabel: \'Email\'});">Email</a>';
?>

<div class="share-text">Share this!</div>

</div>
