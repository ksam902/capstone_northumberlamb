<div id="recipe-modal-ajax" class="modal fade bs-example-modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="print-title" class="modal-header print">
                <button id="btnCloseModal" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title recipe-title" data-recipe="{$recipe.ID}">{$recipe.post_title}</h2>
            </div>
            <div id="print-content" class="modal-body print">
                    <div id="imgModalRecipe">
                        <img src="{$recipe.image.sizes['recipe-modal']}" alt="{$recipe.image.alt}">
                    </div>
                    <h6>{if $recipe.prep_time}Prep Time : <span>{$recipe.prep_time}</span> | {/if}{if $recipe.servings} Servings : <span>{$recipe.servings}</span> | {/if}Lamb Cut(s): <span>{foreach $recipe.lamb_cut as $cut}
                      {$cut}{if $cut@iteration != count($recipe.lamb_cut)},{/if}
                    {/foreach}</span></h6>
                    <h4>Recipe Description</h4>
                    {$recipe.post_content}
                    <hr class="modal-hr" style="width:100%; color:#405FA2;">
                    <h4>Recipe Instructions</h4>
                    {$recipe.instructions}
                    <hr class="modal-hr">
                    <h4>Recipe Ingredients</h4>
        		<ol id="ul-recipe-ingredients">
            	{foreach $recipe.ingredients as $ingredient}
            	   <li>{$ingredient.ingredient}</li>
            	{/foreach}
        		</ol>
                    <div id="imgModalCut">
                        <!-- <img src="http://placehold.it/140x100" alt=""> -->
                    </div>
            </div>
            <div class="modal-footer">
                <button id="btnPrintRecipe" type="button" class="btn btn-danger pull-left modal-recipe-print">Print</button>
                <button type="button" class="btn btn-primary" id="previous_recipe">Previous Recipe</button>
                <button type="button" class="btn btn-primary" id="next_recipe">Next Recipe</button>
            </div>
        </div>
    </div>
</div>