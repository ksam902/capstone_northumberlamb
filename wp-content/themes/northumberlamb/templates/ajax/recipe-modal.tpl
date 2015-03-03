<div id="recipe-modal-ajax" class="modal fade bs-example-modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h2 class="modal-title">{$recipe.post_title}</h2>
		</div>
		<div class="modal-body">
			<div id="imgModalRecipe">
				<img src="{$recipe.image.url}" alt="{$recipe.image.alt}">
            </div>
            <h4>Recipe Description :</h4> 
		    <p>{$recipe.post_content}</p>
		    <p><strong>Prep Time : </strong>{$recipe.prep_time}</p>
		    <p><strong>Servings : </strong>{$recipe.servings}</p>
		    <hr class="modal-hr" style="width:100%">
		    <h4>Recipe Instructions :</h4> 
			<p>{$recipe.instructions}</p>
			<hr class="modal-hr">
			<h4>Recipe Ingredients :</h4> 
			<p>
				<ul>
					{foreach $recipe.ingredients as $ingredient}
						<li>{$ingredient.ingredient}</li>
					{/foreach}
				</ul>	
			</p>
		</div>
		<div class="modal-footer">
		    <button type="button" class="btn btn-danger pull-left modal-recipe-print">Print</button>
		    <button type="button" class="btn btn-primary">Previous Recipe</button>
		    <button type="button" class="btn btn-primary">Next Recipe</button>
      	</div>
    </div>
  </div>
</div>