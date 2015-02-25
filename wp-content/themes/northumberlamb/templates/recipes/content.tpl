<div class="container">
    <div class="row">
        <h2>
            <strong>Recipes</strong>
        </h2>
        <div class="box box-recipes">
            <div class="div-recipes">
            {foreach $posts.recipes as $recipe}
            <div class="col-lg-12 div-recipe">
                <a href="#" class="open-modal"><img class="img-recipe" src="http://placehold.it/175x125"></a>
                <a href="#" class="open-modal"><h4 class="open-modal">{$recipe.post_title}</h4></a>
                <p>{$recipe.post_content}{if $recipe.prep_time} <br/> <strong>Prep Time:</strong> {$recipe.prep_time}{/if}
                    <strong>Servings:</strong>
                </p>
            </div>
            {/foreach}
        </div>
        </div>
    </div>
</div>