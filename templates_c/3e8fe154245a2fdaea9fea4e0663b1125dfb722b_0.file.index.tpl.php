<?php
/* Smarty version 3.1.30, created on 2022-09-20 12:38:17
  from "C:\xampp\htdocs\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_632998194709f8_63107614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e8fe154245a2fdaea9fea4e0663b1125dfb722b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\index.tpl',
      1 => 1663669442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632998194709f8_63107614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\smarty\\templates_c\\3e8fe154245a2fdaea9fea4e0663b1125dfb722b_0.file.index.tpl.php',
    'uid' => '3e8fe154245a2fdaea9fea4e0663b1125dfb722b',
    'call_name' => 'smarty_template_function_menu_193362384263299819374676_89541044',
  ),
));
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_escape')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.escape.php';
if (!is_callable('smarty_modifier_regex_replace')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.regex_replace.php';
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_spacify')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.spacify.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_mb_wordwrap')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\shared.mb_wordwrap.php';
if (!is_callable('smarty_function_counter')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.counter.php';
echo $_smarty_tpl->tpl_vars['Contacts']->value['fax'];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['email'];?>
<br />

<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['phone']['home'];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['phone']['cell'];?>
<br /><br/>

<?php echo $_smarty_tpl->tpl_vars['Contactss']->value[0];?>
<br />
<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['Contactss']->value[1], 'UTF-8');?>
<br />

<?php echo $_smarty_tpl->tpl_vars['Contactss']->value[2][0];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contactss']->value[2][1];?>
<br /><br/>



<?php echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>
<br /><br/>
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle']->value);?>
<br /><br/>
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle']->value,true);?>
<br /><br/>


<?php echo ($_smarty_tpl->tpl_vars['articleTitles']->value).(' yesterday.');?>
<br/><br/>


 
<?php echo $_smarty_tpl->tpl_vars['articleTitle1']->value;?>
<br/><br/>
<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['articleTitle1']->value, $tmp);?>
<br/><br/>
<?php echo mb_strlen($_smarty_tpl->tpl_vars['articleTitle1']->value, 'UTF-8');?>
<br/><br/>



<?php echo $_smarty_tpl->tpl_vars['articleTitle2']->value;?>
<br/>
<?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['articleTitle2']->value, $tmp)+1);?>
<br/><br/>


<?php echo $_smarty_tpl->tpl_vars['articleTitle3']->value;?>
<br/>
<?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['articleTitle3']->value, $tmp);?>
<br/><br/>


<?php echo $_smarty_tpl->tpl_vars['articleTitle4']->value;?>
<br/>
<?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['articleTitle4']->value, $tmp);?>
<br/><br/>




<?php echo smarty_modifier_date_format(time());?>
<br/>
<?php echo smarty_modifier_date_format(time(),"%D");?>
<br/>
<?php echo smarty_modifier_date_format(time(),$_smarty_tpl->tpl_vars['config']->value['date']);?>
<br/>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value);?>
<br/>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value,"%A, %B %e, %Y");?>
<br/>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value,$_smarty_tpl->tpl_vars['config']->value['time']);?>
<br/><br/>


<?php echo (($tmp = @$_smarty_tpl->tpl_vars['articleTitle5']->value)===null||$tmp==='' ? 'no title' : $tmp);?>
<br/>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['myTitle']->value)===null||$tmp==='' ? 'no title' : $tmp);?>
<br/>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['email']->value)===null||$tmp==='' ? 'No email address available' : $tmp);?>
<br/><br/>



<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['articleTitle6']->value, ENT_QUOTES, 'UTF-8', true);?>
<br/>


<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['articleTitle6']->value, ENT_QUOTES, 'UTF-8', true);?>
    <br/>


<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['articleTitle6']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <br/>


<a href="?title=<?php echo rawurlencode($_smarty_tpl->tpl_vars['articleTitle6']->value);?>
">click here</a><br/>


<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['articleTitle6']->value);?>
<br/>


<a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['EmailAddress']->value, "hex");?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['EmailAddress']->value, "hexentity");?>
</a><br/>
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['EmailAddress']->value, 'mail');?>
    <br/><br/>




<?php echo $_smarty_tpl->tpl_vars['articleTitle7']->value;?>
<br/>

<?php echo preg_replace('!^!m',str_repeat(' ',4),$_smarty_tpl->tpl_vars['articleTitle7']->value);?>
<br/>

<?php echo preg_replace('!^!m',str_repeat(' ',10),$_smarty_tpl->tpl_vars['articleTitle7']->value);?>
<br/>

<?php echo preg_replace('!^!m',str_repeat("\t",1),$_smarty_tpl->tpl_vars['articleTitle7']->value);?>
<br/><br/>



<?php echo $_smarty_tpl->tpl_vars['articleTitle8']->value;?>
<br/>
<?php echo mb_strtolower($_smarty_tpl->tpl_vars['articleTitle8']->value, 'UTF-8');?>
<br/><br/>


<?php echo nl2br($_smarty_tpl->tpl_vars['articleTitle9']->value);?>
<br/><br/>



<?php echo $_smarty_tpl->tpl_vars['articleTitle10']->value;?>

<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['articleTitle10']->value,"/[\r\t\n]/"," ");?>

<br/><br/>



<?php echo $_smarty_tpl->tpl_vars['articleTitle11']->value;?>
<br/>
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['articleTitle11']->value,'Garden','Vineyard');?>
<br/>
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['articleTitle11']->value,' ','    ');?>
<br/<br/>




<?php echo $_smarty_tpl->tpl_vars['articleTitle11']->value;?>
<br/>
<?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['articleTitle11']->value);?>
<br/>
<?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['articleTitle11']->value,"^^");?>
<br/><br/>


<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
<br/>
<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['number']->value);?>
<br/>
<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['number']->value);?>
<br/><br/>



<?php echo $_smarty_tpl->tpl_vars['articleTitle12']->value;?>
<br/>
<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['articleTitle12']->value);?>
<br/>
<?php echo preg_replace('!\s+!u', '&nbsp;',$_smarty_tpl->tpl_vars['articleTitle12']->value);?>
<br/><br/>




<?php echo $_smarty_tpl->tpl_vars['articleTitle13']->value;?>
<br/>
<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['articleTitle13']->value);?>
<br/> 
<?php echo strip_tags($_smarty_tpl->tpl_vars['articleTitle13']->value);?>
<br/><br/>



<?php echo $_smarty_tpl->tpl_vars['articleTitle14']->value;?>
<br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle14']->value);?>
<br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle14']->value,30);?>
<br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle14']->value,30,'');?>
<br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle14']->value,30,"---");?>
<br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle14']->value,30,'',true);?>
<br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle14']->value,30,"...",true);?>
<br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle14']->value,30,'..',true,true);?>
<br/><br/>



<?php echo $_smarty_tpl->tpl_vars['articleTitle15']->value;?>
<br/>
<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['articleTitle15']->value, ENT_QUOTES);?>
<br/>
<?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['articleTitle15']->value, 'UTF-8', 'HTML-ENTITIES');?>
<br/><br/>



<?php echo $_smarty_tpl->tpl_vars['articleTitle16']->value;?>
<br/>
<?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['articleTitle16']->value,30,"\n",false);?>
<br/>
<?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['articleTitle16']->value,20,"\n",false);?>
<br/>
<?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['articleTitle16']->value,30,"<br />\n",false);?>
<br/>
<?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['articleTitle16']->value,26,"\n",true);?>
<br/><br/>



<?php echo $_smarty_tpl->tpl_vars['articleTitle17']->value;?>
<br/>
<?php echo smarty_modifier_spacify(mb_strtoupper($_smarty_tpl->tpl_vars['articleTitle17']->value, 'UTF-8'));?>
<br/>
<?php echo smarty_modifier_truncate(smarty_modifier_spacify(mb_strtolower($_smarty_tpl->tpl_vars['articleTitle17']->value, 'UTF-8')));?>
<br/>
<?php echo smarty_modifier_spacify(smarty_modifier_truncate(mb_strtolower($_smarty_tpl->tpl_vars['articleTitle17']->value, 'UTF-8'),30));?>
<br/>
<?php echo smarty_modifier_truncate(smarty_modifier_spacify(mb_strtolower($_smarty_tpl->tpl_vars['articleTitle17']->value, 'UTF-8')),30,". . .");?>
<br/><br/>





<?php $_smarty_tpl->_assignInScope('menu', array('item1','item2','item3'=>array('item3-1','item3-2','item3-3'=>array('item3-3-1','item3-3-2')),'item4'));
?>


<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myColors']->value, 'color');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>



<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myPeople']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_2_saved = $_smarty_tpl->tpl_vars['value'];
?>
   <li><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>



<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_4_saved = $_smarty_tpl->tpl_vars['value'];
?>
    <?php echo $_smarty_tpl->tpl_vars['value']->key;?>
: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

  <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
$__foreach_value_6_saved = $_smarty_tpl->tpl_vars['value'];
?>
    <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

  <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_6_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




<?php
$__section_customer_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_customer']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer'] : false;
$__section_customer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contacts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customer_0_total = $__section_customer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_0_total != 0) {
for ($__section_customer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = 0; $__section_customer_0_iteration <= $__section_customer_0_total; $__section_customer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?>
<p>
  name: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['name'];?>
<br />
  home: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['home'];?>
<br />
  cell: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['cell'];?>
<br />
  e-mail: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['email'];?>

</p>
<?php
}
}
if ($__section_customer_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = $__section_customer_0_saved;
}
?>


 
 
<?php echo smarty_function_counter(array('start'=>0,'skip'=>2),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />




<?php }
/* smarty_template_function_menu_193362384263299819374676_89541044 */
if (!function_exists('smarty_template_function_menu_193362384263299819374676_89541044')) {
function smarty_template_function_menu_193362384263299819374676_89541044($_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
  <ul class="level<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$__foreach_entry_0_saved = $_smarty_tpl->tpl_vars['entry'];
?>
    <?php if (is_array($_smarty_tpl->tpl_vars['entry']->value)) {?>
      <li><?php echo $_smarty_tpl->tpl_vars['entry']->key;?>
</li>
      <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['entry']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

    <?php } else { ?>
      <li><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</li>
    <?php }?>
  <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </ul>
<?php
}}
/*/ smarty_template_function_menu_193362384263299819374676_89541044 */
}
