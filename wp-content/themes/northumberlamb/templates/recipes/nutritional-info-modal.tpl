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
            <div class="col-md-12 .table-responsive nutritional-info">
              <table id="nutritional-info-table" class="table nutritional-info-table">
                  <tr>
                    <td class="info"><h6>Lamb Cut</h6></td>
                    <td class="info"><h6>Energy</h6></td>
                    <td class="info"><h6>Protein</h6></td>
                    <td class="info"><h6>Fat</h6></td>
                    <td class="info"><h6>Polyunsaturates</h6></td>
                    <td class="info"><h6>Monosaturates</h6></td>
                    <td class="info"><h6>Saturates</h6></td>
                    <td class="info"><h6>Cholesterol</h6></td>
                    <td class="info"><h6>Carbohydrate</h6></td>
                    <td class="info"><h6>Sodium</h6></td>
                    <td class="info"><h6>Potassium</h6></td>
                  </tr>
                  {foreach $content.page.nutritional_information as $info}
                    <tr>
                      <td class="">{$info.cut}</td>
                      <td class="">{$info.energy}</td>
                      <td class="">{$info.protein}</td>
                      <td class="">{$info.fat}</td>
                      <td class="">{$info.polyunsaturates}</td>
                      <td class="">{$info.monounsaturates}</td>
                      <td class="">{$info.saturates}</td>
                      <td class="">{$info.cholesterol}</td>
                      <td class="">{$info.carbohydrate}</td>
                      <td class="">{$info.sodium}</td>
                      <td class="">{$info.potassium}</td>
                    </tr>
                  {/foreach}
              </table>
            </div>
            <div style="margin-top: 20px;">
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