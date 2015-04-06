<div class="container">

    <div class="row">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2><strong>Become a Shipper</strong></h2>
                    <div class="application-div box">
                        <p>{$content.page.become_a_shipper}</p>
                        <div class="centered">
                            <button class="btn btn-default" type="submit" id="btnShipperApplication">Shipper Application</button>
                        </div>
                    </div>
                </div>
              <div class="col-md-6">
                    <h2><strong>Become a Member</strong></h2>
                    <div class="application-div box">
                        <p>{$content.page.become_a_member}</p>
                        <div class="centered">
                            <button class="btn btn-default" type="submit" id="btnMemberApplication">Member Application</button>
                        </div>
                    </div>
              </div>
            </div>
        </div>
        <div class="container-fluid">
            <h2><strong>Lamb Grading Chart</strong></h2>
            <div class="row box">
                <div class="col-md-12 .table-responsive lamb-grading">
                    <table class="table table-hover lamb-grading-table">
                        <tr>
                          <td class="info"><h6>Weight (LBS)</h6></td>
                          <td class="info"><h6>Grade 0</h6></td>
                          <td class="info"><h6>Grade 1</h6></td>
                          <td class="info"><h6>Grade 2</h6></td>
                          <td class="info"><h6>Grade 3</h6></td>
                          <td class="info"><h6>Grade 4</h6></td>
                          <td class="info"><h6>Grade 5</h6></td>
                          <td class="info"><h6>Grade 6</h6></td>
                          <td class="info"><h6>Grade 7</h6></td>
                          <td class="info"><h6>Grade 8</h6></td>
                          <td class="info"><h6>Grade 9</h6></td>
                          <td class="info"><h6>Grade 10</h6></td>
                          <td class="info"><h6>Grade 11</h6></td>
                          <td class="info"><h6>Grade 12</h6></td>
                          <td class="info"><h6>Grade 13</h6></td>
                          <td class="info"><h6>Grade 14</h6></td>
                          <td class="info"><h6>Grade 15</h6></td>
                          <td class="info"><h6>Grade 16</h6></td>
                          <td class="info"><h6>Grade 17</h6></td>
                          <td class="info"><h6>Grade 18</h6></td>
                          <td class="info"><h6>Grade 19</h6></td>
                          <td class="info"><h6>Grade 20</h6></td>
                        </tr>
                      {foreach $content.page.lamb_grading_chart_information as $info}
                        <tr>
                          <td class="">{$info.weight}</td>
                          <td class="">{$info.grade_0}</td>
                          <td class="">{$info.grade_1}</td>
                          <td class="">{$info.grade_2}</td>
                          <td class="">{$info.grade_3}</td>
                          <td class="">{$info.grade_4}</td>
                          <td class="">{$info.grade_5}</td>
                          <td class="">{$info.grade_6}</td>
                          <td class="">{$info.grade_7}</td>
                          <td class="">{$info.grade_8}</td>
                          <td class="">{$info.grade_9}</td>
                          <td class="">{$info.grade_10}</td>
                          <td class="">{$info.grade_11}</td>
                          <td class="">{$info.grade_12}</td>
                          <td class="">{$info.grade_13}</td>
                          <td class="">{$info.grade_14}</td>
                          <td class="">{$info.grade_15}</td>
                          <td class="">{$info.grade_16}</td>
                          <td class="">{$info.grade_17}</td>
                          <td class="">{$info.grade_18}</td>
                          <td class="">{$info.grade_19}</td>
                          <td class="">{$info.grade_20}</td>
                        </tr>
                      {/foreach}
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->