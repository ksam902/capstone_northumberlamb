<div class="container">
    <div class="row">
        <h2>
            <strong>Recipes</strong>
        </h2>
        <div class="box box-recipes">
            <div class="div-recipes">
            {foreach $posts.recipes as $recipe}
            <div class="col-lg-12 div-recipe">
                <a href="#" data-reveal-id="recipe-modal-ajax" class="open-modal recipe-modal-open" rel="{ $recipe.ID }"><img class="img-recipe" src="{$recipe.image.sizes['recipe-list']}" alt="{$recipe.image.alt}"></a>
                <a href="#" data-reveal-id="recipe-modal-ajax" class="open-modal recipe-modal-open" rel="{ $recipe.ID }"><h4 class="open-modal">{$recipe.post_title}</h4></a>
                <p>{$recipe.post_content}{if $recipe.prep_time} <br/> <strong>Prep Time:</strong> {$recipe.prep_time}{/if}
                    {if $recipe.servings} <br/> <strong>Servings:</strong> {$recipe.servings}{/if}
                </p>
            </div>
            {/foreach}
        </div>
        </div>
    </div>
</div>