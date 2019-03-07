
{if strlen($fields.address.value) <= 0}
{assign var="value" value=$fields.address.default_value }
{else}
{assign var="value" value=$fields.address.value }
{/if}  
<input type='text' name='{$fields.address.name}' 
    id='{$fields.address.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='Location address'  tabindex='1'      >