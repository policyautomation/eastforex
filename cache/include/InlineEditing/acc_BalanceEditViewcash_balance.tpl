
{if strlen($fields.cash_balance.value) <= 0}
{assign var="value" value=$fields.cash_balance.default_value }
{else}
{assign var="value" value=$fields.cash_balance.value }
{/if}  
<input type='text' name='{$fields.cash_balance.name}' 
id='{$fields.cash_balance.name}' size='30' maxlength='26' value='{sugar_number_format var=$value}' title='' tabindex='1'
 >