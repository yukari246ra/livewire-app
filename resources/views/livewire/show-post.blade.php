<div class="max-w-3xl mx-auto p-6">
    <div class="mb-6">
        <flux:button href="{{ route('posts') }}" wire:navigate icon="arrow-left" variant="subtle">
            一覧に戻る
        </flux:button>
    </div>

    <div class="mb-8 border-b border-slate-200 pb-6 dark:border-slate-700">
        <flux:heading size="lg" level="1" class="font-bold mb-4">
            {{ $post->title }}
        </flux:heading>

        <div class="flex items-center text-sm text-slate-500 gap-4 mb-2">
            <div class="flex item-center gap-1">
                <flux:icon.user class="w-4 h-4" />
                <span>{{ $post->user->name }}</span>
            </div>

            <div class="flex items-center gap-1">
                <flux:icon.calendar class="w-4 h-4" />
                <span>{{ $post->created_at->format('y/m/d') }}</span>
            </div>
        </div>
    </div>

    <div class="text-lg leading-relaxed text-slate-800 dark:text-slate-200 mt-5">
        {!! nl2br(e($post->body)) !!}
    </div>
</div>
