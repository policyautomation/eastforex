
{if strlen($fields.id_number.value) <= 0}
{assign var="value" value=$fields.id_number.default_value }
{else}
{assign var="value" value=$fields.id_number.value }
{/if}  
<input type='text' name='{$fields.id_number.name}' 
    id='{$fields.id_number.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >