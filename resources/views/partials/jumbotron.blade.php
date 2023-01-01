<div class="jumbotron jumbo" 
@if (isset($jumbotronImage))
    style="background-image: url({{ asset($jumbotronImage) }});"
@else
    style="background-color: #336B87"
@endif
>
    <h1 class="display-4">{{ $title }}</h1>
</div>