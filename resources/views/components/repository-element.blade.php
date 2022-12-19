<div class="element">
    <a class="principal" href="{{ $repository->url }}">{{ $repository->name }}</a>
    <ul class="stats">
        <li><i class="fa-regular fa-file-code"> <span>{{ $repository->language }}</span></i></li>
        <li><i class="fa-solid fa-star"></i> <span>{{ $repository->stars }}</span></li>
        <li><i class="fa-solid fa-code-fork"></i> <span>{{ $repository->forks }}</span></li>
    </ul>
</div>
