<?php

function register_custom_blocks()
{
  $blocks = ['random-block'];

  foreach ($blocks as $block) {
    register_block_type(
      __DIR__ . '/build/blocks/' . $block
    );
  }
}
add_action('init', 'register_custom_blocks');
