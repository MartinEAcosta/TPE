{include file="header.tpl"}
<div class="container text-center">
{foreach from=$detail item=$detailed}
  <div class="row">
    <div id="tittle_img" class="col align-self-start">
        <h1>{$detailed->p_name}</h1>
        <img src="{$detailed->img}"> 
    </div>
    <div class="col align-self-center">
      <p>{$detailed->p_description}</p>
      <p>Stock: {$detailed->stock}</p> 
    </div>
    <div class="col align-self-end">
      <p>Precio: ${$detailed->price}</p>
    </div>
  </div>
{/foreach}
</div>
{include file="footer.tpl"}