<div wire:ignore
    x-data
    x-init="
    const pond = FilePond.create($refs.input, {
        allowMultiple: {{ $attributes->has('multiple') ? 'true' : 'false' }},
        allowReorder: true,
        labelFileProcessing: 'Sedang Upload...',
        labelFileProcessingComplete: 'Upload Selesai',
        credits: false,
        required: {{ $attributes['required']==1 ? 'true' : 'false' }},
        server: {
            process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                @this.upload('{{ $attributes['wire:model'] }}', file, load, error, progress)
            },
            revert: (filename, load) => {
                @this.removeUpload('{{ $attributes['wire:model'] }}', filename, load)
            },
        },
        labelIdle: 'Upload File {{ $attributes['title'] }}', // Tambahkan properti labelIdle di sini
        allowImagePreview: {{ $attributes->has('allowFileTypeValidation') ? 'true' : 'false' }},
        imagePreviewMaxHeight: {{ $attributes->has('imagePreviewMaxHeight') ? $attributes->get('imagePreviewMaxHeight') : '256' }},
        allowFileTypeValidation: {{ $attributes->has('allowFileTypeValidation') ? 'true' : 'false' }},
        acceptedFileTypes: {!! $attributes->get('acceptedFileTypes') ?? 'null' !!},
        allowFileSizeValidation: {{ $attributes->has('allowFileSizeValidation') ? 'true' : 'false' }},
    });
    this.addEventListener('pondReset', e => {
        pond.removeFiles();
    });
    ">
    <input type="file" x-ref="input" {!! isset($attributes['accept']) ? 'accept="' . $attributes['accept'] . '"' : '' !!}>
</div>
