@props(['i', 'email'])
<li>
    <span class="key">{{ $i + 1 }}.</span>
    <div class="col-mail col-mail-1">
        <span class="title">{{ $email->name }}</span>
    </div>
    <div class="col-mail col-mail-2">
        <span class="subject">{{ Str::limit($email->message, 50) }}</span>
        <div class="date">{{ $email->created_at->format('F m') }}</div>
    </div>
</li>
