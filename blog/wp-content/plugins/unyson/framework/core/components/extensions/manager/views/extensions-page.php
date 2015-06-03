<?php if (!defined('FW')) die('Forbidden');
/**
 * @var array $lists
 * @var string $link
 * @var array $nonces
 * @var mixed $display_default_value
 * @var string $default_thumbnail
 * @var bool $can_install
 */

$dir = dirname(__FILE__);
$extension_view_path = $dir .'/extension.php';

$displayed = array();
?>

<h3><?php _e('Active Extensions', 'fw') ?></h3>
<?php
$display_active_extensions = array();

foreach ($lists['active'] as $name => &$data) {
	if (true !== fw_akg('display', $data['manifest'], $display_default_value)) {
		continue;
	}

	$display_active_extensions[$name] = &$data;
}
?>
<?php if (empty($display_active_extensions)): ?>
	<div class="fw-extensions-no-active">
		<div class="fw-text-center fw-extensions-title-icon"><span class="dashicons dashicons-screenoptions"></span></div>
		<p class="fw-text-center fw-text-muted"><em><?php _e('No extensions activated yet', 'fw'); ?><br/><?php _e('Check the available extensions below', 'fw'); ?></em></p>
	</div>
<?php else: ?>
	<div class="fw-row fw-extensions-list">
		<?php
		foreach ($display_active_extensions as $name => &$data) {
			fw_render_view($extension_view_path, array(
				'name' => $name,
				'title' => fw_ext($name)->manifest->get_name(),
				'description' => fw_ext($name)->manifest->get('description'),
				'link' => $link,
				'lists' => &$lists,
				'nonces' => $nonces,
				'default_thumbnail' => $default_thumbnail,
				'can_install' => $can_install,
			), false);

			$displayed[$name] = true;
		}
		?>
	</div>
<?php endif; ?>

<div id="fw-extensions-list-available">
	<hr class="fw-extensions-lists-separator"/>
	<h3><?php _e('Available Extensions', 'fw') ?></h3><!-- This "available" differs from technical "available" -->
	<div class="fw-row fw-extensions-list">
		<?php $something_displayed = false; ?>
		<?php
		{
			$theme_extensions = array();

			foreach ($lists['disabled'] as $name => &$data) {
				if ($data['source'] == 'framework') {
					continue;
				}

				$theme_extensions[$name] = array(
					'name' => fw_akg('name', $data['manifest'], fw_id_to_title($name)),
					'description' => fw_akg('description', $data['manifest'], '')
				);
			}

			foreach (($theme_extensions + $lists['supported']) as $name => $data) {
				if (isset($displayed[$name])) {
					continue;
				} elseif (isset($lists['installed'][$name])) {
					if (true !== fw_akg('display', $lists['installed'][$name]['manifest'], $display_default_value)) {
						continue;
					}
				} else {
					if (isset($lists['available'][$name])) {
						if (!$can_install) {
							continue;
						}
					} else {
						//trigger_error(sprintf(__('Supported extension "%s" is not available.', 'fw'), $name));
						continue;
					}
				}

				fw_render_view($extension_view_path, array(
					'name' => $name,
					'title' => $data['name'],
					'description' => $data['description'],
					'link' => $link,
					'lists' => &$lists,
					'nonces' => $nonces,
					'default_thumbnail' => $default_thumbnail,
					'can_install' => $can_install,
				), false);

				$displayed[$name] = $something_displayed = true;
			}

			unset($theme_extensions);
		}

		foreach ($lists['disabled'] as $name => &$data) {
			if (isset($displayed[$name])) {
				continue;
			} elseif (true !== fw_akg('display', $data['manifest'], $display_default_value)) {
				continue;
			}

			fw_render_view($extension_view_path, array(
				'name' => $name,
				'title' => fw_akg('name', $data['manifest'], fw_id_to_title($name)),
				'description' => fw_akg('description', $data['manifest'], ''),
				'link' => $link,
				'lists' => &$lists,
				'nonces' => $nonces,
				'default_thumbnail' => $default_thumbnail,
				'can_install' => $can_install,
			), false);

			$displayed[$name] = $something_displayed = true;
		}

		if ($can_install) {
			foreach ( $lists['available'] as $name => &$data ) {
				if ( isset( $displayed[ $name ] ) ) {
					continue;
				} elseif ( isset( $lists['installed'][ $name ] ) ) {
					continue;
				} elseif ( $data['display'] !== true ) {
					continue;
				}

				/**
				 * fixme: remove this in the future when this extensions will look good on any theme
				 */
				if ( in_array( $name, array( 'styling', 'megamenu' ) ) ) {
					if ( isset( $lists['supported'][ $name ] ) || ( defined( 'WP_DEBUG' ) && WP_DEBUG ) ) {
					} else {
						continue;
					}
				}

				fw_render_view( $extension_view_path, array(
					'name'              => $name,
					'title'             => $data['name'],
					'description'       => $data['description'],
					'link'              => $link,
					'lists'             => &$lists,
					'nonces'            => $nonces,
					'default_thumbnail' => $default_thumbnail,
					'can_install'       => $can_install,
				), false );

				$something_displayed = true;
			}
		}
		?>
	</div>
	<?php if (!$something_displayed): ?>
	<script type="text/javascript">
		jQuery(function($){
			$('#fw-extensions-list-available').remove();
		});
	</script>
	<?php endif; ?>
</div>
