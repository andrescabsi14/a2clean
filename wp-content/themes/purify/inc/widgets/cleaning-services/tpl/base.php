<?php
$rand            = time() . '-1-' . rand( 0, 100 );
$style_color     = $tab_color_style = '';
$tab_color_style = ( $instance['tab_color'] != '' ) ? 'color: ' . $instance['tab_color'] : '';
if ( $tab_color_style ) {
	$style_color = 'style="' . $tab_color_style . '"';
}
echo '<div class="cleaning-services-tab">';
echo '<ul class="nav nav-tabs" role="tablist" ' . $style_color . '>';
//$active = $content_active ='';
$j = $k = 1;
foreach ( $instance['tab'] as $i => $tab ) {

	if ( $j == '1' ) {
		$active = "class='active'";
	} else {
		$active = '';
	}


	echo '<li role="presentation" ' . $active . '><a href="#thimm-widget-cleaning-services-' . $j . $rand . '" data-toggle="tab">' . $tab['title'] . '</a></li>';
	$j ++;
}

echo '</ul>';
$column = 12 / $instance['column'];
echo '<div class="cleaning-services-content ' . $instance['layout'] . '">';
foreach ( $instance['tab'] as $i => $tab ) {
	if ( $k == '1' ) {
		$content_active = " active in";
	} else {
		$content_active = '';
	}
	echo ' <div role="tabpanel" class="tab-pane fade' . $content_active . ' row" id="thimm-widget-cleaning-services-' . $k . $rand . '">';
	echo '<div class="box-content">';
	foreach ( $tab['item-tab'] as $item => $item_tab ) {
		// get images
		$image = $color_heading = $item = $before_link = $after_link = $style_color_heading = $style_item = $style_mark = '';
		$src   = wp_get_attachment_image_src( $item_tab['content_tab']['image'], 'full' );
		if ( $src ) {
			$src_size_single_img = '';
			$src_size_single_img = @getimagesize( $src['0'] );
			$image               = '<img src ="' . esc_url( $src['0'] ) . '" ' . $src_size_single_img[3] . ' alt=""/>';
		}
		// get color
		$color_heading = ( $item_tab['content_tab']['title_color'] != '' ) ? 'color: ' . $item_tab['content_tab']['title_color'] : '';
		if ( $color_heading <> '' ) {
			$style_color_heading = 'style="' . $color_heading . '"';
		}
		$item .= ( $item_tab['content_tab']['bg_content'] != '' ) ? 'background: ' . $item_tab['content_tab']['bg_content'] . ';' : '';
		$item .= ( $item_tab['content_tab']['text_color'] != '' ) ? 'color: ' . $item_tab['content_tab']['text_color'] : '';
		if ( $item <> '' ) {
			$style_item = 'style="' . $item . '"';
		}
		$before_link .= ( $item_tab['content_tab']['link_item'] != '' ) ? '<a href=" ' . $item_tab['content_tab']['link_item'] . '">' : '';
		$after_link .= ( $item_tab['content_tab']['link_item'] != '' ) ? '</a>' : '';
		$item .= ( $item_tab['content_tab']['text_color'] != '' ) ? 'color: ' . $item_tab['content_tab']['text_color'] : '';
		echo '<div class="item-cleaning col-md-' . $column . ' col-sm-6">';

		if ( $instance['layout'] == 'default' ) {
			if ( $item_tab['content_tab']['bg_content'] <> '' ) {
				$bg_mark         = thim_hex2rgb( $item_tab['content_tab']['bg_content'] );
				$bg_mark_opacity = 'rgba(' . $bg_mark[0] . ',' . $bg_mark[1] . ',' . $bg_mark[2] . ',0.8)';
				$style_mark      = 'style="background:' . $bg_mark_opacity . '"';
			}
			echo '<div class="content-inner">';
			if ( $image <> '' ) {
				echo  ent2ncr( $image);
			}
			echo '<div class="item-hover"><div class="content-item">';
			if ( $item_tab['content_tab']['title'] <> '' ) {
				echo '<div class="widget-title" ' . $style_color_heading . '><h3>' . $before_link . $item_tab['content_tab']['title'] . $after_link . '</h3></div>';
			}
			if ( $item_tab['content_tab']['content'] <> '' ) {
				echo '<div class="desc-widget" ' . $style_item . '>';
				echo '<p>' . $item_tab['content_tab']['content'] . '</p>';

				echo '</div>';
			}
			echo '</div><span class="mark" ' . $style_mark . '></span></div>';
			echo '</div>';
		} elseif ( $instance['layout'] == 'layout-01' ) {
			echo '<div class="content-inner">';
			echo '<div class="feature-img-widget">';
			if ( $image <> '' ) {
				echo  ent2ncr($image);
			}
			if ( $item_tab['content_tab']['title'] <> '' ) {
				echo '<div class="widget-title" ' . $style_color_heading . '><h3>' . $before_link . $item_tab['content_tab']['title'] . $after_link . '</h3></div>';
			}
			echo '</div>';

			if ( $item_tab['content_tab']['content'] <> '' ) {
				echo '<div class="desc-widget" ' . $style_item . '>';
				echo '<p>' . $item_tab['content_tab']['content'] . '</p>';

				echo '</div>';
			}
			echo '</div>';
		} elseif ( $instance['layout'] == 'layout-02' ) {
			echo '<div class="content-inner" ' . $style_item . '>';
			if ( $image <> '' ) {
				echo '<div class="feature-img-widget">';
				echo  ent2ncr($image);
				echo '</div>';
			}
			if ( $item_tab['content_tab']['content'] <> '' || $item_tab['content_tab']['title'] <> '' ) {
				echo '<div class="desc-widget">';
				if ( $item_tab['content_tab']['title'] <> '' ) {
					echo '<div class="widget-title" ' . $style_color_heading . '><h3>' . $before_link . $item_tab['content_tab']['title'] . $after_link . '</h3></div>';
				}
				echo '<p>' . $item_tab['content_tab']['content'] . '</p>';

				echo '</div>';
			}
			echo '</div>';
		}
		echo '</div>';
	}
	echo '</div>';
	if ( $tab['text_button'] ) {
		echo '<div class="view-more-widget"><a href="' . $tab['link_tab'] . '" class="thim-btn">' . $tab['text_button'] . '</a></div>';
	}
	echo '</div>';
	$k ++;
}
echo '</div>';
echo '</div>';
?>