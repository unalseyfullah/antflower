a#9^<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:413:"SELECT  wp_comments.* FROM wp_comments JOIN wp_posts ON (wp_comments.comment_post_ID = wp_posts.ID)  LEFT JOIN wp_term_relationships ON (wp_posts.ID = wp_term_relationships.object_id)  WHERE comment_approved = '1'  AND ( 
  wp_term_relationships.term_taxonomy_id IN (8)
) AND wp_posts.post_type = 'post' AND (wp_posts.post_status = 'publish') GROUP BY wp_comments.comment_id ORDER BY comment_date_gmt DESC LIMIT 4";s:11:"last_result";a:0:{}s:8:"col_info";a:15:{i:0;O:8:"stdClass":13:{s:4:"name";s:10:"comment_ID";s:7:"orgname";s:10:"comment_ID";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:15:"comment_post_ID";s:7:"orgname";s:15:"comment_post_ID";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:14:"comment_author";s:7:"orgname";s:14:"comment_author";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:1020;s:9:"charsetnr";i:246;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:20:"comment_author_email";s:7:"orgname";s:20:"comment_author_email";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:246;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:18:"comment_author_url";s:7:"orgname";s:18:"comment_author_url";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:800;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:17:"comment_author_IP";s:7:"orgname";s:17:"comment_author_IP";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"comment_date";s:7:"orgname";s:12:"comment_date";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:16:"comment_date_gmt";s:7:"orgname";s:16:"comment_date_gmt";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16521;s:4:"type";i:12;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:15:"comment_content";s:7:"orgname";s:15:"comment_content";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:246;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:13:"comment_karma";s:7:"orgname";s:13:"comment_karma";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:16:"comment_approved";s:7:"orgname";s:16:"comment_approved";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:246;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:13:"comment_agent";s:7:"orgname";s:13:"comment_agent";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:1020;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:12:"comment_type";s:7:"orgname";s:12:"comment_type";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:14:"comment_parent";s:7:"orgname";s:14:"comment_parent";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:7:"user_id";s:7:"orgname";s:7:"user_id";s:5:"table";s:11:"wp_comments";s:8:"orgtable";s:11:"wp_comments";s:3:"def";s:0:"";s:2:"db";s:18:"lystimes_antflower";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32801;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:0;s:10:"return_val";i:0;}