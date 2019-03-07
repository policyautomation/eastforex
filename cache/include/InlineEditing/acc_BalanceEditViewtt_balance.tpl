
{if strlen($fields.tt_balance.value) <= 0}
{assign var="value" value=$fields.tt_balance.default_value }
{else}
{assign var="value" value=$fields.tt_balance.value }
{/if}  
<input type='text' name='{$fields.tt_balance.name}' 
id='{$fields.tt_balance.name}' size='30' maxlength='26' value='{sugar_number_format var=$value}' title='' tabindex='1'
 >