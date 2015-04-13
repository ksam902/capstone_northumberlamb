<div class="container">
    <!-- MODAL BUTTONS -->
    <div class="row">
            <h2>
                <strong>Cooking Lamb</strong>
            </h2>
        <div class="btn-group" role="group">
            <button class="btn btn-default" type="submit" id="btnBroiling">Broiling</button>
            <button class="btn btn-default" type="submit" id="btnBraising">Braising</button>
            <button class="btn btn-default" type="submit" id="btnRoasting">Roasting</button>
        </div>
    </div>
<!-- ALL RECIPES -->
    <div class="row">
        <h2>
            <strong>Recipes</strong>
        </h2>
        <div class="box box-recipes">
            <div class="div-recipes">
            {foreach $posts.recipes as $recipe}
            <div class="col-lg-12 div-recipe recipe" data-cuts="{foreach $recipe.lamb_cut as $cut}{$cut} {/foreach}" >
                <a href="#" data-reveal-id="recipe-modal-ajax" class="open-modal recipe-modal-open" rel="{ $recipe.ID }"><img class="img-recipe" src="{$recipe.image.sizes['recipe-list']}" alt="{$recipe.image.alt}"></a>
                <a href="#" data-reveal-id="recipe-modal-ajax" class="open-modal recipe-modal-open" rel="{ $recipe.ID }"><h4 class="open-modal">{$recipe.post_title}</h4></a>
                <div class="text-center">{if $recipe.prep_time}<strong>Prep Time:</strong> {$recipe.prep_time}{/if}
                    {if $recipe.servings} <strong>| Servings:</strong> {$recipe.servings}{/if}
                    <strong>| Lamb Cut(s):</strong>
                    {foreach $recipe.lamb_cut as $cut}
                      {$cut}{if $cut@iteration != count($recipe.lamb_cut)},{/if}
                    {/foreach}
                </div>
                <div>
                    {$recipe.post_content}
                </div>
            </div>
            {/foreach}
        </div>
        </div>
    </div>
</div>