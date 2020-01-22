@if($setting_pdf_color->show)
<td class="border-bottom border-dark p-2">{{ (!is_null($item->product->color))? $item->product->color->name:'N/A' }}</td>
@endif