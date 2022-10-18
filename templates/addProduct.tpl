{{if isset($smarty.session.IS_LOGGED)}}
{include file="header.tpl"}
  {foreach from=$products item=$product}
  <form action="add" method="POST">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Producto</label>
      <input name="p_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insertar nuevo producto" required>

      <label for="exampleFormControlInput1" class="form-label">Valor</label>
      <input name="price" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Insertar precio" required>
      

      <label for="exampleFormControlInput1" class="form-label">Stock</label>
      <input name="stock" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Insertar cantidad en inventario" required>

      <label for="exampleFormControlInput1" class="form-label">Categoria</label>
      <select name="id_category" required>
      {foreach from=$categories item=$category}
        <option value={$category->id_category}>{$category->c_name}</option>
      {/foreach}
      </select>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
      <textarea name="p_description" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
      {break}
  {/foreach}
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>
{include file="footer.tpl"}
{{/if}}