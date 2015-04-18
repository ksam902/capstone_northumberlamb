<!-- BROILING MODAL -->
<div id="broiling-modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Cooking Lamb: Broiling at Moderate Temperatures</h4>
      </div>
      <div class="modal-body  broiling-modal">
          <div class="col-md-12 .table-responsive">
              <table class="table broiling-table">
                  <tr>
                    <td class="info"><h6>Cut</h6></td>
                    <td class="info"><h6>Approximate Thickness (Inches)</h6></td>
                    <td class="info"><h6>Approximate Weight (Ounces)</h6></td>
                    <td class="info"><h6>Distance from Heat (Inches)</h6></td>
                    <td class="info"><h6>Approximate Cooking Time (Minutes)</h6></td>
                  </tr>
                  {foreach $content.page.broiling_information as $info}
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK, Thanks!</button>
      </div>
    </div>
  </div>
</div>
<!-- /BROILING MODAL -->