<a href="{{ url('admin/employee/draft/crud/update-basic/update/'.$data['employee']?->uuid) }}" class="ps-2 pe-2 p-link"> {{pxLang($data['lang'],'nav.item1')}} </a>
<a href="{{ url('admin/employee/draft/crud/education/'.$data['employee']?->uuid) }}" class="ps-2 pe-2 p-link"> {{pxLang($data['lang'],'nav.item2')}} </a>
<a href="{{ url('admin/employee/draft/crud/leave/'.$data['employee']?->uuid) }}" class="ps-2 pe-2 p-link"> {{pxLang($data['lang'],'nav.item3')}} </a>
