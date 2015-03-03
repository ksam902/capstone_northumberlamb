
<div class="container">
    <div class="row">
        <h2>
            <strong>Ask For NorthumberLamb</strong>
        </h2>
        <div class="box">
            <div class="col-lg-12">
                <p>{$content.page.post_content}</p>
                <hr>
                <ul>
                    {foreach $content.posts.clients as $client}
                        <li><a href='{$client.link}' target="_blank">{$client.post_title}</a></li>
                    {/foreach}
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->