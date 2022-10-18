{include file="templates/header.tpl"}
<table class='table'>
<thead>
    <tr>
        <th>Imagen</th>
        <th>Producto</th>
        <th>Caracteristicas</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Categoria</th>
        {{if isset($smarty.session.IS_LOGGED)}}
            <th>Editar</th>
            <th>Eliminar</th>
        {{/if}}
    </tr>
</thead>
<tbody>
{foreach from=$products item=$product}
    <tr>
        <td><img src="{$product->img}" ></td>
        <td><a href="product/{$product->id}">{$product->p_name}</a></td>
        <td> {$product->p_description}</td>
        <td> {$product->price} </td>
        <td> {$product->stock} </td>
        <td> {$product->categoria}</td>
        {{if isset($smarty.session.IS_LOGGED)}}
            <td><a href="editform/{$product->id}">Editar</a></td>
            <td><a href="delete/{$product->id}">Eliminar</a></td>
        {{/if}}
    </tr>
{/foreach}
</tbody>
</table>

{include file="templates/footer.tpl"}