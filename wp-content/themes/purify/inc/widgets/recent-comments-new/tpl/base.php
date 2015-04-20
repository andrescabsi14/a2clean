<?php
/**
 * Created by PhpStorm.
 * User: Phan Long
 * Date: 3/19/2015
 * Time: 2:44 PM
 */
$title = $link_face = $link_twitter = $link_google = $link_instagram = $link_pinterest = $link_youtube = '';
$title = $instance['title'];
$no_comments = $instance['number-comments'];
$comment_len = $instance['comments-length'];
if ( $title ) {
	echo '<h4 class="box-heading">' . esc_attr( $title ) . '</h4>';
}
echo '<ul class="recent-comments-list">';
$comments_query = new WP_Comment_Query();
$comments = $comments_query->query( array( 'number' => $no_comments ) );
$comm = '';
if ( $comments ) : foreach ( $comments as $key => $comment ) :
	$temp = get_post($comment->comment_post_ID);
	$comm .= '<li><p>' . strip_tags( substr( apply_filters( 'get_comment_text', $comment->comment_content ), 0, $comment_len ) ) . '</p>';
	$comm .= '<a class="author" href="' . get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID . '">';
	$comm .= get_comment_author( $comment->comment_ID ) . '</a> / in '.$temp->post_title.' </li>';

endforeach; else :
	$comm .= 'No comments.';
endif;
echo  ent2ncr($comm);
echo '</ul>';