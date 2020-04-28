<aside class="item item3">
    <?php echo $parsedown->text(file_get_contents("panel/$page.md")); ?>
</aside>

<main class="item item4">
    <?php echo $parsedown->text(file_get_contents("page/$page.md")); ?>
</main>