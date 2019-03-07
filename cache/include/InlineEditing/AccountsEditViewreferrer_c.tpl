
{if strlen($fields.referrer_c.value) <= 0}
{assign var="value" value=$fields.referrer_c.default_value }
{else}
{assign var="value" value=$fields.referrer_c.value }
{/if}  
<input type='text' name='{$fields.referrer_c.name}' 
    id='{$fields.referrer_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >