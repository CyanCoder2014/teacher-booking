
<form id="productForm" class="form-horizontal ng-pristine ng-valid" role="form" method="{{ $form->getMethod() }}" action="{{ $form->getUrlForm() }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        @foreach($form->getform() as $field)

            @if(isset($field['addable']) && $field['addable'])
                @include('formMaker.widgets.addable.'.$field['type'],['fiels' => $field,'value' => $form->getModel()->{$field['name']}??old($field['name']) ])
            @else
                @include('formMaker.widgets.'.$field['type'],['fiels' => $field,'value' => $form->getModel()->{$field['name']}??old($field['name'])])
            @endif
        @endforeach
    </div>
    <button type="submit" class="btn btn-success">Submit</button>

</form>

