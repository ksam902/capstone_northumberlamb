<!-- BRAISING MODAL -->
<div id="braising-modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Cooking Lamb: Braising Information</h4>
      </div>
      <div class="modal-body  braising-modal">
          <div>{$content.page.braising_content}</div>
          <br/>
          <div class="col-md-12 .table-responsive">
              <table class="table braising-table">
                  <tr>
                    <td class="info"><h6>Cut</h6></td>
                    <td class="info"><h6>Approximate Weight or Thickness</h6></td>
                    <td class="info"><h6>Approximate Cooking Time</h6></td>
                  </tr>
                  {foreach $content.page.braising_information as $info}
                    <tr>
                      <td class="">{$info.cut}</td>
                      <td class="">{$info.weight_thickness}</td>
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
<!-- /BRAISING MODAL -->