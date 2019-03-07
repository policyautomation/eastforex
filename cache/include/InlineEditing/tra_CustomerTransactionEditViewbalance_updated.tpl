
{if strval($fields.balance_updated.value) == "1" || strval($fields.balance_updated.value) == "yes" || strval($fields.balance_updated.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.balance_updated.name}" value="0"> 
<input type="checkbox" id="{$fields.balance_updated.name}" 
name="{$fields.balance_updated.name}" 
value="1" title='' tabindex="1" {$checked} >