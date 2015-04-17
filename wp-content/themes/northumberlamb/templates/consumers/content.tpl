
<div class="container">
    <div class="row">
        <h2>
            <strong>Ask For NorthumberLamb</strong>
        </h2>
        <div class="box">
            <div class="col-lg-12">
                <p>{$content.page.post_content}</p>
                <div class="centered">
                    <button class="btn btn-default" type="submit" id="btnPurchasingStoring">Purchasing & Storing Lamb Information</button>
                </div>
                <br/><h4><strong>Where to Buy NorthumberLamb Product</strong></h4><br/>
                <div id="client_navigation">
                    <h5><a href="#" id="first"><strong>Restaurants</strong></a></h5>
                    <h5><a href="#" id="second"><strong>Butcher Shops</strong></a></h5>
                    <h5><a href="#" id="third"><strong>Grocery Stores</strong></a></h5>
                </div>
                <div id="client_lists">
                    <br/><br/><hr><br/>
                    <h5 id="first_section"><strong>Restaurants</strong></h5>
                    <ul class='small-12 medium-4 columns'>
                        {foreach $content.posts.clients as $client}
                            {if $client.client_category == "restaurant"}
                                <li><a href='{$client.link}' target="_blank">{$client.post_title}</a></li>
                            {/if}
                        {/foreach}
                    </ul>
                    <br/><hr><br/>
                    <h5 id="second_section"><strong>Butcher Shops</strong></h5>
                    <ul class='small-12 medium-4 columns'>
                        {foreach $content.posts.clients as $client}
                            {if $client.client_category == "butcher_shop"}
                                <li><a href='{$client.link}' target="_blank">{$client.post_title}</a></li>
                            {/if}
                        {/foreach}
                    </ul>
                    <br/><hr><br/>
                    <h5 id="third_section"><strong>Grocery Stores</strong></h5>
                    <ul class='small-12 medium-4 columns'>
                        {foreach $content.posts.clients as $client}
                            {if $client.client_category == "grocery_stores"}
                                <li><a href='{$client.link}' target="_blank">{$client.post_title}</a></li>
                            {/if}
                        {/foreach}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->