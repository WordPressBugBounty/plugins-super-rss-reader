<?php
/**
* Plugin options
*
*/

if( ! defined( 'ABSPATH' ) ) exit;

class SRR_Options{

    public static function options(){

        return apply_filters( 'srr_mod_options', array(
            'urls' => array(
                'default' => '',
                'description' => __( 'The URLs to display RSS feed for. Multiple RSS feed URLs can be separated by a new line or comma.', 'super-rss-reader' ),
            ),
            'tab_titles' => array(
                'default' => '',
                'description' => __( 'The title of the tab for the respective RSS feed.', 'super-rss-reader' )
            ),
            'count' => array(
                'default' => 5,
                'description' => __( 'The total number of feed items to fetch.', 'super-rss-reader' )
            ),
            'show_title' => array(
                'default' => 1,
                'description' => __( 'Display the title of the feed item.', 'super-rss-reader' ),
                'options' => array(
                    0 => __( 'Hide title', 'super-rss-reader' ),
                    1 => __( 'Show title', 'super-rss-reader' )
                )
            ),
            'show_date' => array(
                'default' => 0,
                'description' => __( 'Display the date of the feed item.', 'super-rss-reader' ),
                'options' => array(
                    0 => __( 'Hide date', 'super-rss-reader' ),
                    1 => __( 'Show date', 'super-rss-reader' )
                )
            ),
            'show_desc' => array(
                'default' => 1,
                'description' => __( 'Display the description/excerpt of the feed item.', 'super-rss-reader' ),
                'options' => array(
                    0 => __( 'Hide description', 'super-rss-reader' ),
                    1 => __( 'Show description', 'super-rss-reader' )
                )
            ),
            'show_author' => array(
                'default' => 0,
                'description' => __( 'Display the author of the feed item.', 'super-rss-reader' ),
                'options' => array(
                    0 => __( 'Hide author', 'super-rss-reader' ),
                    1 => __( 'Show author', 'super-rss-reader' )
                )
            ),
            'show_thumb' => array(
                'default' => 1,
                'description' => __( 'Display the thumbnail of the feed item.', 'super-rss-reader' ),
                'options' => array(
                    0 => __( 'Hide thumbnail', 'super-rss-reader' ),
                    1 => __( 'Show thumbnail', 'super-rss-reader' )
                )
            ),
            'strip_desc' => array(
                'default' => 30,
                'description' => __( 'Trim the description to certain number of words.', 'super-rss-reader' )
            ),
            'strip_title' => array(
                'default' => 0,
                'description' => __( 'Trim the title text to certain number of words.', 'super-rss-reader' )
            ),
            'offset' => array(
                'default' => 0,
                'description' => __( 'The number of RSS feed items to skip from the top.', 'super-rss-reader' )
            ),
            'date_format' => array(
                'default' => 'j F Y',
                'description' => __( 'The format of the feed item date.', 'super-rss-reader' )
            ),
            'date_timezone' => array(
                'default' => 'UTC',
                'description' => __( 'The timezone of the feed item date.', 'super-rss-reader' )
            ),
            'order_by' => array(
                'default' => 'default',
                'description' => __( 'The order of the feed', 'super-rss-reader' ),
                'options' => array(
                    'default' => __( 'Default', 'super-rss-reader' ),
                    'date' => __( 'Date', 'super-rss-reader' ),
                    'date_reverse' => __( 'Date reverse', 'super-rss-reader' ),
                    'random' => __( 'Random', 'super-rss-reader' )
                )
            ),
            'read_more' => array(
                'default' => '[...]',
                'description' => __( 'The read more text if the description is trimmed.', 'super-rss-reader' )
            ),
            'rich_desc' => array(
                'default' => 0,
                'description' => __( 'Display rich description with all the formatting. Note: With rich description text cannot be trimmed.', 'super-rss-reader' ),
                'options' => array(
                    0 => __( 'Normal description', 'super-rss-reader' ),
                    1 => __( 'Rich description', 'super-rss-reader' )
                )
            ),
            'desc_type' => array(
                'default' => 'summary',
                'description' => __( 'Type of description to prefer', 'super-rss-reader' ),
                'options' => array(
                    'summary' => __( 'Summary', 'super-rss-reader' ),
                    'full_content' => __( 'Full content', 'super-rss-reader' )
                )
            ),
            'link_desc' => array(
                'default' => 0,
                'description' => __( 'Link description text with the feed item URL', 'super-rss-reader' ),
                'options' => array(
                    0 => __( 'No link', 'super-rss-reader' ),
                    1 => __( 'Link description', 'super-rss-reader' )
                )
            ),
            'add_nofollow' => array(
                'default' => 1,
                'description' => __( 'Add "nofollow" attribute to feed links.', 'super-rss-reader' ),
                'options' => array(
                    0 => __( 'Do not add nofollow attribute', 'super-rss-reader' ),
                    1 => __( 'Add nofollow attribute', 'super-rss-reader' )
                )
            ),
            'open_newtab' => array(
                'default' => 1,
                'description' => __( 'Open the feed links in new tab.', 'super-rss-reader' ),
                'options' => array(
                    0 => __( 'Open in same tab', 'super-rss-reader' ),
                    1 => __( 'Open in new tab', 'super-rss-reader' )
                )
            ),
            'thumbnail_position' => array(
                'default' => 'align_left',
                'description' => __( 'The position of the thumbnail.', 'super-rss-reader' ),
                'options' => array(
                    'align_left' => __( 'Align left', 'super-rss-reader' ),
                    'align_right' => __( 'Align right', 'super-rss-reader' ),
                    'cover' => __( 'Cover', 'super-rss-reader' )
                )
            ),
            'thumbnail_size' => array(
                'default' => '64px',
                'description' => __( 'The size of the thumbnail including the units. Example: 64px, 10%', 'super-rss-reader' )
            ),
            'thumbnail_default' => array(
                'default' => '',
                'description' => __( 'The URL of the default thumbnail image if not present. Leave empty to not display any thumbnail.', 'super-rss-reader' )
            ),
            'no_feed_text' => array(
                'default' => __( 'No items', 'super-rss-reader' ),
                'description' => __( 'Text to display when there are no feed items', 'super-rss-reader' )
            ),
            'color_style' => array(
                'default' => 'none',
                'description' => __( 'The style of the feed display.', 'super-rss-reader' ),
                'options' => array(
                    'none' => 'No style',
                    'grey' => 'Grey',
                    'dark' => 'Dark',
                    'orange' => 'Orange',
                    'smodern' => 'Modern 1',
                    'modern2' => 'Modern 2 (New)'
                )
            ),
            'display_type' => array(
                'default' => 'vertical_ticker',
                'description' => __( 'The type of feed display mode.', 'super-rss-reader' ),
                'options' => array(
                    'normal' => __( 'Normal', 'super-rss-reader' ),
                    'vertical_ticker' => __( 'Ticker', 'super-rss-reader' ),
                    'scroll' => __( 'Scroll', 'super-rss-reader' ),
                )
            ),
            'visible_items' => array(
                'default' => 5,
                'description' => __( 'The number of feed items to be visible when ticker is enabled.', 'super-rss-reader' )
            ),
            'ticker_speed' => array(
                'default' => 4,
                'description' => __( 'The speed of the ticker animation in seconds. Without units.', 'super-rss-reader' )
            ),
            'scroll_height' => array(
                'default' => '400px',
                'description' => __( 'The maximum height of the RSS feed container.', 'super-rss-reader' )
            ),
        ));

    }

    public static function defaults(){

        $defaults = array();
        $all_options = self::options();

        foreach( $all_options as $id => $props ){
            $defaults[ $id ] = $props[ 'default' ];
        }

        return $defaults;

    }

    public static function select_options(){

        $select_options = array();
        $all_options = self::options();

        foreach( $all_options as $id => $props ){
            $list = array();
            if( array_key_exists( 'options', $props ) && is_array( $props[ 'options' ] ) ){
                $list = $props[ 'options' ];
            }
            $select_options[ $id ] = $list;
        }

        return $select_options;

    }

}

?>