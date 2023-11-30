@props([
    "id",
    "idPrefix",
    "show",
    "title"
])

<div class="accordion-item">
    <h2 class="accordion-header" id="{{$idPrefix}}_{{$id}}_header">
        <button class="accordion-button fs-4 fw-semibold {{($show ?? false) ? "" : "collapsed"}}" type="button" data-bs-toggle="collapse" data-bs-target="#{{$idPrefix}}_{{$id}}_body" aria-expanded="true"
                aria-controls="{{$idPrefix}}_{{$id}}_body">
            {{$title}}
        </button>
    </h2>
    <div id="{{$idPrefix}}_{{$id}}_body" class="accordion-collapse collapsed collapse {{($show ?? false) ? "show" : ""}}" aria-labelledby="{{$idPrefix}}_{{$id}}_header" data-bs-parent="#{{$idPrefix}}_{{$id}}">
        <div class="accordion-body">
            {{$slot}}
        </div>
    </div>
</div>
