{include file="templates/header.tpl"}
<table class='table'>
<thead>
    <tr>
        <th>Imagen</th>
        <th>Producto</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Categoria</th>
    </tr>
</thead>
<tbody>
{foreach from=$products item=$product }
    <tr>
        <td> </td>
        <td> {$product->name} </td>
        <td> {$product->price} </td>
        <td> {$product->stock} </td>
    </tr>
{/foreach}
</tbody>
</table>

{include file="templates/footer.tpl"}