{include file="header.tpl"}
<table class='table'>
<thead>
    <tr>
        <th>Imagen</th>
        <th>Producto</th>
        <th>Caracteristicas</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>
</thead>
<tbody>
{foreach from=$category item=$product}
    <tr>
        <td><img src="{$product->img}" ></td>
        <td> <a href="product/{$product->id}">{$product->p_name}</a> </td>
        <td> {$product->p_description}</td>
        <td> {$product->price} </td>
        <td> {$product->stock} </td>
    </tr>
{/foreach}
</tbody>
</table>
{include file="footer.tpl"}