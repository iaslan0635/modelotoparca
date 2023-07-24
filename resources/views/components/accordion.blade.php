@props([
    "id",
    "show",
    "title"
])

<div class="accordion-item">
    <h2 class="accordion-header" id="{{$id}}_header">
        <button class="accordion-button fs-4 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{$id}}_body" aria-expanded="true"
                aria-controls="{{$id}}_body">
            {{$title}}
        </button>
    </h2>
    <div id="{{$id}}_body" class="accordion-collapse collapse collapsed {{($show ?? false) ? "show" : ""}}" aria-labelledby="{{$id}}_header" data-bs-parent="#{{$id}}">
        <div class="accordion-body">
            {{$slot}}
        </div>
    </div>
</div>
