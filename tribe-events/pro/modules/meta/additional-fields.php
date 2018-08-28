<?php
/**
 * Single Event Meta (Additional Fields) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/pro/modules/meta/additional-fields.php
 *
 * @package TribeEventsCalendarPro
 */



if ( ! isset( $fields ) || empty( $fields ) || ! is_array( $fields ) ) {
	return;
}

?>

<div class="tribe-events-meta-group tribe-events-meta-group-other">

		<?php foreach ( $fields as $name => $value ): ?>

			<a href="<?php echo $value; ?>" target="_blank" class="btn registration-button">Register Now &raquo;</a>

		<?php endforeach ?>

</div>
