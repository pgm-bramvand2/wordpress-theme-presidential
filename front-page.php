<?php

get_header();

get_template_part('components/hero', 'hero', [
    "content" => get_the_content(),
    "id" => get_the_ID(),
]);

get_template_part('components/feature', 'feature', [
    "content" => get_the_content(),
    "id" => get_the_ID(),
]);

get_footer();