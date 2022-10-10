{include file="templates/header.tpl"}
 {if $user=true } 
  {foreach from=$products item=$product}
    
  
  <form action="add" method="POST">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Producto</label>
      <input name="nameProd" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insertar nuevo producto">

      <label for="exampleFormControlInput1" class="form-label">Valor</label>
      <input name="priceProd" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Insertar precio">
      

      <label for="exampleFormControlInput1" class="form-label">Stock</label>
      <input name="stockProd" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Insertar cantidad en inventario">

      <label for="exampleFormControlInput1" class="form-label">Categoria</label>
      {foreach from=$categories item=$category}
      <select name="catProd"> 
        <option selected value={$category->c_name}>{$category->id_category}</option>
      </select>
      {/foreach}
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
      <textarea name="descProd" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>
  {break}
{/foreach}
{/if}
{include file="templates/footer.tpl"}
