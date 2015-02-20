<div class="container">
    <div class="row">
        <h2>
            <strong>Recipes</strong>
        </h2>
        <div class="box box-recipes">
            <div class="div-recipes">
            {foreach $posts.recipes as $recipe}
            <div class="col-lg-12 div-recipe">
                <img class="img-recipe" src="http://placehold.it/175x125">
                <h4>{$recipe.post_title}</h4>
                <p>{$recipe.post_content}{if $recipe.prep_time} <br/> <strong>Prep Time:</strong> {$recipe.prep_time}{/if}</p>
            </div>
            {/foreach}
        </div>
        </div>
    </div>
</div>