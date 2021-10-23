<?php
/** @var \Dariam\Blog\Block\Post $block */
$post = $block->getPost();
?>
<section title="Post">
    <img src="/post-placeholder.png" alt="<?= $post->getName() ?>" width="300"/>
    <h1><?= $post->getName() ?></h1>
    <p><?= $post->getAuthor() ?></p>
    <p><?= $post->getContent() ?></p>
    <p><?= $post->getCreatedAt() ?></p>
</section>