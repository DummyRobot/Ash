<?php
/**
 * Widget to display the latest comments with gravatar
 *
 * Based on: http://devilsworkshop.org/create-widgetrecent-comments-gravatar/
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


class rt_comments_widget extends WP_Widget {

            function rt_comments_widget() {
                $widget_ops = array('classname' => 'widget_rt_comments_widget', 'description' => __( 'Widget for Show Recent Comment with Author Gravatar in Sidebar.','ash') );
                $this->WP_Widget('rt-comments-widget', __('&#9883; Recent Comments with Gravatar','ash'), $widget_ops);
            } // end of function rt_comments_widget()

            function widget($args, $instance) {
                extract($args, EXTR_SKIP);
                $title = empty($instance['title']) ? __('Recent Comments','ash') : apply_filters('widget_title', $instance['title']);
                $gravatar = !empty($instance['gravatar']) ? $instance['gravatar'] : 64;
                $count = !empty($instance['count']) ? $instance['count'] : 3;
                $alternative = !empty($instance['alternative']) ? $instance['alternative'] : '';
                
                echo $before_widget;
                    if ( $title )
                        echo $before_title . $title . $after_title;
                            global $wpdb;
                            $total_comments = $wpdb->get_results("SELECT comment_date_gmt,comment_content, comment_author, comment_ID, comment_post_ID, comment_author_email, comment_date_gmt FROM " . $wpdb->comments . " WHERE comment_approved = '1' and comment_type != 'trackback' ORDER BY comment_date_gmt DESC" );

                            $comment_total = count($total_comments);

                            echo '<ul class="widget-rec-comments">';

                            for ( $comments = 0; $comments < $count; $comments++ ) {

                                if( $alternative == "on" ) {
                                    $right_grav = $comments % 2 ? 'style="float:right"' : '' ;
                                    $left_readmore = $comments % 2 ? 'style="float:left"' : '' ;
                                } else {
                                    $right_grav = '';
                                    $left_readmore = '';
                                }

                                echo '<li>';
                                    echo "<div class='row clearfix'>";

                                        echo "<div class='span2 author-vcard' $right_grav title='".$total_comments[$comments]->comment_author."'>";
                                            echo get_avatar($total_comments[$comments]->comment_author_email, $gravatar );
                                        echo "</div>";

                                        echo "<div class='span10'>";

                                            echo '<div class="comment-date">';
                                                echo '<small><a title="'. mysql2date('F j, Y - g:ia', $total_comments[$comments]->comment_date_gmt) .'" href="'. get_permalink($total_comments[$comments]->comment_post_ID) . '#comment-' . $total_comments[$comments]->comment_ID . '">';
                                                echo mysql2date('F j, Y - g:ia', $total_comments[$comments]->comment_date_gmt);
                                                echo '</a></small>';
                                            echo '</div>';


                                            echo "<div class='author-comment'>";
                                                $str = wp_html_excerpt ( $total_comments[$comments]->comment_content,65 );
                                                if( strlen( $str ) >= 65 ) {
                                                    echo $str.'...';
                                                } else {
                                                    echo $str;
                                                }
                                            echo "</div>";

                                            echo '<div class="sidebar-readmore" '.$left_readmore.' >';
                                                echo '<small><a title="Reply" href="'. get_permalink($total_comments[$comments]->comment_post_ID) . '#comment-' . $total_comments[$comments]->comment_ID . '">';
                                                echo __('Reply &rarr;','ash');
                                                echo '</a></small>';
                                            echo '</div>';

                                        echo '</div>'; //end of .comment-section

                                    echo '</div>'; //end of .comment-container
                                    echo '<hr>';
                                echo '</li>';
                            }
                            echo '</ul>';

                 echo $after_widget;
        } // end of function widget()

        function update($new_instance, $old_instance) {
            global $wpdb;
            $total_comments = $wpdb->get_results("SELECT comment_date_gmt,comment_content, comment_author, comment_ID, comment_post_ID, comment_author_email, comment_date_gmt FROM " . $wpdb->comments . " WHERE comment_approved = '1' and comment_type != 'trackback' ORDER BY comment_date_gmt DESC" );
            $comment_total = count($total_comments);
            $instance = $old_instance;
            $instance['title'] = strip_tags($new_instance['title']);
            $instance['gravatar'] = strip_tags($new_instance['gravatar']);
            $instance['count'] = strip_tags($new_instance['count']) > $comment_total ? $comment_total : strip_tags($new_instance['count']);
            $instance['alternative'] = strip_tags($new_instance['alternative']);
            return $instance;
        } // end of function update()

        function form($instance) {
            $title = isset($instance['title']) ? ($instance['title']) : '';
            $gravatar = !empty($instance['gravatar']) ? $instance['gravatar'] : 64;
            $count = !empty($instance['count']) ? $instance['count'] : 3;
            $alternative = !empty($instance['alternative']) ? $instance['alternative'] : '';

            ?>
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','ash');?> </label>
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </p>

            <p>
                <label for="<?php echo $this->get_field_id('gravatar'); ?>"><?php _e('Gravatar Size:','ash');?> </label>
                <select id="<?php echo $this->get_field_id('gravatar'); ?>" name="<?php echo $this->get_field_name('gravatar'); ?>" style="float: right;width: 100px;">
                    <option value="32" <?php selected( '32', $gravatar ); ?>>32x32</option>
                    <option value="40" <?php selected( '40', $gravatar ); ?>>40x40</option>
                    <option value="48" <?php selected( '48', $gravatar ); ?>>48x48</option>
                    <option value="56" <?php selected( '56', $gravatar ); ?>>56x56</option>
                    <option value="64" <?php selected( '64', $gravatar ); ?>>64x64</option>
                    <option value="72" <?php selected( '72', $gravatar ); ?>>72x72</option>
                </select>
            </p>

            <p>
                <label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Show Comments:','ash');?> </label>
                <input class="widefat show-comments" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" type="text" value="<?php echo $count; ?>" />
            </p>
            <?php
                global $wpdb;
                $total_comments = $wpdb->get_results("SELECT comment_date_gmt,comment_content, comment_author, comment_ID, comment_post_ID, comment_author_email, comment_date_gmt FROM " . $wpdb->comments . " WHERE comment_approved = '1' and comment_type != 'trackback' ORDER BY comment_date_gmt DESC" );
                $comment_total = count($total_comments);
                echo "<div style='color: #444444;font-size: 11px;padding: 0 0 12px;'>You have total '".$comment_total."' comments to display</div>";
            ?>
            <p>
                <label for="<?php echo $this->get_field_id('alternative'); ?>"><?php _e('Show Alternate Comments:','ash');?> </label>
                <input name="<?php echo $this->get_field_name('alternative'); ?>" type="hidden" value="off" />
                <input class="alternate" id="<?php echo $this->get_field_id('alternative'); ?>" value="on" name="<?php echo $this->get_field_name('alternative'); ?>" type="checkbox" <?php echo checked('on', $alternative ); ?> />
            </p>

            <script type="text/javascript">
                jQuery('.show-comments').keyup(function () {
                    this.value = this.value.replace(/[^0-9\.]/g,'');
                });
            </script>
            <?php
        } // end of function form()
} // end of class rt_comments_widget extends WP_Widget
add_action( 'widgets_init', create_function('', 'return register_widget("rt_comments_widget");') );
?>