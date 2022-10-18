{{if isset($smarty.session.IS_LOGGED)}}
{include file="header.tpl"}
{foreach from=$toUpdate item=$product}
<form class="row g-3" action="edit/{$product->id}" method="POST">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Producto</label>
      <input name="p_name" value="{$product->p_name}" type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Precio</label>
      <input name="price" value="{$product->price}" type="number" class="form-control" id="inputPassword4">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Descripcion</label>
      <input name="p_description" value="{$product->p_description}" type="text" class="form-control" id="inputAddress">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Stock</label>
      <input name="stock" value="{$product->stock}" type="number" class="form-control" id="inputAddress2">

  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Categoria</label>
    <select name="id_category">
    {foreach from=$categories item=$category}
      <option value={$category->id_category}>{$category->c_name}</option>
    {{/foreach}}
    </select>
  </div>
{/foreach}
  <div class="col-12">
    <button type="sumbit "class="btn btn-primary">Editar</button>
  </div>
</form>
{include file="footer.tpl"}
{{/if}}