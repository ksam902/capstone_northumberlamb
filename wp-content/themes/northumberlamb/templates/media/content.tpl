<div class="container">
    <div class="row">
        <h2>
            <strong>Media</strong>
        </h2>

        <div class="box">
            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-justified">
                    <li role="presentation" class="active"><a href="#" id="tab-photos" data-toggle="tab"
                                                              data-target="#photos">Photos</a></li>
                    <li role="presentation"><a href="#" id="tab-videos" data-toggle="tab"
                                               data-target="#videos">Videos</a></li>
                    <li role="presentation"><a href="#" id="tab-articles" data-toggle="tab" data-target="#articles">Articles</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="photos" class="tab-pane fade active in" style="padding: 30px;">
                        {do_shortcode($content.page.photos)}
                    </div>
                    <div id="videos" class="tab-pane fade" style="text-align:center; padding: 30px;">
                        {$content.page.videos}
                    </div>
                    <div id="articles" class="tab-pane fade" style="padding: 30px;">
                        {do_shortcode($content.page.articles)}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>