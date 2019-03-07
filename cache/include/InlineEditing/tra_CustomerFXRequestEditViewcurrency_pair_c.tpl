
{if strlen($fields.currency_pair_c.value) <= 0}
{assign var="value" value=$fields.currency_pair_c.default_value }
{else}
{assign var="value" value=$fields.currency_pair_c.value }
{/if}  
<input type='text' name='{$fields.currency_pair_c.name}' 
    id='{$fields.currency_pair_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >