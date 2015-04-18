<!-- NUTRITIONAL INFO MODAL -->
<div id="nutritional-info-modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Cooking Lamb: Nutritional Information</h4>
      </div>
      <div class="modal-body  cooking-lamb-modal">
          <div>
            {$content.page.nutritional_content}
          </div>
          <div>
            <div class="col-md-12 .table-responsive">
              <table class="table nutritional-info-table">
                  <tr>
                    <td class="info"><h6>Protein Food</h6></td>
                    <td class="info"><h6>Calories</h6></td>
                    <td class="info"><h6>Kilojoules</h6></td>
                    <td class="info"><h6>Protein</h6></td>
                    <td class="info"><h6>Fat</h6></td>
                  </tr>
                  {foreach $content.page.nutritional_information as $info}
                    <tr>
                      <td class="">{$info.cut}</td>
                      <td class="">{$info.thickness}</td>
                      <td class="">{$info.weight}</td>
                      <td class="">{$info.distance}</td>
                      <td class="">{$info.cooking_time}</td>
                    </tr>
                  {/foreach}
              </table>
            </div>
            <div>
              <h4>Notes:</h4>
              {$content.page.nutritional_notes}
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK, Thanks!</button>
      </div>
    </div>
  </div>
</div>
<!-- /NUTRITIONAL INFO MODAL -->