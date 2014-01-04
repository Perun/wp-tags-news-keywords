<?php
/*
Plugin Name: Tags als news_keywords
Plugin URI: http://www.perun.net/2012/10/14/google-news-wordpress-tags-als-news_keywords/
Description: Fügt die WordPress-Tags als News_Keywords im <head> ein. Wichtig für Websites, die bei Google News gelistet werden wollen bzw. sind.
Version: 0.1
Author: Vladimir Simovic
Author URI: http://www.perun.net
*/
function news_keywords() {
    if (is_single() && has_tag()) {
        $posttags = get_the_tags();
        foreach ((array) $posttags as $tag) {
            $tags_ausgabe .= $tag->name . ', ';
        }
        $news_keywords = rtrim ($tags_ausgabe , ', ');
        echo "<meta name=\"news_keywords\" content=\"".$news_keywords."\" />\n";
    }
}
add_action('wp_head', 'news_keywords');
?>
