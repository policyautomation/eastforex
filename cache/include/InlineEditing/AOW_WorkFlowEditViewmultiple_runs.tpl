
{if strval($fields.multiple_runs.value) == "1" || strval($fields.multiple_runs.value) == "yes" || strval($fields.multiple_runs.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.multiple_runs.name}" value="0"> 
<input type="checkbox" id="{$fields.multiple_runs.name}" 
name="{$fields.multiple_runs.name}" 
value="1" title='' tabindex="1" {$checked} >