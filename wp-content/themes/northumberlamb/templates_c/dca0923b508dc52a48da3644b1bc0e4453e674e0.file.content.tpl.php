<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-18 19:41:12
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/shippers/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212581338854e4b0ffd5c4a8-34523584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dca0923b508dc52a48da3644b1bc0e4453e674e0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/northumberlamb/wp-content/themes/northumberlamb/templates/shippers/content.tpl',
      1 => 1429386067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212581338854e4b0ffd5c4a8-34523584',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e4b0ffd9be04_22161936',
  'variables' => 
  array (
    'content' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e4b0ffd9be04_22161936')) {function content_54e4b0ffd9be04_22161936($_smarty_tpl) {?><div class="container">

    <div class="row">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2><strong>Become a Shipper</strong></h2>
                    <div class="application-div box">
                        <p><?php echo $_smarty_tpl->tpl_vars['content']->value['page']['become_a_shipper'];?>
</p>
                        <div class="centered">
                            <button class="btn btn-default" type="submit" id="btnShipperApplication">Shipper Application</button>
                        </div>
                    </div>
                </div>
              <div class="col-md-6">
                    <h2><strong>Become a Member</strong></h2>
                    <div class="application-div box">
                        <p><?php echo $_smarty_tpl->tpl_vars['content']->value['page']['become_a_member'];?>
</p>
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
                    <table id="lamb-grading-chart-table" class="table lamb-grading-table">
                        <tr>
                          <td class="info"><h6>Weight (KGS)</h6></td>
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
                          <td class="info"><h6>Grade 21</h6></td>
                          <td class="info"><h6>Grade 22</h6></td>
                          <td class="info"><h6>Grade 23</h6></td>
                          <td class="info"><h6>Grade 24</h6></td>
                          <td class="info"><h6>Grade 25</h6></td>
                        </tr>
                      <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value['page']['lamb_grading_chart_information']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
                        <tr>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['weight'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_0'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_1'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_2'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_3'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_4'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_5'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_6'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_7'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_8'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_9'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_10'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_11'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_12'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_13'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_14'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_15'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_16'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_17'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_18'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_19'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_20'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_21'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_22'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_23'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_24'];?>
</td>
                          <td class=""><?php echo $_smarty_tpl->tpl_vars['info']->value['grade_25'];?>
</td>
                        </tr>
                      <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container --><?php }} ?>
