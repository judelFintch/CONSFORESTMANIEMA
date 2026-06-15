@if($type === 'embed')
<div class="rounded-2xl overflow-hidden shadow-xl aspect-video bg-black">
    <iframe
        src="{{ $article->embed_url }}"
        class="w-full h-full"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>
</div>
@elseif($type === 'file')
<div class="rounded-2xl overflow-hidden shadow-xl bg-black">
    <video controls class="w-full max-h-[560px]" preload="metadata">
        <source src="{{ Storage::url($article->video_file) }}">
        Votre navigateur ne supporte pas la lecture vidéo.
    </video>
</div>
@endif
