<div class="container">
<div class="page_blog">
    <p><a  class="page__blog_back" href="/PHP_HW5/?page=blogs" title="Backward">Back</a></p>
    <h1>Blog</h1>
    <div class="page__blog_item">
        <?php $blog = $page_data['blogs'][$_REQUEST["blog"]]?>
        <h4><?php 
        echo ($blog["header"]);
        ?></h4>
        <p><?php 
        echo ($blog["text"]);
        ?></p>

    </div>


</div>
</div>